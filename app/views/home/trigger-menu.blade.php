<article id="complex-trigger">
    <div class="container text-center pad-50">
        <div>
            <p>
                <a href="/services"  class="{{ (Request::is('services'))?'active':'' }}">Комплексные услуги</a>
                <i class="complex-only {{ (Request::is('services'))?'x-complex':'x-only' }} "></i>
                <a href="/individual" class="{{ (Request::is('individual'))?'active':'' }}">Отдельные услуги</a>
            </p>
        </div>
        <div>
            <div class="col-xs-12 col-sm-6">
                <ul class="text-right list-empty {{ (Request::is('services'))?'active':'' }} ">
                    @if(!empty($posts['services']))
                        @foreach($posts['services'] as $post)
                            <li>{{ HTML::link('/services#'.$post->slug, $post->name, array('class'=>'soft')) }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <ul class="text-left list-empty {{ (Request::is('individual'))?'active':'' }} ">
                    <?php //var_dump($posts); ?>
                    @if(!empty($posts['individual']))
                        @foreach($posts['individual'] as $post)
                                <li>{{ HTML::link('/individual#'.$post->slug, $post->name, array('class'=>'soft')) }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</article>
