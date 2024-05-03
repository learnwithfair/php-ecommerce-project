<?php 

$menu_item = $obj1->display_menu_item();?>

<!-- Pre Header -->
<div id="pre-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="logo_position">Suspendisse laoreet magna vel diam lobortis imperdiet</span>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">

        <div class="logo_position">
            <a class="navbar-brand" href="./">
                <p id="blink">Learn with Fair</p>
                <script type="text/javascript">
                var blink = document.getElementById('blink');
                setInterval(function() {
                    blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
                }, 1000);
                </script>

                <!-- <h2 id="animated_text_color" data-text="'Learn With Fair' &nbsp;" class="animated_heading">'Learn With
                Fair' &nbsp;</h2> -->
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-top:5px">

            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Tutorial</a>
                </li> -->



                <!-- ################## -->

                <?php
// Menu display from category as reverse within 5 items .

$uri = $_SERVER['PHP_SELF'];

// Outputs: URI
while ( $item = mysqli_fetch_assoc( $menu_item ) ) {
    if ( $uri == "/ecommerce/" ) {
        $uri = $uri . "index.php";
    }
    if ( $uri == "/ecommerce/" . $item['menu_link'] ) {?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $item['menu_link']; ?>"><?php echo $item['menu_title']; ?>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <?php
} else {?>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="<?php echo $item['menu_link']; ?>"><?php echo $item['menu_title']; ?></a>
                    </li>
                    <?php
}

}?>
            </ul>
        </div>
    </div>
</nav>