<?php
include ("config.php");

if(isset($_REQUEST["Submit"])) {

    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $experience = $_REQUEST["experience"];

    $ins = "INSERT INTO coach(id, name, date, experience) VALUES('$id','$name','$date','$experience')";
    $query = mysqli_query(mysql: $connection,query: $ins);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
  body h3 {
  text-align: center;
  margin: 10px;
}
</style>

<body>
    
<!-- nav bar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="billing.php">Gym Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="userlogin.php">Login<span class="sr-only">(current)</span></a>      </li>
      <li class="nav-item">
        <a class="nav-link" href="billing.php">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coach.php">Coaches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="member.php">Member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="receptionist.php">Receptionist</a>
      </li>
    </ul>
  </div>
</nav>
<!-- nav bar end -->

<h3>Coaches</h3>

<!-- Form Start -->
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Member ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of Birth</label>
    <input type="text" name="date" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Experience</label>
    <input type="text" name="experience"class="form-control" id="inputAddress2" placeholder="">
  </div>
  <button type="Submit"  name= "Submit" class="btn btn-primary">Save</button>
</form>
<!-- Form End -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>