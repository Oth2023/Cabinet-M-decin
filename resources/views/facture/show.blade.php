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
                <tbody>
        <tr>

            <td>paiement :
            {{ $facture->id_paiement }}
            </td>

            <td>reff :
            {{ $facture->reff }}
            </td>

            <td>Facture :
            {{ $facture->date_facturation }}
            </td>

            <td>montant_total :
            {{ $facture->montant_total }}
            </td>
        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
