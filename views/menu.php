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
<nav id="navbar-fixed-top" class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <!--<a class="navbar-brand" href="#">ព័ត៌មានខ្មែរ</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="container">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav menu-bar">
                        <li><a href="index.html"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                        <li id="txtTech">
                            <a href="#"></a>
                        </li>
                        <li id="txtEnter">
                            <a href="#"></a>
                        </li>
                        <li id="txtSp">
                            <a href="#"></a>
                        </li>
                        <li id="txtLife">
                            <a href="#"></a>
                        </li>
                        <li class="active" id="txtAbout">
                            <a href="#"><span class="sr-only">(current)</span></a>
                        </li>
                        <li id="txtContact">
                            <a href="#"></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right menu-bar">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="txtLang"><i class="fa fa-language" aria-hidden="true"></i> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="txtEng" onclick="changeLang(0)">
                                    <a href="javascript:void()"></a>
                                </li>
                                <li id="txtKh" onclick="changeLang(1)">
                                    <a href="javascript:void()"></a>
                                </li>
                            </ul>
                        </li>
                        <li id="txtSign" data-toggle="modal" data-target="#modalSignin"><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> </a></li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>