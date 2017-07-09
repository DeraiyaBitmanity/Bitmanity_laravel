<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitmanity | Editor</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/simple-line-icons/css/simple-line-icons.css">
    <link href="bower_components/summernote/dist/summernote.css" rel="stylesheet">


</head>

<body class="top-navigation">

<div id="wrapper">
    <div id="page-wrapper" class="white-bg">
        <div class="row border-bottom gray-bg">
            <div class="container">
                <div id="abus" class="navbar navbar-default navbar-static-top navbar-md" style="min-height: 40px;background: #fafafa;" >
                    <div class="col-lg-3">
                        <div id="abus" class="navbar-header pull-left">
                            <a id="abus" class="" href="#">
                                <img src="img/logos.png" width="200px" alt="" style="padding-top: 15px;">
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-6 hidden-md hidden-sm hidden-xs">
                        <div class="form-group col-lg-12">
                            <input type="text" placeholder="Search"  class="form-control b-r-md" name="top-search" id="top-search" style="margin-top: 20px;margin-bottom: 0px;background: #ffffff">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <ul id="abus" class="nav navbar-nav navbar-right pull-right">
                            <li class="">
                                <a href="#" class="">
                                    Sign In/ Sign up
                                </a>
                            </li>
                            <!--<li class="">-->
                            <!--<a href="#" class="">-->
                            <!--<i  style="font-size: 20px;" class="icon-login icons "></i>-->
                            <!--</a>-->
                            <!--</li>-->
                        </ul>
                    </div>

                </div>
                <!--<div id="abus" class="navbar navbar-static-top " style="min-height: 20px;background: #fafafa">-->
                    <!--<div class="text-center">-->
                        <!--<button type="button" class="btn btn-link m-r-md"><i class="icon icon-home" style="font-size: 20px"></i></button>-->
                        <!--<button type="button" class="btn btn-link m-l-md m-r-md"><i class="icon icon-fire" style="font-size: 20px"></i></button>-->
                        <!--<button type="button" class="btn btn-link m-r-md m-l-md"><i class="icon icon-user-following" style="font-size: 20px"></i></button>-->
                        <!--<button type="button" class="btn btn-link nav-active m-r-md m-l-md"><i class="icon icon-folder" style="font-size: 20px"></i></button>-->
                    <!--</div>-->

                <!--</div>-->
            </div>
        </div>
        <div class="wrapper wrapper-content row">
            <div class="container">
                <div class="col-lg-12">
                    <div class="page-container index-section-1">
                        <div id="summernote"><p><br></p></div>
                        <div class="placeholder">
                            hi,<br>
                            we are summernote.<br>
                            please, write text here!<br>
                            super simple WYSIWYG editor on Bootstrap
                        </div>

                    </div>
                </div>

            </div>


        </div>


    </div>
</div>



<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- Flot -->
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>

<!-- ChartJS-->
<script src="js/plugins/chartJs/Chart.min.js"></script>

<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<!-- Peity demo -->
<script src="js/demo/peity-demo.js"></script>
<script src="js/plugins/video/responsible-video.js"></script>

<script src="bower_components/summernote/dist/summernote.js"></script>
<script src="bower_components/summernote/lang/summernote-ko-KR.js"></script>


<script type="text/javascript">
    $(function() {
        // main summernote with custom placeholder
        var $placeholder = $('.placeholder');
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],
            codemirror: {
                mode: 'text/html',
                htmlMode: true,
                lineNumbers: true,
                theme: 'monokai'
            },
            callbacks: {
                onInit: function() {
                    $placeholder.show();
                },
                onFocus: function() {
                    $placeholder.hide();
                },
                onBlur: function() {
                    var $self = $(this);
                    setTimeout(function() {
                        if ($self.summernote('isEmpty') && !$self.summernote('codeview.isActivated')) {
                            $placeholder.show();
                        }
                    }, 300);
                }
            },

        });
        $('.note-statusbar').hide()
    });
</script>




</body>

</html>
