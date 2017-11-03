<?php
/**
 * File for class CodigosWebMotorsMotosStructObterExtensoesVideosResponse
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterExtensoesVideosResponse originally named ObterExtensoesVideosResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterExtensoesVideosResponse extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The ObterExtensoesVideosResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM
     */
    public $ObterExtensoesVideosResult;
    /**
     * Constructor method for ObterExtensoesVideosResponse
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM $_obterExtensoesVideosResult
     * @return CodigosWebMotorsMotosStructObterExtensoesVideosResponse
     */
    public function __construct($_obterExtensoesVideosResult = NULL)
    {
        parent::__construct(array('ObterExtensoesVideosResult'=>($_obterExtensoesVideosResult instanceof CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM)?$_obterExtensoesVideosResult:new CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM($_obterExtensoesVideosResult)),false);
    }
    /**
     * Get ObterExtensoesVideosResult value
     * @return CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM|null
     */
    public function getObterExtensoesVideosResult()
    {
        return $this->ObterExtensoesVideosResult;
    }
    /**
     * Set ObterExtensoesVideosResult value
     * @param CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM $_obterExtensoesVideosResult the ObterExtensoesVideosResult
     * @return CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM
     */
    public function setObterExtensoesVideosResult($_obterExtensoesVideosResult)
    {
        return ($this->ObterExtensoesVideosResult = $_obterExtensoesVideosResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterExtensoesVideosResponse
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
