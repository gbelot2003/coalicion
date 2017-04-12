<?php

use App\User;
use Illuminate\Support\Str;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class UserTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function user_register_accept_verify_token()
    {
        // Users have verifyToken and initial status is false
        $rtoken = Str::random(40);

        $user = User::create([
            'name' => 'test1',
            'email' => 'test@test.com',
            'password' => bcrypt('password'),
            'verifyToken' => $rtoken
        ]);

        $token = User::where('name', 'test1')->first();

        $this->assertEquals($token->verifyToken, $rtoken);
        $this->assertEquals($token->status, false);
    }


}