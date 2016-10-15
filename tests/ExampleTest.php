<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /* Check if the links in the navbar is working */
    public function testNavigation()
    {
        $this->visit('/')
            ->click('Cart')
            ->seePageIs('/cart');
    }

    /* Check if the ticket info is successfully submitted to the cart page */
    public function testSubmitToCart()
    {
        $this->visit('/movies')
            ->select('2', 'childticket')
            ->press('Add to cart')
            ->seePageIs('/movies');
    }

    /* Check if the database is working properly */
    public function testDatabase()
    {
        $this->seeInDatabase('users', ['email' => 'zuc0001@live.com']);
    }
}