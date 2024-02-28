<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class FitbackController extends Controller
{
        public function store(Request $request)
    {
        $applications = new Application();
        $applications->name = $request->input('name');
        $applications->number = $request->input('number');
        $applications->email = $request->input('email');
        $applications->date = now()->format('d/m/Y');
        $applications->dateCreate = $request->input('dateCreate');
        $applications->isType = $request->input('isType');
        $applications->isStatus = '0';
        $applications->save();
        Toast::title('Заявка отправлена');
        return redirect()->route('client.contact');
    }
}
