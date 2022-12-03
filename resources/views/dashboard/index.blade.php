@extends('dashboard.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="mb-4 me-3">
                                    <i class="mdi mdi-account-circle text-primary h1"></i>
                                </div>

                                <div>
                                    <h5>{{ auth()->user()->name }}</h5>
                                    <p class="text-muted mb-1">{{ auth()->user()->email }}</p>
                                    <p class="text-muted mb-0">Id no: #SK0234</p>

                                </div>
                            </div>
                        </div>

                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="fw-medium mb-2">Balance :</p>
                                        <h4>$ {{ auth()->user()->balance ? : "0.00" }}</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-4 mt-sm-0">
                                        <p class="fw-medium mb-2">Coin :</p>
                                        <div class="d-inline-flex align-items-center mt-1">

                                            <a href="javascript: void(0);" class="m-1">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                        <i class="mdi mdi-bitcoin"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <a href="javascript: void(0);" class="m-1">
                                                <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                                    <i class="mdi mdi-ethereum"></i>
                                                                </span>
                                                </div>
                                            </a>
                                            <a href="javascript: void(0);" class="m-1">
                                                <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-info bg-soft text-info font-size-18">
                                                                    <i class="mdi mdi-litecoin"></i>
                                                                </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-transparent border-top">
                            <div class="text-center">
                                <a href="{{ route('user.assets') }}" class="btn btn-primary me-2 w-md">HOLD</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card">
                        <div>
                            <div class="row">
                                <div class="col-lg-9 col-sm-8">
                                    <div  class="p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4 align-self-center">
                                    <div>
                                        <img src="{{ asset('assets/images/crypto/features-img/img-1.png') }}" alt="" class="img-fluid d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-1" lcw-coin="BTC" lcw-base="USD" lcw-secondary="BTC" lcw-period="d" lcw-color-tx="#ffffff" lcw-color-pr="#58c7c5" lcw-color-bg="#1f2434" lcw-border-w="1" ></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-1" lcw-coin="ETH" lcw-base="USD" lcw-secondary="BTC" lcw-period="d" lcw-color-tx="#ffffff" lcw-color-pr="#58c7c5" lcw-color-bg="#1f2434" lcw-border-w="1" ></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-8">
                    <script src="https://widgets.coingecko.com/coingecko-coin-list-widget.js"></script>
                    <coingecko-coin-list-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" locale="en"></coingecko-coin-list-widget>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Overview</h4>

                            <div>

                                <div id="overview-chart" class="apex-charts" dir="ltr">
                                    <div class="toolbar d-flex flex-wrap gap-2 justify-content-center">
                                        <button type="button" class="btn btn-light btn-sm" id="one_month">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm" id="six_months">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm active" id="one_year">
                                            1Y
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm" id="all">
                                            ALL
                                        </button>
                                    </div>
                                    <div id="overview-chart-timeline" data-colors='["--bs-warning"]'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

@endsection
