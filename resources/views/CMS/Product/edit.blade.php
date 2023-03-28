@extends('CMS.layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card mb-4">
            <form action="{{ route('products.update', $result->id) }}" method="post" class="p-4" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h5 class="card-header">Add New Product </h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        
                        {{-- <span >Full name</span> --}}
                        <input type="text" required
                            class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                            placeholder="title" aria-label="title" value="{{ $result->title }}"
                            name='title' />
                        @if ($errors->has('title'))
                            <span class="invalid-feedback text-right" style="display: block;" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-group">
                        
                        {{-- <span >Full name</span> --}}
                        <input type="number" required
                            class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
                            placeholder="Price" aria-label="price" value="{{ $result->price }}"
                            name='price' />
                        @if ($errors->has('price'))
                            <span class="invalid-feedback text-right" style="display: block;" role="alert">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group">
                        
                        {{-- <span >Full name</span> --}}
                        <textarea type="text" required
                            class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                            placeholder="Description" aria-label="description" value="{{ $result->description}}"
                            name='description' >{{ $result->description }}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback text-right" style="display: block;" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-group">
                        <img src="{{ asset('storage/' . $result->image)}}" id="output" class="rounded my-2" alt=""
                            width="150px" height="150px">
                        <label class="form-label w-100 " for="basic-default-password12">Image</label><br>
                        <img class="input-group-text" width="55px"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAPVJREFUSEvtl40RwUAQhb90oAM6QAXogA6UoAQ6oQI6QAdKoAJKMC9zMXETdzkuMsztTCaTZPPe7mb/ktGSZC3x4iKeAv0Iht2ADaDzQ6qIB8AW6EUgLSBOwNBHLKUYntp2i1jYudged4Drm54egbH1rq735t4EOLwiLiuG8idiRSyF+j+TS41nZLrVV76xmoOOuanDM7ADFk3Xsa/uG2sgidiOQAr1U0Q+mU6/n1wXYO1zI+C5sNRUKjeQcqhnpvMEYNdXda0+S2BVHypMs2rLbGrZc9axzNZ00dzshvng1fYSFwha6LVjxxJncsUi8eK09u90Bw1yTB+z/MtBAAAAAElFTkSuQmCC" />
                        <input type="file"
                            onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"
                            class="form-control" placeholder="Image" aria-label="image" name="image"
                            value=""/>
                    </div>
                
                    <button class="btn btn-primary btn-style " type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
