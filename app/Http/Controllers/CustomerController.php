<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function overview(){
        $customers = Customer::all();

        return view('serverside.customers.overview', ['customers' => $customers]);
    }

    public function allBought($id){
        $customer = Customer::find($id);

        return view('serverside.customers.personal', ['customer' => $customer]);
    }
}
