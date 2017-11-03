<?php
/**
 * File for class CodigosWebMotorsMotosStructObterModalidadesMotosResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterModalidadesMotosResponse originally named obterModalidadesMotosResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterModalidadesMotosResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterModalidadesMotosResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM
     */
    public $obterModalidadesMotosResult;
    /**
     * Constructor method for obterModalidadesMotosResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM $_obterModalidadesMotosResult
     * @return CodigosWebMotorsMotosStructObterModalidadesMotosResponse
     */
    public function __construct($_obterModalidadesMotosResult = NULL)
    {
        parent::__construct(array('obterModalidadesMotosResult'=>($_obterModalidadesMotosResult instanceof CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM)?$_obterModalidadesMotosResult:new CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM($_obterModalidadesMotosResult)),false);
    }
    /**
     * Get obterModalidadesMotosResult value
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM|null
     */
    public function getObterModalidadesMotosResult()
    {
        return $this->obterModalidadesMotosResult;
    }
    /**
     * Set obterModalidadesMotosResult value
     * @param CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM $_obterModalidadesMotosResult the obterModalidadesMotosResult
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM
     */
    public function setObterModalidadesMotosResult($_obterModalidadesMotosResult)
    {
        return ($this->obterModalidadesMotosResult = $_obterModalidadesMotosResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterModalidadesMotosResponse
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
