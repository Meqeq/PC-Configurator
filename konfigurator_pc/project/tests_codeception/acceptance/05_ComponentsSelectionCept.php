<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Test cpu filtering options');

$I->amOnPage('/components/cpu/select');

$I->dontSee("No components");