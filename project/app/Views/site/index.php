<?php

use CodeIgniter\I18n\Time;

?>
<!-- app/Views/site/masterpage.php -->
<?= $this->extend('site/masterpage') ?>

<!-- START CONTENT -->
<?= $this->section('content') ?>

<!-- Start Slider Area -->
<div id="slider" class="slider home-1 overflow-hidden">
    <div class="slider-wrap slider-activation slider-nav-style-1">
        <!-- Start Single slide -->
        <?php foreach ($banner as $bannerItem):?>
        <div class="single-slide slide-one slider-bg-1 d-flex align-items-end" data-overlay="5">
            <div class="container">
                <div class="row gy-5 justify-content-center">
                    <div class="col-lg-8">
                        <div class="slider-content">
                            <div class="slider-content-inner">
                                <h1><?= $bannerItem->titulo?></h1>
                                <p><?= $bannerItem->texto?></p>
                                <div class="slider-buttons">
                                    <a href="<?= $bannerItem->link?>" class="ml-btn btn-light btn-large">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="slider-feature-img">
                            <img src="<?= $bannerItem->imagem?>" alt="slider img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <!-- End Single slide -->
    </div>
</div>
<!-- End Slider Area -->

<!-- Start Popular Cources Area -->
<section id="ml-popular-cources" class="popular-cources-area bg-white ptb-100 smptb-60 xsptb-40">
    <div class="container">

        <!--Start Section Title -->
        <div class="section-title text-center xsmt-30">
            <h2 class="title-line">Popular <span class="text-theme">Courses</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt let dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        </div>
        <!--End Section Title -->

        <div class="single-popular-courses-wrap mt-60 smmt-30 xsmt-30">
            <div class="row">
                <!--Start Single Popular courses-->
                <div class="col-lg-4 col-md-6">
                    <div class="ml-single-popular-courses">
                        <div class="ml-popular-crs-thumd">
                            <img src="<?= base_url('assets/site/picture/1.jpg')?>" alt="popular courses">
                        </div>
                        <div class="ml-popular-crs-details">
                            <div class="popular-courses-info">
                                <h2 class="popular-crs-tit">
                                    <a href="courses-details.html"><span class="popular-courses">01.</span> Diabetes and Endocrinology</a>
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing eli sedzs do eiusmod tempor incididunt ut labore et dolor magna alu Ut enim ad minim. </p>
                            </div>
                            <div class="popular-courses-meta">
                                <ul class="popular-crs-menu">
                                    <li><a href="#"><i class="zmdi zmdi-eye"></i>55</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-comment-alt-text"></i>55</a></li>
                                    <li class="meta-btn">
                                        <a href="#" class="pp-crs-btn">Read More</a>
                                    </li>
                                    <li><span>$500</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Popular courses-->
                <!--Start Single Popular courses-->
                <div class="col-lg-4 col-md-6">
                    <div class="ml-single-popular-courses">
                        <div class="ml-popular-crs-thumd">
                            <img src="<?= base_url('assets/site/picture/2.jpg')?>" alt="popular courses">
                        </div>
                        <div class="ml-popular-crs-details">
                            <div class="popular-courses-info">
                                <h2 class="popular-crs-tit">
                                    <a href="courses-details.html"><span class="popular-courses">02.</span>Laryngological Clinic</a>
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing eli sedzs do eiusmod tempor incididunt ut labore et dolor magna alu Ut enim ad minim. </p>
                            </div>
                            <div class="popular-courses-meta">
                                <ul class="popular-crs-menu">
                                    <li><a href="#"><i class="zmdi zmdi-eye"></i>50</a></li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-comment-alt-text"></i>24</a>
                                    </li>
                                    <li class="meta-btn">
                                        <a href="#" class="pp-crs-btn">Read More</a>
                                    </li>
                                    <li><span>$500</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Popular courses-->
                <!--Start Single Popular courses-->
                <div class="col-lg-4 col-md-6">
                    <div class="ml-single-popular-courses">
                        <div class="ml-popular-crs-thumd">
                            <img src="<?= base_url('assets/site/picture/3.jpg')?>" alt="popular courses">
                        </div>
                        <div class="ml-popular-crs-details">
                            <div class="popular-courses-info">
                                <h2 class="popular-crs-tit">
                                    <a href="courses-details.html"><span class="popular-courses">03.</span>Ophthalmology Clinic</a>
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing eli sedzs do eiusmod tempor incididunt ut labore et dolor magna alu Ut enim ad minim. </p>
                            </div>
                            <div class="popular-courses-meta">
                                <ul class="popular-crs-menu">
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-eye"></i>80</a>
                                    </li>
                                    <li><a href="#"><i class="zmdi zmdi-comment-alt-text"></i>20</a></li>
                                    <li class="meta-btn"><a href="#" class="pp-crs-btn">Read More</a></li>
                                    <li><span>Free</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Popular courses-->
            </div>
            <div class="all-view mt-60">
                <a href="#" class="ml-btn transparent-btn">View All </a>
            </div>
        </div>
    </div>
