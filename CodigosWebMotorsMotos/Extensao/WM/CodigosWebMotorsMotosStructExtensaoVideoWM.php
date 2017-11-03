<?php
/**
 * File for class CodigosWebMotorsMotosStructExtensaoVideoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructExtensaoVideoWM originally named ExtensaoVideoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructExtensaoVideoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The Extensao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Extensao;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for ExtensaoVideoWM
     * @see parent::__construct()
     * @param string $_extensao
     * @param string $_codigoRetorno
     * @return CodigosWebMotorsMotosStructExtensaoVideoWM
     */
    public function __construct($_extensao = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('Extensao'=>$_extensao,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get Extensao value
     * @return string|null
     */
    public function getExtensao()
    {
        return $this->Extensao;
    }
    /**
     * Set Extensao value
     * @param string $_extensao the Extensao
     * @return string
     */
    public function setExtensao($_extensao)
    {
        return ($this->Extensao = $_extensao);
    }
    /**
     * Get CodigoRetorno value
     * @return string|null
     */
    public function getCodigoRetorno()
    {
        return $this->CodigoRetorno;
    }
    /**
     * Set CodigoRetorno value
     * @param string $_codigoRetorno the CodigoRetorno
     * @return string
     */
    public function setCodigoRetorno($_codigoRetorno)
    {
        return ($this->CodigoRetorno = $_codigoRetorno);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructExtensaoVideoWM
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
