<?php 
namespace App\Service\Geolocation;

use App\Service\Map\Map;
use App\Service\Satellite\Satellite;
class Geolocation
{
    /** 
    * @var Map
    */
    private $map;
     /** 
    * @var Satellite
    */
    private $satellite;
    public function __construct(Map $map, Satellite $satellite)
    {
         $this->map = $map;
         $this->satellite = $satellite;
    }
    public function FunctionName()
    {

        return $this->map->getName() .' '. $this->satellite->getName();
    }
    public function search(string $name)
    {
    
        // $location = $this->map->findAddress($name);

        return $this->satellite->pinpoint($name);
    }
}

?>