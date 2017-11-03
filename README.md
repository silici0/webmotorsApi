# API para webmotors / Motos

Consumo da api da WebMotors / Motos, utilizando 3 api ( WebmotorsLogin / WebmotorsEstoque e CodigosWebMotorsMotos )

## Feitos com

Códigos gerado com [Wsdltophp] (https://www.wsdltophp.com/) - Para gerar PHP apartir de Api Wsdl


## Pegar hash de autenticacao
```
/*
Login / pegar o hash
 */
$webmotorsLoginServiceAutenticar = new \WebmotorsLoginServiceAutenticar();

if($webmotorsLoginServiceAutenticar->autenticar(new \WebmotorsLoginStructAutenticar('cnpj', 'email', 'senha')))
    $result = $webmotorsLoginServiceAutenticar->getResult();
else {
    echo '<h1>ERROR</h1>';
    print_r($webmotorsLoginServiceAutenticar->getLastError());
    exit();
}
$hashAutenticacao = $result->autenticarResult->HashAutenticacao;
```

## Pegar codigo/nome das marcas
```
/*
Trazer códigos e nome das marcas
 */
$codigosWebMotorsMotosServiceObter = new \CodigosWebMotorsMotosServiceObter();
// sample call for CodigosWebMotorsMotosServiceObter::obterMarcaMotos()
if($codigosWebMotorsMotosServiceObter->obterMarcaMotos(new \CodigosWebMotorsMotosStructObterMarcaMotos($hashAutenticacao)))
    $marcas = $codigosWebMotorsMotosServiceObter->getResult();
else
    print_r($codigosWebMotorsMotosServiceObter->getLastError());


foreach ($marcas->obterMarcaMotosResult->MarcaMotoWM as $key => $marca) {
    echo '<br>'.$marca->CodigoMarca;
    echo '<br>'.$marca->NomeMarca;
}
```

## Pegar Dados do estoque de motos e fotos
```
$webmotorsEstoqueServiceObter = new \WebmotorsEstoqueServiceObter();
if($webmotorsEstoqueServiceObter->obterEstoqueAtualMotos(new \WebmotorsEstoqueStructObterEstoqueAtualMotos($hashAutenticacao)))
    $motosResult = $webmotorsEstoqueServiceObter->getResult();
else {
    echo '<h1>ERROR</h1>';
    print_r($webmotorsEstoqueServiceObter->getLastError());
    exit();
}

foreach($motosResult->obterEstoqueAtualMotosResult->AnuncioMotoWM as $moto) {
    $webmotorsEstoqueServiceFotos = new \WebmotorsEstoqueServiceFotos();
    if($webmotorsEstoqueServiceFotos->FotosMoto(new \WebmotorsEstoqueStructFotosMoto($moto->CodigoAnuncio, $hashAutenticacao)))
        $fotos = $webmotorsEstoqueServiceFotos->getResult();
    else
        print_r($webmotorsEstoqueServiceFotos->getLastError());

    echo '<div class="moto" styles="flot:left;">';
        echo '<div class=" fotos">';
            foreach ($fotos->FotosMotoResult->FotosWM[0]->Fotos->DetalheFotoWM as $key => $value) {
                    echo '<a href="https://image.webmotors.com.br/_fotos/'.$value->Url.'?s=fill&w=0&h=0&q=100" data-lightbox="lightbox-'.$moto->CodigoAnuncio.'"><img class="item" width="25%" src="https://image.webmotors.com.br/_fotos/'.$value->Url.'?s=fill&w=0&h=0&q=100" /></a>';
            }
        echo '</div>';
        echo '<h3> '.$moto->NomeMoto. ' - KM '. $moto->Km. '  -  Anuncio : '.$moto->CodigoAnuncio. '</h3>';
        echo '<br>Ano : '.$moto->AnoDoModelo . '/'. @$moto->AnoFabricacao;
        echo '<br>Estido : '. $moto->EstiloMoto;
        echo '<br>Cor : '. $moto->DescricaoCorPredominante .'/' . $moto->DescricaoCorSecundaria;
        echo '<br>Cilindrada : '. $moto->NumeroCilindradas;
        echo '<br>Alimentação : '. $moto->DescricaoTipoAlimentacao;
        echo '<br>Tipo de Motor : '. $moto->DescricaoTipoMotor;
        echo '<br>Refrigeração : '. $moto->DescricaoTipoRefrigeracao;
        echo '<br>Marchas : '. $moto->DescricaoNumeroMarchas;
        echo '<br>Feio dianteiro/traseiro : '. $moto->DescricaoTipoFreio;
        echo '<br>Partida : '.$moto->DescricaoTipoPartida;
    echo '</div>';
}
```