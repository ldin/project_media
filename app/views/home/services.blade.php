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

            @include('home.trigger-menu')

            <article id="block-communications" class="paper pad-b100">
                <hr class="angle" >
                <div class="container pad-b100">
					<h2>Внешние коммуникации компании</h2>

					<div id="complex-services" class="row complex-tabs" >
						<div class="col-xs-12 col-sm-5 col-md-3 block-left">
							  <!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><i class="complex communications"></i><a href="#сommunication-with-customers" aria-controls="сommunication-with-customers" role="tab" data-toggle="tab">Внешние коммуникации с потребителями</a> <i class="glyphicon glyphicon-menu-right"></i></li>
								<li role="presentation"><i class="complex internal"></i><a href="#communication-with-public" aria-controls="communication-with-public" role="tab" data-toggle="tab">Коммуникации с общественностью</a> <i class="glyphicon glyphicon-menu-right"></i></li>
								<li role="presentation"><i class="complex media"></i><a href="#communication-with-partner" aria-controls="communication-with-partner" role="tab" data-toggle="tab">Коммуникации с партнерами</a>  <i class="glyphicon glyphicon-menu-right"></i></li>
							</ul>
						</div>

						<div class="col-xs-12 col-sm-7 col-md-9 block-right">
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="сommunication-with-customers">
                                    <div class="row">
                                        <p class="h2 text-center"><i class="complex communications"></i>Внешние коммуникации с потребителями</p>
                                        <div class="col-xs-12 col-md-6">
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
                                                <li>Внести предложения по корректировке выявленного ряда недочетов. </li>
                                                <li>Предложить ряд дополнительных мер повышающих лояльность клиента.</li>
                                                <li>Внедрить изменения (по дополнительной договоренности)</li>
                                            </ul>
                                            <h3>Методы:</h3>
                                            <p>Мониторинг рынка посредством специализированных программ, проведение опросов потенциальных/существующих клиентов, проработка конкурентов, привлечение экспертов в изучаемой сфере для составления заключений, анализ открытых данных.</p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <h3>Вы получаете:</h3>
                                            <ul>
                                                <li>Отчет с заключением (до 300 страниц), который включает: сводный анализ, описание тенденций на рынке, список конкурентов, описание предпочтений и ожиданий потребителя, оценку компании по ряду качеств</li>
                                                <li>Отчет об опросе потенциальных клиентов</li>
                                                <li>План исправления недочетов</li>
                                                <li>Предложения о продукции со стороны потребителя</li>
                                                <li>Предложения по стратегии коммуникации с потребителем</li>
                                            </ul>
                                            <h3>Результат:</h3>
                                            <p>Вы получаете подробную инструкцию для изменения или корректировки коммуникации с вашим потенциальным или уже существующим потребителем. Внесенные изменения сделают Вашу компанию более привлекательной для потенциальных клиентов, позволят дольше удерживать существующих клиентов (оправдывая их ожидания),  тем самым поднимут доход компании.</p>
                                            <h3>Стоимость:</h3>
                                            <p>60 000 рублей</p>
                                            <h3>Сроки:</h3>
                                            <p>1 месяц<br>
                                            <small>Сроки зависят от объекта (компании) и могут корректироваться в связи со срочностью.</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="communication-with-public">
                                    <div class="row">
                                        <p class="h2 text-center"><i class="complex internal"></i>Коммуникации с общественностью</p>
                                        <div class="col-xs-12 col-md-6">
                                            <h3>Задачи в рамках раздела:</h3>
                                            <ul>
                                                <li>Анализировать задачи компании</li>
                                                <li>Мониторинг информации о компании и ее руководстве.</li>
                                                <li>Создать описание компании исходя из долгосрочных задач компании.</li>
                                                <li>Выявить лидера мнений в области работы компании.</li>
                                                <li>Провести работу с существующими отзывами и мнениями. </li>
                                                <li>Составить тестовую стратегию коммуникации с общественностью</li>
                                                <li>Оповестить общественность о положительных изменениях или о выходе компании на рынок.</li>
                                                <li>Познакомить общественность с компанией в положительном ключе, подчеркнуть достоинства.</li>
                                                <li>Оповестить о деятельности компании направленной на благо общественности.</li>
                                                <li>Сформировать в информационном поле положительное представление о выпускаемой продукции.</li>
                                                <li>Получить обратную связь с общественностью.</li>
                                                <li>Провести подробный анализ и составить долгосрочную коммуникационную стратегию.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <h3>Вы получаете:</h3>
                                            <ul>
                                                <li>Отчет с заключением (до 300 страниц), который включает: сводный анализ, список  лидеров мнений, блогеров и информационных ресурсов, имеющих отношение к вашей отрасли, отчет о существующих отзывах о компании;</li>
                                                <li>Тексты о компании и руководстве компании;</li>
                                                <li>Отчет о работе с отзывами;</li>
                                                <li>Тестовую стратегию коммуникации с общественностью;</li>
                                                <li>Размещение информации в каталогах, СМИ, блогах и других ресурсах;</li>
                                                <li>Анализ полученной обратной связи;</li>
                                            </ul>
                                            <h3>Результат:</h3>
                                            <p>Создание благоприятного имиджа компании, который, безусловно, расположит к себе ваших клиентов и партнеров, что обеспечит повышение прибыли и долгосрочный рост компании.</p>
                                            <h3>Стоимость:</h3>
                                            <p>80 000 рублей</p>
                                            <p>Оплата за платное размещение информации производится вами самостоятельно, цена зависит от выбранных каналов коммуникации.</p>
                                            <h3>Методы: </h3>
                                            <p>Мониторинг информационной среды посредством специализированных программ, сбор информации внутри компании, привлечение нейрокопирайтеров для составления воздействующих текстов, привлечение журналистов для создания статей, личное общение с лидерами мнений, создание информационных поводов, организация пресс-конференций,  размещение информации в СМИ, проведение опросов потенциальных пользователей/клиентов.</p>
                                            <h3>Сроки:</h3>
                                            <p>1-2 месяц<br>
                                                <small>Сроки зависят от объекта (компании)</small></p>
                                        </div>
                                    </div>
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="communication-with-partner">
                                    <div class="row">
                                        <p class="h2 text-center"><i class="complex media"></i>Коммуникации с партнерами</p>
                                    </div>
                                </div>

							</div>
						</div>
					</div>

				</div>
            </article>
            <hr class="angle-invert" >
            <article id="block-complex">
                    <div class="container pad-b100">
                        <h2>Комплексные решения</h2>
                        <div id="complex-services" class="row complex-tabs">
                            <div class="col-xs-12 col-sm-5 col-md-3 block-left">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><i class="complex communications"></i><a href="#complex-communications" aria-controls="complex-communications" role="tab" data-toggle="tab">Коммуникации с потребителями</a> <i class="glyphicon glyphicon-menu-right"></i></li>
                                    <li role="presentation"><i class="complex society"></i><a href="#complex-society" aria-controls="complex-society" role="tab" data-toggle="tab">Коммуникации с общественностью</a> <i class="glyphicon glyphicon-menu-right"></i></li>
                                    <li role="presentation"><i class="complex internal"></i><a href="#complex-internal" aria-controls="complex-internal" role="tab" data-toggle="tab">Коммуникации с партнерами</a>  <i class="glyphicon glyphicon-menu-right"></i></li>
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

                                </div>
                            </div>
                        </div>
                    </div>
            </article>
            <article id="block-online" class="paper pad-b100">
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
                                <ul class="complex-tabs list-empty ">
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
                            <p>Отчет с заключением (до 300 страниц), который включает: сводный анализ, описание тенденций на рынке, список конкурентов, описание предпочтений и ожиданий потребителя, оценку компании по ряду качеств;
                                -Отчет об опросе потенциальных клиентов;</p>
                            <p class="price">Стоимость: <b>60 000 руб.</b></p>
                            <p>Сроки: <b>1 месяц</b></p>
                            <a href="" class="btn btn-main btn-tabs">Заказать</a>
                        </div>
                    </div>
                </div>
            </article>
            <article id="block-media" class="pad-b100">
                <hr class="angle gray" >
                <div class="container">
                    <h2>Работа со СМИ</h2>

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
                                <ul class="complex-tabs list-empty ">
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
                            <p>Отчет с заключением (до 300 страниц), который включает: сводный анализ, описание тенденций на рынке, список конкурентов, описание предпочтений и ожиданий потребителя, оценку компании по ряду качеств;
                                -Отчет об опросе потенциальных клиентов;</p>
                            <p>Стоимость: <b>60 000 руб.</b></p>
                            <p>Сроки: <b>1 месяц</b></p>
                        </div>
                    </div>
                </div>
            </article>
    </section>

@stop


@section('scripts')

@stop
