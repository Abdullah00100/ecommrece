@extends('CMS.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Products</h4>

        <!-- Basic Bootstrap Table -->

        <div class="card h-100">
            <div class="row">
                <div class="col-lg-10 col-12">
                    <h5 class="card-header">Products </h5>
                </div>
                <div class="col-lg-2 col-12 p-3">
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-block w-100 ">
                        Add Product
                    </a>
                </div>
            </div>
            <div class="table-responsive text-nowrap h-100">

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-1 ">
                        @include('CMS.Product.table')
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="my-5" />
    </div>
@endsection
