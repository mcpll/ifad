<?php
/**
 * Template Name: Template Home
 * Created by PhpStorm.
 * User: Matteo
 * Date: 29/05/2018
 * Time: 13.02
 */

get_header();
?>
    <?php do_shortcode('[farm-map]')?>
    <div id="primary" class="content-area container-fluid">

        <main id="main" class="site-main">
            <div class="row align-items-center main-separator">
                <div class="col-3 col-sm-2 col-lg-1">
                    <p class="italic base_title">About</p>
                </div>
                <div class="col-9 col-sm-10 col-lg-11">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2>What FO-MAPP is</h2>
                </div>
                <div class="col-12 col-sm-6">
                    <p>The Farmers and Rural Producers’ Organizations Mapping (FO-MAPP) is an online, interactive database that provides georeferenced information on farmers and rural producers’ organizations in selected geographical areas (mainly Africa, Asia and the Pacific, Central and Southern America). </p>
                </div>
            </div>

            <div class="row align-items-center main-separator">
                <div class="col-3 col-sm-2 col-lg-1">
                    <p class="italic base_title">New Profiles</p>
                </div>
                <div class="col-9 col-sm-10 col-lg-11">
                    <hr>
                </div>
            </div>

            <div class="row align-items-center main-separator">
                <div class="col-3 col-sm-2 col-lg-1">
                    <p class="italic base_title">Share</p>
                </div>
                <div class="col-9 col-sm-10 col-lg-11">
                    <hr>
                </div>
            </div>

            <div class="row align-items-center main-separator">
                <div class="col-3 col-sm-2 col-lg-1">
                    <p class="italic base_title">Contact</p>
                </div>
                <div class="col-9 col-sm-10 col-lg-11">
                    <hr>
                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
