<?php include('server.php') ?>


<!DOCTYPE html>
<html>
  <head>
	 <title>Order</title>
	 
          <link rel="stylesheet" type="text/css" href="css/login.css">
       

          <!-- Bootstrap core CSS -->
          <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

          <!-- Custom styles for this template -->
          <link href="css/thumbnail-gallery.css" rel="stylesheet">
      
      
 
      
       <script>
            
            function calc()
            {
                
                if(document.getElementById('quantity').value==""){
                    
                }
                else{
                    
                    var n1 = parseFloat(document.getElementById('quantity').value);
                    var n2 = parseFloat(document.getElementById('price').value);
                    document.getElementById('result').value = n1*n2;
                }   
               
            }
            
        </script>
      
      
  </head>
  <body>
	    <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Restaurant Management System</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
      			
      			<li class="nav-item">
                    <a class="nav-link" href="#">Booking</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="col-md-12" >
             <div class="container" >
              <h1>ORDER</h1>

          
            
           <div class="container" >
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
               
                <div class="row">
                    <div class="col-md-6">
                        
                        
         
        
      
        
        

                      
                  <form method="post" action="order.php">
                      
                  
                      
                      <div class="form-group">
                            <label for="Item">
                                Item</label>
                            <input type="text" class="form-control" name="item" value="<?php
                     
                     echo $_GET['item1']; ?>"   name="total" readonly="readonly" />
                        </div>



        
                       
                   

                      
                    
                       <div class="form-group">
                            <label for="quantity">
                                Quantity</label>
                            <input type="number" max="10" min="1"class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required="required" />
                        </div>
                      
                      
                        <div class="form-group">
                            <label for="date">
                                Date</label>
                            <input type="date"class="form-control" id="Date" placeholder="Enter Date" name="date"   required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="address">
                                Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required="required" />
                        </div>
                         <div class="form-group">
                            <label for="phone">
                                Phone No</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone No" name="phone"  required="required" />
                        </div>
                     
                    </div>
                         

                    
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="Price">
                                Price</label>
                            <input type="text" class="form-control" id="price" value="<?php
                     
                     echo $_GET['price']; ?>"   name="price" readonly="readonly" />
                        </div>
                        
                        
                       
                        
                      
                        <div class="form-group">
                            <label for="total">
                                Total Cost</label>
                            <input type="text" class="form-control" id="result" onclick="calc();" placeholder="Total Cost" name="price" readonly="readonly" />
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                       
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" name="order_user">
                            Send Order</button>
                    </div>





                  </form>
                      


                  
                </div>
              
            </div>
        </div>
       
    </div>
  </div>
                 
                 	</div>
              </div>
    <!-- /.container -->

    <!-- Footer -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php';?>