<?php /* Template Name: Admin Notification */

 get_header() ?>
<style>
    #primary{
        height: calc(100vh - 200px);
    }
</style>
<div id="primary">             
    <div id="content" role="main">
                <?php
                $mypost = array( 'post_type' => 'email_notification','author'=>$current_user->ID);
                $loop = new WP_Query( $mypost );
                //   print_r($loop);
               
                while ( $loop->have_posts() ) : $loop->the_post();  
                       $owner= esc_html( get_post_meta( get_the_ID(), 'notification_ownerid', true ) );
                                    // echo $owner;
                                 //echo $current_user->ID;
                        $count=0;
                        if( $owner == $current_user->ID) {
                            $count++;
                        ?>
                        
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                        
                                <!-- Display Title and Author Name -->
                                <strong>Product Name: </strong><?php the_title(); ?><br />                      
                                <strong>Name: </strong>
                                <?php echo esc_html( get_post_meta( get_the_ID(), 'notification_name', true ) ); ?>
                                <br /> 
                                <strong>Email: </strong>
                                <?php echo esc_html( get_post_meta( get_the_ID(), 'notification_email', true ) ); ?>
                                <br /> 
                                <strong>Company: </strong>
                                <?php echo esc_html( get_post_meta( get_the_ID(), 'notification_company', true ) ); ?>
                                <br /> 
                                <strong>Phone Number: </strong>
                                <?php echo esc_html( get_post_meta( get_the_ID(), 'notification_phone', true ) ); ?>
                                <br /> <br /> 
                            
                            <!-- Display movie review contents -->
                            <!-- <div class="entry-content"><?php the_content(); ?></div> -->
                        </article>
                         
                     <?php }  endwhile; echo $count;   ?>
            </div>     
</div>

<?php    get_footer(); ?>