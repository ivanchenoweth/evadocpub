<?php

namespace Tests\Unit\Models;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

use App\Models\User;
use App\Models\PerfilUser;

class UserTest extends TestCase
{
    public function test_a_user_has_many_evaluadores()
    {
        $user = new User;
        $this->assertInstanceOf(Collection::class, $user->evaluadores);        
    }    
    public function test_a_user_has_many_perfil_user()
    {
        $user = new User;
        $this->assertInstanceOf(Collection::class, $user->perfilUser);
    }    
}
