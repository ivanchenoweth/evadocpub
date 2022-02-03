<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        
        $this->call(PerfilUserSeeder::class);
        $this->call(PeriodosSeeder::class);
        $this->call(TipodependenciasSeeder::class);
        $this->call(DependenciasSeeder::class);
        $this->call(UnidadesSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(UsersSeeder::class);        
        $this->call(EvaluadoresSeeder::class);         
        $this->call(EvaluadosSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(TipoPlazaSeeder::class);
        $this->call(PlazasSeeder::class);
        $this->call(EscolaridadSeeder::class);
        $this->call(TipoEmpleadoSeeder::class);
        $this->call(SindicalizadoSeeder::class);
        $this->call(EstatusPlazaSeeder::class);
        $this->call(VacanteSeeder::class);
        $this->call(RecursosPlazaSeeder::class);
        $this->call(PuestoOficialSeeder::class);
        $this->call(EstadosSeeder::class);
        $this->call(MunicipiosSeeder::class);         
        $this->call(EmpleadosSeeder::class);
        $this->call(PlantillaRHSeeder::class);
        $this->call(FormatoDAPSeeder::class);
    }
}