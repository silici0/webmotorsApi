<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfTipoAlimentacao
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfTipoAlimentacao originally named ArrayOfTipoAlimentacao
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfTipoAlimentacao extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The TipoAlimentacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructTipoAlimentacao
     */
    public $TipoAlimentacao;
    /**
     * Constructor method for ArrayOfTipoAlimentacao
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructTipoAlimentacao $_tipoAlimentacao
     * @return CodigosWebMotorsMotosStructArrayOfTipoAlimentacao
     */
    public function __construct($_tipoAlimentacao = NULL)
    {
        parent::__construct(array('TipoAlimentacao'=>$_tipoAlimentacao),false);
    }
    /**
     * Get TipoAlimentacao value
     * @return CodigosWebMotorsMotosStructTipoAlimentacao|null
     */
    public function getTipoAlimentacao()
    {
        return $this->TipoAlimentacao;
    }
    /**
     * Set TipoAlimentacao value
     * @param CodigosWebMotorsMotosStructTipoAlimentacao $_tipoAlimentacao the TipoAlimentacao
     * @return CodigosWebMotorsMotosStructTipoAlimentacao
     */
    public function setTipoAlimentacao($_tipoAlimentacao)
    {
        return ($this->TipoAlimentacao = $_tipoAlimentacao);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructTipoAlimentacao
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructTipoAlimentacao
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructTipoAlimentacao
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructTipoAlimentacao
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructTipoAlimentacao
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string TipoAlimentacao
     */
    public function getAttributeName()
    {
        return 'TipoAlimentacao';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfTipoAlimentacao
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
