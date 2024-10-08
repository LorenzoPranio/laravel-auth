@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Modifica Progetto</h2>
            </div>

            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST"  enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-12">
                            <label class="control-label">Nome Progetto</label>
                            <input type="text" name="name" class="form-control form-control-sm"
                                value="{{ old('name', $project->name) }}" placeholder="Nome Progetto">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">Descrizione Progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm">{{ old('summary', $project->summary) }}</textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-primary">Aggiorna</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection