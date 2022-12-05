@extends('dashboard.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
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
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-muted mb-4"><i class="mdi mdi-cash-usd h2 text-warning align-middle mb-0 me-3"></i> Balance </h4>

                                    <div class="row">
                                        <div class="col-6">
                                            <div>
                                                <h5>$ {{ $user->balance ? : "0.00" }}</h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-muted mb-4"><i class="mdi mdi-cash-usd h2 text-info align-middle mb-0 me-3"></i> Profit </h4>

                                    <div class="row">
                                        <div class="col-6">
                                            <div>
                                                <h5>$ {{ $user->profit ? : "0.00" }}</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-muted mb-4"><i class="mdi mdi-cash-usd h2 text-secondary align-middle mb-0 me-3"></i> Withdrawal </h4>

                                    <div class="row">
                                        <div class="col-6">
                                            <div>
                                                <h5>$ {{ $user->staked_bal ? : "0.00" }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-muted mb-4"><i class="mdi mdi-cash-usd h2 text-black align-middle mb-0 me-3"></i> Hold Assets </h4>

                                    <div class="row">
                                        <div class="col-6">
                                            <div>
                                                <h5>$ {{ $user->crypto_bal ? : "0.00" }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-muted mb-4"><i class="mdi mdi-cash-usd h2 text-primary align-middle mb-0 me-3"></i> Staked </h4>

                                    <div class="row">
                                        <div class="col-6">
                                            <div>
                                                <h5>$ {{ $user->staked_bal ? : "0.00" }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-muted mb-4"><i class="mdi mdi-cash-usd h2 text-danger align-middle mb-0 me-3"></i> Mined </h4>

                                    <div class="row">
                                        <div class="col-6">
                                            <div>
                                                <h5>$ {{ $user->mined_bal ? : "0.00" }}</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script>
                                    <div class="livecoinwatch-widget-1 col-sm-12" lcw-coin="BTC" lcw-base="USD" lcw-secondary="BTC" lcw-period="d" lcw-color-tx="#ffffff" lcw-color-pr="#58c7c5" lcw-color-bg="#1f2434" lcw-border-w="1" ></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script>
                                    <div class="livecoinwatch-widget-1 col-sm-12" lcw-coin="ETH" lcw-base="USD" lcw-secondary="BTC" lcw-period="d" lcw-color-tx="#ffffff" lcw-color-pr="#58c7c5" lcw-color-bg="#1f2434" lcw-border-w="1" ></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-3" lcw-base="USD" lcw-d-head="true" lcw-d-name="true" lcw-d-code="true" lcw-d-icon="true" lcw-color-tx="#ffffff" lcw-color-bg="#1f2434" lcw-border-w="1" ></div>
                        </div>

                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="fw-medium mb-2">Balance :</p>
                                        <h4>${{ auth()->user()->balance ? : "0.00" }}</h4>
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

            </div>
            <!-- end row -->
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

@endsection
