<?php
/**
 * File for class CodigosWebMotorsMotosStructObterCoresMotosUsadasResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterCoresMotosUsadasResponse originally named obterCoresMotosUsadasResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterCoresMotosUsadasResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterCoresMotosUsadasResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM
     */
    public $obterCoresMotosUsadasResult;
    /**
     * Constructor method for obterCoresMotosUsadasResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM $_obterCoresMotosUsadasResult
     * @return CodigosWebMotorsMotosStructObterCoresMotosUsadasResponse
     */
    public function __construct($_obterCoresMotosUsadasResult = NULL)
    {
        parent::__construct(array('obterCoresMotosUsadasResult'=>($_obterCoresMotosUsadasResult instanceof CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM)?$_obterCoresMotosUsadasResult:new CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM($_obterCoresMotosUsadasResult)),false);
    }
    /**
     * Get obterCoresMotosUsadasResult value
     * @return CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM|null
     */
    public function getObterCoresMotosUsadasResult()
    {
        return $this->obterCoresMotosUsadasResult;
    }
    /**
     * Set obterCoresMotosUsadasResult value
     * @param CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM $_obterCoresMotosUsadasResult the obterCoresMotosUsadasResult
     * @return CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM
     */
    public function setObterCoresMotosUsadasResult($_obterCoresMotosUsadasResult)
    {
        return ($this->obterCoresMotosUsadasResult = $_obterCoresMotosUsadasResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterCoresMotosUsadasResponse
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
