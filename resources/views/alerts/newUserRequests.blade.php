@extends('dashboard.layout')

@section('content_dashboard')
    <div class="container-fluid">
        @if(session()->has('msg'))
            <div class="alert alert-success bg-gradient-green alert-message w-25" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong><i class="fas fa-check-circle"></i> {{ session()->get('msg') }}</strong>
            </div>
        @endif
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
                            <th> Activate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($allNewUsers as $user)
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
                                <td style="width: 10%">
                                    <div>
                                        <a class="btn btn-outline-success" href="{{route('activeUser', $user->id)}}" role="button"><i class="fas fa-check"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    <strong class="text-danger">No user requests for the moment</strong>
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
