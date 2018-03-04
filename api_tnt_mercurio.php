<?php
$soapClient = new SoapClient("http://ws.tntbrasil.com.br/servicos/CalculoFrete?wsdl"); 

$consulta = new stdClass();
$consulta->cdDivisaoCliente='1';
$consulta->cepDestino='22450000';
$consulta->cepOrigem='89806210';
$consulta->login='login aqui';
$consulta->nrIdentifClienteDest='99999999999';
$consulta->nrIdentifClienteRem='cnpj aqui';
$consulta->nrInscricaoEstadualDestinatario='ie aqui';
$consulta->nrInscricaoEstadualRemetente='';
$consulta->psReal='5.00';
$consulta->senha='';
$consulta->tpFrete='C';
$consulta->tpPessoaDestinatario='F';
$consulta->tpPessoaRemetente='J';
$consulta->tpServico='RNC';
$consulta->tpSituacaoTributariaDestinatario='NC';
$consulta->tpSituacaoTributariaRemetente='CO';
$consulta->vlMercadoria='999.00';
		
try { 
	$info = $soapClient->calculaFrete(array('in0'=>$consulta)); 
	print_r($info);
} catch (SoapFault $fault) { 
	print_r($fault); 
}
?>
