
@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter Cabinet</h6>
            <form action="{{ route('cabinets.update',$cabinets->id) }}" method="post">
                @csrf
                @method('PUT')
            
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" value="{{$cabinets->nom}}" name="nom" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" value="{{$cabinets->email}}" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" value="{{$cabinets->adresse}}" name="adresse" class="form-control" id="adresse">
                </div>
                <div class="mb-3">
                    <label for="téléphone" class="form-label">Téléphone</label>
                    <input type="number" value="{{$cabinets->téléphone}}" name="téléphone" class="form-control" id="téléphone">
                </div>
                <div class="mb-3">
                    <label for="téléphone_fix" class="form-label">Téléphone Fix</label>
                    <input type="number" value="{{$cabinets->téléphone_fix}}" name="téléphone_fix" class="form-control" id="téléphone_fix">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" value="{{$cabinets->description}}" name="description" class="form-control" id="description" $>

                </div>
                <div class="mb-3">
                    <label for="specialite" class="form-label">specialite</label>
                    <input type="text" value="{{$cabinets->specialite}}" name="specialite" class="form-control" id="specialite">
                </div>
            
                <button type="submit" class="btn btn-primary">Ajouter Cabinet</button>
            </form>
        </div>
    </div>
@endsection
