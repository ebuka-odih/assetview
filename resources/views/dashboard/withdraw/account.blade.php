@extends('dashboard.layout.app')
@section('content')

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Withdrawal Account</h4>

                        <form method="POST" action="{{ route('user.account.store') }}">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-email-input" class="form-label">Wallet Name</label>
                                        <input type="text" name="name" class="form-control" id="formrow-email-input" placeholder="Wallet Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-password-input" class="form-label">Wallet Address</label>
                                        <input type="text" name="value" class="form-control" id="formrow-password-input" placeholder="Wallet Address">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-md">Create</button>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Horizontal Form Layout</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Wallet Name</th>
                                        <th>Wallet Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($wallets as $item)
                                <tr>
                                    <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->value }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>

@endsection
