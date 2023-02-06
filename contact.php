<?php
include("connection.php");
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Blog </title>
</head>

<body>
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </div>




    <div class="container my-4" id="Contact">
        <form class="row g-3 " action="#" method="POST">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label  btn btn-warning"> Email </label>
                <input type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label btn btn-warning">Phone Number</label>
                <input type="text" name="phnum" class="form-control" id="inputPhoneNumber">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label btn btn-warning">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label btn btn-warning">Address 2</label>
                <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label btn btn-warning">City</label>
                <input type="text" name="city" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label btn btn-warning">State</label>
                <select id="inputState" class="form-select" name="state">
                    <option selected>Maharashtra</option>
                    <option>Andhra Pradesh(Amaravati) </option>
                    <option>Assam(Dispur)</option>
                    <option>Goa(Panaji)</option>
                    <option>Gujarat(Gandhinagar</option>
                    <option> Bihar(Patna)</option>

                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label btn btn-warning">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip"><br><br>
                <!-- <input type="submit" name="" class="form-control" id="inputsubmit"><br><br>-->
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $email    = $_POST['email'];
    $phnum    = $_POST['phnum'];
    $address  = $_POST['address'];
    $address2 = $_POST['address2'];
    $city     = $_POST['city'];
    $state    = $_POST['state'];
    $zip      = $_POST['zip'];

    $query = "INSERT INTO form (email,phone,address,address_2,city,
         state,zip) VALUES('$email','$phnum','$address','$address2','$city','$state','$zip')";

    $data =  mysqli_query($conn, $query);

    if ($data) {
        echo "Data submited into Database ";
    } else {
        echo "Failed to submit data";
    }
}
?>