<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Advanced Form Elements | Bootstrap Based Admin Template - Material Design</title>

    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->

    <link href="/plugins/bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Waves Effect Css -->
    <link href="/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/css/themes/all-themes.css" rel="stylesheet" />


</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
         <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">TPO ADMIN</a>
            </div>

        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TPO ADMIN</div>
                    <div class="email">ADMIN@VIMEET.COM</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">

                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVIGATION</li>
                    <li class="active">
                        <a href="/index.html">
                            <i class="material-icons">home</i>
                            <span>ADMIN HOME</span>
                        </a>
                    </li>
                    <li>
                        <a href="addtest.html">
                            <i class="material-icons">text_fields</i>
                            <span>ADD TEST</span>
                        </a>
                    </li>
                    <li>
                        <a href="/teacher/studentdata.html">
                            <i class="material-icons">layers</i>
                            <span>SHOW PROGRESS</span>
                        </a>
                    </li>


                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020 <a href="">CODING VIZARDS</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->

        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>QUANTITATIVE APTITUDE 1</h2>
            </div>
            <!-- Color Pickers -->

            <!-- #END# Color Pickers -->
            <!-- File Upload | Drag & Drop OR With Click & Choose -->

            <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
            <!-- Masked Input -->

            <!-- #END# Masked Input -->
            <!-- Input Group -->

            <!-- #END# Input Group -->
            <!-- Multi Select -->

            <!-- #END# Multi Select -->


            <!-- Advanced Select -->
            <div class="row clearfix">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header text-center">
                            <h1>
                                ADD QUESTIONS

                            </h1>

                        </div>
                        <div class="body">
                            <div class="row clearfix">
                            <div class="col-md-12">
                            <form role="form" id="form_validation" method="post" action="{{action('TestController@addQuestions')}}">
                                    {!! csrf_field() !!}
                                <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                                <input type="text" name="question" required="true">
                                            </div>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group form-float col-md-12">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="option_1" required>
                                        <label class="form-label">OPTION A:</label>
                                    </div>
                                </div>
                                   <div class="form-group form-float col-md-12">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="option_2" required>
                                        <label class="form-label">OPTION B:</label>
                                    </div>
                                 </div>
                                    <div class="form-group form-float col-md-12">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="option_3" required>
                                        <label class="form-label">OPTION C:</label>
                                    </div>
                                </div>
                                    <div class="form-group form-float col-md-12" style="margin-bottom: 40px;">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="option_4" required>
                                        <label class="form-label">OPTION D:</label>
                                    </div>
                                </div>


                        <div class="col-md-12"  >
                            <div class="demo-radio-button">
                                <h3 class="card-inside-title">RIGHT ANSWER OPTION</h3>
                                <input name="correct_option" value="1" type="radio" class="with-gap" id="radio_1" />
                                <label for="radio_1">OPTION: A</label>
                                <input name="correct_option" value="2" type="radio" class="with-gap" id="radio_2" />
                                <label for="radio_2">OPTION: B</label>
                                <input name="correct_option" value="3"type="radio" class="with-gap" id="radio_3" />
                                <label for="radio_3">OPTION: C</label>
                                <input name="correct_option" value="4" type="radio" class="with-gap" id="radio_4" />
                                <label for="radio_4">OPTION: D</label>
                            </div>
                        </div>

                        <div class="form-group form-float col-md-12" style="margin-bottom: 40px;">
                                <div class="form-line">
                                <input type="hidden" value="{{$test_id}}" class="form-control" name="test_id">

                                </div>
                            </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Select -->
            <!-- Input Slider -->

            <!-- #END# Input Slider -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="/plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="/js/admin.js"></script>
    <script src="/js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="/js/demo.js"></script>
</body>

</html>
