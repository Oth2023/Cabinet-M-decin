@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter Patient</h6>
            <form action="{{ route('patients.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom">
                </div>
                <div class=" mb-3">
                    <label class="col-sm-2 col-label-form"> Sexe</label>
                    <div class="col-sm-10">
                        <select name="sexe" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="date_naissance" class="form-label"> Date naissance</label>
                    <input type="date" name="date_naissance" class="form-control" id="date_naissance">

                </div>
                <div class="mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" name="ville" class="form-control" id="ville">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="adresse">
                </div>
                <div class="mb-3">
                    <label for="téléphone" class="form-label">Téléphone</label>
                    <input type="number" name="téléphone" class="form-control" id="téléphone">
                </div>

                <div class="mb-3">
                    <label for="allergies" class="form-label">Allergies</label>
                    <input type="text" name="allergies" class="form-control" id="allergies" >

                </div>
                <div class="mb-3">
                    <label for="antecedents_medicaux" class="form-label">Antecedents Medicaux</label>
                    <input type="text" name="antecedents_medicaux" class="form-control" id="antecedents_medicaux" >

                </div>
        
                <button type="submit" class="btn btn-primary">Ajouter </button>
            </form>
        </div>
    </div>
@endsection