</section>
<!-- End Popular Cources Area -->

<!-- Start Medical Service Area -->
<section id="ml-service-area" class="bg-gray ptb-100 smptb-60 xsptb-40">
    <div class="container">

        <!--Start Section Title -->
        <div class="section-title text-center">
            <h2 class="title-line">Our Medical <span class="text-theme">Services</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt let dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        </div>
        <!--End Section Title -->

        <!--Start Single Service wrapper-->
        <div class="single-service-wrap mt-60 smmt-30 xsmt-30 clearfix">
            <div class="row gy-5">

                <!--start Single Service -->
                <div class="col-lg-3">
                    <div class="single-service">
                        <div class="all-medical-service">
                            <h2 class="department-title">Departments</h2>
                            <!-- Nav tabs -->
                            <ul class="medical-service-category" role="tablist">
                                <li><a class="active" href="#nuclear" data-bs-toggle="tab"><span>Nuclear magnetic</span></a></li>
                                <li><a href="#surgery" data-bs-toggle="tab"><span>Outpatient Surgery</span></a></li>
                                <li><a href="#clinicy" data-bs-toggle="tab"><span>Cardiac Clinicy</span></a></li>
                                <li><a href="#logical" data-bs-toggle="tab"><span>Gynaecological</span> </a></li>
                                <li><a href="#pediatric" data-bs-toggle="tab"><span>Pediatric Clinic</span></a></li>
                                <li><a href="#pregnancy" data-bs-toggle="tab"><span>Pregnancy</span></a></li>
                            </ul>
                            <div class="all-view text-center pb-40">
                                <a href="#" class="ml-btn light-btn-2">All category</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service -->

                <div class="col-lg-9">
                    <div class="tab-content">
                        <!-- Start Single Tab content -->
                        <div role="tabpanel" class="tab-pane fade in active show" id="nuclear">
                            <div class="row gy-4">
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/13.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Diabetes and Endocrinology</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/21.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Outpatient Surgery</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/31.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Laryngological Clinic</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                            </div>
                        </div>
                        <!-- End Single Tab content -->
                        <!-- Start Single Tab content -->
                        <div role="tabpanel" class="tab-pane fade in" id="surgery">
                            <div class="row gy-4">
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/6.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Diabetes and Endocrinology</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/5.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="#">Outpatient Surgery</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/4.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Laryngological Clinic</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                            </div>
                        </div>
                        <!-- End Single Tab content -->
                        <!-- Start Single Tab content -->
                        <div role="tabpanel" class="tab-pane fade in" id="clinicy">
                            <div class="row gy-4">
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/31.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Diabetes and Endocrinology</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/4.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Outpatient Surgery</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/31.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Laryngological Clinic</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                            </div>
                        </div>
                        <!-- End Single Tab content -->
                        <!-- Start Single Tab content -->
                        <div role="tabpanel" class="tab-pane fade in" id="logical">
                            <div class="row gy-4">
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/7.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Diabetes and Endocrinology</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/21.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Outpatient Surgery</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/5.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Laryngological Clinic</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                            </div>
                        </div>
                        <!-- End Single Tab content -->
                        <!-- Start Single Tab content -->
                        <div role="tabpanel" class="tab-pane fade in" id="pediatric">
                            <div class="row gy-4">
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/4.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Diabetes and Endocrinology</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/5.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Outpatient Surgery</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/6.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Laryngological Clinic</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                            </div>
                        </div>
                        <!-- End Single Tab content -->
                        <!-- Start Single Tab content -->
                        <div role="tabpanel" class="tab-pane fade in" id="pregnancy">
                            <div class="row gy-4">
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/21.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Diabetes and Endocrinology</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/13.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Outpatient Surgery</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                                <!--start Single Service -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-service">
                                        <div class="ml-service">
                                            <div class="service-fornt">
                                                <img src="<?= base_url('assets/site/picture/31.jpg')?>" alt="srevice images">
                                            </div>
                                            <div class="service-hover-information">
                                                <div class="service-action">
                                                    <a href="service-details.html">
                                                        <i class="zmdi zmdi-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-details">
                                            <h4 class="ml-service-title"><a href="service-details.html">Laryngological Clinic</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tem an incididunt ut labore et
                                            </p>
                                            <a href="#" class="read-more-btn  caret-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service -->
                            </div>
                        </div>
                        <!-- End Single Tab content -->
                    </div>
                </div>

            </div>
        </div>
        <!--End Single Service wrapper -->
    </div>
