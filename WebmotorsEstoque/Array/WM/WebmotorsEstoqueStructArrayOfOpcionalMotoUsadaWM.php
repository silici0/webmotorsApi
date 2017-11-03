<?php
/**
 * File for class WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM originally named ArrayOfOpcionalMotoUsadaWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The OpcionalMotoUsadaWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var WebmotorsEstoqueStructOpcionalMotoUsadaWM
     */
    public $OpcionalMotoUsadaWM;
    /**
     * Constructor method for ArrayOfOpcionalMotoUsadaWM
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructOpcionalMotoUsadaWM $_opcionalMotoUsadaWM
     * @return WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM
     */
    public function __construct($_opcionalMotoUsadaWM = NULL)
    {
        parent::__construct(array('OpcionalMotoUsadaWM'=>$_opcionalMotoUsadaWM),false);
    }
    /**
     * Get OpcionalMotoUsadaWM value
     * @return WebmotorsEstoqueStructOpcionalMotoUsadaWM|null
     */
    public function getOpcionalMotoUsadaWM()
    {
        return $this->OpcionalMotoUsadaWM;
    }
    /**
     * Set OpcionalMotoUsadaWM value
     * @param WebmotorsEstoqueStructOpcionalMotoUsadaWM $_opcionalMotoUsadaWM the OpcionalMotoUsadaWM
     * @return WebmotorsEstoqueStructOpcionalMotoUsadaWM
     */
    public function setOpcionalMotoUsadaWM($_opcionalMotoUsadaWM)
    {
        return ($this->OpcionalMotoUsadaWM = $_opcionalMotoUsadaWM);
    }
    /**
     * Returns the current element
     * @see WebmotorsEstoqueWsdlClass::current()
     * @return WebmotorsEstoqueStructOpcionalMotoUsadaWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see WebmotorsEstoqueWsdlClass::item()
     * @param int $_index
     * @return WebmotorsEstoqueStructOpcionalMotoUsadaWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see WebmotorsEstoqueWsdlClass::first()
     * @return WebmotorsEstoqueStructOpcionalMotoUsadaWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see WebmotorsEstoqueWsdlClass::last()
     * @return WebmotorsEstoqueStructOpcionalMotoUsadaWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see WebmotorsEstoqueWsdlClass::last()
     * @param int $_offset
     * @return WebmotorsEstoqueStructOpcionalMotoUsadaWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see WebmotorsEstoqueWsdlClass::getAttributeName()
     * @return string OpcionalMotoUsadaWM
     */
    public function getAttributeName()
    {
        return 'OpcionalMotoUsadaWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM
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
