<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <?php $page =basename($_SERVER['PHP_SELF']);?>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/Farmer">কৃষকের হাসি</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav w-100 me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="<?php if($page=='welcome.php'): echo 'nav-link active'; else: echo 'nav-link';endif;?>" aria-current="page" href="welcome.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="<?php if($page=='dashboard.php'): echo 'nav-link active'; else: echo 'nav-link';endif;?>" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
            <a class="<?php if($page=='contact.php'): echo 'nav-link active'; else: echo 'nav-link';endif;?>" href="contact.php">Order & ContactUs</a>
            </li>
            <li class="nav-item ml-auto" >
            <form class="container-fluid justify-content-start ">
            <button class="btn btn-outline-success me-2" type="button" onclick = "window.location.href='logout.php';">log out</button>
            </li>
          </ul>
  </form>
  
            
            
       
        </div>
    </div>
    </nav>
    
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>