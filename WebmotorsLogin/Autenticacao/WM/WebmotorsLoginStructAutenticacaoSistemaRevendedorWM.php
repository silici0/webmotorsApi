<?php
/**
 * File for class WebmotorsLoginStructAutenticacaoSistemaRevendedorWM
 * @package WebmotorsLogin
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsLoginStructAutenticacaoSistemaRevendedorWM originally named AutenticacaoSistemaRevendedorWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://integracao.webmotors.com.br/wsLoginSistemaRevendedor.asmx?wsdl}
 * @package WebmotorsLogin
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */

class WebmotorsLoginStructAutenticacaoSistemaRevendedorWM extends WebmotorsLoginWsdlClass
{
    /**
     * The HashAutenticacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HashAutenticacao;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for AutenticacaoSistemaRevendedorWM
     * @see parent::__construct()
     * @param string $_hashAutenticacao
     * @param string $_codigoRetorno
     * @return WebmotorsLoginStructAutenticacaoSistemaRevendedorWM
     */
    public function __construct($_hashAutenticacao = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('HashAutenticacao'=>$_hashAutenticacao,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get HashAutenticacao value
     * @return string|null
     */
    public function getHashAutenticacao()
    {
        return $this->HashAutenticacao;
    }
    /**
     * Set HashAutenticacao value
     * @param string $_hashAutenticacao the HashAutenticacao
     * @return string
     */
    public function setHashAutenticacao($_hashAutenticacao)
    {
        return ($this->HashAutenticacao = $_hashAutenticacao);
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
     * @see WebmotorsLoginWsdlClass::__set_state()
     * @uses WebmotorsLoginWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsLoginStructAutenticacaoSistemaRevendedorWM
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
