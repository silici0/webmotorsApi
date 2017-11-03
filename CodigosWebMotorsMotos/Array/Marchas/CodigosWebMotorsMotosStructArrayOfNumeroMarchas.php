<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfNumeroMarchas
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfNumeroMarchas originally named ArrayOfNumeroMarchas
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfNumeroMarchas extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The NumeroMarchas
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructNumeroMarchas
     */
    public $NumeroMarchas;
    /**
     * Constructor method for ArrayOfNumeroMarchas
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructNumeroMarchas $_numeroMarchas
     * @return CodigosWebMotorsMotosStructArrayOfNumeroMarchas
     */
    public function __construct($_numeroMarchas = NULL)
    {
        parent::__construct(array('NumeroMarchas'=>$_numeroMarchas),false);
    }
    /**
     * Get NumeroMarchas value
     * @return CodigosWebMotorsMotosStructNumeroMarchas|null
     */
    public function getNumeroMarchas()
    {
        return $this->NumeroMarchas;
    }
    /**
     * Set NumeroMarchas value
     * @param CodigosWebMotorsMotosStructNumeroMarchas $_numeroMarchas the NumeroMarchas
     * @return CodigosWebMotorsMotosStructNumeroMarchas
     */
    public function setNumeroMarchas($_numeroMarchas)
    {
        return ($this->NumeroMarchas = $_numeroMarchas);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructNumeroMarchas
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructNumeroMarchas
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructNumeroMarchas
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructNumeroMarchas
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructNumeroMarchas
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string NumeroMarchas
     */
    public function getAttributeName()
    {
        return 'NumeroMarchas';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfNumeroMarchas
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
