<?php
/**
 * Created by PhpStorm.
 * User: Vinesh
 * Date: 16/04/2018
 * Time: 21:08
 */

namespace OctoberPayments;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => '3D Payments',
            'description' => 'Provides the payments.',
            'author'      => 'Vinesh Mistry',
            'icon'        => 'icon-money'
        ];
    }

    public function registerComponents()
    {
        return [
            '\3d\Payments\Components\3d' => '3d'
        ];
    }



}