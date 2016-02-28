<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css?03" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->

    @yield('header')


 </head>

<body>
	<header>
		<div id="menu" class="">
			<div class="container">
				<nav class="navbar ">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a href="/"><img src="/images/logo-text.png" class="logo" alt="happer logo"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-main-menu">
					  <ul class="nav navbar-nav navbar-right">
						<li><a href="/">О нас</a></li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Услуги <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="/services">Комплексные услуги</a></li>
                                  <li><a href="/individual">Отдельные услуги</a></li>
                              </ul>
                        </li>
						<li><a href="/contacts">Контакты</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</header>

    <main>
        @yield('content')
    </main>

    <footer data-type="background" data-speed="0" class="pages">
        <hr class="angle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <div class="col-xs-4">
                        <img src="/images/ico/build-1.png" alt="building">
                    </div>
                    <div class="txt-block col-xs-8">
                        <p>
                            United States<br>
                            1305 SE Fort Lauderdale,<br>
                            FL 33301 USA<br>
                            info@happer.ru<br>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 social-block">
                    <p class="social">
                        <i class="ico-social vk"></i>
                        <i class="ico-social fb"></i>
                        <i class="ico-social tw"></i>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <div class="txt-block col-xs-8">
                        <p class="text-right">
                            Санкт-Петербург, Мойки 7<br>
                            info@happer.media<br>
                            +7(812)649-04-04
                        </p>
                    </div>
                    <div class="col-xs-4">
                        <img src="/images/ico/build-2.png" alt="building">
                    </div>
                </div>
            </div>
        </div>

        <hr class="angle gray transform">
        <div class="footer-bottom paper">
            <div class="text-center">
                <img src="/images/logo-text.png" alt="happer media">
            </div>
        </div>

    </footer>


    {{ HTML::script('/js/lib/jquery-1.11.3.min.js') }}
    {{ HTML::script('/js/lib/bootstrap.min.js') }}

    {{ HTML::script('/js/main.min.js') }}
    @yield('scripts')

</body>

</html>
