<?php
/**
 * File for class CodigosWebMotorsMotosStructOpcionalMotoNovaWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructOpcionalMotoNovaWM originally named OpcionalMotoNovaWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructOpcionalMotoNovaWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The CodigoOpcional
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoOpcional;
    /**
     * The Detalhes
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Detalhes;
    /**
     * The Nome
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Nome;
    /**
     * The TipoOpcional
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TipoOpcional;
    /**
     * Constructor method for OpcionalMotoNovaWM
     * @see parent::__construct()
     * @param int $_codigoOpcional
     * @param string $_detalhes
     * @param string $_nome
     * @param string $_tipoOpcional
     * @return CodigosWebMotorsMotosStructOpcionalMotoNovaWM
     */
    public function __construct($_codigoOpcional,$_detalhes = NULL,$_nome = NULL,$_tipoOpcional = NULL)
    {
        parent::__construct(array('CodigoOpcional'=>$_codigoOpcional,'Detalhes'=>$_detalhes,'Nome'=>$_nome,'TipoOpcional'=>$_tipoOpcional),false);
    }
    /**
     * Get CodigoOpcional value
     * @return int
     */
    public function getCodigoOpcional()
    {
        return $this->CodigoOpcional;
    }
    /**
     * Set CodigoOpcional value
     * @param int $_codigoOpcional the CodigoOpcional
     * @return int
     */
    public function setCodigoOpcional($_codigoOpcional)
    {
        return ($this->CodigoOpcional = $_codigoOpcional);
    }
    /**
     * Get Detalhes value
     * @return string|null
     */
    public function getDetalhes()
    {
        return $this->Detalhes;
    }
    /**
     * Set Detalhes value
     * @param string $_detalhes the Detalhes
     * @return string
     */
    public function setDetalhes($_detalhes)
    {
        return ($this->Detalhes = $_detalhes);
    }
    /**
     * Get Nome value
     * @return string|null
     */
    public function getNome()
    {
        return $this->Nome;
    }
    /**
     * Set Nome value
     * @param string $_nome the Nome
     * @return string
     */
    public function setNome($_nome)
    {
        return ($this->Nome = $_nome);
    }
    /**
     * Get TipoOpcional value
     * @return string|null
     */
    public function getTipoOpcional()
    {
        return $this->TipoOpcional;
    }
    /**
     * Set TipoOpcional value
     * @param string $_tipoOpcional the TipoOpcional
     * @return string
     */
    public function setTipoOpcional($_tipoOpcional)
    {
        return ($this->TipoOpcional = $_tipoOpcional);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructOpcionalMotoNovaWM
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
