<?php
/**
 * File for class CodigosWebMotorsMotosStructObterTipoPartidaMotoResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterTipoPartidaMotoResponse originally named obterTipoPartidaMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterTipoPartidaMotoResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterTipoPartidaMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfTipoPartida
     */
    public $obterTipoPartidaMotoResult;
    /**
     * Constructor method for obterTipoPartidaMotoResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfTipoPartida $_obterTipoPartidaMotoResult
     * @return CodigosWebMotorsMotosStructObterTipoPartidaMotoResponse
     */
    public function __construct($_obterTipoPartidaMotoResult = NULL)
    {
        parent::__construct(array('obterTipoPartidaMotoResult'=>($_obterTipoPartidaMotoResult instanceof CodigosWebMotorsMotosStructArrayOfTipoPartida)?$_obterTipoPartidaMotoResult:new CodigosWebMotorsMotosStructArrayOfTipoPartida($_obterTipoPartidaMotoResult)),false);
    }
    /**
     * Get obterTipoPartidaMotoResult value
     * @return CodigosWebMotorsMotosStructArrayOfTipoPartida|null
     */
    public function getObterTipoPartidaMotoResult()
    {
        return $this->obterTipoPartidaMotoResult;
    }
    /**
     * Set obterTipoPartidaMotoResult value
     * @param CodigosWebMotorsMotosStructArrayOfTipoPartida $_obterTipoPartidaMotoResult the obterTipoPartidaMotoResult
     * @return CodigosWebMotorsMotosStructArrayOfTipoPartida
     */
    public function setObterTipoPartidaMotoResult($_obterTipoPartidaMotoResult)
    {
        return ($this->obterTipoPartidaMotoResult = $_obterTipoPartidaMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterTipoPartidaMotoResponse
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
