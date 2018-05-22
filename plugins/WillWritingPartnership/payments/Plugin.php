<?php
/**
 * Created by PhpStorm.
 * User: Vinesh
 * Date: 24/04/2018
 * Time: 11:50
 */
namespace WillWritingPartnership\Payments;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'WillWritingPartnership\Payments\Components\PaymentForm' => 'paymentform',
            'WillWritingPartnership\Payments\Components\LastWill' => 'lastwill'
        ];
    }

    public function registerSettings()
    {

    }
}