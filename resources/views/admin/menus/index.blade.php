@extends('layouts.admin')
@section('title', 'Pages')


@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h1 class="h3">All Menus</h1>
               <div>
                @can('trash')
                <a href="{{ route('admin.menus.index', 'trash=true') }}" class="btn btn-danger me-2">View Trash</a>
                @endcan
                <a href="{{ route('admin.menus.create') }}" class="btn btn-primary">Add New</a>
               </div>
            </div>
            <div class="card card-solid">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="menusDataTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Week</th>
                                    <th>Day</th>
                                    <th>Image</th>
                                    <th>Price</th>
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
    <script src="{{ asset('public/admin/js/menu.js') }}"></script>
@endpush

