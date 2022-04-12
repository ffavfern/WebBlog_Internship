<?php
/**
 * Template Name: Sale Page
 */
get_header();
?>
<?php while (have_posts()): the_post();?>
<style>
<?php // CSS

if (get_field('img_width_m')) {
  echo '@media(max-width: 767px){';
  echo '.layout-m-list .pic{width:'. get_field('img_width_m') . '%;}';

  if (get_field('columns_m')) {
    echo '.layout-m-card {grid-template-columns: repeat('. get_field('columns_m') . ', 1fr)}';
  }

  echo '}';
}

if (get_field('img_width_d')) {
  echo '@media(min-width: 768px){';
  echo '.layout-d-list .pic{width:'. get_field('img_width_d') . '%;}';

  if (get_field('columns_d')) {
    echo '.layout-d-card {grid-template-columns: repeat('. get_field('columns_d') . ', 1fr)}';
  }

  echo '}';
}

if (get_field('shipping_options')=='none') {
  echo '#shipping{display:none}';
}

if (get_field('show_header')) {
  echo '#masthead,.site-header-space{display:block;}';
}

else {
  echo '#masthead,.site-header-space{display:none;}';
}

if ( !get_field('show_footer')) {
  echo '#colophon,.site-footer-space{display:none;}';

  if(get_theme_mod('buttons_enable', 0)) {
    echo '.site-content{padding-bottom:100px}';
  }
}

if (get_field('background_color')) {
  echo 'body.page-template-salepage{background-color:'. get_field('background_color') . '}';
}

if (get_field('accent_color')) {
  echo ':root{--sp-accent:'. get_field('accent_color') . '}';
}

if (get_field('rounded_logo')) {
  echo '.sp-logo img{border-radius:'. get_field('rounded_logo') . 'px}';
}



