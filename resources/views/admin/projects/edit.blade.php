@extends('layouts.dashboard')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Modifica progetto</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <label for="" class="control-label">Nome progetto</label>
                            <input type="text" id="" class="form-control form-control-sm" name="name" placeholder="Nome progetto">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">Sommario progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection