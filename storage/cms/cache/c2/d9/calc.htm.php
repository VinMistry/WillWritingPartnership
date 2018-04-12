<?php 
class Cms5acf322905449428186356_cf8a98754e25c40f887dfcffcd5b4e38Class extends \Cms\Classes\PageCode
{
public function onTest() {
        $connStr = "host=localhost port=5432 dbname=twp_db user=Vinesh password=vm2amt1509170";
        $dbconn3 = pg_connect($connStr);
        $value1 = post('value1');
        $value2 = post('value2');
        $operation = post('operation');
        $ans = 0;
      switch($operation) {
        case '+':
            $this['answer'] = $value1 + $value2;
           $ans = $this['answer'];
            break;
        case '-':
            $this['answer'] = $value1 - $value2;
            $ans = $this['answer'];
            break;
        case '*':
            $this['answer'] = $value1 * $value2;
            $ans = $this['answer'];
            break;
        case '/':
            $this['answer'] = $value1 / $value2;
            $ans = $this['answer'];
            break;
        }
       $result = pg_query($dbconn3,"INSERT INTO math (value) VALUES ($ans)");
    }
}
