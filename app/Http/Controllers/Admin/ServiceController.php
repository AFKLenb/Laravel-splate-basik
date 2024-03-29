<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.services.index', [
            'services' => SpladeTable::for(Service::class)
                ->withGlobalSearch(columns: ['title', 'description'])
                ->column('title', label: 'Название услуги', sortable: true)
                ->column('description', label: 'Описание услуги')
                ->column('price', label: 'Цена услуги')
                ->column('image', label: 'Изображение услуги', exportAs: false)
                ->column('isActive', label: 'Статус')
                ->column('action', 'Действия', canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        $service = new Service();
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->price = $request->input('price');
        $service->isActive = $request->input('isActive');
        $service->image = $request->file('image')->store('public/services');
        $service->save();
        Toast::title('Услуга добавлена');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('Admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->price = $request->input('price');
        $service->isActive = $request->input('isActive');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/services', $fileName);
            $service->image = $fileName;
        }
        $service->save();
        Toast::title('Услуга обновлена');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        Toast::title('Услуга удалена');
        return redirect()->route('services.index');
    }
}
