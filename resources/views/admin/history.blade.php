@extends('layouts.admin')
@section('title', 'History')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body pb-1">
                    <h1 class="h3 mb-3"><strong>Filters</strong></h1>

                    <!-- Filter Form -->
                    <form method="GET" action="{{ route('admin.history') }}" class="mb-3">
                        <div class="row">
                            <!-- Date From -->
                            <div class="col-md-3">
                                <label for="date_from" class="form-label">From Date</label>
                                <input type="date" id="date_from" name="date_from" class="form-control"
                                    value="{{ request('date_from') }}">
                            </div>
                            <!-- Date To -->
                            <div class="col-md-3">
                                <label for="date_to" class="form-label">To Date</label>
                                <input type="date" id="date_to" name="date_to" class="form-control"
                                    value="{{ request('date_to') }}">
                            </div>
                            <!-- User -->
                            <div class="col-md-3">
                                <label for="user" class="form-label">User</label>
                                <select name="user" id="user" class="form-control select2">
                                    <option value="">All Users</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            {{ request('user') == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Submit Button -->
                            <div class="col-md-3 d-flex gap-3 align-items-end">
                                <button type="submit" class="btn btn-primary w-100">Filter</button>
                                <a href="{{ route('admin.history') }}" class="btn btn-danger w-100">Reset</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body pb-1">
                            <h1 class="h3 mb-3"><strong>History</strong></h1>
                            <table class="table table-striped table-hover text-center align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Entity</th>
                                        <th>Action</th>
                                        <th>Changes</th>
                                        <th>Changed By</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($history as $entry)
                                        <tr>
                                            <td>{{ ucfirst($entry->entity) }}</td>
                                            <td>
                                                @if ($entry->action == 'update')
                                                    <span class="badge bg-warning text-dark">Updated</span>
                                                @elseif($entry->action == 'insert')
                                                    <span class="badge bg-success">Inserted</span>
                                                @else
                                                    <span class="badge bg-danger">Deleted</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($entry->changes)
                                                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse"
                                                        href="#changes{{ $entry->id }}" role="button"
                                                        aria-expanded="false" aria-controls="#changes{{ $entry->id }}">
                                                        View Changes
                                                    </button>
                                                    <div id="changes{{ $entry->id }}"
                                                        class="collapse collapse-history mt-2">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <ul class="list-unstyled mb-0">
                                                                    @foreach (json_decode($entry->changes, true) as $key => $change)
                                                                        <li>
                                                                            <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong><br>
                                                                            <span class="text-muted fw-bold">Old:
                                                                                {{ is_array($change['old']) ? implode(',', $change['new']) : $change['old'] }}</span><br>
                                                                            <span class="text-success">New:
                                                                                {{ is_array($change['new']) ? implode(',', $change['new']) : $change['new'] }}</span>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <span class="text-muted">No changes recorded</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($entry->user)
                                                    {{ $entry->user->name }}
                                                @else
                                                    <span class="text-muted">No user</span>
                                                @endif
                                            </td>
                                            <td>{{ $entry->created_at->format('Y-m-d H:i:s') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="5">History not found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <div class="d-flex justify-content-end mt-3">
                                {{ $history->render() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
