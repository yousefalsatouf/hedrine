@extends('dashboard.layout')

@section('content_dashboard')
    @include('partials.messageRefuse')
    @include('partials.messageUpdate')
    @include('partials.quickEdit')
    <div class="container-fluid">
            <div class="col-12">
                <div class="table responsive">
                    {{ csrf_field() }}
                    <h3 class="text-success"><b><i class="fas fa-seedling mr-2" style="color: seagreen"></i> Plante ajoutée</b> </h3>
                    <br>
                    <table id="valid-form" class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            {{--<th scope="col">Genre</th>--}}
                            <th scope="col">Name</th>
                            <th scope="col">Sciname</th>
                            <th scope="col">herb Forms</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($noValidHerbs as $herb)
                            <tr class={{$herb->validated == -1? "text-info text-bolder":"text-dark"}}>
                                <td>{{$herb->id}}</td>
                                <td>{{$herb->name}}</td>
                                <td>{{$herb->sciname}}</td>
                                <td>
                                    <select class="form-control herbForm selectpicker" id="temporary-forms" multiple disabled>
                                        @foreach($herb->herb_forms as $form)
                                            <option style="color:black" selected>{{ $form->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>{{$herb->user->name.' '.$herb->user->firstname}}</td>
                                <td>{{Carbon\Carbon::parse($herb->updated_at)->diffForHumans()}}</td>
                                <td class="">
                                    <a class="btn btn-outline-success text-success btn-sm" data-url="{{ route('admin.approve') }}" data-id="{{$herb->id}}" data-typeid="{{$herb->type_id}}" data-title="{{$herb->type_field}}" data-value="{{$herb->new_value}}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                        <i class="fas fa-thumbs-up"></i>
                                    </a>
                                    <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                    <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $herb->id }}" data-user={{$herb->user->id}} data-toggle="tooltip" title="Refuser la plante">
                                        <i class="fas fa-thumbs-down"></i>
                                    </a>
                                    <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-outline-secondary btn-sm edit-modal" role="button" data-id="{{ $herb->id }}" data-name="{{$herb->name}}" data-sciname="{{$herb->sciname}}" data-toggle="tooltip" title="editeur rapide">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button"  data-id="{{ $herb->id }}" data-user={{$herb->user->id}} data-toggle="tooltip" title="Modifier la plante">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <small class="d-flex justify-content-end">{{$noValidHerbs->links()}}</small>
                    <br>
                    <h3 class="text-danger"><b><i class="fas fa-seedling mr-2" style="color: red"></i> Plante Modifiée</b></h3>
                    <br>
                    <table id="valid-form" class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                {{--<th scope="col">Genre</th>--}}
                                <th scope="col">Titre</th>
                                <th scope="col">Valeur d'origine</th>
                                <th scope="col">Nouvelle valeur</th>
                                <th scope="col">Auteur</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($noValidHerbsModified as $herb)
                                <tr class={{$herb->validated == -1? "text-info text-bolder":"text-dark"}}>
                                    <td>{{$herb->type_id}}</td>
                                    {{--<td>{{$herb->type_table}}</td>--}}
                                    <td>{{$herb->type_field}}</td>
                                    <td>{{$herb->original_value}}</td>
                                    <td>{{$herb->new_value}}</td>
                                    <td>{{$herb->author}}</td>
                                    <td>{{Carbon\Carbon::parse($herb->updated_at)->diffForHumans()}}</td>
                                    <td class="">
                                        <a class="btn btn-outline-success text-success btn-sm" data-url="{{ route('admin.approve') }}" data-temporary="temporary" data-title="{{$herb->type_field}}" data-value="{{$herb->new_value}}" data-id="{{$herb->id}}"  data-typeid="{{$herb->type_id}}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $herb->id }}" data-temporary="temporary" data-user={{$herb->author_id}} data-toggle="tooltip" title="Refuser la plante">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-outline-secondary btn-sm edit-modal-temporary" role="button" data-temporary="temporary" data-id="{{ $herb->id }}" data-title="{{$herb->type_field}}" data-original="{{$herb->original_value}}" data-new="{{$herb->new_value}}" data-toggle="tooltip" title="editeur rapide">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button" data-id="{{ $herb->id }}" data-temporary="temporary" data-user={{$herb->author_id}} data-toggle="tooltip" title="Modifier la plante">
                                            <i class="fas fa-paper-plane"></i>
                                        </a>
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






