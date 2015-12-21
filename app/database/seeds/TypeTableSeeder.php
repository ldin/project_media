<?php

class TypeTableSeeder extends Seeder {

  public function run()
  {
    DB::table('types')->delete();
    DB::table('types')->insert(array(
      array( 'type' => 'page', 'name'=>'Страница', 'status'=>'0', 'template'=>'page' ),
      array( 'type' => 'news', 'name'=>'Новости', 'status'=>'0', 'template'=>'page'),
      array( 'type' => 'contacts', 'name'=>'Контакты', 'status'=>'0', 'template'=>'page'),
      array( 'type' => 'services', 'name'=>'Сервисы', 'status'=>'1', 'template'=>'page'),

//      array( 'type' => 'analysis', 'name'=>'Анализ', 'status'=>'1', 'template'=>'page'),
//      array( 'type' => 'planning', 'name'=>'Планирование', 'status'=>'1', 'template'=>'page'),
//      array( 'type' => 'design', 'name'=>'Дизайн', 'status'=>'1', 'template'=>'page'),
//      array( 'type' => 'development', 'name'=>'Проектирование', 'status'=>'1', 'template'=>'page'),
//      array( 'type' => 'production', 'name'=>'Производство', 'status'=>'1', 'template'=>'page'),
//      array( 'type' => 'promotion', 'name'=>'Продвижение', 'status'=>'1', 'template'=>'page'),

    ));

  }

}

//заполнить базу:
//php artisan db:seed --class=TypeTableSeeder

