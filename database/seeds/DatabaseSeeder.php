<?php

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
        $this->call(types_pieces::class);
        $this->call(types_diplomes::class);
        $this->call(Methode::class);
        $this->call(Culture::class);

    }
}
