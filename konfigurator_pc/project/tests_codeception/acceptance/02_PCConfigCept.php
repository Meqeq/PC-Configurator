<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Browse, create and see configs');

$I->amOnPage('/');
$I->see('Browse');

$I->click('Browse');
$I->seeCurrentUrlEquals('/config');
$I->see('List of PC configurations');
$I->see('Create new...');

$I->click('Create new...');
$I->seeCurrentUrlEquals('/login');
$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login','button');

$I->seeCurrentUrlEquals('/config/create');
$I->fillField('title', 'My conifg');
$I->fillField('desc', 'This is a very interesting config with lots of potential.');
$I->click('Create');
$I->seeCurrentUrlEquals('/config/create');

$I->click('Motherboard');
$I->click('Pick');
$I->click('Graphics card');
$I->click('Pick');
$I->click('CPU');
$I->click('Pick');
$I->click('Case');
$I->click('Pick');
$I->click('Drive');
$I->click('Pick');
$I->click('Power supply');
$I->click('Pick');
$I->click('RAM');
$I->click('Pick');
$I->click('Cooling');
$I->click('Pick');

$I->fillField('title', 'My conifg');
$I->fillField('desc', 'This is a very interesting config with lots of potential.');

$I->click('Create new PC configuration');
$I->seeCurrentUrlMatches('~^/config/\d+~');
$I->see('My conifg');

$I->see("Edit");
$I->see("DELETE");
$I->see("Share");
$I->see("Publish");

$I->see("This config is private");


