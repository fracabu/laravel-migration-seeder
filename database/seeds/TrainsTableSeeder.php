<?php
use App\Treno;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
