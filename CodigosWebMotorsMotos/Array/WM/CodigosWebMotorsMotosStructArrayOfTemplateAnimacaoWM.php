<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM originally named ArrayOfTemplateAnimacaoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The TemplateAnimacaoWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructTemplateAnimacaoWM
     */
    public $TemplateAnimacaoWM;
    /**
     * Constructor method for ArrayOfTemplateAnimacaoWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructTemplateAnimacaoWM $_templateAnimacaoWM
     * @return CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM
     */
    public function __construct($_templateAnimacaoWM = NULL)
    {
        parent::__construct(array('TemplateAnimacaoWM'=>$_templateAnimacaoWM),false);
    }
    /**
     * Get TemplateAnimacaoWM value
     * @return CodigosWebMotorsMotosStructTemplateAnimacaoWM|null
     */
    public function getTemplateAnimacaoWM()
    {
        return $this->TemplateAnimacaoWM;
    }
    /**
     * Set TemplateAnimacaoWM value
     * @param CodigosWebMotorsMotosStructTemplateAnimacaoWM $_templateAnimacaoWM the TemplateAnimacaoWM
     * @return CodigosWebMotorsMotosStructTemplateAnimacaoWM
     */
    public function setTemplateAnimacaoWM($_templateAnimacaoWM)
    {
        return ($this->TemplateAnimacaoWM = $_templateAnimacaoWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructTemplateAnimacaoWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructTemplateAnimacaoWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructTemplateAnimacaoWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructTemplateAnimacaoWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructTemplateAnimacaoWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string TemplateAnimacaoWM
     */
    public function getAttributeName()
    {
        return 'TemplateAnimacaoWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM
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
