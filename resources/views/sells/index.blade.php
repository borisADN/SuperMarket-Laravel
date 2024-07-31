
@extends('layout.base')

@section('content')
    @include('includes.sidebar')

    <div class="wrap-content">
        @include('includes.appbar')
        <br /><br /><br />
        <div>
            <table width="100%">
                <tr>
                    <td>
                        <h2>Liste des ventes</h2>
                    </td>
                    <td class="text-right">

                        <a href="{{ route('sells.create') }}" class="button primary">Ajouter une Vente</a>
                    </td>
                </tr>
            </table><br />

            @if ($message = Session::get('success'))
                <ul class="alert alert-success">
                    <li>{{ $message }}</li>
                </ul>
            @endif

            <div class="border datatable-cover">
                <table id="datatable" class="stripe">
                    <thead>
                        <tr>
                            {{-- <th>ID</th> --}}
                            <th>Nom du Produit</th>
                            <th>ID de la Catégorie</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                            <th width="100" class="text-center">
                                Opérations
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sells as $sell)
                            <tr>
                                {{-- <td>{{ $sell->id }}</td> --}}
                                <td>{{ $sell->product_name }}</td>
                                <td>{{ $sell->category_id }}</td>
                                <td>{{ $sell->quantity }}</td>
                                <td>{{ $sell->price }}</td>
                                <td class="text-center">
                                    <a href="{{ route('sells.edit', $sell->id) }}" class="icon-button primary">
                                        <i class="fa-solid fa-download"></i>
                                    </a>
                                    &nbsp;
                                    <form class="d-inline" action="{{ route('sells.destroy', $sell->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Êtes-vous sûr(e) de vouloir supprimer la vente {{ $sell->name }} ? Cette action sera irréversible !')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="icon-button error">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Aucune vente trouvée</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>



        {{-- 
    <table class="table table-bordered">
        
        <tbody>
            @forelse($sells as $sell)
                <tr>
                    <td>{{ $sell->id }}</td>
                    <td>{{ $sell->product_name }}</td>
                    <td>{{ $sell->category_id }}</td>
                    <td>{{ $sell->quantity }}</td>
                    <td>{{ $sell->price }}</td>
                    <td>
                        <a href="{{ route('sells.edit', $sell->id) }}" class="btn btn-warning btn-sm">Éditer</a>
                        <form action="{{ route('sells.destroy', $sell->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Aucune vente trouvée</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div> --}}
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