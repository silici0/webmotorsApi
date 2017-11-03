<?php
/**
 * File for class WebmotorsEstoqueServiceDesativar
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueServiceDesativar originally named Desativar
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueServiceDesativar extends WebmotorsEstoqueWsdlClass
{
    /**
     * Method to call the operation originally named desativarFotoanimacaoMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructDesativarFotoanimacaoMoto $_webmotorsEstoqueStructDesativarFotoanimacaoMoto
     * @return WebmotorsEstoqueStructDesativarFotoanimacaoMotoResponse
     */
    public function desativarFotoanimacaoMoto(WebmotorsEstoqueStructDesativarFotoanimacaoMoto $_webmotorsEstoqueStructDesativarFotoanimacaoMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->desativarFotoanimacaoMoto($_webmotorsEstoqueStructDesativarFotoanimacaoMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsEstoqueWsdlClass::getResult()
     * @return WebmotorsEstoqueStructDesativarFotoanimacaoMotoResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
