

<?php include("common/header.php");?>


<script>

function Registration()
{
var firstname="", lastname="", username="", phone="", email="",gender="",error="", password="",address="";



firstname=document.getElementById("firstname").value;
                   if (firstname="")
                     {

                        document.getElementById("error_firstname").innerHTML="First Name is required!!";
                         error=error+"First Name is required!!";
                     }
                     else 
                            document.getElementById('error_firstname').innerHTML="";

lastname = document.getElementById("lastname").value;
                 if (lastname="")
                 {

                  document.getElementById("error_lastname").innerHTML="last Name is required!!";
                  error=error+"last Name is required!!";
                  }

                  else 
                            document.getElementById('error_lastname').innerHTML="";

username=document.getElementById("username").value;
                if (username="")
                {

                  document.getElementById("error_username").innerHTML="user Name is required!!";
                  error=error+"user Name is required!!";
                }
                else 
                            document.getElementById('error_username').innerHTML="";


phone=document.getElementById("phone").value;
              if (phone="")
              {

                document.getElementById("phone").innerHTML="phone is required!!";
                error=error+" phone is required!!";
              }
                            else 
                             document.getElementById('error_phone').innerHTML="";

email=document.getElementById("email").value;
                if (email="")
                {

                  document.getElementById("error_email").innerHTML="email  is required!!";
                  error=error+"email is required!!";
                }
                else 
                             document.getElementById('error_email').innerHTML="";




address=document.getElementById("address").value;
          if (address="")
          {

            document.getElementById("error_address").innerHTML="address is required!!";
            error=error+" address is required!!";
          }
          else 
                  document.getElementById('error_address').innerHTML="";







/*gender=document.getElementById("gender").value;
                if (gender="")
                {

                  document.getElementById("error_gender").innerHTML="gender is required!!";
                 error=error+"gender is required!!";
                }

                else 
                             document.getElementById('error_gender').innerHTML="";*/





        
        
         if(error=="")
         {
           alert(error);
          document.f1.submit();
         }





}


</script>





 <?php


         if (isset($_POST['registration']) && $_POST['registration']!="")

                    {


                    $first_name=$_POST['first_name'];
                    $last_name=$_POST['last_name'];
                    $user_name=$_POST['user_name'];
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];
                    $gender=$_POST['gender'];
                    $password=$_POST['password'];
                    $address=$_POST['address'];

                 


                  echo  $sql=" insert into registration_form(first_name,last_name,user_name, phone,email,gender,address, password) 

                        values( '$first_name','$last_name','$user_name','$phone', '$email','$gender','$address','$password')";





                        if($conn->query($sql) == true )

                          echo "new record creat successfully";

                        else
                            echo  $conn->error;





                  }

 ?>










 
    
<div class="registra">
<div class="container">
 
  <h1 class="registrah1"><h1>Register</h1>
  <p class="registrap">Please fill in this form to create an account.</p>
  <form action="" method="post" name="f1" enctype="multipart/form-data">

    <label for="first name">First Name:</label>
        <input type="text" name="first_name" id="firstname" placeholder=" Your first Name..." class="form-control">
        <div id="error_firstname" style="color:red;"></div>
        
        <label for="Last name">Last Name:</label>
        <input type="text" name="last_name" id="lastname" placeholder=" Your last Name..." class="form-control">
        <div id="error_lastname" style="color:red;"></div>
        

        <label for="user name">User Name:</label>
        <input type="text" name="user_name" id="username" placeholder="  User Name..." class="form-control">
        <div id="error_username" style="color:red;"></div>
        

        <label for="Gender ">Gender:</label>
        <input type="radio" name="gender"  checked valu="male" >Male
        <input type="radio" name="gender"  value="female">Female<br><br>
        <div id="error_gender" style="color:red;"></div>
        
        
        
        
      <label for="Phone">Phone:</label>
      <input type="number" name="phone"  id="phone"placeholder="Your Phone..." class="form-control">
      <div id="error_phone" style="color:red;"></div>
        

      <label for="Email"> Email:</label>
      <input type="text" name="email" id="email" placeholder="Your Email..." class="form-control">
      <div id="error_email" style="color:red;"></div>
          <label for="Email"> Password:</label>
      <input type="password" name="password" id="password" placeholder="Your password..." class="form-control">
      <div id="error_password" style="color:red;"></div>


      <label for="Address">Address:</label>
      <input type="text" name="address" id="address" placeholder="Your Address" class="form-control">
      <div id="error_address" style="color:red;"></div>
      <input type="hidden" name="registration" value="regis">
        

     


      
      <input type="button" value="Register"  onclick="Registration()">

     
    
  </form>
</div>
     </div>
    














<?php include("common/footer.php");?>
