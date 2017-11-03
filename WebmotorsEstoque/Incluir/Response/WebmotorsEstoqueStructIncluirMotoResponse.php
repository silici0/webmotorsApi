<?php
/**
 * File for class WebmotorsEstoqueStructIncluirMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructIncluirMotoResponse originally named incluirMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructIncluirMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The incluirMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructAnuncioMotoWM
     */
    public $incluirMotoResult;
    /**
     * Constructor method for incluirMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_incluirMotoResult
     * @return WebmotorsEstoqueStructIncluirMotoResponse
     */
    public function __construct($_incluirMotoResult = NULL)
    {
        parent::__construct(array('incluirMotoResult'=>$_incluirMotoResult),false);
    }
    /**
     * Get incluirMotoResult value
     * @return WebmotorsEstoqueStructAnuncioMotoWM|null
     */
    public function getIncluirMotoResult()
    {
        return $this->incluirMotoResult;
    }
    /**
     * Set incluirMotoResult value
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_incluirMotoResult the incluirMotoResult
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function setIncluirMotoResult($_incluirMotoResult)
    {
        return ($this->incluirMotoResult = $_incluirMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructIncluirMotoResponse
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
