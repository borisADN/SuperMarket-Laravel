<!DOCTYPE html>
<html>
<head>
    <title>{{ $sell->name }}</title>
</head>
<body>
    <h1>{{ $sell->name }}</h1>
    <img src="{{ $sell->image_url }}" alt="{{ $sell->name }}" style="max-width: 300px;">
    <p>{{ $sell->description }}</p>
    <p>Price: ${{ $sell->price }}</p>
    <!-- Ajoutez un bouton pour acheter ou ajouter au panier -->
</body>
</html>
