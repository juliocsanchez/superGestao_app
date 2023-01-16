<?php

use Illuminate\Database\Seeder;
use App\SiteContact;

class SiteContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(SiteContact::class,50)->create();
    }
}
