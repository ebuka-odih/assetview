@extends('dashboard.layout.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

        <div class="row">

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text text-center">Staking Pool</h2>
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
                                        <h4>15 %</h4>
                                        <p>Duration</p>
                                        <h4>30 Days</h4>
                                    </div>
                                </div>

                                <div class="col-lg-6 align-self-end">
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
                                             <img style="height: 50px; width: 50px" src="{{ asset('crypto/'.$item->icon) }}" alt="">
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">{{ $item->name }} </h5>
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
                                        <div class="float-end mt-3">
                                            <a href="{{ route('user.staking.payment', $item->id) }}" class="btn btn-primary">Stake Now</a>
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
