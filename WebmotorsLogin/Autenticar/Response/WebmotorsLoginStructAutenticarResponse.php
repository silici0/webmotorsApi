<?php
/**
 * File for class WebmotorsLoginStructAutenticarResponse
 * @package WebmotorsLogin
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsLoginStructAutenticarResponse originally named autenticarResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://integracao.webmotors.com.br/wsLoginSistemaRevendedor.asmx?wsdl}
 * @package WebmotorsLogin
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */

class WebmotorsLoginStructAutenticarResponse extends WebmotorsLoginWsdlClass
{
    /**
     * The autenticarResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsLoginStructAutenticacaoSistemaRevendedorWM
     */
    public $autenticarResult;
    /**
     * Constructor method for autenticarResponse
     * @see parent::__construct()
     * @param WebmotorsLoginStructAutenticacaoSistemaRevendedorWM $_autenticarResult
     * @return WebmotorsLoginStructAutenticarResponse
     */
    public function __construct($_autenticarResult = NULL)
    {
        parent::__construct(array('autenticarResult'=>$_autenticarResult),false);
    }
    /**
     * Get autenticarResult value
     * @return WebmotorsLoginStructAutenticacaoSistemaRevendedorWM|null
     */
    public function getAutenticarResult()
    {
        return $this->autenticarResult;
    }
    /**
     * Set autenticarResult value
     * @param WebmotorsLoginStructAutenticacaoSistemaRevendedorWM $_autenticarResult the autenticarResult
     * @return WebmotorsLoginStructAutenticacaoSistemaRevendedorWM
     */
    public function setAutenticarResult($_autenticarResult)
    {
        return ($this->autenticarResult = $_autenticarResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsLoginWsdlClass::__set_state()
     * @uses WebmotorsLoginWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsLoginStructAutenticarResponse
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
