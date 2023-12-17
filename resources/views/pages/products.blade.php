@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">

            <div class="col-lg-12">
                @if(session('success'))
                <div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-check-all me-2"></i>
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product's Name</th>
                                            <th>Quantity in Stock</th>
                                            <th>Unit Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allProducts as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->product_title}}</td>
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->price}}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Total Items: </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- CONTAINER ENDS --}}
</div>
@endsection