
<?php include('header.php'); ?>
<?php 
include('server1.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM td_orders WHERE id=$id ");

		
        
        
        $n = mysqli_fetch_array($record);
        $name = $n['name'];
        $address = $n['address'];
        $email = $n['email']; 
        $phone = $n['phone'];
        $item = $n['item'];
        $quantity = $n['quantity']; 
        $price = $n['price'];
        $date = $n['date'];
        
		

	}


?>

	

	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
   
   <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                  <div class="table-responsive"> 
    <form method="post" action="server1.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
	</div>
        
    <div class="input-group">
		<label>Address</label>
		<input type="text" name="address" value="<?php echo $address; ?>">
	</div>
    <div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
    <div class="input-group">
		<label>phone No</label>
		<input type="text" name="phone" value="<?php echo $phone; ?>">
	</div>
    <div class="input-group">
		<label>item</label>
		<input type="text" name="item" value="<?php echo $item; ?>">
	</div>
     <div class="input-group">
		<label>quantity</label>
		<input type="number" min="1" max="10" name="quantity" value="<?php echo $quantity; ?>">
	</div>
     <div class="input-group">
		<label>price</label>
		<input type="text" name="price" value="<?php echo $price; ?>">
	</div>
     <div class="input-group">
		<label>date</label>
		<input type="date" name="date" value="<?php echo $date; ?>">
	</div>
        

	<div class="input-group">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
</form>
                    </div>
                  </div>
       </div>
</div>

<?php $results = mysqli_query($db, "SELECT * FROM td_orders"); ?>

 <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>ORDERS</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
	<thead>
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
                           
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
            
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['item']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td>
				<a href="order-table.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server1.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	
                    </div>
                  </div>
     </div>
</div>




<?php include('footer.php'); ?>