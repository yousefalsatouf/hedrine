@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'Plantes en Ettente'])
    @include('partials.table-add-del-view', ['noAdd' => true])
@endsection

@section('script')
    @include('partials.script-add-del-view')
@endsection
