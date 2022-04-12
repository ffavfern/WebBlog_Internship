<?php

/*** Template Name: Custom: test */
get_header(); ?>

$keyword = $_GET['keyword'];
$cat = $_GET['cat'];

?>
<style>
    .list-posts {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .list-posts>* {
        width: calc(100% / 2 - 0.5rem);
    }
</style>

<form action="">
    <input type="search" name="keyword" value="<?php echo $keyword ? $keyword : ''; ?>" />
    <select name="cat">
        <option value="">Please select</option>
        <option value="hello">Hello</option>
    </select>
    <input type="submit" value="Search">
</form>

<form action="">
    <input type="hidden" name="cat" value="hello">
    <input type="submit" value="Hello">
</form>
<?php

$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

$args = array(
    's' => $keyword,
    'post_type' => 'post',
    'posts_per_page' => 3,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' =>  $cat
);

// the query
$the_query = new WP_Query($args);

if ($the_query->have_posts()) : ?>
    <div class="list-posts">
        <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="items">
                <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </div>
        <?php
        endwhile;

        $big = 999999999; // need an unlikely integer

        ?>
        <br />
        <div class="paginate">
            <?php
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $the_query->max_num_pages
            ));

            ?>
        </div>
        <?php

        wp_reset_postdata();


        ?>
    </div>
<?php
else :
    // $output .= "<p>" . _e('Sorry, no posts matched your criteria.') . "</p>";

    wp_redirect( 'https://example.com/some/page' );
    exit;
endif;