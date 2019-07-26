<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Form Wizard | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />



    <link href="/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/flipclock.css">
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
                <a class="navbar-brand" href="../../index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>

        </div>
    </nav>
    <!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->

    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->



    <!-- #END# Right Sidebar -->



<section class="content1">
    <div class="container-fluid">
        <div class="block-header">
                <div id="timer">2:00</div>
            <h2>

                QUANTITATIVE APTITUDE - 1

            </h2>
        </div>
        <!-- Basic Example | Horizontal Layout -->

        <!-- #END# Basic Example | Horizontal Layout -->
        <!-- Basic Example | Vertical Layout -->

        <!-- #END# Basic Example | Vertical Layout -->
        <!-- Advanced Form Example With Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">



                    </div>

                    <div class="body">

                        <div class="jumbotron" id="jumbotron">
                            @if($next == null)
                            {{ session()->put('score', 0) }}
                                <p>Question #{{$fq->id}}</p>
                            <p>{{$fq->question}}</p>

                            {!! Form::open(['action'=>['TestController@postSaveQuestionResult', $test->id], 'method'=>'post', 'id'=>'frm']) !!}

                            <ul id="answer-radio{{$fq->id}}">
                                <div class="btn-group" data-toggle="buttons">

                                    <li>
                                        <label>
                                            <input type="radio" name="option" value="1" /> {{$fq->option_1}}
                                        </label>
                                    </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="option" value="2" /> {{$fq->option_2}}
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="option" value="3" /> {{$fq->option_3}}
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="option" value="4" /> {{$fq->option_4}}
                                            </label>
                                        </li>

                                </div>
                            </ul>
                            <input type="hidden" name="minutes" value="a" id="min">
                            <input type="hidden" name="seconds" value="a" id="sec">
                            {{-- {!! Form::input('hidden','minutes',['id'=>'min']) !!}
                            {!! Form::input('hidden','seconds',['id'=>'sec']) !!} --}}
                            {!! Form::input('hidden','question_id', $fq->id) !!}
                           {{-- {!! Form::input('hidden','time_taken'.$question->id,null,['id'=>'time_taken'.$question->id]) !!} --}}

                            {!! Form::token() !!}



                            {!! Form::submit('Next', ['class'=>'btn btn-info']) !!}


                            {!! Form::close() !!}


                            @endif
                        @if($next!=null)

                        <h1>hgdyashrfjioadsfkhadsgvyfhajdskofigyuadsfjiokdasgadsjifkoihadfjsdioofygadsji</h1>
                            {{-- if not the first question --}}
                            <p>Question #{{$nq->id}}</p>
                            <p>{{$nq->question}}</p>

                            {!! Form::open(['action'=>['TestController@postSaveQuestionResult', $test->id], 'method'=>'post', 'id'=>'frm']) !!}

                            <ul id="answer-radio{{$nq->id}}">
                                <div class="btn-group" data-toggle="buttons">

                                    <li>
                                        <label>
                                            <input type="radio" name="option" value="1" /> {{$nq->option_1}}
                                        </label>
                                    </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="option" value="2" /> {{$nq->option_2}}
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="option" value="3" /> {{$nq->option_3}}
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="option" value="4" /> {{$nq->option_4}}
                                            </label>
                                        </li>

                                </div>
                            </ul>
                            <input type="hidden" value="a" name="minutes" id="min">
                            <input type="hidden" value="a" name="seconds" id="sec">
                            {!! Form::input('hidden','question_id', $nq->id) !!}
                            {{-- {!! Form::input('hidden','time_taken'.$question->id,null,['id'=>'time_taken'.$question->id]) !!} --}}

                            {!! Form::token() !!}



                            {!! Form::submit('Next', ['class'=>'btn btn-info']) !!}

                            {!! Form::close() !!}
                        @endif
                            {{--  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Form Example With Validation -->
    </div>
</section>
<script type="text/javascript">
// var timeoutHandle;
// function countdown(minutes,stat) {
//     var seconds = 60;
//     var mins = minutes;
//     var next = null;

//         // if(getCookie("minutes")&&getCookie("seconds")&&stat)
//         // {
//         //     var seconds = getCookie("seconds");
//         //     var mins = getCookie("minutes");
//         // }
//         var sMin=null;
//         var sSec=null;
//         sMin = {!! json_encode(session()->get('minutes')) !!};
//         sSec = {!! json_encode(session()->get('seconds')) !!};

//         if(sMin!=null&&sSec!=null&&stat){
//             var seconds = sSec;
//             var mins = sMin;
//         }


//     function tick() {

//         var counter = document.getElementById("timer");
//         setCookie(mins,seconds)
//         var current_minutes = mins-1
//         seconds--;
//         counter.innerHTML =
// 		current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
// 		//save the time in cookie



//         if( seconds > 0 ) {
//             timeoutHandle=setTimeout(tick, 1000);
//         } else {

//             if(mins > 1){

//                // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
//                setTimeout(function () { countdown(parseInt(mins)-1,false); }, 1000);


//             }

//         }

//         // if((seconds == 0) && (current_minutes == 0))
//         //     {
//         //         window.location.replace("{{ route('result', [$test->id]) }}");
//         //     }

//     }
//     tick();
// }
// // function setCookie(cname,cvalue,exdays) {

// //     var d = new Date();
// //     d.setTime(d.getTime() + (exdays*24*60*60*1000));
// //     var expires = "expires=" + d.toGMTString();
// //     document.cookie = cname+"="+cvalue+"; "+expires;
// // }

// function setCookie(mins,seconds) {
//     document.getElementByID("min").value = mins;
//     document.getElementByID("sec").value = seconds;
// }

// countdown(3,true);
var timeoutHandle;
function countdown(minutes,stat) {
    var seconds = 60;
    var mins = minutes;
    function tick(flag) {

        var sMin=null;
        var sSec=null;
        sMin = {!! json_encode(session()->get('minutes')) !!};
        sSec = {!! json_encode(session()->get('seconds')) !!};

        if(flag=="true"&&sMin!="empty"){       //true

             seconds = sSec;
             mins = sMin;
        }

        //This script expects an element with an ID = "counter". You can change that to what ever you want.
        setCookie(mins,seconds);

        var counter = document.getElementById("timer");
        var current_minutes = mins-1;
        seconds--;
        counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            // setTimeout(tick, 1000);

            setTimeout(function () { tick("false"); }, 1000);
        } else {
            if(mins > 1){
                // countdown(mins-1);
                setTimeout(function () { countdown(parseInt(mins)-1,false); }, 1000);
            }
        }

    }

    // if((seconds == 0) && (current_minutes == 0))
    //     {
    //         window.location.replace("{{ route('result', [$test->id]) }}");
    //     }
    tick("true");

}

//You can use this script with a call to onclick, onblur or any other attribute you would like to use.
countdown({{$duration}},true);//where n is the number of minutes required.

function setCookie(mins,seconds) {
        document.getElementById("min").value = mins;
        document.getElementById("sec").value = seconds;
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/flipclock.min.js"></script>

<script type="text/javascript" src="/js/sweetalert.min.js"></script>
    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>
</html>
