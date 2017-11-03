<?php
/**
 * File for class WebmotorsEstoqueStructAvalicaoMoto
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructAvalicaoMoto originally named AvalicaoMoto
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructAvalicaoMoto extends WebmotorsEstoqueWsdlClass
{
    /**
     * The codigoMarca
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $codigoMarca;
    /**
     * The codigoModelo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $codigoModelo;
    /**
     * The ano
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $ano;
    /**
     * The hashAutenticacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $hashAutenticacao;
    /**
     * The uf
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $uf;
    /**
     * Constructor method for AvalicaoMoto
     * @see parent::__construct()
     * @param decimal $_codigoMarca
     * @param decimal $_codigoModelo
     * @param int $_ano
     * @param string $_hashAutenticacao
     * @param string $_uf
     * @return WebmotorsEstoqueStructAvalicaoMoto
     */
    public function __construct($_codigoMarca,$_codigoModelo,$_ano,$_hashAutenticacao = NULL,$_uf = NULL)
    {
        parent::__construct(array('codigoMarca'=>$_codigoMarca,'codigoModelo'=>$_codigoModelo,'ano'=>$_ano,'hashAutenticacao'=>$_hashAutenticacao,'uf'=>$_uf),false);
    }
    /**
     * Get codigoMarca value
     * @return decimal
     */
    public function getCodigoMarca()
    {
        return $this->codigoMarca;
    }
    /**
     * Set codigoMarca value
     * @param decimal $_codigoMarca the codigoMarca
     * @return decimal
     */
    public function setCodigoMarca($_codigoMarca)
    {
        return ($this->codigoMarca = $_codigoMarca);
    }
    /**
     * Get codigoModelo value
     * @return decimal
     */
    public function getCodigoModelo()
    {
        return $this->codigoModelo;
    }
    /**
     * Set codigoModelo value
     * @param decimal $_codigoModelo the codigoModelo
     * @return decimal
     */
    public function setCodigoModelo($_codigoModelo)
    {
        return ($this->codigoModelo = $_codigoModelo);
    }
    /**
     * Get ano value
     * @return int
     */
    public function getAno()
    {
        return $this->ano;
    }
    /**
     * Set ano value
     * @param int $_ano the ano
     * @return int
     */
    public function setAno($_ano)
    {
        return ($this->ano = $_ano);
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
     * Get uf value
     * @return string|null
     */
    public function getUf()
    {
        return $this->uf;
    }
    /**
     * Set uf value
     * @param string $_uf the uf
     * @return string
     */
    public function setUf($_uf)
    {
        return ($this->uf = $_uf);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructAvalicaoMoto
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
