@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
            
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Product</h4>
                        <div class="basic-form">
                            <form method="POST" action="{{route('product.list')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Name of the Product"
                                            name="productTitle">
                                        @error('productTitle')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-2">
                                        <input type="number" class="form-control" placeholder="Quantity i.e. 10"
                                            name="productQuantity">
                                        @error('productQuantity')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-2">
                                        <input type="number" class="form-control" placeholder="Price i.e. 0.00"
                                            name="productPrice">
                                        @error('productPrice')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="col-2">
                                        <button class="btn btn-primary">Add Product</button>
                                    </div>
                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
            
        </div>
    </div>
    {{-- CONTAINER ENDS --}}
</div>
@endsection