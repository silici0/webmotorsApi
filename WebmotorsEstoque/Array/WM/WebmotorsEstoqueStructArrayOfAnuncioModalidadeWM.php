<?php
/**
 * File for class WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM originally named ArrayOfAnuncioModalidadeWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The AnuncioModalidadeWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var WebmotorsEstoqueStructAnuncioModalidadeWM
     */
    public $AnuncioModalidadeWM;
    /**
     * Constructor method for ArrayOfAnuncioModalidadeWM
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructAnuncioModalidadeWM $_anuncioModalidadeWM
     * @return WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM
     */
    public function __construct($_anuncioModalidadeWM = NULL)
    {
        parent::__construct(array('AnuncioModalidadeWM'=>$_anuncioModalidadeWM),false);
    }
    /**
     * Get AnuncioModalidadeWM value
     * @return WebmotorsEstoqueStructAnuncioModalidadeWM|null
     */
    public function getAnuncioModalidadeWM()
    {
        return $this->AnuncioModalidadeWM;
    }
    /**
     * Set AnuncioModalidadeWM value
     * @param WebmotorsEstoqueStructAnuncioModalidadeWM $_anuncioModalidadeWM the AnuncioModalidadeWM
     * @return WebmotorsEstoqueStructAnuncioModalidadeWM
     */
    public function setAnuncioModalidadeWM($_anuncioModalidadeWM)
    {
        return ($this->AnuncioModalidadeWM = $_anuncioModalidadeWM);
    }
    /**
     * Returns the current element
     * @see WebmotorsEstoqueWsdlClass::current()
     * @return WebmotorsEstoqueStructAnuncioModalidadeWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see WebmotorsEstoqueWsdlClass::item()
     * @param int $_index
     * @return WebmotorsEstoqueStructAnuncioModalidadeWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see WebmotorsEstoqueWsdlClass::first()
     * @return WebmotorsEstoqueStructAnuncioModalidadeWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see WebmotorsEstoqueWsdlClass::last()
     * @return WebmotorsEstoqueStructAnuncioModalidadeWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see WebmotorsEstoqueWsdlClass::last()
     * @param int $_offset
     * @return WebmotorsEstoqueStructAnuncioModalidadeWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see WebmotorsEstoqueWsdlClass::getAttributeName()
     * @return string AnuncioModalidadeWM
     */
    public function getAttributeName()
    {
        return 'AnuncioModalidadeWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM
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
