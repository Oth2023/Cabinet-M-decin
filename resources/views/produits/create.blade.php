@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ajouter Produit</h6>
            <form action="{{ route('produits.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="prix" class="form-label">Prix</label>
                    <input type="text" name="prix" class="form-control" id="prix">
                </div>
          
                <div class="form-group">
                    <label for="id_category">Produit Category:</label>
                    <select name="id_category" class="form-control" required>
                        @foreach ($prodcutCategory as $proC)
                            <option value="{{ $proC->id }}">{{ $proC->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter </button>
            </form>
        </div>
    </div>
@endsection