<style type="text/css">
        .box {
            width: 100%;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
        }
        
        figure {
            max-height: 200px;
            margin: 0;
            padding: 0;
            background: #fff;
            overflow: hidden;
        }
        
        figure img {
            height: 120px;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .2s ease-in-out;
            transition: .2s ease-in-out;
        }
        
        .box:hover img {
            cursor: pointer;
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: .2s ease-in-out;
            transition: .2s ease-in-out;
        }
        
        .box-profile {
            position: relative;
            width: 100%;
            height: 200px;
            background: #219fff;
            overflow: hidden;
        }
        
        .overlay {
            position: relative;
            width: 100%;
            background: #e34;
            bottom: 0;
            height: 50px;
            margin-bottom: 10px;
        }
        
        .overlay>.social {
            width: 25%;
            height: 100%;
            color: white;
            float: left;
        }
        
        .overlay>.social:hover {
            opacity: 0.8;
            font-size: 10pt;
            cursor: pointer;
        }
        
        .helper-name {
            font-family: 'Koulen', 'Roboto';
            position: absolute;
            background: #219fff;
            top: 10px;
            left: 0;
            z-index: 1;
            color: white;
            padding: 5px 15px;
            border-radius: 0px 30px 30px 0px;
            opacity: 0;
        }
        
        .helper-group {
            font-family: 'Koulen', 'Roboto';
            position: absolute;
            background: #219fff;
            bottom: 10px;
            right: 0;
            z-index: 2;
            color: white;
            padding: 5px 15px;
            border-radius: 30px 0px 0px 30px;
            opacity: 0;
        }
        
        .box:hover .helper-name,
        .box:hover .helper-group {
            transition: .3s ease-in;
            opacity: 1;
        }
        
        @media screen and (max-width:992px) {
            .box {
                box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.25);
                padding: 0px 150px;
            }
            .ai {
                display: block;
            }
        }
        
        @media screen and (max-width:600px) {
            .box {
                padding: 0px 30px;
            }
        }
        
        @media screen and (max-width:400px) {
            .box {
                box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
                padding: 0;
            }
        }
        
        .lg {
            height: 120px;
        }
    </style>



<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 align centered">
                        <img src="assets/images/setec_logo.png" class="lg img-responsive">
                    </div>
                </div>
                <svg viewBox="0 0 960 300">
                    <symbol id="s-text">
                        <text text-anchor="middle" x="50%" y="80%">SMLOGX </text>
                    </symbol>

                    <g class = "g-ants">
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                    </g>
                </svg>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">

                            <DIV class="box-profile" onclick="runthis(0)" data-toggle="modal" data-target="#about">
                                <figure><img src="assets/images/sb.jpg" class="img-responsive"></figure>
                                <div class="helper-name">Name : Chea Sambo</div>
                                <div class="helper-group">Group : SN1.2</div>
                            </DIV>
                            <div class="overlay">
                                <div class="social bg-pink-500 align centered">
                                    <i class="fa fa-facebook fa-lg"></i>
                                </div>
                                <div class="social bg-pink-400 align centered">
                                    <i class="fa fa-twitter fa-lg"></i>
                                </div>
                                <div class="social bg-pink-300 align centered">
                                    <i class="fa fa-instagram fa-lg"></i>
                                </div>
                                <div class="social bg-pink-200 align centered">
                                    <i class="fa fa-youtube fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <DIV class="box-profile" onclick="runthis(2)" data-toggle="modal" data-target="#about">
                                <figure><img src="assets/images/sunlong.jpg" class="img-responsive"></figure>
                                <div class="helper-name">Name : Oung Sunlong</div>
                                <div class="helper-group">Group : SN1.2</div>
                            </DIV>
                            <div class="overlay">
                                <div class="social bg-pink-500 align centered">
                                    <i class="fa fa-facebook fa-lg"></i>
                                </div>
                                <div class="social bg-pink-400 align centered">
                                    <i class="fa fa-twitter fa-lg"></i>
                                </div>
                                <div class="social bg-pink-300 align centered">
                                    <i class="fa fa-instagram fa-lg"></i>
                                </div>
                                <div class="social bg-pink-200 align centered">
                                    <i class="fa fa-youtube fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <DIV class="box-profile" onclick="runthis(1)" data-toggle="modal" data-target="#about">
                                <figure><img src="assets/images/lida.jpg" class="img-responsive"></figure>
                                <div class="helper-name">Name : Eam Sellida</div>
                                <div class="helper-group">Group : SN1.2</div>
                            </DIV>
                            <div class="overlay">
                                <div class="social bg-pink-500 align centered">
                                    <i class="fa fa-facebook fa-lg"></i>
                                </div>
                                <div class="social bg-pink-400 align centered">
                                    <i class="fa fa-twitter fa-lg"></i>
                                </div>
                                <div class="social bg-pink-300 align centered">
                                    <i class="fa fa-instagram fa-lg"></i>
                                </div>
                                <div class="social bg-pink-200 align centered">
                                    <i class="fa fa-youtube fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <br />


        <div class="row">
            <div class="col-md-12">
                <div class="row align centered ai">
                    <div class="col-md-4">
                        <div class="box">
                            <DIV class="box-profile" onclick="runthis(3)" data-toggle="modal" data-target="#about">
                                <figure><img src="assets/images/tharoth.jpg" class="img-responsive"></figure>
                                <div class="helper-name">Name : Meas Sovanntharoth</div>
                                <div class="helper-group">Group : SN1.2</div>
                            </DIV>
                            <div class="overlay">
                                <div class="social bg-pink-500 align centered">
                                    <i class="fa fa-facebook fa-lg"></i>
                                </div>
                                <div class="social bg-pink-400 align centered">
                                    <i class="fa fa-twitter fa-lg"></i>
                                </div>
                                <div class="social bg-pink-300 align centered">
                                    <i class="fa fa-instagram fa-lg"></i>
                                </div>
                                <div class="social bg-pink-200 align centered">
                                    <i class="fa fa-youtube fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <DIV class="box-profile" onclick="runthis(4)" data-toggle="modal" data-target="#about">
                                <figure><img src="assets/images/visal.jpg" class="img-responsive"></figure>
                                <div class="helper-name">Name : Sorn Visal</div>
                                <div class="helper-group">Group : SN1.2</div>
                            </DIV>
                            <div class="overlay">
                                <div class="social bg-pink-500 align centered">
                                    <i class="fa fa-facebook fa-lg"></i>
                                </div>
                                <div class="social bg-pink-400 align centered">
                                    <i class="fa fa-twitter fa-lg"></i>
                                </div>
                                <div class="social bg-pink-300 align centered">
                                    <i class="fa fa-instagram fa-lg"></i>
                                </div>
                                <div class="social bg-pink-200 align centered">
                                    <i class="fa fa-youtube fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


    <?php

    include_once "footer.php";

    ?>