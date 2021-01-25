<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('login with existing user');

$I->amOnPage('/user/1');

$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');

$I->click('Login','button');

$I->seeCurrentUrlEquals('/user/1');

$I->see('John Doe');
$I->see("You're logged in!");
