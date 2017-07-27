<?php
namespace runmanz\Tools;

class Debug
{
    public static function dd($arr,$deep = 0){
        echo '<pre style="margin: 5px auto">';
        if(is_array($arr)){
            $c = count($arr);
            $space = '';
            for ($i=0;$i<$deep;$i++){
                $space .= '    ';
            }
            $deep++;
            echo $space.'<b>array</b><i>(size='.$c.')</i><br>';
            foreach ($arr as $k => $v){
                $types = gettype($k);
                if($types == 'integer')
                    echo $space.'  '.$k.' => ';
                else
                    echo $space."  '".$k."' => ";
                if(is_array($v)){
                    static::dd($v,$deep);
                }else{
                    $types = gettype($v);
                    if($types == 'integer' || $types == 'int')
                        echo "int ".$v."<br>";
                    elseif($types == "NULL")
                        echo "<i>".$types."</i><br>";
                    else
                        echo $types." '".$v."'<br>";
                }
            }
        }else{
            echo $arr;
        }
        echo '</pre>';
    }
}