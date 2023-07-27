@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Modifier un membre
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('membres.update', $club->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="nom" id="nom" class="form-control" value="{{ $membre->nom }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $membre->email}}" required>
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