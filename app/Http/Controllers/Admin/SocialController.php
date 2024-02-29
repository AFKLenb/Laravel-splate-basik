<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.socials.index', [
            'socials' => SpladeTable::for(Social::class)
                ->column('link', label: 'Название компании')
                ->column('image', label: 'Адрес компании')
                ->column('isActive', 'Логотип сайта')
                ->column('action', 'Действия', canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.socials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $socials = new Social();
        $socials->link = $request->input('link');
        $socials->image = $request->file('image')->store('public/socials');
        $socials->isActive = $request->input('isActive');
        $socials->save();
        Toast::title('Соц-сеть добавлена');
        return redirect()->route('socials.index');
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
    public function edit(Social $social)
    {
        return view('Admin.socials.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {
        $social->link = $request->input('link');
        $social->isActive = $request->input('isActive');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/socials', $fileName);
            $social->image = $fileName;
        }
        $social->save();
        Toast::title('Соц-сеть обновлена');
        return redirect()->route('socials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        $social->delete();
        Toast::title('Соц-сеть удалён');
        return redirect()->route('socials.index');
    }
}
