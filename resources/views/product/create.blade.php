<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Create</title>

    <style>
        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>

<body>

    <h1>Product Create</h1>

    <a href="{{ route('product.index') }}">Back to list</a>

    @if (isset($errors))
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('product.store') }}">
        @csrf
        <label for="title">Product Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">

        <label for="price">Product Price</label>
        <input type="text" name="price" id="price" value="{{ old('price') }}">

        <label for="quantity">Product Quantity</label>
        <input type="text" name="quantity" id="quantity" value="{{ old('quantity') }}">

        <label for="description">Product Description</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>

        <button type="submit">Create</button>
    </form>

</body>

</html>
