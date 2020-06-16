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
