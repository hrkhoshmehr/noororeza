<?php

namespace App\Http\Controllers\Admin;

use App\Models\Phone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::orderByDesc('id')->get();

        return view('admin.index_phones', compact('phones'));
    }

    public function edit(Phone $phone)
    {
        return view('admin.edit_phone', compact('phone'));
    }

    public function update(Request $request, Phone $phone)
    {
        $phone->update($request->all());
    }

    public function active(Phone $phone)
    {
        $phone->status = 1;
        $phone->save();

        return back()->with('message', 'شماره تلفن فعال شد.');
    }

    public function destroy(Phone $phone)
    {
        $phone->delete();

        return back()->with('message', 'شماره تلفن حذف شد.');
    }


}
