@extends('layouts.admin')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <!-----------  Front Cards     ----------->
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info">850</h3>
                                            <h6>{{__('admin/body.product sold')}}</h6>
                                        </div>
                                        <div>
                                            <i class="icon-basket-loaded info font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">$748</h3>
                                            <h6>{{__('admin/body.net profit')}}</h6>
                                        </div>
                                        <div>
                                            <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="success">146</h3>
                                            <h6>{{__('admin/body.new customers')}}</h6>
                                        </div>
                                        <div>
                                            <i class="icon-user-follow success font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">99.89 %</h3>
                                            <h6>{{__('admin/body.customers')}}</h6>
                                        </div>
                                        <div>
                                            <i class="icon-heart danger font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Earning & Recent Sales -->
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Emails</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0">
                                    <p>Open rate
                                        <span class="float-right text-bold-600">89%</span>
                                    </p>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="pt-1">Sent
                                        <span class="float-right">
                      <span class="text-bold-600">310</span>/500</span>
                                    </p>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('admin/body.top product')}}</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a href="#">{{__('admin/body.show all')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                            <tr>
                                                <th scope="row" class="border-top-0">iPone X</th>
                                                <td class="border-top-0">2245</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">One Plus</th>
                                                <td>1850</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Samsung S7</th>
                                                <td>1550</td>
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
                    <div id="recent-sales" class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('admin/body.recent sales')}}</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">{{__('admin/body.view all')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content mt-1">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0">{{__('admin/body.products')}}</th>
                                            <th class="border-top-0">{{__('admin/body.customers')}}</th>
                                            <th class="border-top-0">{{__('admin/body.categories')}}</th>
                                            <th class="border-top-0">{{__('admin/body.popularity')}}</th>
                                            <th class="border-top-0">{{__('admin/body.amount')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate">iPone X</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-4.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-5.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <span class="badge badge-info">+8 more</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">$ 1200.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">iPad</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-7.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-8.png" alt="Avatar">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <span class="badge badge-info">+5 more</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">$ 1190.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">OnePlus</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-1.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-2.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-3.png" alt="Avatar">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <span class="badge badge-info">+3 more</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">$ 999.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">ZenPad</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">$ 1150.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Pixel 2</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../assets/admin/images/portrait/small/avatar-s-4.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">$ 1180.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sell Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <p class="text-muted">Total BTC available: 6542.56585</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>Price per BTC</th>
                                            <th>BTC Ammount</th>
                                            <th>Total($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-success bg-lighten-5">
                                            <td>10583.4</td>
                                            <td><i class="cc BTC-alt"></i> 0.45000000</td>
                                            <td>$ 4762.53</td>
                                        </tr>
                                        <tr>
                                            <td>10583.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                            <td>$ 423.34</td>
                                        </tr>
                                        <tr>
                                            <td>10583.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                            <td>$ 2656.51</td>
                                        </tr>
                                        <tr>
                                            <td>10583.8</td>
                                            <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                            <td>$ 3704.33</td>
                                        </tr>
                                        <tr>
                                            <td>10595.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                            <td>$ 3178.71</td>
                                        </tr>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>10599.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                            <td>$ 211.99</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buy Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <p class="text-muted">Total USD available: 9065930.43</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>Price per BTC</th>
                                            <th>BTC Ammount</th>
                                            <th>Total($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>10599.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                            <td>$ 211.99</td>
                                        </tr>
                                        <tr>
                                            <td>10583.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                            <td>$ 423.34</td>
                                        </tr>
                                        <tr>
                                            <td>10583.8</td>
                                            <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                            <td>$ 3704.33</td>
                                        </tr>
                                        <tr>
                                            <td>10595.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                            <td>$ 3178.71</td>
                                        </tr>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>10583.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                            <td>$ 2656.51</td>
                                        </tr>
                                        <tr>
                                            <td>10595.8</td>
                                            <td><i class="cc BTC-alt"></i> 0.29697926</td>
                                            <td>$ 3146.74</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Sell Orders & Buy Order -->
                <!-- Active Orders -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Active Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <td>
                                        <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Cancel all</button>
                                    </td>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Amount BTC</th>
                                            <th>BTC Remaining</th>
                                            <th>Price</th>
                                            <th>USD</th>
                                            <th>Fee (%)</th>
                                            <th>Cancel</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 6979.78</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:50:50</td>
                                            <td class="danger">Sell</td>
                                            <td><i class="cc BTC-alt"></i> 1.38647</td>
                                            <td><i class="cc BTC-alt"></i> 0.38647</td>
                                            <td>11905.09</td>
                                            <td>$ 4600.97</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:49:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.45879</td>
                                            <td><i class="cc BTC-alt"></i> 0.45879</td>
                                            <td>11901.85</td>
                                            <td>$ 5460.44</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.89877</td>
                                            <td><i class="cc BTC-alt"></i> 0.89877</td>
                                            <td>11899.25</td>
                                            <td>$ 10694.6</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="danger">Sell</td>
                                            <td><i class="cc BTC-alt"></i> 0.45712</td>
                                            <td><i class="cc BTC-alt"></i> 0.45712</td>
                                            <td>11908.58</td>
                                            <td>$ 5443.65</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 6979.78</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Active Orders -->
            </div>
        </div>
    </div>

@stop
