<?php
/**
 * File for class SpeedFreightShipmentStructVoidSpeedFreightShipmentResponse
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructVoidSpeedFreightShipmentResponse originally named voidSpeedFreightShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructVoidSpeedFreightShipmentResponse extends SpeedFreightShipmentWsdlClass
{
    /**
     * The voidSpeedFreightShipmentReturn
     * @var SpeedFreightShipmentStructFreightShipmentVoidResponse
     */
    public $voidSpeedFreightShipmentReturn;
    /**
     * Constructor method for voidSpeedFreightShipmentResponse
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentVoidResponse $_voidSpeedFreightShipmentReturn
     * @return SpeedFreightShipmentStructVoidSpeedFreightShipmentResponse
     */
    public function __construct($_voidSpeedFreightShipmentReturn = NULL)
    {
        parent::__construct(array('voidSpeedFreightShipmentReturn'=>$_voidSpeedFreightShipmentReturn),false);
    }
    /**
     * Get voidSpeedFreightShipmentReturn value
     * @return SpeedFreightShipmentStructFreightShipmentVoidResponse|null
     */
    public function getVoidSpeedFreightShipmentReturn()
    {
        return $this->voidSpeedFreightShipmentReturn;
    }
    /**
     * Set voidSpeedFreightShipmentReturn value
     * @param SpeedFreightShipmentStructFreightShipmentVoidResponse $_voidSpeedFreightShipmentReturn the voidSpeedFreightShipmentReturn
     * @return SpeedFreightShipmentStructFreightShipmentVoidResponse
     */
    public function setVoidSpeedFreightShipmentReturn($_voidSpeedFreightShipmentReturn)
    {
        return ($this->voidSpeedFreightShipmentReturn = $_voidSpeedFreightShipmentReturn);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructVoidSpeedFreightShipmentResponse
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
