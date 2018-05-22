<?php
/**
 * Created by PhpStorm.
 * User: Vinesh
 * Date: 17/04/2018
 * Time: 10:19
 */

namespace PaymentSystem\OctPay\Controllers;

use Illuminate\Routing\Controller;


class OctPayer extends Controller
{
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('paymentSystem.Octpay', 'octpay', 'octpayer');
    }

    public function index(){
        return 'Hello';
}

    function createSignature(array $data, $key)
    { // Sort by field name
        ksort($data);
        // Create the URL encoded signature string
        $ret = http_build_query($data, '', '&');
        // Normalise all line endings (CRNL|NLCR|NL|CR) to just NL (%0A)
        $ret = str_replace(array('%0D%0A', '%0A%0D', '%0D'), '%0A', $ret);
        // Hash the signature string and the key together
        $ret = hash('SHA512', $ret . $key);
        return $ret;
    }

}