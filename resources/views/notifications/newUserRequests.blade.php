@extends('dashboard.layout')

@section('content_dashboard')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th> Name </th>
                            <th> Team </th>
                            <th> Email </th>
                            <th> Tel 1 </th>
                            <th> Tel 2 </th>
                            <th> Email verified </th>
                            <th> Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse (isset($singleNewUser)&&$singleNewUser?$singleNewUser:$allNewUsers as $user)
                            <tr>
                                <td>
                                    <strong class="text-success">{{$user->name}} {{$user->firstname}}</strong>
                                </td>
                                <td>
                                    <strong>{{$user->team}}</strong>
                                </td>
                                <td>
                                    <strong>{{$user->email}}</strong>
                                </td>
                                <td>
                                    <strong>{{$user->tel1}}</strong>
                                </td>
                                <td>
                                    <strong>{{$user->tel2}}</strong>
                                </td>
                                <td>
                                    @if ($user->email_verified_at)
                                        <strong><i class="fa fa-check-circle text-success"></i> Oui</strong>
                                    @else
                                        <strong><i class="fa fa-cross text-danger"></i> No</strong>
                                    @endif
                                </td>
                                <td class="d-flex justify-content-around">
                                    <a href="{{route('activeUser', $user->id)}}" title="accept user request" role="button" class="accept"><i class="far fa-thumbs-up text-success"></i></a>
                                    <a href="{{route('denyUser', $user->id)}}" title="deny user request" role="button" class="accept"><i class="far fa-thumbs-down text-danger"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    <strong class="text-success"> <i class="fas fa-check-circle"></i> OK for user request</strong>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
