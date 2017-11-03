<?php
/**
 * File for class WebmotorsEstoqueStructTrocarModalidadeMoto
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructTrocarModalidadeMoto originally named TrocarModalidadeMoto
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructTrocarModalidadeMoto extends WebmotorsEstoqueWsdlClass
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
     * The codigoModalidade
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $codigoModalidade;
    /**
     * The codigoAnuncio2
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $codigoAnuncio2;
    /**
     * The hashAutenticacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $hashAutenticacao;
    /**
     * The tipoAnuncio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $tipoAnuncio;
    /**
     * Constructor method for TrocarModalidadeMoto
     * @see parent::__construct()
     * @param decimal $_codigoAnuncio
     * @param decimal $_codigoModalidade
     * @param decimal $_codigoAnuncio2
     * @param string $_hashAutenticacao
     * @param string $_tipoAnuncio
     * @return WebmotorsEstoqueStructTrocarModalidadeMoto
     */
    public function __construct($_codigoAnuncio,$_codigoModalidade,$_codigoAnuncio2,$_hashAutenticacao = NULL,$_tipoAnuncio = NULL)
    {
        parent::__construct(array('codigoAnuncio'=>$_codigoAnuncio,'codigoModalidade'=>$_codigoModalidade,'codigoAnuncio2'=>$_codigoAnuncio2,'hashAutenticacao'=>$_hashAutenticacao,'tipoAnuncio'=>$_tipoAnuncio),false);
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
     * Get codigoModalidade value
     * @return decimal
     */
    public function getCodigoModalidade()
    {
        return $this->codigoModalidade;
    }
    /**
     * Set codigoModalidade value
     * @param decimal $_codigoModalidade the codigoModalidade
     * @return decimal
     */
    public function setCodigoModalidade($_codigoModalidade)
    {
        return ($this->codigoModalidade = $_codigoModalidade);
    }
    /**
     * Get codigoAnuncio2 value
     * @return decimal
     */
    public function getCodigoAnuncio2()
    {
        return $this->codigoAnuncio2;
    }
    /**
     * Set codigoAnuncio2 value
     * @param decimal $_codigoAnuncio2 the codigoAnuncio2
     * @return decimal
     */
    public function setCodigoAnuncio2($_codigoAnuncio2)
    {
        return ($this->codigoAnuncio2 = $_codigoAnuncio2);
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
     * Get tipoAnuncio value
     * @return string|null
     */
    public function getTipoAnuncio()
    {
        return $this->tipoAnuncio;
    }
    /**
     * Set tipoAnuncio value
     * @param string $_tipoAnuncio the tipoAnuncio
     * @return string
     */
    public function setTipoAnuncio($_tipoAnuncio)
    {
        return ($this->tipoAnuncio = $_tipoAnuncio);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructTrocarModalidadeMoto
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
