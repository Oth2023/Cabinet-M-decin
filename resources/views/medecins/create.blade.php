@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter Medecin</h6>
            <form action="{{ route('medecins.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputPassword1">
                </div>
                <div class=" mb-3">
                    <label class="form-label"> Sexe</label>
                    <div class="">
                        <select name="sexe" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Téléphone</label>
                    <input type="number" name="téléphone" class="form-control" id="exampleInputEmail1">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Date naissance</label>
                    <input type="date" name="date_naissance" class="form-control" id="exampleInputEmail1">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">specialite</label>
                    <input type="text" name="specialite" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="employe_id">Cabinet:</label>
                    <select name="employe_id" class="form-control" required>
                        @foreach ($cabinets as $cab)
                            <option value="{{ $cab->id }}">{{ $cab->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter Medecin</button>
            </form>
        </div>
    </div>
@endsection
