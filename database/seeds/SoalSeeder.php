<?php

use Illuminate\Database\Seeder;
use App\Models\Soal;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Soal::query()->forceDelete();

        $soals = fopen('./public/assets/file/round2.txt', 'r') or die("Unable to open file!");

        while(!feof($soals))
        {
            $soal =  fgets($soals);
            $soalData = explode('|', $soal);
            Soal::create(array(
                'id'        	=>  $soalData[0],
                'soal'      	=>  $soalData[1],
                'keterangan'    =>  $soalData[2],
                'jawaban'      	=>  $soalData[3],
                'enabled'   	=>  1
            ));
        }
        fclose($soals);
    }
}
