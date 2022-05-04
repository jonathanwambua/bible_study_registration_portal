<?php
    $page_title ="Portal";
    $page_heading = "Welcome to Chuka Uni Christian Union Portal!";
    include_once "header_login.php";
?>
<!-- Use the session variable to output the information here -->
<section class="p-3 d-flex aligns-items-center justify-content-center" >
    <h6>Hello, <?php echo $_SESSION['user_name']; ?>. You are now logged in. </h6>
</section>
    

    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-sm-12 mb-2">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                            <i class="bi bi-book"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Register for Bible Study
                            </h3>
                            <p class="card-text">
                                Register for this semester's Bible Study
                            </p>
                            <a href="views/register_bs.php" class="btn btn-primary">Register for Bible study</a>
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                            <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Visit Library
                            </h3>
                            <p class="card-text">
                                Explore books available in our Library is coming soon!
                            </p>
                            <a href="#" class="btn btn-primary disabled">Explore Library</a>                       
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </section>
    <section class="p-3 d-flex aligns-items-center justify-content-center" >
        <a href="./index.php?userlogout"><button class = "btn btn-primary mb-2">Logout</button></a>
    </section>

<?php
include_once "footer.php";
?>
