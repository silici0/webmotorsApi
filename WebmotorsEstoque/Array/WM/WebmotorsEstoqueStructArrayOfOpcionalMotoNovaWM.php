<?php
/**
 * File for class WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM originally named ArrayOfOpcionalMotoNovaWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The OpcionalMotoNovaWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var WebmotorsEstoqueStructOpcionalMotoNovaWM
     */
    public $OpcionalMotoNovaWM;
    /**
     * Constructor method for ArrayOfOpcionalMotoNovaWM
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructOpcionalMotoNovaWM $_opcionalMotoNovaWM
     * @return WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM
     */
    public function __construct($_opcionalMotoNovaWM = NULL)
    {
        parent::__construct(array('OpcionalMotoNovaWM'=>$_opcionalMotoNovaWM),false);
    }
    /**
     * Get OpcionalMotoNovaWM value
     * @return WebmotorsEstoqueStructOpcionalMotoNovaWM|null
     */
    public function getOpcionalMotoNovaWM()
    {
        return $this->OpcionalMotoNovaWM;
    }
    /**
     * Set OpcionalMotoNovaWM value
     * @param WebmotorsEstoqueStructOpcionalMotoNovaWM $_opcionalMotoNovaWM the OpcionalMotoNovaWM
     * @return WebmotorsEstoqueStructOpcionalMotoNovaWM
     */
    public function setOpcionalMotoNovaWM($_opcionalMotoNovaWM)
    {
        return ($this->OpcionalMotoNovaWM = $_opcionalMotoNovaWM);
    }
    /**
     * Returns the current element
     * @see WebmotorsEstoqueWsdlClass::current()
     * @return WebmotorsEstoqueStructOpcionalMotoNovaWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see WebmotorsEstoqueWsdlClass::item()
     * @param int $_index
     * @return WebmotorsEstoqueStructOpcionalMotoNovaWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see WebmotorsEstoqueWsdlClass::first()
     * @return WebmotorsEstoqueStructOpcionalMotoNovaWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see WebmotorsEstoqueWsdlClass::last()
     * @return WebmotorsEstoqueStructOpcionalMotoNovaWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see WebmotorsEstoqueWsdlClass::last()
     * @param int $_offset
     * @return WebmotorsEstoqueStructOpcionalMotoNovaWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see WebmotorsEstoqueWsdlClass::getAttributeName()
     * @return string OpcionalMotoNovaWM
     */
    public function getAttributeName()
    {
        return 'OpcionalMotoNovaWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM
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
