<?php
/**
 * File for class WebmotorsEstoqueStructIncluirFotoMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructIncluirFotoMotoResponse originally named incluirFotoMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructIncluirFotoMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The incluirFotoMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructFotoAnuncioMotoWM
     */
    public $incluirFotoMotoResult;
    /**
     * Constructor method for incluirFotoMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructFotoAnuncioMotoWM $_incluirFotoMotoResult
     * @return WebmotorsEstoqueStructIncluirFotoMotoResponse
     */
    public function __construct($_incluirFotoMotoResult = NULL)
    {
        parent::__construct(array('incluirFotoMotoResult'=>$_incluirFotoMotoResult),false);
    }
    /**
     * Get incluirFotoMotoResult value
     * @return WebmotorsEstoqueStructFotoAnuncioMotoWM|null
     */
    public function getIncluirFotoMotoResult()
    {
        return $this->incluirFotoMotoResult;
    }
    /**
     * Set incluirFotoMotoResult value
     * @param WebmotorsEstoqueStructFotoAnuncioMotoWM $_incluirFotoMotoResult the incluirFotoMotoResult
     * @return WebmotorsEstoqueStructFotoAnuncioMotoWM
     */
    public function setIncluirFotoMotoResult($_incluirFotoMotoResult)
    {
        return ($this->incluirFotoMotoResult = $_incluirFotoMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructIncluirFotoMotoResponse
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
