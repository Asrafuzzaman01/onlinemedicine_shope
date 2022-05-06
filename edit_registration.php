<?php include("common/header.php");?>

<?php
$id=$_REQUEST['id'];







?>


<script>







function update_Registration()


{

     var first_name="" , last_name="", user_name="",  error="" ,address="",email="",phone="", gender="", password="", ;
     

     first_name = document.getElementById("first_name").value;
                 if(first_name=="")
                 {
                    document.getElementById('error_name').innerHTML="first  Name is required!!";
                    error = error + " first  Name is required!!";
                }

                else 
                    document.getElementById('error_name').innerHTML="";

     last_name = document.getElementById("last_name").value;
                 if(last_name=="")
                 {
                    document.getElementById('error_name').innerHTML=" last Name is required!!";
                    error = error + " last Name is required!!";
                }

                else 
                    document.getElementById('error_name').innerHTML="";



     user_name = document.getElementById("user_name").value;
                 if(user_name=="")
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


address = document.getElementById("address").value;


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

       if(isset($_POST['registration']) &&   $_POST['registration']!="")
       {
                 $first_name=$_POST['first_name'];
                 $last_name=$_POST['last_name'];
                 $user_name=$_POST['user_name'];

                
                $email=$_POST['email'];

                $phone=$_POST['phone'];
                $address=$_POST['address'];
                $password=$_POST['password'];
                $gender=$_POST['gender'];

               
               /* $target_dir="pic/prescription/";
                $target_file = $target_dir . basename($_FILES["prescription"]["name"]);
                if (move_uploaded_file($_FILES["prescription"]["tmp_name"], $target_file))

                      $prescription =  $_FILES["prescription"]["name"];*/


                $sql="update order_product set first_Name='$first_name', last_name='$last_name', user_name='$user_name',Phone='$phone', email='$email', address='$address', password='$password', gender='$gender', where id=$id";

                 
                

                if($conn->query($sql)== true)
                  echo "registration is updaated successfully";
               else
                    echo $conn->error;


       }





 $sql="SELECT * from registration_form where id=".$id;


$result  =  $conn->query($sql);
$row     =  $result->fetch_assoc();


        ?>


        




        






<div class="registra">
<div class="container">
 
  <h1 class="registrah1"><h1>Register</h1>
  <p class="registrap">Please fill in this form to create an account.</p>
  <form action="" method="post" name="f1" enctype="multipart/form-data">

    <label for="first name">First Name:</label>
        <input type="text" name="first_name" id="firstname" placeholder=" Your first Name..." class="form-control">
        <td id="error_firstname" style="color:red;"></td>
        
        <label for="Last name">Last Name:</label>
        <input type="text" name="last_name" id="lastname" placeholder=" Your last Name..." class="form-control">
        <td id="error_lastname" style="color:red;"></td>
        

        <label for="first name">User Name:</label>
        <input type="text" name="user_name" id="username" placeholder="  User Name..." class="form-control">
        <td id="error_username" style="color:red;"></td>
        

        <label for="Gender ">Gender:</label>
        <input type="checkbox" name="sex " id="Gender" valu="male" >Male
        <input type="checkbox" name="sex" id="Gender" value="female">Female<br><br>
        <td id="error_gender" style="color:red;"></td>
        
        
        
        
      <label for="Phone">Phone:</label>
      <input type="number" name="phone"  id="phone"placeholder="Your Phone..." class="form-control">
      <td id="error_phone" style="color:red;"></td>
        

      <label for="Email"> Email:</label>
      <input type="text" name="email" id="email" placeholder="Your Email..." class="form-control">

      <label for="Address">Address:</label>
      <input type="text" name="address" id="address" placeholder="Your Address" class="form-control">

     


      
      <input type="submit" value="Register"  onclick="uptate_Registration()">

     
    
  </form>
</div>
     </div>
    














<?php include("common/footer.php");?>
