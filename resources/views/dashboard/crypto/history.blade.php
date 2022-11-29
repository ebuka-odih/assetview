@extends('dashboard.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">



            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">My Assets</h4>

                            <div class="table-responsive">
                                <table class="table table-nowrap align-middle mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Token</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Interest</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($deposits as $item)
                                        @if($item->status == 1)
                                     <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs me-3">
                                                    <span class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                        <img style="border-radius: 50%; height: 40px; width: 40px" src="{{ asset('crypto/'.$item->crypto_asset->icon ) }}" alt="">
                                                    </span>
                                                </div>
                                                <span>{{ $item->crypto_asset->name }}</span>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="text-muted">
                                                $ {{ $item->amount }}
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1">{{ $item->crypto_asset->interest }}%</h5>
                                            <div class="text-muted">${{ $item->roi() }}</div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1">${{ $item->roi() + $item->amount }}</h5>
                                        </td>
                                         <td>
                                             {!! $item->status() !!}
                                         </td>

                                        <td style="width: 120px;">
                                            <a href="javascript: void(0);" class="btn btn-primary btn-sm w-xs">View</a>
                                        </td>
                                    </tr>
                                        @else
                                     <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-xs me-3">
                                                    <span class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                        <img style="border-radius: 50%; height: 40px; width: 40px" src="{{ asset('crypto/'.$item->crypto_asset->icon ) }}" alt="">
                                                    </span>
                                                        </div>
                                                        <span>{{ $item->crypto_asset->name }}</span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="text-muted">
                                                        $ {{ $item->amount }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1">{{ $item->crypto_asset->interest }}%</h5>
{{--                                                    <div class="text-muted">${{ $item->roi() }}</div>--}}
                                                </td>
                                                <td>

                                                </td>
                                                 <td>
                                                     {!! $item->status() !!}
                                                 </td>

                                                <td style="width: 120px;">
                                                    <a href="javascript: void(0);" class="btn btn-primary btn-sm w-xs">View</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

@endsection
