<?php
/**
 * Test with CodigosWebMotorsMotos for 'http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl'
 * @package CodigosWebMotorsMotos
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/CodigosWebMotorsMotosAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a CodigosWebMotorsMotosWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[CodigosWebMotorsMotosWsdlClass::WSDL_URL] = 'http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl';
 * $wsdl[CodigosWebMotorsMotosWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[CodigosWebMotorsMotosWsdlClass::WSDL_TRACE] = true;
 * $wsdl[CodigosWebMotorsMotosWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[CodigosWebMotorsMotosWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new CodigosWebMotorsMotosWsdlClass($wsdl);
 */
/**
 * Examples
 */


/***********************************************
 * Example for CodigosWebMotorsMotosServiceObter
 */
$codigosWebMotorsMotosServiceObter = new CodigosWebMotorsMotosServiceObter();
// sample call for CodigosWebMotorsMotosServiceObter::obterMarcaMotos()
if($codigosWebMotorsMotosServiceObter->obterMarcaMotos(new CodigosWebMotorsMotosStructObterMarcaMotos()))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
sample call for CodigosWebMotorsMotosServiceObter::obterModeloMotos()
if($codigosWebMotorsMotosServiceObter->obterModeloMotos(new CodigosWebMotorsMotosStructObterModeloMotos()))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterCoresMotosUsadas()
if($codigosWebMotorsMotosServiceObter->obterCoresMotosUsadas(new CodigosWebMotorsMotosStructObterCoresMotosUsadas(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterOpcionaisMotosUsadas()
if($codigosWebMotorsMotosServiceObter->obterOpcionaisMotosUsadas(new CodigosWebMotorsMotosStructObterOpcionaisMotosUsadas(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterModalidadesMotosUsadas()
if($codigosWebMotorsMotosServiceObter->obterModalidadesMotosUsadas(new CodigosWebMotorsMotosStructObterModalidadesMotosUsadas(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterModalidadesMotosNovas()
if($codigosWebMotorsMotosServiceObter->obterModalidadesMotosNovas(new CodigosWebMotorsMotosStructObterModalidadesMotosNovas(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterTipoRefrigeracaoMoto()
if($codigosWebMotorsMotosServiceObter->obterTipoRefrigeracaoMoto(new CodigosWebMotorsMotosStructObterTipoRefrigeracaoMoto(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterTipoAlimentacaoMoto()
if($codigosWebMotorsMotosServiceObter->obterTipoAlimentacaoMoto(new CodigosWebMotorsMotosStructObterTipoAlimentacaoMoto(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterTipoMotorMoto()
if($codigosWebMotorsMotosServiceObter->obterTipoMotorMoto(new CodigosWebMotorsMotosStructObterTipoMotorMoto(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterTipoPartidaMoto()
if($codigosWebMotorsMotosServiceObter->obterTipoPartidaMoto(new CodigosWebMotorsMotosStructObterTipoPartidaMoto(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterNumeroMarchasMoto()
if($codigosWebMotorsMotosServiceObter->obterNumeroMarchasMoto(new CodigosWebMotorsMotosStructObterNumeroMarchasMoto(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterTipoFreioMoto()
if($codigosWebMotorsMotosServiceObter->obterTipoFreioMoto(new CodigosWebMotorsMotosStructObterTipoFreioMoto(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::ObterExtensoesVideos()
if($codigosWebMotorsMotosServiceObter->ObterExtensoesVideos(new CodigosWebMotorsMotosStructObterExtensoesVideos(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::ObterTemplateAnimacaoMotos()
if($codigosWebMotorsMotosServiceObter->ObterTemplateAnimacaoMotos(new CodigosWebMotorsMotosStructObterTemplateAnimacaoMotos(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
// sample call for CodigosWebMotorsMotosServiceObter::obterModalidadesMotos()
if($codigosWebMotorsMotosServiceObter->obterModalidadesMotos(new CodigosWebMotorsMotosStructObterModalidadesMotos(/*** update parameters list ***/)))
    print_r($codigosWebMotorsMotosServiceObter->getResult());
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());
