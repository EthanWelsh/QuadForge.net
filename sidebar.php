<aside class="sidebar third inner">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

        <?php get_search_form(); ?>

        <div class="recent-posts full">
            <h4>Recent News</h4>
            <ul>
               <?php
                    $args = array( 'numberposts' => '5' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                    }
                ?>
            </ul>
        </div>
        <div class="archives full">
           <h4>Archives</h4>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>
	
	<?php endif; ?>

</aside>