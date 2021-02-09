<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c) Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\Measure;

use PhpUnitsOfMeasure\PhysicalQuantity\Length;
use PhpUnitsOfMeasure\PhysicalQuantity\Mass;
use PhpUnitsOfMeasure\PhysicalQuantity\Temperature;
use PhpUnitsOfMeasure\PhysicalQuantity\Time;
use PhpUnitsOfMeasure\PhysicalQuantity\Volume;

use Arikaim\Core\Extension\Module;

/**
 * Measure module class
 */
class Measure extends Module
{
    /**
     * Constructor
     */
    public function __construct()
    {       
    }  

    /**
     * Create Length
     *
     * @param mixed $value
     * @param string $unit
     * @return PhysicalQuantityInterface
     */
    public function createLength($value, string $unit = 'feet')
    {
        return new Length($value,$unit);
    }

    /**
     * Create Mass
     *
     * @param mixed $value
     * @param string $unit
     * @return PhysicalQuantityInterface
     */
    public function createMass($value, string $unit)
    {
        return new Mass($value,$unit);
    }
    
    /**
     * Convert mass
     *
     * @param mixed $value
     * @param string $unit
     * @param string $toUnit
     * @return mixed
     */
    public function convertMass($value, string $unit, string $toUnit)
    {
        $mass = $this->createMass($value,$unit);
    
        return $mass->toUnit($toUnit);
    }

    /**
     * Create temperature
     *
     * @param mixed $value
     * @param string $unit
     * @return PhysicalQuantityInterface
     */
    public function createTemperature($value, string $unit)
    {
        return new Temperature($value,$unit);
    }

    /**
     * Create time
     *
     * @param mixed $value
     * @param string $unit
     * @return Time
     */
    public function createTime($value, string $unit)
    {
        return new Time($value,$unit);
    }

    /**
     * Create volume
     *
     * @param mixed $value
     * @param string $unit
     * @return Volume
     */
    public function createVolume($value, string $unit)
    {
        return new Volume($value,$unit);
    }
}
