<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfAnoMotoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfAnoMotoWM originally named ArrayOfAnoMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfAnoMotoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The AnoMotoWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructAnoMotoWM
     */
    public $AnoMotoWM;
    /**
     * Constructor method for ArrayOfAnoMotoWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructAnoMotoWM $_anoMotoWM
     * @return CodigosWebMotorsMotosStructArrayOfAnoMotoWM
     */
    public function __construct($_anoMotoWM = NULL)
    {
        parent::__construct(array('AnoMotoWM'=>$_anoMotoWM),false);
    }
    /**
     * Get AnoMotoWM value
     * @return CodigosWebMotorsMotosStructAnoMotoWM|null
     */
    public function getAnoMotoWM()
    {
        return $this->AnoMotoWM;
    }
    /**
     * Set AnoMotoWM value
     * @param CodigosWebMotorsMotosStructAnoMotoWM $_anoMotoWM the AnoMotoWM
     * @return CodigosWebMotorsMotosStructAnoMotoWM
     */
    public function setAnoMotoWM($_anoMotoWM)
    {
        return ($this->AnoMotoWM = $_anoMotoWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructAnoMotoWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructAnoMotoWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructAnoMotoWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructAnoMotoWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructAnoMotoWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string AnoMotoWM
     */
    public function getAttributeName()
    {
        return 'AnoMotoWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfAnoMotoWM
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
