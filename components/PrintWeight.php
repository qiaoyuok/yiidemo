<?php


namespace app\components;

use yii\helpers\Html;

class PrintWeight extends \yii\base\Widget
{
    public $message = null;

    public function init()
    {
        parent::init();
        ob_start();
        echo "哇哈哈";
        if ($this->message === null){
            $this->message = 'hello world';
        }
    }

    public function run()
    {
        echo "萨拉黝黑";
        $content = ob_get_clean();
        return Html::encode($content);
    }
}