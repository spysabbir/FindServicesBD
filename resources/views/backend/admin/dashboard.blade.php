@extends('backend.layouts.backend_master')

@section('title', 'Dashboard')

@section('content')
<div class="row clearfix">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light page_menu">
            <a class="navbar-brand" href="#">M.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars text-muted"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item vivify swoopInTop delay-150"><a class="nav-link" href="index.html">Analytics</a></li>
                    <li class="nav-item vivify swoopInTop delay-250"><a class="nav-link" href="index2.html">Cryptocurrency</a></li>
                    <li class="nav-item vivify swoopInTop delay-350"><a class="nav-link" href="index3.html">Campaign</a></li>
                    <li class="nav-item dropdown vivify swoopInTop delay-450">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown">More</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item active" href="index4.html">eCommerce Analytics</a>
                            <a class="dropdown-item" href="index5.html">Sales Monitoring</a>
                            <a class="dropdown-item" href="index6.html">Finance Performance</a>
                        </div>
                    </li>
                </ul>
                <div class="ml-auto">
                    <a href="page-invoices.html" class="btn btn-default">View invoices</a>
                    <a href="javascript:void(0);" target="_blank" class="btn btn-dark">Buy this item</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="col-12">
        <div class="card theme-bg gradient text-light">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mb-3">
                        <div class="body w_summary text-light">
                            <div class="s_chart">
                                <span class="chart">5,2,3,6,9,8,4,1,2,8</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$15K</h2>
                                <span>67% <i class="fa fa-level-up text-success"></i> Total income</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mb-3">
                        <div class="body w_summary text-light">
                            <div class="s_chart">
                                <span class="chart">6,3,2,5,8,9,5,4,2,3</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$1258</h2>
                                <span>15% <i class="fa fa-level-up text-success"></i> Total Expense</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mb-3">
                        <div class="body w_summary text-light">
                            <div class="s_chart">
                                <span class="chart">3,5,1,6,2,4,8,5,3,2</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$2315</h2>
                                <span>23% <i class="fa fa-level-up text-success"></i> Total Growth</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mb-3">
                        <div class="body w_summary text-light">
                            <div class="s_chart">
                                <span class="chart">8,5,2,9,6,3,4,5,6,7</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$1025</h2>
                                <span>52% <i class="fa fa-level-up text-success"></i> Bounce Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-12">
        <div class="section_title">
            <div class="mr-3">
                <h3>Overview</h3>
                <small>Statistics, Predictive Analytics Data Visualization, Big Data Analytics, etc.</small>
            </div>
            <div>
                <div class="btn-group mb-3">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">This Month</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Today’s</a>
                            <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last 12 Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Custom Dates</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default"><i class="fa fa-send"></i> <span class="hidden-md">Report</span></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> <span class="hidden-md">Export</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix row-deck">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Product sales reports</h2>
                <small class="text-muted">Sales Performance for Online and Offline Revenue</small>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu theme-bg gradient">
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="flotChart-salesreports" class="flot-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Order status</h2>
                <small class="text-muted">vs Last Year</small>
            </div>
            <div class="body text-center">
                <div id="Order_status" style="height: 250px"></div>
                <hr>
                <div class="row clearfix">
                    <div class="col-6">
                        <h6 class="mb-0">$3,095</h6>
                        <small class="text-muted">Last Month</small>
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">$2,763</h6>
                        <small class="text-muted">This Month</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Sales Revenue</h2>
                <small class="text-muted">vs Last Year</small>
            </div>
            <div class="body text-center">
                <div class="mt-4">
                    <input type="text" class="knob" value="34" data-width="147" data-height="147" data-thickness="0.2" data-bgColor="#cccccc" data-fgColor="#ffd861">
                </div>
                <h3 class="mb-0 mt-3 font300">24,301 <span class="text-green font-15">+3.7%</span></h3>
                <small>Lorem Ipsum is simply dummy text <br> <a href="#">Read more</a> </small>
                <div class="mt-3">
                    <span class="chart_3">2,5,8,3,6,9,4,5,6,3</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix row-deck">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Product Valuation</h2>
                <small class="text-muted">Sales Performance for Online and Offline Revenue <a href="">Learn more</a></small>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu theme-bg gradient">
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="d-flex flex-row">
                    <div class="pb-3">
                        <h5 class="mb-0">3095</h5>
                        <small class="text-muted font-11">VISITS</small>
                    </div>
                    <div class="pb-3 pl-4 pr-4">
                        <h5 class="mb-0">27%</h5>
                        <small class="text-muted font-11">REFERRALS</small>
                    </div>
                    <div class="pb-3">
                        <h5 class="mb-0">63%</h5>
                        <small class="text-muted font-11">ORGANIC</small>
                    </div>
                    <div class="ml-auto">
                        <select class="form-control">
                            <option selected="selected">Monthly</option>
                            <option>Monthly</option>
                            <option>Quarterly</option>
                            <option>Yearly</option>
                        </select>
                    </div>
                </div>
                <div id="chart-bar" style="height: 300px"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Customer Satisfaction</h2>
                <small class="text-muted">vs Last Year</small>
            </div>
            <div class="body">
                <div class="d-flex align-items-baseline">
                    <h2 class="">9.8 </h2>
                    <p class="mb-0"><span class="tx-medium tx-success">1.6% <i class="icon ion-md-arrow-up"></i></span></p>
                </div>
                <h6 class="text-uppercase font-11">Performance Score</h6>
                <div class="progress progress-sm mb-4">
                    <div class="progress-bar bg-danger" style="width: 45%"></div>
                    <div class="progress-bar bg-warning" style="width: 30%"></div>
                    <div class="progress-bar bg-success" style="width: 12%"></div>
                </div>
                <table class="table table-striped mb-0 font-13">
                    <tbody>
                        <tr>
                            <td>Excellent</td>
                            <td class="text-right">3,007</td>
                            <td class="text-right">50%</td>
                        </tr>
                        <tr>
                            <td>Very Good</td>
                            <td class="text-right">1,674</td>
                            <td class="text-right">25%</td>
                        </tr>
                        <tr>
                            <td>Good</td>
                            <td class="text-right">125</td>
                            <td class="text-right">6%</td>
                        </tr>
                        <tr>
                            <td>Fair</td>
                            <td class="text-right">98</td>
                            <td class="text-right">5%</td>
                        </tr>
                        <tr>
                            <td>Poor</td>
                            <td class="text-right">512</td>
                            <td class="text-right">10%</td>
                        </tr>
                        <tr>
                            <td>Very Poor</td>
                            <td class="text-right">81</td>
                            <td class="text-right">4%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Top Countries</h2>
                <small class="text-muted">vs Last Year</small>
            </div>
            <div class="body">
                <table class="table table-striped mb-0">
                    <tbody>
                        <tr>
                            <td>
                                USA
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar" style="width: 78%"></div>
                                </div>
                            </td>
                            <td class="text-right"><span class="text-muted">$6425</span></td>
                        </tr>
                        <tr>
                            <td>
                                Poland
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar" style="width: 62%"></div>
                                </div>
                            </td>
                            <td class="text-right"><span class="text-muted">$5582</span></td>
                        </tr>
                        <tr>
                            <td>
                                Germany
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar" style="width: 48%"></div>
                                </div>
                            </td>
                            <td class="text-right"><span class="text-muted">$4587</span></td>
                        </tr>
                        <tr>
                            <td>
                                Russia
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar" style="width: 35%"></div>
                                </div>
                            </td>
                            <td class="text-right"><span class="text-muted">$2520</span></td>
                        </tr>
                        <tr>
                            <td>
                                Australia
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar" style="width: 30%"></div>
                                </div>
                            </td>
                            <td class="text-right"><span class="text-muted">$1899</span></td>
                        </tr>
                        <tr>
                            <td>
                                Great Britain
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar" style="width: 22%"></div>
                                </div>
                            </td>
                            <td class="text-right"><span class="text-muted">$1056</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-12">
        <div class="section_title">
            <div class="mr-3">
                <h3>Orders Summary</h3>
                <small>Predictive Analytics Data Visualization, Big Data Analytics, etc.</small>
            </div>
            <div>
                <div class="btn-group mb-3">
                    <button type="button" class="btn btn-default"><i class="fa fa-send"></i> <span class="hidden-md">Report</span></button>
                    <button type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> <span class="hidden-md">Export</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="body">
                <div class="form-group c_form_group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                        <div class="input-group-append"><button class="btn btn-primary theme-bg gradient" type="button">Search</button></div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Client Name</th>
                                <th>Product ID</th>
                                <th>Product</th>
                                <th>Product Cost</th>
                                <th>Payment Mode</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#01</td>
                                <td>Sean Black</td>
                                <td>PRO12345</td>
                                <td>Mi LED Smart TV 4A 80</td>
                                <td>$14,500</td>
                                <td>Online Payment</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>#02</td>
                                <td>Evan Rees</td>
                                <td>PRO8765</td>
                                <td>Thomson R9 122cm (48 inch) Full HD LED TV </td>
                                <td>$30,000</td>
                                <td>Cash on delivered</td>
                                <td><span class="badge badge-primary">Add Cart</span></td>
                            </tr>
                            <tr>
                                <td>#03</td>
                                <td>David Wallace</td>
                                <td>PRO54321</td>
                                <td>Vu 80cm (32 inch) HD Ready LED TV</td>
                                <td>$13,200</td>
                                <td>Online Payment</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>#04</td>
                                <td>Julia Bower</td>
                                <td>PRO97654</td>
                                <td>Micromax 81cm (32 inch) HD Ready LED TV</td>
                                <td>$15,100</td>
                                <td>Cash on delivered</td>
                                <td><span class="badge badge-secondary">Delivering</span></td>
                            </tr>
                            <tr>
                                <td>#05</td>
                                <td>Kevin James</td>
                                <td>PRO4532</td>
                                <td>HP 200 Mouse &amp; Wireless Laptop Keyboard </td>
                                <td>$5,987</td>
                                <td>Online Payment</td>
                                <td><span class="badge badge-danger">Shipped</span></td>
                            </tr>
                            <tr>
                                <td>#06</td>
                                <td>Theresa Wright</td>
                                <td>PRO6789</td>
                                <td>Digisol DG-HR3400 Router </td>
                                <td>$11,987</td>
                                <td>Cash on delivered</td>
                                <td><span class="badge badge-success">Delivering</span></td>
                            </tr>
                            <tr>
                                <td>#07</td>
                                <td>Sebastian Black</td>
                                <td>PRO4567</td>
                                <td>Dell WM118 Wireless Optical Mouse</td>
                                <td>$4,700</td>
                                <td>Online Payment</td>
                                <td><span class="badge badge-secondary">Add to Cart</span></td>
                            </tr>
                            <tr>
                                <td>#08</td>
                                <td>Kevin Glover</td>
                                <td>PRO32156</td>
                                <td>Dell 16 inch Laptop Backpack </td>
                                <td>$678</td>
                                <td>Cash On delivered</td>
                                <td><span class="badge badge-cyan">Delivered</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
