<?php
/**
 * File for class WebmotorsEstoqueStructExcluirMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructExcluirMotoResponse originally named excluirMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructExcluirMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The excluirMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructAnuncioMotoWM
     */
    public $excluirMotoResult;
    /**
     * Constructor method for excluirMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_excluirMotoResult
     * @return WebmotorsEstoqueStructExcluirMotoResponse
     */
    public function __construct($_excluirMotoResult = NULL)
    {
        parent::__construct(array('excluirMotoResult'=>$_excluirMotoResult),false);
    }
    /**
     * Get excluirMotoResult value
     * @return WebmotorsEstoqueStructAnuncioMotoWM|null
     */
    public function getExcluirMotoResult()
    {
        return $this->excluirMotoResult;
    }
    /**
     * Set excluirMotoResult value
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_excluirMotoResult the excluirMotoResult
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function setExcluirMotoResult($_excluirMotoResult)
    {
        return ($this->excluirMotoResult = $_excluirMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructExcluirMotoResponse
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
