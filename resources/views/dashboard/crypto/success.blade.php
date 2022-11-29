@extends('dashboard.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">


            <div class="row justify-content-center mt-lg-5">
                <div class="col-xl-5 col-sm-8">
                    <div class="card">
                        <div class="card-body">

                            <div class="text-center">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">

                                        <div class="mb-3">
                                            <i style="font-size: 150px" class="mdi mdi-check-circle text-success"></i>
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="mt-4">
                                            <!-- Button trigger modal -->
                                            <a href="{{ route('user.assets.history') }}" class="btn btn-primary" >
                                                Goto Transaction
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center mt-5 mb-2">
                                    <div class="col-sm-6 col-8">
                                        <div>
                                            {{--                                        <img src="{{ asset('assets/images/verification-img.png') }}" alt="" class="img-fluid">--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

@endsection
