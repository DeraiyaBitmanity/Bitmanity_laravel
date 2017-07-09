@extends('users.layouts.default')


@section('title')
    Search | Bitmanity
@endsection('title')

@section('extraStyle')
    <link rel="stylesheet" href="bower_components/jQuery-flexImages/jquery.flex-images.css">
    <style>
        /* demo4 */
        #demo4 .item { margin: 0 1px 10px 1px; border: 0; }
        #demo4 .item .img { position: absolute; left: 0; top: 0; right: 2px; bottom: 20px; }
        #demo4 .bottom { position: absolute; left: 2px; bottom: 0; right: 2px; font-size: 13px; height: 18px; }
    </style>
@endsection('extraStyle')

@section('navbar')
    <div id="abus" class="navbar navbar-static-top " style="min-height: 20px;background: #FFFFFF">
        <div class="text-center">
            <button type="button" class="btn btn-link nav-active m-r-md"><i class="icon icon-globe" style="font-size: 20px"></i></button>
            <button type="button" class="btn btn-link m-l-md m-r-md"><i class="icon icon-pencil" style="font-size: 20px"></i></button>
            <button type="button" class="btn btn-link m-r-md m-l-md"><i class="icon icon-camera" style="font-size: 20px"></i></button>
            <button type="button" class="btn btn-link m-r-md m-l-md"><i class="icon icon-camrecorder" style="font-size: 20px"></i></button>
        </div>

    </div>
@endsection('navbar')

@section('content')
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-content no-borders">

                <div class="row search-result">

                    <p>
                        <!--About 33,90,00,000 results (0.34 seconds)-->
                    </p>

                </div>

                <!-- -------------------------------------------------------------------------------Image-------------------------------------------------------------------------------  -->
                @include('users.includes.search.image')
                <!-- -------------------------------------------------------------------------------Image-------------------------------------------------------------------------------  -->




                <!-- -------------------------------------------------------------------------------Text-------------------------------------------------------------------------------  -->

                @include('users.includes.search.text')
                <!-- -------------------------------------------------------------------------------Text-------------------------------------------------------------------------------  -->



                @include('users.includes.search.text')
                @include('users.includes.search.text')
                @include('users.includes.search.text')





                <!-- -------------------------------------------------------------------------------Video-------------------------------------------------------------------------------  -->

                @include('users.includes.search.video')
                <!-- -------------------------------------------------------------------------------Video-------------------------------------------------------------------------------  -->



                @include('users.includes.search.video')
                <div class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-white">1</button>
                        <button class="btn btn-white  active">2</button>
                        <button class="btn btn-white">3</button>
                        <button class="btn btn-white">4</button>
                        <button class="btn btn-white">5</button>
                        <button class="btn btn-white">6</button>
                        <button class="btn btn-white">7</button>
                        <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('extraScript')
    !--Flex Image-->
    <script src="bower_components/jQuery-flexImages/jquery.flex-images.min.js"></script>

    <script>
        $('#demo1').flexImages({rowHeight: 300,});
        $('#demo2').flexImages({rowHeight: 120, truncate: 1, maxRows: 2});
        $('#demo3').flexImages({object: 'iframe', rowHeight: 200, truncate: 1});
        $('#demo4').flexImages({ truncate: 1 });
        $('#demo5').flexImages({rowHeight: 300, });
        $('#demo6').flexImages({ truncate: 1 });

        if (~window.location.href.indexOf('http')) {
            (function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();
            (function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=114593902037957";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            $('#github_social').html('\
                <iframe style="float:left;margin-right:15px" src="//ghbtns.com/github-btn.html?user=Pixabay&repo=jQuery-flexImages&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>\
                <iframe style="float:left;margin-right:15px" src="//ghbtns.com/github-btn.html?user=Pixabay&repo=jQuery-flexImages&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>\
            ');
        }

    </script>
@endsection('extraScript')

