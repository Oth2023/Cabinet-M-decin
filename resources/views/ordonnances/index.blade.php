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
                        <th scope="col">Medcin</th>
                        <th scope="col">Patinet</th>
                       
                        <th scope="col">Date Ordonnance</th>
                        <th scope="col"> Description</th>
                        <th scope="col">Action </th>
                     
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ordonnances as $ord)
                    <tr>
                        <td>{{ $ord->medecins ? $ord->medecins->id_medecin : '-' }}</td>
                        <td>{{ $ord->patients ? $ord->patients->id_patient : '-' }}</td>
                        <td>{{$ord->date_ordonnance}}</td>
                        <td>{{$ord->description}}</td>

                        <td>
                            <a href="{{ route('ordonnances.show', $ord->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('ordonnances.edit', $ord->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('ordonnances.destroy', $ord->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce ordonnances ?')">Supprimer</button>
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
