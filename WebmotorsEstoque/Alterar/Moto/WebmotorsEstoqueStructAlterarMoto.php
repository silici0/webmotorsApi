<?php
/**
 * File for class WebmotorsEstoqueStructAlterarMoto
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructAlterarMoto originally named alterarMoto
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructAlterarMoto extends WebmotorsEstoqueWsdlClass
{
    /**
     * The hashAutenticacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $hashAutenticacao;
    /**
     * The anuncioWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructAnuncioMotoWM
     */
    public $anuncioWM;
    /**
     * Constructor method for alterarMoto
     * @see parent::__construct()
     * @param string $_hashAutenticacao
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_anuncioWM
     * @return WebmotorsEstoqueStructAlterarMoto
     */
    public function __construct($_hashAutenticacao = NULL,$_anuncioWM = NULL)
    {
        parent::__construct(array('hashAutenticacao'=>$_hashAutenticacao,'anuncioWM'=>$_anuncioWM),false);
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
     * Get anuncioWM value
     * @return WebmotorsEstoqueStructAnuncioMotoWM|null
     */
    public function getAnuncioWM()
    {
        return $this->anuncioWM;
    }
    /**
     * Set anuncioWM value
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_anuncioWM the anuncioWM
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function setAnuncioWM($_anuncioWM)
    {
        return ($this->anuncioWM = $_anuncioWM);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructAlterarMoto
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
