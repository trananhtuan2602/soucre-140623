<?php 
namespace App\Service\Map;

class Map
{
    protected $mi = 'DEP TRAI';
    public function findAddress(string $address)
    {
        return [];
    }
    public function getName()
    {
        return $this->mi;
    }
}

?>