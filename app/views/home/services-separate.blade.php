@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'') }}
@stop

@section('header')
@stop

@section('content')

    <section id="services-page">
			<article id="slider" data-type="background" data-speed="10" class="pages">
				<hr class="angle">
				<div class="container">
					<div class="col-xs-12 col-sm-3">
						<img src="/images/logo-200x170.png" alt="logo happer" class="logo">

					</div>
					<div class="col-xs-12 col-sm-9 text-center">
						<p class="h1">Услуги</p>
						<p class="h3">happer media</p>
					</div>
				</div>

			</article>
            <hr class="angle-invert" >
            <article id="complex-trigger">
                <div class="container text-center pad-50">
                    <div>
                        <p>
                            <a href="/services" >Комплексные услуги</a>
                            <i class="complex-only x-only"></i>
                            <a href="/services/separate" class="dark">Отдельные услуги</a>
                        </p>
                    </div>
                </div>
            </article>

            <article id="" class="paper pad-b100">
                <hr class="angle" >
                <div class="container">
                    <h2>Бизнесс Онлайн</h2>

                    <p></p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <h3>Задачи в рамках раздела</h3>
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
                        <div class="col-xs-12 col-sm-4">
                            <h3>Результат</h3>
                            <p>отчет с заключениями, предложения по стратегии коммуникации</p>
                            <h3>Методы</h3>
                            <div class="col-xs12">
                                <ul>
                                    <div class="col-xs-6">
                                        <li><i class="complex society"></i>Мониторинг рынка</li>
                                        <li><i class="complex internal"></i>Опрос потенциальных клиентов</li>
                                        <li><i class="complex media"></i>Экспертные заключения</li>
                                    </div>
                                    <div class="col-xs-6">
                                        <li><i class="complex online"></i>Опрос конкурентов</li>
                                        <li><i class="complex revenue"></i>Анализ открытых данных</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <h3>Вы получите</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </article>

        <article id="" class="pad-b100">
            <hr class="angle gray" >
            <div class="container">
                <h2>Бизнесс Онлайн</h2>

                <p></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <h3>Задачи в рамках раздела</h3>
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
                    <div class="col-xs-12 col-sm-4">
                        <h3>Результат</h3>
                        <p>отчет с заключениями, предложения по стратегии коммуникации</p>
                        <h3>Методы</h3>
                        <div class="col-xs12">
                            <ul>
                                <div class="col-xs-6">
                                    <li><i class="complex society"></i>Мониторинг рынка</li>
                                    <li><i class="complex internal"></i>Опрос потенциальных клиентов</li>
                                    <li><i class="complex media"></i>Экспертные заключения</li>
                                </div>
                                <div class="col-xs-6">
                                    <li><i class="complex online"></i>Опрос конкурентов</li>
                                    <li><i class="complex revenue"></i>Анализ открытых данных</li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h3>Вы получите</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </article>
    </section>

@stop


@section('scripts')

@stop
