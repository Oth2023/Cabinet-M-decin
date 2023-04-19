@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Modifier Patient</h6>
            <form action="{{ route('patients.update',$patients->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" value="{{$patients->nom}}" name="nom" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" value="{{$patients->prenom}}" name="prenom" class="form-control" id="prenom">
                </div>
                <div class=" mb-3">
                    <label class="col-sm-2 col-label-form"> Sexe</label>
                    <div class="col-sm-10">
                        <select name="sexe" class="form-control ">
                            <option value="Male" {{ old('sexe', $patients->sexe) === 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('sexe', $patients->sexe) === 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="date_naissance" class="form-label"> Date naissance</label>
                    <input type="date" value="{{$patients->date_naissance}}" name="date_naissance" class="form-control" id="date_naissance">

                </div>
                <div class="mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" value="{{$patients->ville}}" name="ville" class="form-control" id="ville">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" value="{{$patients->email}}" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" value="{{$patients->adresse}}" name="adresse" class="form-control" id="adresse">
                </div>
                <div class="mb-3">
                    <label for="téléphone" class="form-label">Téléphone</label>
                    <input type="number" value="{{$patients->téléphone}}" name="téléphone" class="form-control" id="téléphone">
                </div>

                <div class="mb-3">
                    <label for="allergies" class="form-label">Allergies</label>
                    <input type="text" value="{{$patients->allergies}}" name="allergies" class="form-control" id="allergies" $>

                </div>
                <div class="mb-3">
                    <label for="antecedents_medicaux" class="form-label">Antecedents Medicaux</label>
                    <input type="text" value="{{$patients->antecedents_medicaux}}" name="antecedents_medicaux" class="form-control" id="antecedents_medicaux" $>

                </div>
        
                <button type="submit" class="btn btn-primary">Enregistre</button>
            </form>
        </div>
    </div>
    {{-- <script>
                document.getElementsByName('sexe')[0].value = "{{ $patinets->sexe }}";

    </script> --}}
@endsection
