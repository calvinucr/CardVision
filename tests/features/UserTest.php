<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class UserTest extends TestCase
{
    public function testWeSeeRegistersForm()
	{
	    $this->visit('/register')
	        ->see('Contain atleast 5 character')
	        ->press('Register');
	}
}