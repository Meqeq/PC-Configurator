<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Check if compatibile components are shown when creating config');

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

$I->click('Motherboard');

$I->seeCurrentUrlEquals('/components/mbd/select');

$I->see("1200", '.socket');
$I->see('AM4', '.socket');

$I->checkOption("1200");
$I->click("Filter");

$I->see("1200", '.socket');
$I->dontSee('AM4', '.socket');

$I->click("Pick");

$I->seeCurrentUrlEquals('/config/create');

$I->click('CPU');

$I->seeCurrentUrlMatches('~^/components/cpu/select\w*~');

$I->seeCheckboxIsChecked("1200");
$I->dontSeeCheckboxIsChecked("AM4");
$I->see("1200", '.socket');
$I->dontSee('AM4', '.socket');

$I->click('Pick');

$I->seeCurrentUrlEquals('/config/create');

$I->dontSee("CPU is incompatible with Motherboard");

$I->click('CPU');

$I->seeCurrentUrlMatches('~^/components/cpu/select\w*~');
$I->checkOption("AM4");
$I->uncheckOption("1200");
$I->click("Filter");

$I->dontSee("1200", '.socket');
$I->see('AM4', '.socket');

$I->click('Pick');

$I->seeCurrentUrlEquals('/config/create');

$I->see("CPU is incompatible with Motherboard");


