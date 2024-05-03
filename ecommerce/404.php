<?php 
include "class/function.php";
$obj1 = new blogProject();
include_once 'includes/head.php';?>

<body>


    <?php include_once 'includes/header.php';?>

    <!-- Page Content -->
        <div id="layoutError" style = "margin-top:40px;margin-bottom:30px">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="mb-4 img-error" src="admin/assets/img/error-404-monochrome.svg" />
                                    <p class="lead" style= "color:red">This requested URL was not found on this server.</p>
                                    <br>
                                    <a href="/ecommerce/">
                                        <i class="fas fa-arrow-left mr-1"></i>
                                        Return to Home Page
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
         
        <?php include_once 'includes/subscribe.php';?>
    <?php include_once 'includes/footer.php';?>

</body>

</html>

