@extends('welcome')
@section('content')
    <div class="col-sm-12 col-xl-6 m-5">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Modifier stock</h6>
            <form action="{{ route('stock.update',$stocks->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="date_rendezVous" class="form-label">nom</label>
                    <input type="text" value="{{$stocks->nom}}" name="date_rendezVous" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="heure" class="form-label">qunatity</label>
                    <input type="number" value="{{$stocks->qunatity}}" name="heure" class="form-control" id="qunatity">
                </div>
                <div class="mb-3">
                    <label for="motif" class="form-label">description</label>
                    <input type="text" value="{{$stocks->description}}" name="motif" class="form-control" id="description">
                </div>


                <div class="form-group">
                    <label for="id_cabinet">cabinet:</label>
                    <select name="id_cabinet" class="form-control" required>
                        @foreach ($stocks as $stc)
                            <option value="{{ $stc->id }}"
                                @if ($stocks->id_cabinet==$stc->id)
                                selected
                                @endif>
                                {{ $stc->nom }} {{ $stc->prenom }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <label for="id_produit">produit:</label>
                <select name="id_produit" class="form-control" required>
                    @foreach ($stocks as $stc)
                        <option value="{{ $stc->id }}"
                            @if ($stocks->id_produit==$stc->id)
                            selected
                            @endif>{{ $stc->nom }} {{ $stc->prenom }}</option>
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
