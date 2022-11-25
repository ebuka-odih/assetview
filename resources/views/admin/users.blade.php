@extends('admin.layout.app')
@section('content')

    <main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Users</h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Full Table -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Users</h3>
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
                            <th class="text-center" >
                                <i class="far fa-user"></i>
                            </th>
                            <th>Name</th>
                            <th >Email</th>
                            <th>Access</th>
                            <th class="text-center" >Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $item)
                        <tr>
                            <td class="text-center">
                                {{ $item->name }}
                            </td>
                            <td class="fw-semibold">
                                <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                            </td>
                            <td><em class="text-muted">{{ date('d M, Y', strtotime($item->created_at)) }}</em></td>
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
