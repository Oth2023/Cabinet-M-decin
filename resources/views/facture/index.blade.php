@extends('welcome')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Liste Facture</h6>
            <a href=""></a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>

                        <th scope="col">reff</th>
                        <th scope="col">date_facturation</th>
                        <th scope="col">montant_total </th>

                        <th scope="col">paiement</th>

                        <th scope="col">Action </th>

                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($factures as $facture)
                        <tr>
                            <td>{{ $facture->factures ? $facture->factures->id_paiement : '-' }}</td>

                            <td>{{ $facture->reff }}</td>
                            <td>{{ $facture->date_facturation }}</td>
                            <td>{{ $facture->montant_total }}</td>

                            <td>
                    <a href="{{ route('facture.show', $facture->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('facture.edit', $facture->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('facture.destroy', $facture->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer se facture ?')">Supprimer</button>
                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
