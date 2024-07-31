<!DOCTYPE html>
<html>
<head>
    <title>Sale Details</title>
</head>
<body>
    <h1>Sale Details</h1>

    <p><strong>Product Name:</strong> {{ $sale->product_name }}</p>
    <p><strong>Quantity:</strong> {{ $sale->quantity }}</p>
    <p><strong>Price:</strong> {{ $sale->price }}</p>

    <a href="{{ route('sales.index') }}">Back to List</a>
    <a href="{{ route('sales.edit', $sale->id) }}">Edit</a>
    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
