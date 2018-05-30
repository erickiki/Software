<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoriaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegistroNuevaCategoria()
    {
        $this->visit('/almacen/categoria/create')
            ->type('categoria', 'nombre')
            ->type('descripcion', 'descripcion')
            ->press('guardar')
            ->seePageIs('/dashboard');
    }
}
