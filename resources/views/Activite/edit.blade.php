@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Modifier une activite
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('activites.update', $activite->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Titre</label>
                                <input type="text" name="titre" id="titre" class="form-control" value="{{ $activite->titre }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control" value="{{ $activite->description}}" required>
                            </div>
                           
                            <div class="col-lg-4 col-md-6 col-sm-12">                                
                                <select class="form-control show-tick">
                                    <option selected>-- Selectionner un club --</option>
                                    @foreach ($clubs  as $club)
                                     <option value="{{$club->id}}">{{$club->nom}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @extends('layouts.app') 

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Modifier une activite
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('activites.update', $club->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Titre</label>
                                <input type="text" name="titre" id="titre" class="form-control" value="{{ $activite->titre }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Email</label>
                                <input type="text" name="description" id="description" class="form-control" value="{{ $activite->description}}" required>
                            </div>
                           
                            <div class="col-lg-4 col-md-6 col-sm-12">                                
                                <select class="form-control show-tick">
                                    <option selected>-- Club --</option>
                                    @foreach ($clubs  as $club)
                                     <option value="{{$club->id}}">{{$club->nom}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}