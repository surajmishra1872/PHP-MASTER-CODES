<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .p1
        {
            width:400px;
            height:40px;
            border:2px solid red;
            font-size:30px;
            margin-top:20px;
        }
        #p2{
            margin-top:20px;
            background-color:green;
            color:white;
            width:70px;
            height:40px;
        }
    </style>
</head>
<body>
<form action="res8.php" method="post">
    <center>
    <h1>Reminder of Numbers When Condtion is a/b not a%b</h1><hr/><br/>
    <input type="number" class="p1" name="num1" placeholder="Enter First Number"/><br/>
    <input type="number" class="p1" name="num2" placeholder="Enter  Second Number"/><br/>
 
    <input type="submit" id="p2" />
</center>
</form>
</body>
</html>