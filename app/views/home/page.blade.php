@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'Asafov design') }}
@stop

@section('content')

    <section id="pages">

    <article id="slider" data-type="background" data-speed="10" class="pages">
        <hr class="angle">
        <div class="container">
            <div class="col-xs-12 col-sm-3">
                <img src="/images/logo-200x170.png" alt="logo happer" class="logo">

            </div>
            <div class="col-xs-12 col-sm-9 text-center">
                @if(!empty($row))
                    <p class="h1">{{$row->name}}</p>
                @else
                    <p class="h1">happer media</p>
                @endif
            </div>
        </div>

    </article>

    <hr class="angle-invert" >

    <div id="content" class="container pad-50">

    <div class="row">

        @if(isset($posts)&&count($posts)>0)
            <div id="page-menu" class="col-xs-12 col-lg-2 col-md-3">

                <p class="nav-title {{ (Request::is( $type->type)) ? 'active' : '' }}">
                    {{ HTML::link($type->type, $type->name ) }}
                </p>

                <ul class="menu-page nav nav-pills nav-stacked ">
                    @foreach($posts as $post)
                        <li {{ (Request::is( $type->type.'/'.$post->slug)) || (!empty($row)&&$row->parent==$post->id)? 'class="active"' : '' }} >
                        {{ HTML::link('/'.$type->type.'/'.$post->slug, $post->name) }}
                            
                            @if(isset($posts_child)&&count($posts_child)>0)
                                <ul>
                                    @foreach($posts_child as $post_ch)
                                        @if(($post_ch->parent == $post->id) )
                                            <li {{ (Request::is( $type->type.'/'.$post_ch->slug)) ? 'class="active"' : '' }}>
                                                {{ HTML::link('/'.$type->type.'/'.$post_ch->slug, $post_ch->name) }}
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>

            </div>
        @endif

        <div class="col-xs-12 {{ (isset($posts)&&count($posts)>0)?"col-sm-8 col-lg-offset-1":"col-sm-12"  }} ">


            @if(!empty($row->text))
                {{ $row->text }}
            @endif

            @if(empty($row))
                {{ $type->text }}
            @endif
            
            @if(isset($subcategory)&&count($subcategory)>0)
                @foreach($subcategory as $post)


                    <?php $parts = preg_split('/<div style="page-break-after: always"><span style="display:none">&nbsp;<\/span><\/div>/', $post->text); ?>

                    <div class="block-post row block-news">

                        <div class="col-xs-9 ">
                            <p>{{$post->name}}</p>
                            @if(!empty($post->preview_img))
                                {{ HTML::image($post->preview_img, '') }}
                            @endif

                            {{$post->preview}}
                            <br>
                            <p>{{ HTML::link($type->type.'/'.$post->slug, 'подробнее >>') }}</p>

                        </div>
                        <div class="col-xs-3 ">
                            <p class="data-post">{{ date( 'd.m.Y', strtotime($post->created_at)); }}</p>
                            @if(count($parts)>1)
                                <p><a href="#" class="img-circle circle" onclick="diplay_hide('#parts-{{$post->id}}', this);return false;"><i class="glyphicon glyphicon-menu-down"></i></a></p>
                            @endif
                        </div>

                    </div>
                    <hr>
                @endforeach

                {{ $subcategory->links() }}

            @endif
        </div>



    </div>

    </div>

    </section>
@stop


@section('scripts')

@stop
