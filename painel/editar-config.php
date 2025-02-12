<?php 
$tabela = 'config';
require_once("../conexao.php");

$nome = $_POST['nome_sistema'];
$email = $_POST['email_sistema'];
$telefone = $_POST['telefone_sistema'];
$endereco = $_POST['endereco_sistema'];
$instagram = $_POST['instagram_sistema'];
$multa_atraso = $_POST['multa_atraso'];
$juros_atraso = $_POST['juros_atraso'];
$marca_dagua = $_POST['marca_dagua'];
$assinatura_recibo = $_POST['assinatura_recibo'];
$impressao_automatica = $_POST['impressao_automatica'];
$cnpj_sistema = $_POST['cnpj_sistema'];
$entrar_automatico = $_POST['entrar_automatico'];
$mostrar_preloader = $_POST['mostrar_preloader'];
$ocultar_mobile = $_POST['ocultar_mobile'];
$api_whatsapp = $_POST['api_whatsapp'];
$token_whatsapp = $_POST['token_whatsapp'];
$instancia_whatsapp = $_POST['instancia_whatsapp'];
$alterar_acessos = $_POST['alterar_acessos'];
$dados_pagamento = $_POST['dados_pagamento'];
$comissao_mk = $_POST['comissao_mk'];
$aprovar_loja = $_POST['aprovar_loja'];
$aprovar_produtos = $_POST['aprovar_produtos'];
$cadastro_loja = $_POST['cadastro_loja'];
$itens_paginacao = $_POST['itens_paginacao'];
$token_frete = $_POST['token_frete'];
$dias_pgto_comissao = $_POST['dias_pgto_comissao'];
$dias_excluir_pedidos = $_POST['dias_excluir_pedidos'];

$tipo_loja = $_POST['tipo_loja'];
$token_mp = $_POST['token_mp'];
$public_mp = $_POST['public_mp'];

$multa_atraso = str_replace(',', '.', $multa_atraso);
$multa_atraso = str_replace('%', '', $multa_atraso);

$juros_atraso = str_replace(',', '.', $juros_atraso);
$juros_atraso = str_replace('%', '', $juros_atraso);

//foto logo
$caminho = '../img/logo.png';
$imagem_temp = @$_FILES['foto-logo']['tmp_name']; 

if(@$_FILES['foto-logo']['name'] != ""){
	$ext = pathinfo($_FILES['foto-logo']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png' || $ext == 'PNG'){ 	
				
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


//foto logo rel
$caminho = '../img/logo.jpg';
$imagem_temp = @$_FILES['foto-logo-rel']['tmp_name']; 

if(@$_FILES['foto-logo-rel']['name'] != ""){
	$ext = pathinfo(@$_FILES['foto-logo-rel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'jpg' || $ext == 'JPG'){ 	
			
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


//foto icone
$caminho = '../img/icone.png';
$imagem_temp = @$_FILES['foto-icone']['tmp_name']; 

if(@$_FILES['foto-icone']['name'] != ""){
	$ext = pathinfo(@$_FILES['foto-icone']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png' || $ext == 'png'){ 	
			
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


//foto ass
$caminho = '../img/assinatura.jpg';
$imagem_temp = @$_FILES['assinatura_rel']['tmp_name']; 

if(@$_FILES['assinatura_rel']['name'] != ""){
	$ext = pathinfo(@$_FILES['assinatura_rel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'jpg' || $ext == 'JPG'){ 	
			
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


//foto painel
$caminho = '../img/foto-painel.png';
$imagem_temp = @$_FILES['foto-painel']['tmp_name']; 

if(@$_FILES['foto-painel']['name'] != ""){
	$ext = pathinfo(@$_FILES['foto-painel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png' || $ext == 'PNG'){ 	
			
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, instagram = :instagram, multa_atraso = :multa_atraso, juros_atraso = :juros_atraso, marca_dagua = :marca_dagua, marca_dagua = :marca_dagua, assinatura_recibo = :assinatura_recibo, impressao_automatica = :impressao_automatica, cnpj = :cnpj_sistema, entrar_automatico = :entrar_automatico, mostrar_preloader = :mostrar_preloader, ocultar_mobile = :ocultar_mobile, api_whatsapp = '$api_whatsapp', token_whatsapp = :token_whatsapp, instancia_whatsapp = :instancia_whatsapp, alterar_acessos = :alterar_acessos, dados_pagamento = :dados_pagamento, comissao_mk = :comissao_mk, aprovar_loja = :aprovar_loja, aprovar_produtos = :aprovar_produtos, cadastro_loja = :cadastro_loja, itens_paginacao = :itens_paginacao, token_frete = :token_frete, dias_pgto_comissao = :dias_pgto_comissao, dias_excluir_pedidos = :dias_excluir_pedidos, tipo_loja = :tipo_loja, token_mp = :token_mp , public_mp = :public_mp  where id = 1");

$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":instagram", "$instagram");
$query->bindValue(":multa_atraso", "$multa_atraso");
$query->bindValue(":juros_atraso", "$juros_atraso");
$query->bindValue(":marca_dagua", "$marca_dagua");
$query->bindValue(":assinatura_recibo", "$assinatura_recibo");
$query->bindValue(":impressao_automatica", "$impressao_automatica");
$query->bindValue(":cnpj_sistema", "$cnpj_sistema");
$query->bindValue(":entrar_automatico", "$entrar_automatico");
$query->bindValue(":mostrar_preloader", "$mostrar_preloader");
$query->bindValue(":ocultar_mobile", "$ocultar_mobile");
$query->bindValue(":token_whatsapp", "$token_whatsapp");
$query->bindValue(":instancia_whatsapp", "$instancia_whatsapp");
$query->bindValue(":alterar_acessos", "$alterar_acessos");
$query->bindValue(":dados_pagamento", "$dados_pagamento");
$query->bindValue(":comissao_mk", "$comissao_mk");
$query->bindValue(":aprovar_loja", "$aprovar_loja");
$query->bindValue(":aprovar_produtos", "$aprovar_produtos");
$query->bindValue(":cadastro_loja", "$cadastro_loja");
$query->bindValue(":itens_paginacao", "$itens_paginacao");
$query->bindValue(":token_frete", "$token_frete");
$query->bindValue(":dias_pgto_comissao", "$dias_pgto_comissao");
$query->bindValue(":dias_excluir_pedidos", "$dias_excluir_pedidos");
$query->bindValue(":tipo_loja", "$tipo_loja");
$query->bindValue(":token_mp", "$token_mp");
$query->bindValue(":public_mp", "$public_mp");
$query->execute();

echo 'Editado com Sucesso';
 ?>