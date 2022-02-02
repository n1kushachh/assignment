<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="frontend/app.js"></script>
    <title>Product List</title>
</head>
<body>
    
    
    <?php
    include("connect.php");
    if(isset($_POST['submit']))   //THE NAME OF THE BUTTON IS delete. 
   {
      foreach ($_GET["id"] as $id){
      $de1 = "DELETE FROM assignmentdb WHERE PID='$id'";
      if(mysqli_query($conn, $de1))
      echo "<b>Deletion Successful. </b>";
      else
      echo "ERROR: Could not execute";
      }
   }

    ?>
    <div class="container">
        <header>
            <h1>Product List</h1>
            <div class="buttons">
                <form action="" method="POST">
                    <button type="button" onclick="location.href='insert.php'" class="btn btn-primary">ADD</button>
                    <button type="submit" name="deleteBtn" class="btn btn-primary" id="delete-product-btn">MASS DELETE</button>
                
            </div>
            <hr>
        </header>
        <div class="wrapper">
        <?php
            include("connect.php");

            $q = "SELECT * FROM assignmentdb";
            $query = mysqli_query($conn, $q);            
        ?>

            <?php

                while($qq=mysqli_fetch_array($query))
                {
            ?>
            <div class="wrapper-item">
                <input type="checkbox" name="records[]" class="delete-checkbox" value="<?php echo $qq['id'];?>">
                <p><?php echo $qq['sku'];?></p>
                <p><?php echo $qq['name'];?></p>
                <p><?php echo $qq['price'];?>$</p>
                <p><?php echo $qq['attribute'];?></p>
            </div>
            </form>
            <?php
            }
            ?>

            <?php
                if(isset($_POST['deleteBtn'])){
                    $numberOfCheckbox = count($_POST['records']);
                    echo $_POST['records'];
                }
            ?>


        </div>
    </div>



        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>