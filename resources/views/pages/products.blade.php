@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mt-3">   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product's Name</th>
                                            <th>Quantity (In Stock)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>iPhone 6.0</td>
                                            <td>123</td>
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