<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.partners.index',[
            'partners' => SpladeTable::for(Partner::class)
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
        return view('Admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $partner = new Partner();
        $partner->isActive = $request->input('isActive');
        $partner->image = $request->file('image')->store('public/partners');
        $partner->save();
        Toast::title('Партнёр добавлен');
        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view('Admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $partner->isActive = $request->input('isActive');
        $partner->image = $request->file('image')->store('public/partners');
//        if($request->hasFile('image')){
//            $image = $request->file('image');
//            $fileName = $image->getClientOriginalName();
//            $image->storeAs('public/casees', $fileName);
//            $product->image = $fileName;
//        }
        $partner->save();
        Toast::title('Партнёр обновлён');
        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        Toast::title('Партнёр удалён');
        return redirect()->route('partners.index');
    }
}
