<?php

/**
 * An example Seeder class for the package tables.
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */

namespace Package\Application\database\seeds;

use Illuminate\Database\Seeder;
use \DB;

class PackageTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('packageboilerplate_table')->insert([
            [
                'name' => 'Create'
            ], [
                'name' => 'Delete'
            ], [
                'name' => 'Update'
            ], [
                'name' => 'View'
            ]
        ]);
    }

}
