<?php
/**
 * File for class WebmotorsEstoqueStructAvaliacaoMotoWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructAvaliacaoMotoWM originally named AvaliacaoMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructAvaliacaoMotoWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The CodigoMarca
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $CodigoMarca;
    /**
     * The CodigoModelo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $CodigoModelo;
    /**
     * The Ano
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $Ano;
    /**
     * The QuantidadeVeiculosAnunciados
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $QuantidadeVeiculosAnunciados;
    /**
     * The PrecoFIPE
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $PrecoFIPE;
    /**
     * The PrecoMenorWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $PrecoMenorWM;
    /**
     * The PrecoMaiorWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $PrecoMaiorWM;
    /**
     * The PrecoMedioWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $PrecoMedioWM;
    /**
     * The PrecoMenorWMUF
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $PrecoMenorWMUF;
    /**
     * The PrecoMaiorWMUF
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $PrecoMaiorWMUF;
    /**
     * The PrecoMedioWMUF
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $PrecoMedioWMUF;
    /**
     * The Uf
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Uf;
    /**
     * The DataAtualizacaoFIPE
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DataAtualizacaoFIPE;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for AvaliacaoMotoWM
     * @see parent::__construct()
     * @param decimal $_codigoMarca
     * @param decimal $_codigoModelo
     * @param int $_ano
     * @param int $_quantidadeVeiculosAnunciados
     * @param decimal $_precoFIPE
     * @param decimal $_precoMenorWM
     * @param decimal $_precoMaiorWM
     * @param decimal $_precoMedioWM
     * @param decimal $_precoMenorWMUF
     * @param decimal $_precoMaiorWMUF
     * @param decimal $_precoMedioWMUF
     * @param string $_uf
     * @param string $_dataAtualizacaoFIPE
     * @param string $_codigoRetorno
     * @return WebmotorsEstoqueStructAvaliacaoMotoWM
     */
    public function __construct($_codigoMarca,$_codigoModelo,$_ano,$_quantidadeVeiculosAnunciados,$_precoFIPE,$_precoMenorWM,$_precoMaiorWM,$_precoMedioWM,$_precoMenorWMUF,$_precoMaiorWMUF,$_precoMedioWMUF,$_uf = NULL,$_dataAtualizacaoFIPE = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoMarca'=>$_codigoMarca,'CodigoModelo'=>$_codigoModelo,'Ano'=>$_ano,'QuantidadeVeiculosAnunciados'=>$_quantidadeVeiculosAnunciados,'PrecoFIPE'=>$_precoFIPE,'PrecoMenorWM'=>$_precoMenorWM,'PrecoMaiorWM'=>$_precoMaiorWM,'PrecoMedioWM'=>$_precoMedioWM,'PrecoMenorWMUF'=>$_precoMenorWMUF,'PrecoMaiorWMUF'=>$_precoMaiorWMUF,'PrecoMedioWMUF'=>$_precoMedioWMUF,'Uf'=>$_uf,'DataAtualizacaoFIPE'=>$_dataAtualizacaoFIPE,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get CodigoMarca value
     * @return decimal
     */
    public function getCodigoMarca()
    {
        return $this->CodigoMarca;
    }
    /**
     * Set CodigoMarca value
     * @param decimal $_codigoMarca the CodigoMarca
     * @return decimal
     */
    public function setCodigoMarca($_codigoMarca)
    {
        return ($this->CodigoMarca = $_codigoMarca);
    }
    /**
     * Get CodigoModelo value
     * @return decimal
     */
    public function getCodigoModelo()
    {
        return $this->CodigoModelo;
    }
    /**
     * Set CodigoModelo value
     * @param decimal $_codigoModelo the CodigoModelo
     * @return decimal
     */
    public function setCodigoModelo($_codigoModelo)
    {
        return ($this->CodigoModelo = $_codigoModelo);
    }
    /**
     * Get Ano value
     * @return int
     */
    public function getAno()
    {
        return $this->Ano;
    }
    /**
     * Set Ano value
     * @param int $_ano the Ano
     * @return int
     */
    public function setAno($_ano)
    {
        return ($this->Ano = $_ano);
    }
    /**
     * Get QuantidadeVeiculosAnunciados value
     * @return int
     */
    public function getQuantidadeVeiculosAnunciados()
    {
        return $this->QuantidadeVeiculosAnunciados;
    }
    /**
     * Set QuantidadeVeiculosAnunciados value
     * @param int $_quantidadeVeiculosAnunciados the QuantidadeVeiculosAnunciados
     * @return int
     */
    public function setQuantidadeVeiculosAnunciados($_quantidadeVeiculosAnunciados)
    {
        return ($this->QuantidadeVeiculosAnunciados = $_quantidadeVeiculosAnunciados);
    }
    /**
     * Get PrecoFIPE value
     * @return decimal
     */
    public function getPrecoFIPE()
    {
        return $this->PrecoFIPE;
    }
    /**
     * Set PrecoFIPE value
     * @param decimal $_precoFIPE the PrecoFIPE
     * @return decimal
     */
    public function setPrecoFIPE($_precoFIPE)
    {
        return ($this->PrecoFIPE = $_precoFIPE);
    }
    /**
     * Get PrecoMenorWM value
     * @return decimal
     */
    public function getPrecoMenorWM()
    {
        return $this->PrecoMenorWM;
    }
    /**
     * Set PrecoMenorWM value
     * @param decimal $_precoMenorWM the PrecoMenorWM
     * @return decimal
     */
    public function setPrecoMenorWM($_precoMenorWM)
    {
        return ($this->PrecoMenorWM = $_precoMenorWM);
    }
    /**
     * Get PrecoMaiorWM value
     * @return decimal
     */
    public function getPrecoMaiorWM()
    {
        return $this->PrecoMaiorWM;
    }
    /**
     * Set PrecoMaiorWM value
     * @param decimal $_precoMaiorWM the PrecoMaiorWM
     * @return decimal
     */
    public function setPrecoMaiorWM($_precoMaiorWM)
    {
        return ($this->PrecoMaiorWM = $_precoMaiorWM);
    }
    /**
     * Get PrecoMedioWM value
     * @return decimal
     */
    public function getPrecoMedioWM()
    {
        return $this->PrecoMedioWM;
    }
    /**
     * Set PrecoMedioWM value
     * @param decimal $_precoMedioWM the PrecoMedioWM
     * @return decimal
     */
    public function setPrecoMedioWM($_precoMedioWM)
    {
        return ($this->PrecoMedioWM = $_precoMedioWM);
    }
    /**
     * Get PrecoMenorWMUF value
     * @return decimal
     */
    public function getPrecoMenorWMUF()
    {
        return $this->PrecoMenorWMUF;
    }
    /**
     * Set PrecoMenorWMUF value
     * @param decimal $_precoMenorWMUF the PrecoMenorWMUF
     * @return decimal
     */
    public function setPrecoMenorWMUF($_precoMenorWMUF)
    {
        return ($this->PrecoMenorWMUF = $_precoMenorWMUF);
    }
    /**
     * Get PrecoMaiorWMUF value
     * @return decimal
     */
    public function getPrecoMaiorWMUF()
    {
        return $this->PrecoMaiorWMUF;
    }
    /**
     * Set PrecoMaiorWMUF value
     * @param decimal $_precoMaiorWMUF the PrecoMaiorWMUF
     * @return decimal
     */
    public function setPrecoMaiorWMUF($_precoMaiorWMUF)
    {
        return ($this->PrecoMaiorWMUF = $_precoMaiorWMUF);
    }
    /**
     * Get PrecoMedioWMUF value
     * @return decimal
     */
    public function getPrecoMedioWMUF()
    {
        return $this->PrecoMedioWMUF;
    }
    /**
     * Set PrecoMedioWMUF value
     * @param decimal $_precoMedioWMUF the PrecoMedioWMUF
     * @return decimal
     */
    public function setPrecoMedioWMUF($_precoMedioWMUF)
    {
        return ($this->PrecoMedioWMUF = $_precoMedioWMUF);
    }
    /**
     * Get Uf value
     * @return string|null
     */
    public function getUf()
    {
        return $this->Uf;
    }
    /**
     * Set Uf value
     * @param string $_uf the Uf
     * @return string
     */
    public function setUf($_uf)
    {
        return ($this->Uf = $_uf);
    }
    /**
     * Get DataAtualizacaoFIPE value
     * @return string|null
     */
    public function getDataAtualizacaoFIPE()
    {
        return $this->DataAtualizacaoFIPE;
    }
    /**
     * Set DataAtualizacaoFIPE value
     * @param string $_dataAtualizacaoFIPE the DataAtualizacaoFIPE
     * @return string
     */
    public function setDataAtualizacaoFIPE($_dataAtualizacaoFIPE)
    {
        return ($this->DataAtualizacaoFIPE = $_dataAtualizacaoFIPE);
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
     * @return WebmotorsEstoqueStructAvaliacaoMotoWM
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
