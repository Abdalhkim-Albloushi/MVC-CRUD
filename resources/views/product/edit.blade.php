<form action="{{ route('product.update',$data->id) }}" method="POST">
    @method('PATCH')
    @csrf
    
    <input type="text" name="title" value="{{ $data->title }}" >
    <input type="text" name="price" value="{{ $data->price }}" >
    <input type="submit"  value="submit" >
</form>