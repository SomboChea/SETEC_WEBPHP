<!-- CONTENT -->
<div class="row" style="margin:0;padding:0">
   <!-- Block Cate Header -->
   <div class="row">
        <div class="col-md-12 sm-full-width">
            <div class="row block-cate-header" style="border-bottom:0px">
                <div class="sm-category-line" style="border-color:#F44336">
                    <a href="#" class="sm-category-line-box bg-red-500"><i class="glyphicon glyphicon-menu-left sm-glyphicon-menu-right hidden-xs" aria-hidden="true"></i> វីដេអូ <i class="glyphicon glyphicon-menu-right sm-glyphicon-menu-right hidden-xs" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Block Cate Header -->

    <!-- Featured Videos -->
    <div class="row">
        <div class="col-md-12 block-cate-videos">
            <div class="row">
                <div class="col-md-12 sm-featured-left block-cate">
                    <div class="block-cate-tech">
                        <div class="space-cate-top"></div>
                        <!-- List Item large 3-->
                        <div class="row">
                            <div class="col-md-4">
                                <a href="topics/technology/tech-007.html">
                                    <div class="sm-small-view-thumb">
                                        <div class="sm-hold-img" style="background:url('../../SETEC/assets/images/satya-nadella-lanvin-suede-and-patent-leather-low-top-sneaker_large.jpg');background-size:cover"></div>
                                        <p class="caption xs-vd" style="font-weight:bold;font-size:medium">ប្លែកៗ​ ​ប្រើ​ ​Drone​ ​អាច​ស្ទូច​ត្រី​ទម្ងន់​រាប់​គីឡូក្រាម</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End List Item large -->
                        <div class="space-top"></div>
                        <!-- List Item 4-->
                        <div class="row">
                            <div class="col-md-3">
                                <a href="">
                                    <div class="sm-small-view-thumb">
                                        <div class="sm-hold-img-small" style="background:url('../../SETEC/assets/images/satya-nadella-lanvin-suede-and-patent-leather-low-top-sneaker_large.jpg');background-size:cover"></div>
                                        <p class="caption xs-vd">ថៃ​ឈរ​លេខ​​១ មាន​​អ្នក​មើល​រឿង​សិច​តាម​ VR ​ច្រើន​បំផុត​លើ​លោក</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End List Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Videos -->

    <?php
        $categories = array('Technology','Entertaintment','Sport','Life & Social');

        $rex = getTable('viewPosts');

        // Run Loop here -->
        foreach($rex as $row) {

            echo '
            <div class="space-top"></div>
            <div class="space-top"></div>';

            if($row['cate_name']==$categories[0]) {
                echo "
                <div class='row'>
                    <div class='col-md-12 sm-full-width'>
                        <div class='row block-cate-header' style='border-bottom:0px'>
                            <div class='sm-category-line'>
                                <a href='#' class='sm-category-line-box' style='color:white'><i class='glyphicon glyphicon-menu-left sm-glyphicon-menu-right hidden-xs' aria-hidden='true'></i> $row[cate_name_kh] <i class='glyphicon glyphicon-menu-right sm-glyphicon-menu-right hidden-xs' aria-hidden='true'></i></a>
                            </div>
                        </div>
                    </div>
                </div>";

                echo ''

            } else if($row['cate_name']==$categories[1]) {
                echo "
                <div class='row'>
                    <div class='col-md-12 sm-full-width'>
                        <div class='row block-cate-header' style='border-bottom:0px'>
                            <div class='sm-category-line'>
                                <a href='#' class='sm-category-line-box' style='color:white'><i class='glyphicon glyphicon-menu-left sm-glyphicon-menu-right hidden-xs' aria-hidden='true'></i> $row[cate_name_kh] <i class='glyphicon glyphicon-menu-right sm-glyphicon-menu-right hidden-xs' aria-hidden='true'></i></a>
                            </div>
                        </div>
                    </div>
                </div>";



            } else if($row['cate_name']==$categories[2]) {
                echo "
                <div class='row'>
                    <div class='col-md-12 sm-full-width'>
                        <div class='row block-cate-header' style='border-bottom:0px'>
                            <div class='sm-category-line'>
                                <a href='#' class='sm-category-line-box' style='color:white'><i class='glyphicon glyphicon-menu-left sm-glyphicon-menu-right hidden-xs' aria-hidden='true'></i> $row[cate_name_kh] <i class='glyphicon glyphicon-menu-right sm-glyphicon-menu-right hidden-xs' aria-hidden='true'></i></a>
                            </div>
                        </div>
                    </div>
                </div>";



            } else if($row['cate_name']==$categories[3]) {
                echo "
                <div class='row'>
                    <div class='col-md-12 sm-full-width'>
                        <div class='row block-cate-header' style='border-bottom:0px'>
                            <div class='sm-category-line'>
                                <a href='#' class='sm-category-line-box' style='color:white'><i class='glyphicon glyphicon-menu-left sm-glyphicon-menu-right hidden-xs' aria-hidden='true'></i> $row[cate_name_kh] <i class='glyphicon glyphicon-menu-right sm-glyphicon-menu-right hidden-xs' aria-hidden='true'></i></a>
                            </div>
                        </div>
                    </div>
                </div>";



            } else {
                echo "
                NO CATE";


            }
        }
    ?>
    
    

    <!-- Technology Block Cate Header -->
    
    <!-- End Block Cate Header -->

    <!-- Featured Technology -->
    
        <!-- End Featured Technology -->
    </div>
