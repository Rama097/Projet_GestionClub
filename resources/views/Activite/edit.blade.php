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
                                <select name="club_id" class="form-control show-tick">
                                   
                                    @foreach ($clubs  as $club)
                                    @if ($activite->club_id==$club->id)
                                    <option value="{{$club->id}}" selected>{{$club->nom}}</option>
                                    @endif
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
