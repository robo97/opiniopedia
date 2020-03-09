<?php namespace RoBotron\Opiniopedia\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Pedia Back-end Controller
 */
class Pedia extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RoBotron.Opiniopedia', 'opiniopedia', 'pedia');
    }
}
  
