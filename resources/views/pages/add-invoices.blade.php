@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Invoice</h4>
                        <div class="basic-form">
                        <form method="POST" action="{{route('add-invoices.form')}}" enctype="multipart/form-data">
                        @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label>Client's Name</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option>John Smith</option>
                                            <option>Adam Smith</option>
                                            <option>Jane Doe</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label>Name of the Product</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option>iPhone</option>
                                            <option>iPad</option>
                                            <option>Samsung J1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Quantity</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Unit Price</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-dark">Add Invoice</button>
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