
<?php include 'header.php';?>


<h1></h1>
 <div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
               
                <div class="row">
                    <div class="col-md-9">
                  
                  <form method="post" action="register.php">
                  <div class="form-group">
                            <label for="date">
                                Date</label>
                            <input type="date"class="form-control" id="Date" placeholder="Enter Date" name="Edate"   required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="Ename" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="Eemail" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="address">
                                Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter address" name="Eaddress" required="required" />
                        </div>
                         <div class="form-group">
                            <label for="phone">
                                Phone No</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone No" name="Ephone"  required="required" />
                        </div>
                     
                    </div>
                         

                    
                    <div class="col-md-3">
                        
                        
                        <div class="form-group">
                            <label >
                                User Name</label> 
                        </div>
                         <div class="input-group">
                                
                                <input type="text" class="form-control" id="ename" placeholder="ename" name="Eusername" required="required" /></div>
                        
                        
                        <div class="form-group">
                            <label >
                                Password</label> 
                        </div>
                         <div class="input-group">
                                
                                <input type="password" class="form-control" id="password" placeholder="password-1" name="Epassword_1" required="required" /></div>
                        
                       
                        

                    </div>
                    <div class="col-md-12">
                       
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" name="reg_ad">
                            Register</button>
                    </div>





                  </form>
                      


                  
                </div>
              
            </div>
        </div>
     </div>
</div>
  
     



<?php include 'footer.php';?>