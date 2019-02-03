<?php 
include('header.php');

include('server2.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM td_employ WHERE id=$id ");

		
        
        
        $n = mysqli_fetch_array($record);
        $name = $n['name'];
        $address = $n['address'];
        $email = $n['email']; 
        $phone = $n['phone'];
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
    
    				
    <form method="post" action="server2.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>Name</label>
		<input type="text" name="Ename" value="<?php echo $name; ?>">
	</div>
        
    <div class="input-group">
		<label>Address</label>
		<input type="text" name="Eaddress" value="<?php echo $address; ?>">
	</div>
    <div class="input-group">
		<label>Email</label>
		<input type="email" name="Eemail" value="<?php echo $email; ?>">
	</div>
    <div class="input-group">
		<label>phone No</label>
		<input type="text" name="Ephone" value="<?php echo $phone; ?>">
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

<?php $results = mysqli_query($db, "SELECT * FROM td_employ"); ?>

 <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Employ info</h4>
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
			<td><?php echo $row['date']; ?></td>
			<td>
				<a href="employ-info-table.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server2.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
                    </div>
                  </div>
     </div>
</div>

	

<?php 
include('footer.php');?>