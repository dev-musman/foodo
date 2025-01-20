@extends('layouts.admin')

@section('content')
<main class="content">
    <div class="container">
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Meal Plan Details</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Meal Plan ID:</strong> {{ $mealPlan->id }}</p>
                        <p><strong>Company:</strong> {{ $mealPlan->company }}</p>
                        <p><strong>Phone:</strong> {{ $mealPlan->phone }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Delivery Address:</strong> {{ $mealPlan->delivery_address }}</p>
                        <p><strong>Number of Persons:</strong> {{ $mealPlan->persons }}</p>
                        <p><strong>Start Date:</strong> {{ $mealPlan->start_date }}</p>
                    </div>
                </div>
                <p><strong>Status:</strong>
                    <span class="badge bg-primary">{{ ucfirst($mealPlan->status) }}</span>
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">Menu Details</h5>
            </div>
            <div class="card-body">
                @if($mealPlan->menuItems->isEmpty())
                    <p>No menu items available for this meal plan.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Day</th>
                                    <th>Week</th>
                                    <th>Menu</th>
                                    <th>Menu Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mealPlan->menuItems as $menuItem)
                                <tr>
                                    <td>{{ $menuItem->day }}</td>
                                    <td>Week {{ $menuItem->week }}</td>
                                    <td>{{ $menuItem->menu->name }}</td>
                                    <td>{{ $menuItem->menu->description }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>

@endsection
