<?php
namespace backend\views\components;

use yii\base\Widget;
/**
 * Created by PhpStorm.
 * User: Ivany
 * Date: 28.03.2018
 * Time: 14:48
 */
class RightMenu extends Widget
{

  public  function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
       return $this->render('right_menu');
    }
}