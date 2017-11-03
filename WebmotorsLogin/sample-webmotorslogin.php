<?php
/**
 * Test with WebmotorsLogin for 'https://integracao.webmotors.com.br/wsLoginSistemaRevendedor.asmx?wsdl'
 * @package WebmotorsLogin
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/WebmotorsLoginAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a WebmotorsLoginWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[WebmotorsLoginWsdlClass::WSDL_URL] = 'https://integracao.webmotors.com.br/wsLoginSistemaRevendedor.asmx?wsdl';
 * $wsdl[WebmotorsLoginWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[WebmotorsLoginWsdlClass::WSDL_TRACE] = true;
 * $wsdl[WebmotorsLoginWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[WebmotorsLoginWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new WebmotorsLoginWsdlClass($wsdl);
 */
/**
 * Examples
 */


/*********************************************
 * Example for WebmotorsLoginServiceAutenticar
 */
$webmotorsLoginServiceAutenticar = new WebmotorsLoginServiceAutenticar();
// sample call for WebmotorsLoginServiceAutenticar::autenticar()
if($webmotorsLoginServiceAutenticar->autenticar(new WebmotorsLoginStructAutenticar()))
    $result = $webmotorsLoginServiceAutenticar->getResult();
else
    print_r($webmotorsLoginServiceAutenticar->getLastError());
