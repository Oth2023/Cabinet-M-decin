@extends('welcome')
@section('content')

    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter un stock</h6>
            <form action="{{ route('stock.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">qunatite</label>
                    <input type="number" name="qunatity" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="form-group">
                    <label for="id_cabinet">cabinet:</label>
                    <select name="id_cabinet" class="form-control" required>
                        @foreach ($stocks as $stc)
                            <option value="{{ $stc->id }}">{{ $stc->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_produit">produit:</label>
                    <select name="id_produit" class="form-control" required>
                        @foreach ($stocks as $stc)
                            <option value="{{ $stc->id }}">{{ $stc->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Ajouter </button>
            </form>
        </div>
    </div>
@endsection
