 <!-- FOOTER -->
 <br /></br /><br />


    <?php
    include_once "contantmodel.php";
    ?>

    <div class="container-fluid" >
        <div class="row" style="margin:0px -15px">
            <div class="col-md-12 bg-grey-900">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sm-footer">
                                <div class="col-md-4">
                                    <img src="assets/images/footer-logo.png">
                                    <br />
                                    <h5 class="sm-footer-text">© រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ដោយ​ Sabay ឆ្នាំ​២០១៦</h5>
                                    <p class="sm-footer-text-p"><b>អាសយដ្ឋាន</b>
                                        <br />អគារ​លេខ ៣០៨ មហាវិថីព្រះមុន្នីវង្ស សង្កាត់បឹងរាំង ខណ្ឌដូនពេញ</p>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="sm-footer-text-h">អំពីយើង</h4>
                                    <h5 class="sm-footer-text-p">Sabay Digital Corporation ជា​ក្រុមហ៊ុន​ព័ត៌មាន​ឌីជីថល និង​កម្សាន្ត​ឈាន​មុខ​គេ​នៅ​កម្ពុជា។ ព័ត៌មាន​បន្ថែម ផលិត​ផល​ និង​ សេវាកម្ម របស់ Sabay</h5>
                                    <a href="#"><img class="box-sy" src="assets/images/s_3.png"></a>
                                    <a href="#"><img class="box-sy" src="assets/images/s_1.jpg"></a>
                                    <a href="#"><img class="box-sy" src="assets/images/s_2.png"></a>
                                    <a href="#"><img class="box-sy" src="assets/images/s_4.png"></a>
                                    <a href="#"><img class="box-sy" src="assets/images/s_5.png"></a>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="sm-footer-text-h">ជួបគ្នានៅបណ្តាញសង្គម</h4>
                                    <a href="#"><i class="box-social fa fa-facebook"></i></a>
                                    <a href="#"><i class="box-social fa fa-twitter"></i></a>
                                    <a href="#"><i class="box-social fa fa-instagram"></i></a>
                                    <a href="#"><i class="box-social fa fa-youtube"></i></a>
                                    <br />
                                    <h5 class="sm-footer-text">ទំនាក់ទំនង </h5>
                                    <p class="sm-footer-text-p">info@sabay.com <br />023 228 000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- END FOOTER -->



    <script type="text/javascript" src="<?php getJS('jquery.min'); ?>"></script>
    <script type="text/javascript" src="<?php getJS('bootstrap.min'); ?>"></script>
    <script type="text/javascript" src="<?php getJS('main'); ?>"></script>
    <script type="text/javascript" src="<?php getJS('lang'); ?>"></script>
    <script type="text/javascript" src="<?php getJS('lightslider'); ?>"></script>


    <script type="text/javascript">
        $(document).ready(function() {

            $('.marquee').marquee({
                //speed in milliseconds of the marquee
                duration: 19000,
                //gap in pixels between the tickers
                gap: 50,
                //time in milliseconds before the marquee will start animating
                delayBeforeStart: 0,
                //'left' or 'right'
                direction: 'left',
                //true or false - should the marquee be duplicated to show an effect of continues flow
                duplicated: true,
            });

            $('#content-slider').lightSlider({
                item: 4,
                loop: false,
                slideMove: 2,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                }, {
                    breakpoint: 850,
                    settings: {
                        item: 2,
                        slideMove: 1
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        item: 1,
                        slideMove: 1
                    }
                }]
            });

        });

        $('#sm-box').hover(
            function() {
                $(this).find('.sm-slide-box-text').addClass("sm-slide-box-text-hover");
            },
            function() {
                $(this).find('.sm-slide-box-text').removeClass("sm-slide-box-text-hover");
            }
        )
    </script>


</body>

</html>
