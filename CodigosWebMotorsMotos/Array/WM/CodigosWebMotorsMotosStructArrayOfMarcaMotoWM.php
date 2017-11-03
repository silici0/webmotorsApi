<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfMarcaMotoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfMarcaMotoWM originally named ArrayOfMarcaMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfMarcaMotoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The MarcaMotoWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructMarcaMotoWM
     */
    public $MarcaMotoWM;
    /**
     * Constructor method for ArrayOfMarcaMotoWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructMarcaMotoWM $_marcaMotoWM
     * @return CodigosWebMotorsMotosStructArrayOfMarcaMotoWM
     */
    public function __construct($_marcaMotoWM = NULL)
    {
        parent::__construct(array('MarcaMotoWM'=>$_marcaMotoWM),false);
    }
    /**
     * Get MarcaMotoWM value
     * @return CodigosWebMotorsMotosStructMarcaMotoWM|null
     */
    public function getMarcaMotoWM()
    {
        return $this->MarcaMotoWM;
    }
    /**
     * Set MarcaMotoWM value
     * @param CodigosWebMotorsMotosStructMarcaMotoWM $_marcaMotoWM the MarcaMotoWM
     * @return CodigosWebMotorsMotosStructMarcaMotoWM
     */
    public function setMarcaMotoWM($_marcaMotoWM)
    {
        return ($this->MarcaMotoWM = $_marcaMotoWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructMarcaMotoWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructMarcaMotoWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructMarcaMotoWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructMarcaMotoWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructMarcaMotoWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string MarcaMotoWM
     */
    public function getAttributeName()
    {
        return 'MarcaMotoWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfMarcaMotoWM
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
