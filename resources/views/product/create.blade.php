<p>Create Page</p>


<form action="{{ route('product.store') }}" method="post">
    @csrf
<input type="text" name="title">
<br>
<br>
<input type="text" name="price">
<br>
<br>

<input type="submit"  value="submit">

</form>