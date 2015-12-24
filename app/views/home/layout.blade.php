<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css?01" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->

    @yield('header')


 </head>

<body>
    <div class="wappers">
        <header>
            <div id="menu" class="">
                <div class="">
                    <nav class="navbar ">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main-menu" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-main-menu">
                            <ul class="nav navbar-nav ">
                                @if(isset($type_page))
                                    {{--<li><a href="/" class="logo hidden-xs"><img src="/images/logo.png"></a></li>--}}
                                    <?php $k=0 ?>
                                    @foreach($type_page as $type=>$page)
                                        <?php if($k++ == 3){echo ("<li><a href='/' class='logo hidden-xs'><img src='/images/logo.png'></a></li>"); } ?>
                                        <li {{ (Request::is('/services'.$type.'*')) ? 'class="active"' : '' }}>{{HTML::link('/services/'.$type, $page)}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
    <footer>
		<div class="container">
			<div class="still">
				<div class="col-xs-12 col-sm-2">
                    <img src="/images/logo.png" alt="logo" class="hidden-xs">
				</div>
				<div class="col-xs-12 col-sm-4">
                    <img src="/images/ico/building1.png" alt="building" class="hidden-xs">
                    <p>
                        United States<br>
                        1305 SE Fort Lauderdale,<br>
                        FL 33301 USA<br>
                        info@happer.ru<br>
                    </p>
				</div>
                <div class="col-xs-12 col-sm-4">
                    <img src="/images/ico/building2.png" alt="building" class="hidden-xs">
                    <p>
                        Санкт-Петербург, Мойки 7<br>
                        info@happer.ru<br>
                        +7(812)649-17-43
                    </p>
				</div>
                <div class="col-xs-12 col-sm-2">
                     <p class="social">
                        <i class="ico-social vk"></i>
                        <i class="ico-social fb"></i>
                        <i class="ico-social tw"></i>
                     </p>
				</div>
			</div>
		</div>
    </footer>

{{ HTML::script('/js/lib/jquery-1.11.3.min.js') }}
{{ HTML::script('/js/lib/bootstrap.min.js') }}

{{ HTML::script('/js/main.min.js') }}
@yield('scripts')

</body>

</html>
