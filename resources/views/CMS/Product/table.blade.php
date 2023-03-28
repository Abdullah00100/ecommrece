@foreach ($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td><img class=" rounded" width="100" height="100"
            src="@if (substr($product->image, 0, 8) != 'https://') {{ asset('storage/'.$product->image) }} @else {{ asset($product->image) }} @endif"
            alt=""></td>
        <td>{{$product->title}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td>
            <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('products.show', $product->id) }}"><i
                        class="bx bx-edit-alt me-1"></i>
                    Show</a> <a class="dropdown-item" href="{{ route('products.edit', $product->id) }}"><i
                        class="bx bx-edit-alt me-1"></i>
                    Edit</a> 
                    <a class="dropdown-item deleteItem" data-url='{{ route('products.destroy', $product->id) }}'
                        href="#"><i class="bx bx-trash me-1"></i>
                        Delete</a>
                </div>
            </div>
        </td>
    </tr>
@endforeach
