<?php

use App\Treno;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = new Treno();
        $data->azienda = "italo";
       
        $data->save();
    }
}
