<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
            'nombre'=>'Não Perco Meu Tempo ',
            'autor'=>'Annita'
        ]);
        DB::table('libro')->insert([
            'nombre'=>'Paradinha',
            'autor'=>'Annita'
        ]);
        //
    }
}
