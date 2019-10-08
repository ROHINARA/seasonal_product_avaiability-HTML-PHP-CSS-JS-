
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"seasonal_product");
?>
    <center> <div class="grid_10">
            <div class="box round first">
                <h2>
                    Order Items</h2>
                <div class="block">
                <?php
                    
                $res=mysqli_query($link,"select * from add_product ");
                echo "<table border='1'>";
                echo "<tr>";
                echo "<td >"; echo "product image"; echo "</td>";
                echo "<td >"; echo "product name"; echo "</td>";
                echo "<td >"; echo "product price"; echo "</td>";
                echo "<td >"; echo "product qty"; echo "</td>";
                echo "<td >"; echo "product total"; echo "</td>";
                echo "</tr>";
                while($row=mysqli_fetch_array($res))
                {
                    echo "<tr>";
                    echo "<td valign='top'>"; ?> <img src="<?php echo $row["Image"]; ?>" height="200" width="200"> <?php echo "</td>";
                    echo "<td valign='top'>"; echo $row["Product Name"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["Unit Price"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["Quantity"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["Description"]; echo "</td>";
                    echo "</tr>";

                }
                echo "</table>";
                 ?>
                </div>
            </div></center>
