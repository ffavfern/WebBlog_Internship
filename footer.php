</div>
<?php echo get_theme_mod( 'fe_code_footer',''); ?>
<!--#content-->
<div class="site-footer-space"></div>
<footer id="colophon" class="site-footer">
    <?php 
        // Use Page as footer.
        $the_query = new WP_Query( array( 'pagename' => 'footer' ) );
        if ($the_query->have_posts()) : 
            echo '<aside id="footpage" class="site-footpage"><div class="s-container">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();

                // If using GenerateBlocks Plugin
                if (function_exists('generateblocks_get_frontend_block_css')) {
                    $css = generateblocks_get_frontend_block_css();
                    $css.= 'p:empty{display:none}';
                    printf('<style id="generateblocks-css">%s</style>', wp_strip_all_tags( $css ) );
                }

                the_content();
            }
            wp_reset_postdata();
            echo '</div></aside>';
        else: 
    ?>
    <?php   
        $footer_default = [
            ['width' => 25,'display' => 'all', 'align' => 'default'],
            ['width' => 25,'display' => 'all', 'align' => 'default'],
            ['width' => 25,'display' => 'all', 'align' => 'default'],
            ['width' => 25,'display' => 'all', 'align' => 'default'],
        ];
        $footers = get_theme_mod( 'footer_columns', $footer_default );
        $footers_num = count($footers);    
        if(get_theme_mod( 'is_footer_column', false )) {
            $i = 0;
        echo '<div class="s-container">';
        echo '<div class="footer-row">';
        foreach( $footers as $footer ) {
            $i++;
            echo '<div class="footer-col col-' . $i . ' _' . $footer['display'] . ' text-' . $footer['align'] . '" style="width: ' . $footer['width'] . '%;">';
            if (is_active_sidebar('footer-' . $i )) {
                dynamic_sidebar( 'footer-' . $i );
            }
            else {
                echo '<aside class="widget widget_text">';
                echo '<h2 class="widget-title">' . __('Example Heading', 'plant') . '</h2>';
                echo '<div class="textwidget">';
                echo '<p>' . __('Change this text by adding widget to Appearance → Widgets and choose Footer Column', 'plant') . ' ' . $i . '.</p>';
                echo '<p>' . __('Or setup via Appearance → Cutomizer and choose Footer.', 'plant') . '</p>';
                echo '</div>';
                echo '</aside>';
            }
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        } 
    ?>
    <?php if(get_theme_mod( 'is_footer_bar', true )): ?>
    <div class="footer-bar">
        <div class="s-container">
            <?php echo get_theme_mod( 'footer_text', '©' .  date("Y") . ' ' . $_SERVER['HTTP_HOST'] . '. All rights reserved.' );?>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</footer>
</div>
<!--#page-->
<?php 
/* Chat Buttons */
if(get_theme_mod('buttons_enable', 0)) {
    get_template_part( 'template-parts/footer', 'chat' ); 
}
?>
<?php /* FOR S-MODAL */ ?>
<div id="s-bg" class="s-modal-bg"></div>
<?php wp_footer();?>
</body>

</html>