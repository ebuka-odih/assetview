@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Staking Token</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="content">
            <!-- Layouts -->
            <div class="block block-rounded">

                <div class="block-content">
                    <!-- Inline Layout -->
                    <div class="row">

                        <div class="col-lg-12 ">
                            <!-- Form Inline - Default Style -->
                            <form class="g-3 align-items-center" action="{{ route('admin.storeStake') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="container">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show">
                                            {{ session()->get('success') }}
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
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label  >Asset Name</label>
                                        <input type="text" class="form-control"  name="name" >
                                    </div>
                                    <div class="col-lg-6">
                                        <label  for="example-if-password">Icon</label>
                                        <input type="file" class="form-control form-control-file" id="example-if-password" name="icon">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label  >Asset Interest</label>
                                        <input type="text" class="form-control"  name="interest" >
                                    </div>
                                    <div class="col-lg-4">
                                        <label  >Asset Wallet</label>
                                        <input type="text" class="form-control"  name="value" >
                                    </div>

                                    <div class="col-lg-4">
                                        <label >Duration</label>
                                        <input type="text" class="form-control" name="duration" >
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            <!-- END Form Inline - Default Style -->

                        </div>
                    </div>
                    <br>
                    <!-- END Inline Layout -->

                </div>
            </div>
            <!-- END Layouts -->
        </div>

        <!-- Page Content -->
        <div class="content">
            <!-- Full Table -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">All Assets</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>Asset Name</th>
                                <th >Icon</th>
                                <th>Interest</th>
                                <th>Duration</th>
                                <th>Wallet Address</th>
                                <th class="text-center" >Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($stake as $item)
                                <tr>
                                    <td class="text-center">
                                        {{ $item->name }}
                                    </td>
                                    <td class="fw-semibold">
                                        <img style="height: 50px; width: 50px" src="{{ asset('crypto/'.$item->icon) }}" alt="">
                                    </td>
                                    <td>{{ $item->interest }}%</td>
                                    <td>{{ $item->duration }} Day(s)</td>
                                    <td>{{ $item->value }} </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>

                                            <form method="POST" action="{!! route('admin.delete', $item->id) !!}" accept-charset="UTF-8">
                                                <input name="_method" value="DELETE" type="hidden">
                                                {{ csrf_field() }}
                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                    <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Package?&quot;)">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Full Table -->

        </div>
        <!-- END Page Content -->
    </main>

@endsection
