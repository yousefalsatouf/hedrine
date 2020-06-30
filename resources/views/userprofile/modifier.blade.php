@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'Plantes à modifier'])
    @include('partials.table-add-del-view', ['edit' => false])
@endsection

@section('script')
   /* @include('partials.script-add-del-view')*/
@endsection
