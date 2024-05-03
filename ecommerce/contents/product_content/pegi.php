<div class="page-navigation">
     <div class="container">
         <div class="row">
             <!-- Featred Page Ends Here -->
 <?php if ( $blog_all_post_number > $per_page ) {?>
                <br>
             <div class="col-md-12">
                 <ul>
                 <?php
if ( $Previous == $blog_post_display_pegi_bumber ) {?>
                    <li><a><i class="fa fa-angle-double-left" style="opacity:0.5;"></i></a>
                        </li>
                        <?php } else {?>
                        <li class=""><a href="?start=<?php echo $Previous; ?>&&status=sub-menu&&id=<?php echo $sub_menu_id?>"><i
                                    class="fa fa-angle-double-left"></i></a>
                        </li>
                        <?php }?>

                        <?php

    $pegi_limit = 8; //How many pagi number display
    $pegi_count = 0;
    $count_pagi = 0;
    $get_number = $pegi_limit;
    for ( $i = 1; $i <= $blog_post_display_pegi_bumber; $i++ ) {
        if ( isset( $_GET['start'] ) ) {
            $get_number = $_GET['start'];
        }
        if (  ( $get_number > $pegi_limit ) ) {
            if ( $get_number > ( $blog_post_display_pegi_bumber - $pegi_limit ) ) {
                $get_number = $blog_post_display_pegi_bumber - ( $pegi_limit - 2 );
                if ( $count_pagi < ( $get_number - 3 ) ) { // In the end section display same item.
                    $count_pagi++;
                    continue;
                }

            } else {
                if ( $count_pagi < ( $get_number - ceil(  ( $pegi_limit + 1 ) / 2 ) ) ) { //Active Class position ceil(  ( $pegi_limit + 1 ) / 2 ) )
                    $count_pagi++;
                    continue;
                }
            }
        }
        $pegi_count++;

        if ( $pegi_count > ( $pegi_limit + 1 ) ) {
            break;
        }

        if ( $current_page == $i || $current_page == 0 ) {
            $current_page = -1;
            ?>


                        <li class="current-page"><a href="?start=<?php echo $i; ?>&&status=sub-menu&&id=<?php echo $sub_menu_id?>"><?php echo $i; ?></a></li>
                        <?php } else {?>
                        <li><a href="?start=<?php echo $i; ?>&&status=sub-menu&&id=<?php echo $sub_menu_id?>"><?php echo $i; ?></a></li>
                        <?php }

    }?>
                        <?php

    if ( $Next == ( $blog_post_display_pegi_bumber + 1 ) ) {?>
                        <li><a>
                                <i class="fa fa-angle-double-right" style="opacity:0.5;"></i></a></li>
                        <?php } else {?>
                        <li class=""><a href="?start=<?php echo $Next; ?>&&status=sub-menu&&id=<?php echo $sub_menu_id?>">
                                <i class="fa fa-angle-double-right"></i></a></li>
                        <?php }?>
                 </ul>
             </div>
             <?php }?>
         </div>
     </div>
 </div>
 