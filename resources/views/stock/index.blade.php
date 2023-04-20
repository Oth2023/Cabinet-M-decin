@extends('welcome')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Liste PAtinet</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>

                        <th scope="col">nom</th>
                        <th scope="col">qunatite</th>
                        <th scope="col">description </th>

                        <th scope="col">cabinet </th>
                        <th scope="col">produit </th>

                        <th scope="col">Action </th>

                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stocks as $stc)
                        <tr>
                            <td>{{ $stc->stocks ? $stc->stocks->id_cabinet : '-' }}</td>
                            <td>{{ $stc->stocks ? $stc->stocks->id_produit : '-' }}</td>

                            <td>{{ $stc->nom }}</td>
                            <td>{{ $stc->qunatity }}</td>
                            <td>{{ $stc->description }}</td>

                            <td>
                                <a href="{{ route('stock.show', $stc->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('stock.edit', $stc->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('stock.destroy', $stc->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer se stock ?')">Supprimer</button>
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
