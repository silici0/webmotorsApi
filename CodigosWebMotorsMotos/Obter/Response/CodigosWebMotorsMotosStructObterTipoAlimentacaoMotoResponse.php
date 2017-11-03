<?php
/**
 * File for class CodigosWebMotorsMotosStructObterTipoAlimentacaoMotoResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterTipoAlimentacaoMotoResponse originally named obterTipoAlimentacaoMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterTipoAlimentacaoMotoResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The obterTipoAlimentacaoMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfTipoAlimentacao
     */
    public $obterTipoAlimentacaoMotoResult;
    /**
     * Constructor method for obterTipoAlimentacaoMotoResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfTipoAlimentacao $_obterTipoAlimentacaoMotoResult
     * @return CodigosWebMotorsMotosStructObterTipoAlimentacaoMotoResponse
     */
    public function __construct($_obterTipoAlimentacaoMotoResult = NULL)
    {
        parent::__construct(array('obterTipoAlimentacaoMotoResult'=>($_obterTipoAlimentacaoMotoResult instanceof CodigosWebMotorsMotosStructArrayOfTipoAlimentacao)?$_obterTipoAlimentacaoMotoResult:new CodigosWebMotorsMotosStructArrayOfTipoAlimentacao($_obterTipoAlimentacaoMotoResult)),false);
    }
    /**
     * Get obterTipoAlimentacaoMotoResult value
     * @return CodigosWebMotorsMotosStructArrayOfTipoAlimentacao|null
     */
    public function getObterTipoAlimentacaoMotoResult()
    {
        return $this->obterTipoAlimentacaoMotoResult;
    }
    /**
     * Set obterTipoAlimentacaoMotoResult value
     * @param CodigosWebMotorsMotosStructArrayOfTipoAlimentacao $_obterTipoAlimentacaoMotoResult the obterTipoAlimentacaoMotoResult
     * @return CodigosWebMotorsMotosStructArrayOfTipoAlimentacao
     */
    public function setObterTipoAlimentacaoMotoResult($_obterTipoAlimentacaoMotoResult)
    {
        return ($this->obterTipoAlimentacaoMotoResult = $_obterTipoAlimentacaoMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterTipoAlimentacaoMotoResponse
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
