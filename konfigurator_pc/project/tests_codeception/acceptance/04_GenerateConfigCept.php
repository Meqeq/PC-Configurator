<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('generate pc config');

$I->amOnPage('/');

$I->click('SHOW');

//$I->executeJS('document.getElementById("priceRage").value=800;');
//$I->seeCurrentUrlEquals('/config/generated/800');
$I->seeCurrentUrlMatches('~^/config/generated/\d+~');

$I->see("Generated config");
