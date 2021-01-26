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

$I->seeCurrentUrlMatches('~^/components/mbd/select\w*~');

$I->click('Pick');

$I->click('Graphics card');

$I->seeCurrentUrlMatches('~^/components/gpu/select\w*~');

$I->click('Pick');

$I->click('CPU');

$I->seeCurrentUrlMatches('~^/components/cpu/select\w*~');

$I->click('Pick');

$I->click('Case');

$I->seeCurrentUrlMatches('~^/components/pccase/select\w*~');

$I->click('Pick');


$I->click('Drive');

$I->seeCurrentUrlMatches('~^/components/drive/select\w*~');

$I->click('Pick');

$I->click('Power supply');

$I->seeCurrentUrlMatches('~^/components/psu/select\w*~');

$I->click('Pick');


$I->click('RAM');

$I->seeCurrentUrlMatches('~^/components/ram/select\w*~');

$I->click('Pick');


$I->click('Cooling');

$I->seeCurrentUrlMatches('~^/components/cooling/select\w*~');

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

$I->see("Private");


