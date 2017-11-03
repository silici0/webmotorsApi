<?php
/**
 * File for class CodigosWebMotorsMotosStructObterMarcaMotosResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterMarcaMotosResponse originally named obterMarcaMotosResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterMarcaMotosResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterMarcaMotosResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfMarcaMotoWM
     */
    public $obterMarcaMotosResult;
    /**
     * Constructor method for obterMarcaMotosResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfMarcaMotoWM $_obterMarcaMotosResult
     * @return CodigosWebMotorsMotosStructObterMarcaMotosResponse
     */
    public function __construct($_obterMarcaMotosResult = NULL)
    {
        parent::__construct(array('obterMarcaMotosResult'=>($_obterMarcaMotosResult instanceof CodigosWebMotorsMotosStructArrayOfMarcaMotoWM)?$_obterMarcaMotosResult:new CodigosWebMotorsMotosStructArrayOfMarcaMotoWM($_obterMarcaMotosResult)),false);
    }
    /**
     * Get obterMarcaMotosResult value
     * @return CodigosWebMotorsMotosStructArrayOfMarcaMotoWM|null
     */
    public function getObterMarcaMotosResult()
    {
        return $this->obterMarcaMotosResult;
    }
    /**
     * Set obterMarcaMotosResult value
     * @param CodigosWebMotorsMotosStructArrayOfMarcaMotoWM $_obterMarcaMotosResult the obterMarcaMotosResult
     * @return CodigosWebMotorsMotosStructArrayOfMarcaMotoWM
     */
    public function setObterMarcaMotosResult($_obterMarcaMotosResult)
    {
        return ($this->obterMarcaMotosResult = $_obterMarcaMotosResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterMarcaMotosResponse
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
