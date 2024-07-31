@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier Vente</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sells.update', $sell->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_name">Nom du produit</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $sell->product_name }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">ID de catégorie</label>
            <input type="number" class="form-control" id="category_id" name="category_id" value="{{ $sell->category_id }}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantité</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $sell->quantity }}" required>
        </div>

        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $sell->price }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection