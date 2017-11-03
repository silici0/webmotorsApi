<?php
/**
 * File for class CodigosWebMotorsMotosStructObterModeloMotosResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterModeloMotosResponse originally named obterModeloMotosResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterModeloMotosResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterModeloMotosResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfModeloMotoWM
     */
    public $obterModeloMotosResult;
    /**
     * Constructor method for obterModeloMotosResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfModeloMotoWM $_obterModeloMotosResult
     * @return CodigosWebMotorsMotosStructObterModeloMotosResponse
     */
    public function __construct($_obterModeloMotosResult = NULL)
    {
        parent::__construct(array('obterModeloMotosResult'=>($_obterModeloMotosResult instanceof CodigosWebMotorsMotosStructArrayOfModeloMotoWM)?$_obterModeloMotosResult:new CodigosWebMotorsMotosStructArrayOfModeloMotoWM($_obterModeloMotosResult)),false);
    }
    /**
     * Get obterModeloMotosResult value
     * @return CodigosWebMotorsMotosStructArrayOfModeloMotoWM|null
     */
    public function getObterModeloMotosResult()
    {
        return $this->obterModeloMotosResult;
    }
    /**
     * Set obterModeloMotosResult value
     * @param CodigosWebMotorsMotosStructArrayOfModeloMotoWM $_obterModeloMotosResult the obterModeloMotosResult
     * @return CodigosWebMotorsMotosStructArrayOfModeloMotoWM
     */
    public function setObterModeloMotosResult($_obterModeloMotosResult)
    {
        return ($this->obterModeloMotosResult = $_obterModeloMotosResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterModeloMotosResponse
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
