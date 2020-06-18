@extends('dashboard.layout')

@section('content_dashboard')

    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $herb->name }}
            </div>
            <div class="card-body">
                <hr>
                <p><u>Nom scientifique : </u></p>
                <p class="card-text">{{ $herb->sciname }}</p>
            </div>
        </div>
    </div>

@endsection
