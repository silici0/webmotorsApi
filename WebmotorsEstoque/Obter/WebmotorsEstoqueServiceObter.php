<?php
/**
 * File for class WebmotorsEstoqueServiceObter
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueServiceObter originally named Obter
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueServiceObter extends WebmotorsEstoqueWsdlClass
{
    /**
     * Method to call the operation originally named obterEstoqueAtualMotos
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructObterEstoqueAtualMotos $_webmotorsEstoqueStructObterEstoqueAtualMotos
     * @return WebmotorsEstoqueStructObterEstoqueAtualMotosResponse
     */
    public function obterEstoqueAtualMotos(WebmotorsEstoqueStructObterEstoqueAtualMotos $_webmotorsEstoqueStructObterEstoqueAtualMotos)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterEstoqueAtualMotos($_webmotorsEstoqueStructObterEstoqueAtualMotos));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsEstoqueWsdlClass::getResult()
     * @return WebmotorsEstoqueStructObterEstoqueAtualMotosResponse
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
