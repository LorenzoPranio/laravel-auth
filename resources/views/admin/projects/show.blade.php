@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-bolder">{{ $project->name }}</h2>
                <p><strong>Descrizione del progetto</strong></p>
                <p>{{ $project->summary }}</p>
                <img class="cover-image" src="{{ asset('./storage/' . $project->project_image) }}" alt="{{ $project->name}}">
            </div>
        </div>
    </div>
@endsection