<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao originally named ArrayOfTipoRefrigeracao
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The TipoRefrigeracao
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructTipoRefrigeracao
     */
    public $TipoRefrigeracao;
    /**
     * Constructor method for ArrayOfTipoRefrigeracao
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructTipoRefrigeracao $_tipoRefrigeracao
     * @return CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao
     */
    public function __construct($_tipoRefrigeracao = NULL)
    {
        parent::__construct(array('TipoRefrigeracao'=>$_tipoRefrigeracao),false);
    }
    /**
     * Get TipoRefrigeracao value
     * @return CodigosWebMotorsMotosStructTipoRefrigeracao|null
     */
    public function getTipoRefrigeracao()
    {
        return $this->TipoRefrigeracao;
    }
    /**
     * Set TipoRefrigeracao value
     * @param CodigosWebMotorsMotosStructTipoRefrigeracao $_tipoRefrigeracao the TipoRefrigeracao
     * @return CodigosWebMotorsMotosStructTipoRefrigeracao
     */
    public function setTipoRefrigeracao($_tipoRefrigeracao)
    {
        return ($this->TipoRefrigeracao = $_tipoRefrigeracao);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructTipoRefrigeracao
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructTipoRefrigeracao
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructTipoRefrigeracao
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructTipoRefrigeracao
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructTipoRefrigeracao
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string TipoRefrigeracao
     */
    public function getAttributeName()
    {
        return 'TipoRefrigeracao';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao
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
