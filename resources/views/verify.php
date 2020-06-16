<?php
$au_num = $_GET['Authority'];

$orders=\App\Order::where('au_num',$au_num)->get();
foreach ($orders as $order){
    $order_id=$order->id;
}
$order_details=\App\Orderdetail::where('order_id',$order_id)->get();
$sum=0;
foreach ($order_details as $order_detail){
    $sum_price=$order_detail->count_one*$order_detail->unit_price;
    $sum+=$sum_price;
}

    $MerchantID = '3a33fe92-25e2-11e8-b165-005056a205be';
    $Amount = $sum; //Amount will be based on Toman
    $Authority = $_GET['Authority'];

    if ($_GET['Status'] == 'OK') {
        // URL also can be ir.zarinpal.com or de.zarinpal.com
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentVerification([
            'MerchantID'     => $MerchantID,
            'Authority'      => $Authority,
            'Amount'         => $Amount,
        ]);

        if ($result->Status == 100) {
            $ref_id=$result->RefID;
            echo 'Transation success. RefID:'.$ref_id;
            \App\Order::where('id',$order_id)->update(['ref_id'=>$ref_id]);
            header("Location:http://www.marita.ir/pay/ok/$order_id");
        } else {
            echo 'Transation failed. Status:'.$result->Status;
        }
    } else {
        echo 'Transaction canceled by user';
    }
