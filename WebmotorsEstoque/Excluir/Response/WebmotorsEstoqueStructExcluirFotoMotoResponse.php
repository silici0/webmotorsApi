<?php
/**
 * File for class WebmotorsEstoqueStructExcluirFotoMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructExcluirFotoMotoResponse originally named excluirFotoMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructExcluirFotoMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The excluirFotoMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructFotoAnuncioMotoWM
     */
    public $excluirFotoMotoResult;
    /**
     * Constructor method for excluirFotoMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructFotoAnuncioMotoWM $_excluirFotoMotoResult
     * @return WebmotorsEstoqueStructExcluirFotoMotoResponse
     */
    public function __construct($_excluirFotoMotoResult = NULL)
    {
        parent::__construct(array('excluirFotoMotoResult'=>$_excluirFotoMotoResult),false);
    }
    /**
     * Get excluirFotoMotoResult value
     * @return WebmotorsEstoqueStructFotoAnuncioMotoWM|null
     */
    public function getExcluirFotoMotoResult()
    {
        return $this->excluirFotoMotoResult;
    }
    /**
     * Set excluirFotoMotoResult value
     * @param WebmotorsEstoqueStructFotoAnuncioMotoWM $_excluirFotoMotoResult the excluirFotoMotoResult
     * @return WebmotorsEstoqueStructFotoAnuncioMotoWM
     */
    public function setExcluirFotoMotoResult($_excluirFotoMotoResult)
    {
        return ($this->excluirFotoMotoResult = $_excluirFotoMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructExcluirFotoMotoResponse
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
