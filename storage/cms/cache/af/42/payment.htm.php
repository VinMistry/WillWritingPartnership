<?php 
class Cms5ad4fd6108cb6017413246_589d26c7e307ec8b5f9bb2ad23bb83caClass extends \Cms\Classes\PageCode
{
public function onStart()
{
    include('Test.php');
    $test = new Payments\Payment();
    $test.runPayment();
}
}
