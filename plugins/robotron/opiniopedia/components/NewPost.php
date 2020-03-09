<?php namespace RoBotron\Opiniopedia\Components;

use Cms\Classes\ComponentBase;
use Db;

class NewPost extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'newPost Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onNewPost(){
      $data = request()->only([
        'categories',
        'questions'
      ]);
      Db::table('robotron_opiniopedia_opinios')->insert($data);
    }

    public function defineProperties()
    {
        return [];
    }
}
