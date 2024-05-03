<?php 
include "class/function.php";
$obj1 = new blogProject();
$per_page                      = 6;
$pegi_count                    = 0;
$blog_post                     = array();
$blog_post_data                  = $obj1->display_all_products();
$blog_all_post_number          = mysqli_num_rows( $blog_post_data );
$blog_post_display_pegi_bumber = ceil( $blog_all_post_number / $per_page );

$start        = 0;
$current_page = 0;
$Next         = 2;
$Previous     = $blog_post_display_pegi_bumber;

if ( isset( $_GET['start'] ) ) {
    $start        = $_GET['start'];
    $current_page = $start;
    if ( $start == 1 ) {
        $Previous = $blog_post_display_pegi_bumber;

    } else {
        $Previous = $start - 1;

    }
    if ( $start == $blog_post_display_pegi_bumber ) {
        $Next = $blog_post_display_pegi_bumber + 1;
    } else {
        $Next = $start + 1;
    }

    $start--;
    $start = $start * $per_page;

}

include_once 'includes/head.php';?>
<style>
    .my-btn>a{
    color:black; 
    padding: 5px 10px;
    font-weight:bold;
 }
 .my-btn>a:hover{
     color:blue;
 }
</style>

<body>

    <?php include_once 'includes/header.php';?>


    <!-- Page Content -->
    <?php include_once 'contents/products_container.php';?>

    <?php include_once 'includes/subscribe.php';?>
    <?php include_once 'includes/footer.php';?>

</body>

</html>