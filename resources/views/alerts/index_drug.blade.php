@extends('dashboard.layout')

@section('content_dashboard')

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Family Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($noValidCount as $herb)
                                <tr>
                                    <td>
                                        {{ $herb->name }}
                                    </td>
                                    <td>
                                        {{ $herb->sciname }}
                                    </td>
                                    <td class="float-right">
                                        <a class="btn btn-primary btn-sm" href="{{ route('herb.show', $herb->id) }}" target="_blank" role="button" data-toggle="tooltip" title="Voir la plante">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-success btn-sm" href="{{ route('admin.approve', $herb->id) }}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-danger btn-sm" href="#" role="button" data-id="{{ $herb->id }}" data-toggle="tooltip" title="Refuser la plante">
                                            <i class="fas fa-thumbs-down"></i>
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
