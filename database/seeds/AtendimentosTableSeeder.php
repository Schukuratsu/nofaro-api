<?php

use App\Atendimento;
use Illuminate\Database\Seeder;

class AtendimentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Atendimento::class, 150)->create();
    }
}
