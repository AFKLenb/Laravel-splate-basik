<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Models\Casee;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class CaseeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.casees.index', [
            'casees' => SpladeTable::for(Casee::class)
//                ->column('title', label: 'Название услуги', sortable: true)
//                ->column('description', label: 'Описание услуги')
//                ->column('price', label: 'Цена услуги')
                ->column('image', label: 'Изображение партнёра', exportAs: false)
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
        return view('Admin.casees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        $casee = new Casee();
        $casee->isActive = $request->input('isActive');
        $casee->image = $request->file('image')->store('public/services');
        $casee->save();
        Toast::title('Услуга добавлена');
        return redirect()->route('casees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Casee $casee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Casee $casee)
    {
        return view('Admin.casees.edit', compact('casee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Casee $casee)
    {
        $casee->isActive = $request->input('isActive');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/casees', $fileName);
            $casee->image = $fileName;
        }
        $casee->save();
        Toast::title('Услуга обновлена');
        return redirect()->route('casees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Casee $casee)
    {
        $casee->delete();
        Toast::title('Партнёр удалён');
        return redirect()->route('casees.index');
    }
}
