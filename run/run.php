<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <div style="width: 50%; margin: auto;">
    <div class="left">パターン:</div>
    <div class="left">
    <form action="run1.php" method = "POST">
    <select name= "name1">
        <option value="1">朝夕消費モデル</option>
        <option value="2">夕方消費モデル</option>
        <option value="3">夜間消費モデル</option>
    </select>
    <div style="width: 200%; margin: auto;">
    <div class="left">料金:</div>
    <div class="left">
    <form action="run1.php" method = "POST">
    <input type="number" name="name2" min="1000" value="10000">
    <dt class="right">(円)</dt>
    <div style="width: 100%; margin: auto;">
    <div class="left">プラン:</div>
    <div class="left">
    <form action="run1.php" method = "POST">
    <select name= "name3">
        <option value="1">従量電灯</option>
        <option value="2">くつろぎナイト12</option> 
    </select>
    <div style="width: 100%; margin: auto;">
    <div class="left">PV:</div>
    <div class="left">
    <form action="run1.php" method = "POST">
    <input type="number" name="name4" min="0" max="10"> 
    <dt class="right">(kW)</dt>
    <div style="width: 100%; margin: auto;">
    <div class="left">BT:</div>
    <div class="left">
    <form action="run1.php"  method="POST">
        <input type="number" name="name5" min="0" max="40">    
    </form>
    <dt class="right">(kWh)</dt>
    <div style="width: 300px; margin: auto;">
    <input type="submit" value="　　　　　　　　実　　　　行　　　　　　　　">
</form>
</div>
</section>
</body>
</html>
