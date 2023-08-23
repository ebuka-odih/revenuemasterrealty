<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $p_methods = PaymentMethod::all();
        return view('admin.payment-method.list', compact('p_methods'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required'
        ]);
        $data = new PaymentMethod();
        $data->name = $request->name;
        $data->value = $request->value;
        $data->save();
        return redirect()->back()->with('success', 'Payment Method Added Successfully');
    }

    public function edit($id)
    {
        $data = PaymentMethod::findOrFail($id);
        return view('admin.payment-method.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PaymentMethod::findOrFail($id);
        $data->update(['name' => $request, 'value' => $request]);
        return redirect()->route('admin.payment-method.index')->with('updated', 'Successfully Updated');
    }
    public function destroy($id)
    {
        $data = PaymentMethod::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
