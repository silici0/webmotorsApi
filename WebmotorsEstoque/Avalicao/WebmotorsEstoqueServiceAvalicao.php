<?php
/**
 * File for class WebmotorsEstoqueServiceAvalicao
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueServiceAvalicao originally named Avalicao
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueServiceAvalicao extends WebmotorsEstoqueWsdlClass
{
    /**
     * Method to call the operation originally named AvalicaoMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructAvalicaoMoto $_webmotorsEstoqueStructAvalicaoMoto
     * @return WebmotorsEstoqueStructAvalicaoMotoResponse
     */
    public function AvalicaoMoto(WebmotorsEstoqueStructAvalicaoMoto $_webmotorsEstoqueStructAvalicaoMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->AvalicaoMoto($_webmotorsEstoqueStructAvalicaoMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsEstoqueWsdlClass::getResult()
     * @return WebmotorsEstoqueStructAvalicaoMotoResponse
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
