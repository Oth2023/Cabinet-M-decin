@extends('welcome')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Liste Stock</h6>
            <a href=""></a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <tbody>
        <tr>
            <td>Cabinet :
                {{ $stc->nom }}
            </td>

            <td>Produit :
                {{ $stc->nom }}
            </td>

            <td>nom :
                {{ $stc->nom }}
            </td>

            <td>qunatite :
                {{ $stc->qunatity }}
            </td>

            <td>description :
                {{ $stc->description }}
            </td>
                            <td>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
