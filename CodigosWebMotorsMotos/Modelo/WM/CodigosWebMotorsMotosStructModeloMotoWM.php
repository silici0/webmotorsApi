<?php
/**
 * File for class CodigosWebMotorsMotosStructModeloMotoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructModeloMotoWM originally named ModeloMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructModeloMotoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The CodigoModelo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoModelo;
    /**
     * The NomeModelo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NomeModelo;
    /**
     * The NomeEstiloMoto
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NomeEstiloMoto;
    /**
     * The AnoMoto
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfAnoMotoWM
     */
    public $AnoMoto;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for ModeloMotoWM
     * @see parent::__construct()
     * @param int $_codigoModelo
     * @param string $_nomeModelo
     * @param string $_nomeEstiloMoto
     * @param CodigosWebMotorsMotosStructArrayOfAnoMotoWM $_anoMoto
     * @param string $_codigoRetorno
     * @return CodigosWebMotorsMotosStructModeloMotoWM
     */
    public function __construct($_codigoModelo,$_nomeModelo = NULL,$_nomeEstiloMoto = NULL,$_anoMoto = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoModelo'=>$_codigoModelo,'NomeModelo'=>$_nomeModelo,'NomeEstiloMoto'=>$_nomeEstiloMoto,'AnoMoto'=>($_anoMoto instanceof CodigosWebMotorsMotosStructArrayOfAnoMotoWM)?$_anoMoto:new CodigosWebMotorsMotosStructArrayOfAnoMotoWM($_anoMoto),'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get CodigoModelo value
     * @return int
     */
    public function getCodigoModelo()
    {
        return $this->CodigoModelo;
    }
    /**
     * Set CodigoModelo value
     * @param int $_codigoModelo the CodigoModelo
     * @return int
     */
    public function setCodigoModelo($_codigoModelo)
    {
        return ($this->CodigoModelo = $_codigoModelo);
    }
    /**
     * Get NomeModelo value
     * @return string|null
     */
    public function getNomeModelo()
    {
        return $this->NomeModelo;
    }
    /**
     * Set NomeModelo value
     * @param string $_nomeModelo the NomeModelo
     * @return string
     */
    public function setNomeModelo($_nomeModelo)
    {
        return ($this->NomeModelo = $_nomeModelo);
    }
    /**
     * Get NomeEstiloMoto value
     * @return string|null
     */
    public function getNomeEstiloMoto()
    {
        return $this->NomeEstiloMoto;
    }
    /**
     * Set NomeEstiloMoto value
     * @param string $_nomeEstiloMoto the NomeEstiloMoto
     * @return string
     */
    public function setNomeEstiloMoto($_nomeEstiloMoto)
    {
        return ($this->NomeEstiloMoto = $_nomeEstiloMoto);
    }
    /**
     * Get AnoMoto value
     * @return CodigosWebMotorsMotosStructArrayOfAnoMotoWM|null
     */
    public function getAnoMoto()
    {
        return $this->AnoMoto;
    }
    /**
     * Set AnoMoto value
     * @param CodigosWebMotorsMotosStructArrayOfAnoMotoWM $_anoMoto the AnoMoto
     * @return CodigosWebMotorsMotosStructArrayOfAnoMotoWM
     */
    public function setAnoMoto($_anoMoto)
    {
        return ($this->AnoMoto = $_anoMoto);
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
     * @return CodigosWebMotorsMotosStructModeloMotoWM
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
