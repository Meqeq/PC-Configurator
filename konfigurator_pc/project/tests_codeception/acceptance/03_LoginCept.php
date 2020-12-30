<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('login with existing user');

$I->amOnPage('/dashboard');

$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'test@gmail.com');
$I->fillField('password', 'test1234');

$I->click('Login');

$I->seeCurrentUrlEquals('/dashboard');

$I->see('John Doe');
$I->see("You're logged in!");
