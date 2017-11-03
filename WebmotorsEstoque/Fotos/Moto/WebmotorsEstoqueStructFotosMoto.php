<?php
/**
 * File for class WebmotorsEstoqueStructFotosMoto
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructFotosMoto originally named FotosMoto
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructFotosMoto extends WebmotorsEstoqueWsdlClass
{
    /**
     * The codigoAnuncio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $codigoAnuncio;
    /**
     * The hashAutenticacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $hashAutenticacao;
    /**
     * Constructor method for FotosMoto
     * @see parent::__construct()
     * @param decimal $_codigoAnuncio
     * @param string $_hashAutenticacao
     * @return WebmotorsEstoqueStructFotosMoto
     */
    public function __construct($_codigoAnuncio,$_hashAutenticacao = NULL)
    {
        parent::__construct(array('codigoAnuncio'=>$_codigoAnuncio,'hashAutenticacao'=>$_hashAutenticacao),false);
    }
    /**
     * Get codigoAnuncio value
     * @return decimal
     */
    public function getCodigoAnuncio()
    {
        return $this->codigoAnuncio;
    }
    /**
     * Set codigoAnuncio value
     * @param decimal $_codigoAnuncio the codigoAnuncio
     * @return decimal
     */
    public function setCodigoAnuncio($_codigoAnuncio)
    {
        return ($this->codigoAnuncio = $_codigoAnuncio);
    }
    /**
     * Get hashAutenticacao value
     * @return string|null
     */
    public function getHashAutenticacao()
    {
        return $this->hashAutenticacao;
    }
    /**
     * Set hashAutenticacao value
     * @param string $_hashAutenticacao the hashAutenticacao
     * @return string
     */
    public function setHashAutenticacao($_hashAutenticacao)
    {
        return ($this->hashAutenticacao = $_hashAutenticacao);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructFotosMoto
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
