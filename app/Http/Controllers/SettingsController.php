<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsRequest;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

class SettingsController extends Controller
{
    public function index(){
        return view('admin.settings.index');
    }

    public function update(SettingsRequest $request){
        $validated = $request->validated();
        foreach($validated as $key => $data){
            Settings::where('key', $key)->first()->update(['value' => $data]);
        }
        Artisan::call('settings:load-file');
        return redirect()->back()->with('action-message','saved');
    }
}
