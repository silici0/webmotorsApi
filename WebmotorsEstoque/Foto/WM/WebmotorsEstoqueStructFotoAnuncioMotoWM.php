<?php
/**
 * File for class WebmotorsEstoqueStructFotoAnuncioMotoWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructFotoAnuncioMotoWM originally named FotoAnuncioMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructFotoAnuncioMotoWM extends WebmotorsEstoqueWsdlClass
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
     * The CodigoFoto
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $CodigoFoto;
    /**
     * The TipoFoto
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var unsignedShort
     */
    public $TipoFoto;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for FotoAnuncioMotoWM
     * @see parent::__construct()
     * @param int $_codigoAnuncio
     * @param decimal $_codigoFoto
     * @param unsignedShort $_tipoFoto
     * @param string $_codigoRetorno
     * @return WebmotorsEstoqueStructFotoAnuncioMotoWM
     */
    public function __construct($_codigoAnuncio,$_codigoFoto,$_tipoFoto,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoAnuncio'=>$_codigoAnuncio,'CodigoFoto'=>$_codigoFoto,'TipoFoto'=>$_tipoFoto,'CodigoRetorno'=>$_codigoRetorno),false);
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
     * Get CodigoFoto value
     * @return decimal
     */
    public function getCodigoFoto()
    {
        return $this->CodigoFoto;
    }
    /**
     * Set CodigoFoto value
     * @param decimal $_codigoFoto the CodigoFoto
     * @return decimal
     */
    public function setCodigoFoto($_codigoFoto)
    {
        return ($this->CodigoFoto = $_codigoFoto);
    }
    /**
     * Get TipoFoto value
     * @return unsignedShort
     */
    public function getTipoFoto()
    {
        return $this->TipoFoto;
    }
    /**
     * Set TipoFoto value
     * @param unsignedShort $_tipoFoto the TipoFoto
     * @return unsignedShort
     */
    public function setTipoFoto($_tipoFoto)
    {
        return ($this->TipoFoto = $_tipoFoto);
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
     * @return WebmotorsEstoqueStructFotoAnuncioMotoWM
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
