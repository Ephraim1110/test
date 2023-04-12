<?php

namespace MonVendeur;

/**
 * Ceci est un commentaire de méthode.
 */
class Validateur
{
    public function check($input)
    {
        if (strlen($input) < 2) {
            return false;
        } else {
            return true;
        }
    }
}
