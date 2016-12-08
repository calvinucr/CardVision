<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class SeederTest extends TestCase
{
    public function testUsersTable()
    {
        factory(App\User::class, 50)->create([
            
        ]);
    }
}