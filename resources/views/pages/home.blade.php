@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Total Sales &#8611; Today</em></h3>
                        <div class="d-inline-block">
                            <h1 class="text-white">$4565</h1>
                            <p class="text-white mb-0"><strong>Date:</strong>
                                <?php echo date("jS F Y");?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Total Sales &#8611; Yesterday</h3>
                        <div class="d-inline-block">
                            <h1 class="text-white">$4565</h1>
                            <p class="text-white mb-0"><strong>Date:</strong>
                                <?php echo date("jS F Y", time()-(60*60*24));?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">Total Sales &#8611; This Month</h3>
                        <div class="d-inline-block">
                            <h1 class="text-white">$4565</h1>
                            <p class="text-white mb-0">
                                <?php 
                                    $currentDate = date('Y-m-d');
                                    echo date('F Y', strtotime($currentDate));
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Total Sales &#8611; Last Month</h3>
                        <div class="d-inline-block">
                            <h1 class="text-white">$4565</h1>
                            <p class="text-white mb-0">
                                <?php 
                                    $currentDate = date('Y-m-d');
                                    $firstDayOfMonth = date('Y-m-01', strtotime($currentDate));
                                    echo date('F Y', strtotime('-1 day', strtotime($firstDayOfMonth)));?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Name of the Product</th>
                                            <th>Quantity (In Stock)</th>
                                            <th>Sold (Quantity)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{asset('assets/images')}}/avatar/1.jpg"
                                                    class=" rounded-circle mr-3" alt="">PHP Web Programming</td>
                                            <td>2</td>
                                            <td>
                                                <span>10</span>
                                            </td>
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