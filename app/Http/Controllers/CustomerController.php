<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = DB::table('Customers')->get();
        return view('index', ['customers' => $customers]);
    }

    public function showFormAdd()
    {
        return view('add');
    }

    public function showFormEdit()
    {
        return view('edit');
    }

    public function add(Request $request)
    {
        DB::table('Customers')->insert(['nameCustomer' => $request->input('name'), "phoneNumber" => $request->input('phone'), "email" => $request->input('email')]);
        return redirect()->route('customer.index');
    }

    public function find($id)
    {
        return DB::table('Customers')->where('id', $id);
    }

    public function edit(Request $request,$id)
    {
        $customer= $this->find($id);
        $customer->update(['nameCustomer' => $request->input('name'), "phoneNumber" => $request->input('phone'), "email" => $request->input('email')]);
        return redirect()->route('customer.index');
    }
    public function delete(Request $request,$id){
        $customer= $this->find($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
