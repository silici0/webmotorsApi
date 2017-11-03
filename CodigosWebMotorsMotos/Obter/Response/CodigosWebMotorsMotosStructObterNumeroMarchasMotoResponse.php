<?php
/**
 * File for class CodigosWebMotorsMotosStructObterNumeroMarchasMotoResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterNumeroMarchasMotoResponse originally named obterNumeroMarchasMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterNumeroMarchasMotoResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterNumeroMarchasMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfNumeroMarchas
     */
    public $obterNumeroMarchasMotoResult;
    /**
     * Constructor method for obterNumeroMarchasMotoResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfNumeroMarchas $_obterNumeroMarchasMotoResult
     * @return CodigosWebMotorsMotosStructObterNumeroMarchasMotoResponse
     */
    public function __construct($_obterNumeroMarchasMotoResult = NULL)
    {
        parent::__construct(array('obterNumeroMarchasMotoResult'=>($_obterNumeroMarchasMotoResult instanceof CodigosWebMotorsMotosStructArrayOfNumeroMarchas)?$_obterNumeroMarchasMotoResult:new CodigosWebMotorsMotosStructArrayOfNumeroMarchas($_obterNumeroMarchasMotoResult)),false);
    }
    /**
     * Get obterNumeroMarchasMotoResult value
     * @return CodigosWebMotorsMotosStructArrayOfNumeroMarchas|null
     */
    public function getObterNumeroMarchasMotoResult()
    {
        return $this->obterNumeroMarchasMotoResult;
    }
    /**
     * Set obterNumeroMarchasMotoResult value
     * @param CodigosWebMotorsMotosStructArrayOfNumeroMarchas $_obterNumeroMarchasMotoResult the obterNumeroMarchasMotoResult
     * @return CodigosWebMotorsMotosStructArrayOfNumeroMarchas
     */
    public function setObterNumeroMarchasMotoResult($_obterNumeroMarchasMotoResult)
    {
        return ($this->obterNumeroMarchasMotoResult = $_obterNumeroMarchasMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterNumeroMarchasMotoResponse
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
