@extends('dashboard.layout')

@section('content_dashboard')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Long name</th>
                            <th>Note</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->unreadNotifications as $notification)
                            <tr>
                                <td>
                                    {{ $notification->data['name'] }}
                                </td>
                                <td>
                                    {{ $notification->data['long_name'] }}
                                </td>
                                <td>
                                    {{ $notification->data['note'] }}
                                </td>
                                <td>
                                    <form action="{{ route('notification.update', $notification->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="submit" class="btn btn-success btn-sm" value="valider">
                                    </form>
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
