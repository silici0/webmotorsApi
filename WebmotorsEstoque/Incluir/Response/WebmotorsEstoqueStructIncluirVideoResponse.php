<?php
/**
 * File for class WebmotorsEstoqueStructIncluirVideoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructIncluirVideoResponse originally named incluirVideoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructIncluirVideoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The incluirVideoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructVideoWM
     */
    public $incluirVideoResult;
    /**
     * Constructor method for incluirVideoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructVideoWM $_incluirVideoResult
     * @return WebmotorsEstoqueStructIncluirVideoResponse
     */
    public function __construct($_incluirVideoResult = NULL)
    {
        parent::__construct(array('incluirVideoResult'=>$_incluirVideoResult),false);
    }
    /**
     * Get incluirVideoResult value
     * @return WebmotorsEstoqueStructVideoWM|null
     */
    public function getIncluirVideoResult()
    {
        return $this->incluirVideoResult;
    }
    /**
     * Set incluirVideoResult value
     * @param WebmotorsEstoqueStructVideoWM $_incluirVideoResult the incluirVideoResult
     * @return WebmotorsEstoqueStructVideoWM
     */
    public function setIncluirVideoResult($_incluirVideoResult)
    {
        return ($this->incluirVideoResult = $_incluirVideoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructIncluirVideoResponse
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
