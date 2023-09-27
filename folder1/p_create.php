<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $code = $_POST['p_code'];
    $name = $_POST['p_name'];
    $qty = $_POST['p_qty'];
    $price = $_POST['p_price'];
    $sid = $_POST['s_id'];
    $sql="insert into product (p_code, p_name, p_qty, p_price, s_id) values('$code', '$name', '$qty', '$price', '$sid')";
    $result=mysqli_query($conn, $sql);
}
?>
<html>
    <head>
        <style>
            body{
                background-color: rgb(80, 111, 183);
                justify-content: center;
                align-items: center;
                align-content: center;
                display: flex;
            }
            .container{
                text-align: center;
                background-color: beige;
                border-radius: 24px;
                padding: 10;
                margin: 10px;
                font-size: 27;
                font-family: 'Times New Roman', Times, serif;
                width: 650;
                box-shadow: 5px 5px 15px black;
            }
            button{
                background-color: rgb(105, 74, 230);
                color: white;
                font-weight: 800;
                font-size: 17;
                font-family: 'Times New Roman', Times, serif;
                padding: 8 20 ;
                margin-top: 20;
                border-radius: 12px;
                border: 0;
            }
            .inputbox{
                position: relative;
                width: 100%;
                margin-top: 25px;
            }
            .inputbox input{
                position: relative;
                font-family: 'Times New Roman', Times, serif;
                width: 100%;
                padding: 10px 10px 10px;
                background: transparent;
                border: none;
                outline: none;
                color: black;
                font-size: 1em;
                letter-spacing: 0.06em;
                z-index: 10;
            }
            .inputbox span{
                position: absolute;
                left: 0;
                padding: 20px 10px 10px;
                font-size: 1em;
                color: black;
                pointer-events: none;
                letter-spacing: 0.05em;
                transition: 0.5s;
            }
            .inputbox input:valid ~ span,
            .inputbox input:focus ~ span {
                color: black;
                transform: translateX(-10px) translateY(-34px);
                font-size: 0.75em
            }
            .inputbox i{
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 3px;
                background: rgb(151, 178, 240);
                border-radius: 10px;
                transition: 0.5s;
                pointer-events: none;
                z-index: 9;
            }
            .inputbox input:valid ~ i,
            .inputbox input:focus ~ i {
                height: 40px;
            }
            p{
                font-size: 35;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <form method="post">
            <p>ADD ITEM IN DATABASE.</p>
            <div class="inputbox">
                <input type="text" required="required" name="p_code", autocomplete="off">
                <span>Enter Barcode number: </span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="p_name", autocomplete="off">
                <span>Enter Product Name: </span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="p_qty", autocomplete="off">
                <span>Enter Product Quantity: </span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="p_price", autocomplete="off">
                <span>Enter Product Price: </span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="s_id", autocomplete="off">
                <span>Enter Supplier ID: </span>
                <i></i>
            </div>
            <div class="but">
                <button name="submit">SUBMIT</button>
            </div>
        </form>
    </div>
    </body>
</html>