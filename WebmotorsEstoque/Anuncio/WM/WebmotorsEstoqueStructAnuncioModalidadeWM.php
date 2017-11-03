<?php
/**
 * File for class WebmotorsEstoqueStructAnuncioModalidadeWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructAnuncioModalidadeWM originally named AnuncioModalidadeWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructAnuncioModalidadeWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The CodigoAnuncio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $CodigoAnuncio;
    /**
     * The CodigoModalidade
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $CodigoModalidade;
    /**
     * The CodigoAnuncio2
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $CodigoAnuncio2;
    /**
     * The TipoAnuncio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TipoAnuncio;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for AnuncioModalidadeWM
     * @see parent::__construct()
     * @param decimal $_codigoAnuncio
     * @param decimal $_codigoModalidade
     * @param decimal $_codigoAnuncio2
     * @param string $_tipoAnuncio
     * @param string $_codigoRetorno
     * @return WebmotorsEstoqueStructAnuncioModalidadeWM
     */
    public function __construct($_codigoAnuncio,$_codigoModalidade,$_codigoAnuncio2,$_tipoAnuncio = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoAnuncio'=>$_codigoAnuncio,'CodigoModalidade'=>$_codigoModalidade,'CodigoAnuncio2'=>$_codigoAnuncio2,'TipoAnuncio'=>$_tipoAnuncio,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get CodigoAnuncio value
     * @return decimal
     */
    public function getCodigoAnuncio()
    {
        return $this->CodigoAnuncio;
    }
    /**
     * Set CodigoAnuncio value
     * @param decimal $_codigoAnuncio the CodigoAnuncio
     * @return decimal
     */
    public function setCodigoAnuncio($_codigoAnuncio)
    {
        return ($this->CodigoAnuncio = $_codigoAnuncio);
    }
    /**
     * Get CodigoModalidade value
     * @return decimal
     */
    public function getCodigoModalidade()
    {
        return $this->CodigoModalidade;
    }
    /**
     * Set CodigoModalidade value
     * @param decimal $_codigoModalidade the CodigoModalidade
     * @return decimal
     */
    public function setCodigoModalidade($_codigoModalidade)
    {
        return ($this->CodigoModalidade = $_codigoModalidade);
    }
    /**
     * Get CodigoAnuncio2 value
     * @return decimal
     */
    public function getCodigoAnuncio2()
    {
        return $this->CodigoAnuncio2;
    }
    /**
     * Set CodigoAnuncio2 value
     * @param decimal $_codigoAnuncio2 the CodigoAnuncio2
     * @return decimal
     */
    public function setCodigoAnuncio2($_codigoAnuncio2)
    {
        return ($this->CodigoAnuncio2 = $_codigoAnuncio2);
    }
    /**
     * Get TipoAnuncio value
     * @return string|null
     */
    public function getTipoAnuncio()
    {
        return $this->TipoAnuncio;
    }
    /**
     * Set TipoAnuncio value
     * @param string $_tipoAnuncio the TipoAnuncio
     * @return string
     */
    public function setTipoAnuncio($_tipoAnuncio)
    {
        return ($this->TipoAnuncio = $_tipoAnuncio);
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
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructAnuncioModalidadeWM
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