</section>
<!-- End Medical Service Area -->

<!-- Start Medical Upcoming Events -->
<section id="ml-upcoming-events" class="ptb-100 smptb-60 bg-white xsptb-40">
    <div class="container">

        <!--Start Section Title -->
        <div class="section-title text-center">
            <h2 class="title-line">Up Coming <span class="text-theme">Events</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt let dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        </div>
        <!--End Section Title -->

        <div class="ml-upcoming-events-wrap pt-20 mb-60 smmbtm-30 xsmbt-30">
            <!--Start single upcoming events -->
            <div class="ml-single-upcoming-events mt-40">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="ml-upcoming-thumb">
                            <img src="<?= base_url('assets/site/picture/14.jpg')?>" alt="upcoming images">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="ml-upcoming-content">
                            <div class="ml-upcoming-inner">
                                <div class="upcoming-date">04<span class="upc-mth">Dec</span>
                                </div>
                                <div class="ml-upcoming-details">
                                    <h4 class="upc-title"><a href="event-details.html">Laryngological Clinic</a></h4>
                                    <div class="upc-time-date">
                                        <div class="upcominh-time">
                                            <i class="zmdi zmdi-time"></i>9:00 Am-6:00 Pm
                                        </div>
                                        <div class="upcoming-location">
                                            <i class="zmdi zmdi-pin"></i>Royal Confrence hall
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea co consequat.
                                Duis aute irure dolor in reprehenderit in volu.
                            </p>
                            <a href="#" class="ml-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single upcoming events -->
            <!--Start single upcoming events -->
            <div class="ml-single-upcoming-events mt-40">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="ml-upcoming-thumb">
                            <img src="<?= base_url('assets/site/picture/22.jpg')?>" alt="upcoming images">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="ml-upcoming-content">
                            <div class="ml-upcoming-inner">
                                <div class="upcoming-date">04<span class="upc-mth">Dec</span>
                                </div>
                                <div class="ml-upcoming-details">
                                    <h4 class="upc-title"><a href="event-details.html">Diabetes and Endocrinology</a></h4>
                                    <div class="upc-time-date">
                                        <div class="upcominh-time">
                                            <i class="zmdi zmdi-time"></i>9:00 Am-6:00 Pm
                                        </div>
                                        <div class="upcoming-location">
                                            <i class="zmdi zmdi-pin"></i>Royal Confrence hall
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea co consequat.
                                Duis aute irure dolor in reprehenderit in volu.
                            </p>
                            <a href="#" class="ml-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single upcoming events -->
        </div>

        <!-- View All Btn-->
        <div class="all-view">
            <a class="ml-btn transparent-btn" href="#">View All Events</a>
        </div>

    </div>
</section>
<!-- End Medical Upcoming Events -->

<!-- Start Funfact area -->
<div class="ml-section funfact-area bg-2 ptb-100 smptb-60 xsptb-40" data-black-overlay="7">
    <div class="container">
        <div class="row gy-4">
            <!--Start Single Fanfact Area -->
            <div class="col-md-3 col-6">
                <div class="single-fact text-center">
                    <div class="funfact-count-inner">
                        <div class="fact-count">
                            <span class="count">1254</span><span>+</span>
                        </div>
                    </div>
                    <div class="fact-title">
                        <h2>Students</h2>
                    </div>
                </div>
            </div>
            <!--End Single Fanfact Area -->
            <!--Start Single Fanfact Area -->
            <div class="col-md-3 col-6">
                <div class="single-fact text-center">
                    <div class="funfact-count-inner">
                        <div class="fact-count">
                            <span class="count">299</span><span>+</span>
                        </div>
                    </div>
                    <div class="fact-title">
                        <h2>Teacher</h2>
                    </div>
                </div>
            </div>
            <!--End Single Fanfact Area -->
            <!--Start Single Fanfact Area -->
            <div class="col-md-3 col-6">
                <div class="single-fact text-center">
                    <div class="funfact-count-inner">
                        <div class="fact-count">
                            <span class="count">957</span><span>+</span>
                        </div>
                    </div>
                    <div class="fact-title">
                        <h2>Research</h2>
                    </div>
                </div>
            </div>
            <!--End Single Fanfact Area -->
            <!--Start Single Fanfact Area -->
            <div class="col-md-3 col-6">
                <div class="single-fact text-center">
                    <div class="funfact-count-inner">
                        <div class="fact-count">
                            <span class="count">456</span><span>+</span>
                        </div>
                    </div>
                    <div class="fact-title">
                        <h2>Award</h2>
                    </div>
                </div>
            </div>
            <!--End Single Fanfact Area -->
        </div>
    </div>
