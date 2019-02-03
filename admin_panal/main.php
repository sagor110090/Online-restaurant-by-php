<?php include 'header.php';?>





      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            
           
          
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Customer No</strong>
                  <div class="count-number"><?php 

while ($rows3 = mysqli_fetch_array($result3)) {
                                                       
 echo $rows3['COUNT(*)'];
              }
?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list"></i></div>
                <div class="name"><strong class="text-uppercase">Quantity</strong>
                  <div class="count-number"><?php 

while ($rows2 = mysqli_fetch_array($result2)) {
                                                       
 echo $rows2['SUM(quantity)'];
              }
?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list-1"></i></div>
                <div class="name"><strong class="text-uppercase">Total</strong>
                  <div class="count-number"><?php 

while ($rows1 = mysqli_fetch_array($result1)) {
                                                       
 echo $rows1['SUM(PRICE)'];
              }
?>

                   

                     </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

     
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

?>
                      </table>
                    </div>
                  </div>
    </div>
</div>



     

  <?php include 'footer.php';?>