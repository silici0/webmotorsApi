<?php
/**
 * File for class WebmotorsEstoqueStructDesativarFotoanimacaoMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructDesativarFotoanimacaoMotoResponse originally named desativarFotoanimacaoMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructDesativarFotoanimacaoMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The desativarFotoanimacaoMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructFotoAnimacaoWM
     */
    public $desativarFotoanimacaoMotoResult;
    /**
     * Constructor method for desativarFotoanimacaoMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructFotoAnimacaoWM $_desativarFotoanimacaoMotoResult
     * @return WebmotorsEstoqueStructDesativarFotoanimacaoMotoResponse
     */
    public function __construct($_desativarFotoanimacaoMotoResult = NULL)
    {
        parent::__construct(array('desativarFotoanimacaoMotoResult'=>$_desativarFotoanimacaoMotoResult),false);
    }
    /**
     * Get desativarFotoanimacaoMotoResult value
     * @return WebmotorsEstoqueStructFotoAnimacaoWM|null
     */
    public function getDesativarFotoanimacaoMotoResult()
    {
        return $this->desativarFotoanimacaoMotoResult;
    }
    /**
     * Set desativarFotoanimacaoMotoResult value
     * @param WebmotorsEstoqueStructFotoAnimacaoWM $_desativarFotoanimacaoMotoResult the desativarFotoanimacaoMotoResult
     * @return WebmotorsEstoqueStructFotoAnimacaoWM
     */
    public function setDesativarFotoanimacaoMotoResult($_desativarFotoanimacaoMotoResult)
    {
        return ($this->desativarFotoanimacaoMotoResult = $_desativarFotoanimacaoMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructDesativarFotoanimacaoMotoResponse
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
