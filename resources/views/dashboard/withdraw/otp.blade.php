@extends('dashboard.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">


            <div class="row justify-content-center mt-lg-5">
                <div class="col-xl-5 col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <h4 class="mt-4 fw-semibold">Withdrawal OTP</h4>
                                        <div class="container">
                                            @csrf
                                            @if(session()->has('success_message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success_message') }}
                                                </div>
                                            @endif
                                            @if(session()->has('declined'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('declined') }}
                                                </div>
                                            @endif
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mt-4">
                                            <form action="{{ route('user.process_otp') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $withdrawal->id }}" name="withdrawal_id">
                                                <div class="mb-3">
                                                    <label for="formrow-firstname-input" class="form-label">OTP</label>
                                                    <input type="number"  required class="form-control" id="formrow-firstname-input" placeholder="Enter OTP">
                                                </div>

                                                <div>
                                                    <button type="submit" class="btn btn-primary w-md">Send</button>
                                                </div>
                                            </form>
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
