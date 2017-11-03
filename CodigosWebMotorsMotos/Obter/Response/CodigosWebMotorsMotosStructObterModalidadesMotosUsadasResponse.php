<?php
/**
 * File for class CodigosWebMotorsMotosStructObterModalidadesMotosUsadasResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterModalidadesMotosUsadasResponse originally named obterModalidadesMotosUsadasResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterModalidadesMotosUsadasResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterModalidadesMotosUsadasResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM
     */
    public $obterModalidadesMotosUsadasResult;
    /**
     * Constructor method for obterModalidadesMotosUsadasResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM $_obterModalidadesMotosUsadasResult
     * @return CodigosWebMotorsMotosStructObterModalidadesMotosUsadasResponse
     */
    public function __construct($_obterModalidadesMotosUsadasResult = NULL)
    {
        parent::__construct(array('obterModalidadesMotosUsadasResult'=>($_obterModalidadesMotosUsadasResult instanceof CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM)?$_obterModalidadesMotosUsadasResult:new CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM($_obterModalidadesMotosUsadasResult)),false);
    }
    /**
     * Get obterModalidadesMotosUsadasResult value
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM|null
     */
    public function getObterModalidadesMotosUsadasResult()
    {
        return $this->obterModalidadesMotosUsadasResult;
    }
    /**
     * Set obterModalidadesMotosUsadasResult value
     * @param CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM $_obterModalidadesMotosUsadasResult the obterModalidadesMotosUsadasResult
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM
     */
    public function setObterModalidadesMotosUsadasResult($_obterModalidadesMotosUsadasResult)
    {
        return ($this->obterModalidadesMotosUsadasResult = $_obterModalidadesMotosUsadasResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterModalidadesMotosUsadasResponse
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
