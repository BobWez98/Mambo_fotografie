<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery3-b" data-filter="true" style="background-color: rgb(243, 198, 73); padding-top: 6rem; padding-bottom: 3rem;">
    <!-- Filter -->
    <div class="mbr-gallery-filter container gallery-filter-active gallery-filter__bg">
        <ul>
            <li class="mbr-gallery-filter-all active">All</li>
        </ul>
    </div>


<!-- start section gallerij -->

    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    

                    <!--PORTRETTEN FOTO's-->
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2" data-tags="Huwelijken" data-video-url="false">
                        <div href="#lb-gallery3-b" data-slide-to="4" data-toggle="modal">

<?php
                            $dir1 = "assets/images/Huwelijken/";
                            echo $dir1 ."<br>";
                            $exclude1 = array( ".","..","error_log","_notes" );
                            if (is_dir($dir1)) {
                            $files1 = scandir($dir1);


                            foreach($files1 as $file1){
                            if(!in_array($file1,$exclude1)){

                            echo "<div class='mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2' data-tags='Portretten' data-video-url='false'>";
                                echo "<div href='#lb-gallery3-b' data-slide-to='6' data-toggle='modal'>";
                                    echo "<img alt='' src='" . $dir1 . $file1 . "' />";
                                    echo " <span class='icon-focus'></span>";
                                    echo "</div></div>";
                            }
                            }
                            }
                            ?>
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>
                            <?php

                            $dir = "assets/images/portretten/";
                            $exclude = array( ".","..","error_log","_notes" );
                            if (is_dir($dir)) {
                                $files = scandir($dir);
                                foreach($files as $file){
                                    if(!in_array($file,$exclude)){

                                       echo "<div class='mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p3' data-tags='Portretten' data-video-url='false'>";
                                       echo "<div href='#lb-gallery3-b' data-slide-to='6' data-toggle='modal'>";
                                        echo '<img src="' . $dir . $file . '" />';
                                        echo " <span class='icon-focus'></span>";
                                        echo "<span class='mbr-gallery-title'>Type caption here</span></div></div>";
                                    }
                                }
                            }
                            ?>
                        <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2" data-tags="Natuur" data-video-url="false">
                        <div href="#lb-gallery3-b" data-slide-to="6" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/portretten/klein_img_4357-2.jpg">
                            
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div><!--<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery3-b" data-slide-to="7" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/working-area-small.jpg">
                            
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-b">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery3-b" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        
                        <?php
                        $dir = "assets/images/";
                        $exclude = array( ".","..","error_log","_notes" );
                        if (is_dir($dir)) {
                            $files = scandir($dir);

                            foreach($files as $file){
                                if(!in_array($file,$exclude)){
                                    $url = $dir.$file;


                                    echo "<div class='carousel-item'>";
                                    echo '<img src="' . $url . '" />
                                    
                                    </div>';

                                }
                            }
                        }
                        ?>

                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery3-b">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery3-b">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>