<?php
/**
 * File for class WebmotorsLoginStructAutenticar
 * @package WebmotorsLogin
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsLoginStructAutenticar originally named autenticar
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://integracao.webmotors.com.br/wsLoginSistemaRevendedor.asmx?wsdl}
 * @package WebmotorsLogin
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */

class WebmotorsLoginStructAutenticar extends WebmotorsLoginWsdlClass
{
    /**
     * The cnpj
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cnpj;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $email;
    /**
     * The senha
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $senha;
    /**
     * Constructor method for autenticar
     * @see parent::__construct()
     * @param string $_cnpj
     * @param string $_email
     * @param string $_senha
     * @return WebmotorsLoginStructAutenticar
     */
    public function __construct($_cnpj = NULL,$_email = NULL,$_senha = NULL)
    {
        parent::__construct(array('cnpj'=>$_cnpj,'email'=>$_email,'senha'=>$_senha),false);
    }
    /**
     * Get cnpj value
     * @return string|null
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }
    /**
     * Set cnpj value
     * @param string $_cnpj the cnpj
     * @return string
     */
    public function setCnpj($_cnpj)
    {
        return ($this->cnpj = $_cnpj);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $_email the email
     * @return string
     */
    public function setEmail($_email)
    {
        return ($this->email = $_email);
    }
    /**
     * Get senha value
     * @return string|null
     */
    public function getSenha()
    {
        return $this->senha;
    }
    /**
     * Set senha value
     * @param string $_senha the senha
     * @return string
     */
    public function setSenha($_senha)
    {
        return ($this->senha = $_senha);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsLoginWsdlClass::__set_state()
     * @uses WebmotorsLoginWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsLoginStructAutenticar
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
