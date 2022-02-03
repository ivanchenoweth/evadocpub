<?php

namespace Tests\Unit\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    
    // non auth user can access home "/"
    public function testuserCanAccessHome()
    {
        //$user = factory(User::class)->create();

        //$response = $this->actingAs($user)->get('/');
        //$response->assertStatus(302);
        //$response = $this->get(route('/'));
        $this->withoutExceptionHandling();
        $response = $this->get(url('/home'));
        //dd($response);
        //$response->assertStatus(302);
        $response->assertOk();
        //$response->assertViewHas(['item_from_view', 'another_item_from_view']);
    }
    /*
    // non auth user can access "/login"
    public function testuserCanAccessLogin()
    {
        $response = $this->get(uri: '/login');        
        $response->assertStatus(302);
    }
    
    // Auth Admin user can access "/home"
    public function testadminuserCanAccess_home()
    {
        $response = $this->get(uri: '/home');        
        //$response->assertStatus(302,"ADMINISTRADOR DEL SISTEMA");
        $response->assertOk();
        $response->assertViewIs(value:"ADMINISTRADOR DEL SISTEMA");
    }
    */
}