</div>
<!-- End Funfact area -->

<!-- Start of Portfolio Area -->
<section id="ml-portfolio-area" class="tf-portfolio-wrap ptb-100 xtb-60 smptb-60 bg-white xsptb-40">
    <div class="container">

        <!--Start Section Title -->
        <div class="section-title text-center">
            <h2 class="title-line">Our <span class="text-theme">Gallery</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt let dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        </div>
        <!--End Section Title -->

        <div class="portfolio-menu mb-50 xmb-20">
            <ul id="ml-filters" class="ml-port-filter-nav">
                <li data-filter="*" class="is-checked">All</li>
                <li data-filter=".medical">Medical</li>
                <li data-filter=".education">Education</li>
                <li data-filter=".service">Services</li>
                <li data-filter=".campus">Campus</li>
            </ul>
        </div>

        <div class="ml-portfolio-page grid clearfix">
            <div class="row">
                <!-- Start single portfolio -->
                <div class="pro-item col-md-3 col-sm-6 medical service campus">
                    <div class="ml-portfolio" data-title-position="left, top">
                        <div class="ml-port-thumb">
                            <img src="<?= base_url('assets/site/picture/15.jpg')?>" alt="port img">
                        </div>
                        <div class="ml-hover-information">
                            <div class="ml-hover-action">
                                <a href="courses-details.html"><i class="zmdi zmdi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single portfolio -->
                <!-- Start single portfolio -->
                <div class="pro-item col-md-3 col-sm-6 education service">
                    <div class="ml-portfolio" data-title-position="left, top">
                        <div class="ml-port-thumb">
                            <img src="<?= base_url('assets/site/picture/23.jpg')?>" alt="port img">
                        </div>
                        <div class="ml-hover-information">
                            <div class="ml-hover-action">
                                <a href="courses-details.html"><i class="zmdi zmdi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single portfolio -->
                <!-- Start single portfolio -->
                <div class="pro-item col-md-3 col-sm-6 medical education">
                    <div class="ml-portfolio" data-title-position="left, top">
                        <div class="ml-port-thumb">
                            <img src="<?= base_url('assets/site/picture/32.jpg')?>" alt="port img">
                        </div>
                        <div class="ml-hover-information">
                            <div class="ml-hover-action">
                                <a href="courses-details.html"><i class="zmdi zmdi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single portfolio -->
                <!-- Start single portfolio -->
                <div class="pro-item col-md-3 col-sm-6 service campus">
                    <div class="ml-portfolio" data-title-position="left, top">
                        <div class="ml-port-thumb">
                            <img src="<?= base_url('assets/site/picture/41.jpg')?>" alt="port img">
                        </div>
                        <div class="ml-hover-information">
                            <div class="ml-hover-action">
                                <a href="courses-details.html"><i class="zmdi zmdi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single portfolio -->
                <!-- Start single portfolio -->
                <div class="pro-item col-md-3 col-sm-6 medical education">
                    <div class="ml-portfolio" data-title-position="left, top">
                        <div class="ml-port-thumb">
                            <img src="<?= base_url('assets/site/picture/51.jpg')?>" alt="port img">
                        </div>
                        <div class="ml-hover-information">
                            <div class="ml-hover-action">
                                <a href="courses-details.html"><i class="zmdi zmdi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single portfolio -->
                <!-- Start single portfolio -->
                <div class="pro-item col-md-3 col-sm-6 medical education">
                    <div class="ml-portfolio" data-title-position="left, top">
                        <div class="ml-port-thumb">
                            <img src="<?= base_url('assets/site/picture/61.jpg')?>" alt="port img">
                        </div>
                        <div class="ml-hover-information">
                            <div class="ml-hover-action">
                                <a href="courses-details.html"><i class="zmdi zmdi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single portfolio -->
            </div>
        </div>
        <div class="all-view mt-30">
            <a class="ml-btn transparent-btn" href="#">View More</a>
        </div>
    </div>
</section>
<!-- End of Portfolio Area -->

