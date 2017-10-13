<?php
include_once "header.php";
include_once "menu.php";
?>
<style>
        .box-social-a {
            width: 100%;
            height: 100px;
            background: #219fff;
            float: left;
            font-size: xx-large;
        }
        
        .box-social-a:hover {
            opacity: 0.9;
            cursor: pointer;
            transition: .2s ease-in-out;
        }
        
        @media screen and (max-width:992px) {
            .box-social-a {
                margin-bottom: 10px;
            }
        }
    </style>
<div class="container">
        <div class="row align centered">
            <div class="col-md-6">

                <form class="form-horizontal">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="box-social-a align centered">
                                <a href="#"><i class="box-social fa fa-facebook"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box-social-a align centered">
                                <a href="#"><i class="box-social fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box-social-a align centered">
                                <a href="#"><i class="box-social fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box-social-a align centered">
                                <a href="#"><i class="box-social fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <br /><br />

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="msg" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" id="msg"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
    include_once "footer.php";
    ?>