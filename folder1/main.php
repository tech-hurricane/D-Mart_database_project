<?php
    include 'connect.php';
    $sql="select * from product";
    $result=mysqli_query($conn, $sql);
    if($result)
    {
        $row=mysqli_fetch_assoc($result);
        $name=$row['p_name'];
        $ncode=$row['p_code'];
        $price=$row['p_price'];
        $qty=$row['p_qty'];
    }
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body{
                font-family: 'Times New Roman', Times, serif;
                background: #6cd47c;
                color: black;
            }
            .title{
                padding: 5;
                font-size: 30;
                font-family: 'Times New Roman', Times, serif;
            }
            a{
                text-decoration: none;
                color: black;
            }
            .cont1{
                padding: 8;
                margin: 10px;
                background: #0c6e4e;
                border-radius: 38px;
                font-size: 30;
                font-family: 'Times New Roman', Times, serif;
                width: 25%;
                box-shadow: 5px 5px 15px black;
            }
            .inner1{
                background-color: #daffda;
                padding: 25;
                border-radius: 30px;
                text-align: center;
            }
            .cont2{
                padding: 8;
                margin: 10px;
                background: #0c6e4e;
                border-radius: 38px;
                font-size: 30;
                font-family: 'Times New Roman', Times, serif;
                width: 25%;
                box-shadow: 5px 5px 15px black;
            }
            .inner2{
                
                background-color: #daffda;
                padding: 25;
                border-radius: 30px;
                text-align: center;
            }.cont3{
                padding: 8;
                margin: 10px;
                background: #0c6e4e;
                border-radius: 38px;
                font-size: 30;
                font-family: 'Times New Roman', Times, serif;
                width: 25%;
                box-shadow: 5px 5px 15px black;
            }
            .inner3{
                
                background-color: #daffda;
                padding: 25;
                border-radius: 30px;
                text-align: center;
            }.cont4{
                padding: 8;
                margin: 10px;
                background: #0c6e4e;
                border-radius: 38px;
                font-size: 30;
                font-family: 'Times New Roman', Times, serif;
                width: 25%;
                box-shadow: 5px 5px 15px black;
            }
            .inner4{
                background-color: #daffda;
                padding: 25;
                border-radius: 30px;
                text-align: center;
            }
            .maincont{
                display: flex;
            }
            .cont1:hover{
                padding: 10;
                font-size: 32;
                box-shadow: 15px 15px 15px black;
            }
            .cont2:hover{
                padding: 10;
                font-size: 32;
                box-shadow: 15px 15px 15px black;
            }
            .cont3:hover{
                padding: 10;
                font-size: 32;
                box-shadow: 15px 15px 15px black;
            }
            .cont4:hover{
                padding: 10;
                font-size: 32;
                box-shadow: 15px 15px 15px black;
            }
            button{
                background-color: #0c6e4e; 
                color: white;
                font-weight: 1100;
                font-size: 20;
                font-family: 'Times New Roman', Times, serif;
                padding: 4 16 ;
                margin-top: 15;
                border-radius: 12px;
                border: 2;
            }
            form{
                padding: 30px;
            }
            span{
                font-size: 25px;
            }
            p{
                font-size: 25px;
            }
            .product_full_frame{
                display: flex;
            }
            .bill{
                background: white;
                border-radius: 5px;
                font-size: 30px;
                width: 50%;
                height: max;
                margin-left: 45%;
            }
            .bill_head{
                font-size: 25px;
                text-align: center;
                padding: 10px;
                margin: 5%;
            }
            .bill_body{
                margin-left: 10%;
                margin-right: 10%;
                margin-bottom: 10%;
                margin-top: -50;
                padding: 10px;
            }
            @media print{
                body * {
                    visibility: hidden;
                }
                .print-container, .print-container * {
                    visibility: visible;
                }
                .print-container{
                    position: absolute;
                    left: -260px;
                    top: -30px;
                    width: 100%;
                    button: hidden;
                }
            }
        </style>
        <div class="title">
            <center><img src="dmart_logo.png" height=10%></img></center>
        </div>
    </head>
    <body vlink="black", alink="blue", link="black">
        <form method="post">
        <div class="product_full_frame" draggsble="true">
            <div class="product_info">
                <div class="inputbox">
                    <span>Barcode Number: </span>
                    <input type="text" name="p_code" required="required" value="<?php $code=$_POST['p_code']; echo $code; ?>">
                    <i></i>    
                </div>
                <p>
                <?php
                    if(isset($_POST['find']))
                    {   
                        $code=$_POST['p_code'];
                        $sql="select * from product where p_code=$code";
                        $result=mysqli_query($conn, $sql); 
                        $row=mysqli_fetch_assoc($result);
                        if($row)
                        {
                            $name  = $row['p_name'];
                            $price = $row['p_price'];
                            echo "Product Name: ".$name."<br>";
                            echo "Product Price: ".$price."<br>";
                        }
                        else
                        {
                            echo "Not Found";
                        }   
                    }
                ?>
                <div class="inputbox">
                    <span>Quantity: </span>    
                    <input type="text" name="p_qty" required="required" value="<?php $pqty=$_POST['p_qty']; echo $pqty; ?>">
                    <i></i>    
                </div>
                <button name="find">BILL</button>
                </p>
                </div>
        </form>
        
        <div class="bill print-container">
            <div class="bill_head">
                D-mart Shopping center.<h5>Plot No 9, Sector No 21, Nerul, Navi Mumbai, Maharashtra 400706, Mumbai, Maharashtra 400706</h5>
                <h6>------------------------------------------------------------------------------------------------------------------</h6>
            </div>
            <div class="bill_body">
            <h4><?php
            if(isset($_POST['find']))
            {   
                $code=$_POST['p_code'];
                $sql="select * from product where p_code=$code";
                $result=mysqli_query($conn, $sql); 
                $row=mysqli_fetch_assoc($result);
                if($row)
                {
                    $price = $row['p_price'];
                    $name = $row['p_name'];
                    $code = $row['p_code'];
                    $pqty = $_POST['p_qty'];
                    $tot=($price*$pqty);
                    $tot=$tot-($tot*(5/100));   
                    echo "Name: ".$name."<br>";
                    echo "Price: ".$price."₹<br>";
                    echo "Quantity: ".$pqty."<br>";
                    echo "Discount: 5%<br><br>";
                    echo "Total: ".$tot."₹<br><br>";
                    echo '<h5>Thankyou for Shopping, Comeback Soon</h5>'; 
                }
                else
                {
                    echo "Not found";
                }
            }
            $code=$_POST['p_code'];
            $pqty=$_POST['p_qty'];
            $sql="select * from product where p_code=$code";
            $result=mysqli_query($conn, $sql);
            $row=mysqli_fetch_assoc($result);
            $name  = $row['p_name'];
            $qty = $row['p_qty'];
            $price = $row['p_price'];
            $uqty=$qty-$pqty;
            if(isset($_POST['paid']))
            {
                $qty = $_POST['p_qty'];
                $sql="update product set p_qty=$uqty where p_code=$code";
                $result=mysqli_query($conn, $sql);
            }
            ?>            
            </h4>
            <button class="btn btn-info hidden-print" name="print" onclick="window.print()">PRINT</button>
            <button class="btn btn-success hidden-print" name="paid">PAID</button>
            </div>
        </div>
            </div>
            
        <div class="maincont">
        <div class="cont1">
            <div class="inner1">
                <a href="p_create.php">Adding New Product.</a>
            </div>
        </div>
        <div class="cont2">
            <div class="inner2">
                <a href="p_update.php">Updating Product.</a>
            </div>
        </div>
        <div class="cont3">
            <div class="inner3">
                <a href="p_delete.php">Deleting Product.</a>
            </div>
        </div>
        <div class="cont4">
            <div class="inner4">
                <a href="p_read.php">Display Database.</a>
            </div>
        </div>
        </div>
    </body>
</html>