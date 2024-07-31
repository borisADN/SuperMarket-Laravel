<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($sale) ? 'Edit Sale' : 'Create Sale' }}</title>
</head>
<body>
    <h1>{{ isset($sale) ? 'Edit Sale' : 'Create Sale' }}</h1>

    <form action="{{ isset($sale) ? route('sales.update', $sale->id) : route('sales.store') }}" method="POST">
        @csrf
        @if (isset($sale))
            @method('PUT')
        @endif

        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" value="{{ old('product_name', $sale->product_name ?? '') }}" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $sale->quantity ?? '') }}" required>

        <label for="price">Price:</label>
        <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $sale->price ?? '') }}" required>

        <button type="submit">{{ isset($sale) ? 'Update' : 'Create' }}</button>
    </form>
</body>
</html>
