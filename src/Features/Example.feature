Feature: Visit Yandex and search Behat

  Scenario: Run a search for Behat
    Given I am on "http://ya.ru"
    And wait 1 second
    When I fill in "text" with "Behat"
    And click "Найти"
    And wait 1 second
    Then I should see "Behat — a php framework for autotesting your business..." in the "body > div.main.serp.i-bem.main_js_inited.serp_js_inited > div.main__center > div.main__content > div.content.i-bem.content_js_inited > div.content__left > ul > li:nth-child(2) > div > h2 > a > div.organic__url-text" element

