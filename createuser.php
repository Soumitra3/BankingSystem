<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/06f98189ab.js" crossorigin="anonymous"></script>

    <style type="text/css">
          .screen-body{   
                 background-color:#BDC3C7;
                 width:30%;
                 border-radius:20px;
                 padding-left:6%;
                 box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

           }
           .app-form-control{
                  border-radius:8px;
                  padding-top:0.5%;
           }
           .app-form-group{
             padding:1%;
           }
           .screen-body-item-left{
            padding-bottom:5%;
           }#green{
             border-radius:10px;
             background-color:green;
           }
           #green:hover,
           #green:focus
           {
             background-color: #32CD32;
           }
           #red{
            border-radius:10px;
             background-color:red;
           }
           #red:hover,
           #red:focus
           {
             background-color: #B22222;
           }
           
    </style>
  </head>
  <body background="images/background.png">   
  <body>
  <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>


    <div class="container-fluid py-4">
      <h2 class="text-center"><b>Create User</b></h2>
    </div>


        <div class="background">
          <div class="container">
            <div class="screen">
              <div class="screen-header">
                <div class="screen-header-right">
                  <div class="screen-header-ellipsis"></div>
                  <div class="screen-header-ellipsis"></div>
                  <div class="screen-header-ellipsis"></div>
                </div>
              </div>
              <div class="screen-body">
                <div class="screen-body-item-left">
                  <i class="fas fa-users fa-9x py-4 mt-5 ml-2" style="background-color:white; border-radius:60%"></i>
                </div>
                <div class="screen-body-item">
                  <form class="app-form" method="post">
                    <div class="app-form-group">
                      <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                    </div><br>
                    <div class="app-form-group">
                      <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                    </div><br>
                    <div class="app-form-group">
                      <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                    </div>
                      <br>
                    <div class="app-form-group button">
                      <input id="green" class="app-form-button" type="submit" name="submit" value="CREATE">
                      <input id="red" class="app-form-button" type="reset" name="reset" value="RESET">
                    </div>

                  </form>

                </div>

              </div>

            </div>

          </div>

        </div>


<div class="container-fluid">
  <footer class="footer text-center mt-4 py-1 ">
      <p><small>&copy 2022. Made by <b>Soumitra Nayak</b><br>Project of The Sparks Foundation</small></p>
  </footer>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>