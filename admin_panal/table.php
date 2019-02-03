<?php include 'header.php';?>


<?php
$con= mysqli_connect('localhost', 'root', '', 'db_restaurant');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM orders");

?>

<div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>ORDERS</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
             
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Address</td>
                            <td>Phone No</td>
                            <td>Item</td>
                            <td>Quantity</td>
                            <td>Price</td>
                            <td>Date</td>
                        </tr>         
<?php
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['item'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}
mysqli_close($con);
?>
                      </table>
                    </div>
                  </div>
    </div>
</div>
                  
<?php include 'footer.php';?>