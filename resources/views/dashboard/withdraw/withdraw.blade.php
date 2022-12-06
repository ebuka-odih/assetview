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
                                    <h4 class="mt-4 fw-semibold">Request Withdrawal</h4>
{{--                                    <p class="text-muted mt-3">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis perferendis asperiores repellat.</p>--}}

                                    <div class="mt-4">
                                        <form method="POST" action="{{ route('user.processWithdraw') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Amount</label>
                                                <input type="number" name="amount" required class="form-control" id="formrow-firstname-input" placeholder="Enter amount">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Wallet type</label>
                                                <select name="wallet_type" class="form-control" id="">
                                                    <option value="USDT">USDT</option>
                                                    <option value="Bitcoin">Bitcoin</option>
                                                    <option value="Ethereum">Ethereum</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Wallet Address</label>
                                                <input type="text" name="wallet_address" required class="form-control" id="formrow-firstname-input" placeholder="Enter Wallet Address">
                                            </div>


                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-5 mb-2">
                                <div class="col-sm-6 col-8">
                                    <div>
                                        <img src="assets/images/verification-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Verify your Account</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div id="kyc-verify-wizard" role="application" class="wizard clearfix"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="kyc-verify-wizard-t-0" href="#kyc-verify-wizard-h-0" aria-controls="kyc-verify-wizard-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Personal Info</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="kyc-verify-wizard-t-1" href="#kyc-verify-wizard-h-1" aria-controls="kyc-verify-wizard-p-1"><span class="number">2.</span> Confirm email</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="kyc-verify-wizard-t-2" href="#kyc-verify-wizard-h-2" aria-controls="kyc-verify-wizard-p-2"><span class="number">3.</span> Document Verification</a></li></ul></div><div class="content clearfix">
                                                <!-- Personal Info -->
                                                <h3 id="kyc-verify-wizard-h-0" tabindex="-1" class="title current">Personal Info</h3>
                                                <section id="kyc-verify-wizard-p-0" role="tabpanel" aria-labelledby="kyc-verify-wizard-h-0" class="body current" aria-hidden="false">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="kycfirstname-input" class="form-label">First name</label>
                                                                    <input type="text" class="form-control" id="kycfirstname-input" placeholder="Enter First name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="kyclastname-input" class="form-label">Last name</label>
                                                                    <input type="text" class="form-control" id="kyclastname-input" placeholder="Enter Last name">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="kycphoneno-input" class="form-label">Phone</label>
                                                                    <input type="text" class="form-control" id="kycphoneno-input" placeholder="Enter Phone number">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="kycbirthdate-input" class="form-label">Date of birth</label>
                                                                    <input type="text" class="form-control" id="kycbirthdate-input" placeholder="Enter Date of birth">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="kycselectcity-input" class="form-label">City</label>
                                                                    <select class="form-select" id="kycselectcity-input">
                                                                        <option value="SF" selected="">San Francisco</option>
                                                                        <option value="LA">Los Angeles</option>
                                                                        <option value="SD">San Diego</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>

                                                <!-- Confirm email -->
                                                <h3 id="kyc-verify-wizard-h-1" tabindex="-1" class="title">Confirm email</h3>
                                                <section id="kyc-verify-wizard-p-1" role="tabpanel" aria-labelledby="kyc-verify-wizard-h-1" class="body" aria-hidden="true" style="display: none;">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-pancard-input">PAN Card</label>
                                                                    <input type="text" class="form-control" id="basicpill-pancard-input" placeholder="PAN Card No.">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-vatno-input">VAT/TIN No.</label>
                                                                    <input type="text" class="form-control" id="basicpill-vatno-input" placeholder="VAT/TIN No">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cstno-input">CST No.</label>
                                                                    <input type="text" class="form-control" id="basicpill-cstno-input" placeholder="CST No.">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-servicetax-input">Service Tax No.</label>
                                                                    <input type="text" class="form-control" id="basicpill-servicetax-input" placeholder="Service Tax No.">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-companyuin-input">Company UIN</label>
                                                                    <input type="text" class="form-control" id="basicpill-companyuin-input" placeholder="Company UIN">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-declaration-input">Declaration</label>
                                                                    <input type="text" class="form-control" id="basicpill-Declaration-input" placeholder="Declaration">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>

                                                <!-- Document Verification -->
                                                <h3 id="kyc-verify-wizard-h-2" tabindex="-1" class="title">Document Verification</h3>
                                                <section id="kyc-verify-wizard-p-2" role="tabpanel" aria-labelledby="kyc-verify-wizard-h-2" class="body" aria-hidden="true" style="display: none;">
                                                    <div>
                                                        <h5 class="font-size-14 mb-3">Upload document file for a verification</h5>
                                                        <div class="kyc-doc-verification mb-3">
                                                            <form action="#" class="dropzone dz-clickable">

                                                                <div class="dz-message needsclick">
                                                                    <div class="mb-3">
                                                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                                    </div>

                                                                    <h4>Drop files here or click to upload.</h4>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </section>

                                            </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>

@endsection
