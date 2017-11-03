<?php
/**
 * File for class WebmotorsEstoqueStructArrayOfAnuncioMotoWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructArrayOfAnuncioMotoWM originally named ArrayOfAnuncioMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructArrayOfAnuncioMotoWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The AnuncioMotoWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var WebmotorsEstoqueStructAnuncioMotoWM
     */
    public $AnuncioMotoWM;
    /**
     * Constructor method for ArrayOfAnuncioMotoWM
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_anuncioMotoWM
     * @return WebmotorsEstoqueStructArrayOfAnuncioMotoWM
     */
    public function __construct($_anuncioMotoWM = NULL)
    {
        parent::__construct(array('AnuncioMotoWM'=>$_anuncioMotoWM),false);
    }
    /**
     * Get AnuncioMotoWM value
     * @return WebmotorsEstoqueStructAnuncioMotoWM|null
     */
    public function getAnuncioMotoWM()
    {
        return $this->AnuncioMotoWM;
    }
    /**
     * Set AnuncioMotoWM value
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_anuncioMotoWM the AnuncioMotoWM
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function setAnuncioMotoWM($_anuncioMotoWM)
    {
        return ($this->AnuncioMotoWM = $_anuncioMotoWM);
    }
    /**
     * Returns the current element
     * @see WebmotorsEstoqueWsdlClass::current()
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see WebmotorsEstoqueWsdlClass::item()
     * @param int $_index
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see WebmotorsEstoqueWsdlClass::first()
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see WebmotorsEstoqueWsdlClass::last()
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see WebmotorsEstoqueWsdlClass::last()
     * @param int $_offset
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see WebmotorsEstoqueWsdlClass::getAttributeName()
     * @return string AnuncioMotoWM
     */
    public function getAttributeName()
    {
        return 'AnuncioMotoWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructArrayOfAnuncioMotoWM
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
