@extends('dashboard.layout.app')
@section('content')

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div>
                            <div class="mb-4 me-3">
                                <i class="mdi mdi-account-circle text-primary h1"></i>
                            </div>

                            <div>
                                <h5 class="">{{ auth()->user()->name }}</h5>
                                <p class="text-muted mb-1">{{ auth()->user()->email }}</p>
                                <p class="text-muted mb-0">Id no: #{{ auth()->user()->userId() }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-bottom">
                        <div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2">Available Balance</p>
                                        <h5>$ {{ auth()->user()->balance ? : "0.00" }}</h5>
                                    </div>
                                </div>
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="text-sm-end mt-4 mt-sm-0">--}}
{{--                                        <p class="text-muted mb-2">(%)</p>--}}
{{--                                        <h5>+--}}
{{--                                        <span class="badge bg-success ms-1 align-bottom">+ {{ $total_roi }} %</span>--}}
{{--                                        </h5>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">My Assets</h4>

                        <div class="row">
                            @foreach($deposits as $item)
                            <div class="col-lg-4">
                                <div class="border p-3 rounded mt-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                   <img style="border-radius: 50%; height: 40px; width: 40px" src="{{ asset('crypto/'.$item->crypto_asset->icon ) }}" alt="">
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">{{ $item->crypto_asset->name }}</h5>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="text-muted mt-3">
                                                <p>Annual Yield</p>
                                                <h4>{{ $item->crypto_asset->interest }} %</h4>
                                                <p class="mb-0">{{ $item->roi() + $item->amount }} USD</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 align-self-end">
                                            <div class="float-end mt-3">
                                                <p>Size</p>
                                                <h5>{{ $item->amount }} USD</h5>
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
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>

@endsection
