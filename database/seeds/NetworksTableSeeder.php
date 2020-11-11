<?php


use App\Models\Network;
use Illuminate\Database\Seeder;

class NetworksTableSeeder extends Seeder
{

    public function run()
    {
        factory(Network::class, 100)->create();
    }

}
