
<?php include("common/header.php");?>


<script type="text/javascript">


function send_message()


{

     var name="" , error="" ,address="",email="",phone="", message="", prescription="",;
     

     name = document.getElementById("name").value;
     if(name=="")
             {
                document.getElementById('error_name').innerHTML=" Name is required!!";
                error = error + " Name is required!!";
            }

    else 
        document.getElementById('error_name').innerHTML="";

    

      email=document.getElementById("email").value;
        if(email=="")

                 {


                          document.getElementById("error_email").innerHTML="email is required";

                             error=error + "email  is required!!";

                 }
 else if (validateEmail(email)==false)
 {
     document.getElementById("error_email").innerHTML="email  format is invalid";
     error=error + "email  is required!!";

 }

 else
    document.getElementById("error_email").innerHTML="";



phone=document.getElementById("phone").value;
 if(phone=="")
 {

    document.getElementById("error_phone").innerHTML="phone is reqoired";

             error=error + "phone is required!!";

 }
 else
    document.getElementById("error_phone").innerHTML="";


address = document.getElementById("address1").value;


 if(address=="")
 {

    document.getElementById("error_address").innerHTML="address is reqoired";

             error=error + "address is required!!";

 }
 else
    document.getElementById("error_address").innerHTML="";










  if(error=="")
  {
       
    document.f1.send();
 
       }


   }

</script>

      <?php

       if(isset($_POST['order']) &&   $_POST['order']!="")
       {
                 $name = $_POST['name'];
                
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                 $message = $_POST['message'];

                


                 
                $sql="insert into order_product(Name,Email,address,Phone,message,prescription)
                values('$name','$email','$address','$phone','$message','prescription')";

                if($conn->query($sql)== true)
                  echo "New record created successfully";
               else
                    echo $conn->error;


       }



        ?>


        <?php




if(isset($_POST['order']))
{
  $target_dir="images/gallery/";
  $target_file = $target_dir . basename($_FILES["prescription"]["name"]);
   if (move_uploaded_file($_FILES["prescription"]["tmp_name"], $target_file)){


$prescription =  $_FILES["prescription"]["name"];
   

    $sql="insert into order_product (prescription) values ('$prescription)";
    if($conn->query($sql)==true)
        echo "new picturte  add successfully";
    else
        echo $conn->error;

    
   }
   else {
    echo "Sorry, there was an error uploading your file.";
  }




}





?>





	



<div class="HA">
			<h1 id="HA1">YOUR ONLINE PHARMACY</h1>

    		<p id="HA2">GET 100% ORGINAL PRODUCT AT HOME</p>

       		<button class="button" ><a href="order.php">ORDER NOW</a></button>

</div>


<div class="HB">
			<h1 id="HBh1">About Online Medicine Shop </h1>
			<h3 id="HBh3">Online Based Pharmacy Services</h3>

			<p id="HBp">online medicine shop is a Bangladesh’s online pharmacy store where user can buy medicines online and health care products in a wide range of categories. We delivery products inside sylhet city within 2-8 hours. We provide cash on delivery service. online medicine shop is one of the top pharma companies in Bangladesh.</p>

</div>


	
			<h1 id="HCh1">Best Services In Bangladesh</h1>

			<h2 id="HCh2"> We Provide Quality Service</h2>
		                                              


 <!--- use boostraP -->
<div class="container">

		  <div class="row">
          		    <div class="col-sm-6">
          		     	 	<h3 style="color:red">Consultant Available</h3>
          		      		<p>Our own best consultant available for giving suggestions<br> about
          		       		online pharmacy products.</p>
          		     	 </div>

          			 <div class="col-sm-6">
          			      	<h3 style="color: red">Best Price Offer</h3>
          			      	<p>We offer our clients best price compare than local<br> Pharmacy store. Up to 20% discount available.</p>
          			  </div>

          			    <div class="col-sm-6">
          			      	<h3 style="color: red">Original Medicine</h3>        
          			      	<p>We are verified company in Bangladesh.<br>We provide 100% genuine medicine.</p>
          				</div>

                    <div class="col-sm-6">
                    		<h3 style="color: red">Ensure Privacy</h3>
                    		<p>We ensure privacy of clientsproducts.<br>We never disclose your identity.</p>

                     </div>
      </div>
       

      <!--style use csss-->
     
        <div class="HD">
        		

          		<h1 id="HDh1">Why Choose Us</h1>
          		<h3 id="HDh2">Customer service is our priority</h3>
          	<dl id="">
          		<dt>#only certified medicine available</dt>
          		<dt>#Confidential delivery to ensure privacy</dt>
          		<dt>#Delivery anywhere in Dhaka City</dt>
          		<dt>#Cash on Delivery</dt>
          		<dt>#Only online pharmacy you can trust.</dt>
          		
              </dl>
        </div>


        

       <div class="HE">
        
            			<h1 id="HEh1">How To Find Us</h1>

            
            		<div class="col-sm-4">
            			<!--use boostrap icon-->
                 	<div class="icon">
            			<span class="glyphicon glyphicon-map-marker"></span></div>
                     		<p>modina market<br> sylhet</p>

            				</div>

            				<div class="col-sm-4">
            					<div class="icon">
            						<span class="glyphicon glyphicon-phone-alt"></span></div>
            							<p>+003466879</p>
            							</div>

            		<div class="col-sm-4">
                         	<div class="icon">
            					<span class="glyphicon glyphicon-envelope"></span></div>
            						<p>omd@gmail.com</p>
            						</div>
        	
        </div>

        <!-- order form  style boostrap & css-->

<div class="orderpage">
    <div class="container">
            <h2 class="orderh2">Order Medicine From Online Pharmacy</h2>
            <p class="orderp">Fill up the form and ask your queries. We will contact you soon.</p>
            <form action="/action_page.php">

              <label for="name"> Name:</label>
                  <input type="text" name="nmae" id="nm" placeholder=" Your Name..." class="form-control">
                  
                <label for="phone">Phone:</label>
                <input type="number" name="number" placeholder="Your Phone..." class="form-control">

                <label for="Email"> Email:</label>
                <input type="text" name="email" id="email" placeholder="Your Email..." class="form-control">

                <label for="Address">Address:</label>
                <input type="text" name="Address" id="ad" placeholder="Your Address" class="form-control">

                <label for="prescription"> prescription</label>
                <input type="file" name="prescription_pic" id="pr" placeholder="choose Your file" class="form-control">



                <label for="Message">Message</label>
                <input type="Message" name="Message" id="ms" class="form-control">
                <input type="hidden" name="order" value="order">
                <input type="submit" value="SEND MESSAGE"   onclick=" send_message()">

               
              
            </form>

         </div>
    </div>
</div>


  <?php include("common/footer.php");?>



	







	






