<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM originally named ArrayOfOpcionalMotoUsadaWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The OpcionalMotoUsadaWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructOpcionalMotoUsadaWM
     */
    public $OpcionalMotoUsadaWM;
    /**
     * Constructor method for ArrayOfOpcionalMotoUsadaWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructOpcionalMotoUsadaWM $_opcionalMotoUsadaWM
     * @return CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM
     */
    public function __construct($_opcionalMotoUsadaWM = NULL)
    {
        parent::__construct(array('OpcionalMotoUsadaWM'=>$_opcionalMotoUsadaWM),false);
    }
    /**
     * Get OpcionalMotoUsadaWM value
     * @return CodigosWebMotorsMotosStructOpcionalMotoUsadaWM|null
     */
    public function getOpcionalMotoUsadaWM()
    {
        return $this->OpcionalMotoUsadaWM;
    }
    /**
     * Set OpcionalMotoUsadaWM value
     * @param CodigosWebMotorsMotosStructOpcionalMotoUsadaWM $_opcionalMotoUsadaWM the OpcionalMotoUsadaWM
     * @return CodigosWebMotorsMotosStructOpcionalMotoUsadaWM
     */
    public function setOpcionalMotoUsadaWM($_opcionalMotoUsadaWM)
    {
        return ($this->OpcionalMotoUsadaWM = $_opcionalMotoUsadaWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructOpcionalMotoUsadaWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructOpcionalMotoUsadaWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructOpcionalMotoUsadaWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructOpcionalMotoUsadaWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructOpcionalMotoUsadaWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string OpcionalMotoUsadaWM
     */
    public function getAttributeName()
    {
        return 'OpcionalMotoUsadaWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM
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
