<?php
include 'connect.php';
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
                background-color: rgb(80, 111, 183);
                justify-content: center;
                align-items: center;
                align-content: center;
                display: flex;
            }
        p{
            margin: 10px;
            text-align: center;
            font-size: 37;
            font-family: 'Times New Roman', Times, serif;
        }
        .maincont
        {
            text-align: center;
            background-color: beige;
            border-radius: 24px;
            padding: 10;
            margin: 10px;
            font-size: 27;
            font-family: 'Times New Roman', Times, serif;
            box-shadow: 5px 5px 15px black;
        }
        table
        {
            text-align: center;
            border-color: black;
            font-size: 20px;
            letter-spacing: 0.1rem;
        }
        a{
            color: white;
            font-size: 17;
        }
        a:hover{
            color: white;
            text-decoration: none;
        }
    </style>
    </head>
    <body>
    <div class="maincont">
    <p>DATABASE</p>
    <table class="table", border=3>
        <thead>
            <th>BARCODE NUMBER</th>
            <th>NAME</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>SUPPLIER ID</th>
            <th>Operation</th>
        </thead>
        <tbody>
        <?php
            $sql="Select * from product";
            $result=mysqli_query($conn, $sql); 
            if($result)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $code=$row['p_code'];
                    $name=$row['p_name'];
                    $qty=$row['p_qty'];
                    $price=$row['p_price'];
                    $sid=$row['s_id'];
                    echo' <tr>
                    <th scope="row">'.$code.'</th>
                    <td>'.$name.'</td>
                    <td>'.$qty.'</td>
                    <td>'.$price.'</td>
                    <td>'.$sid.'</td>        
                    <td>
                    <button class="btn btn-primary"><a href="p_update.php?updatecode='.$code.'">Update</a></button>
                    </td>
                    </tr>';
                }
            }
        ?>
        </tbody>
    </table>
</div>
    </body>
</html>

