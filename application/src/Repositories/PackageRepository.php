<?php

/**
 * An example Repository for the package.
 * Feel free to create more repositories.
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */

namespace Package\Application\Repositories;

use Package\Application\Interfaces\PackageInterface;
use Package\Application\Models\PackageModel;

class PackageRepository implements PackageInterface {

    public function getArray() {
        $list = array(
            '1' => 'John',
            '2' => 'Rambo'
        );
        return $list;
    }

    public function fetchFromDb() {
        return PackageModel::all();
    }

}
