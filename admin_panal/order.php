
<?php include('header.php') ?>
<?php include('order_php.php') ?>



      
       <script>
       var result=0;
        var res ="";
        var quantity="";
          function chack1(){

            if(document.getElementById('Cquantity').value==""){
                    
                }
                else{
                    var n1 = parseFloat(document.getElementById('Cquantity').value);

                    

                    var n2=n1*200;
                    result = result+n2;

                    quantity = parseFloat(document.getElementById('quantity').value);
                    quantity=n1+quantity;

                    document.getElementById('quantity').value = quantity;
                    document.getElementById('result').value = result;

                    var str1="";  
                    var res = document.getElementById('message').value;          
                    var str3 = "Coffe "+res;
                    var str2 = " ";
                    res = str1.concat(str2, str3);
                   document.getElementById('message').innerHTML = res;

                }

                     



          }
           function chack2(){


             if(document.getElementById('Chquantity').value==""){
                    
                }
                else{

                     var n1 = parseFloat(document.getElementById('Chquantity').value);
                    quantity = parseFloat(document.getElementById('quantity').value);
                    var n2=n1*200;
                    result = result+n2;
                    quantity=n1+quantity;
                    document.getElementById('quantity').value = quantity;
                    document.getElementById('result').value = result;
                    var str1="";  
                    var res = document.getElementById('message').value;          
                    var str2 = "";
                    var str3 = "chicken burger "+res
                    res = str1.concat(str2, str3);
                    document.getElementById('message').innerHTML = res;
                  }


                    
          }

           function chack3(){

             if(document.getElementById('CRquantity').value==""){
                    
                }
                else{

                     var n1 = parseFloat(document.getElementById('CRquantity').value);
                    quantity = parseFloat(document.getElementById('quantity').value);

                    var n2=n1*200;
                    result = result+n2;
                    quantity=n1+quantity;
                    document.getElementById('quantity').value = quantity;
                    document.getElementById('result').value = result;

                     var str1="";  
                    var res = document.getElementById('message').value;          
                    var str2 = "";
                    var str3 = "chicken roll "+res
                    res = str1.concat(str2, str3);
                    document.getElementById('message').innerHTML = res;
                  }
          }
           function chack4(){

                 if(document.getElementById('Pquantity').value==""){
                    
                }
                else{

                     var n1 = parseFloat(document.getElementById('Pquantity').value);
                    quantity = parseFloat(document.getElementById('quantity').value);
                    var n2=n1*200;
                    result = result+n2;
                    quantity=n1+quantity;
                    document.getElementById('quantity').value = quantity;
                    document.getElementById('result').value = result;

                     var str1="";  
                    var res = document.getElementById('message').value;          
                    var str2 = "";
                    var str3 = "pizza"+res
                    res = str1.concat(str2, str3);
                    document.getElementById('message').innerHTML = res;
                  }
                    
          }



            
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
      
      
              <h1>ORDER</h1>

          
            
           <div class="container" >

        <div class="col-md-12">
            
               
                <div class="row">
                    <div class="col-md-12">
                        
                        
         
        
      
        
        

                      
                  <form method="post" action="order.php">
                      
                  
                      
                      <div class="form-group">
                            <label for="Item">
                                Item</label><br>
   <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" onclick="chack1();"name="Coffe" value="Coffe">
  <label class="form-check-label" for="inlineCheckbox1">Coffe</label>
</div>
 <input type="number" max="10" min="1"class="form-control" id="Cquantity" name="Cquantity" />
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" onclick="chack2();" name="chicken burger" value="chicken burger">
  <label class="form-check-label" for="inlineCheckbox1">chicken burger</label>
</div><input type="number" max="10" min="1"class="form-control" id="Chquantity" name="Cquantity" />

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" onclick="chack3();"name="chicken roll" value="chicken roll">
  <label class="form-check-label" for="inlineCheckbox1">chicken roll</label>
</div>
 <input type="number" max="10" min="1"class="form-control" id="CRquantity" name="CRquantity" />
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" onclick="chack4();" name="pizza" value="pizza">
  <label class="form-check-label" for="inlineCheckbox1">pizza</label>
</div><input type="number" max="10" min="1"class="form-control" id="Pquantity" name="Pquantity" />

 
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
                         

                    
                    <div class="col-md-3">
                        
                        
                        
                        
                       
                        
                      
                        <div class="form-group">
                            <label for="total">
                                Total Cost</label>
                            <input type="text" class="form-control" id="result"  placeholder="Total Cost" name="price" readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label for="Item">
                                Total Quantity</label>
                            <input type="text" class="form-control" id="quantity" value="0"  placeholder="Total Item" name="quantity" readonly="readonly" />
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="name">
                                All Item</label>
                            <textarea name="item" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="item"></textarea>
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
            
    <!-- /.container -->

    <!-- Footer -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php';?>