<?php
include "class/function.php";
$obj = new blogProject();
session_start();
$id = $_SESSION['ID'];
if ( $id == null ) {
    header( "location: index.php" );
}
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == 'logout' ) {
        $obj->logout_info();
    }
}

include_once "include/head.php";?>


<body class="sb-nav-fixed">
    <?php include_once "include/topnav.php";?>
    <div id="layoutSidenav">
        <?php include_once "include/sidenav.php";?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php
if ( !isset( $view ) ) {
    include 'view/dashboard_view.php';
} else {
    if ( $view == "dashboard" ) {
        include 'view/dashboard_view.php';
    } else if ( $view == 'add_product' ) {
        include 'view/add_product_view.php';
    } else if ( $view == 'manage_product' ) {
        include 'view/manage_product_view.php';
    } else if ( $view == 'add_product_img' ) {
        include 'view/add_product_img_view.php';
    } else if ( $view == 'manage_product_img' ) {
        include 'view/manage_product_img_view.php';
    } else if ( $view == 'product_all_img' ) {
        include 'view/product_all_img_view.php';
    } else if ( $view == 'product_img_change' ) {
        include 'view/product_img_change_view.php';
    } else if ( $view == 'product_edit' ) {
        include 'view/product_edit_view.php';
    }  else if ( $view == 'manage_message' ) {
        include 'view/manage_message_view.php';
    }
}

?>
                </div>
            </main>
            <?php include_once "include/footer.php";?>
        </div>
    </div>
    <?php include_once "include/script.php";?>
</body>

</html>