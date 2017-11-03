<?php
/**
 * File for class WebmotorsEstoqueStructIncluirVideo
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructIncluirVideo originally named incluirVideo
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructIncluirVideo extends WebmotorsEstoqueWsdlClass
{
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
     * The video
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var base64Binary
     */
    public $video;
    /**
     * The nomeArquivo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $nomeArquivo;
    /**
     * Constructor method for incluirVideo
     * @see parent::__construct()
     * @param int $_codigoAnuncio
     * @param string $_hashAutenticacao
     * @param base64Binary $_video
     * @param string $_nomeArquivo
     * @return WebmotorsEstoqueStructIncluirVideo
     */
    public function __construct($_codigoAnuncio,$_hashAutenticacao = NULL,$_video = NULL,$_nomeArquivo = NULL)
    {
        parent::__construct(array('CodigoAnuncio'=>$_codigoAnuncio,'hashAutenticacao'=>$_hashAutenticacao,'video'=>$_video,'nomeArquivo'=>$_nomeArquivo),false);
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
     * Get video value
     * @return base64Binary|null
     */
    public function getVideo()
    {
        return $this->video;
    }
    /**
     * Set video value
     * @param base64Binary $_video the video
     * @return base64Binary
     */
    public function setVideo($_video)
    {
        return ($this->video = $_video);
    }
    /**
     * Get nomeArquivo value
     * @return string|null
     */
    public function getNomeArquivo()
    {
        return $this->nomeArquivo;
    }
    /**
     * Set nomeArquivo value
     * @param string $_nomeArquivo the nomeArquivo
     * @return string
     */
    public function setNomeArquivo($_nomeArquivo)
    {
        return ($this->nomeArquivo = $_nomeArquivo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructIncluirVideo
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
