@extends('dashboard.layout')

@section('content_dashboard')

    @include('partials.message')
    @include('partials.messageUpdate')
    @include('partials.alerts', ['title' => 'Plantes à valider'])



    <div class="container-fluid">

            <div class="col-12">
                <div class="table responsive">
                    <table id="valid-form" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">SciName</th>
                                <th scope="col">Author</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($noValidCount as $herb)

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
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
@endsection

@section('script')
    @include('partials.script')
@endsection






