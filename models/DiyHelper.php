<?php


namespace app\models;

use yii\helpers\BaseArrayHelper;

class DiyHelper extends BaseArrayHelper
{
    public function dd($data)
    {
        echo json_encode($data,JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    }
}