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
                        <td>{{$med->sexe}}</td>
                        <td>{{$med->adresse}}</td>
                        <td>{{$med->date_naissance}}</td>
                        <td>{{$med->téléphone}}</td>
                        <td>{{$med->email}}</td>
                        <td>{{$med->specialite}}</td>
                        <td></td>
                   
                     </tr>
                    @endforeach
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>01 Jan 2045</td>
                        <td>INV-0123</td>
                        <td>Jhon Doe</td>
                        <td>$123</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                    </tr>
                 
                
                </tbody>
            </table>
        </div>
    </div>
</div>
 
@endsection