@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter Patient</h6>
            <form action="{{ route('patients.create') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Date naissance</label>
                    <input type="date" name="date_naissance" class="form-control" id="exampleInputEmail1">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ville</label>
                    <input type="text" name="ville" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Téléphone</label>
                    <input type="number" name="téléphone" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Allergies</label>
                    <input type="text" name="allergies" class="form-control" id="exampleInputEmail1" $>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Allergies</label>
                    <input type="text" name="antecedents_medicaux" class="form-control" id="exampleInputEmail1" $>

                </div>
                {{-- <div class="form-group">
                    <label for="employe_id">Cabinet:</label>
                    <select name="employe_id" class="form-control" required>
                        @foreach ($users as $use)
                            <option value="{{ $use->id }}">{{ $use->nom }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <button type="submit" class="btn btn-primary">Ajouter Patient</button>
            </form>
        </div>
    </div>
@endsection
