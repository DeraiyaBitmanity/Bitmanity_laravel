<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @include('users.includes.default.style')
    @yield('extraStyle')


</head>

<body class="top-navigation">

<div id="wrapper">
    <div id="page-wrapper" class="white-bg">
        <div class="row border-bottom white-bg">
            <div class="container">
                @include('users.includes.default.header')
                @yield('navbar')
            </div>
        </div>

        <div class="container">
            <div class="" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="row">
                    <div class="col-lg-12 ">
                        @yield('content')

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@include('users.includes.default.script')
@yield('extraScript')





</body>

</html>
