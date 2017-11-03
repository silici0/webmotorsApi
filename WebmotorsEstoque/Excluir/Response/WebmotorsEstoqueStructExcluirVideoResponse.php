<?php
/**
 * File for class WebmotorsEstoqueStructExcluirVideoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructExcluirVideoResponse originally named excluirVideoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructExcluirVideoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The excluirVideoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructVideoWM
     */
    public $excluirVideoResult;
    /**
     * Constructor method for excluirVideoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructVideoWM $_excluirVideoResult
     * @return WebmotorsEstoqueStructExcluirVideoResponse
     */
    public function __construct($_excluirVideoResult = NULL)
    {
        parent::__construct(array('excluirVideoResult'=>$_excluirVideoResult),false);
    }
    /**
     * Get excluirVideoResult value
     * @return WebmotorsEstoqueStructVideoWM|null
     */
    public function getExcluirVideoResult()
    {
        return $this->excluirVideoResult;
    }
    /**
     * Set excluirVideoResult value
     * @param WebmotorsEstoqueStructVideoWM $_excluirVideoResult the excluirVideoResult
     * @return WebmotorsEstoqueStructVideoWM
     */
    public function setExcluirVideoResult($_excluirVideoResult)
    {
        return ($this->excluirVideoResult = $_excluirVideoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructExcluirVideoResponse
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
