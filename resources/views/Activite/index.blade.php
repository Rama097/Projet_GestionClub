@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des activites
                        <a href="{{ route('activites.create') }}" class="btn btn-primary float-right">Ajouter une activite</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Clubs</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($activites as $activite)
                                    <tr>
                                        <td>{{ $activite->titre }}</td>
                                        <td>{{ $activite->description }}</td>
                                        <td>{{ $activite->club_id }}</td>
                                        
                                        <td>
                                            <a href="{{ route('activites.edit', $activite->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                                            <form action="{{ route('activites.destroy', $activite->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Aucune activite trouvée.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
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
                        Liste des activites
                        <a href="{{ route('activite.create') }}" class="btn btn-primary float-right">Ajouter une activite</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($activites as $activite)
                                    <tr>
                                        <td>{{ $activite->titre }}</td>

                                        <td>{{ $activite->description }}</td>
                                        <td>{{ $activite->club_id }}</td>
                                        
                                        <td>
                                            <a href="{{ route('activites.edit', $activite->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                                            <form action="{{ route('activites.destroy', $activite->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Aucune activite trouvée.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  --}}