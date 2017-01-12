<?php
/**
 * File for class SpeedFreightShipmentStructVoidSpeedFreightShipment
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructVoidSpeedFreightShipment originally named voidSpeedFreightShipment
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructVoidSpeedFreightShipment extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentVoidRequest
     * @var SpeedFreightShipmentStructFreightShipmentVoidRequest
     */
    public $freightShipmentVoidRequest;
    /**
     * Constructor method for voidSpeedFreightShipment
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentVoidRequest $_freightShipmentVoidRequest
     * @return SpeedFreightShipmentStructVoidSpeedFreightShipment
     */
    public function __construct($_freightShipmentVoidRequest = NULL)
    {
        parent::__construct(array('freightShipmentVoidRequest'=>$_freightShipmentVoidRequest),false);
    }
    /**
     * Get freightShipmentVoidRequest value
     * @return SpeedFreightShipmentStructFreightShipmentVoidRequest|null
     */
    public function getFreightShipmentVoidRequest()
    {
        return $this->freightShipmentVoidRequest;
    }
    /**
     * Set freightShipmentVoidRequest value
     * @param SpeedFreightShipmentStructFreightShipmentVoidRequest $_freightShipmentVoidRequest the freightShipmentVoidRequest
     * @return SpeedFreightShipmentStructFreightShipmentVoidRequest
     */
    public function setFreightShipmentVoidRequest($_freightShipmentVoidRequest)
    {
        return ($this->freightShipmentVoidRequest = $_freightShipmentVoidRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructVoidSpeedFreightShipment
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
