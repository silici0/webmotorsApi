<?php
/**
 * File for class CodigosWebMotorsMotosStructObterTemplateAnimacaoMotosResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterTemplateAnimacaoMotosResponse originally named ObterTemplateAnimacaoMotosResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterTemplateAnimacaoMotosResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The ObterTemplateAnimacaoMotosResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM
     */
    public $ObterTemplateAnimacaoMotosResult;
    /**
     * Constructor method for ObterTemplateAnimacaoMotosResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM $_obterTemplateAnimacaoMotosResult
     * @return CodigosWebMotorsMotosStructObterTemplateAnimacaoMotosResponse
     */
    public function __construct($_obterTemplateAnimacaoMotosResult = NULL)
    {
        parent::__construct(array('ObterTemplateAnimacaoMotosResult'=>($_obterTemplateAnimacaoMotosResult instanceof CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM)?$_obterTemplateAnimacaoMotosResult:new CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM($_obterTemplateAnimacaoMotosResult)),false);
    }
    /**
     * Get ObterTemplateAnimacaoMotosResult value
     * @return CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM|null
     */
    public function getObterTemplateAnimacaoMotosResult()
    {
        return $this->ObterTemplateAnimacaoMotosResult;
    }
    /**
     * Set ObterTemplateAnimacaoMotosResult value
     * @param CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM $_obterTemplateAnimacaoMotosResult the ObterTemplateAnimacaoMotosResult
     * @return CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM
     */
    public function setObterTemplateAnimacaoMotosResult($_obterTemplateAnimacaoMotosResult)
    {
        return ($this->ObterTemplateAnimacaoMotosResult = $_obterTemplateAnimacaoMotosResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterTemplateAnimacaoMotosResponse
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
