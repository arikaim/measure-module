<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c) Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\Oauth;

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
    public function createLength($value, $unit = 'feet')
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
    public function createMass($value, $unit)
    {
        return new Mass($value,$unit);
    }
    
    /**
     * Create temperature
     *
     * @param mixed $value
     * @param string $unit
     * @return PhysicalQuantityInterface
     */
    public function createTemperature($value, $unit)
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
    public function createTime($value, $unit)
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
    public function createVolume($value, $unit)
    {
        return new Volume($value,$unit);
    }
}
