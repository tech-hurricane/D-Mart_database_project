<?php
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $code = $_POST['p_code'];
        $sql="delete from product where p_code=$code";
        $result=mysqli_query($conn, $sql);
        if(!$result)
        {
            die(mysqli_error($conn));
        }
    }
    
?>
<html>
    <head>
        <style>
            body{
                background-color: rgb(236, 46, 46);
                justify-content: center;
                align-items: center;
                align-content: center;
                display: flex;
            }
            .container{
                background-color: beige;
                text-align: center;
                border-radius: 24px;
                padding: 10;
                margin: 10px;
                font-size: 20;
                font-family: 'Times New Roman', Times, serif;
                width: fit-content;
                box-shadow: 5px 5px 15px black;
            }
            
            button{
                background-color: rgb(240, 79, 79);
                color: white;
                font-weight: 800;
                font-size: 17;
                font-family: 'Times New Roman', Times, serif;
                padding: 8 20 ;
                margin-top: 15;
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
                background: rgb(245, 162, 162);
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
                font-size: 30;
                margin-top: 5;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <div class="container">
                <p>Delete Product</p>
                <div class="inputbox">
                    <input type="text" required="required" name="p_code">
                    <span>Enter Barcode Number: </span>
                    <i></i>
                </div>
                <button name="submit">Submit</button>
            </div>
        </form>
    </body>
</html>
