<?php include("common/header.php");?>



<script>


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

                print_r($_FILES);
                $target_dir="pic/prescription/";
                $target_file = $target_dir . basename($_FILES["prescription"]["name"]);
                if (move_uploaded_file($_FILES["prescription"]["tmp_name"], $target_file))

                      $prescription =  $_FILES["prescription"]["name"];


                 //data insert database// 
                $sql="insert into order_product(Name,Email,address,Phone,message,prescription)
                values('$name','$email','$address','$phone','$message','$prescription')";

                if($conn->query($sql)== true)
                  echo "New record created successfully";//result test//
               else
                    echo $conn->error;


       }



        ?>


        <?php




//if(isset($_POST['order']))
//{
 

 /* $target_dir="images/gallery/";
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

*/


//}





?>





<div class="orderpage">
<div class="container">
 
  <h2 class="orderh2">Order Medicine From Online Pharmacy</h2>
  <p class="orderp">Fill up the form and ask your queries. We will contact you soon.</p>
  <form action="" method="post" name="f1" enctype="multipart/form-data">

    <label for="name"> Name:</label>
        <input type="text" name="name" id="nm" placeholder=" Your Name..." class="form-control">
        
      <label for="phone">Phone:</label>
      <input type="number" name="phone" placeholder="Your Phone..." class="form-control">

      <label for="Email"> Email:</label>
      <input type="text" name="email" id="email" placeholder="Your Email..." class="form-control">

      <label for="Address">Address:</label>
      <input type="text" name="address" id="ad" placeholder="Your Address" class="form-control">

      <label for="prescription"> prescription</label>
      <input type="file" name="prescription" id="pr" placeholder="choose Your file" class="form-control">



      <label for="Message">Message</label>
      <input type="Message" name="message" id="ms" class="form-control">
      <input type="hidden" name="order" value="order">
      <input type="submit" value="SEND MESSAGE"  onclick=" send_message()">

     
    
  </form>
</div>
     </div>
    


<?php include("common/footer.php");?>