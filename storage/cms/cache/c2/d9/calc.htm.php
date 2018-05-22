<?php 
class Cms5af7026010fec472763100_aebca0bcd6401a1fbf678494c393f8daClass extends \Cms\Classes\PageCode
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

        DB::table('math')->insert(
            [
                    'value' => $ans
            ]
        );
      $t = Auth::getUser()->id;
      $this['test'] = $t;
//    $result = pg_query($dbconn3,"INSERT INTO Math (value) VALUES ($ans)");
    }
}
