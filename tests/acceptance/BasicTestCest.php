<?php

class BasicTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToLoadGoogle(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->waitForText('Google offered in');
    }
}
