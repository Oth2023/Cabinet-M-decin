@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Modifier Produit</h6>
            <form action="{{ route('produits.update',$produits->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" value="{{$produits->nom}}" name="nom" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="prix" class="form-label">Prix</label>
                    <input type="text" value="{{$produits->prix}}" name="prix" class="form-control" id="prix">
                </div>
          
                <div class="form-group">
                    <label for="id_category">Produit:</label>
                    <select name="id_category" class="form-control" required>
                        @foreach ($prodcutCategory as $proC)
                            <option value="{{ $proC->id }}"
                                @if($produits->id_category == $proC->id) selected @endif
                                >
                                {{ $proC->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Enregistre </button>
            </form>
        </div>
    </div>
@endsection