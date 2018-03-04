<?php
$soapClient = new SoapClient("http://189.57.214.75:8081/UPS_Billing.asmx?wsdl"); 

$consulta = array();
$consulta['nr_peso']='1.00';
$consulta['nr_conta']='nr da conta';
$consulta['nr_cep_origem']='22450000';
$consulta['nr_cep_destino']='80030060';
$consulta['vl_valor_mercadoria']='200.00';
$consulta['nr_quantidade_pacotes']='1';
$consulta['nm_cidade_origem']='Rio de Janeiro';
$consulta['nm_cidade_destino']='Teresina';
$consulta['ds_dimencional']='20x20x20';
$consulta['autenticacao']['nr_conta']='nr da conta';
$consulta['autenticacao']['nr_chaveAcesso']='chave de acesso';

try { 
	$info = $soapClient->UPS_Retorno_Frete(array('ParametroFrete'=>$consulta)); 
	print_r($info);
} catch (SoapFault $fault) { 
	print_r($fault); 
}
?>
