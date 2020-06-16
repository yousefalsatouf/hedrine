@extends('dashboard.layout')

@section('content_dashboard')

@include('partials.message', ['url' => route('admin.refuse')])
@include('partials.alerts', ['title' => 'Plantes à valider'])


    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div  class="table-responsive">
                    @csrf
                    <table id="editable" class="table">
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
                                    <td>
                                        {{ $herb->id }}
                                    </td>
                                    <td>
                                        {{ $herb->name }}
                                    </td>
                                    <td >
                                        {{ $herb->sciname }}
                                    </td>
                                    <td>
                                        {{ $herb->user->name }}
                                    </td>
                                    <td>
                                        {{ $herb->created_at }}
                                    </td>
                                    <td class="">
                                        <a class="btn btn-success btn-sm" href="{{ route('admin.approve', $herb->id) }}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-danger btn-sm" href="#" role="button" data-id="{{ $herb->id }}" data-toggle="tooltip" title="Refuser la plante">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <a class="btn btn-warning btn-sm" href="#" role="button" data-id="{{ $herb->id }}" data-toggle="tooltip" title="Refuser la plante">
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
    </div>
@endsection
@section('script')
    @include('partials.script')
@endsection
