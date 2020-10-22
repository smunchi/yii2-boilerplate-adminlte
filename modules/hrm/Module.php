<?php

namespace app\modules\hrm;

/**
 * hrm module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\hrm\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        $this->modules = [
            'stock' => [
                'class' => 'app\modules\hrm\stock\Module'
            ],
            'setting' => [
                'class' => 'app\modules\hrm\setting\Module'
            ]
        ];

        // custom initialization code goes here
    }
}
