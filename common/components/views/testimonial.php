<?php

use yii\helpers\Html;
?>
<?php if ($testimonials) { ?>
    <section id="testimonial">
        <div class="container">
            <div class="bg-image">
                <div class="sec-heading">
                    <h2>Testimonial</h2>
                    <span class="sub-head">customer say what</span>
                </div>
                <div class="row">
                    <div class=" col-md-12 mt-2">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000" data-carousel-options='{ "cellAlign": "left", "contain": true }'>
                            <div class="w-100 carousel-inner" role="listbox">
                                <?php
                                $i = 0;
                                foreach ($testimonials as $testimonial) {
                                    ?>
                                    <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>">
                                        <div class="bg"></div>
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="client-profile">
                                                    <img src="<?= Yii::$app->homeUrl . 'uploads/testimonials/' . $testimonial->id . '/image.' . $testimonial->image ?>" alt="" class="profile img-fluid">
                                                </div>
                                                <div class="testi-content">
                                                    <icon><img src="images/testimonial-msg-icon.png"/></icon>
                                                    <h3><?= $testimonial->name ?></h3>
                                                    <span><?= $testimonial->title ?></span>
                                                    <div class="discription">
                                                        <?= $testimonial->message ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }
                                ?>

                                <ol class="carousel-indicators">
                                    <?php
                                    $i = 0;
                                    foreach ($testimonials as $testimonial) {
                                        ?>
                                        <li data-target = "#carouselExampleControls" data-slide-to = "<?= $i ?>" class = "<?= $i == 0 ? 'active' : '' ?>"></li>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </ol> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
