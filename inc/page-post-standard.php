                                    <section class="standard" style="<?php echo $background ?>; color:<?php echo $color; ?>">
                                        <h2 class="lighter"><span><?php the_title(); ?></span></h2>
                                        <div class="content container">
                                            <?php the_content();
                                            echo $button; ?>
                                            <div class="row">


                                                <?php
                                                $link1 = get_field('post_link1');
                                                $link2 = get_field('post_link2');
                                                $link1 && $link2 ? $link_col = "col-lg-6" : $link_col = "col-lg-12";
                                                if ($link1) :
                                                ?>

                                                    <div class=" <?php echo $link_col; ?> col-md-12">
                                                        <div class="card">
                                                            <a href="<?php get_post_permalink($link1); ?>">
                                                                <img src="<?php
                                                                            if (get_the_post_thumbnail_url($link1)) {
                                                                                echo get_the_post_thumbnail_url($link1);
                                                                            } else {
                                                                                echo "http://medproducts.goopter.com/wp-content/uploads/2021/03/images-square-outlined-interface-button-symbol.png";
                                                                            };
                                                                            ?>" class="card-img-top" alt="<?php echo $link1->post_title; ?>">
                                                                <div class="card-body">
                                                                    <h5 class="card-title"><?php echo $link1->post_title; ?></h5>
                                                                    <P><?php echo get_the_date('Y-m-d', $link1); ?>/<?php echo get_the_author($link1); ?></P>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endif;
                                                if ($link2) : ?>
                                                    <div class=" <?php echo $link_col; ?> col-md-12">
                                                        <div class="card">
                                                            <a href="<?php get_post_permalink($link2); ?>">
                                                                <img src="<?php
                                                                            if (get_the_post_thumbnail_url($link2)) {
                                                                                echo get_the_post_thumbnail_url($link2);
                                                                            } else {
                                                                                echo "http://medproducts.goopter.com/wp-content/uploads/2021/03/images-square-outlined-interface-button-symbol.png";
                                                                            };

                                                                            ?>" class="card-img-top" alt="<?php echo $link2->post_title; ?>">
                                                                <div class="card-body">
                                                                    <h5 class="card-title"><?php echo $link2->post_title; ?></h5>
                                                                    <P><?php echo get_the_date('Y-m-d', $link2); ?>/<?php echo get_the_author($link2); ?></P>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </section>
                                    <section>
                                   