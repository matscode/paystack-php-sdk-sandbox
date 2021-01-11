<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChargeController extends Controller
{

    public function transaction()
    {
        $secretKey = env('PAYSTACK_SECRET_KEY');

        // creating the transaction object
        $Transaction = (new Paystack($secretKey))->transaction;

        // Set data to post using this method
        /*
        $response = $Transaction->initialize( [
            'email'  => 'customer@gmail.com',
            'amount' => 500000
        ] );
        */

        // OR

        $response =
            $Transaction
                ->setEmail('customer@gmail.com')
                ->setAmount(50)
                ->initialize([], false);

        // print response
        dd($response);

        // save reference somewhere and do a redirect
        return redirect()->away($response->authorizationUrl);
    }
}
