<?php
/**
 * File for class CodigosWebMotorsMotosStructObterModeloMotos
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterModeloMotos originally named obterModeloMotos
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterModeloMotos extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The codigoMarca
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $codigoMarca;
    /**
     * The dataInicioAtualizacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $dataInicioAtualizacao;
    /**
     * The dataFinalAtualizacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $dataFinalAtualizacao;
    /**
     * The hashAutenticacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $hashAutenticacao;
    /**
     * Constructor method for obterModeloMotos
     * @see parent::__construct()
     * @param int $_codigoMarca
     * @param dateTime $_dataInicioAtualizacao
     * @param dateTime $_dataFinalAtualizacao
     * @param string $_hashAutenticacao
     * @return CodigosWebMotorsMotosStructObterModeloMotos
     */
    public function __construct($_codigoMarca,$_dataInicioAtualizacao,$_dataFinalAtualizacao,$_hashAutenticacao = NULL)
    {
        parent::__construct(array('codigoMarca'=>$_codigoMarca,'dataInicioAtualizacao'=>$_dataInicioAtualizacao,'dataFinalAtualizacao'=>$_dataFinalAtualizacao,'hashAutenticacao'=>$_hashAutenticacao),false);
    }
    /**
     * Get codigoMarca value
     * @return int
     */
    public function getCodigoMarca()
    {
        return $this->codigoMarca;
    }
    /**
     * Set codigoMarca value
     * @param int $_codigoMarca the codigoMarca
     * @return int
     */
    public function setCodigoMarca($_codigoMarca)
    {
        return ($this->codigoMarca = $_codigoMarca);
    }
    /**
     * Get dataInicioAtualizacao value
     * @return dateTime
     */
    public function getDataInicioAtualizacao()
    {
        return $this->dataInicioAtualizacao;
    }
    /**
     * Set dataInicioAtualizacao value
     * @param dateTime $_dataInicioAtualizacao the dataInicioAtualizacao
     * @return dateTime
     */
    public function setDataInicioAtualizacao($_dataInicioAtualizacao)
    {
        return ($this->dataInicioAtualizacao = $_dataInicioAtualizacao);
    }
    /**
     * Get dataFinalAtualizacao value
     * @return dateTime
     */
    public function getDataFinalAtualizacao()
    {
        return $this->dataFinalAtualizacao;
    }
    /**
     * Set dataFinalAtualizacao value
     * @param dateTime $_dataFinalAtualizacao the dataFinalAtualizacao
     * @return dateTime
     */
    public function setDataFinalAtualizacao($_dataFinalAtualizacao)
    {
        return ($this->dataFinalAtualizacao = $_dataFinalAtualizacao);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterModeloMotos
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
