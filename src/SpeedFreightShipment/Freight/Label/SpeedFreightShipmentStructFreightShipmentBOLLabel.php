<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentBOLLabel
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentBOLLabel originally named FreightShipmentBOLLabel
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentBOLLabel extends SpeedFreightShipmentWsdlClass
{
    /**
     * The base64BOLLabel
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $base64BOLLabel;
    /**
     * Constructor method for FreightShipmentBOLLabel
     * @see parent::__construct()
     * @param string $_base64BOLLabel
     * @return SpeedFreightShipmentStructFreightShipmentBOLLabel
     */
    public function __construct($_base64BOLLabel = NULL)
    {
        parent::__construct(array('base64BOLLabel'=>$_base64BOLLabel),false);
    }
    /**
     * Get base64BOLLabel value
     * @return string|null
     */
    public function getBase64BOLLabel()
    {
        return $this->base64BOLLabel;
    }
    /**
     * Set base64BOLLabel value
     * @param string $_base64BOLLabel the base64BOLLabel
     * @return string
     */
    public function setBase64BOLLabel($_base64BOLLabel)
    {
        return ($this->base64BOLLabel = $_base64BOLLabel);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentBOLLabel
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
