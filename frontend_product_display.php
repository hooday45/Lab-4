<!DOCTYPE html>

<html>
    <head>
        <title>Bookstore</title>
		<link rel="stylesheet" href="css/mystyles.css" />
		<script type="text/javascript" src="js/myjs.js"></script>
    </head>

    <?php include ("db_connection.php"); ?>

    <body>
        <h1 align="center"> Online Store </h1>
        
        <ul>
            <li class="menu-item"><a href="#" class="drp">Items</a>
                <div class="menu-content">
                    <a  href="add_book.php">Add Item</a><br>
                    <a  href="remove_book.php">Remove Item</a><br>
                    <a href="display_books.php">Display all Items</a>
                </div>
            </li>
            
            <li class="menu-item"><a href="#" class="drp">Items </a>
                <div class="menu-content">
                    <a  href="add_book.php">Add Item</a><br>
                    <a  href="remove_book.php">Remove Item</a><br>
                    <a href="display_books.php">Display all Item</a>
                </div>
            </li>
            
            <li class="menu-item"><a href="#" class="drp">Users </a>	
                <div class="menu-content">
                    <a href="add_user.php">Add User</a><br>
                    <a href="remove_user.php">Remove User</a><br>
                    <a href="display_users.php">Display all Users</a>
                </div>
            </li>
            <li>
                <img class="cart" src="img/cart.png" onclick="showMyCart()" width="5%"/>
                <div class="cartDiv" id="cart">
                    <p id="cartContent"></p>
                </div>
            </li>
        </ul>

        <p align="center"> Welcome to JBU's Online store - open for faculty/staff and students!<p>
	
        <center>

            <!----Top Banner---->
            <!-----Menu Bar----->

            <?php
                $count=1;
                $sql_product="SELECT * FROM product_tab";
                $result_product=$connect->query($sql_product);
            ?>
                
            <table align="center" width=80% border=1>
                <tr>
                    <?php
                    while($row_product = $result_product->fetch_assoc())
                    { ?>
                        <td> 
                            <img src='<?php echo $row_product["product_image"]; ?>' width="20%" /><br>
                            <?php echo $row_product["product_name"]; ?><br>
                            <?php echo $row_product["unit_price"]; ?><br>
                            <input value="Add to Cart" onClick="javascript:addToCart()" />
                        </td>

                    <?php 
                        if ($count>=3)
                        {	echo "</tr><tr>";
                            $count=1;
                        }
                        else
                        {
                            $count++;
                        }
                    } ?>
            </table>

        </center>
	</body>
</html>