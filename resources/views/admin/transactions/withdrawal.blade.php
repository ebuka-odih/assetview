@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Withdrawal</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Full Table -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Withdrawal</h3>
                </div>
                <div class="block-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" >
                                    <i class="far fa-clock"></i>
                                </th>
                                <th>User</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th class="text-center" >Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($deposit as $item)
                                <tr>
                                    <td class="text-center">
                                        {{ date('d M, Y', strtotime($item->created_at)) }}
                                    </td>
                                    <td class="fw-semibold">
                                        {{ optional($item->user)->name }}
                                    </td>
                                    <td class="fw-semibold">
                                        ${{ $item->amount }}
                                    </td>
                                    <td>
                                        {!! $item->status() !!}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
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
