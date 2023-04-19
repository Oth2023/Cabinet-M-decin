@extends('welcome')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Liste Cabinets</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Email</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Téléphone Fix</th>
                        <th scope="col"> Description</th>
                        <th scope="col">Action </th>
                     
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cabinets as $cab)
                    <tr>
                        <td>{{$cab->nom}}</td>
                        <td>{{$cab->adresse}}</td>
                        <td>{{$cab->date_naissance}}</td>
                        <td>{{$cab->téléphone}}</td>
                        <td>{{$cab->téléphone_fix}}</td>
                        <td>{{$cab->email}}</td>
                        <td>{{$cab->description}}</td>
                        <td>
                            <a href="{{ route('cabinets.show', $cab->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('cabinets.edit', $cab->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('cabinets.destroy', $cab->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce cabinets ?')">Supprimer</button>
                    </form>
                        </td>
                   
                     </tr>
                    @endforeach
                
                 
                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection