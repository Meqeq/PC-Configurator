<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Test cpu filtering options');

$I->amOnPage('/components/cpu/select');

$I->dontSee("No components");

// Testing radio type filtering

$I->fillField("cores", "4");
$I->click("Filter");

$I->dontSee("6", ".cores");
$I->see("4", ".cores");

$I->fillField("cores", "6");
$I->click("Filter");

$I->see("6", ".cores");
$I->dontSee("4", ".cores");

// Testing checkbox type filtering

$I->amOnPage('/components/cpu/select');

$I->checkOption("AM4");
$I->click("Filter");

$I->dontSee("1200", ".socket");
$I->dontSee("1151", ".socket");
$I->see("AM4", ".socket");

$I->checkOption("1200");
$I->click("Filter");

$I->see("1200", ".socket");
$I->dontSee("1151", ".socket");
$I->see("AM4", ".socket");

$I->checkOption("1151");
$I->uncheckOption("AM4");
$I->click("Filter");

$I->see("1200", ".socket");
$I->see("1151", ".socket");
$I->dontSee("AM4", ".socket");

// Testing range type filtering

$I->amOnPage('/components/cpu/select');

$I->fillField("#frequency_min", 1000);
$I->fillField("#frequency_max", 4000);
$I->click("Filter");

$I->see("2900", ".frequency");
$I->see("3600", ".frequency");

$I->fillField("#frequency_max", 1200);
$I->click("Filter");

$I->dontSee("2900", ".frequency");
$I->dontSee("3600", ".frequency");

$I->fillField("#frequency_min", 2600);
$I->fillField("#frequency_max", 3400);
$I->click("Filter");

$I->see("2900", ".frequency");
$I->dontSee("3600", ".frequency");

// Two ranges filters

$I->amOnPage('/components/cpu/select');

$I->fillField("#price_min", 0);
$I->fillField("#price_max", 10000);
$I->fillField("#frequency_min", 1000);
$I->fillField("#frequency_max", 4000);
$I->click("Filter");

$I->see("Intel Core i5-9400", '.name');
$I->see("AMD Ryzen 5 3600", '.name');
$I->see("Intel Core i5-10400F", ".name");

$I->fillField("#price_min", 720);
$I->fillField("#price_max", 10000);
$I->fillField("#frequency_min", 2800);
$I->fillField("#frequency_max", 3400);
$I->click("Filter");

$I->see("Intel Core i5-9400", '.name');
$I->dontSee("AMD Ryzen 5 3600", '.name');
$I->dontSee("Intel Core i5-10400F", ".name");















