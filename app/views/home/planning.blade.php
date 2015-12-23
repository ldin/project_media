@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'Asafov design') }}
@stop

@section('header')
@stop

@section('content')
    <section id="mainpage" data-type="background" data-speed="5" class="block-slide pages">
        <div class="buffer-page"></div>
        <div id="content-services" class="content-page">

            <div class="container">

                @if(isset($posts)&&count($posts)>0)
                        <!--
            <div class="col-xs-12 col-sm-2" id="menu-style">
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
                    -->
                @endif

                <div class="col-xs-12">



                    @if(empty($row) && !empty($type->text) )
                        {{ $type->text }}
                    @elseif(empty($row))
                        <?php if(!$row){$row = $posts[0];} ?>
                    @endif

                    @if(!empty($row))
                        @if(!empty($row->image))
                            {{ HTML::image($row->image, '') }}
                            {{ $row->text }}
                        @else
                            <div class="col-xs-12">
                                {{ $row->text }}
                            </div>

                        @endif

                    @endif

                </div>



            </div>

        </div>
        <div class="buffer-page"></div>
    </section>

@stop


@section('scripts')

@stop
