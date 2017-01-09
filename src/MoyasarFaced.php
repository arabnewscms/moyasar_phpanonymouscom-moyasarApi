<?php
namespace Moyasarphpanonymouscom\MoyasarApi;
/*
   Please You May know about test key and live key please visit 
   https://moyasar.com/docs/api
   Or Visit https://dashboard.moyasar.com/session/login to get your keys :)     
   this package created By PHPAnonymous.com
   if you have questions please join us to facebook group with 
   https://www.fb.com/groups/anonymouses.developers
*/

use Moyasarphpanonymouscom\MoyasarApi\Moyasar\Client;
use Moyasarphpanonymouscom\MoyasarApi\Moyasar\Invoice;
use Moyasarphpanonymouscom\MoyasarApi\Moyasar\HttpRequestNotFound;
use Moyasarphpanonymouscom\MoyasarApi\Moyasar\Payment;

class MoyasarFaced{
    const AMOUNT      = Payment::AMOUNT;
    const CURRENCY    = Payment::CURRENCY;
    const DESCRIPTION = Payment::DESCRIPTION;
    const SOURCE      = Payment::SOURCE;
    const SADAD       = Payment::SADAD;
    const CREDIT_CARD = Payment::CREDIT_CARD;
 
    public static function setApiKey($val)
    {
        return Client::setApiKey($val);
    }

    public static function InvCreate($amount,$desc)
    {
        return Invoice::create($amount,$desc);
    }
    
    public static function InvFetch($id)
    {
        return Invoice::fetch($id);
    }

    public static function PayRefund($id,$num=null)
    {
        return Payment::refund($id,$num);
    }


    public static function PayCreate($id,$num=null)
    {
        return Payment::create($id,$num);
    }

     public static function PayFetch($id)
    {
        return Payment::fetch($id);
    }

    public static function PayAll()
    {
        return Payment::all();
    }



}
