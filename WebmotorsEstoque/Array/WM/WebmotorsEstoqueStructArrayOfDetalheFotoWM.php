<?php
/**
 * File for class WebmotorsEstoqueStructArrayOfDetalheFotoWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructArrayOfDetalheFotoWM originally named ArrayOfDetalheFotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructArrayOfDetalheFotoWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The DetalheFotoWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var WebmotorsEstoqueStructDetalheFotoWM
     */
    public $DetalheFotoWM;
    /**
     * Constructor method for ArrayOfDetalheFotoWM
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructDetalheFotoWM $_detalheFotoWM
     * @return WebmotorsEstoqueStructArrayOfDetalheFotoWM
     */
    public function __construct($_detalheFotoWM = NULL)
    {
        parent::__construct(array('DetalheFotoWM'=>$_detalheFotoWM),false);
    }
    /**
     * Get DetalheFotoWM value
     * @return WebmotorsEstoqueStructDetalheFotoWM|null
     */
    public function getDetalheFotoWM()
    {
        return $this->DetalheFotoWM;
    }
    /**
     * Set DetalheFotoWM value
     * @param WebmotorsEstoqueStructDetalheFotoWM $_detalheFotoWM the DetalheFotoWM
     * @return WebmotorsEstoqueStructDetalheFotoWM
     */
    public function setDetalheFotoWM($_detalheFotoWM)
    {
        return ($this->DetalheFotoWM = $_detalheFotoWM);
    }
    /**
     * Returns the current element
     * @see WebmotorsEstoqueWsdlClass::current()
     * @return WebmotorsEstoqueStructDetalheFotoWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see WebmotorsEstoqueWsdlClass::item()
     * @param int $_index
     * @return WebmotorsEstoqueStructDetalheFotoWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see WebmotorsEstoqueWsdlClass::first()
     * @return WebmotorsEstoqueStructDetalheFotoWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see WebmotorsEstoqueWsdlClass::last()
     * @return WebmotorsEstoqueStructDetalheFotoWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see WebmotorsEstoqueWsdlClass::last()
     * @param int $_offset
     * @return WebmotorsEstoqueStructDetalheFotoWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see WebmotorsEstoqueWsdlClass::getAttributeName()
     * @return string DetalheFotoWM
     */
    public function getAttributeName()
    {
        return 'DetalheFotoWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructArrayOfDetalheFotoWM
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
