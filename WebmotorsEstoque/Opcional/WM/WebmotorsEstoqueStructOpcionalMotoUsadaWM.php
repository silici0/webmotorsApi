<?php
/**
 * File for class WebmotorsEstoqueStructOpcionalMotoUsadaWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructOpcionalMotoUsadaWM originally named OpcionalMotoUsadaWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructOpcionalMotoUsadaWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The CodigoOpcionalUsado
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoOpcionalUsado;
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
     * Constructor method for OpcionalMotoUsadaWM
     * @see parent::__construct()
     * @param int $_codigoOpcionalUsado
     * @param string $_descricao
     * @param string $_codigoRetorno
     * @return WebmotorsEstoqueStructOpcionalMotoUsadaWM
     */
    public function __construct($_codigoOpcionalUsado,$_descricao = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoOpcionalUsado'=>$_codigoOpcionalUsado,'Descricao'=>$_descricao,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get CodigoOpcionalUsado value
     * @return int
     */
    public function getCodigoOpcionalUsado()
    {
        return $this->CodigoOpcionalUsado;
    }
    /**
     * Set CodigoOpcionalUsado value
     * @param int $_codigoOpcionalUsado the CodigoOpcionalUsado
     * @return int
     */
    public function setCodigoOpcionalUsado($_codigoOpcionalUsado)
    {
        return ($this->CodigoOpcionalUsado = $_codigoOpcionalUsado);
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
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructOpcionalMotoUsadaWM
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
