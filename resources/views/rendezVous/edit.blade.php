@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Modifier Rendez vous</h6>
            <form action="{{ route('rendezVous.update',$rendezVous->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="date_rendezVous" class="form-label">Date</label>
                    <input type="text" value="{{$rendezVous->adresse}}" name="date_rendezVous" class="form-control" id="date_rendezVous">
                </div>
                <div class="mb-3">
                    <label for="heure" class="form-label">Heure</label>
                    <input type="text" value="{{$rendezVous->heure}}" name="heure" class="form-control" id="heure">
                </div>
                <div class="mb-3">
                    <label for="motif" class="form-label">Motif</label>
                    <input type="text" value="{{$rendezVous->motif}}" name="motif" class="form-control" id="motif">
                </div>
                <div class="form-group">
                    <label for="type_rendezVous">Type:</label>
                    <select name="type_rendezVous" class="form-control" required>

                            <option >Contrôl</option>
                            <option >Rendez Vous</option>
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_medecin">Medecin:</label>
                    <select name="id_medecin" class="form-control" required>
                        @foreach ($medecins as $med)
                            <option value="{{ $med->id }}"
                                @if ($rendezVous->id_medecin==$med->id)
                                selected
                                @endif>{{ $med->nom }} {{ $med->prenom }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Enregistre </button>
            </form>
        </div>
    </div>
    <script>
                document.getElementsByName('type_rendezVous')[0].value = "{{ $rendezVous->type_rendezVous }}";

    </script>
@endsection