<?php
/**
 * Test with WebmotorsEstoque for 'http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl'
 * @package WebmotorsEstoque
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
require_once dirname(__FILE__) . '/WebmotorsEstoqueAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a WebmotorsEstoqueWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[WebmotorsEstoqueWsdlClass::WSDL_URL] = 'http://integracao.webmotors.com.br/Motos/wsEstoqueRevendedorMotos.asmx?wsdl';
 * $wsdl[WebmotorsEstoqueWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[WebmotorsEstoqueWsdlClass::WSDL_TRACE] = true;
 * $wsdl[WebmotorsEstoqueWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[WebmotorsEstoqueWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new WebmotorsEstoqueWsdlClass($wsdl);
 */
/**
 * Examples
 */


/******************************************
 * Example for WebmotorsEstoqueServiceObter
 */
$webmotorsEstoqueServiceObter = new WebmotorsEstoqueServiceObter();
// sample call for WebmotorsEstoqueServiceObter::obterEstoqueAtualMotos()
if($webmotorsEstoqueServiceObter->obterEstoqueAtualMotos(new WebmotorsEstoqueStructObterEstoqueAtualMotos(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceObter->getResult());
else
    print_r($webmotorsEstoqueServiceObter->getLastError());

/********************************************
 * Example for WebmotorsEstoqueServiceIncluir
 */
$webmotorsEstoqueServiceIncluir = new WebmotorsEstoqueServiceIncluir();
// sample call for WebmotorsEstoqueServiceIncluir::incluirMoto()
if($webmotorsEstoqueServiceIncluir->incluirMoto(new WebmotorsEstoqueStructIncluirMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceIncluir->getResult());
else
    print_r($webmotorsEstoqueServiceIncluir->getLastError());
// sample call for WebmotorsEstoqueServiceIncluir::incluirFotoMoto()
if($webmotorsEstoqueServiceIncluir->incluirFotoMoto(new WebmotorsEstoqueStructIncluirFotoMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceIncluir->getResult());
else
    print_r($webmotorsEstoqueServiceIncluir->getLastError());
// sample call for WebmotorsEstoqueServiceIncluir::incluirVideo()
if($webmotorsEstoqueServiceIncluir->incluirVideo(new WebmotorsEstoqueStructIncluirVideo(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceIncluir->getResult());
else
    print_r($webmotorsEstoqueServiceIncluir->getLastError());

/********************************************
 * Example for WebmotorsEstoqueServiceAlterar
 */
$webmotorsEstoqueServiceAlterar = new WebmotorsEstoqueServiceAlterar();
// sample call for WebmotorsEstoqueServiceAlterar::alterarMoto()
if($webmotorsEstoqueServiceAlterar->alterarMoto(new WebmotorsEstoqueStructAlterarMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceAlterar->getResult());
else
    print_r($webmotorsEstoqueServiceAlterar->getLastError());

/********************************************
 * Example for WebmotorsEstoqueServiceExcluir
 */
$webmotorsEstoqueServiceExcluir = new WebmotorsEstoqueServiceExcluir();
// sample call for WebmotorsEstoqueServiceExcluir::excluirMoto()
if($webmotorsEstoqueServiceExcluir->excluirMoto(new WebmotorsEstoqueStructExcluirMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceExcluir->getResult());
else
    print_r($webmotorsEstoqueServiceExcluir->getLastError());
// sample call for WebmotorsEstoqueServiceExcluir::excluirFotoMoto()
if($webmotorsEstoqueServiceExcluir->excluirFotoMoto(new WebmotorsEstoqueStructExcluirFotoMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceExcluir->getResult());
else
    print_r($webmotorsEstoqueServiceExcluir->getLastError());
// sample call for WebmotorsEstoqueServiceExcluir::excluirVideo()
if($webmotorsEstoqueServiceExcluir->excluirVideo(new WebmotorsEstoqueStructExcluirVideo(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceExcluir->getResult());
else
    print_r($webmotorsEstoqueServiceExcluir->getLastError());

/*********************************************
 * Example for WebmotorsEstoqueServicePublicar
 */
$webmotorsEstoqueServicePublicar = new WebmotorsEstoqueServicePublicar();
// sample call for WebmotorsEstoqueServicePublicar::publicarFotoanimacaoMoto()
if($webmotorsEstoqueServicePublicar->publicarFotoanimacaoMoto(new WebmotorsEstoqueStructPublicarFotoanimacaoMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServicePublicar->getResult());
else
    print_r($webmotorsEstoqueServicePublicar->getLastError());

/**********************************************
 * Example for WebmotorsEstoqueServiceDesativar
 */
$webmotorsEstoqueServiceDesativar = new WebmotorsEstoqueServiceDesativar();
// sample call for WebmotorsEstoqueServiceDesativar::desativarFotoanimacaoMoto()
if($webmotorsEstoqueServiceDesativar->desativarFotoanimacaoMoto(new WebmotorsEstoqueStructDesativarFotoanimacaoMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceDesativar->getResult());
else
    print_r($webmotorsEstoqueServiceDesativar->getLastError());

/******************************************
 * Example for WebmotorsEstoqueServiceFotos
 */
$webmotorsEstoqueServiceFotos = new WebmotorsEstoqueServiceFotos();
// sample call for WebmotorsEstoqueServiceFotos::FotosMoto()
if($webmotorsEstoqueServiceFotos->FotosMoto(new WebmotorsEstoqueStructFotosMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceFotos->getResult());
else
    print_r($webmotorsEstoqueServiceFotos->getLastError());

/*********************************************
 * Example for WebmotorsEstoqueServiceAvalicao
 */
$webmotorsEstoqueServiceAvalicao = new WebmotorsEstoqueServiceAvalicao();
// sample call for WebmotorsEstoqueServiceAvalicao::AvalicaoMoto()
if($webmotorsEstoqueServiceAvalicao->AvalicaoMoto(new WebmotorsEstoqueStructAvalicaoMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceAvalicao->getResult());
else
    print_r($webmotorsEstoqueServiceAvalicao->getLastError());

/*******************************************
 * Example for WebmotorsEstoqueServiceTrocar
 */
$webmotorsEstoqueServiceTrocar = new WebmotorsEstoqueServiceTrocar();
// sample call for WebmotorsEstoqueServiceTrocar::TrocarModalidadeMoto()
if($webmotorsEstoqueServiceTrocar->TrocarModalidadeMoto(new WebmotorsEstoqueStructTrocarModalidadeMoto(/*** update parameters list ***/)))
    print_r($webmotorsEstoqueServiceTrocar->getResult());
else
    print_r($webmotorsEstoqueServiceTrocar->getLastError());
