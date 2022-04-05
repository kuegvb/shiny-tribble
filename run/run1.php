<?php
if(isset($_POST['name1'])) { $a = $_POST['name1']; }
if(isset($_POST['name2'])) { $b = $_POST['name2']; }
if(isset($_POST['name3'])) { $c = $_POST['name3']; }
if(isset($_POST['name4'])) { $d = $_POST['name4']; }
if(isset($_POST['name5'])) { $e = $_POST['name5']; }
// ```
// Python実行時の引数について
// - 第1引数: 
//     - 電力消費モデル
//     - 整数型(1:朝夕, 2:夕方, 3:夜間)
// - 第2引数
//     - 月平均電力量料金(円)
//     - 整数型
// - 第3引数
//     - 電力料金プラン
//     - 整数型(1:従量電灯, 2:くつろぎナイト)
// - 第4引数
//     - 太陽光発電出力(kW)
//     - 整数型
// - 第5引数
//     - 蓄電池容量(kWh)
//     - 整数型
    $command= "python nissan_simulation-main/run.py --demand_model=$a  --monthly_payment=$b  --rate_plan_name=$c  --pv_size=$d  --bt_cap=$e";
    exec($command, $output);
    for ($l = 0; array_key_exists($l, $output) ; $l++){
        print("電気料金/月");
        print("<br>");
        $k = strlen($output[$l]);
        $i = 0;
        while (($j = strpos($output[$l], ' ', $i)) !== false){
          $y =  (substr($output[$l],$i,$j-$i));
          print($y/12);
            print("円");
            print("<br>");
            print("↓");
            print("<br>");
            $i = $j + 1;
        }
        $j = $k;
        $y =  (substr($output[$l],$i,$j-$i));
        print((int)($y/12));
        print("円");
        print("<br>");
        
    }
?>