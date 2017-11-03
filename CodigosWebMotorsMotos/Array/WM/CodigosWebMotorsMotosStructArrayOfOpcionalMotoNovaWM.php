<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM originally named ArrayOfOpcionalMotoNovaWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The OpcionalMotoNovaWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructOpcionalMotoNovaWM
     */
    public $OpcionalMotoNovaWM;
    /**
     * Constructor method for ArrayOfOpcionalMotoNovaWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructOpcionalMotoNovaWM $_opcionalMotoNovaWM
     * @return CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM
     */
    public function __construct($_opcionalMotoNovaWM = NULL)
    {
        parent::__construct(array('OpcionalMotoNovaWM'=>$_opcionalMotoNovaWM),false);
    }
    /**
     * Get OpcionalMotoNovaWM value
     * @return CodigosWebMotorsMotosStructOpcionalMotoNovaWM|null
     */
    public function getOpcionalMotoNovaWM()
    {
        return $this->OpcionalMotoNovaWM;
    }
    /**
     * Set OpcionalMotoNovaWM value
     * @param CodigosWebMotorsMotosStructOpcionalMotoNovaWM $_opcionalMotoNovaWM the OpcionalMotoNovaWM
     * @return CodigosWebMotorsMotosStructOpcionalMotoNovaWM
     */
    public function setOpcionalMotoNovaWM($_opcionalMotoNovaWM)
    {
        return ($this->OpcionalMotoNovaWM = $_opcionalMotoNovaWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructOpcionalMotoNovaWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructOpcionalMotoNovaWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructOpcionalMotoNovaWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructOpcionalMotoNovaWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructOpcionalMotoNovaWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string OpcionalMotoNovaWM
     */
    public function getAttributeName()
    {
        return 'OpcionalMotoNovaWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM
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
