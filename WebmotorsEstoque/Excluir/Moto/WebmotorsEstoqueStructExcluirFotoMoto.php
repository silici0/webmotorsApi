<?php
/**
 * File for class WebmotorsEstoqueStructExcluirFotoMoto
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructExcluirFotoMoto originally named excluirFotoMoto
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructExcluirFotoMoto extends WebmotorsEstoqueWsdlClass
{
    /**
     * The CodigoFoto
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoFoto;
    /**
     * The CodigoAnuncio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoAnuncio;
    /**
     * The hashAutenticacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $hashAutenticacao;
    /**
     * Constructor method for excluirFotoMoto
     * @see parent::__construct()
     * @param int $_codigoFoto
     * @param int $_codigoAnuncio
     * @param string $_hashAutenticacao
     * @return WebmotorsEstoqueStructExcluirFotoMoto
     */
    public function __construct($_codigoFoto,$_codigoAnuncio,$_hashAutenticacao = NULL)
    {
        parent::__construct(array('CodigoFoto'=>$_codigoFoto,'CodigoAnuncio'=>$_codigoAnuncio,'hashAutenticacao'=>$_hashAutenticacao),false);
    }
    /**
     * Get CodigoFoto value
     * @return int
     */
    public function getCodigoFoto()
    {
        return $this->CodigoFoto;
    }
    /**
     * Set CodigoFoto value
     * @param int $_codigoFoto the CodigoFoto
     * @return int
     */
    public function setCodigoFoto($_codigoFoto)
    {
        return ($this->CodigoFoto = $_codigoFoto);
    }
    /**
     * Get CodigoAnuncio value
     * @return int
     */
    public function getCodigoAnuncio()
    {
        return $this->CodigoAnuncio;
    }
    /**
     * Set CodigoAnuncio value
     * @param int $_codigoAnuncio the CodigoAnuncio
     * @return int
     */
    public function setCodigoAnuncio($_codigoAnuncio)
    {
        return ($this->CodigoAnuncio = $_codigoAnuncio);
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
     * @return WebmotorsEstoqueStructExcluirFotoMoto
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
