<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM originally named ArrayOfCorMotoUsadaWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The CorMotoUsadaWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructCorMotoUsadaWM
     */
    public $CorMotoUsadaWM;
    /**
     * Constructor method for ArrayOfCorMotoUsadaWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructCorMotoUsadaWM $_corMotoUsadaWM
     * @return CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM
     */
    public function __construct($_corMotoUsadaWM = NULL)
    {
        parent::__construct(array('CorMotoUsadaWM'=>$_corMotoUsadaWM),false);
    }
    /**
     * Get CorMotoUsadaWM value
     * @return CodigosWebMotorsMotosStructCorMotoUsadaWM|null
     */
    public function getCorMotoUsadaWM()
    {
        return $this->CorMotoUsadaWM;
    }
    /**
     * Set CorMotoUsadaWM value
     * @param CodigosWebMotorsMotosStructCorMotoUsadaWM $_corMotoUsadaWM the CorMotoUsadaWM
     * @return CodigosWebMotorsMotosStructCorMotoUsadaWM
     */
    public function setCorMotoUsadaWM($_corMotoUsadaWM)
    {
        return ($this->CorMotoUsadaWM = $_corMotoUsadaWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructCorMotoUsadaWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructCorMotoUsadaWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructCorMotoUsadaWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructCorMotoUsadaWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructCorMotoUsadaWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string CorMotoUsadaWM
     */
    public function getAttributeName()
    {
        return 'CorMotoUsadaWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM
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
