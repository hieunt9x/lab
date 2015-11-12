<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <h1> Chuyển số âm thành dương và ngược lại dùng func_get_arg()</h1>
        <?php require_once('lib.php'); ?>
        
        <?php
        if(isset($_POST['submit'])){
           $so = $_POST['so'];
           echo' Kiểu giá trị '.arg($so).'<br><br>';
           echo' Tổng số là ' .sumcb(-5,7);   
        }
        
        ?>
        <form action="bai3.php" method="post">
        <label>Nhập số </label> <input type="number" name="so" required><br>
        <label>Nhập số m: </label> <input type="number" name="a" required value="-5"><br>
        <label>Nhập số n: </label> <input type="number" name="b" required value="7"><br>
        <input type="submit" name="submit" value="Ok">
      </form>
    </body>
</html>
