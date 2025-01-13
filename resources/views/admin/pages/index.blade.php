@extends('layouts.admin')
@section('title', 'Pages')


@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h1 class="h3">All Pages</h1>
                <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="card card-solid">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="pagesDataTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Page title</th>
                                    <th>Meta title</th>
                                    <th>Meta description</th>
                                    <th>Meta keywords</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@push('js')
    <script src="{{ asset('public/admin/js/pages.js') }}"></script>
@endpush
