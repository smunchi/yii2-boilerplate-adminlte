<?php

namespace app\components;

use yii\base\Component;

class Utils extends Component
{
    public function dateForHuman($time = null)
    {
        if(!$time) {
            return date('F d, Y');
        }

        return date('F d, Y', $time);
    }
}