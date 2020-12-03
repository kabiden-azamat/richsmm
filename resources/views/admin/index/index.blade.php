@extends('admin.layout.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-body">
                    <div class="d-md-flex justify-content-between align-items-center d-inline-block">
                        <h3 class="my-0">ETH/BTC</h3>
                        <div>
                            <p class="mb-5 text-fade">Last Price</p>
                            <h4 class="mb-0"><span class="text-success">0.0000245</span> <span class="ml-5">$1.25</span></h4>
                        </div>
                        <div class="d-lg-block d-none">
                            <p class="mb-5 text-fade">24h Change</p>
                            <h4 class="mb-0"><span class="text-success">0.0000045</span> <span class="ml-5 text-success">+0.25</span></h4>
                        </div>
                        <div class="d-lg-block d-none">
                            <p class="mb-5 text-fade">24h High</p>
                            <h4 class="mb-0"><span class="text-dark">0.0002154</span></h4>
                        </div>
                        <div class="d-lg-block d-none">
                            <p class="mb-5 text-fade">24h Low</p>
                            <h4 class="mb-0"><span class="text-danger">0.0001154</span></h4>
                        </div>
                        <div>
                            <p class="mb-5 text-fade">24h Total</p>
                            <h4 class="mb-0"><span class="text-dark">142.00002154 BTC</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Positions</h4>
                    <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide" href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                </div>
                <div class="box-body p-10">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped table-bordered no-margin">
                            <thead>
                            <tr>
                                <th>Symbol</th>
                                <th>Change</th>
                                <th>Gain</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><p class="font-size-18 no-margin">AGBUR</p></td>
                                <td><p class="no-margin text-success">0.04 (2.50%)</p></td>
                                <td class="no-wrap">5189.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">INVHTR</p></td>
                                <td><p class="no-margin text-success">0.04 (2.50%)</p></td>
                                <td class="no-wrap">215.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">MJHYR</p> </td>
                                <td><p class="no-margin text-danger">-0.39 (-1.50%)</p></td>
                                <td class="no-wrap">487.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">POLRT</p></td>
                                <td><p class="no-margin text-danger">-0.85 (-0.50%)</p></td>
                                <td class="no-wrap">85.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">UAREF</p></td>
                                <td><p class="no-margin text-success">0.89 (2.50%)</p></td>
                                <td class="no-wrap">215.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">IOPRE</p></td>
                                <td><p class="no-margin text-danger">-2.04 (-9.50%)</p></td>
                                <td class="no-wrap">958.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">GFTRE</p></td>
                                <td><p class="no-margin text-success">0.04 (2.50%)</p></td>
                                <td class="no-wrap">5189.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">IOPUY</p></td>
                                <td><p class="no-margin text-success">0.04 (2.50%)</p></td>
                                <td class="no-wrap">215.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">QWERD</p> </td>
                                <td><p class="no-margin text-danger">-0.39 (-1.50%)</p></td>
                                <td class="no-wrap">487.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">MNJHY</p></td>
                                <td><p class="no-margin text-danger">-0.85 (-0.50%)</p></td>
                                <td class="no-wrap">85.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">DCFRE</p></td>
                                <td><p class="no-margin text-success">0.89 (2.50%)</p></td>
                                <td class="no-wrap">215.25</td>
                            </tr>
                            <tr>
                                <td><p class="font-size-18 no-margin">MNJHYU</p></td>
                                <td><p class="no-margin text-danger">-2.04 (-9.50%)</p></td>
                                <td class="no-wrap">958.25</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <ul class="nav nav-pills mb-20" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active font-size-18" data-toggle="tab" href="#market" role="tab">Market</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-size-18" data-toggle="tab" href="#limit" role="tab">Limit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-size-18" data-toggle="tab" href="#stop" role="tab">Stop</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="market">
                            <form>
                                <div class="input-group mt-15 mb-20">
                                    <input type="text" class="form-control" placeholder="2.500002121">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Amount BTC</span>
                                    </div>
                                </div>
                                <div class="input-group mb-20">
                                    <input type="text" class="form-control" placeholder="27800.00">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Price BPL</span>
                                    </div>
                                </div>
                                <div class="input-group mb-20">
                                    <input type="text" class="form-control" placeholder="2.500002121">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Fee (0.5%)</span>
                                    </div>
                                </div>
                                <div class="input-group mb-20">
                                    <input type="text" class="form-control" placeholder="27800.00">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Total BPL</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between pt-5">
                                    <button type="button" class="btn btn-success">BUY</button>
                                    <button type="button" class="btn btn-danger mt-0">SELL</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="limit">
                            <form>
                                <div class="input-group mt-15 mb-20">
                                    <input type="text" class="form-control" placeholder="2.500002121">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Amount BTC</span>
                                    </div>
                                </div>
                                <div class="input-group mb-20">
                                    <input type="text" class="form-control" placeholder="27800.00">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Price BPL</span>
                                    </div>
                                </div>
                                <div class="input-group mb-20">
                                    <input type="text" class="form-control" placeholder="2.500002121">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Fee (0.5%)</span>
                                    </div>
                                </div>
                                <div class="input-group mb-20">
                                    <input type="text" class="form-control" placeholder="27800.00">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Total BPL</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between pt-5">
                                    <button type="button" class="btn btn-success">BUY</button>
                                    <button type="button" class="btn btn-danger mt-0">SELL</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="stop">
                            <form>
                                <div class="input-group mt-15 mb-20">
                                    <input type="text" class="form-control" placeholder="2.500002121">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Amount BTC</span>
                                    </div>
                                </div>
                                <div class="input-group mb-20">
                                    <input type="text" class="form-control" placeholder="27800.00">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Price BPL</span>
                                    </div>
                                </div>
                                <div class="input-group mb-20">
                                    <input type="text" class="form-control" placeholder="2.500002121">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Fee (0.5%)</span>
                                    </div>
                                </div>
                                <div class="input-group mb-20">
                                    <input type="text" class="form-control" placeholder="27800.00">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Total BPL</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between pt-5">
                                    <button type="button" class="btn btn-success">BUY</button>
                                    <button type="button" class="btn btn-danger mt-0">SELL</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Wallet Balance</h4>
                </div>
                <div class="box-body">
                    <div class="d-flex justify-content-between bb-1 pb-5">
                        <h5 class="text-fade">Asset</h5>
                        <h5 class="text-fade">Amount</h5>
                    </div>
                    <div class="d-flex justify-content-between pb-5 pt-10">
                        <h4>USDC</h4>
                        <h4>0.00</h4>
                    </div>
                    <div class="d-flex justify-content-between pb-10">
                        <h4>BTC</h4>
                        <h4>0.0000000</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-down"></i> DEPOSIT</button>
                        <button type="button" class="btn btn-success mt-0"><i class="fa fa-arrow-circle-up"></i> WITHDRAW</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-12">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="box box-body pull-up">
                        <div class="d-flex justify-content-between">
                            <div class="p-0">
                                <div class="text-center">
                                    <a href="#"><i class="cc XRP mr-5" title="XRP"></i></a>
                                </div>
                                <div>
                                    <h3 class="no-margin text-bold">Ripple</h3>
                                    <span>Real Estate</span>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <p class="no-margin font-weight-600"><span class="text-warning">$5.0</span> / $1.0</p>
                                    <p class="no-margin">Sponsored</p>
                                </div>
                                <div class="mt-10">
                                    <p class="no-margin font-weight-600"><span class="text-warning">74%</span></p>
                                    <p class="no-margin">5d left</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box box-body pull-up">
                        <div class="d-flex justify-content-between">
                            <div class="p-0">
                                <div class="text-center">
                                    <a href="#"><i class="cc EOS mr-5" title="EOS"></i></a>
                                </div>
                                <div>
                                    <h3 class="no-margin text-bold">EOS</h3>
                                    <span>Exchange</span>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <p class="no-margin font-weight-600"><span class="text-warning">$2.7</span> / $9.7</p>
                                    <p class="no-margin">Sponsored</p>
                                </div>
                                <div class="mt-10">
                                    <p class="no-margin font-weight-600"><span class="text-warning">87%</span></p>
                                    <p class="no-margin">5d left</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box box-body pull-up">
                        <div class="d-flex justify-content-between">
                            <div class="p-0">
                                <div class="text-center">
                                    <a href="#"><i class="cc LSK mr-5" title="LSK"></i></a>
                                </div>
                                <div>
                                    <h3 class="no-margin text-bold">Lisk</h3>
                                    <span>Trading</span>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <p class="no-margin font-weight-600"><span class="text-warning">$7.9</span> / $7.0</p>
                                    <p class="no-margin">Sponsored</p>
                                </div>
                                <div class="mt-10">
                                    <p class="no-margin font-weight-600"><span class="text-warning">74%</span></p>
                                    <p class="no-margin">5d left</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box bg-primary">
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <h4 class="text-white mb-50">Market Overview </h4>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="fa fa-trophy"></i>
                                    </div>
                                    <div class="w-100">
                                        <h3 class="font-weight-600 text-white mb-0 mt-0">340</h3>
                                        <p class="text-white-50">Market</p>
                                        <h5 class="text-white">+34k <span class="ml-10"><i class="fa fa-angle-down mr-5"></i><span class="text-white-50">0.1%</span></span> </h5>
                                    </div>
                                </div>
                                <div>
                                    <div id="apexChart2" class="mx-50 mx-xs-20"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <h4 class="text-white mb-50">Treding Overview </h4>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="fa fa-trophy"></i>
                                    </div>
                                    <div class="w-100">
                                        <h3 class="font-weight-600 text-white mb-0 mt-0">$9.00</h3>
                                        <p class="text-white-50">Treding</p>
                                        <h5 class="text-white">-6.2k  <span class="ml-10"><i class="fa fa-angle-down mr-5"></i><span class="text-white-50">2%</span></span> </h5>
                                    </div>
                                </div>
                                <div>
                                    <div id="apexChart3" class="mx-50 mx-xs-20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Market</h4>

                    <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide"  href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <div id="controls" style="width: 100%; overflow: hidden;">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="d-flex align-items-center">
                                        From: <input type="text" id="fromfield" class="amcharts-input form-control" />
                                        To: <input type="text" id="tofield" class="amcharts-input form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="text-right mt-md-10">
                                        <button id="b1m" class="amcharts-input btn btn-primary">1m</button>
                                        <button id="b3m" class="amcharts-input btn btn-primary">3m</button>
                                        <button id="b6m" class="amcharts-input btn btn-primary">6m</button>
                                        <button id="b1y" class="amcharts-input btn btn-primary">1y</button>
                                        <button id="bytd" class="amcharts-input btn btn-primary">YTD</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="chartdiv30" class="h-400"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Sell</h4>
                            <div class="box-controls pull-right">
                                Total: 409.2820
                            </div>
                        </div>
                        <div class="box-body p-0">
                            <div class="table-responsive buy-sall-table">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th width="25%">Price</th>
                                        <th>BTC Amount</th>
                                        <th>Total: (USD)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr><td>82.3</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.15</td><td>$ 134.7</td></tr>
                                    <tr><td>82.4</td> <td><i class="cc BTC font-size-14 mr-5"></i> 2.66</td><td>$ 238.3</td></tr>
                                    <tr><td>82.5</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.32</td><td>$ 288.6</td></tr>
                                    <tr><td>84.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 878.4</td></tr>
                                    <tr><td>95.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 958.6</td></tr>
                                    <tr><td>95.9</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.30</td><td>$ 270.4</td></tr>
                                    <tr><td>97.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.00</td><td>$ 30.2</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Buy </h4>
                            <div class="box-controls pull-right">
                                Total: 406.00
                            </div>
                        </div>
                        <div class="box-body p-0">
                            <div class="table-responsive buy-sall-table">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th width="25%">Price</th>
                                        <th>BTC Amount</th>
                                        <th>Total: (USD)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr><td>82.3</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.15</td><td>$ 134.7</td></tr>
                                    <tr><td>82.4</td> <td><i class="cc BTC font-size-14 mr-5"></i> 2.66</td><td>$ 234.3</td></tr>
                                    <tr><td>82.5</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.32</td><td>$ 288.6</td></tr>
                                    <tr><td>84.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 878.4</td></tr>
                                    <tr><td>95.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 958.6</td></tr>
                                    <tr><td>95.9</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.30</td><td>$ 270.4</td></tr>
                                    <tr><td>97.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.00</td><td>$ 30.2</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="box">
                <div class="box-body">
                    <ul id="webticker-3">
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">BCH<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -2.24%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">0.04886 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">20,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">REP<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -2.57%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">20.12 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">45,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">EOS<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +1.54%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">4.755 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">65,123</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">ZRX<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -1.33%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">0.26877 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">11,435</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">ETH<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +0.57%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">159.73 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">12,456</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">LTC<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +1.30%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">73.42 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">66,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">ETC<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -0.19%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">5.719 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">22,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">

                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">BCH<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +0.42%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">267.72 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">34,654</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">XRP<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -0.50%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">0.2974 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">12,345</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">BTC<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +3.15%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">5,497.49 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">56,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">REP<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -2.52%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">20.13 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">23,569</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">EOS<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +1.58%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">4.757 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">78,879</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">ZRX<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -2.07%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">0.268135 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">65,908</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">ETH<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +0.47%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">159.55 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">12,234</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">LTC<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +1.28%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">73.40 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">34,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">ETC<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -0.44%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">5.715 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">67,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">BCH<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +0.43%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">268.00 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">87,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">XRP<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -0.54%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">0.2970 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">13,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">BTC<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-success"> +3.00%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">5,490.01 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">43,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="br-1">
                            <div class="mx-20">
                                <div class="d-flex justify-content-center">
                                    <h6 class="font-weight-300 mr-5">XLM<span class="px-5">|</span>BTC </h6>
                                    <h6 class="font-weight-300 text-danger"> -0.97%</h6>
                                </div>
                                <div class="d-block text-center">
                                    <h3 class=" font-weight-400 my-0">0.099065 <span>USD</span></h3>
                                    <p class="mb-0"><span class="font-weight-300">Volum</span><span class="px-5">23,601</span><span>BTC</span></p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
