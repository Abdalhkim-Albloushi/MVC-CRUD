<p>Get Data</p>

@foreach  ($data as $d)
<tr>
    
        <td>
            {{ $d->id }}
        </td>
        <td>
            {{ $d->title }}
        </td>
        <td>
            {{ $d->price }}
        </td>
        <td>
            <a href="{{ route('product.edit',$d->id) }}" >Edit</a>
            <form action="{{route('product.destroy',$d->id)  }}" method="post">
                @method('DELETE')
                @csrf()
            <button type="submit">Delete</button>
            </form>
           
        </td>
    <br>
</tr>

@endforeach