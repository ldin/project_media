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
                <div class="col-xs-12 text-center">
                    @if(!empty($row))
                        <p class="h1">{{$row->name}}</p>
                    @else
                        <p class="h1">{{ $type->name }}</p>
                        <p class="h3">happer media</p>
                    @endif
                </div>
            </div>

        </article>
        <hr class="angle-invert" >

        @if(empty($row))

            @if(!empty($posts[$type->type]))

                 @foreach($posts[$type->type] as $key=>$post)

                    <article id="{{ $post->slug }}" class="{{$key%2==0?'':'paper'}} pad-b100">
                        @if(!empty($key!=0))<hr class="angle {{($key%2==0)?'gray':''}}" >@endif
                        <div class="container">
                            <h2>{{  $post->name }}</h2>


                            <div class="row text-center">
                                @if(!empty($post->image))
                                    {{ HTML::image('/upload/image/'.$post->image, $post->slug)  }}
                                @endif

                                <p>{{  $post->text }} </p>
                                <div class="text-center">
                                    {{ HTML::link('/'.$type->type.'/'.$post->slug, 'подробнее', array('class'=>'btn btn-main')) }}
                                </div>

                            </div>
                        </div>
                    </article>

                @endforeach

                @if(count($posts[$type->type])%2==0)
                    <hr class="angle gray" >
                @endif

            @endif

        @else


            @if(isset($posts_child)&&count($posts_child)>1)

                <article id="block-communications" class="pad-b100">
                    <hr class="angle" >
                    <div class="container pad-b100">

                        <div id="complex-services" class="row complex-tabs" >
                            <div class="col-xs-12 col-sm-5 col-md-3 block-left">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">

                                    @foreach($posts_child as $k=>$post_ch)
                                        <li role="presentation" class="{{$k==0?'active':''}}">
                                            {{ HTML::link('#'.$post_ch->slug, $post_ch->name, array('aria-controls'=>$post_ch->slug, 'role'=>'tab', 'data-toggle'=>'tab')) }}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                            <div class="col-xs-12 col-sm-7 col-md-9 block-right">
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    @foreach($posts_child as $k=>$post_ch)
                                        <div role="tabpanel" class="tab-pane fade {{$k==0?'in active':''}} " id="{{  $post_ch->slug }}">
                                            <div class="row">
                                                <p class="h2 text-center">{{ $post_ch->name }}</p>
                                                {{ $post_ch->text }}
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                </article>

            @elseif(isset($posts_child)&&count($posts_child)==1)

                <?php $row = $posts_child[0] ?>

                @if(!empty($row->text))
                    <div class="container pad-b100">
                        <div class="row">
                            <div class="col-xs-12">
                                <div>{{ $row->text }}</div>
                            </div>
                        </div>
                    </div>
                @endif

            @else

                <div class="container pad-50">
                    <p>Извините, данная страница сейчас в разработке.</p>
                </div>

            @endif


        @endif

    </section>

@stop


@section('scripts')

@stop
