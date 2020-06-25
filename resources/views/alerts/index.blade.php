@extends('dashboard.layout')

@section('content_dashboard')
    @include('partials.messageRefuse')
    @include('partials.messageUpdate')

    <div class="container-fluid">
            <div class="col-12">
                <div class="table responsive">
                    {{ csrf_field() }}
                    <table id="valid-form" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">SciName</th>
                                <th scope="col">Author</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($noValidCount as $herb)
                                <tr>
                                <tr>
                                    <td class="@if($herb->validated == -1)
                                        invalidColor
                                    @endif">
                                        {{ $herb->id }}
                                    </td>
                                    <td class="herb-name-{{$herb->id}} @if($herb->validated == -1)
                                        invalidColor
                                    @endif">
                                        {{ $herb->name }}
                                    </td>
                                    <td class="herb-sciname-{{$herb->id}} @if($herb->validated == -1)
                                        invalidColor
                                    @endif">
                                        {{ $herb->sciname }}
                                    </td>
                                    <td class=" @if($herb->validated == -1)
                                        invalidColor
                                    @endif">
                                        {{ $herb->user->name }}
                                    </td>
                                    <td class=" @if($herb->validated == -1)
                                        invalidColor
                                    @endif">
                                        {{ date_create($herb->created_at)->format('d-m-Y') }}
                                    </td>
                                    <td class="">
                                        <a class="btn btn-success text-light btn-sm" data-url="{{ route('admin.approve') }}" data-id="{{$herb->id}}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-danger btn-sm" href="#" role="button" data-id="{{ $herb->id }}" data-toggle="tooltip" title="Refuser la plante">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <a class="btn btn-warning btn-sm" href="#" role="button" data-url="{{route('admin.modifs')}}" data-id="{{ $herb->id }}" data-toggle="tooltip" title="Modifier la plante">
                                            <i class="fas fa-eye" style="color:white"></i>
                                        </a>
                                        <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-secondary btn-sm edit-modal" role="button" data-id="{{ $herb->id }}" data-name="{{$herb->name}}" data-sciname="{{$herb->sciname}}" data-toggle="tooltip" title="editeur rapide">
                                            <i class="fas fa-edit" style="color:white"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title">Veilliez entrez:</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label col-sm-2 text-success" for="id">ID:</label>
                                    <div class="col-sm-10">
                                        <input type="text" style="border: 0;border-bottom: 1px solid green"  class="form-control" id="fid" disabled>
                                    </div>
                                </div>
                                <label class="control-label col-sm-2 text-success" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" style="border: 0;border-bottom: 1px solid green"  class="form-control" id="n">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 text-success" for="sciname">Sciname:</label>
                                <div class="col-sm-10">
                                    <input type="text" style="border: 0;border-bottom: 1px solid green"  class="form-control" id="s">
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" style="border: 0;border-bottom: 1px solid green"   class="btn actionBtn">
                                <span id="footer_action_button" class='glyphicon'>
                                    <i id="edit" class="fa fa-save"></i>
                                    <i id="icon-edit" class="fas fa-spinner fa-pulse" style="display: none"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 {{--['url' => route('admin.refuse')]['url' => route('admin.modifs')]--}}






