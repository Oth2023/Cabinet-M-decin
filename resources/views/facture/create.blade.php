@extends('welcome')
@section('content')
        facture
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter une Facture</h6>
            <form action="{{ route('facture.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">reff</label>
                    <input type="number" name="reff" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">date_facturation</label>
                    <input type="date" name="date_facturation" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">montant_total</label>
                    <input type="number" name="montant_total" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="form-group">
                    <label for="id_paiement">paiement:</label>
                    <select name="id_paiement" class="form-control" required>
                        @foreach ($factures as $facture)
                            <option value="{{ $facture->id }}">{{ $facture->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Ajouter </button>
            </form>
        </div>
    </div>
@endsection