?>
</style>
<div class="page-salepage main-body">
  <div id="primary" class="content-area">
    <main id="main" class="site-main hide-title">
      <div class="sp-banner">
        <?php
          if (get_field('cover_m')) {
            echo wp_get_attachment_image(get_field('cover_m'), 'full', false, array('class' => 'mobile'));
          }
          if (get_field('cover_d')) {
            echo wp_get_attachment_image(get_field('cover_d'), 'full', false, array('class' => 'tablet'));
          }
        ?>
      </div>
      <?php
        if(get_field('logo')) {
          echo '<div class="sp-logo">';
          echo wp_get_attachment_image(get_field('logo'), 'full');
          echo '</div>';
        }
      ?>
      <div class="entry-content">
        <?php the_content(); ?>
        <ul class="sp-products layout-m-<?php the_field('layout_m'); ?> layout-d-<?php the_field('layout_d'); ?> -m<?php the_field('columns_m'); ?> -d<?php the_field('columns_d'); ?>">
          <?php
            $currency = '<small>' . get_field('currency') . '</small>';
            $currency_position = get_field('currency_position');
            if( have_rows('products') ) {    
                $i = 0;
                while( have_rows('products') ) {
                  the_row();
                  $i++;

                  $selected = get_sub_field('selected');
                  echo '<li class="sp-product" id="p-'. $i .'" data-selected="' . $selected . '">';
                  
                  echo '<div class="pic">';
                  echo '<b class="b-check"><i></i></b>';
                  $image = get_sub_field('image');
                  if($image) {
                      echo wp_get_attachment_image( $image, 'large');
                  }
                  echo '</div>';

                  echo '<div class="info">';
                  echo '<h3>' . get_sub_field('name') . '</h3>';
                  if (get_sub_field('description')) {
                    echo '<p>' . get_sub_field('description') . '</p>';
                  }
                  $price = '';
                  $full_price = get_sub_field('full_price');
                  $sale_price = get_sub_field('sale_price');
                  if ($sale_price) {
                    if ($full_price) {
                      echo '<span class="del">' . number_format($full_price) . '</span>';
                    }
                    $price = $sale_price;
                  } else {
                    if ($full_price) {
                      $price = $full_price;
                    }
                  }
                  if ($currency_position == 'left') {
                      $show_price = $currency . number_format($price);
                  } else {
                      $show_price = number_format($price) . $currency;
                  }
                  echo '<strong data-currency="'. $currency .'" data-currencyposition="'. $currency_position .'" data-price="' .$price . '" data-shipping="'.get_sub_field('shipping').'" class="sp-price">' .  $show_price . '</strong>';
                  echo '<div class="amount"><i class="minus">−</i><input class="num" value="0"/><i class="plus">+</i></div>';
                  echo '</div>';

                  echo '</li>';
                } 
                
            }
        ?>
        </ul>
        <div id="products-num" data-num="<?php echo $i;?>"></div>
        <?php if (get_field('show_summary')) : // Summary Table ?>
        <?php $table = get_field('table'); ?>
        <table id="sum" class="table">
          <thead>
            <tr>
              <th><?php echo $table['product']; ?></th>
              <th><?php echo $table['amount']; ?></th>
              <th><?php echo $table['total']; ?></th>
            </tr>
          </thead>
          <tbody></tbody>
          <tfoot>
            <tr id="shipping">
              <td id="shipping_text"><?php echo $table['shipping']; ?></td>
              <td></td>
              <td id="shipping_num"></td>
            </tr>
            <tr id="total">
              <td id="total_text"><?php echo $table['grand_total']; ?></td>
              <td></td>
              <td>
                <?php
                    $total_num = '<b id="total_num"></b>';
                    if ($currency_position == 'left') {
                      echo $currency . $total_num;
                    } else {
                      echo $total_num . $currency;
                    }
                  ?>
              </td>
            </tr>
          </tfoot>
        </table>
        <?php endif; // End Summary Table ?>
        <?php if (get_field('show_bank')) : // Bank Account ?>
        <?php 
            $bank = get_field('bank'); 
            echo '<div class="hide"><div id="bank" class="sp-bank">';
            echo '<div class="pic">';
            if ($bank['bank_logo'] && ($bank['bank_logo'] != 'other')) {
              echo '<img src="' . get_theme_file_uri('/img/b/') . $bank['bank_logo'] . '.png" width="60" height="60" alt="logo">';
            } elseif ($bank['bank_logo'] == 'other' && $bank['custom_logo']) {
              echo wp_get_attachment_image( $bank['custom_logo'], 'large' );
            }
            echo '</div>';
            echo '<div class="info">';
            echo $bank['bank_name'];
            echo '<div id="acc-copy">';
            echo __('Account No.', 'plant') . ' <input type="text" id="acc-no" value="' . $bank['account_no'] . '" readonly><i class="i-copy"></i>';
            echo '<span class="acc-copied" aria-hidden="true">คัดลอกเรียบร้อย!</span>';
            echo '</div>';
          ?>
        <?php
            echo __('Account Name', 'plant') . ' ' . $bank['account_name'];
            echo '</div>';
            echo '</div></div>';
          ?>
        <?php endif; // End Bank Account ?>
        <div class="sp-form">
          <?php
            if (get_field('use_forminator')) {
              echo do_shortcode('[forminator_form id="' . get_field('form') . '"]');
            } elseif (get_field('other_plugin_shortcode')) {
              echo do_shortcode(get_field('other_plugin_shortcode'));
            }
          ?>
        </div>
      </div>
      <footer class="entry-footer">
        <?php edit_post_link(sprintf('Edit',the_title( '<span class="screen-reader-text">"', '"</span>', false )),'<span class="edit-link">','</span>'); ?>
      </footer>
    </main>
  </div>
</div>
<?php
  $option = get_field('shipping_options');
  switch ( $option ) {
    case 'free':
      echo '<input type="hidden" value="free" class="shipping-option">';
      break;
    case 'flat':
      echo '<input type="hidden" value="flat" class="shipping-option">';
      echo '<input type="hidden" value="'.get_field('flat_cost').'" class="flat-cost">';
      break;
    case 'flat_free':
      echo '<input type="hidden" value="flat_free" class="shipping-option">';
      echo '<input type="hidden" value="'.get_field('flat_free_cost').'" class="flat-free-cost">';
      echo '<input type="hidden" value="'.get_field('flat_free_min').'" class="flat-free-min">';
      break;
    case 'cal':
      $cal_option = get_field('steps');
      $flat_cost = 0;
      $min_cost = 0;
      $start = 'false';
      $product = 'false';
      $free = 'false';
      foreach( $cal_option as $val ){
        if( $val == 'start' ){
          $flat_cost = get_field('flat_free_cost');
          $start = 'true';
        }
        if( $val == 'free' ){
          $min_cost = get_field('flat_free_min');
          $free = 'true';
        }
        if( $val == 'products' ){
          $product = 'true';
        }
      }
      echo '<input type="hidden" value="cal" class="shipping-option">';
      echo '<input type="hidden" value="'.$flat_cost.'" data-min="'.$min_cost.'" data-start="'.$start.'" data-product="'.$product.'" data-free="'.$free.'" class="cal-option">';
      break;
    default:
      echo '<input type="hidden" value="none" class="shipping-option">';
      break;
  }
?>
<?php 
  endwhile;
  get_footer();
?>