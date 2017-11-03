<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfModeloMotoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfModeloMotoWM originally named ArrayOfModeloMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfModeloMotoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The ModeloMotoWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructModeloMotoWM
     */
    public $ModeloMotoWM;
    /**
     * Constructor method for ArrayOfModeloMotoWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructModeloMotoWM $_modeloMotoWM
     * @return CodigosWebMotorsMotosStructArrayOfModeloMotoWM
     */
    public function __construct($_modeloMotoWM = NULL)
    {
        parent::__construct(array('ModeloMotoWM'=>$_modeloMotoWM),false);
    }
    /**
     * Get ModeloMotoWM value
     * @return CodigosWebMotorsMotosStructModeloMotoWM|null
     */
    public function getModeloMotoWM()
    {
        return $this->ModeloMotoWM;
    }
    /**
     * Set ModeloMotoWM value
     * @param CodigosWebMotorsMotosStructModeloMotoWM $_modeloMotoWM the ModeloMotoWM
     * @return CodigosWebMotorsMotosStructModeloMotoWM
     */
    public function setModeloMotoWM($_modeloMotoWM)
    {
        return ($this->ModeloMotoWM = $_modeloMotoWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructModeloMotoWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructModeloMotoWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructModeloMotoWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructModeloMotoWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructModeloMotoWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string ModeloMotoWM
     */
    public function getAttributeName()
    {
        return 'ModeloMotoWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfModeloMotoWM
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
