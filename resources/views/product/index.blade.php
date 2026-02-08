<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>

    <style>
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>

<body>

    <h1>Product List</h1>

    <a href="{{ route('product.create') }}">Create New Product</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        {{-- @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
            </tr>
        @endforeach --}}
        @if ($products->count() > 0)
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id ?? 'N/A' }}</td>
                    <td>{{ $product->title ?? 'N/A' }}</td>
                    <td>{{ $product->price ?? 'N/A' }}</td>
                    <td>{{ $product->quantity ?? 'N/A' }}</td>
                    <td>{{ $product->description ?? 'N/A' }}</td>
                    <td>
                        <a href="">Detail</a>
                        <a href="">Edit</a>
                        <a href="{{ route('product.destroy', $product->id )}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">No products found</td>
            </tr>
        @endif
    </table>


</body>

</html>
