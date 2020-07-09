@extends('dashboard.layout')

@section('content_dashboard')
    @include('partials.message_refuse_drug')
    @include('partials.messageUpdateDrug')
    @include('partials.drugEdit')
    <div class="container-fluid">
            <div class="col-12">
                <div class="table responsive">
                    {{ csrf_field() }}
                    <h3 class="text-secondary"><b><i class="fas fa-seedling mr-2"></i>DCI ajouté</b> </h3>
                    <br>
                    <table id="valid-form" class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            {{--<th scope="col">Genre</th>--}}
                            <th scope="col">Name</th>
                            <th scope="col">Famille</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($noValidDrugs as $drug)
                            <tr class={{$drug->validated == -1? "text-info text-bolder":"text-dark"}}>
                                <td>{{$drug->id}}</td>
                                <td>{{$drug->name}}</td>
                                <td>{{ optional($drug->drug_family)->name }}</td>
                                <td>{{$drug->user->name.' '.$drug->user->firstname}}</td>
                                <td>{{Carbon\Carbon::parse($drug->updated_at)->diffForHumans()}}</td>
                                <td class="">
                                    <a class="btn btn-outline-success text-success btn-sm approve" data-url="{{ route('admin.approve_drug') }}" data-id="{{$drug->id}}" data-typeid="{{$drug->type_id}}" data-title="{{$drug->type_field}}" data-value="{{$drug->new_value}}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                        <i class="fas fa-thumbs-up"></i>
                                    </a>
                                    <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                    <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $drug->id }}" data-user={{$drug->user->id}} data-toggle="tooltip" title="Refuser la plante">
                                        <i class="fas fa-thumbs-down"></i>
                                    </a>
                                    <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-outline-secondary btn-sm edit-modal" role="button" data-id="{{ $drug->id }}" data-name="{{$drug->name}}" data-sciname="{{$drug->sciname}}" data-toggle="tooltip" title="editeur rapide">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button"  data-id="{{ $drug->id }}" data-user={{$drug->user->id}} data-toggle="tooltip" title="Modifier la plante">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <br>
                    <h3 class="text-danger"><b><i class="fas fa-seedling mr-2" style="color: red"></i> DCI Modifié</b></h3>
                    <br>
                    <table id="valid-form" class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                {{--<th scope="col">Genre</th>--}}
                                <th scope="col">Nom</th>
                                <th scope="col">Valeur d origine</th>
                                <th scope="col">Nouvelle valeur</th>
                                <th scope="col">Auteur</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($noValidDrugsModified as $drug)
                                <tr class={{$drug->validated == -1? "text-info text-bolder":"text-dark"}}>
                                    <td>{{$drug->type_id}}</td>
                                    <td>{{$drug->type_field}}</td>
                                    @if($drug->type_field === "drug_forms")
                                        @php
                                            $drugForm = \Illuminate\Support\Facades\DB::table('drugs')->where('id', $drug->type_id)->get();
                                        @endphp
                                        <td>
                                            just for test
                                            {{--<select class="form-control drugForm selectpicker" id="temporary-forms" multiple disabled>
                                                @foreach($drugForm->drug_forms as $form)
                                                    <option style="color:black" selected>{{ $form->name }}</option>
                                                @endforeach
                                            </select>--}}
                                        </td>
                                        <td>
                                            just for test
                                            {{--<select class="form-control drugForm selectpicker" id="temporary-forms" multiple disabled>
                                                @foreach($noValiddrugsModified->drug_forms_temporary as $form)
                                                    <option style="color:black" selected>{{ $form->name }}</option>
                                                @endforeach
                                            </select>--}}
                                        </td>
                                    @else
                                        <td>{{$drug->original_value}}</td>
                                        <td>{{$drug->new_value}}</td>
                                    @endif
                                    <td>{{$drug->author}}</td>
                                    <td>{{Carbon\Carbon::parse($drug->updated_at)->diffForHumans()}}</td>
                                    <td class="">
                                        <a class="btn btn-outline-success text-success btn-sm approve" data-url="{{ route('admin.approve') }}" data-temporary="temporary" data-title="{{$drug->type_field}}" data-value="{{$drug->new_value}}" data-id="{{$drug->id}}"  data-typeid="{{$drug->type_id}}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $drug->id }}" data-temporary="temporary" data-user={{$drug->author_id}} data-toggle="tooltip" title="Refuser la plante">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-outline-secondary btn-sm edit-modal-temporary" role="button" data-temporary="temporary" data-id="{{ $drug->id }}" data-title="{{$drug->type_field}}" data-original="{{$drug->original_value}}" data-new="{{$drug->new_value}}" data-toggle="tooltip" title="editeur rapide">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button" data-id="{{ $drug->id }}" data-temporary="temporary" data-user={{$drug->author_id}} data-toggle="tooltip" title="Modifier la plante">
                                            <i class="fas fa-paper-plane"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <small class="d-flex justify-content-end">{{$noValidDrugsModified->links()}}</small>
                </div>
            </div>
        </div>
    </div>
@endsection
 {{--['url' => route('admin.refuse')]['url' => route('admin.modifs')]--}}






