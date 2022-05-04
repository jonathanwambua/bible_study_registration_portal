<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php //echo $page_title ?></title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    
    </head>
    <body>
         Container -->
        <!-- <div class="container"> -->
            <?php
                //Show page header
                // echo "
                //     <div class='page-header'>   
                //         <h1>{$page_title}</h1>
                //     </div>
                // ";
            ?>
    <!-- </body> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./libraries/css/style.css">
    <title><?php echo $page_title ?></title>
</head>
<body>

    <!-- navbar -->
 <nav class="navbar navbar-expand-md bg-primary navbar-dark">
     <div class="container">
        <a href="index.html" class="navbar-brand">CHUKA UNI CHRISTIAN UNION</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav text-white ">
            <li class="nav-item ">
                                <a href="register.php" class="nav-link">MEMBER REGISTRATION</a>
            </li>
        
       
            <li class="nav-item">
                <a href="index.php" class="nav-link">BIBLE STUDY REGISTRATION</a>
            </li>
        
        
            <li class="nav-item">
                <a href="index.php" class="nav-link">OUR LIBRARY</a>
            </li>

            <li class="nav-item">
                <a href="index.php" class="nav-link">PROFILE </a>
            </li>
            <li class="nav-item">
                <a href="index.php" class="nav-link">LOG IN </a>
            </li>
        </ul>
    </div>

    </div>
    
 </nav>
<!-- BODY -->

<section class=" text-info p-5 grey-color">
    <div class="container text-center">
        <div class="d-flex justify-content-center aligns-items-center ">
            <h3 class="mb-3 mb-md-0 text-center"><?php echo $page_heading; ?></h3>            
        </div>
    </div>
</section>

<!-- </body> -->