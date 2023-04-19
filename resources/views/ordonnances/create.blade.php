
@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter Ordonnance</h6>
            <form action="{{ route('ordonnances.store') }}" method="post">
                @csrf
              <div class="form-group">
                    <label for="id_medecin">Medecin:</label>
                    <select name="id_medecin" class="form-control" required>
                        @foreach ($medecins as $med)
                            <option value="{{ $med->id }}">{{ $med->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_patient">Patinet:</label>
                    <select name="id_patient" class="form-control" required>
                        @foreach ($patients as $pat)
                            <option value="{{ $pat->id }}">{{ $pat->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="date_ordonnance" class="form-label">Date ordonnance</label>
                    <input type="date" name="date_ordonnance" class="form-control" id="date_ordonnance" $>

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="description">
                </div>
             
                <button type="submit" class="btn btn-primary">Ajouter </button>
            </form>
        </div>
    </div>
@endsection
