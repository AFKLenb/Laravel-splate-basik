<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Models\Casee;
use App\Models\Category;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.categories.index', [
            'categories' => SpladeTable::for(Category::class)
                ->withGlobalSearch(columns: ['title', 'description'])
                ->column('title', label: 'Название категории', sortable: true)
                ->column('description', label: 'Описание категории')
                ->column('image', label: 'Изображение категории', exportAs: false)
                ->column('isActive', label: 'Статус')
                ->column('isPopular', label: 'Популярность', sortable: true)
                ->column('isNew', label: 'Новизна', sortable: true)
                ->column('action', 'Действия', canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->isActive = $request->input('isActive');
        $category->isPopular = $request->input('isPopular');
        $category->isNew = $request->input('isNew');
        $category->image = $request->file('image')->store('public/categories');
        $category->save();
        Toast::title('Услуга добавлена');
        return redirect()->route('categories.index');
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
    public function edit(Category $category)
    {
        return view('Admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->isActive = $request->input('isActive');
        $category->isPopular = $request->input('isPopular');
        $category->isNew = $request->input('isNew');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/casees', $fileName);
            $category->image = $fileName;
        }
        $category->save();
        Toast::title('Услуга обновлена');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Toast::title('Услуга удалена');
        return redirect()->route('categories.index');
    }
}
