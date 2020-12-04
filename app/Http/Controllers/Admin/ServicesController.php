<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Services;
use App\Models\Admin\TargetServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index()
    {
        $data = Services::where('parent_id', null)->paginate(15);
        return view('admin.services.services')->with([
            'title' => 'Список услуг',
            'data' => $data,
            'breadcrumbs' => [
                [
                    'name' => 'Список услуг',
                    'active' => 'true'
                ]
            ],
            'buttons' => [
                [
                    'name' => 'Добавить услугу',
                    'url' => route('admin_services_add')
                ]
            ]
        ]);
    }

    public function add(Request $request)
    {
        $breadcrumbs = [];
        $breadcrumbs[] = [
            'name' => 'Список услуг',
            'url' => route('admin_services')
        ];
        if($request->get('id'))
        {
            $breadcrumbs[] = [
                'name' => Services::findOrFail($request->get('id'))->name,
                'url' => route('admin_services_edit', ['id' => $request->get('id')])
            ];
            $breadcrumbs[] = [
                'name' => 'Добавить подуслугу',
                'active' => true
            ];
        } else
            $breadcrumbs[] = [
                'name' => 'Добавить услугу',
                'active' => true
            ];

        return view('admin.services.add')->with([
            'title' => 'Добавить услугу',
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function add_item(Request $request)
    {
        $validatedData = $request->validate([
            'parent_id' => 'integer',
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:4048',
        ]);

        $imageName = time().'.'.$request->icon->extension();

        $icon = $request->icon->move(public_path('icons'), $imageName);

        $aData = $request->only(['name', 'slug']);
        $aData['icon'] = '/icons/' . $imageName;
        if($request->get('parent_id'))
            $aData['parent_id'] = (int) $request->post('parent_id');

        Services::create($aData);

        return redirect()->back()->with(['success_message' => 'Услуга успешно добавлена!']);

    }

    public function edit($id)
    {
        $data = Services::findOrFail($id);
        if($data->parent_id > 0) {
            $subServices = TargetServices::where('service_id', $id)->paginate(15);
        } else {
            $subServices = Services::where('parent_id', $id)->paginate(15);
        }

        $title = $data->name;
        $breadcrumbs = [];
        $breadcrumbs[] = [
            'name' => 'Список услуг',
            'url' => route('admin_services')
        ];
        if($data->parent_id > 0) {
            $breadcrumbs[] = [
                'name' => Services::findOrFail($data->parent_id)->name,
                'url' => route('admin_services_edit', ['id' => $data->parent_id])
            ];
        }
        $breadcrumbs[] =  [
            'name' => $data->name,
            'active' => true
        ];
        return view('admin.services.edit')->with([
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'subServices' => $subServices
        ]);
    }

    public function edit_item($id, Request $request)
    {
        $service = Services::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',
            'icon' => 'image|mimes:jpeg,png,jpg|max:4048',
        ]);
        $data = $request->only(['name', 'slug']);
        if($request->hasFile('icon'))
        {
            $imageName = time().'.'.$request->icon->extension();
            $icon = $request->icon->move(public_path('icons'), $imageName);
            $data['icon'] = '/icons/' . $imageName;
        }
        $service->update($data);
        return redirect()->back()->with(['success_message' => 'Услуга успешно отредактирована!']);
    }

    public function remove_item($id, Request $request)
    {
        Services::findOrFail($id)->delete();
        return redirect()->back()->with(['success_message' => 'Услуга успешно удалена!']);
    }

    public function add_target($id)
    {
        $service = Services::findOrFail($id);

        return view('admin.services.add-target')->with([
            'title' => 'Добавить целевую услугу',
            'breadcrumbs' => [
                [
                    'name' => 'Список услуг',
                    'url' => route('admin_services')
                ],
                [
                    'name' => Services::findOrFail($service->parent_id)->name,
                    'url' => route('admin_services_edit', ['id' => $service->parent_id])
                ],
                [
                    'name' => $service->name,
                    'url' => route('admin_services_edit', ['id' => $id])
                ],
                [
                    'name' => 'Добавить целевую услугу',
                    'active' => true
                ]
            ],
            'data' => $service
        ]);
    }

    public function add_target_item($id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
        ]);

        $data = $request->only(['name', 'price']);
        $data['service_id'] = (int) $id;
        TargetServices::create($data);

        return redirect()->back()->with(['success_message' => 'Целевая услуга успешно добавлена!']);
    }

    public function edit_target($serviceId, $targetId)
    {
        $service = Services::findOrFail($serviceId);
        $target = TargetServices::findOrFail($targetId);

        return view('admin.services.edit-target')->with([
            'title' => $target->name,
            'breadcrumbs' => [
                [
                    'name' => 'Список услуг',
                    'url' => route('admin_services')
                ],
                [
                    'name' => Services::findOrFail($service->parent_id)->name,
                    'url' => route('admin_services_edit', ['id' => $service->parent_id])
                ],
                [
                    'name' => $service->name,
                    'url' => route('admin_services_edit', ['id' => $serviceId])
                ],
                [
                    'name' => $target->name,
                    'active' => true
                ]
            ],
            'service' => $service,
            'target' => $target
        ]);
    }

    public function edit_target_item($serviceId, $targetId, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
        ]);

        $target = TargetServices::findOrFail($targetId);
        $target->update($request->only(['name', 'price']));
        return redirect()->back()->with(['success_message' => 'Целевая услуга успешно отредактирована!']);
    }

    public function remove_target_item($serviceId, $targetId, Request $request)
    {
        TargetServices::findOrFail($targetId)->delete();
        return redirect()->back()->with(['success_message' => 'Целевая услуга успешно удалена!']);
    }
}
