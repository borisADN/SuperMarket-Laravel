<!-- resources/views/sells/create.blade.php -->
@extends('layout.base')

@section('content')
    @include('includes.sidebar')

    <div class="wrap-content">
        @include('includes.appbar')       
        <form action="{{ route('sells.store') }}" class="category-form" method="POST">
            @csrf

            <h1>Ajouter une Nouvelle Vente</h1>
            <div class="form-group">
                <label for="product_name">Nom du Produit</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="form-group">
                <label for="category_id">ID de la Catégorie</label>
                <input type="number" class="form-control" id="category_id" name="category_id" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantité</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" id="" name="" required>
            </div>

            <button type="submit" class="button w-100 primary">Ajouter la Vente</button>
        </form>
    </div>
@endsection

@section('js')
    <script src="{{ URL::asset('assets/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: "Saisir une lingue description ...",
                height: 150
            });
        });
    </script>
@endsection

