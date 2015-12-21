<?php

class PostTableSeeder extends Seeder {

  public function run()
  {
//    DB::table('posts')->delete();
    DB::table('posts')->insert(array(
      array( 'slug' => 'analysis', 'name'=>'Анализ', 'status'=>'1', 'type_id'=>'4'),
      array( 'slug' => 'planning', 'name'=>'Планирование', 'status'=>'1', 'type_id'=>'4'),
      array( 'slug' => 'design', 'name'=>'Дизайн', 'status'=>'1', 'type_id'=>'4'),
      array( 'slug' => 'development', 'name'=>'Проектирование', 'status'=>'1', 'type_id'=>'4'),
      array( 'slug' => 'production', 'name'=>'Производство', 'status'=>'1', 'type_id'=>'4'),
      array( 'slug' => 'promotion', 'name'=>'Продвижение', 'status'=>'1', 'type_id'=>'4'),
    ));

  }

}

//заполнить базу:
//php artisan db:seed --class=PostTableSeeder

