<?php
/**
 * File for class WebmotorsEstoqueStructFotosWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructFotosWM originally named FotosWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructFotosWM extends WebmotorsEstoqueWsdlClass
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
     * The QuantidadeFotos
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $QuantidadeFotos;
    /**
     * The Fotos
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructArrayOfDetalheFotoWM
     */
    public $Fotos;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for FotosWM
     * @see parent::__construct()
     * @param decimal $_codigoAnuncio
     * @param int $_quantidadeFotos
     * @param WebmotorsEstoqueStructArrayOfDetalheFotoWM $_fotos
     * @param string $_codigoRetorno
     * @return WebmotorsEstoqueStructFotosWM
     */
    public function __construct($_codigoAnuncio,$_quantidadeFotos,$_fotos = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoAnuncio'=>$_codigoAnuncio,'QuantidadeFotos'=>$_quantidadeFotos,'Fotos'=>($_fotos instanceof WebmotorsEstoqueStructArrayOfDetalheFotoWM)?$_fotos:new WebmotorsEstoqueStructArrayOfDetalheFotoWM($_fotos),'CodigoRetorno'=>$_codigoRetorno),false);
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
     * Get QuantidadeFotos value
     * @return int
     */
    public function getQuantidadeFotos()
    {
        return $this->QuantidadeFotos;
    }
    /**
     * Set QuantidadeFotos value
     * @param int $_quantidadeFotos the QuantidadeFotos
     * @return int
     */
    public function setQuantidadeFotos($_quantidadeFotos)
    {
        return ($this->QuantidadeFotos = $_quantidadeFotos);
    }
    /**
     * Get Fotos value
     * @return WebmotorsEstoqueStructArrayOfDetalheFotoWM|null
     */
    public function getFotos()
    {
        return $this->Fotos;
    }
    /**
     * Set Fotos value
     * @param WebmotorsEstoqueStructArrayOfDetalheFotoWM $_fotos the Fotos
     * @return WebmotorsEstoqueStructArrayOfDetalheFotoWM
     */
    public function setFotos($_fotos)
    {
        return ($this->Fotos = $_fotos);
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
     * @return WebmotorsEstoqueStructFotosWM
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
