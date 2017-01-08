<?php
namespace Moyasar_phpanonymouscom\MoyasarApi\Moyasar;
use Moyasar_phpanonymouscom\MoyasarApi\MoyasarFaced;
use GuzzleHttp;
class Invoice //extends MoyasarFaced
{
    const AMOUNT = "amount";
    const CURRENCY = "currency";
    const DESCRIPTION = "description";

    public static function create($amount, $description, $currency = "SAR")
    {
        $data = [
            self::AMOUNT => $amount,
            self::DESCRIPTION => $description,
            self::CURRENCY => $currency
        ];

         return json_decode(Client::post("https://api.moyasar.com/v1/invoices", $data));
    }

    public static function fetch($id){
        return json_decode(Client::get("https://api.moyasar.com/v1/invoices/$id"));
    }

    public static function all(){
        return json_decode(Client::get("https://api.moyasar.com/v1/invoices"));
    }


}
