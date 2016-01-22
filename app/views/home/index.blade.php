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
                    <h1>Коммуникационное агентство happer media</h1>
                </div>
            </div>

        </article>
        <hr class="angle-invert gray" >
        <article id="setting-work" class="triangle paper">
            <div class="container">
                <h2>Настроим работу бизнеса для воплощения <br> Ваших целей</h2>
                <p class="text-center">
                    Мы предлагаем комплексный подход, используя маркетинговые решения для эффективной работы бизнеса на Вас.<br>
                    Мы оцениваем ситуацию исходя из Ваших желаний и учитывая Ваши дальнейшие жизненные цели.<br>
                    Наша задача - избавить Вас от лишних забот и вплотную приблизить к осуществлению задуманного.<br> 
                    Один звонок может поменять многое.<br>
                </p>
            </div>
        </article>
        <hr class="angle-invert" >
        <article id="complex" class="complex-tabs">
            <div class="container">
                <h2>Комплексные решения</h2>
                <p class="text-center">Мы добьемся максимального результата для Вашего бизнеса<br><br></p>
                <div id="complex-services" class="row">
                    <div class="col-xs-12 col-sm-5 col-md-3 block-left">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><i class="complex communications"></i><a href="#complex-communications" aria-controls="complex-communications" role="tab" data-toggle="tab">Коммуникации с потребителями</a> </li>
                            <li role="presentation"><i class="complex media"></i><a href="#complex-society" aria-controls="complex-society" role="tab" data-toggle="tab">Коммуникации с общественностью</a></li>
                            <li role="presentation"><i class="complex internal"></i><a href="#complex-internal" aria-controls="complex-internal" role="tab" data-toggle="tab">Внутренняя среда компании</a> </li>
                            {{--<li role="presentation"><i class="complex media"></i><a href="#complex-media" aria-controls="complex-media" role="tab" data-toggle="tab">Работа со СМИ</a> </li>--}}
                            <li role="presentation"><i class="complex online"></i><a href="#complex-online" aria-controls="complex-online" role="tab" data-toggle="tab">Бизнес Онлайн</a></li>
                            {{--<li role="presentation"><i class="complex revenue"></i><a href="#complex-revenue" aria-controls="complex-revenue" role="tab" data-toggle="tab">Быстрое поднятие выручки</a></li>--}}
                            <li role="presentation"><i class="complex start"></i><a href="#complex-start" aria-controls="complex-start" role="tab" data-toggle="tab">Быстрый старт</a> </li>
                            <li role="presentation"><i class="complex event"></i><a href="#complex-event" aria-controls="complex-event" role="tab" data-toggle="tab">Организация мероприятий</a> </li>
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
                                            <li>Анализировать задачи компании</li>
                                            <li>Анализировать рынок на котором компания предоставляет свои услуги или продает товар</li>
                                            <li>Определить тенденции на рынке</li>
                                            <li>Выявить и проанализировать подобные компании на рынке.</li>
                                            <li>Определить актуальные проблемы возникающие в данной сфере.</li>
                                            <li>Выявить потребности, предпочтения и ожидания потенциальных клиентов.</li>
                                            <li>Оценить Вашу компанию по ряду качеств и требований, предъявляемых клиентами к подобным компаниям.</li>
                                            <li>Провести опрос существующих или потенциальных клиентов.</li>
                                            <li>Определить основы лояльности клиентов к вашей компании.</li>
                                            <li>Внести предложения по корректировке выявленного ряда недочетов.</li>
                                            <li>Предложить ряд дополнительных мер повышающих лояльность клиента.</li>
                                            <li>Внедрить изменения (по дополнительной договоренности)</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <p class="price">Стоимость:<br>
                                        <b>60 000</b> рублей</p>
                                        <p>До 200 страниц материала.</p>
                                        <a href="/services/vneshnie-kommunikatsii-kompanii" class="btn btn-main btn-tabs">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-society">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <h3>Задачи в рамках раздела:</h3>
                                        <ul>
                                            <li>Анализировать задачи компании</li>
                                            <li>Мониторинг информации о компании и ее руководстве.</li>
                                            <li>Создать описание компании исходя из долгосрочных задач компании.</li>
                                            <li>Выявить лидера мнений в области работы компании.</li>
                                            <li>Провести работу с существующими отзывами и мнениями.</li>
                                            <li>Составить тестовую стратегию коммуникации с общественностью</li>
                                            <li>Оповестить общественность о положительных изменениях или о выходе компании на рынок.</li>
                                            <li>Познакомить общественность с компанией в положительном ключе, подчеркнуть достоинства.</li>
                                            <li>Оповестить о деятельности компании направленной на благо общественности.</li>
                                            <li>Сформировать в информационном поле положительное представление о выпускаемой продукции.</li>
                                            <li>Получить обратную связь с общественностью.</li>
                                            <li>Провести подробный анализ и составить долгосрочную коммуникационную стратегию.</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <p class="price">Стоимость:<br>
                                            <b>60 000</b> рублей</p>

                                        <a href="/services/vneshnie-kommunikatsii-kompanii" class="btn btn-main btn-tabs">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-internal">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <h3>Задачи в рамках раздела:</h3>
                                        <ul>
                                            <li>Анализ задач компании</li>
                                            <li>Проведение анонимных опросов.</li>
                                            <li>Анализ внутреннего взаимодействия персонала</li>
                                            <li>Аналитика организационной структуры</li>
                                            <li>Анализ эффективности систем коммуникации</li>
                                            <li>Анализ системы управления</li>
                                            <li>Оценка уровня менеджмента</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <p class="price">Стоимость:<br>
                                            <b>50 000</b> рублей</p>

                                        <a href="/services/vneshnie-kommunikatsii-kompanii" class="btn btn-main btn-tabs">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            {{--<div role="tabpanel" class="tab-pane fade" id="complex-media">..Settings.</div>--}}
                            <div role="tabpanel" class="tab-pane fade" id="complex-online">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <h3>Задачи в рамках раздела:</h3>
                                        <ul>
                                            <li>Анализировать задачи компании</li>
                                            <li>Изучить ниши, целевые аудитории и рынки</li>
                                            <li>Разработать новые или модернизировать существующие продукты для продажи онлайн </li>
                                            <li>Придумать структуру будущего ресурса</li>
                                            <li>Предложить необходимый для сайта контент</li>
                                            <li>Предложить дизайн, который будет актуален на годы вперед</li>
                                            <li>Подобрать подходящий домен</li>
                                            <li>Предложить оформление страницы в социальных сетях и начальный контент для нее</li>
                                            <li>Создать автоматизированную воронку продаж</li>
                                            <li>Предложить способы заполнения информационного пространства в сети о Вашем ресурсе</li>
                                            <li>Предложить ресурсы и материалы для заполнения  информационного пространства</li>
                                            <li>Настроить Google AdWords и Яндекс директ</li>
                                            <li>Предложить способы построения базы подписчиков и монетизации трафика</li>
                                            <li>Придумать возможные онлайн-события</li>
                                            <li>Придумать рекламные кампании</li>
                                            <li>Подобрать площадки для рекламы ресурса.</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <p class="price">Стоимость:<br>
                                            <b>30 000</b> рублей</p>

                                        <a href="/services/bizness-onlayn" class="btn btn-main btn-tabs">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            {{--<div role="tabpanel" class="tab-pane fade" id="complex-revenue">..Settings.</div>--}}
                            <div role="tabpanel" class="tab-pane fade" id="complex-start">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <h3>Задачи в рамках раздела:</h3>
                                        <ul>
                                            <li>Определение цели</li>
                                            <li>Выявление потребностей и насыщенности рынка</li>
                                            <li>Нахождение информации о местах запроса на продукт</li>
                                            <li>Выработка стратегии сбыта</li>
                                            <li>Создание методологии продаж</li>
                                            <li>Создание привлекательной ценовой политики</li>
                                            <li>Подбор каналов продвижения</li>
                                            <li>Подбор эффективных поисковых фраз</li>
                                            <li>Вывод объявлений на верхние позиции по запросам</li>
                                            <li>Подбор контрагентов для сбыта продукта</li>
                                            <li>Создание тестовой рекламной кампании</li>
                                            <li>Создание информационного повода (акции, теста)</li>
                                            <li>Привлечение лидеров мнений для рекомендаций по использованию товара</li>
                                            <li>Создание стратегии масштабирования бизнеса</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <p class="price">Стоимость:<br>
                                            <b>100 000</b> рублей</p>

                                        <a href="/services/byistryiy-start" class="btn btn-main btn-tabs">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="complex-event">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <h3>Задачи в рамках раздела:</h3>
                                        <ul>
                                            <li>Анализ задач компании</li>
                                            <li>Создание концепции мероприятия</li>
                                            <li>Подбор места проведения</li>
                                            <li>Подбор участников и хедлайнеров</li>
                                            <li>Создание информационных материалов</li>
                                            <li>Подбор каналов распространения информации о мероприятии</li>
                                            <li>Помощь в  продаже билетов (при необходимости)</li>
                                            <li>Подбор партнеров и спонсоров мероприятия, проведение переговоров</li>
                                            <li>Полная подготовка площадки к проведению события</li>
                                            <li>Техническая поддержка</li>
                                            <li>Обеспечение безопасности и проверка билетов</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <p class="price">Стоимость:<br>
                                            <b>50 000</b> рублей</p>

                                        <a href="/services/organizatsiya-meropriyatiy" class="btn btn-main btn-tabs">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </article>
        <article id="services" class="paper">
            <hr class="angle">
            <div class="container pad-50">
                <h2>Отдельные услуги</h2>
                <p>Мы меняем бизнес для Вас. </p>
                <div class="text-center pad-20">
                    <div class="col-xs-6 col-sm-4 col-md-2 item">
                        <div>
                            <a href="/individual/analysis">
                                <div class="images analisis"></div>
                                {{--<img src="/images/ico/services/analisis-new.png" alt="analisis">--}}
                                <p>Анализ</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 item">
                        <div>
                            <a href="/individual/planning">
                                <div class="images planning"></div>
                                {{--<img src="/images/ico/services/planning-new.png" alt="planning">--}}
                                <p>Планирование</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 item">
                        <div>
                            <a href="/individual/design">
                                <div class="images design"></div>
                                {{--<img src="/images/ico/services/design-new.png" alt="design">--}}
                                <p>Дизайн</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 item">
                        <div>
                            <a href="/individual/development">
                                <div class="images development"></div>
                                {{--<img src="/images/ico/services/projection-new.png" alt="projection">--}}
                                <p>Проектирование</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 item">
                        <div>
                            <a href="/individual/production">
                                <div class="images production"></div>
                                {{--<img src="/images/ico/services/production-new.png" alt="production">--}}
                                <p>Производство</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 item">
                        <div>
                            <a href="/individual/promotion">
                                <div class="images promotion"></div>
                                {{--<img src="/images/ico/services/promotion-new.png" alt="promotion">--}}
                                <p>Продвижение</p>
                            </a>
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
