<?php
/**
 * File for class CodigosWebMotorsMotosStructModalidadeAnuncioWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructModalidadeAnuncioWM originally named ModalidadeAnuncioWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructModalidadeAnuncioWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The CodigoModalidade
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $CodigoModalidade;
    /**
     * The QuantidadeAnuncios
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $QuantidadeAnuncios;
    /**
     * The Descricao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Descricao;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for ModalidadeAnuncioWM
     * @see parent::__construct()
     * @param decimal $_codigoModalidade
     * @param int $_quantidadeAnuncios
     * @param string $_descricao
     * @param string $_codigoRetorno
     * @return CodigosWebMotorsMotosStructModalidadeAnuncioWM
     */
    public function __construct($_codigoModalidade,$_quantidadeAnuncios,$_descricao = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoModalidade'=>$_codigoModalidade,'QuantidadeAnuncios'=>$_quantidadeAnuncios,'Descricao'=>$_descricao,'CodigoRetorno'=>$_codigoRetorno),false);
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
     * Get QuantidadeAnuncios value
     * @return int
     */
    public function getQuantidadeAnuncios()
    {
        return $this->QuantidadeAnuncios;
    }
    /**
     * Set QuantidadeAnuncios value
     * @param int $_quantidadeAnuncios the QuantidadeAnuncios
     * @return int
     */
    public function setQuantidadeAnuncios($_quantidadeAnuncios)
    {
        return ($this->QuantidadeAnuncios = $_quantidadeAnuncios);
    }
    /**
     * Get Descricao value
     * @return string|null
     */
    public function getDescricao()
    {
        return $this->Descricao;
    }
    /**
     * Set Descricao value
     * @param string $_descricao the Descricao
     * @return string
     */
    public function setDescricao($_descricao)
    {
        return ($this->Descricao = $_descricao);
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
     * @return CodigosWebMotorsMotosStructModalidadeAnuncioWM
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
