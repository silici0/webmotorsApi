<?php
/**
 * File for class CodigosWebMotorsMotosStructCorMotoNovaWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructCorMotoNovaWM originally named CorMotoNovaWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructCorMotoNovaWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The CodigoCor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoCor;
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
     * Constructor method for CorMotoNovaWM
     * @see parent::__construct()
     * @param string $_codigoCor
     * @param string $_descricao
     * @param string $_codigoRetorno
     * @return CodigosWebMotorsMotosStructCorMotoNovaWM
     */
    public function __construct($_codigoCor = NULL,$_descricao = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoCor'=>$_codigoCor,'Descricao'=>$_descricao,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get CodigoCor value
     * @return string|null
     */
    public function getCodigoCor()
    {
        return $this->CodigoCor;
    }
    /**
     * Set CodigoCor value
     * @param string $_codigoCor the CodigoCor
     * @return string
     */
    public function setCodigoCor($_codigoCor)
    {
        return ($this->CodigoCor = $_codigoCor);
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
     * @return CodigosWebMotorsMotosStructCorMotoNovaWM
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
