<h2>online mahsulotlar  dokoni</h2>

@foreach ($products as $product)
<h1>maxsulot :</h1>  <p>{{ $product->name }} - ${{ $product->price }}</p>
    
<a href="{{ route('products.edit', $product) }}">tahrirlash</a>
<a href="{{ route('products.show', $product) }}">korish</a>
<form action="{{ route('products.destroy', $product) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">ochirish</button>
</form>
@endforeach
<a href="{{ route('products.create') }}">qoshish</a>
