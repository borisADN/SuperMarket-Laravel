<!DOCTYPE html>
<html>
<head>
    <title>Vente</title>
</head>
<body>
    <h1>VENTES</h1>
    
    <ul>
        @foreach ($sells as $sell)
            <li>
                <a href="{{ route('sells.show', $sell->id) }}">{{ $sell->name }}</a>
                - ${{ $sell->price }}
            </li>
        @endforeach
    </ul>
</body>
</html>
