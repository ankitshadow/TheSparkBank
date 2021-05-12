<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/table.css">
	<link rel="stylesheet" type="text/css" href="CSS/button.css">
    
</head>

<body style="background-color : #edebfc;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
    <h2 class="text-center pt-4" style="color : black; transition: 0.7s; font-weight: bold;">Transfer Money</h2>
    <br>
        <div class="row" >
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style=" border: 1px solid black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
	                        <th scope="col" class="text-center py-2">Contact</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($rows=mysqli_fetch_assoc($result)){
                            ?>
                                <tr style="color : black;">
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name']?></td>
                                    <td class="py-2"><?php echo $rows['email']?></td>
                                    <td class="py-2"><?php echo $rows['balance']?></td>
                                    <td class="py-2"><?php echo $rows['contact']?></td>
                                    <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> 
                                    <button type="button" class="btn df" style="background-color :#e1b3f5;">Transact</button></a></td> 
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
</div>
 
<footer class="text-center mt-2 py-2">
    <H6>&copy 2021. Made by <b>ANKIT PARAB</b></H6>
</footer>

</body>
</html>