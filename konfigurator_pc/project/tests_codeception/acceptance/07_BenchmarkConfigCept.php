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

$I->amOnPage('/config/4');

$I->seeCurrentUrlEquals('/config/4');

$I->click("Benchmark");

$I->seeCurrentUrlEquals('/config/4/benchmark');

$I->click('Create new...');

$I->fillField('value', 1337);

$I->click('Create', 'button');

$I->seeCurrentUrlEquals('/config/4/benchmark');

$I->see('Benchmark for this cfg: 1337');

$I->click('Edit...');

$I->seeInField('value',1337);

$I->fillField('value', 'kupa');

$I->click('Update');

$I->see('The value must be an integer.','li');

$I->seeInField('value',1337);

$I->fillField('value', 13371);

$I->click('Update');

$I->dontSee('The value must be an integer.','li');

$I->see('Benchmark for this cfg: 13371');

$I->click('Delete');

$I->see('No benchmark in database.');




