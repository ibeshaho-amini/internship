<?php

if(isset($_POST['subm'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $op=$_POST['op'];

    switch($op){
        case "add":
            $num3=$num1+$num2;
            break;
        case "sub":
            $num3=$num1-$num2;
            break;
        case "mult":
             $num3=$num1*$num2;
            break;
        case "div":
            $num3=$num1/$num2;
            break;
        default:
            $num3="please select an operator";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
        }
        .cal{
            width: 600px;
            height: 600px;
            background: linear-gradient(#232323,#876542,#098765);
            /* border-radius: 2px 10% 20px 10%; */
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
            box-shadow: 20px 6px 0px 0px rgb(120, 120, 120 / 17%);
        }
        form{
            position: absolute;
            left: 50%;
            top: 45%;
            transform: translate(-50%,-50%);
        }
        input{
            width: 300px;
            height: 40px;
            margin-top: 20px;
            border-radius: 20px;
            padding: 0px 30px;
            font-size: 18px;
            color: black;
            border: 2px solid rgb(0,0,0,0.656);
            outline: none;
            transition: 0.3s;
        }
        input:hover{
            width: 260px;
            transition: 0.3s;
        }
        input[type="submit"]{
            background-color: #4839b0;
            width: 200px;
            height: 40px;
            color: white;
            font-size: 20px;
            border: none;
        }
        input[type="submit"]:active{
            transform: scale(0.9);
        }
        select{
            width: 300px;
            height: 40px;
            margin-top: 20px;
            border-radius: 20px;
            padding: 0px 30px;
            font-size: 18px;
            outline: none;
            color: black;
            border: none;
        }

    </style>
</head>
<body>
    <div class="cal">

    <h3 style="text-align:center;margin-top:50px;color:white;" >SIMPLE_CALCULATOR</h3>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" value="<?php echo @$num1;?>"><br><br>
        <input type="number" name="num2" placeholder="Enter second number" value="<?php echo @$num2;?>"><br><br>
        <select name="op" id="">
            <option value="">Select an operator</option>
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mult">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <input type="submit" name="subm" value="submit">
        <h5 style="margin-top:30px;font-size:18px;color:whitesmoke;" >YOUR &nbsp;ANSWER:</h5><br>
      <span style="color:white;font-size:23px;"><?php echo @$num3; ?></span>  
    </form>


    </div>
    
    
</body>
</html>