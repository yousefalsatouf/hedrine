@extends('dashboard.layout')

@section('content_dashboard')
    @include('partials.messageRefuse')
    @include('partials.messageUpdate')
    @include('partials.quickEdit')
    <div class="container-fluid">
            <div class="col-12">
                <div class="table responsive">
                    {{ csrf_field() }}
                    <h3 class="text-secondary"><b><i class="fas fa-seedling mr-2" style="color: seagreen"></i> Nouvelle Plante</b> </h3>
                    <hr>
                    <table id="valid-form" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Valeur</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($noValidHerbs as $herb)
                            <tr class={{$herb->validated == -1? "invalidColor":""}}>
                                <td>{{$herb->id}}</td>
                                <td>{{$herb->type_table}}</td>
                                <td>{{$herb->type_field}}</td>
                                <td>{{$herb->new_value}}</td>
                                <td>{{$herb->author}}</td>
                                <td>{{Carbon\Carbon::parse($herb->created_at)->diffForHumans()}}</td>
                                <td class="">
                                    <a class="btn btn-success text-light btn-sm" data-url="{{ route('admin.approve') }}" data-id="{{$herb->id}}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                        <i class="fas fa-thumbs-up"></i>
                                    </a>
                                    <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                    <a class="btn btn-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $herb->id }}" data-user={{$herb->author_id}} data-toggle="tooltip" title="Refuser la plante">
                                        <i class="fas fa-thumbs-down"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm modify-modal" href="#" role="button"  data-id="{{ $herb->id }}" data-user={{$herb->author_id}} data-toggle="tooltip" title="Modifier la plante">
                                        <i class="fas fa-eye" style="color:white"></i>
                                    </a>
                                    <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-secondary btn-sm edit-modal" role="button" data-id="{{ $herb->id }}" data-title="{{$herb->new_value}}" data-toggle="tooltip" title="editeur rapide">
                                        <i class="fas fa-edit" style="color:white"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <small class="d-flex justify-content-end">{{$noValidHerbs->links()}}</small>
                    <h3 class="text-danger"><b><i class="fas fa-seedling mr-2" style="color: seagreen"></i> Plante Modifiée</b></h3>
                    <hr>
                    <table id="valid-form" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Valeur origin</th>
                                <th scope="col">Nouvelle valeur</th>
                                <th scope="col">Auteur</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($noValidHerbsModified as $herb)
                                <tr class={{$herb->validated == -1? "invalidColor":""}}>
                                    <td>{{$herb->id}}</td>
                                    <td>{{$herb->type_table}}</td>
                                    <td>{{$herb->type_field}}</td>
                                    <td>{{$herb->original_value}}</td>
                                    <td>{{$herb->new_value}}</td>
                                    <td>{{$herb->author}}</td>
                                    <td>{{Carbon\Carbon::parse($herb->created_at)->diffForHumans()}}</td>
                                    <td class="">
                                        <a class="btn btn-success text-light btn-sm" data-url="{{ route('admin.approve') }}" data-id="{{$herb->id}}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $herb->id }}" data-user={{$herb->author_id}} data-toggle="tooltip" title="Refuser la plante">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <a class="btn btn-warning btn-sm modify-modal" href="#" role="button"  data-id="{{ $herb->id }}" data-user={{$herb->author_id}} data-toggle="tooltip" title="Modifier la plante">
                                            <i class="fas fa-eye" style="color:white"></i>
                                        </a>
                                        <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-secondary btn-sm edit-modal" role="button" data-id="{{ $herb->id }}" data-title="{{$herb->new_value}}" data-toggle="tooltip" title="editeur rapide">
                                            <i class="fas fa-edit" style="color:white"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <small class="d-flex justify-content-end">{{$noValidHerbsModified->links()}}</small>
                </div>
            </div>
        </div>
    </div>
@endsection
 {{--['url' => route('admin.refuse')]['url' => route('admin.modifs')]--}}






