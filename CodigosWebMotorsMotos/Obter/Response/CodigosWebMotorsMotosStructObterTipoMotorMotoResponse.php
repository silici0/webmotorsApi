<?php
/**
 * File for class CodigosWebMotorsMotosStructObterTipoMotorMotoResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterTipoMotorMotoResponse originally named obterTipoMotorMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterTipoMotorMotoResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterTipoMotorMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfTipoMotor
     */
    public $obterTipoMotorMotoResult;
    /**
     * Constructor method for obterTipoMotorMotoResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfTipoMotor $_obterTipoMotorMotoResult
     * @return CodigosWebMotorsMotosStructObterTipoMotorMotoResponse
     */
    public function __construct($_obterTipoMotorMotoResult = NULL)
    {
        parent::__construct(array('obterTipoMotorMotoResult'=>($_obterTipoMotorMotoResult instanceof CodigosWebMotorsMotosStructArrayOfTipoMotor)?$_obterTipoMotorMotoResult:new CodigosWebMotorsMotosStructArrayOfTipoMotor($_obterTipoMotorMotoResult)),false);
    }
    /**
     * Get obterTipoMotorMotoResult value
     * @return CodigosWebMotorsMotosStructArrayOfTipoMotor|null
     */
    public function getObterTipoMotorMotoResult()
    {
        return $this->obterTipoMotorMotoResult;
    }
    /**
     * Set obterTipoMotorMotoResult value
     * @param CodigosWebMotorsMotosStructArrayOfTipoMotor $_obterTipoMotorMotoResult the obterTipoMotorMotoResult
     * @return CodigosWebMotorsMotosStructArrayOfTipoMotor
     */
    public function setObterTipoMotorMotoResult($_obterTipoMotorMotoResult)
    {
        return ($this->obterTipoMotorMotoResult = $_obterTipoMotorMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterTipoMotorMotoResponse
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
