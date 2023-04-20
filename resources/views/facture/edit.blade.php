@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Modifier Facture</h6>
            <form action="{{ route('facture.update',$factures->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="date_rendezVous" class="form-label">reff</label>
                    <input type="text" value="{{$factures->reff}}" name="reff" class="form-control" id="reff">
                </div>
                <div class="mb-3">
                    <label for="heure" class="form-label">date_facturation</label>
                    <input type="number" value="{{$factures->date_facturation}}" name="date_facturation" class="form-control" id="date_facturation">
                </div>
                <div class="mb-3">
                    <label for="motif" class="form-label">montant_total</label>
                    <input type="text" value="{{$factures->montant_total}}" name="montant_total" class="form-control" id="montant_total">
                </div>


                <div class="form-group">
                    <label for="id_paiement">paiement:</label>
                    <select name="id_paiement" class="form-control" required>
                        @foreach ($factures as $facture)
                            <option value="{{ $facture->id }}"
                                @if ($facture->id_paiement==$stc->id)
                                selected
                                @endif>
                                {{ $facture->nom }} {{ $facture->prenom }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
    {{-- <script>
                document.getElementsByName('type_rendezVous')[0].value = "{{ $rendezVous->type_rendezVous }}";

    </script> --}}
@endsection
