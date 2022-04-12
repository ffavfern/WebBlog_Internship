<?php $args = array('category_name' => 'mobile', 'posts_per_page' => 1);
                                $the_query = new WP_Query($args);
                                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <img><?php the_post_thumbnail('full'); ?>
                                        <div class="card-img-overlay p-0">
                                            <div class="card-body-text p-3 card-items-1">
                                                <h3 class="card-title"><a href="<?php the_permalink(); ?>" style="color: #fff;text-decoration:none;">realme 9 5G
                                                    ด้วยหน้าจอสมาร์ทโฟนกว้าง 6.5 นิ้ว</a></h3>
                                                <i class="bi bi-clock card-text"> 3 ชั่วโมง ago</i>
                                            </div>
                                        </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>