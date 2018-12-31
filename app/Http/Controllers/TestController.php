<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        //$stripe = resolve('App\Billing\Stripe');
        //dd($stripe->get_result(12,12,'sum'));

        $obj = app()->make('Stripe');
        dd($obj->get_result(10,10,'mul'));

        return view('test_view');
    }
}
