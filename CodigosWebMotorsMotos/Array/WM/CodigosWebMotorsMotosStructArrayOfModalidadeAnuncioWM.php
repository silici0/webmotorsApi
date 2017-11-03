<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM originally named ArrayOfModalidadeAnuncioWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The ModalidadeAnuncioWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructModalidadeAnuncioWM
     */
    public $ModalidadeAnuncioWM;
    /**
     * Constructor method for ArrayOfModalidadeAnuncioWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructModalidadeAnuncioWM $_modalidadeAnuncioWM
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM
     */
    public function __construct($_modalidadeAnuncioWM = NULL)
    {
        parent::__construct(array('ModalidadeAnuncioWM'=>$_modalidadeAnuncioWM),false);
    }
    /**
     * Get ModalidadeAnuncioWM value
     * @return CodigosWebMotorsMotosStructModalidadeAnuncioWM|null
     */
    public function getModalidadeAnuncioWM()
    {
        return $this->ModalidadeAnuncioWM;
    }
    /**
     * Set ModalidadeAnuncioWM value
     * @param CodigosWebMotorsMotosStructModalidadeAnuncioWM $_modalidadeAnuncioWM the ModalidadeAnuncioWM
     * @return CodigosWebMotorsMotosStructModalidadeAnuncioWM
     */
    public function setModalidadeAnuncioWM($_modalidadeAnuncioWM)
    {
        return ($this->ModalidadeAnuncioWM = $_modalidadeAnuncioWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructModalidadeAnuncioWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructModalidadeAnuncioWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructModalidadeAnuncioWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructModalidadeAnuncioWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructModalidadeAnuncioWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string ModalidadeAnuncioWM
     */
    public function getAttributeName()
    {
        return 'ModalidadeAnuncioWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM
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
