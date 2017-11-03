<?php
/**
 * File for class WebmotorsEstoqueStructAvalicaoMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructAvalicaoMotoResponse originally named AvalicaoMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructAvalicaoMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The AvalicaoMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM
     */
    public $AvalicaoMotoResult;
    /**
     * Constructor method for AvalicaoMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM $_avalicaoMotoResult
     * @return WebmotorsEstoqueStructAvalicaoMotoResponse
     */
    public function __construct($_avalicaoMotoResult = NULL)
    {
        parent::__construct(array('AvalicaoMotoResult'=>($_avalicaoMotoResult instanceof WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM)?$_avalicaoMotoResult:new WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM($_avalicaoMotoResult)),false);
    }
    /**
     * Get AvalicaoMotoResult value
     * @return WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM|null
     */
    public function getAvalicaoMotoResult()
    {
        return $this->AvalicaoMotoResult;
    }
    /**
     * Set AvalicaoMotoResult value
     * @param WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM $_avalicaoMotoResult the AvalicaoMotoResult
     * @return WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM
     */
    public function setAvalicaoMotoResult($_avalicaoMotoResult)
    {
        return ($this->AvalicaoMotoResult = $_avalicaoMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructAvalicaoMotoResponse
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
