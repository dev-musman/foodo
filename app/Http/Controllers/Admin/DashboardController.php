<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function history(Request $request)
    {
        $query = History::query();

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->input('date_from'));
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->input('date_to'));
        }

        if ($request->filled('user')) {
            $query->where('user_id', $request->input('user'));
        }

        $history = $query->latest()->paginate(10);
        $users = User::all();

        return view('admin.history', compact('history', 'users'));
    }
}
