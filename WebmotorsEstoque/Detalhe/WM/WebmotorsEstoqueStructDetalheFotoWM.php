<?php
/**
 * File for class WebmotorsEstoqueStructDetalheFotoWM
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructDetalheFotoWM originally named DetalheFotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructDetalheFotoWM extends WebmotorsEstoqueWsdlClass
{
    /**
     * The CodigoFotoAnuncio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $CodigoFotoAnuncio;
    /**
     * The Ordem
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $Ordem;
    /**
     * The IdFotoVmotors
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $IdFotoVmotors;
    /**
     * The Url
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Url;
    /**
     * The DataInclusao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DataInclusao;
    /**
     * Constructor method for DetalheFotoWM
     * @see parent::__construct()
     * @param decimal $_codigoFotoAnuncio
     * @param int $_ordem
     * @param decimal $_idFotoVmotors
     * @param string $_url
     * @param string $_dataInclusao
     * @return WebmotorsEstoqueStructDetalheFotoWM
     */
    public function __construct($_codigoFotoAnuncio,$_ordem,$_idFotoVmotors,$_url = NULL,$_dataInclusao = NULL)
    {
        parent::__construct(array('CodigoFotoAnuncio'=>$_codigoFotoAnuncio,'Ordem'=>$_ordem,'IdFotoVmotors'=>$_idFotoVmotors,'Url'=>$_url,'DataInclusao'=>$_dataInclusao),false);
    }
    /**
     * Get CodigoFotoAnuncio value
     * @return decimal
     */
    public function getCodigoFotoAnuncio()
    {
        return $this->CodigoFotoAnuncio;
    }
    /**
     * Set CodigoFotoAnuncio value
     * @param decimal $_codigoFotoAnuncio the CodigoFotoAnuncio
     * @return decimal
     */
    public function setCodigoFotoAnuncio($_codigoFotoAnuncio)
    {
        return ($this->CodigoFotoAnuncio = $_codigoFotoAnuncio);
    }
    /**
     * Get Ordem value
     * @return int
     */
    public function getOrdem()
    {
        return $this->Ordem;
    }
    /**
     * Set Ordem value
     * @param int $_ordem the Ordem
     * @return int
     */
    public function setOrdem($_ordem)
    {
        return ($this->Ordem = $_ordem);
    }
    /**
     * Get IdFotoVmotors value
     * @return decimal
     */
    public function getIdFotoVmotors()
    {
        return $this->IdFotoVmotors;
    }
    /**
     * Set IdFotoVmotors value
     * @param decimal $_idFotoVmotors the IdFotoVmotors
     * @return decimal
     */
    public function setIdFotoVmotors($_idFotoVmotors)
    {
        return ($this->IdFotoVmotors = $_idFotoVmotors);
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $_url the Url
     * @return string
     */
    public function setUrl($_url)
    {
        return ($this->Url = $_url);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructDetalheFotoWM
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
