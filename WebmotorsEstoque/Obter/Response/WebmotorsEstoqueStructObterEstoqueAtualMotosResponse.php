<?php
/**
 * File for class WebmotorsEstoqueStructObterEstoqueAtualMotosResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructObterEstoqueAtualMotosResponse originally named obterEstoqueAtualMotosResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructObterEstoqueAtualMotosResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The obterEstoqueAtualMotosResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructArrayOfAnuncioMotoWM
     */
    public $obterEstoqueAtualMotosResult;
    /**
     * Constructor method for obterEstoqueAtualMotosResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructArrayOfAnuncioMotoWM $_obterEstoqueAtualMotosResult
     * @return WebmotorsEstoqueStructObterEstoqueAtualMotosResponse
     */
    public function __construct($_obterEstoqueAtualMotosResult = NULL)
    {
        parent::__construct(array('obterEstoqueAtualMotosResult'=>($_obterEstoqueAtualMotosResult instanceof WebmotorsEstoqueStructArrayOfAnuncioMotoWM)?$_obterEstoqueAtualMotosResult:new WebmotorsEstoqueStructArrayOfAnuncioMotoWM($_obterEstoqueAtualMotosResult)),false);
    }
    /**
     * Get obterEstoqueAtualMotosResult value
     * @return WebmotorsEstoqueStructArrayOfAnuncioMotoWM|null
     */
    public function getObterEstoqueAtualMotosResult()
    {
        return $this->obterEstoqueAtualMotosResult;
    }
    /**
     * Set obterEstoqueAtualMotosResult value
     * @param WebmotorsEstoqueStructArrayOfAnuncioMotoWM $_obterEstoqueAtualMotosResult the obterEstoqueAtualMotosResult
     * @return WebmotorsEstoqueStructArrayOfAnuncioMotoWM
     */
    public function setObterEstoqueAtualMotosResult($_obterEstoqueAtualMotosResult)
    {
        return ($this->obterEstoqueAtualMotosResult = $_obterEstoqueAtualMotosResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructObterEstoqueAtualMotosResponse
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
