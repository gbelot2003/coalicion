<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class UserLoginTest extends DuskTestCase
{
    use DatabaseTransactions;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'Gerardo')
                ->type('email', 'gbelot@matt.com')
                ->type('password', 'test01')
                ->type('password_confirmation', 'test01')
                ->press('Register')
                ->assertSee('An email with a confirmation token has been send');
        });

        User::truncate();
    }
}
