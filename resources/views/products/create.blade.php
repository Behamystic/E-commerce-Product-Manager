<h1>Maxsulotlar qoshish</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="maxsulot nomini kiritin" required>
    <input type="number" name="price" placeholder="maxsulot narxi" required>
    
    <button type="submit">Create</button>
</form>