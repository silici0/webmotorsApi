<?php
/**
 * File for class WebmotorsEstoqueStructTrocarModalidadeMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructTrocarModalidadeMotoResponse originally named TrocarModalidadeMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructTrocarModalidadeMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The TrocarModalidadeMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM
     */
    public $TrocarModalidadeMotoResult;
    /**
     * Constructor method for TrocarModalidadeMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM $_trocarModalidadeMotoResult
     * @return WebmotorsEstoqueStructTrocarModalidadeMotoResponse
     */
    public function __construct($_trocarModalidadeMotoResult = NULL)
    {
        parent::__construct(array('TrocarModalidadeMotoResult'=>($_trocarModalidadeMotoResult instanceof WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM)?$_trocarModalidadeMotoResult:new WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM($_trocarModalidadeMotoResult)),false);
    }
    /**
     * Get TrocarModalidadeMotoResult value
     * @return WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM|null
     */
    public function getTrocarModalidadeMotoResult()
    {
        return $this->TrocarModalidadeMotoResult;
    }
    /**
     * Set TrocarModalidadeMotoResult value
     * @param WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM $_trocarModalidadeMotoResult the TrocarModalidadeMotoResult
     * @return WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM
     */
    public function setTrocarModalidadeMotoResult($_trocarModalidadeMotoResult)
    {
        return ($this->TrocarModalidadeMotoResult = $_trocarModalidadeMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructTrocarModalidadeMotoResponse
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
