<?php
/**
 * File for class CodigosWebMotorsMotosStructObterOpcionaisMotosUsadasResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterOpcionaisMotosUsadasResponse originally named obterOpcionaisMotosUsadasResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterOpcionaisMotosUsadasResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterOpcionaisMotosUsadasResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM
     */
    public $obterOpcionaisMotosUsadasResult;
    /**
     * Constructor method for obterOpcionaisMotosUsadasResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM $_obterOpcionaisMotosUsadasResult
     * @return CodigosWebMotorsMotosStructObterOpcionaisMotosUsadasResponse
     */
    public function __construct($_obterOpcionaisMotosUsadasResult = NULL)
    {
        parent::__construct(array('obterOpcionaisMotosUsadasResult'=>($_obterOpcionaisMotosUsadasResult instanceof CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM)?$_obterOpcionaisMotosUsadasResult:new CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM($_obterOpcionaisMotosUsadasResult)),false);
    }
    /**
     * Get obterOpcionaisMotosUsadasResult value
     * @return CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM|null
     */
    public function getObterOpcionaisMotosUsadasResult()
    {
        return $this->obterOpcionaisMotosUsadasResult;
    }
    /**
     * Set obterOpcionaisMotosUsadasResult value
     * @param CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM $_obterOpcionaisMotosUsadasResult the obterOpcionaisMotosUsadasResult
     * @return CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM
     */
    public function setObterOpcionaisMotosUsadasResult($_obterOpcionaisMotosUsadasResult)
    {
        return ($this->obterOpcionaisMotosUsadasResult = $_obterOpcionaisMotosUsadasResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterOpcionaisMotosUsadasResponse
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
