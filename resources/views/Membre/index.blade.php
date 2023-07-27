@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des membres
                        <a href="{{ route('membres.create') }}" class="btn btn-primary float-right">Ajouter un membre</a>
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
                                    <th>Club</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($membres as $membre)
                                    <tr>
                                        <td>{{ $membre->nom }}</td>
                                        <td>{{ $membre->email }}</td>
                                        <td>{{ $membre->club_id }}</td>
                                        
                                        <td>
                                            <a href="{{ route('membres.edit', $membre->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                                            <form action="{{ route('membres.destroy', $membre->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Aucun membre trouvé.</td>
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