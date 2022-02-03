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
<form action="res4.php" method="post">
    <center>
   <h1> User Details </h1><hr/><br/>
    <input type="text" class="p1" name="txt1" placeholder="Enter Your Name"/><br/>
    <input type="email" class="p1" name="txt2" placeholder="Enter Your Email"/><br/>
    <input type="password" class="p1" name="txt3" placeholder="Enter Your Password"/><br/>
    <input type="number" class="p1" name="txt4" placeholder="Enter Your Mobile"/><br/>
    
    <input type="submit" id="p2" />
</center>
</form>
</body>
</html>