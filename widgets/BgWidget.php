<?php
namespace app\widgets;

//use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;
use yii\base\Widget;
use yii\helpers\Html;

class BgWidget extends Widget
{
    public $bgColor='white';
    public function init()
    {
        parent::init();
        ob_start();

    }
    public function run()
    {
        parent::run();
        $output= ob_get_clean();
        return Html::tag('div',$output,[
            'style'=>'background-color: '.$this->bgColor
        ]);
    }
}


?>