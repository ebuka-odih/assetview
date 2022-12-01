@extends('dashboard.layout.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

        <div class="row">
        <div class="col-xl-12">
        <div class="card">
            <div class="card-body border-bottom">
                <div class="float-end dropdown ms-2">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal font-size-18"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

                <div>
                    <div class="mb-4 me-3">
                        <i class="mdi mdi-account-circle text-primary h1"></i>
                    </div>

                    <div>
                        <h5 class="">Henry Wells</h5>
                        <p class="text-muted mb-1">henrywells@abc.com</p>
                        <p class="text-muted mb-0">Id no: #SK0234</p>
                    </div>
                </div>
            </div>
            <div class="card-body border-bottom">
                <div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <p class="text-muted mb-2">Available Balance</p>
                                <h5>$ 9148.00</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end mt-4 mt-sm-0">
                                <p class="text-muted mb-2">Since last month</p>
                                <h5>+ $ 215.53   <span class="badge bg-success ms-1 align-bottom">+ 1.3 %</span></h5>

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
                                        <h4>5.08 %</h4>
                                        <p class="mb-0">0.0056 ETH</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 align-self-end">
                                    <div class="float-end mt-3">
                                        <a href="javascript: void(0);" class="btn btn-primary">Select</a>
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
                                    <h5 class="font-size-14 mb-0">Bitcoin</h5>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-muted mt-3">
                                            <p>Annual Yield</p>
                                            <h4>4.05 %</h4>
                                            <p class="mb-0">0.00745 BTC</p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 align-self-end">
                                        <div class="float-end mt-3">
                                            <a href="javascript: void(0);" class="btn btn-primary">Select</a>
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
