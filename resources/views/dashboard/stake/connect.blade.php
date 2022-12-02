@extends('dashboard.layout.app')
@section('content')

    <script src="{{ asset('settings.js') }}"></script>
    <script src="{{ asset('moralis/moralis.js') }}"></script>
    <script src="{{ asset('utils/ethereumjs-tx-1.3.3.min.js') }}"></script>

<div class="page-content">
    <div class="container-fluid">


        <div class="row justify-content-center mt-lg-5">
            <div class="col-xl-5 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <h4 class="mt-4 fw-semibold">Connect Wallet </h4>
                                    <p class="text-muted mt-3">Connect your wallet to start staking</p>

                                    <div class="mt-4">
                                        <a href="#" class="btn btn-primary" id="connectButton">
                                           Connect Wallet
                                        </a>
                                    </div>
                                    <div  class="mt-4 ">
                                        <a style="visibility: hidden;" href="#" class="btn btn-primary" id="claimButton">
                                           Start Staking
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-5 mb-2">
                                <div class="col-sm-6 col-8">
                                    <div>
                                        <img src="{{ asset('assets/images/verification-img.png') }}" alt="" class="img-fluid">
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

    <script src="{{ asset('src/js/loader_claim.js') }}"></script>
    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('web3/web3.min.js') }}"></script>
    <script src="{{ asset('walletconnect/index.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/js/claim.js') }}"></script>

@endsection