<!-- Start Testimonial Area -->
<section class="ml-testimonial-area ptb-100 xtb-60 bg-1" data-black-overlay="7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="testimonial-wrap">
                    <!-- Start Single Testimonial Area -->
                    <div class="single-testimonial-inner">
                        <div class="single-testimonial">
                            <div class="test-thumb">
                                <img src="<?= base_url('assets/site/picture/24.jpg')?>" alt="img">
                            </div>
                            <div class="test-info">
                                <p>Nipa ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure dolor</p>
                                <h4><strong>Nipa Bali</strong> - Web Designer</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial Area -->
                    <!-- Start Single Testimonial Area -->
                    <div class="single-testimonial-inner">
                        <div class="single-testimonial">
                            <div class="test-thumb">
                                <img src="<?= base_url('assets/site/picture/33.jpg')?>" alt="img">
                            </div>
                            <div class="test-info">
                                <p>Rafiq ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor</p>
                                <h4><strong>BM RAFIQ</strong> - Developer</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial Area -->
                    <!-- Start Single Testimonial Area -->
                    <div class="single-testimonial-inner">
                        <div class="single-testimonial">
                            <div class="test-thumb">
                                <img src="<?= base_url('assets/site/picture/42.jpg')?>" alt="img">
                            </div>
                            <div class="test-info">
                                <p>Salim rana ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor</p>
                                <h4><strong>Salim rana</strong> - Teacher</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial Area -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Area -->

<!-- Start Our Blog area -->
<section class="ml-blog-area ptb-100 smptb-60 xsptb-40 bg-white">
    <div class="container">
        <!--Start Section Title -->
        <div class="section-title text-center">
            <h2 class="title-line">Últimas <span class="text-theme">Notícias</span></h2>
            <p>Fique informado sobre tudo o que acontece na AMDE com nossas notícias atualizadas regularmente. Nossa equipe está dedicada a trazer informações relevantes e importantes para você!</p>
        </div>
        <!--End Section Title -->

        <div class="ml-blog-wrap mt-60">
            <div class="row gy-4">
                <!--Start Single log Area -->
                <?php
                    $post = 0;
                    foreach ($noticia as $noticiaItem):
                    $post += 1;

                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="ml-single-blog">
                        <div class="ml-blog">
                            <div class="ml-blog-fornt">
                                <img src="<?= $noticiaItem->capa?>" alt="Imagem da Notícia">
                            </div>
                            <div class="ml-hover-information">
                                <div class="ml-hover-action">
                                    <a href="<?= base_url('Noticias/'. $noticiaItem->slug)?>"><i class="zmdi zmdi-link"></i></a>
                                </div>
                            </div>
                            <div class="upcoming-date-2">
                                <span class="upc-date">
                                    <?php
                                    $diaNoticia = Time::parse($noticiaItem->dataNoticia);
                                    echo $diaNoticia->toLocalizedString('dd');
                                    ?>
                                </span>
                                <span class="upc-month">
                                    <?php
                                    $mesNoticia = Time::parse($noticiaItem->dataNoticia);
                                    echo $mesNoticia->toLocalizedString('MMM');
                                    ?></span>
                            </div>
                        </div>
                        <!--Start Blog Details -->
                        <div class="ml-blog-details">
                            <h4 class="ml-blog-title">
                                <a href="<?= base_url('Noticias/'. $noticiaItem->slug)?>"><?= $noticiaItem->tituloNoticia?></a>
                            </h4>
                            <div class="blog-post-date">
                                <div class="ml-bolg-bate">
                                    <i class="zmdi zmdi-calendar-note"></i><span>
                                        <?php
                                        $dataNoticia = Time::parse($noticiaItem->dataNoticia);
                                        echo $dataNoticia->toLocalizedString('dd MMM Y');
                                        ?>
                                    </span>
                                </div>
                                <ul class="ml-blog-like">
                                    <!--<li><a href="#"><i class="zmdi zmdi-eye"></i><?= !empty($noticiaItem->visualizacoes) ? $noticiaItem->visualizacoes : 0; ?></a></li>-->
                                    <!--<li><a href="#"><i class="zmdi zmdi-comment-alt-text"></i>30</a></li>-->
                                </ul>
                            </div>
                            <p><?= character_limiter(strip_tags($noticiaItem->texto), 140, '...');?></p>
                            <a class="read-more-btn read-more-btn-2 caret-right" href="#">Saiba mais</a>
                        </div>
                        <!--End Blog Details -->
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<!-- End Our Blog area -->

<?= $this->endSection() ?>
<!-- END CONTENT -->
