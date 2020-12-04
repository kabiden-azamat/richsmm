<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index()
    {
        $data = Services::paginate(15);
        return view('admin.services.services')->with(['title' => 'Список услуг', 'data' => $data, 'breadcrumbs' => [['name' => 'Список услуг', 'active' => 'true']], 'buttons' => [['name' => 'Добавить услугу', 'url' => route('admin_services_add')]]]);
    }

    public function add()
    {
        return view('admin.services.add')->with(['title' => 'Добавить услугу', 'breadcrumbs' => [['name' => 'Список услуг', 'url' => route('admin_services')], ['name' => 'Добавить услугу', 'active' => true]]]);
    }

    public function add_item(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:4048',
        ]);

        $imageName = time().'.'.$request->icon->extension();

        $icon = $request->icon->move(public_path('icons'), $imageName);

        $aData = $request->only(['name', 'slug']);
        $aData['icon'] = '/icons/' . $imageName;

        Services::create($aData);

        return redirect()->back()->with(['success_message' => 'Услуга успешно добавлена!']);

    }

    public function remove_item($id, Request $request)
    {
        Services::findOrFail($id)->delete();
        return redirect()->back()->with(['success_message' => 'Услуга успешно удалена!']);
    }
}
