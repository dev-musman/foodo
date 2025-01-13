@extends('layouts.admin')
@section('title', 'orders')


@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                <h1 class="h3 mb-3">All Orders</h1>
            <div class="card card-solid">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="ordersDataTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                    <th>Delivery Adress</th>
                                    <th>Expected Start Date</th>
                                    <th>Persons</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
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
    <script src="{{ asset('public/admin/js/orders.js') }}"></script>
@endpush
