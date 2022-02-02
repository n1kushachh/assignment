<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="frontend/app.js"></script>

    <title>Add Product</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Product Add</h1>
            <hr>
        </header>
        <div class="content">
            <div class="content-left">
                <form class="form-input" action="insert.php" method="POST">
                    <div class="form-group">
                      <label for="form-sku">SKU</label>
                      <input type="text" class="form-control" id="sku" name="sku" placeholder="SKU" required>
                    </div>
                    <div class="form-group">
                        <label for="form-name">NAME</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="NAME" required>
                      </div>
                      <div class="form-group">
                        <label for="form-price">PRICE</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="PRICE" required>
                      </div>
                      <select name="selectTypeSwitcher" id="productType">
                          <option value="typeSwitcher">TypeSwitcher</option>
                          <option value="dvd">DVD</option>
                          <option value="book">Book</option>
                          <option value="furniture">Furniture</option>
                      </select>
                      <div class="form-group-btn">
                        <input type="submit" 
                            value="Add" 
                            class="btn btn-primary" 
                            name="btn">
                    </div>
                    <div class="form-dynamic"></div>
                </form>
                <?php
        if(isset($_POST["btn"])) {
            include("connect.php");
            $sku=$_POST['sku'];
            $name=$_POST['name'];
            $price=$_POST['price'];
            $attr_dvd=$_POST['attribute-dvd'];
            $attr_book=$_POST['attribute-book'];
            $attr_furniture=$_POST['attribute-height'] . "x" .$_POST['attribute-width'] . "x" .$_POST['attribute-length'];
            
            

            $q="INSERT INTO assignmentdb (sku, name, price, attribute) VALUES ('$sku', '$name', '$price', '$attr_dvd')";
  
            mysqli_query($conn,$q);
            header("location:index.php");
            
        }
          
        // if(!mysqli_query($con,$q))
        // {
            // echo "Value Not Inserted";
        // }
        // else
        // {
            // echo "Value Inserted";
        // }
    ?>
            </div>
        </div>
    </div>



       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>