<?php 
namespace App\Service\Satellite;

class Satellite
{
    protected $sate = 'Tuan Day';
    public function pinpoint(string $info)
    {
        return $info;
    }
    public function getName()
    {
        return $this->sate;
    }
}

?>