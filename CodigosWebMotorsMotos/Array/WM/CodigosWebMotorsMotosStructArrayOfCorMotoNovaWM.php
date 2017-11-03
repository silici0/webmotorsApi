<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM originally named ArrayOfCorMotoNovaWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The CorMotoNovaWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructCorMotoNovaWM
     */
    public $CorMotoNovaWM;
    /**
     * Constructor method for ArrayOfCorMotoNovaWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructCorMotoNovaWM $_corMotoNovaWM
     * @return CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM
     */
    public function __construct($_corMotoNovaWM = NULL)
    {
        parent::__construct(array('CorMotoNovaWM'=>$_corMotoNovaWM),false);
    }
    /**
     * Get CorMotoNovaWM value
     * @return CodigosWebMotorsMotosStructCorMotoNovaWM|null
     */
    public function getCorMotoNovaWM()
    {
        return $this->CorMotoNovaWM;
    }
    /**
     * Set CorMotoNovaWM value
     * @param CodigosWebMotorsMotosStructCorMotoNovaWM $_corMotoNovaWM the CorMotoNovaWM
     * @return CodigosWebMotorsMotosStructCorMotoNovaWM
     */
    public function setCorMotoNovaWM($_corMotoNovaWM)
    {
        return ($this->CorMotoNovaWM = $_corMotoNovaWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructCorMotoNovaWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructCorMotoNovaWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructCorMotoNovaWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructCorMotoNovaWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructCorMotoNovaWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string CorMotoNovaWM
     */
    public function getAttributeName()
    {
        return 'CorMotoNovaWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM
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
