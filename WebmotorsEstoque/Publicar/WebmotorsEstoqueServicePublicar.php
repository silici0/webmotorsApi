<?php
/**
 * File for class WebmotorsEstoqueServicePublicar
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueServicePublicar originally named Publicar
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueServicePublicar extends WebmotorsEstoqueWsdlClass
{
    /**
     * Method to call the operation originally named publicarFotoanimacaoMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructPublicarFotoanimacaoMoto $_webmotorsEstoqueStructPublicarFotoanimacaoMoto
     * @return WebmotorsEstoqueStructPublicarFotoanimacaoMotoResponse
     */
    public function publicarFotoanimacaoMoto(WebmotorsEstoqueStructPublicarFotoanimacaoMoto $_webmotorsEstoqueStructPublicarFotoanimacaoMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->publicarFotoanimacaoMoto($_webmotorsEstoqueStructPublicarFotoanimacaoMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsEstoqueWsdlClass::getResult()
     * @return WebmotorsEstoqueStructPublicarFotoanimacaoMotoResponse
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
