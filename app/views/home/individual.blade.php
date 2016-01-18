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
                    <div>
                        <div class="col-xs-12 col-sm-6">
                            <ul class="text-right list-empty">
                                <li>Внешние коммуникации компании</li>
                                <li>Комплексные решения</li>
                                <li>Бизнесс Онлайн</li>
                                <li>Работа со СМИ</li>

                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <ul class="text-left list-empty active">
                                <?php //var_dump($posts); ?>
                                @if(!empty($posts['individual']))
                                    @foreach($posts['individual'] as $post)
                                        <li>{{ HTML::link('#'.$post->slug, $post->name, array('class'=>'soft')) }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            @if(!empty($posts['individual']))

                 @foreach($posts['individual'] as $key=>$post)

                    <article id="{{ $post->slug }}" class="{{$key%2==0?'paper':''}}" pad-b100">
                        <hr class="angle {{$key%2==0?'':'gray'}}" >
                        <div class="container">
                            <h2>{{  $post->name }}</h2>


                            <div class="row text-center">
                                <p>{{  $post->text }}</p>

                            </div>
                        </div>
                    </article>

                @endforeach
            @endif

    </section>

@stop


@section('scripts')

@stop
