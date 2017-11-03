<?php
/**
 * File for class WebmotorsLoginServiceAutenticar
 * @package WebmotorsLogin
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsLoginServiceAutenticar originally named Autenticar
 * @package WebmotorsLogin
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */

class WebmotorsLoginServiceAutenticar extends WebmotorsLoginWsdlClass
{
    /**
     * Method to call the operation originally named autenticar
     * @uses WebmotorsLoginWsdlClass::getSoapClient()
     * @uses WebmotorsLoginWsdlClass::setResult()
     * @uses WebmotorsLoginWsdlClass::saveLastError()
     * @param WebmotorsLoginStructAutenticar $_webmotorsLoginStructAutenticar
     * @return WebmotorsLoginStructAutenticarResponse
     */
    public function autenticar(WebmotorsLoginStructAutenticar $_webmotorsLoginStructAutenticar)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->autenticar($_webmotorsLoginStructAutenticar));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsLoginWsdlClass::getResult()
     * @return WebmotorsLoginStructAutenticarResponse
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
