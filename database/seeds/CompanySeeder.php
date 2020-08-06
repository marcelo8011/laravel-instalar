<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = array(
            array('nombre'=>'BMVV', 'telefono'=>'987654321', 'email'=>'info@bmvv.com', 'direccion'=>'Riobamba'),
        );
        DB::table('companies')->insert($records);//
    }
}
