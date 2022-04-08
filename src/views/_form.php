<?php

use yii\helpers\Html;

echo Html::beginForm('', 'post', $options);
echo Html::hiddenInput('excelReportAction', 1);
echo Html::submitButton('<i class="glyphicon glyphicon-export"></i> ' . Yii::t('customit', 'Create Excel'), ['class' => 'btn btn-info']);
echo Html::endForm();