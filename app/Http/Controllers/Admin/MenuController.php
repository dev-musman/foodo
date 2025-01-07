<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;
use App\Models\MenuType;
use Illuminate\Http\Request;
use App\Traits\HasDataTables;

class MenuController extends Controller
{

    use HasDataTables;
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Menu::with('menuType');
            return $this->dataTable($query, 'menus', function ($dataTable) {
                $dataTable->addColumn(
                    'image',
                    fn($menu) => $menu->image
                        ? '<img src="' . asset($menu->image) . '" alt="Menu Image" style="width: 50px; height: 50px; object-fit: cover;">'
                        : 'No Image'
                );

                $dataTable->addColumn('type', fn($menu) => $menu->menuType->type ?? '');
            });
        }
        return view('admin.menus.index');
    }

    public function create()
    {
        return $this->eidtOrCreate();
    }

    public function store(StoreMenuRequest $request)
    {
        $data = $request->validated();

        if (Menu::isMenuAdded($data['menu_type_id'], $data['week'], $data['day'])) {
            return response()->json([
                'success' => false,
                'message' => 'This menu already exists.',
            ]);
        }

        $data['image'] = $this->uploadImage($request, 'image', 'menus');
        Menu::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Menu successfully created.',
            'redirect' => route('admin.menus.index'),
        ]);
    }

    public function edit(Menu $menu = null)
    {
        $days = $this->getAvailableDaysForMenu($menu->menu_type_id, $menu->week);

        return $this->eidtOrCreate($menu, $days);
    }

    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $menu->deleteImage();
            $data['image'] = $this->uploadImage($request, 'image', 'menus');
        }

        $menu->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Menu successfully updated.',
            'redirect' => route('admin.menus.index'),
        ]);
    }

    public function destroy(Menu $menu)
    {
        $menu->deleteImage();
        $menu->delete();

        return response()->json([
            'success' => true,
            'message' => 'Menu successfully deleted.',
        ]);
    }


    private function eidtOrCreate(Menu $menu = null, $days = null)
    {
        $menu_types = MenuType::all();
        $days = $days ?: Menu::getDays();
        $weeks = Menu::getWeeks();

        return view('admin.menus.edit', compact('menu', 'menu_types', 'days', 'weeks'));
    }

    private function uploadImage(Request $request, string $fieldName, string $directory)
    {
        if (!$request->hasFile($fieldName)) {
            return null;
        }

        $file = $request->file($fieldName);
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs($directory, $fileName, 'public');

        return '/storage/' . $filePath;
    }


    public function getAvailableDaysForMenu($menuTypeId, $week)
{

    $menuType = MenuType::findOrFail($menuTypeId);
    $selectedDays = Menu::where('menu_type_id', $menuTypeId)
        ->where('week', $week)
        ->pluck('day')
        ->toArray();

    $allDays = $menuType->days_count === 5
        ? ['mon' => 'Mon', 'tue' => 'Tue', 'wed' => 'Wed', 'thu' => 'Thu', 'fri' => 'Fri']
        : ['mon' => 'Mon', 'tue' => 'Tue', 'wed' => 'Wed', 'thu' => 'Thu', 'fri' => 'Fri', 'sat' => 'Sat', 'sun' => 'Sun'];

    $availableDays = array_diff_key($allDays, array_flip($selectedDays));

    return $availableDays;
}


    public function getAvailableDays(Request $request)
    {
        $menuTypeId = $request->get('menu_type_id');
        $week = $request->get('week');

        $menuType = MenuType::findOrFail($menuTypeId);

        $selectedDays = Menu::where('menu_type_id', $menuTypeId)
            ->where('week', $week)
            ->pluck('day')
            ->toArray();

        $allDays = $menuType->days_count === 5
            ? ['Mon', 'Tue', 'Wed', 'Thu', 'Fri']
            : ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

        $availableDays = array_diff($allDays, $selectedDays);

        return response()->json(['availableDays' => array_values($availableDays)]);
    }
}
