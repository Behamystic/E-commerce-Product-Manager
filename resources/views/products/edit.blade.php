<h2>maxsulotni ozgartirish </h2>

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}" required>
    <input type="number" name="price" value="{{ $product->price }}" required>
    <button type="submit">Update</button>
</form>