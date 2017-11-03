<?php
/**
 * File for class WebmotorsEstoqueStructPublicarFotoanimacaoMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructPublicarFotoanimacaoMotoResponse originally named publicarFotoanimacaoMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructPublicarFotoanimacaoMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The publicarFotoanimacaoMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructFotoAnimacaoWM
     */
    public $publicarFotoanimacaoMotoResult;
    /**
     * Constructor method for publicarFotoanimacaoMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructFotoAnimacaoWM $_publicarFotoanimacaoMotoResult
     * @return WebmotorsEstoqueStructPublicarFotoanimacaoMotoResponse
     */
    public function __construct($_publicarFotoanimacaoMotoResult = NULL)
    {
        parent::__construct(array('publicarFotoanimacaoMotoResult'=>$_publicarFotoanimacaoMotoResult),false);
    }
    /**
     * Get publicarFotoanimacaoMotoResult value
     * @return WebmotorsEstoqueStructFotoAnimacaoWM|null
     */
    public function getPublicarFotoanimacaoMotoResult()
    {
        return $this->publicarFotoanimacaoMotoResult;
    }
    /**
     * Set publicarFotoanimacaoMotoResult value
     * @param WebmotorsEstoqueStructFotoAnimacaoWM $_publicarFotoanimacaoMotoResult the publicarFotoanimacaoMotoResult
     * @return WebmotorsEstoqueStructFotoAnimacaoWM
     */
    public function setPublicarFotoanimacaoMotoResult($_publicarFotoanimacaoMotoResult)
    {
        return ($this->publicarFotoanimacaoMotoResult = $_publicarFotoanimacaoMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructPublicarFotoanimacaoMotoResponse
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
