<?php
/**
 * File for class WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM originally named ArrayOfAvaliacaoMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The AvaliacaoMotoWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var WebmotorsEstoqueStructAvaliacaoMotoWM
     */
    public $AvaliacaoMotoWM;
    /**
     * Constructor method for ArrayOfAvaliacaoMotoWM
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructAvaliacaoMotoWM $_avaliacaoMotoWM
     * @return WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM
     */
    public function __construct($_avaliacaoMotoWM = NULL)
    {
        parent::__construct(array('AvaliacaoMotoWM'=>$_avaliacaoMotoWM),false);
    }
    /**
     * Get AvaliacaoMotoWM value
     * @return WebmotorsEstoqueStructAvaliacaoMotoWM|null
     */
    public function getAvaliacaoMotoWM()
    {
        return $this->AvaliacaoMotoWM;
    }
    /**
     * Set AvaliacaoMotoWM value
     * @param WebmotorsEstoqueStructAvaliacaoMotoWM $_avaliacaoMotoWM the AvaliacaoMotoWM
     * @return WebmotorsEstoqueStructAvaliacaoMotoWM
     */
    public function setAvaliacaoMotoWM($_avaliacaoMotoWM)
    {
        return ($this->AvaliacaoMotoWM = $_avaliacaoMotoWM);
    }
    /**
     * Returns the current element
     * @see WebmotorsEstoqueWsdlClass::current()
     * @return WebmotorsEstoqueStructAvaliacaoMotoWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see WebmotorsEstoqueWsdlClass::item()
     * @param int $_index
     * @return WebmotorsEstoqueStructAvaliacaoMotoWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see WebmotorsEstoqueWsdlClass::first()
     * @return WebmotorsEstoqueStructAvaliacaoMotoWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see WebmotorsEstoqueWsdlClass::last()
     * @return WebmotorsEstoqueStructAvaliacaoMotoWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see WebmotorsEstoqueWsdlClass::last()
     * @param int $_offset
     * @return WebmotorsEstoqueStructAvaliacaoMotoWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see WebmotorsEstoqueWsdlClass::getAttributeName()
     * @return string AvaliacaoMotoWM
     */
    public function getAttributeName()
    {
        return 'AvaliacaoMotoWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM
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
