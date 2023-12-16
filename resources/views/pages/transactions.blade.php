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
                                            <th>Invoice ID</th>
                                            <th>Customer's Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Payment Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span>1</span>
                                            </td>
                                            <td>Sarah Smith</td>
                                            <td>
                                                <span>5</span>
                                            </td>
                                            <td>125</td>
                                            <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
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