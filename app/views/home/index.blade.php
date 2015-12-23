@extends('home.layout')

@section('title') {{ !empty($settings['title'])?$settings['title']:'Asafov design' }} @stop

@section('header')
@stop

@section('slider')
@stop

@section('content')

    <section id="mainpage" data-type="background" data-speed="5" class="block-slide pages">
        <article id="main-slide">
            <div class="text-block col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3 cadre">
                        <div class="col-xs-12">
                            <h1>Наши идеи и опыт<br> работают на ваш бизнес</h1>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <a href="#" class="btn btn-main ">Привлечь клиентов</a>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <a href="#" class="btn btn-main">Заказать конкурентов</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-block col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p class="social">
                            <i class="ico-social vk"></i>
                            <i class="ico-social fb"></i>
                            <i class="ico-social tw"></i>
                        </p>
                    </div>

                    <div class="col-xs-12 col-sm-6 text-right">
                        <p>Рекламное агенство<br> Happer media</p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </article>
        <article id="services" >
            <div class="container">
                <div class="">
                    <h2>Наше предложение</h2>
                </div>
                <div id="services-ico" class="row text-center" >
                    <div class="col-xs-12 col-sm-4">
                        <div class="image analysis"></div>
                        <h3>Анализ</h3>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="image planning"></div>
                        <h3>Планирование</h3>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="image design"></div>
                        <h3>Дизайн</h3>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="image projection"></div>
                        <h3>Проектирование</h3>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="image production"></div>
                        <h3>Производство</h3>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="image promotion"></div>
                        <h3>Продвижение</h3>
                    </div>
                </div>
            </div>
        </article>
        <div class="buffer-page"></div>
    </section>

    <!--
    <section id="">
        <article>
            <div class="container">
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
        </article>
    </section>
    -->
@stop

@section('scripts')
    <link href="/css/animation-main.css?01" rel="stylesheet">

    <!-- Файлы CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
    <link rel="stylesheet" href="/module/assets/countdown/jquery.countdown.css" />

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- JavaScript -->
    <script src="/module/assets/countdown/jquery.countdown.js"></script>
    <script src="/module/assets/js/script.js"></script>
@stop
