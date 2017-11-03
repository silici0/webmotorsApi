<?php
/**
 * File for class CodigosWebMotorsMotosStructModalidadeMotoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructModalidadeMotoWM originally named ModalidadeMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructModalidadeMotoWM extends CodigosWebMotorsMotosWsdlClass
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
     * The QuantidadeAnunciosTotal
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $QuantidadeAnunciosTotal;
    /**
     * The QuantidadeAnuncios
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $QuantidadeAnuncios;
    /**
     * The Prioridade
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $Prioridade;
    /**
     * The Descricao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Descricao;
    /**
     * The TipoAnuncio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TipoAnuncio;
    /**
     * The PermiteFoto
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PermiteFoto;
    /**
     * The PermiteVideo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PermiteVideo;
    /**
     * The PermiteFotoAnimacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PermiteFotoAnimacao;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for ModalidadeMotoWM
     * @see parent::__construct()
     * @param decimal $_codigoModalidade
     * @param int $_quantidadeAnunciosTotal
     * @param int $_quantidadeAnuncios
     * @param int $_prioridade
     * @param string $_descricao
     * @param string $_tipoAnuncio
     * @param string $_permiteFoto
     * @param string $_permiteVideo
     * @param string $_permiteFotoAnimacao
     * @param string $_codigoRetorno
     * @return CodigosWebMotorsMotosStructModalidadeMotoWM
     */
    public function __construct($_codigoModalidade,$_quantidadeAnunciosTotal,$_quantidadeAnuncios,$_prioridade,$_descricao = NULL,$_tipoAnuncio = NULL,$_permiteFoto = NULL,$_permiteVideo = NULL,$_permiteFotoAnimacao = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoModalidade'=>$_codigoModalidade,'QuantidadeAnunciosTotal'=>$_quantidadeAnunciosTotal,'QuantidadeAnuncios'=>$_quantidadeAnuncios,'Prioridade'=>$_prioridade,'Descricao'=>$_descricao,'TipoAnuncio'=>$_tipoAnuncio,'PermiteFoto'=>$_permiteFoto,'PermiteVideo'=>$_permiteVideo,'PermiteFotoAnimacao'=>$_permiteFotoAnimacao,'CodigoRetorno'=>$_codigoRetorno),false);
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
     * Get QuantidadeAnunciosTotal value
     * @return int
     */
    public function getQuantidadeAnunciosTotal()
    {
        return $this->QuantidadeAnunciosTotal;
    }
    /**
     * Set QuantidadeAnunciosTotal value
     * @param int $_quantidadeAnunciosTotal the QuantidadeAnunciosTotal
     * @return int
     */
    public function setQuantidadeAnunciosTotal($_quantidadeAnunciosTotal)
    {
        return ($this->QuantidadeAnunciosTotal = $_quantidadeAnunciosTotal);
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
     * Get Prioridade value
     * @return int
     */
    public function getPrioridade()
    {
        return $this->Prioridade;
    }
    /**
     * Set Prioridade value
     * @param int $_prioridade the Prioridade
     * @return int
     */
    public function setPrioridade($_prioridade)
    {
        return ($this->Prioridade = $_prioridade);
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
     * Get PermiteFoto value
     * @return string|null
     */
    public function getPermiteFoto()
    {
        return $this->PermiteFoto;
    }
    /**
     * Set PermiteFoto value
     * @param string $_permiteFoto the PermiteFoto
     * @return string
     */
    public function setPermiteFoto($_permiteFoto)
    {
        return ($this->PermiteFoto = $_permiteFoto);
    }
    /**
     * Get PermiteVideo value
     * @return string|null
     */
    public function getPermiteVideo()
    {
        return $this->PermiteVideo;
    }
    /**
     * Set PermiteVideo value
     * @param string $_permiteVideo the PermiteVideo
     * @return string
     */
    public function setPermiteVideo($_permiteVideo)
    {
        return ($this->PermiteVideo = $_permiteVideo);
    }
    /**
     * Get PermiteFotoAnimacao value
     * @return string|null
     */
    public function getPermiteFotoAnimacao()
    {
        return $this->PermiteFotoAnimacao;
    }
    /**
     * Set PermiteFotoAnimacao value
     * @param string $_permiteFotoAnimacao the PermiteFotoAnimacao
     * @return string
     */
    public function setPermiteFotoAnimacao($_permiteFotoAnimacao)
    {
        return ($this->PermiteFotoAnimacao = $_permiteFotoAnimacao);
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
     * @return CodigosWebMotorsMotosStructModalidadeMotoWM
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
