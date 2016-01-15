@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'') }}
@stop

@section('header')
@stop

@section('content')

    <div class="container">
        @if(empty($row))
            @if(isset($posts)&&count($posts)>0)
                @foreach($posts as $post)
                    <div class="col-xs-6 col-sm-4 col-md-1-5">
                        <a href="{{'/'.$type->type.'/'.$post->slug}}" >
                        <div class="image">
                            {{ HTML::image('/upload/image/'.$post->image, $post->title)  }}
                        </div>
                        <h3>{{ $post->name }}</h3>
                        </a>
                    </div>
                @endforeach
            @endif
        @endif
    </div>

    <section id="services-page" >
        <div class="buffer-page"></div>

        <div class="container">
            @if(!empty($row) && $row->parent==0)
                <div id="content-services" class="content-page">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>{{ $row->name }}</h1>
                            <div class="text-center">{{ $row->text }}</div>
                        </div>
                    </div>
                    @if(isset($posts_child)&&count($posts_child)>0)
                        <div class="serve-preview row">
                            @foreach($posts_child as $post_ch)

                                <div class="col-xs-6 col-sm-4 col-md-1-5">
                                    <a href="{{'/'.$type->type.'/'.$post_ch->slug}}" >
                                    <div class="image">
                                        {{ HTML::image('/upload/image/'.$post_ch->image, $post_ch->title)  }}
                                    </div>
                                    <h3>{{ $post_ch->name }}</h3>
                                    </a>
                                </div>

                            @endforeach
                        </div>
                    @endif
                    <div class="row btn-block">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 ">
                            <div class="col-xs-12 col-md-6">
                                <a href="#" class="btn btn-main ">Заказать {{ $row->name }}</a>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a href="#" class="btn btn-main">Перезвонить мне</a>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif(!empty($row) && $row->parent!=0)
                <div id="text-services" class="content-page">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2 bg-white">
                            <h1>{{ $row->name }}</h1>
                            <div>{{ $row->text }}</div>
                        </div>
                    </div>
                </div>
            @endif
        </div>



        <div class="buffer-page"></div>
    </section>

@stop


@section('scripts')

@stop