</div>    

<div class="space-top"></div>


<?php
    function getSetData($image,$post_desc) {
        echo '
        <div class="row">
        <div class="col-md-12 block-cate-videos">
            <div class="row">
                <div class="col-md-12 sm-featured-left block-cate">
                    <div class="block-cate-tech">
                        <div class="space-cate-top"></div>
                        <div class="row">
                            <!-- Item Large 1-->
                            <div class="col-md-4">
                                <a href="topics/technology/tech-011.html">
                                    <div class="sm-big-view-thumb">
                                        <div class="sm-hold-img" style="background:url(\'../../SETEC/assets/images/satya-nadella-lanvin-suede-and-patent-leather-low-top-sneaker_large.jpg\');background-size:cover"></div>
                                        <p class="caption">ដឹង CEO ក្រុមហ៊ុន​បច្ចេកវិទ្យាលំដាប់កំពូលៗ ពាក់​ស្បែកជើង​តម្លៃ​ប៉ុន្មាន​អត់?​</p>
                                    </div>
                                </a>
                            </div>
                            <!-- End Item Large -->

                            <!-- Item Small 4-->
                            <div class="col-md-8">
                                <!-- Item Small Line 1-->
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="topics/technology/tech-003link.html">
                                            <div class="sm-small-view-thumb">
                                                <div class="sm-hold-img-small" style="background:url(\'../../SETEC/assets/images/satya-nadella-lanvin-suede-and-patent-leather-low-top-sneaker_large.jpg\');background-size:cover"></div>
                                                <p class="caption xs-tech">iPhone 7 Plus​ ​ផ្ទុះ​ឆេះ​មួយ​ករណី​ទៀត​ហើយ!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Item Small Line 1-->
                                <div class="space-top"></div>
                                <!-- Item Small Line 2-->
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="topics/technology/tech-004.html">
                                            <div class="sm-small-view-thumb">
                                                <div class="sm-hold-img-small" style="background:url(\'../../SETEC/assets/images/satya-nadella-lanvin-suede-and-patent-leather-low-top-sneaker_large.jpg\');background-size:cover"></div>
                                                <p class="caption xs-tech">បោះឆ្នោត​ជ្រើស​រើស​ក្រុម​ប្រឹក្សា​ភិបាល​​ថ្មី ​ដឹកនាំ​អភិវឌ្ឍ​វិស័យ​យានយន្ត​នៅ​កម្ពុជា</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Item Small Line 2-->
                            </div>
                            <!-- End Item Small -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
?>