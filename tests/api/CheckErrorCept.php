<?php 
$I = new ApiTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/');
$I->see('Laravel');

$I->sendGET('/');
$I->seeResponseCodeIs(200);
