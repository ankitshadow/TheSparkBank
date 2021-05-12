<!doctype html>
<html lang="en">
<head>
	  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
  
    <title> The Spark bank </title>

</head>

<body>
 <?php
  include 'navbar.php';
  ?>

<div class="container-fluid">
  <!-- Introduction section -->
    <div class="row intro py-1 intro">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
            <h3 class="animated">Welcome to The Spark Bank</h3>
        </div>
      </div>
    </div>    	
		
	<!-- Activity section -->
  <div class="row activity text-center a1">
    <div class="col-md act">
  	<br>
      <img src="IMAGE/user.png" class="img-fluid rounded-circle">
        <br><br>
          <a href="createuser.php"><button style="background-color: #180726; color:#FFFFFF; ">Create a User</button></a><br><br>
    </div>
    <div class="col-md act">
  	<br>
      <img src="IMAGE/transfer.png" class="img-fluid rounded-circle">
        <br><br>
          <a href="transfermoney.php"><button style="background-color: #180726; color:#FFFFFF;">Make a Transaction</button></a><br><br>
    </div>
    <div class="col-md act">
	  <br>
      <img src="IMAGE/history.png" class="img-fluid rounded-circle">
        <br><br>
          <a href="transactionhistory.php"><button style="background-color: #180726; color:#FFFFFF;">Transaction History</button></a><br><br>
    </div>
  </div>
</div>

<footer class="text-center mt-2 py-2">
  <H6>&copy 2021. Made by <b>ANKIT PARAB</b></H6>
</footer>

</body>
</html>

