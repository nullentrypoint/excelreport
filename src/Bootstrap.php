<?php

namespace nullentrypoint\excelreport;

use Yii;
use yii\base\BootstrapInterface;
class Bootstrap implements BootstrapInterface{
    public function bootstrap($app)
    {
        $app->setModule('excelreport', 'nullentrypoint\excelreport\Module');
        Yii::$app->getModule('excelreport')->registerTranslations();
    }
}