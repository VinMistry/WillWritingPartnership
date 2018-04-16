<?php 
class Cms5ad0c1e513696015129334_523474f5e38ccfc7c911beb0c19a0ba1Class extends \Cms\Classes\PageCode
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
       $result = pg_query($dbconn3,"INSERT INTO Math (value) VALUES ($ans)");
    }
}
