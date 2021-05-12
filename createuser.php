<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/createuser.css">
</head>

<body style="background-color : #d4cbf5">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $contact=$_POST['contact'];
    $sql="insert into users(name,email,balance,contact) values('{$name}','{$email}','{$balance}','{$contact}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User created Successfully');
                               window.location='transfermoney.php';
                     </script>";          
    }
  }
?>

<?php
  include 'navbar.php';
?>

<h2 class="text-center pt-4" style="color : black; transition: 0.7s; font-weight: bold;">New User</h2>
<br>
  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header" style="background-color: #0e0538;">
        </div>
        <div class="screen-body">
          <div class="screen-body-item left c2" >
            <img class="img-fluid" src="IMAGE/user3.png" style="border: 1px solid black; border-radius: 50%;">
          </div>
          <div class="screen-body-item"style="background-color: #FFFFFF;">
            <form class="app-form" method="post">
              <div class="app-form-group">
                <input class="app-form-control" placeholder="Name of Accountholder" type="text" name="name" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="E-mail" type="email" name="email" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="Balance" name="balance" required>
              </div>
	            <div class="app-form-group">
                <input class="app-form-control" placeholder="Contact"   maxlength="10"   name="contact" required>
              </div>
              <br>
              <div class="app-form-group button">
                <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<footer class="text-center mt-2 py-2">
  <H6>&copy 2021. Made by <b>ANKIT PARAB</b></H6>
</footer>

</body>
</html>