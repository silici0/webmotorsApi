<?php
/**
 * File for class CodigosWebMotorsMotosStructObterTipoFreioMotoResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterTipoFreioMotoResponse originally named obterTipoFreioMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterTipoFreioMotoResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterTipoFreioMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfTipoFreio
     */
    public $obterTipoFreioMotoResult;
    /**
     * Constructor method for obterTipoFreioMotoResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfTipoFreio $_obterTipoFreioMotoResult
     * @return CodigosWebMotorsMotosStructObterTipoFreioMotoResponse
     */
    public function __construct($_obterTipoFreioMotoResult = NULL)
    {
        parent::__construct(array('obterTipoFreioMotoResult'=>($_obterTipoFreioMotoResult instanceof CodigosWebMotorsMotosStructArrayOfTipoFreio)?$_obterTipoFreioMotoResult:new CodigosWebMotorsMotosStructArrayOfTipoFreio($_obterTipoFreioMotoResult)),false);
    }
    /**
     * Get obterTipoFreioMotoResult value
     * @return CodigosWebMotorsMotosStructArrayOfTipoFreio|null
     */
    public function getObterTipoFreioMotoResult()
    {
        return $this->obterTipoFreioMotoResult;
    }
    /**
     * Set obterTipoFreioMotoResult value
     * @param CodigosWebMotorsMotosStructArrayOfTipoFreio $_obterTipoFreioMotoResult the obterTipoFreioMotoResult
     * @return CodigosWebMotorsMotosStructArrayOfTipoFreio
     */
    public function setObterTipoFreioMotoResult($_obterTipoFreioMotoResult)
    {
        return ($this->obterTipoFreioMotoResult = $_obterTipoFreioMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterTipoFreioMotoResponse
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
