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
        $record = array(
            array('name'=>'BMVV', 'telefono'=>'987654321', 'email'=>'info@bmvv.com', 'address'=>'Riobamba')
        );
        DB::table('companies')->insert($records);//
    }
}
