
<?php
include ("config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Port Orange Boxing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
header img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

header{
    text-align: center;
    margin: 20px;
}

footer {
    background-color: #ff9900;
    color: black;
    width: 100%;
    position: absolute;
    bottom: 0;
    margin: 0px;
    padding: 0;
    text-align: center;
}
</style>

<body>
 <!-- Navigation Bar Start -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Port Orange Boxing & Fitness</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userlogin.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navigation Bar End -->

    <header>
        <h3>Contact Us Below</h3>
        <p>Phone: 123-456-7890</p>
        <p>Email:  contact@example.com</p>
        <p>Address: 123 Main St, Port Orange, FL 32123</p>
    </header>

    <main>
        <p></p>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

<footer>
    <h5>Website Created by David Popovici</h5>
    <h5>Created for Educational Purposes</h5>
</footer>

</html>
