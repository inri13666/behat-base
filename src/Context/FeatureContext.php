<?php

namespace Akuma\Context;

use Behat\MinkExtension\Context\RawMinkContext;

class FeatureContext extends RawMinkContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When /^wait (\d+) seconds?$/
     */
    public function waitSeconds($seconds)
    {
        $this->getSession()->wait(1000 * $seconds);
    }

    /**
     * @Given /^click "Найти"$/
     */
    public function click()
    {
        $element = $this->getSession()
            ->getPage()
            ->find('xpath', '//div[contains(@class, "search2__button")]');
        $element->press();
    }
}
