<?php namespace RoBotron\Opiniopedia\Components;

use Cms\Classes\ComponentBase;

use Model;
use RoBotron\opiniopedia\models\Opinio;

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
      Opinio::create($data);
    }

    public function defineProperties()
    {
        return [];
    }
}
