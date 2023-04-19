
@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Modfier Paiment</h6>
            <form action="{{ route('paiments.update',$paiments->id) }}" method="post">
                @csrf
              <div class="form-group">
                    <label for="id_medecin">Medecin:</label>
                    <select name="id_medecin" class="form-control" required>
                        @foreach ($medecins as $med)
                            <option value="{{ $med->id }}"
                                @if($paiments->id_medecin == $med->id) selected @endif   >{{ $med->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_patient">Patinet:</label>
                    <select name="id_patient" class="form-control" required>
                        @foreach ($patients as $pat)
                            <option value="{{ $pat->id }}"
                                @if($paiments->id_patient == $pat->id) selected @endif   >
                                {{ $med->nom }}</option>{{ $pat->nom }}{{ $pat->prenom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="date_paiement" class="form-label"> Date Paiement</label>
                    <input type="date" name="date_paiement" value="{{$medecins->date_paiement}}" class="form-control" id="date_paiement" $>

                </div>
                <div class="mb-3">
                    <label for="montant"  class="form-label">Montant</label>
                    <input type="text" name="montant" value="{{$medecins->montant}}" class="form-control" id="montant">
                </div>
             
                <button type="submit" class="btn btn-primary">Ajouter </button>
            </form>
        </div>
    </div>
@endsection
