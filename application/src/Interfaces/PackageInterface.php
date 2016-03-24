<?php

/**
 * An example Interface for your package Repositories.
 * Feel free to create more interfaces.
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */

namespace Package\Application\Interfaces;

interface PackageInterface {

    public function getArray();

    public function fetchFromDb();
}
