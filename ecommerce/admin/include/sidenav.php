<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="dashboard.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
             
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseposts"
                    aria-expanded="false" aria-controls="collapseposts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseposts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="add_product.php">Add Product</a>
                        <a class="nav-link" href="manage_product.php">Manage Product</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseimg"
                    aria-expanded="false" aria-controls="collapseimg">
                    <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                    Product Images
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseimg" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="add_product_img.php">Add Image</a>
                        <a class="nav-link" href="product_all_img.php">Product Images</a>
                    </nav>
                </div>

                <a class="nav-link" href="manage_message.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-envelope"></i></div>
                    Messages
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php  echo $_SESSION['Name'];?>
        </div>
    </nav>
</div>