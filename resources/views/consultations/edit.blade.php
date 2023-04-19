
@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Modfier Consultation</h6>
            <form action="{{ route('consultations.update',$consultations->id) }}" method="post">
                @csrf
              <div class="form-group">
                    <label for="id_medecin">Medecin:</label>
                    <select name="id_medecin" class="form-control" required>
                        @foreach ($medecins as $med)
                            <option value="{{ $med->id }}"
                                @if ($consultaions->id_medecin==$med->id)
                                selected
                                @endif>{{ $med->nom }} {{ $med->prenom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_patient">Patinet:</label>
                    <select name="id_patient" class="form-control" required>
                        @foreach ($patients as $pat)
                            <option value="{{ $pat->id }}"
                                @if ($consultaions->id_patient==$pat->id)
                                selected
                                @endif>{{ $pat->nom }}{{ $pat->prenom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="date_consultation" class="form-label">Date Consultation</label>
                    <input type="date" value="{{$consultations->date_consultation}}" name="date_consultation" class="form-control" id="date_consultation" $>

                </div>
                <div class="mb-3">
                    <label for="heure" class="form-label">Heure</label>
                    <input type="time" value="{{$consultations->heure}}" name="heure" class="form-control" id="heure" >

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" value="{{$consultations->description}}" name="description" class="form-control" id="description">
                </div>
             
                <button type="submit"  class="btn btn-primary">Enregister </button>
            </form>
        </div>
    </div>
@endsection
