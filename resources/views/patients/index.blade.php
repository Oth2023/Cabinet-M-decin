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
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Date naissance</th>
                            <th scope="col">Sexe</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Email</th>
                            <th scope="col"> Antecedents medicaux</th>
                            <th scope="col"> Allergies </th>
                            <th scope="col">Action </th>

                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $pat)
                            <tr>
                                <td>{{ $pat->nom }}</td>
                                <td>{{ $pat->prenom }}</td>
                                <td>{{ $pat->date_naissance }}</td>
                                <td>{{ $pat->sexe }}</td>
                                <td>{{ $pat->ville }}</td>
                                <td>{{ $pat->téléphone }}</td>
                                <td>{{ $pat->adresse }}</td>
                                <td>{{ $pat->email }}</td>
                                <td>{{ $pat->antecedents_paticaux }}</td>
                                <td>{{ $pat->allergies }}</td>
                                <td></td>

                            </tr>
                        @endforeach
                 


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
