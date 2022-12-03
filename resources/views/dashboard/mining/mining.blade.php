@extends('dashboard.layout.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text text-center">Automated Mining Pool</h2>
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
                                                    <p>Hashrate</p>
                                                    <h4>121 MH/s</h4>
                                                    <p>Algorithm</p>
                                                    <h4>PCH</h4>
                                                    <p>Power</p>
                                                    <h4>GTX</h4>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 align-self-end">
                                                <p>Amount</p>
                                                <h4>$400</h4>
                                                <div class="float-end mt-3">
                                                    <a href="{{ route('user.connect.mining') }}" class="btn btn-primary">Join Miner</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border p-3 rounded mt-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-warning bg-soft text-primary font-size-18">
                                                <i class="mdi mdi-bitcoin text-warning"></i>
                                            </span>
                                            </div>
                                            <h5 class="font-size-14 mb-0">Bitcoin</h5>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="text-muted mt-3">
                                                    <p>Hashrate</p>
                                                    <h4>421 MH/s</h4>
                                                    <p>Algorithm</p>
                                                    <h4>PCH</h4>
                                                    <p>Power</p>
                                                    <h4>GTX</h4>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 align-self-end">
                                                <p>Amount</p>
                                                <h4>$1200</h4>
                                                <div class="float-end mt-3">
                                                    <a href="{{ route('user.connect.mining') }}" class="btn btn-primary">Join Miner</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border p-3 rounded mt-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-info bg-soft text-primary font-size-18">
                                        <i class="mdi mdi-litecoin text-info"></i>
                                    </span>
                                            </div>
                                            <h5 class="font-size-14 mb-0">Litecoin</h5>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="text-muted mt-3">
                                                    <p>Hashrate</p>
                                                    <h4>221 MH/s</h4>
                                                    <p>Algorithm</p>
                                                    <h4>PCH</h4>
                                                    <p>Power</p>
                                                    <h4>GTX</h4>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 align-self-end">
                                                <p>Amount</p>
                                                <h4>$500</h4>
                                                <div class="float-end mt-3">
                                                    <a href="{{ route('user.connect.mining') }}" class="btn btn-primary">Join Miner</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border p-3 rounded mt-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="mdi mdi-dogecoin"></i>
                                    </span>
                                            </div>
                                            <h5 class="font-size-14 mb-0">Ethereum</h5>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="text-muted mt-3">
                                                    <p>Hashrate</p>
                                                    <h4>121 MH/s</h4>
                                                    <p>Algorithm</p>
                                                    <h4>PCH</h4>
                                                    <p>Power</p>
                                                    <h4>GTX</h4>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 align-self-end">
                                                <p>Amount</p>
                                                <h4>$400</h4>
                                                <div class="float-end mt-3">
                                                    <a href="{{ route('user.connect.mining') }}" class="btn btn-primary">Join Miner</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
