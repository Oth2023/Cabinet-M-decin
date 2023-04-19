@extends('welcome')


@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Liste Medecin</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Email</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Date naissance</th>
                        <th scope="col"> Specialite</th>
                        <th scope="col">Action </th>
                     
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medecins as $med)
                    <tr>
                        <td>{{$med->nom}}</td>
                        <td>{{$med->prenom}}</td>
                        <td>{{$med->sexe}}</td>
                        <td>{{$med->adresse}}</td>
                        <td>{{$med->date_naissance}}</td>
                        <td>{{$med->téléphone}}</td>
                        <td>{{$med->email}}</td>
                        <td>{{$med->specialite}}</td>
                        <td>
                            <a href="{{ route('medecins.show', $med->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('medecins.edit', $med->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('medecins.destroy', $med->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce medecins ?')">Supprimer</button>
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
