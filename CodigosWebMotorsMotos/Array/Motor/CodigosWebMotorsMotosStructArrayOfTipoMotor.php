<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfTipoMotor
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfTipoMotor originally named ArrayOfTipoMotor
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfTipoMotor extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The TipoMotor
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructTipoMotor
     */
    public $TipoMotor;
    /**
     * Constructor method for ArrayOfTipoMotor
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructTipoMotor $_tipoMotor
     * @return CodigosWebMotorsMotosStructArrayOfTipoMotor
     */
    public function __construct($_tipoMotor = NULL)
    {
        parent::__construct(array('TipoMotor'=>$_tipoMotor),false);
    }
    /**
     * Get TipoMotor value
     * @return CodigosWebMotorsMotosStructTipoMotor|null
     */
    public function getTipoMotor()
    {
        return $this->TipoMotor;
    }
    /**
     * Set TipoMotor value
     * @param CodigosWebMotorsMotosStructTipoMotor $_tipoMotor the TipoMotor
     * @return CodigosWebMotorsMotosStructTipoMotor
     */
    public function setTipoMotor($_tipoMotor)
    {
        return ($this->TipoMotor = $_tipoMotor);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructTipoMotor
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructTipoMotor
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructTipoMotor
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructTipoMotor
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructTipoMotor
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string TipoMotor
     */
    public function getAttributeName()
    {
        return 'TipoMotor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfTipoMotor
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
