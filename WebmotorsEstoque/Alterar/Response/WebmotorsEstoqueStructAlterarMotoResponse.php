<?php
/**
 * File for class WebmotorsEstoqueStructAlterarMotoResponse
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueStructAlterarMotoResponse originally named alterarMotoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl}
 * @package WebmotorsEstoque
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueStructAlterarMotoResponse extends WebmotorsEstoqueWsdlClass
{
    /**
     * The alterarMotoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var WebmotorsEstoqueStructAnuncioMotoWM
     */
    public $alterarMotoResult;
    /**
     * Constructor method for alterarMotoResponse
     * @see parent::__construct()
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_alterarMotoResult
     * @return WebmotorsEstoqueStructAlterarMotoResponse
     */
    public function __construct($_alterarMotoResult = NULL)
    {
        parent::__construct(array('alterarMotoResult'=>$_alterarMotoResult),false);
    }
    /**
     * Get alterarMotoResult value
     * @return WebmotorsEstoqueStructAnuncioMotoWM|null
     */
    public function getAlterarMotoResult()
    {
        return $this->alterarMotoResult;
    }
    /**
     * Set alterarMotoResult value
     * @param WebmotorsEstoqueStructAnuncioMotoWM $_alterarMotoResult the alterarMotoResult
     * @return WebmotorsEstoqueStructAnuncioMotoWM
     */
    public function setAlterarMotoResult($_alterarMotoResult)
    {
        return ($this->alterarMotoResult = $_alterarMotoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebmotorsEstoqueWsdlClass::__set_state()
     * @uses WebmotorsEstoqueWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebmotorsEstoqueStructAlterarMotoResponse
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
