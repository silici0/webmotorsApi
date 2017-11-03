<?php
/**
 * File for class WebmotorsEstoqueStructFotosMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructFotosMotoResponse originally named FotosMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructFotosMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The FotosMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructArrayOfFotosWM
     */
    public $FotosMotoResult;
    /**
     * Constructor method for FotosMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructArrayOfFotosWM $_fotosMotoResult
     * @return WebmotorsEstoqueStructFotosMotoResponse
     */
    public function __construct($_fotosMotoResult = NULL)
    {
        parent::__construct(array('FotosMotoResult'=>($_fotosMotoResult instanceof WebmotorsEstoqueStructArrayOfFotosWM)?$_fotosMotoResult:new WebmotorsEstoqueStructArrayOfFotosWM($_fotosMotoResult)),false);
    }
    /**
     * Get FotosMotoResult value
     * @return WebmotorsEstoqueStructArrayOfFotosWM|null
     */
    public function getFotosMotoResult()
    {
        return $this->FotosMotoResult;
    }
    /**
     * Set FotosMotoResult value
     * @param WebmotorsEstoqueStructArrayOfFotosWM $_fotosMotoResult the FotosMotoResult
     * @return WebmotorsEstoqueStructArrayOfFotosWM
     */
    public function setFotosMotoResult($_fotosMotoResult)
    {
        return ($this->FotosMotoResult = $_fotosMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructFotosMotoResponse
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
