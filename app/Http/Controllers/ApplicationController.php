<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs(
                'files',
                $name,
                'public'
            );
        };
        $request->validate([
            'product_name' => 'required|max:255',
            'product_address'=> 'required',
            'client_name' => 'required|max:255',
            'client_phone_number' => 'required|max:255',
            'price_org' => 'required|max:255',
            'price_selled' => 'required|max:255',
            'file_f'=> 'file| mimes: jpeg, jpg, pdf, png',
            'file_s'=> 'file| mimes: jpeg, jpg, pdf, png',
        ]);
        $application = Application::create([
            'user_id'=> auth()->user()->id,
            'product_name' => $request->product_name,
            'product_address' => $request->product_address,
            'client_name' => $request->client_name,
            'client_phone_number' => $request->client_phone_number,
            'price_org' => $request->price_org,
            'price_selled' => $request->price_selled,
            'file_f' => $path ?? null,
            'file_s' => $path ?? null,
        ]);
        return redirect()-> back();
    }
}
