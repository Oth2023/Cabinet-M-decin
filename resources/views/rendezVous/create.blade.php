@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter Patient</h6>
            <form action="{{ route('rendezVous.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Date</label>
                    <input type="text" name="date_rendezVous" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Heure</label>
                    <input type="text" name="heure" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Motif</label>
                    <input type="text" name="motif" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="type_rendezVous">Type:</label>
                    <select name="type_rendezVous" class="form-control" required>

                            <option >Contrôl</option>
                            <option >Rendez Vous</option>
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_medecin">Cabinet:</label>
                    <select name="id_medecin" class="form-control" required>
                        @foreach ($medecins as $med)
                            <option value="{{ $med->id }}">{{ $med->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter </button>
            </form>
        </div>
    </div>
@endsection