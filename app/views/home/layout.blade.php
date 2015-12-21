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
                            <!--
                            <ul class="nav navbar-nav">
                                <li><a href="#">Анализ</a></li>
                                <li><a href="#">Планирование</a></li>
                                <li><a href="#">Дизайн</a></li>
                                <li><a href="/" class="logo hidden-xs"><img src="/images/logo.png"></a></li>
                                <li><a href="#">Проектирование</a></li>
                                <li><a href="#">Производство</a></li>
                                <li><a href="#">Продвижение</a></li>
                            </ul>
                            -->
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
				<div class="col-xs-12 col-sm-6">

				</div>
				<div class="col-xs-12 col-sm-6">
					Ваша реклама может вызывать восторг или возмущение,
					увлекать или провоцировать,
					но прежде всего она должна продавать - работать на ваш бизнес,
					а не только на публику.
					Согласимся, что откатанные схемы продвижения стабильно и эффективно работают,
					но вот вопрос: максимальный ли это результат для вашего бизнеса?
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
