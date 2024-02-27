<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.applications.index', [
            'applications' => SpladeTable::for(Application::class)
                ->withGlobalSearch(columns: ['name', 'isStatus'])
                ->column('name', label: 'ФИО', sortable: true)
                ->column('number', label: 'Номер телефона')
                ->column('email', label: 'Сообщение')
                ->column('date', label: 'Дата проведения ', exportAs: false)
                ->column('dateCreate', label: 'Дата создания', exportAs: false)
                ->column('isType', label: 'Тип')
                ->column('isStatus', label: 'Статус')
                ->column('action', 'Действия', canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $applications = Application::pluck('name', 'id')->toArray();
        return view('Admin.applications.create', );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $application = new Application();
        $application->name = $request->input('name');
        $application->number = $request->input('number');
        $application->email = $request->input('email');
        $application->date = now()->format('d/m/Y');
        $application->dateCreate = $request->input('dateCreate');
        $application->isType = $request->input('isType');
        $application->isStatus = $request->input('isStatus');
        $application->save();
        Toast::title('Заявка добавлена');
        return redirect()->route('applications.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        return view('Admin.applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {

        return view('Admin.applications.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        $application->name = $request->input('name');
        $application->number = $request->input('number');
        $application->email = $request->input('email');
        $application->date = $request->input('date');
        $application->dateCreate = $request->input('dateCreate');
        $application->isType = $request->input('isType');
        $application->isStatus = $request->input('isStatus');
        $application->save();
        Toast::title('Заявка обновлена');
        return redirect()->route('applications.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        $application->delete();
        Toast::title('Заявка удалена');
        return redirect()->route('applications.index');
    }
}
