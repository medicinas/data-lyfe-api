<?php

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doctor')->delete();
        
        \DB::table('doctor')->insert(array (
            0 => 
            array (
                'doc_email' => 'email@email.com',
                'doc_id' => 1,
                'doc_last_m' => 'Smith',
                'doc_last_p' => 'Smith',
                'doc_localion' => 1,
                'doc_name' => 'John',
                'doc_status' => 'Active',
            ),
        ));
        
        
    }
}