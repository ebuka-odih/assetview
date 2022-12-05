@extends('dashboard.layout.app')
@section('content')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Deposit</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

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
                                    <h4 class="mt-4 fw-semibold">Deposit</h4>
                                    <div class="visible-print text-center mb-3">
                                        {!! QrCode::size(100)->generate($asset->value); !!}
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group" id="timepicker-input-group1">
                                            <input id="bar" type="text" class="form-control" value="{{ $asset->value }}">

                                            <a href="#" class="btn input-group-text" data-clipboard-target="#bar"><i class="mdi mdi-clipboard"></i></a>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <form action=""></form>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
                                            Click here for Verification
                                        </button>
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
                        <div class="modal fade bs-example-modal-center" tabindex="-1" aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Deposit Proof</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="{{ route('user.processPayment') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label for="">Deposit Amount</label>
                                            <input type="number" name="amount" class="form-control">

                                            <label for="">Deposit Hash</label>
                                            <input type="hidden" name="coin_id" value="{{ $asset->id }}">
                                            <input type="text" required class="form-control" name="proof" placeholder="eg: 6676ba1006270db8601eadb7e5418234e6be4a...">
                                            <button type="submit" class="btn btn-primary mt-3">Paid</button>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
<script>
    new ClipboardJS('.btn');
</script>
@endsection
