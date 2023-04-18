@extends('welcome')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Liste PAtinet</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col"> Medecin</th>
                        <th scope="col">Date Rendez Vous</th>
                        <th scope="col">Heure </th>
                        <th scope="col">Motif </th>
                        <th scope="col">Type Rendez Vous </th>
                     
                        <th scope="col">Action </th>

                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rendezVous as $rend)
                        <tr>
                            <td>{{ $rend->medecins ? $rend->medecins->id_medecin : '-' }}</td>
                            <td>{{ $rend->date_rendezVous }}</td>
                            <td>{{ $rend->heure }}</td>
                            <td>{{ $rend->motif }}</td>
                            <td>{{ $rend->type_rendezVous }}</td>
                       
                            <td></td>

                        </tr>
                    @endforeach
             


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection