<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM originally named ArrayOfModalidadeMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The ModalidadeMotoWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructModalidadeMotoWM
     */
    public $ModalidadeMotoWM;
    /**
     * Constructor method for ArrayOfModalidadeMotoWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructModalidadeMotoWM $_modalidadeMotoWM
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM
     */
    public function __construct($_modalidadeMotoWM = NULL)
    {
        parent::__construct(array('ModalidadeMotoWM'=>$_modalidadeMotoWM),false);
    }
    /**
     * Get ModalidadeMotoWM value
     * @return CodigosWebMotorsMotosStructModalidadeMotoWM|null
     */
    public function getModalidadeMotoWM()
    {
        return $this->ModalidadeMotoWM;
    }
    /**
     * Set ModalidadeMotoWM value
     * @param CodigosWebMotorsMotosStructModalidadeMotoWM $_modalidadeMotoWM the ModalidadeMotoWM
     * @return CodigosWebMotorsMotosStructModalidadeMotoWM
     */
    public function setModalidadeMotoWM($_modalidadeMotoWM)
    {
        return ($this->ModalidadeMotoWM = $_modalidadeMotoWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructModalidadeMotoWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructModalidadeMotoWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructModalidadeMotoWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructModalidadeMotoWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructModalidadeMotoWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string ModalidadeMotoWM
     */
    public function getAttributeName()
    {
        return 'ModalidadeMotoWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM
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
