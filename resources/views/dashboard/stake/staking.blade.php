@extends('dashboard.layout.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

        <div class="row">
        <div class="col-xl-8">
        <div class="card">
            <div class="card-body border-bottom">

                <div>
                    <div class="mb-4 me-3">
                        <i class="mdi mdi-account-circle text-primary h1"></i>
                    </div>

                    <div>
                        <h5 class="">{{ auth()->user()->name }}</h5>
                        <p class="text-muted mb-1">{{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="card-body border-bottom">
                <div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <p class="text-muted mb-2">Staked Balance</p>
                                <h5>$ 0.00</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end mt-4 mt-sm-0">
                                <p class="text-muted mb-2">Since last month</p>
                                <h5>+ $ 0.00   <span class="badge bg-success ms-1 align-bottom">+ 0.00 %</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text text-center">Automated Staking Pool</h2>
                <h4 class="card-title">Tokens</h4>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="border p-3 rounded mt-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="mdi mdi-ethereum"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Ethereum</h5>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-muted mt-3">
                                        <p>Annual Yield</p>
                                        <h4>121 %</h4>
                                        <p>Duration</p>
                                        <h4>30 Days</h4>
                                        <p class="mb-0">1.47 ETH</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 align-self-end">
                                    <p>Amount</p>
                                    <h4>$400</h4>
                                    <div class="float-end mt-3">
                                        <a href="{{ route('user.connect') }}" class="btn btn-primary">Stake Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($stake as $item)

                    <div class="col-lg-4">
                            <div class="border p-3 rounded mt-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                            <i class="mdi mdi-bitcoin"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Bitcoin </h5>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-muted mt-3">
                                            <p>Annual Yield</p>
                                            <h4>{{ $item->interest }} %</h4>
                                            <p>Duration</p>
                                            <h4>{{ $item->duration }} Days</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 align-self-end">
                                        <p>Amount</p>
                                        <h4>${{ $item->amount }}</h4>
                                        <div class="float-end mt-3">
                                            <a href="javascript: void(0);" class="btn btn-primary">Stake Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
        </div>
    </div>
@endsection
