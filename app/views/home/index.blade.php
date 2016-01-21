@extends('home.layout')

@section('title') {{ !empty($settings['title'])?$settings['title']:'' }} @stop

@section('header')
@stop

@section('slider')
@stop

@section('content')

    <section id="main-page">
        <article id="slider" data-type="background" data-speed="10" class="pages">
            <hr class="angle">
            <div class="container">
                <div class="col-xs-12 col-sm-3">
                    <img src="/images/logo-200x170.png" alt="logo happer" class="logo">

                </div>
                <div class="col-xs-12 col-sm-9">
                    <p class="h1">Делаем бизнес лучше</p>
                    <p class="h3">Мы добьемся максимального результата для Вашего бизнеса</p>
                </div>
            </div>

        </article>
        <hr class="angle-invert gray" >
        <article id="setting-work" class="triangle paper">
            <div class="container">
                <h2>Настроим работу бизнеса для воплощения Ваших целей.</h2>
                <p class="text-center">
                    Мы предлагаем комплексный подход, используя маркетинговые решения для эффективной работы бизнеса на Вас.<br>
                    Мы оцениваем ситуацию исходя из Ваших желаний и учитывая Ваши дальнейшие жизненные цели.<br>
                    Мы меняем бизнес для Вас. <br>
                    Наша задача - избавить Вас от лишних забот и вплотную приблизить к осуществлению задуманного.<br> 
                    Один звонок может поменять многое.<br>
                </p>
            </div>
        </article>
        <hr class="angle-invert" >
        <article id="complex" class="complex-tabs">
            <div class="container">
                <h2>Комплексные решения</h2>

                <div id="complex-services" class="row">
                    <div class="col-xs-12 col-sm-5 col-md-3 block-left">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><i class="complex communications"></i><a href="#complex-communications" aria-controls="complex-communications" role="tab" data-toggle="tab">Коммуникации с потребителями</a> <i class="glyphicon glyphicon-menu-right"></i></li>
                            <li role="presentation"><i class="complex media"></i><a href="#complex-society" aria-controls="complex-society" role="tab" data-toggle="tab">Коммуникации с общественностью</a> <i class="glyphicon glyphicon-menu-right"></i></li>
                            <li role="presentation"><i class="complex internal"></i><a href="#complex-internal" aria-controls="complex-internal" role="tab" data-toggle="tab">Внутренняя среда компании</a>  <i class="glyphicon glyphicon-menu-right"></i></li>
                            {{--<li role="presentation"><i class="complex media"></i><a href="#complex-media" aria-controls="complex-media" role="tab" data-toggle="tab">Работа со СМИ</a>  <i class="glyphicon glyphicon-menu-right"></i></li>--}}
                            <li role="presentation"><i class="complex online"></i><a href="#complex-online" aria-controls="complex-online" role="tab" data-toggle="tab">Бизнес Онлайн</a>  <i class="glyphicon glyphicon-menu-right"></i></li>
                            {{--<li role="presentation"><i class="complex revenue"></i><a href="#complex-revenue" aria-controls="complex-revenue" role="tab" data-toggle="tab">Быстрое поднятие выручки</a>  <i class="glyphicon glyphicon-menu-right"></i></li>--}}
                            <li role="presentation"><i class="complex start"></i><a href="#complex-start" aria-controls="complex-start" role="tab" data-toggle="tab">Быстрый старт</a>  <i class="glyphicon glyphicon-menu-right"></i></li>
                            <li role="presentation"><i class="complex event"></i><a href="#complex-event" aria-controls="complex-event" role="tab" data-toggle="tab">Организация мероприятий</a>  <i class="glyphicon glyphicon-menu-right"></i></li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-7 col-md-9 block-right">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="complex-communications">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <h3>Задачи в рамках раздела:</h3>
                                        <ul>
                                            <li>Описываем нишу</li>
                                            <li>тенденции в нише</li>
                                            <li>Анализируем подобные продукты на рынке</li>
                                            <li>Подбираем локацию</li>
                                            <li>Актуальные проблемы в нише, потребности и ожидания</li>
                                            <li>предложения по корректировке продукта</li>
                                            <li>Мы продумываем для компании как преподнести «продукт» потребителю чтобы он его купил.</li>
                                            <li>Ожидания и предпочтения целевых групп</li>
                                            <li>определение основ лояльности к вашей компании</li>
                                            <li>опрос существующих клиентов</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <h3>Результат:</h3>
                                        <p>отчет с заключениями, предложения по стратегии коммуникации</p>
                                        <p class="big">Стоимость:<br><b>60 000 рублей</b></p>
                                        <p>До 200 страниц материала.</p>
                                        <h3>Методы:</h3>
                                        <p>мониторинг рынка, опрос конкурентов, опрос потенциальных клиентов, анализ открытых данных, экспертные заключения</p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-society">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <h3>Задачи в рамках раздела:</h3>
                                        <ul>
                                            <li>Анализируем задачи компании</li>
                                            <li>Формируем представление о деятельности организации</li>
                                            <li>Знакомим потребителя, клиента, партнера и других с продуктом или организацией в положительном ключе, перечисляя некоторые яркие достоинства</li>
                                            <li>Методично создаем благоприятный имидж компании или организации.</li>
                                            <li>Получение обратной связи. Анализ полученной информации</li>
                                            <li>Работа с существующими мнениями и отзывами, стратеги по улучшению.</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <h3>Результат:</h3>
                                        <p>Сводный анализ, составленные тексты о компании или продукты, размещение информации в СМИ, Анализ полученной обратной связи, отчет о предложениях со стороны потребител.</p>
                                        <p>Стоимость:<br> <b>120 000 рублей.</b></p>
                                        <p>  Размещение статей оплачивается отдельно.</p>
                                        <p>Методы: сбор информации внутри компании, составление профессиональными журналистами обзоров, размещение в СМИ, организация пресс конференций.</p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-internal">..Messages.</div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-media">..Settings.</div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-online">..Settings.</div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-revenue">..Settings.</div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-start">..Settings.</div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-event">..Settings.</div>
                        </div>
                    </div>
                </div>

            </div>

        </article>
        <article id="services" class="paper">
            <hr class="angle">
            <div class="container pad-50">
                <h2>Отдельные услуги</h2>
                <div class="text-center pad-20">
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div>
                            <img src="/images/ico/services/analisis-new.png" alt="analisis">
                            <p>Анализ</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div>
                            <img src="/images/ico/services/planning-new.png" alt="planning">
                            <p>Планирование</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div>
                            <img src="/images/ico/services/design-new.png" alt="design">
                            <p>Дизайн</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div>
                            <img src="/images/ico/services/projection-new.png" alt="projection">
                            <p>Проектирование</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div>
                            <img src="/images/ico/services/production-new.png" alt="production">
                            <p>Производство</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div>
                            <img src="/images/ico/services/promotion-new.png" alt="promotion">
                            <p>Продвижение</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article id="about"  data-type="background" data-speed="30" class="pages">
            <hr class="angle gray">
            <div class="container pad-50-100">
                <h2>О компании</h2>
                <div class="">
                    <div class="col-xs-12 col-sm-6">
                        <img src="/images/logo-text-white.png" alt="happer medie">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p>Happer International Media - маркетинговая компания, учрежденная в 2014 году. Имеет представительства в США и России.</p>
                        <p>Основным направлением работы Happer Media является создание и проведение рекламных кампаний и их аналитика, поддержка и продвижение стартапов, в том числе в сфере IT, создание и продвижение сайтов, а так же Social Media Marketing.</p>
                        <p>Happer Media ведет ряд IT проектов на территории Соединенных Штатов Америки и Российской Федерации.</p>
                    </div>
                </div>
            </div>
        </article>
        <hr class="angle-invert" >
        <article id="goals">
            <div class="container pad-50">
                <h2>Вы платите за цели</h2>
                <p class="text-center">
                    Мы работаем по системе Time Material , которая подразумевает прозрачное ценообразование - Вы платите только за время работы специалиста над Вашим проектом.<br>
                    Мы экономим Ваши деньги, добиваясь максимального результата при минимальных затратах.
                </p>
            </div>
        </article>
    </section>

@stop

@section('scripts')
@stop
