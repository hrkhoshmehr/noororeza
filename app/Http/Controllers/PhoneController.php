<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use App\Http\Requests\StorePhoneRequest;
use Illuminate\Support\Facades\Validator;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::orderByDesc('id')->get();

        return view('admin.index_phones', compact('phones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'phone.required' => 'شماره تلفن را وارد کنید.',
            'phone.numeric' => 'شماره تلفن باید عدد باشد.',
            'phone.digits' => 'شماره تلفن باید 11 رقم باشد.',
            'phone.unique' => 'شماره شما قبلا ثبت شده است.',
        ];

        $rules = [
            'phone' => 'required|numeric|digits:11|unique:phones',
        ];

        $validator = Validator::make($request->all(), $rules , $messages);

        if($validator->fails()) {

            return response()->json(['message' => $validator->errors()->first(), 'type' => 'error'], 200);
        }

        $phone = Phone::create($request->all());

        return response()->json(['message' =>'شماره تلفن با موفقیت اضافه شد.', 'type' => 'success'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
