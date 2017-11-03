<?php
/**
 * File for class WebmotorsEstoqueStructAnuncioMotoWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructAnuncioMotoWM originally named AnuncioMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructAnuncioMotoWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The AnoDoModelo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $AnoDoModelo;
    /**
     * The AnoFabricacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $AnoFabricacao;
    /**
     * The CodigoAnuncio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoAnuncio;
    /**
     * The CodigoMarca
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoMarca;
    /**
     * The CodigoCorPredominante
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoCorPredominante;
    /**
     * The CodigoCorSecundaria
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoCorSecundaria;
    /**
     * The CodigoNumeroMarchas
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoNumeroMarchas;
    /**
     * The CodigoTipoRefrigeracao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoTipoRefrigeracao;
    /**
     * The CodigoTipoAlimentacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoTipoAlimentacao;
    /**
     * The CodigoTipoMotor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoTipoMotor;
    /**
     * The CodigoTipoPartida
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoTipoPartida;
    /**
     * The CodigoTipoFreio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoTipoFreio;
    /**
     * The NumeroCilindradas
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $NumeroCilindradas;
    /**
     * The CodigoModalidade
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $CodigoModalidade;
    /**
     * The CodigoModelo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoModelo;
    /**
     * The PrecoRevenda
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $PrecoRevenda;
    /**
     * The PrecoVenda
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $PrecoVenda;
    /**
     * The CodigoSMS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoSMS;
    /**
     * The TipoConsistencia
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $TipoConsistencia;
    /**
     * The NomeMoto
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NomeMoto;
    /**
     * The DescricaoCorSecundaria
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DescricaoCorSecundaria;
    /**
     * The DescricaoCorPredominante
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DescricaoCorPredominante;
    /**
     * The DescricaoNumeroMarchas
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DescricaoNumeroMarchas;
    /**
     * The DescricaoTipoRefrigeracao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DescricaoTipoRefrigeracao;
    /**
     * The DescricaoTipoAlimentacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DescricaoTipoAlimentacao;
    /**
     * The DescricaoTipoMotor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DescricaoTipoMotor;
    /**
     * The DescricaoTipoPartida
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DescricaoTipoPartida;
    /**
     * The DescricaoTipoFreio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DescricaoTipoFreio;
    /**
     * The EstiloMoto
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EstiloMoto;
    /**
     * The DataInclusao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DataInclusao;
    /**
     * The DataUltimaAlteracao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DataUltimaAlteracao;
    /**
     * The GarantiaDeFabrica
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GarantiaDeFabrica;
    /**
     * The IPVAPago
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IPVAPago;
    /**
     * The Km
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Km;
    /**
     * The Licenciado
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Licenciado;
    /**
     * The Observacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Observacao;
    /**
     * The OpcionalNovo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM
     */
    public $OpcionalNovo;
    /**
     * The OpcionalUsado
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM
     */
    public $OpcionalUsado;
    /**
     * The Placa
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Placa;
    /**
     * The TipoAnuncio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TipoAnuncio;
    /**
     * The UnicoDono
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UnicoDono;
    /**
     * The Alienado
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Alienado;
    /**
     * The DescricaoSMS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DescricaoSMS;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for AnuncioMotoWM
     * @see parent::__construct()
     * @param int $_anoDoModelo
     * @param int $_anoFabricacao
     * @param int $_codigoAnuncio
     * @param int $_codigoMarca
     * @param int $_codigoCorPredominante
     * @param int $_codigoCorSecundaria
     * @param int $_codigoNumeroMarchas
     * @param int $_codigoTipoRefrigeracao
     * @param int $_codigoTipoAlimentacao
     * @param int $_codigoTipoMotor
     * @param int $_codigoTipoPartida
     * @param int $_codigoTipoFreio
     * @param int $_numeroCilindradas
     * @param decimal $_codigoModalidade
     * @param int $_codigoModelo
     * @param decimal $_precoRevenda
     * @param decimal $_precoVenda
     * @param int $_codigoSMS
     * @param int $_tipoConsistencia
     * @param string $_nomeMoto
     * @param string $_descricaoCorSecundaria
     * @param string $_descricaoCorPredominante
     * @param string $_descricaoNumeroMarchas
     * @param string $_descricaoTipoRefrigeracao
     * @param string $_descricaoTipoAlimentacao
     * @param string $_descricaoTipoMotor
     * @param string $_descricaoTipoPartida
     * @param string $_descricaoTipoFreio
     * @param string $_estiloMoto
     * @param string $_dataInclusao
     * @param string $_dataUltimaAlteracao
     * @param string $_garantiaDeFabrica
     * @param string $_iPVAPago
     * @param string $_km
     * @param string $_licenciado
     * @param string $_observacao
     * @param WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM $_opcionalNovo
     * @param WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM $_opcionalUsado
     * @param string $_placa
     * @param string $_tipoAnuncio
     * @param string $_unicoDono
     * @param string $_alienado
     * @param string $_descricaoSMS
     * @param string $_codigoRetorno
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function __construct($_anoDoModelo,$_anoFabricacao,$_codigoAnuncio,$_codigoMarca,$_codigoCorPredominante,$_codigoCorSecundaria,$_codigoNumeroMarchas,$_codigoTipoRefrigeracao,$_codigoTipoAlimentacao,$_codigoTipoMotor,$_codigoTipoPartida,$_codigoTipoFreio,$_numeroCilindradas,$_codigoModalidade,$_codigoModelo,$_precoRevenda,$_precoVenda,$_codigoSMS,$_tipoConsistencia,$_nomeMoto = NULL,$_descricaoCorSecundaria = NULL,$_descricaoCorPredominante = NULL,$_descricaoNumeroMarchas = NULL,$_descricaoTipoRefrigeracao = NULL,$_descricaoTipoAlimentacao = NULL,$_descricaoTipoMotor = NULL,$_descricaoTipoPartida = NULL,$_descricaoTipoFreio = NULL,$_estiloMoto = NULL,$_dataInclusao = NULL,$_dataUltimaAlteracao = NULL,$_garantiaDeFabrica = NULL,$_iPVAPago = NULL,$_km = NULL,$_licenciado = NULL,$_observacao = NULL,$_opcionalNovo = NULL,$_opcionalUsado = NULL,$_placa = NULL,$_tipoAnuncio = NULL,$_unicoDono = NULL,$_alienado = NULL,$_descricaoSMS = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('AnoDoModelo'=>$_anoDoModelo,'AnoFabricacao'=>$_anoFabricacao,'CodigoAnuncio'=>$_codigoAnuncio,'CodigoMarca'=>$_codigoMarca,'CodigoCorPredominante'=>$_codigoCorPredominante,'CodigoCorSecundaria'=>$_codigoCorSecundaria,'CodigoNumeroMarchas'=>$_codigoNumeroMarchas,'CodigoTipoRefrigeracao'=>$_codigoTipoRefrigeracao,'CodigoTipoAlimentacao'=>$_codigoTipoAlimentacao,'CodigoTipoMotor'=>$_codigoTipoMotor,'CodigoTipoPartida'=>$_codigoTipoPartida,'CodigoTipoFreio'=>$_codigoTipoFreio,'NumeroCilindradas'=>$_numeroCilindradas,'CodigoModalidade'=>$_codigoModalidade,'CodigoModelo'=>$_codigoModelo,'PrecoRevenda'=>$_precoRevenda,'PrecoVenda'=>$_precoVenda,'CodigoSMS'=>$_codigoSMS,'TipoConsistencia'=>$_tipoConsistencia,'NomeMoto'=>$_nomeMoto,'DescricaoCorSecundaria'=>$_descricaoCorSecundaria,'DescricaoCorPredominante'=>$_descricaoCorPredominante,'DescricaoNumeroMarchas'=>$_descricaoNumeroMarchas,'DescricaoTipoRefrigeracao'=>$_descricaoTipoRefrigeracao,'DescricaoTipoAlimentacao'=>$_descricaoTipoAlimentacao,'DescricaoTipoMotor'=>$_descricaoTipoMotor,'DescricaoTipoPartida'=>$_descricaoTipoPartida,'DescricaoTipoFreio'=>$_descricaoTipoFreio,'EstiloMoto'=>$_estiloMoto,'DataInclusao'=>$_dataInclusao,'DataUltimaAlteracao'=>$_dataUltimaAlteracao,'GarantiaDeFabrica'=>$_garantiaDeFabrica,'IPVAPago'=>$_iPVAPago,'Km'=>$_km,'Licenciado'=>$_licenciado,'Observacao'=>$_observacao,'OpcionalNovo'=>($_opcionalNovo instanceof WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM)?$_opcionalNovo:new WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM($_opcionalNovo),'OpcionalUsado'=>($_opcionalUsado instanceof WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM)?$_opcionalUsado:new WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM($_opcionalUsado),'Placa'=>$_placa,'TipoAnuncio'=>$_tipoAnuncio,'UnicoDono'=>$_unicoDono,'Alienado'=>$_alienado,'DescricaoSMS'=>$_descricaoSMS,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get AnoDoModelo value
     * @return int
     */
    public function getAnoDoModelo()
    {
        return $this->AnoDoModelo;
    }
    /**
     * Set AnoDoModelo value
     * @param int $_anoDoModelo the AnoDoModelo
     * @return int
     */
    public function setAnoDoModelo($_anoDoModelo)
    {
        return ($this->AnoDoModelo = $_anoDoModelo);
    }
    /**
     * Get AnoFabricacao value
     * @return int
     */
    public function getAnoFabricacao()
    {
        return $this->AnoFabricacao;
    }
    /**
     * Set AnoFabricacao value
     * @param int $_anoFabricacao the AnoFabricacao
     * @return int
     */
    public function setAnoFabricacao($_anoFabricacao)
    {
        return ($this->AnoFabricacao = $_anoFabricacao);
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
     * Get CodigoMarca value
     * @return int
     */
    public function getCodigoMarca()
    {
        return $this->CodigoMarca;
    }
    /**
     * Set CodigoMarca value
     * @param int $_codigoMarca the CodigoMarca
     * @return int
     */
    public function setCodigoMarca($_codigoMarca)
    {
        return ($this->CodigoMarca = $_codigoMarca);
    }
    /**
     * Get CodigoCorPredominante value
     * @return int
     */
    public function getCodigoCorPredominante()
    {
        return $this->CodigoCorPredominante;
    }
    /**
     * Set CodigoCorPredominante value
     * @param int $_codigoCorPredominante the CodigoCorPredominante
     * @return int
     */
    public function setCodigoCorPredominante($_codigoCorPredominante)
    {
        return ($this->CodigoCorPredominante = $_codigoCorPredominante);
    }
    /**
     * Get CodigoCorSecundaria value
     * @return int
     */
    public function getCodigoCorSecundaria()
    {
        return $this->CodigoCorSecundaria;
    }
    /**
     * Set CodigoCorSecundaria value
     * @param int $_codigoCorSecundaria the CodigoCorSecundaria
     * @return int
     */
    public function setCodigoCorSecundaria($_codigoCorSecundaria)
    {
        return ($this->CodigoCorSecundaria = $_codigoCorSecundaria);
    }
    /**
     * Get CodigoNumeroMarchas value
     * @return int
     */
    public function getCodigoNumeroMarchas()
    {
        return $this->CodigoNumeroMarchas;
    }
    /**
     * Set CodigoNumeroMarchas value
     * @param int $_codigoNumeroMarchas the CodigoNumeroMarchas
     * @return int
     */
    public function setCodigoNumeroMarchas($_codigoNumeroMarchas)
    {
        return ($this->CodigoNumeroMarchas = $_codigoNumeroMarchas);
    }
    /**
     * Get CodigoTipoRefrigeracao value
     * @return int
     */
    public function getCodigoTipoRefrigeracao()
    {
        return $this->CodigoTipoRefrigeracao;
    }
    /**
     * Set CodigoTipoRefrigeracao value
     * @param int $_codigoTipoRefrigeracao the CodigoTipoRefrigeracao
     * @return int
     */
    public function setCodigoTipoRefrigeracao($_codigoTipoRefrigeracao)
    {
        return ($this->CodigoTipoRefrigeracao = $_codigoTipoRefrigeracao);
    }
    /**
     * Get CodigoTipoAlimentacao value
     * @return int
     */
    public function getCodigoTipoAlimentacao()
    {
        return $this->CodigoTipoAlimentacao;
    }
    /**
     * Set CodigoTipoAlimentacao value
     * @param int $_codigoTipoAlimentacao the CodigoTipoAlimentacao
     * @return int
     */
    public function setCodigoTipoAlimentacao($_codigoTipoAlimentacao)
    {
        return ($this->CodigoTipoAlimentacao = $_codigoTipoAlimentacao);
    }
    /**
     * Get CodigoTipoMotor value
     * @return int
     */
    public function getCodigoTipoMotor()
    {
        return $this->CodigoTipoMotor;
    }
    /**
     * Set CodigoTipoMotor value
     * @param int $_codigoTipoMotor the CodigoTipoMotor
     * @return int
     */
    public function setCodigoTipoMotor($_codigoTipoMotor)
    {
        return ($this->CodigoTipoMotor = $_codigoTipoMotor);
    }
    /**
     * Get CodigoTipoPartida value
     * @return int
     */
    public function getCodigoTipoPartida()
    {
        return $this->CodigoTipoPartida;
    }
    /**
     * Set CodigoTipoPartida value
     * @param int $_codigoTipoPartida the CodigoTipoPartida
     * @return int
     */
    public function setCodigoTipoPartida($_codigoTipoPartida)
    {
        return ($this->CodigoTipoPartida = $_codigoTipoPartida);
    }
    /**
     * Get CodigoTipoFreio value
     * @return int
     */
    public function getCodigoTipoFreio()
    {
        return $this->CodigoTipoFreio;
    }
    /**
     * Set CodigoTipoFreio value
     * @param int $_codigoTipoFreio the CodigoTipoFreio
     * @return int
     */
    public function setCodigoTipoFreio($_codigoTipoFreio)
    {
        return ($this->CodigoTipoFreio = $_codigoTipoFreio);
    }
    /**
     * Get NumeroCilindradas value
     * @return int
     */
    public function getNumeroCilindradas()
    {
        return $this->NumeroCilindradas;
    }
    /**
     * Set NumeroCilindradas value
     * @param int $_numeroCilindradas the NumeroCilindradas
     * @return int
     */
    public function setNumeroCilindradas($_numeroCilindradas)
    {
        return ($this->NumeroCilindradas = $_numeroCilindradas);
    }
    /**
     * Get CodigoModalidade value
     * @return decimal
     */
    public function getCodigoModalidade()
    {
        return $this->CodigoModalidade;
    }
    /**
     * Set CodigoModalidade value
     * @param decimal $_codigoModalidade the CodigoModalidade
     * @return decimal
     */
    public function setCodigoModalidade($_codigoModalidade)
    {
        return ($this->CodigoModalidade = $_codigoModalidade);
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
     * Get PrecoRevenda value
     * @return decimal
     */
    public function getPrecoRevenda()
    {
        return $this->PrecoRevenda;
    }
    /**
     * Set PrecoRevenda value
     * @param decimal $_precoRevenda the PrecoRevenda
     * @return decimal
     */
    public function setPrecoRevenda($_precoRevenda)
    {
        return ($this->PrecoRevenda = $_precoRevenda);
    }
    /**
     * Get PrecoVenda value
     * @return decimal
     */
    public function getPrecoVenda()
    {
        return $this->PrecoVenda;
    }
    /**
     * Set PrecoVenda value
     * @param decimal $_precoVenda the PrecoVenda
     * @return decimal
     */
    public function setPrecoVenda($_precoVenda)
    {
        return ($this->PrecoVenda = $_precoVenda);
    }
    /**
     * Get CodigoSMS value
     * @return int
     */
    public function getCodigoSMS()
    {
        return $this->CodigoSMS;
    }
    /**
     * Set CodigoSMS value
     * @param int $_codigoSMS the CodigoSMS
     * @return int
     */
    public function setCodigoSMS($_codigoSMS)
    {
        return ($this->CodigoSMS = $_codigoSMS);
    }
    /**
     * Get TipoConsistencia value
     * @return int
     */
    public function getTipoConsistencia()
    {
        return $this->TipoConsistencia;
    }
    /**
     * Set TipoConsistencia value
     * @param int $_tipoConsistencia the TipoConsistencia
     * @return int
     */
    public function setTipoConsistencia($_tipoConsistencia)
    {
        return ($this->TipoConsistencia = $_tipoConsistencia);
    }
    /**
     * Get NomeMoto value
     * @return string|null
     */
    public function getNomeMoto()
    {
        return $this->NomeMoto;
    }
    /**
     * Set NomeMoto value
     * @param string $_nomeMoto the NomeMoto
     * @return string
     */
    public function setNomeMoto($_nomeMoto)
    {
        return ($this->NomeMoto = $_nomeMoto);
    }
    /**
     * Get DescricaoCorSecundaria value
     * @return string|null
     */
    public function getDescricaoCorSecundaria()
    {
        return $this->DescricaoCorSecundaria;
    }
    /**
     * Set DescricaoCorSecundaria value
     * @param string $_descricaoCorSecundaria the DescricaoCorSecundaria
     * @return string
     */
    public function setDescricaoCorSecundaria($_descricaoCorSecundaria)
    {
        return ($this->DescricaoCorSecundaria = $_descricaoCorSecundaria);
    }
    /**
     * Get DescricaoCorPredominante value
     * @return string|null
     */
    public function getDescricaoCorPredominante()
    {
        return $this->DescricaoCorPredominante;
    }
    /**
     * Set DescricaoCorPredominante value
     * @param string $_descricaoCorPredominante the DescricaoCorPredominante
     * @return string
     */
    public function setDescricaoCorPredominante($_descricaoCorPredominante)
    {
        return ($this->DescricaoCorPredominante = $_descricaoCorPredominante);
    }
    /**
     * Get DescricaoNumeroMarchas value
     * @return string|null
     */
    public function getDescricaoNumeroMarchas()
    {
        return $this->DescricaoNumeroMarchas;
    }
    /**
     * Set DescricaoNumeroMarchas value
     * @param string $_descricaoNumeroMarchas the DescricaoNumeroMarchas
     * @return string
     */
    public function setDescricaoNumeroMarchas($_descricaoNumeroMarchas)
    {
        return ($this->DescricaoNumeroMarchas = $_descricaoNumeroMarchas);
    }
    /**
     * Get DescricaoTipoRefrigeracao value
     * @return string|null
     */
    public function getDescricaoTipoRefrigeracao()
    {
        return $this->DescricaoTipoRefrigeracao;
    }
    /**
     * Set DescricaoTipoRefrigeracao value
     * @param string $_descricaoTipoRefrigeracao the DescricaoTipoRefrigeracao
     * @return string
     */
    public function setDescricaoTipoRefrigeracao($_descricaoTipoRefrigeracao)
    {
        return ($this->DescricaoTipoRefrigeracao = $_descricaoTipoRefrigeracao);
    }
    /**
     * Get DescricaoTipoAlimentacao value
     * @return string|null
     */
    public function getDescricaoTipoAlimentacao()
    {
        return $this->DescricaoTipoAlimentacao;
    }
    /**
     * Set DescricaoTipoAlimentacao value
     * @param string $_descricaoTipoAlimentacao the DescricaoTipoAlimentacao
     * @return string
     */
    public function setDescricaoTipoAlimentacao($_descricaoTipoAlimentacao)
    {
        return ($this->DescricaoTipoAlimentacao = $_descricaoTipoAlimentacao);
    }
    /**
     * Get DescricaoTipoMotor value
     * @return string|null
     */
    public function getDescricaoTipoMotor()
    {
        return $this->DescricaoTipoMotor;
    }
    /**
     * Set DescricaoTipoMotor value
     * @param string $_descricaoTipoMotor the DescricaoTipoMotor
     * @return string
     */
    public function setDescricaoTipoMotor($_descricaoTipoMotor)
    {
        return ($this->DescricaoTipoMotor = $_descricaoTipoMotor);
    }
    /**
     * Get DescricaoTipoPartida value
     * @return string|null
     */
    public function getDescricaoTipoPartida()
    {
        return $this->DescricaoTipoPartida;
    }
    /**
     * Set DescricaoTipoPartida value
     * @param string $_descricaoTipoPartida the DescricaoTipoPartida
     * @return string
     */
    public function setDescricaoTipoPartida($_descricaoTipoPartida)
    {
        return ($this->DescricaoTipoPartida = $_descricaoTipoPartida);
    }
    /**
     * Get DescricaoTipoFreio value
     * @return string|null
     */
    public function getDescricaoTipoFreio()
    {
        return $this->DescricaoTipoFreio;
    }
    /**
     * Set DescricaoTipoFreio value
     * @param string $_descricaoTipoFreio the DescricaoTipoFreio
     * @return string
     */
    public function setDescricaoTipoFreio($_descricaoTipoFreio)
    {
        return ($this->DescricaoTipoFreio = $_descricaoTipoFreio);
    }
    /**
     * Get EstiloMoto value
     * @return string|null
     */
    public function getEstiloMoto()
    {
        return $this->EstiloMoto;
    }
    /**
     * Set EstiloMoto value
     * @param string $_estiloMoto the EstiloMoto
     * @return string
     */
    public function setEstiloMoto($_estiloMoto)
    {
        return ($this->EstiloMoto = $_estiloMoto);
    }
    /**
     * Get DataInclusao value
     * @return string|null
     */
    public function getDataInclusao()
    {
        return $this->DataInclusao;
    }
    /**
     * Set DataInclusao value
     * @param string $_dataInclusao the DataInclusao
     * @return string
     */
    public function setDataInclusao($_dataInclusao)
    {
        return ($this->DataInclusao = $_dataInclusao);
    }
    /**
     * Get DataUltimaAlteracao value
     * @return string|null
     */
    public function getDataUltimaAlteracao()
    {
        return $this->DataUltimaAlteracao;
    }
    /**
     * Set DataUltimaAlteracao value
     * @param string $_dataUltimaAlteracao the DataUltimaAlteracao
     * @return string
     */
    public function setDataUltimaAlteracao($_dataUltimaAlteracao)
    {
        return ($this->DataUltimaAlteracao = $_dataUltimaAlteracao);
    }
    /**
     * Get GarantiaDeFabrica value
     * @return string|null
     */
    public function getGarantiaDeFabrica()
    {
        return $this->GarantiaDeFabrica;
    }
    /**
     * Set GarantiaDeFabrica value
     * @param string $_garantiaDeFabrica the GarantiaDeFabrica
     * @return string
     */
    public function setGarantiaDeFabrica($_garantiaDeFabrica)
    {
        return ($this->GarantiaDeFabrica = $_garantiaDeFabrica);
    }
    /**
     * Get IPVAPago value
     * @return string|null
     */
    public function getIPVAPago()
    {
        return $this->IPVAPago;
    }
    /**
     * Set IPVAPago value
     * @param string $_iPVAPago the IPVAPago
     * @return string
     */
    public function setIPVAPago($_iPVAPago)
    {
        return ($this->IPVAPago = $_iPVAPago);
    }
    /**
     * Get Km value
     * @return string|null
     */
    public function getKm()
    {
        return $this->Km;
    }
    /**
     * Set Km value
     * @param string $_km the Km
     * @return string
     */
    public function setKm($_km)
    {
        return ($this->Km = $_km);
    }
    /**
     * Get Licenciado value
     * @return string|null
     */
    public function getLicenciado()
    {
        return $this->Licenciado;
    }
    /**
     * Set Licenciado value
     * @param string $_licenciado the Licenciado
     * @return string
     */
    public function setLicenciado($_licenciado)
    {
        return ($this->Licenciado = $_licenciado);
    }
    /**
     * Get Observacao value
     * @return string|null
     */
    public function getObservacao()
    {
        return $this->Observacao;
    }
    /**
     * Set Observacao value
     * @param string $_observacao the Observacao
     * @return string
     */
    public function setObservacao($_observacao)
    {
        return ($this->Observacao = $_observacao);
    }
    /**
     * Get OpcionalNovo value
     * @return WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM|null
     */
    public function getOpcionalNovo()
    {
        return $this->OpcionalNovo;
    }
    /**
     * Set OpcionalNovo value
     * @param WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM $_opcionalNovo the OpcionalNovo
     * @return WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM
     */
    public function setOpcionalNovo($_opcionalNovo)
    {
        return ($this->OpcionalNovo = $_opcionalNovo);
    }
    /**
     * Get OpcionalUsado value
     * @return WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM|null
     */
    public function getOpcionalUsado()
    {
        return $this->OpcionalUsado;
    }
    /**
     * Set OpcionalUsado value
     * @param WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM $_opcionalUsado the OpcionalUsado
     * @return WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM
     */
    public function setOpcionalUsado($_opcionalUsado)
    {
        return ($this->OpcionalUsado = $_opcionalUsado);
    }
    /**
     * Get Placa value
     * @return string|null
     */
    public function getPlaca()
    {
        return $this->Placa;
    }
    /**
     * Set Placa value
     * @param string $_placa the Placa
     * @return string
     */
    public function setPlaca($_placa)
    {
        return ($this->Placa = $_placa);
    }
    /**
     * Get TipoAnuncio value
     * @return string|null
     */
    public function getTipoAnuncio()
    {
        return $this->TipoAnuncio;
    }
    /**
     * Set TipoAnuncio value
     * @param string $_tipoAnuncio the TipoAnuncio
     * @return string
     */
    public function setTipoAnuncio($_tipoAnuncio)
    {
        return ($this->TipoAnuncio = $_tipoAnuncio);
    }
    /**
     * Get UnicoDono value
     * @return string|null
     */
    public function getUnicoDono()
    {
        return $this->UnicoDono;
    }
    /**
     * Set UnicoDono value
     * @param string $_unicoDono the UnicoDono
     * @return string
     */
    public function setUnicoDono($_unicoDono)
    {
        return ($this->UnicoDono = $_unicoDono);
    }
    /**
     * Get Alienado value
     * @return string|null
     */
    public function getAlienado()
    {
        return $this->Alienado;
    }
    /**
     * Set Alienado value
     * @param string $_alienado the Alienado
     * @return string
     */
    public function setAlienado($_alienado)
    {
        return ($this->Alienado = $_alienado);
    }
    /**
     * Get DescricaoSMS value
     * @return string|null
     */
    public function getDescricaoSMS()
    {
        return $this->DescricaoSMS;
    }
    /**
     * Set DescricaoSMS value
     * @param string $_descricaoSMS the DescricaoSMS
     * @return string
     */
    public function setDescricaoSMS($_descricaoSMS)
    {
        return ($this->DescricaoSMS = $_descricaoSMS);
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
     * @return WebmotorsEstoqueStructAnuncioMotoWM
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
