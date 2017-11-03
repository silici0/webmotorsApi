<?php
/**
 * File for class CodigosWebMotorsMotosStructAnoMotoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructAnoMotoWM originally named AnoMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructAnoMotoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The AnoModelo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $AnoModelo;
    /**
     * The NumeroMarchas
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $NumeroMarchas;
    /**
     * The TipoRefrigeracao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $TipoRefrigeracao;
    /**
     * The TipoAlimentacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $TipoAlimentacao;
    /**
     * The TipoMotor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $TipoMotor;
    /**
     * The TipoPartida
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $TipoPartida;
    /**
     * The TipoFreio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $TipoFreio;
    /**
     * The PermiteAnunciarUsado
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PermiteAnunciarUsado;
    /**
     * The PermiteAnunciarNovo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PermiteAnunciarNovo;
    /**
     * The Cores
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM
     */
    public $Cores;
    /**
     * The Opcionais
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM
     */
    public $Opcionais;
    /**
     * Constructor method for AnoMotoWM
     * @see parent::__construct()
     * @param int $_anoModelo
     * @param int $_numeroMarchas
     * @param int $_tipoRefrigeracao
     * @param int $_tipoAlimentacao
     * @param int $_tipoMotor
     * @param int $_tipoPartida
     * @param int $_tipoFreio
     * @param string $_permiteAnunciarUsado
     * @param string $_permiteAnunciarNovo
     * @param CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM $_cores
     * @param CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM $_opcionais
     * @return CodigosWebMotorsMotosStructAnoMotoWM
     */
    public function __construct($_anoModelo,$_numeroMarchas,$_tipoRefrigeracao,$_tipoAlimentacao,$_tipoMotor,$_tipoPartida,$_tipoFreio,$_permiteAnunciarUsado = NULL,$_permiteAnunciarNovo = NULL,$_cores = NULL,$_opcionais = NULL)
    {
        parent::__construct(array('AnoModelo'=>$_anoModelo,'NumeroMarchas'=>$_numeroMarchas,'TipoRefrigeracao'=>$_tipoRefrigeracao,'TipoAlimentacao'=>$_tipoAlimentacao,'TipoMotor'=>$_tipoMotor,'TipoPartida'=>$_tipoPartida,'TipoFreio'=>$_tipoFreio,'PermiteAnunciarUsado'=>$_permiteAnunciarUsado,'PermiteAnunciarNovo'=>$_permiteAnunciarNovo,'Cores'=>($_cores instanceof CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM)?$_cores:new CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM($_cores),'Opcionais'=>($_opcionais instanceof CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM)?$_opcionais:new CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM($_opcionais)),false);
    }
    /**
     * Get AnoModelo value
     * @return int
     */
    public function getAnoModelo()
    {
        return $this->AnoModelo;
    }
    /**
     * Set AnoModelo value
     * @param int $_anoModelo the AnoModelo
     * @return int
     */
    public function setAnoModelo($_anoModelo)
    {
        return ($this->AnoModelo = $_anoModelo);
    }
    /**
     * Get NumeroMarchas value
     * @return int
     */
    public function getNumeroMarchas()
    {
        return $this->NumeroMarchas;
    }
    /**
     * Set NumeroMarchas value
     * @param int $_numeroMarchas the NumeroMarchas
     * @return int
     */
    public function setNumeroMarchas($_numeroMarchas)
    {
        return ($this->NumeroMarchas = $_numeroMarchas);
    }
    /**
     * Get TipoRefrigeracao value
     * @return int
     */
    public function getTipoRefrigeracao()
    {
        return $this->TipoRefrigeracao;
    }
    /**
     * Set TipoRefrigeracao value
     * @param int $_tipoRefrigeracao the TipoRefrigeracao
     * @return int
     */
    public function setTipoRefrigeracao($_tipoRefrigeracao)
    {
        return ($this->TipoRefrigeracao = $_tipoRefrigeracao);
    }
    /**
     * Get TipoAlimentacao value
     * @return int
     */
    public function getTipoAlimentacao()
    {
        return $this->TipoAlimentacao;
    }
    /**
     * Set TipoAlimentacao value
     * @param int $_tipoAlimentacao the TipoAlimentacao
     * @return int
     */
    public function setTipoAlimentacao($_tipoAlimentacao)
    {
        return ($this->TipoAlimentacao = $_tipoAlimentacao);
    }
    /**
     * Get TipoMotor value
     * @return int
     */
    public function getTipoMotor()
    {
        return $this->TipoMotor;
    }
    /**
     * Set TipoMotor value
     * @param int $_tipoMotor the TipoMotor
     * @return int
     */
    public function setTipoMotor($_tipoMotor)
    {
        return ($this->TipoMotor = $_tipoMotor);
    }
    /**
     * Get TipoPartida value
     * @return int
     */
    public function getTipoPartida()
    {
        return $this->TipoPartida;
    }
    /**
     * Set TipoPartida value
     * @param int $_tipoPartida the TipoPartida
     * @return int
     */
    public function setTipoPartida($_tipoPartida)
    {
        return ($this->TipoPartida = $_tipoPartida);
    }
    /**
     * Get TipoFreio value
     * @return int
     */
    public function getTipoFreio()
    {
        return $this->TipoFreio;
    }
    /**
     * Set TipoFreio value
     * @param int $_tipoFreio the TipoFreio
     * @return int
     */
    public function setTipoFreio($_tipoFreio)
    {
        return ($this->TipoFreio = $_tipoFreio);
    }
    /**
     * Get PermiteAnunciarUsado value
     * @return string|null
     */
    public function getPermiteAnunciarUsado()
    {
        return $this->PermiteAnunciarUsado;
    }
    /**
     * Set PermiteAnunciarUsado value
     * @param string $_permiteAnunciarUsado the PermiteAnunciarUsado
     * @return string
     */
    public function setPermiteAnunciarUsado($_permiteAnunciarUsado)
    {
        return ($this->PermiteAnunciarUsado = $_permiteAnunciarUsado);
    }
    /**
     * Get PermiteAnunciarNovo value
     * @return string|null
     */
    public function getPermiteAnunciarNovo()
    {
        return $this->PermiteAnunciarNovo;
    }
    /**
     * Set PermiteAnunciarNovo value
     * @param string $_permiteAnunciarNovo the PermiteAnunciarNovo
     * @return string
     */
    public function setPermiteAnunciarNovo($_permiteAnunciarNovo)
    {
        return ($this->PermiteAnunciarNovo = $_permiteAnunciarNovo);
    }
    /**
     * Get Cores value
     * @return CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM|null
     */
    public function getCores()
    {
        return $this->Cores;
    }
    /**
     * Set Cores value
     * @param CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM $_cores the Cores
     * @return CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM
     */
    public function setCores($_cores)
    {
        return ($this->Cores = $_cores);
    }
    /**
     * Get Opcionais value
     * @return CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM|null
     */
    public function getOpcionais()
    {
        return $this->Opcionais;
    }
    /**
     * Set Opcionais value
     * @param CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM $_opcionais the Opcionais
     * @return CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM
     */
    public function setOpcionais($_opcionais)
    {
        return ($this->Opcionais = $_opcionais);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructAnoMotoWM
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
