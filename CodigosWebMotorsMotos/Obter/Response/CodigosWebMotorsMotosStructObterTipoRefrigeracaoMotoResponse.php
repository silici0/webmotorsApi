<?php
/**
 * File for class CodigosWebMotorsMotosStructObterTipoRefrigeracaoMotoResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterTipoRefrigeracaoMotoResponse originally named obterTipoRefrigeracaoMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterTipoRefrigeracaoMotoResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterTipoRefrigeracaoMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao
     */
    public $obterTipoRefrigeracaoMotoResult;
    /**
     * Constructor method for obterTipoRefrigeracaoMotoResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao $_obterTipoRefrigeracaoMotoResult
     * @return CodigosWebMotorsMotosStructObterTipoRefrigeracaoMotoResponse
     */
    public function __construct($_obterTipoRefrigeracaoMotoResult = NULL)
    {
        parent::__construct(array('obterTipoRefrigeracaoMotoResult'=>($_obterTipoRefrigeracaoMotoResult instanceof CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao)?$_obterTipoRefrigeracaoMotoResult:new CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao($_obterTipoRefrigeracaoMotoResult)),false);
    }
    /**
     * Get obterTipoRefrigeracaoMotoResult value
     * @return CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao|null
     */
    public function getObterTipoRefrigeracaoMotoResult()
    {
        return $this->obterTipoRefrigeracaoMotoResult;
    }
    /**
     * Set obterTipoRefrigeracaoMotoResult value
     * @param CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao $_obterTipoRefrigeracaoMotoResult the obterTipoRefrigeracaoMotoResult
     * @return CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao
     */
    public function setObterTipoRefrigeracaoMotoResult($_obterTipoRefrigeracaoMotoResult)
    {
        return ($this->obterTipoRefrigeracaoMotoResult = $_obterTipoRefrigeracaoMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterTipoRefrigeracaoMotoResponse
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
