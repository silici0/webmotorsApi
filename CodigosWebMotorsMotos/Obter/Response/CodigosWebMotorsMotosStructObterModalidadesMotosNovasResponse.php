<?php
/**
 * File for class CodigosWebMotorsMotosStructObterModalidadesMotosNovasResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterModalidadesMotosNovasResponse originally named obterModalidadesMotosNovasResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterModalidadesMotosNovasResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterModalidadesMotosNovasResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM
     */
    public $obterModalidadesMotosNovasResult;
    /**
     * Constructor method for obterModalidadesMotosNovasResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM $_obterModalidadesMotosNovasResult
     * @return CodigosWebMotorsMotosStructObterModalidadesMotosNovasResponse
     */
    public function __construct($_obterModalidadesMotosNovasResult = NULL)
    {
        parent::__construct(array('obterModalidadesMotosNovasResult'=>($_obterModalidadesMotosNovasResult instanceof CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM)?$_obterModalidadesMotosNovasResult:new CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM($_obterModalidadesMotosNovasResult)),false);
    }
    /**
     * Get obterModalidadesMotosNovasResult value
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM|null
     */
    public function getObterModalidadesMotosNovasResult()
    {
        return $this->obterModalidadesMotosNovasResult;
    }
    /**
     * Set obterModalidadesMotosNovasResult value
     * @param CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM $_obterModalidadesMotosNovasResult the obterModalidadesMotosNovasResult
     * @return CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM
     */
    public function setObterModalidadesMotosNovasResult($_obterModalidadesMotosNovasResult)
    {
        return ($this->obterModalidadesMotosNovasResult = $_obterModalidadesMotosNovasResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterModalidadesMotosNovasResponse
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
