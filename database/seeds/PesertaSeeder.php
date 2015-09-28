<?php

use Illuminate\Database\Seeder;
use App\Models\Peserta;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Peserta::query()->forceDelete();
    	
    	 Peserta::create(array(
    	 		'id'		=> 1,
        		'name'		=>	'Tim Merah',
        		'score'		=>	0,
        		'enabled'	=>	1,
        ));

    	 Peserta::create(array(
    	 		'id'		=> 2,
        		'name'		=>	'Tim Biru',
        		'score'		=>	0,
        		'enabled'	=>	1,
        ));

    	 Peserta::create(array(
    	 		'id'		=> 3,    	 	
        		'name'		=>	'Tim Hijau',
        		'score'		=>	0,
        		'enabled'	=>	1,
        ));

    	 Peserta::create(array(
    	 		'id'		=> 4,    	 	
        		'name'		=>	'Tim Kuning',
        		'score'		=>	0,
        		'enabled'	=>	1,
        ));

    	 Peserta::create(array(
    	 		'id'		=> 5,    	 	
        		'name'		=>	'Tim Abu-abu',
        		'score'		=>	0,
        		'enabled'	=>	1,
        ));                            	 
    }
}
