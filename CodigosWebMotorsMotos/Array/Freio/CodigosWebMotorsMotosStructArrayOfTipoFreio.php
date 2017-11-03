<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfTipoFreio
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfTipoFreio originally named ArrayOfTipoFreio
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfTipoFreio extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The TipoFreio
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructTipoFreio
     */
    public $TipoFreio;
    /**
     * Constructor method for ArrayOfTipoFreio
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructTipoFreio $_tipoFreio
     * @return CodigosWebMotorsMotosStructArrayOfTipoFreio
     */
    public function __construct($_tipoFreio = NULL)
    {
        parent::__construct(array('TipoFreio'=>$_tipoFreio),false);
    }
    /**
     * Get TipoFreio value
     * @return CodigosWebMotorsMotosStructTipoFreio|null
     */
    public function getTipoFreio()
    {
        return $this->TipoFreio;
    }
    /**
     * Set TipoFreio value
     * @param CodigosWebMotorsMotosStructTipoFreio $_tipoFreio the TipoFreio
     * @return CodigosWebMotorsMotosStructTipoFreio
     */
    public function setTipoFreio($_tipoFreio)
    {
        return ($this->TipoFreio = $_tipoFreio);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructTipoFreio
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructTipoFreio
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructTipoFreio
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructTipoFreio
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructTipoFreio
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string TipoFreio
     */
    public function getAttributeName()
    {
        return 'TipoFreio';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfTipoFreio
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
