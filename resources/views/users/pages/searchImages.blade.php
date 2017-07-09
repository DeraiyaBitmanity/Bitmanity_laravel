@extends('users.layouts.default')


@section('title')
    Search | Bitmanity
@endsection('title')

@section('extraStyle')
    <link rel="stylesheet" href="bower_components/jQuery-flexImages/jquery.flex-images.css">
    <style>
        /* demo5 */
        #demo5 .over { position: absolute; bottom: 0; left: 0; right: 0; padding: 4px 6px; font-size: 13px; color: #fff; background: #222; background: rgba(0,0,0,.7); }
    </style>
@endsection('extraStyle')

@section('navbar')
    <div id="abus" class="navbar navbar-static-top " style="min-height: 20px;background: #FFFFFF">
        <div class="text-center">
            <button type="button" class="btn btn-link m-r-md"><i class="icon icon-globe" style="font-size: 20px"></i></button>
            <button type="button" class="btn btn-link m-l-md m-r-md"><i class="icon icon-pencil" style="font-size: 20px"></i></button>
            <button type="button" class="btn btn-link nav-active  m-r-md m-l-md"><i class="icon icon-camera" style="font-size: 20px"></i></button>
            <button type="button" class="btn btn-link m-r-md m-l-md"><i class="icon icon-camrecorder" style="font-size: 20px"></i></button>
        </div>

    </div>
@endsection('navbar')

@section('content')
    <div class="col-lg-12">

        <div id="demo5" class="flex-images">
            <div class="item" data-w="219" data-h="180">
                <img src="blank.gif" data-src="images/1.jpg">
                <div class="over">Caption 1</div>
            </div>
            <div class="item" data-w="279" data-h="180">
                <img src="blank.gif" data-src="images/2.jpg">
                <div class="over">Caption 2</div>
            </div>
            <div class="item" data-w="270" data-h="180">
                <img src="blank.gif" data-src="images/3.jpg">
                <div class="over">Caption 3</div>
            </div>
            <div class="item" data-w="270" data-h="180">
                <img src="blank.gif" data-src="images/4.jpg">
                <div class="over">Caption 4</div>
            </div>
            <div class="item" data-w="147" data-h="180">
                <img src="blank.gif" data-src="images/5.jpg">
                <div class="over">Caption 5</div>
            </div>
            <div class="item" data-w="219" data-h="180">
                <img src="blank.gif" data-src="images/6.jpg">
                <div class="over">Caption 1</div>
            </div>
            <div class="item" data-w="279" data-h="180">
                <img src="blank.gif" data-src="images/7.jpg">
                <div class="over">Caption 2</div>
            </div>
            <div class="item" data-w="270" data-h="180">
                <img src="blank.gif" data-src="images/8.jpg">
                <div class="over">Caption 3</div>
            </div>
            <div class="item" data-w="219" data-h="180">
                <img src="blank.gif" data-src="images/9.jpg">
                <div class="over">Caption 4</div>
            </div>
            <div class="item" data-w="147" data-h="180">
                <img src="blank.gif" data-src="images/10.jpg">
                <div class="over">Caption 5</div>
            </div>
            <div class="item" data-w="219" data-h="180">
                <img src="blank.gif" data-src="images/11.jpg">
                <div class="over">Caption 1</div>
            </div>
            <div class="item" data-w="279" data-h="180">
                <img src="blank.gif" data-src="images/12.jpg">
                <div class="over">Caption 2</div>
            </div>
            <div class="item" data-w="270" data-h="180">
                <img src="blank.gif" data-src="images/13.jpg">
                <div class="over">Caption 3</div>
            </div>
            <div class="item" data-w="219" data-h="180">
                <img src="blank.gif" data-src="images/15.jpg">
                <div class="over">Caption 4</div>
            </div>
            <div class="item" data-w="147" data-h="180">
                <img src="blank.gif" data-src="images/1.jpg">
                <div class="over">Caption 5</div>
            </div>
        </div>
        `
    </div>
@endsection('content')

@section('extraScript')
    <!--Flex Image-->
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

