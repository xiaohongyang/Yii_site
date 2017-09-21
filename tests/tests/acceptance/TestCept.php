<?php

use \yii\helpers\Url;

$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage(Url::toRoute(['/site/public/login']));
