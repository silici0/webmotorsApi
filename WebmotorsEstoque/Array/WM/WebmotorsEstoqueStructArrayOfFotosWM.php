<?php
/**
 * File for class WebmotorsEstoqueStructArrayOfFotosWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructArrayOfFotosWM originally named ArrayOfFotosWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructArrayOfFotosWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The FotosWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var WebmotorsEstoqueStructFotosWM
     */
    public $FotosWM;
    /**
     * Constructor method for ArrayOfFotosWM
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructFotosWM $_fotosWM
     * @return WebmotorsEstoqueStructArrayOfFotosWM
     */
    public function __construct($_fotosWM = NULL)
    {
        parent::__construct(array('FotosWM'=>$_fotosWM),false);
    }
    /**
     * Get FotosWM value
     * @return WebmotorsEstoqueStructFotosWM|null
     */
    public function getFotosWM()
    {
        return $this->FotosWM;
    }
    /**
     * Set FotosWM value
     * @param WebmotorsEstoqueStructFotosWM $_fotosWM the FotosWM
     * @return WebmotorsEstoqueStructFotosWM
     */
    public function setFotosWM($_fotosWM)
    {
        return ($this->FotosWM = $_fotosWM);
    }
    /**
     * Returns the current element
     * @see WebmotorsEstoqueWsdlClass::current()
     * @return WebmotorsEstoqueStructFotosWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see WebmotorsEstoqueWsdlClass::item()
     * @param int $_index
     * @return WebmotorsEstoqueStructFotosWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see WebmotorsEstoqueWsdlClass::first()
     * @return WebmotorsEstoqueStructFotosWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see WebmotorsEstoqueWsdlClass::last()
     * @return WebmotorsEstoqueStructFotosWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see WebmotorsEstoqueWsdlClass::last()
     * @param int $_offset
     * @return WebmotorsEstoqueStructFotosWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see WebmotorsEstoqueWsdlClass::getAttributeName()
     * @return string FotosWM
     */
    public function getAttributeName()
    {
        return 'FotosWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructArrayOfFotosWM
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
