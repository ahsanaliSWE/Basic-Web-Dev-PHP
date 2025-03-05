<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_SESSION['users'])) {
    if (isset($_POST['submit'])) {
        $product = $_POST['product'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        
        if ($qty > 0) {
            $total = $price * $qty;
            $found = false;

            foreach ($_SESSION['cart'] as &$item) {
                if ($item['product'] == $product) {
                    $item['qty'] += $qty;
                    $item['total'] += $total;
                    $found = true;
                    break;
                }
            }
    

            if (!$found) {
                $_SESSION['cart'][] = [
                    'product' => $product,
                    'price' => $price,
                    'qty' => $qty,
                    'total' => $total
                ];
            }
        }
    }
}else{
    header("Location: login_form.php?msg=Please login First...");
}

/*  echo "<pre>";
 print_r($_SESSION);
 echo "</pre>"; */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch</title>
    <link rel="stylesheet" href="grid.css">
    <style>
        body{
            background-color: deepskyblue;
        }
        #header{
            background-color: white;
            text-align: center;
            padding: 10px;
            border: 2px solid #333;
        }
        .row {
            display: flex;
            align-items: center;
            background-color: white;
            border: 2px solid #333;
            justify-content: space-between;
            padding: 10px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .logout-link a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            border: 1px solid black;
            padding: 5px;
            border-radius: 5px;
        }
        .logout-link a:hover {
            background-color: black;
            color: white;
        }
        .card-container {
            display: flex;
            gap: 10px; 
            width: 100%;
            float: left;
        }

        .card {
            width: 25%; 
            background-color: white;
            border: 2px solid #333;
            padding: 15px;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .card:hover {
            transform: scale(1.05);
            transition: 0.5s;
        }
        .col-2{
            background-color: white;
            padding: 20px;
            width: 16%;
        }
        .col-10{
            background-color: deepskyblue;
            border: 2px solid #333;
            padding: 10px;
            width: 80%;
        }
        .col-10 h2{
            text-align: center;
        }

        #footer h2 {
            flex-grow: 1; 
            text-align: center; 
            margin: 0;
        }

        #footer a {
            text-decoration: none;
            font-weight: bold;
            color: black;
            border: 1px solid black;
            padding: 5px 10px;
            border-radius: 5px;
        }

        #footer a:hover {
            background-color: black;
            color: white;
        }
        .sidebar a:hover{
            color: red;
        }

    </style>
</head>
<body>
    <div id="header" class="col-12">
        <h1>Banner</h1>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <p><strong>Welcome... 
                <?php 
                     echo $_SESSION['users']["first_name"] . " " . $_SESSION['users']["last_name"]; 
                ?>
                </strong></p>
            </div>
            <div class="col-6 logout-link" style="text-align: right;">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-2 sidebar">
            <h2>Products</h2>
            <ul>
                <a href="ipad.php"><li>Ipad</li></a>
                <a href="iphone.php"><li>Iphone</li></a>
                <a href="watch.php"><li>Watch</li></a>
                <a href="mac.php"><li>Mac</li></a>
            </ul>
        </div>
        <div class="col-10">
            <h2>Apple Watch</h2>
            <div class="card-container">
                <div class="card">
                    <img src="https://cellmart.pk/wp-content/uploads/2024/07/apple-watch-se-2022-blk-cellmart.png" alt="watch" width="200px" height="200px">
                    <h3>Watch 9</h3>
                    <p>Price: $1100</p>
                    <form method="POST">
                        <input type="hidden" name="product" value="Watch 9">
                        <input type="hidden" name="price" value="1100">
                        <table cellspadding="10">
                            <tr>
                                <td>
                                    <input type="number" name="qty" placeholder="Quantity">
                                </td>
                                <td>
                                    <input type="submit" name="submit" value="Add to Cart">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="card">
                    <img src="https://cellmart.pk/wp-content/uploads/2024/07/apple-watch-se-2022-blk-cellmart.png" alt="watch" width="200px" height="200px">
                    <h3>Watch SE</h3>
                    <p>Price: $1300</p>
                    <form method="POST">
                        <input type="hidden" name="product" value="Watch SE">
                        <input type="hidden" name="price" value="1300">
                        <table cellspadding="10">
                            <tr>
                                <td>
                                    <input type="number" name="qty" placeholder="Quantity">
                                </td>
                                <td>
                                    <input type="submit" name="submit" value="Add to Cart">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="card">
                    <img src="https://cellmart.pk/wp-content/uploads/2024/07/apple-watch-se-2022-blk-cellmart.png" alt="watch" width="200px" height="200px">
                    <h3>Watch Ultra</h3>
                    <p>Price: $1200</p>
                    <form method="POST">
                        <input type="hidden" name="product" value="Watch Ultra">
                        <input type="hidden" name="price" value="1200">
                        <table cellspadding="10">
                            <tr>
                                <td>
                                    <input type="number" name="qty" placeholder="Quantity">
                                </td>
                                <td>
                                    <input type="submit" name="submit" value="Add to Cart">
                                </td>
                            </tr>
                        </table>
                    </form>
              </div>
                <div class="card">
                    <img src="https://cellmart.pk/wp-content/uploads/2024/07/apple-watch-se-2022-blk-cellmart.png" alt="watch" width="200px" height="200px">
                    <h3>Watch 10</h3>
                    <p>Price: $1500</p>
                    <form method="POST">
                        <input type="hidden" name="product" value="Watch 10">
                        <input type="hidden" name="price" value="1500">
                        <table cellspadding="10">
                            <tr>
                                <td>
                                    <input type="number" name="qty" placeholder="Quantity">
                                </td>
                                <td>
                                    <input type="submit" name="submit" value="Add to Cart">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="row">
        <div class="col-11">
            <h2>Footer</h2>
        </div>
        <div class="col-1">
            <a href="cart.php">Checkout</a>
        </div>
    </div>
    
</body>
</html>