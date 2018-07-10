<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<div class="page-banner-area about-banner">
    <div class="container">
        <div class="title-command-wrapper">
            <h1 class="title">Services</h1>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-active">SHIPS AGENCY SERVICES</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div id="content" class="ptop70 service-page">
    <div class="container">
        <div class="image-gallery">
            <!--            <div class="row">
                            <div class="col-xl-12">
                                <p class="text-center">Emperor Shipping Lines L.L.C Is One Of The Largest Shipping Agent In Uae And Professionally Managed Company With A Comprehensive Infrastructure And With An In-Depth Knowledge In Ships Agency, Clearing & Forwarding, Logistic And Transport Provider, Dedicated To Provide Quick, Quality And Cost Effective Solution To Its Client</p>
                            </div>
                        </div>-->
        </div>
        <br>
        <div class="great-plan">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="sec-title text-center">
                        <img width="40" height="18" src="images/icons/ship.png" class="img-fluid" alt="service">
                        <h5><?= $services->name ?></h5>
                    </div>
                </div>
            </div>
            <div class="bg-image">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <img src="<?= Yii::$app->homeUrl ?>images/service-detail4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?= $services->content ?>
<!--                        <p>Aliquam pulvinar pellentesque purus, nec condimentum nibh. Aenean dapibus iaculis odio id vestibulum. Nam at justo ante. Aliquam pulvinar pellentesque purus, nec condi nibh enean dapibus dapibus iaculis.</p>
                        <ul class="list">
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Husbandry Services to Vessels at any UAE Ports And Anchorage</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Off shore support, Anchorage Services, OPL and Launch co ordination</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Crew Visa Processing , Clearance and Transportation</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Crew and Passenger Repatriation Assistance</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Crew and Passenger Transportation</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Visit or Transit visa for Crew and Passengers</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Air ticket and Hotel accommodation</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Medical assistance and Evacuation : On shore and Off shore</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">STS attendance: Providing mooring master, fenders, hoses etc</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Diving Support(Underwater cleaning, repair, video survey etc)</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Search and Recovery of Lost anchor and Chain etc</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Organize Ship Repair and Dry Docking</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Salvaging of Distressed Vessels</span></li>
                            <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Rig Clearance</span></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>