@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'Annonces actives'])
    @include('partials.table-add-del-view', ['edit' => true])
@endsection

@section('script')
    @include('partials.script-add-del-view')
@endsection
