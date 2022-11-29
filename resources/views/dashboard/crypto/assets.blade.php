@extends('dashboard.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div>
                            <div class="row">
                                <div class="col-lg-9 col-sm-8">
                                    <div  class="p-4">
                                        <h5 class="text-primary">Crypto Assets</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($assets as $item)
                        <div class="col-sm-3">
                            <div class="card">
                                <a href="">
                                    <div class="card-body">
                                        <h3 class="text-muted mb-4">
                                            <img style="border-radius: 50%; height: 40px; width: 40px" src="{{ asset('proof/'.$item->icon ) }}" alt="">
                                            {{ $item->name }}
                                        </h3>


                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    <h5 class="text-black">${{ $item->amount }}</h5>
                                                    <p class="text-muted text-truncate mb-0">+ ROI ( {{ $item->interest }} % ) <i class="mdi mdi-arrow-up ms-1 text-success"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
            <!-- end row -->


            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection
