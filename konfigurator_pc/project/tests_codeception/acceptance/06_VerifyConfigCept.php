<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Check config verify');

$I->amOnPage('/login');

$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'admin31337@gmail.com');
$I->fillField('password', 'toor');

$I->click('Login','button');

$I->seeCurrentUrlEquals('/');

$I->click("Browse configs");

$I->seeCurrentUrlEquals('/config');

$I->amOnPage('/config/1');

$I->seeCurrentUrlEquals('/config/1');

$I->click("Verify");

$I->see("Verified");

$I->seeCurrentUrlEquals('/config/1');

$I->click("Unverify");

$I->dontSee("Verify",'text-justify py-2');
