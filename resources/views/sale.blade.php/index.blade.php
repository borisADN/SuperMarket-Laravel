<!DOCTYPE html>
<html>
<head>
    <title>Sales List</title>
</head>
<body>
    <h1>Sales List</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('sales.create') }}">Add New Sale</a>

    <table border="1">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->product_name }}</td>
                    <td>{{ $sale->quantity }}</td>
                    <td>{{ $sale->price }}</td>
                    <td>
                        <a href="{{ route('sales.show', $sale->id) }}">View</a>
                        <a href="{{ route('sales.edit', $sale->id) }}">Edit</a>
                        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
