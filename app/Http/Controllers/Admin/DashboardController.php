<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\LogActivity;
use App\Models\Customer;
use App\Models\History;
use App\Models\MealPlan;
use App\Models\MenuType;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $recentOrders = MealPlan::with('menuType')->latest()->take(4)->get();
        $totalOrders = MealPlan::count();
        $totalCustomers = Customer::count();
        $totalMenuTypes = MenuType::count();

        return view('admin.dashboard', compact('recentOrders', 'totalOrders', 'totalCustomers', 'totalMenuTypes'));
    }

    public function history(Request $request)
    {
        $request->validate([
            'date_from' => 'nullable|date',
            'date_to' => 'nullable|date',
            'user' => 'nullable|exists:users,id',
        ]);

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

        $history = $query->with('user')->latest()->paginate(10);
        $users = User::select('id', 'name')->get();

        return view('admin.history', compact('history', 'users'));
    }

    public function sitemap(Request $request)
    {
        return view("admin.sitemap.upload");
    }

    public function uploadSitemap(Request $request)
    {
        $request->validate([
            'sitemap_file' => 'required|file|mimes:xml|max:2048',
        ]);

        $file = $request->file('sitemap_file');
        $upload = $file->move(base_path(), 'sitemap.xml');

        if ($upload) {
            LogActivity::addToLog('sitemap', 'insert', "", null);
        }

        return response()->json([
            'success' => true,
            'message' => 'Sitemap uploaded successfully!',
            'redirect' => route('admin.sitemap')
        ]);
    }
}
