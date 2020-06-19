@extends('dashboard.layout')

@section('content_dashboard')



    @include('partials.messageUpdate', ['url' => route('admin.modifs')])
    @include('partials.message', ['url' => route('admin.refuse')])
    @include('partials.alerts', ['title' => 'Plantes à valider'])




    <div class="container-fluid">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
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
                                <tr class="item{{$herb->id}}">
                                <tr>
                                    <td class="@if($herb->validated == -1)
                                        invalidColor
                                    @endif">
                                        {{ $herb->id }}
                                    </td>
                                    <td class=" @if($herb->validated == -1)
                                        invalidColor
                                    @endif">
                                        {{ $herb->name }}
                                    </td>
                                    <td class=" @if($herb->validated == -1)
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
                                        <a class="btn btn-success btn-sm" href="{{ route('admin.approve', $herb->id) }}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-danger btn-sm" href="#" role="button" data-id="{{ $herb->id }}" data-toggle="tooltip" title="Refuser la plante">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <a class="btn btn-warning btn-sm" href="#" role="button" data-id="{{ $herb->id }}" data-toggle="tooltip" title="Modifier la plante">
                                            <i class="fas fa-eye" style="color:white"></i>
                                        </a>
                                        <button class="btn btn-secondary btn-sm edit-modal" role="button" data-id="{{ $herb->id }}" data-name="{{$herb->name}}" data-sciname="{{$herb->sciname}}" data-toggle="tooltip" title="editeur rapide">
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
                                    <label class="control-label col-sm-2" for="id">ID:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fid" disabled>
                                    </div>
                                </div>
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="n">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sciname">Sciname:</label>
                                <div class="col-sm-10">
                                    <input type="sciname" class="form-control" id="s">
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn actionBtn" data-dismiss="modal">
                                <span id="footer_action_button" class='glyphicon'> <i class="fa fa-save"></i> </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('partials.script')
@endsection






