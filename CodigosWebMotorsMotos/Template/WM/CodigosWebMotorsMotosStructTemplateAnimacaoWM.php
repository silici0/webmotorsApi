<?php
/**
 * File for class CodigosWebMotorsMotosStructTemplateAnimacaoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructTemplateAnimacaoWM originally named TemplateAnimacaoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructTemplateAnimacaoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The CodigoTemplate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoTemplate;
    /**
     * The NomeTemplate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NomeTemplate;
    /**
     * The TipoTemplate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TipoTemplate;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for TemplateAnimacaoWM
     * @see parent::__construct()
     * @param int $_codigoTemplate
     * @param string $_nomeTemplate
     * @param string $_tipoTemplate
     * @param string $_codigoRetorno
     * @return CodigosWebMotorsMotosStructTemplateAnimacaoWM
     */
    public function __construct($_codigoTemplate,$_nomeTemplate = NULL,$_tipoTemplate = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoTemplate'=>$_codigoTemplate,'NomeTemplate'=>$_nomeTemplate,'TipoTemplate'=>$_tipoTemplate,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get CodigoTemplate value
     * @return int
     */
    public function getCodigoTemplate()
    {
        return $this->CodigoTemplate;
    }
    /**
     * Set CodigoTemplate value
     * @param int $_codigoTemplate the CodigoTemplate
     * @return int
     */
    public function setCodigoTemplate($_codigoTemplate)
    {
        return ($this->CodigoTemplate = $_codigoTemplate);
    }
    /**
     * Get NomeTemplate value
     * @return string|null
     */
    public function getNomeTemplate()
    {
        return $this->NomeTemplate;
    }
    /**
     * Set NomeTemplate value
     * @param string $_nomeTemplate the NomeTemplate
     * @return string
     */
    public function setNomeTemplate($_nomeTemplate)
    {
        return ($this->NomeTemplate = $_nomeTemplate);
    }
    /**
     * Get TipoTemplate value
     * @return string|null
     */
    public function getTipoTemplate()
    {
        return $this->TipoTemplate;
    }
    /**
     * Set TipoTemplate value
     * @param string $_tipoTemplate the TipoTemplate
     * @return string
     */
    public function setTipoTemplate($_tipoTemplate)
    {
        return ($this->TipoTemplate = $_tipoTemplate);
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
     * @return CodigosWebMotorsMotosStructTemplateAnimacaoWM
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
