<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Test components filtering options');

$I->amOnPage('/components/mbd/select');

$I->see("Gigabyte", ".name");
$I->see("MSI", ".name");
$I->see("AsRock", ".name");
$I->see("Asus", ".name");

$I->checkOption("Gigabyte");
$I->click("Filter");

$I->see("Gigabyte", ".name");
$I->dontSee("MSI", ".name");
$I->dontSee("AsRock", ".name");
$I->dontSee("Asus", ".name");

$I->checkOption("MSI");
$I->click("Filter");

$I->see("Gigabyte", ".name");
$I->see("MSI", ".name");
$I->dontSee("AsRock", ".name");
$I->dontSee("Asus", ".name");

$I->unCheckOption("Gigabyte");
$I->checkOption("Asus");
$I->click("Filter");

$I->dontSee("Gigabyte", ".name");
$I->see("MSI", ".name");
$I->dontSee("AsRock", ".name");
$I->see("Asus", ".name");



