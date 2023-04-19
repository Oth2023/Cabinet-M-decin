@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter Medecin</h6>
            <form action="{{ route('medecins.update',$medecins->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" value="{{$medecins->nom}}" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" value="{{$medecins->prenom}}" class="form-control" id="prenom">
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
                    <label for="email" class="form-label">Email </label>
                    <input type="email" name="email" value="{{$medecins->email}}" class="form-control" id="email">

                </div>

                <div class="mb-3">
                    <label for="téléphone" class="form-label">Téléphone</label>
                    <input type="number" name="téléphone" value="{{$medecins->téléphone}}" class="form-control" id="téléphone">

                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" value="{{$medecins->adresse}}" class="form-control" id="adresse">
                </div>
                <div class="mb-3">
                    <label for="date_naissance" class="form-label"> Date naissance</label>
                    <input type="date" name="date_naissance" value="{{$medecins->date_naissance}}" class="form-control" id="date_naissance">

                </div>
                <div class="mb-3">
                    <label for="specialite" class="form-label">specialite</label>
                    <input type="text" name="specialite" value="{{$medecins->specialite}}" class="form-control" id="specialite">
                </div>
                <div class="form-group">
                    <label for="id_cabinet">Cabinet:</label>
                    <select name="id_cabinet" class="form-control" required>
                        @foreach ($cabinets as $cab)
                        <option value="{{ $cab->id }}" 
            @if($medecins->id_cabinet == $cab->id) selected @endif
                            >{{ $cab->nom }} </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Enregister </button>
            </form>
        </div>
    </div>
    <script>
        document.getElementsByName('sexe')[0].value = "{{ $medecins->sexe }}";

    </script>
@endsection
