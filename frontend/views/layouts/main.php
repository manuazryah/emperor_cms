<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\models\Services;
use common\models\FooterContent;

$services = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= Yii::$app->homeUrl ?>images/fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= Yii::$app->homeUrl ?>images/fav/apple-icon-120x120.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?= Yii::$app->homeUrl ?>images/fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= Yii::$app->homeUrl ?>images/fav/favicon-32x32.png">
        <title>Emperor Shipping Lines LLC</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <!--<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 fleft">-->
                    <ul class="left">
                        <li>Your Ships Agency Partner  in UAE port</li>
                    </ul>
                    <!--</div>-->
                    <!--<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">-->
                    <ul class="fright m0 center">
                        <li class="header-contact">24X7 support : <a href="tel:+971 55 856 7350" >+971 55 856 7350</a>, <a href="tel:+971 55 856 7350" >971 55 856 7360</a></li>
                    </ul>
                    <ul class="fright m0 right">
                        <li class="header-mail"><a href="mailto:emperor@emperorlines.com">Email : emperor@emperorlines.com</a></li>
                    </ul>
                    <!--</div>-->
                </div>
            </div>
        </div>
        <div class="header" id="myHeader">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"><img src="<?= Yii::$app->homeUrl ?>images/logo.png" class="img-responsive" alt="logo"/></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto float-right">
                                <li class="nav-item <?= $action == 'site/index' ? 'active' : '' ?>">
                                    <?= Html::a('Home<span class="sr-only">(current)</span>', ['site/index'], ['class' => 'nav-link']) ?>
                                </li>
                                <li class="nav-item <?= $action == 'site/about' ? 'active' : '' ?>">
                                    <?= Html::a('ABOUT', ['/about-us'], ['class' => 'nav-link']) ?>
                                </li>
                                <li class="nav-item <?= $action == 'site/services' ? 'active' : '' ?> dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">SERVICE</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php
                                        if ($services) {
                                            foreach ($services as $service) {
                                                ?>
                                                <?= Html::a($service->name, ['/services/' . $service->canonical_name], ['class' => 'dropdown-item']); ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <!--                                        <a class="dropdown-item" href="ships-agency-services.php">SHIP SUPPLY SERVICES AT PORT AND ANCHORAGE</a>
                                                                                <a class="dropdown-item" href="ships-agency-services.php">CLEARING AND FREIGHT FORWARDING</a>
                                                                                <a class="dropdown-item" href="ships-agency-services.php">WAREHOUSING ,LOGISTIC AND TRANSPORTATION</a>
                                                                                <a class="dropdown-item" href="ships-agency-services.php">VESSEL AND CARGO OPERATIONS</a>
                                                                                <a class="dropdown-item" href="ships-agency-services.php">PROJECT AND GENERAL CARGO HANDLING</a>
                                                                                <a class="dropdown-item" href="ships-agency-services.php">TANKER OPERATIONS</a>-->
                                    </div>
                                </li>
                                <!--<li class="nav-item"><a class="nav-link" href="#">port position</a></li>-->
                                <li class="nav-item <?= $action == 'site/port-position' ? 'active' : '' ?>"> 
                                    <?= Html::a('PORT POSITION', ['port-position'], ['class' => 'nav-link']) ?>
                                </li>
                                <li class="nav-item <?= $action == 'site/ports-we-serve' ? 'active' : '' ?>">
                                    <?= Html::a('PORTS WE SERVE', ['ports-we-serve'], ['class' => 'nav-link']) ?>
                                </li>
                                <li class="nav-item <?= $action == 'site/gallery' ? 'active' : '' ?>">
                                    <?= Html::a('GALLERY', ['gallery'], ['class' => 'nav-link']) ?>
                                </li>
                                <li class="nav-item <?= $action == 'site/download' ? 'active' : '' ?>">
                                    <?= Html::a('useful datas', ['download'], ['class' => 'nav-link']) ?>
                                </li>
                                <li class="nav-item <?= $action == 'site/contact' ? 'active' : '' ?>">
                                    <?= Html::a('CONTACT', ['contact'], ['class' => 'nav-link']) ?>
                                </li>
                                <li class="nav-item get-quote">
                                    <?= Html::a('GET A QUOTE', ['site/about'], ['class' => 'nav-link', 'data-toggle' => 'modal', 'data-target' => '#get-quote-modal']) ?>
                                </li>
                                <!--                                <li class="nav-item dropdown">
                                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Dropdown
                                                                    </a>
                                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </li>-->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <?= $content ?>
        <!--/******************************/-->
        <footer>
            <div class="footer-top">
                <div class="overlay">
                    <div class="container">
                        <?php
                        $address_contact = \common\models\ContactAddress::find()->where(['status' => 1])->all();
                        if ($address_contact) {
                            ?>
                            <div class="row">
                                <?php foreach ($address_contact as $address) { ?>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="contact-info">
                                            <h5><?= $address->title ?></h5>
                                            <ul>
                                                <ul>
                                        <li><i class="fas fa-map-marker-alt"></i><?= $address->address ?></li>
                                        <li><i class=""></i><?= $address->postoffice ?></li>
                                        <li><i class="fas fa-phone"></i><?= $address->mobile ?></li>
                                        <li><i class="fas fa-envelope"></i><?= $address->email ?></li>
                                    </ul>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!--                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                                    <div class="contact-info">
                                                                        <h5>SATELLITE OFFICE</h5>
                                                                        <ul>
                                                                            <li><i class="fas fa-map-marker-alt"></i>Thomas Nolan Kaszas 5322 Otter Ln Middleberge</li>
                                                                            <li><i class="fas fa-phone"></i>(+1) 910-740-6026 / (+1) 910-742-2717</li>
                                                                            <li><i class="fas fa-envelope"></i>info@emperor.ae</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                                    <div class="contact-info">
                                                                        <h5>EMPEROR SHIPPING AGENCY</h5>
                                                                        <ul>
                                                                            <li><i class="fas fa-map-marker-alt"></i>Thomas Nolan Kaszas 5322 Otter Ln Middleberge</li>
                                                                            <li><i class="fas fa-phone"></i>(+1) 910-740-6026 / (+1) 910-742-2717</li>
                                                                            <li><i class="fas fa-envelope"></i>info@emperor.ae</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>-->
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="box">
                                <div class="foot-logo">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="<?= Yii::$app->homeUrl ?>images/logo.png" alt="logo" class="img-fluid img-full"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="foot-about">
                                    <?php $footer = FooterContent::findOne(1); ?>
                                    <p><?= $footer->content; ?></p>
<!--                                    <ul>
                                        <li><b>Working Hours:</b></li>
                                        <li><? $footer->week_days ?>: .............<? $footer->work_time1 ?></li>
                                        <li><? $footer->off_days ?>:......... <? $footer->work_time2 ?></li>
                                    </ul>-->
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-8 col-md-6 col-sm-12 col-12">
                            <div class="box">
                                <div class="foot-title">
                                    <h5>useful links</h5>
                                </div>
                                <div class="categories">
                                    <ul>
                                        <li>
                                             <?= Html::a('Career', ['/site/career']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('Home<span class="sr-only">(current)</span>', ['site/index']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('ABOUT', ['/about-us']) ?>
                                        </li>
                                        <li> 
                                            <?= Html::a('PORT POSITION', ['port-position']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('PORTS WE SERVE', ['ports-we-serve']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('GALLERY', ['gallery']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('USEFUL DATAS', ['download']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('CONTACT', ['contact']) ?>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="box">
                                <div class="foot-title">
                                    <h5>GET MESSAGE</h5>
                                </div>
                                <div class="newsletter">
                                    <p>Don’t miss to subscribe to our news feeds, kindly fill the form below</p>
                                    <form class="newsletter" id="subscribe-mail-2" method="post">
                                        <input type="email" placeholder="Email" required="" id="subscribe_email-2" class="form-control" required>
                                            <!--<input type="text" class="form-control zozo-mc-email" id="subscribe_email-2" placeholder="Email Address" name="" required>-->
                                        <span class="subscribe_email-2_error" style="color:red"></span>
                                        <span class="subscribe_email-2_msg" style="color:green"></span>
                                        <button type="submit" name="subscribe" class="submit">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <div class="footer-bottom">
            <div class="container">
                <!-- left area -->
                <div class="item-left">
                    <div class="item">
                        <p>© Designed by <a href="">AZRYAH.</a></p>
                    </div>
                </div>
                <div class="item-right">
                    <div class="item">
                        <div class="social">
                            <a class="link share-facebook" target="_blank" href="http://facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a class="link share-twitter" target="_blank" href="http://twitter.com"><i class="icons fab fa-twitter"></i></a>
                            <a class="link share-pinterest" target="_blank" href="https://www.pinterest.com/"><i class="icons fab fa-pinterest-p"></i></a>
                            <a class="link share-google" target="_blank" href="http://plus.google.com"><i class="icons fab fa-google"></i></a>
                            <a class="link share-linkedin" target="_blank" href="https://www.linkedin.com/"><i class="icons fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
        <?php $this->endBody() ?>
    </body>

</html>
<?php $this->endPage() ?>
<script>
    window.onscroll = function () {
        myFunction();
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
    $(document).on("click", '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

</script>
<script>
    $(document).ready(function () {
        $(".mobile").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            var mobile = $(this).val();
//        console.log(mobile);
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            } else if (mobile.length === 12) {
                return false;
            }
        });
    });
</script>
<div class="modal fade" id="get-quote-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Get Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="w0" action="<?= Yii::$app->homeUrl ?>contact-form" name="contact_form" method="get">
                    <input type="hidden" name="_csrf-frontend" value="TwQTjLEl3H6iBV2IzWFe_JFpuYH69ohZUTj5rORYG1UbVXy50kSYC9dnaeO4BhfOqCPM1cuBsR4gabvZjRF_ZQ==">                    
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group field-contactform-name required">
                                <input type="text" id="contactform-name" class="" name="name" maxlength="100" placeholder="Type your name" aria-required="true">
                                <div class="help-block"></div>
                            </div>                        
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group field-contactform-email required">
                                <input type="email" id="contactform-email" class="" name="email" placeholder="Type your email" required="" aria-required="true">
                                <div class="help-block"></div>
                            </div>                           
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group field-contactform-phone required">

                                <input type="text" id="contactform-phone" class="mobile" name="phone" placeholder="Type your phone" required="" aria-required="true">

                                <div class="help-block"></div>
                            </div>                        
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group field-contactform-subject required">

                                <input type="text" id="contactform-subject" class="" name="subject" placeholder="Type your Subject" required="" aria-required="true">

                                <div class="help-block"></div>
                            </div>                         
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group field-contactform-message required">
                                <textarea id="contactform-message" class="text_message" name="message" rows="10" cols="40" placeholder="Type your Message" required="" aria-required="true"></textarea>
                                <div class="help-block">
                                </div>
                            </div>  
                        </div>
                        <div class="modal-footer">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <button type="submit" class="submit-btn">submit message</button>           
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#subscribe-mail-2').on('submit', function (e) {
            e.preventDefault();
            $('.subscribe_email-2_error').html('');
            $('.subscribe_email-2_msg').html('');
            var email = $('#subscribe_email-2').val();
            $.ajax({
                type: 'POST',
//                cache: false,
//                async: false,
                data: {email: email},
                url: '<?= Yii::$app->homeUrl; ?>subscribe-mail',
                success: function (data) {
                    var $data = JSON.parse(data);
                    if ($data.msg === 'success') {
                        $('#subscribe_email-2').val('');
                        $('.subscribe_email-2_msg').html(email + ' Successfully subscribed');
                    } else {
                        $('.subscribe_email-2_error').html(email + ' already subscribed');
                    }
                }
            });
        });
    });
</script>
<script>
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='contact_form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      phone: "required",
      subject: "required",
      message: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
    },
    // Specify validation error messages
    messages: {
      name: "Please enter your Name",
      phone: "Phone Number is required",
      subject: "Subject is required",
      message: "Message is required",
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
