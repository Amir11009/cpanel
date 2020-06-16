<?php

    $MerchantID = '3a33fe92-25e2-11e8-b165-005056a205be';  //Required
    $Amount = $sum; //Amount will be based on Toman  - Required
    $Description = 'توضیحات تراکنش تستی';  // Required
    $Email = 'UserEmail@Mail.Com'; // Optional
    $Mobile = '09123456789'; // Optional
    $CallbackURL = 'http://www.niazpet.ir/verify';  // Required

    // URL also can be ir.zarinpal.com or de.zarinpal.com
    $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

    $result = $client->PaymentRequest([
        'MerchantID'     => $MerchantID,
        'Amount'         => $Amount,
        'Description'    => $Description,
        'Email'          => $Email,
        'Mobile'         => $Mobile,
        'CallbackURL'    => $CallbackURL,
    ]);
    $au_num=$result->Authority;
    \App\Order::where('id',$order_id)->update(['au_num'=>$au_num]);

    //Redirect to URL You can do it also by creating a form
    if ($result->Status == 100) {
        header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
    } else {
        echo'ERR: '.$result->Status;
    }
