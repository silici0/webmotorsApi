<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfTipoPartida
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfTipoPartida originally named ArrayOfTipoPartida
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfTipoPartida extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The TipoPartida
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructTipoPartida
     */
    public $TipoPartida;
    /**
     * Constructor method for ArrayOfTipoPartida
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructTipoPartida $_tipoPartida
     * @return CodigosWebMotorsMotosStructArrayOfTipoPartida
     */
    public function __construct($_tipoPartida = NULL)
    {
        parent::__construct(array('TipoPartida'=>$_tipoPartida),false);
    }
    /**
     * Get TipoPartida value
     * @return CodigosWebMotorsMotosStructTipoPartida|null
     */
    public function getTipoPartida()
    {
        return $this->TipoPartida;
    }
    /**
     * Set TipoPartida value
     * @param CodigosWebMotorsMotosStructTipoPartida $_tipoPartida the TipoPartida
     * @return CodigosWebMotorsMotosStructTipoPartida
     */
    public function setTipoPartida($_tipoPartida)
    {
        return ($this->TipoPartida = $_tipoPartida);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructTipoPartida
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructTipoPartida
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructTipoPartida
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructTipoPartida
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructTipoPartida
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string TipoPartida
     */
    public function getAttributeName()
    {
        return 'TipoPartida';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfTipoPartida
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
