<?php 
require_once("../conexao.php");
@session_start();
$id_usuario = $_SESSION['id'];

$home = 'ocultar';
$configuracoes = 'ocultar';
$caixas = 'ocultar';
$tarefas = 'ocultar';
$lancar_tarefas = 'ocultar';
$pedidos = 'ocultar';
$avaliacoes = 'ocultar';

//grupo pessoas
$usuarios = 'ocultar';
$fornecedores = 'ocultar';
$funcionarios = 'ocultar';
$clientes = 'ocultar';

//grupo cadastros
$grupo_acessos = 'ocultar';
$acessos = 'ocultar';
$frequencias = 'ocultar';
$cargos = 'ocultar';
$formas_pgto = 'ocultar';
$categorias = 'ocultar';
$subcategorias = 'ocultar';
$envios = 'ocultar';
$banners = 'ocultar';
$cupons = 'ocultar';

//grupo financeiro
$receber = 'ocultar';
$pagar = 'ocultar';
$rel_financeiro = 'ocultar';
$rel_sintetico_despesas = 'ocultar';
$rel_sintetico_receber = 'ocultar';
$rel_balanco = 'ocultar';
$rel_inadimplementes = 'ocultar';




$query = $pdo->query("SELECT * FROM usuarios_permissoes where usuario = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
		$permissao = $res[$i]['permissao'];

		$query2 = $pdo->query("SELECT * FROM acessos where id = '$permissao'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$nome = $res2[0]['nome'];
		$chave = $res2[0]['chave'];
		$id = $res2[0]['id'];

		if($chave == 'home'){
			$home = '';
		}

		if($chave == 'configuracoes'){
			$configuracoes = '';
		}

		if($chave == 'caixas'){
			$caixas = '';
		}

		if($chave == 'tarefas'){
			$tarefas = '';
		}

		if($chave == 'lancar_tarefas'){
			$lancar_tarefas = '';
		}

		if($chave == 'pedidos'){
			$pedidos = '';
		}

		if($chave == 'avaliacoes'){
			$avaliacoes = '';
		}

	
		if($chave == 'usuarios'){
			$usuarios = '';
		}

		if($chave == 'fornecedores'){
			$fornecedores = '';
		}

		if($chave == 'funcionarios'){
			$funcionarios = '';
		}

		if($chave == 'clientes'){
			$clientes = '';
		}


		if($chave == 'grupo_acessos'){
			$grupo_acessos = '';
		}

		if($chave == 'acessos'){
			$acessos = '';
		}

		if($chave == 'frequencias'){
			$frequencias = '';
		}

		if($chave == 'cargos'){
			$cargos = '';
		}

		if($chave == 'formas_pgto'){
			$formas_pgto = '';
		}

		if($chave == 'categorias'){
			$categorias = '';
		}

		if($chave == 'subcategorias'){
			$subcategorias = '';
		}

			if($chave == 'envios'){
			$envios = '';
		}

			if($chave == 'banners'){
			$banners = '';
		}

			if($chave == 'cupons'){
			$cupons = '';
		}




		if($chave == 'receber'){
			$receber = '';
		}


		if($chave == 'pagar'){
			$pagar = '';
		}

		if($chave == 'rel_financeiro'){
			$rel_financeiro = '';
		}

		if($chave == 'rel_sintetico_receber'){
			$rel_sintetico_receber = '';
		}

		if($chave == 'rel_sintetico_despesas'){
			$rel_sintetico_despesas = '';
		}

		if($chave == 'rel_balanco'){
			$rel_balanco = '';
		}

		if($chave == 'rel_inadimplementes'){
			$rel_inadimplementes = '';
		}





	

		


	}

}



$pag_inicial = '';
if($home != 'ocultar'){
	$pag_inicial = 'home';
}else{
	$query = $pdo->query("SELECT * FROM usuarios_permissoes where usuario = '$id_usuario'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);	
	if($total_reg > 0){
		for($i=0; $i<$total_reg; $i++){
			$permissao = $res[$i]['permissao'];		
			$query2 = $pdo->query("SELECT * FROM acessos where id = '$permissao'");
			$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
			if($res2[0]['pagina'] == 'Não'){
				continue;
			}else{
				$pag_inicial = $res2[0]['chave'];
				break;
			}	
				
		}
				

	}else{
		echo 'Você não tem permissão para acessar nenhuma página, acione o administrador!';
		echo '<br>';
		echo '<a href="../index.php">Clique aqui</a> para ir para o Login!';
		echo "<script>localStorage.setItem('id_usu', '')</script>";
		exit();
	}
}



if($usuarios == 'ocultar' and $funcionarios == 'ocultar' and $fornecedores == 'ocultar' and $clientes == 'ocultar'){
	$menu_pessoas = 'ocultar';
}else{
	$menu_pessoas = '';
}


if($grupo_acessos == 'ocultar' and $acessos == 'ocultar' and $cargos == 'ocultar' and $frequencias == 'ocultar' and $formas_pgto == 'ocultar' and $categorias == 'ocultar' and $subcategorias == 'ocultar' and $envios == 'ocultar' and $banners == 'ocultar' and $cupons == 'ocultar'){
	$menu_cadastros = 'ocultar';
}else{
	$menu_cadastros = '';
}


if($receber == 'ocultar' and $pagar == 'ocultar' and $rel_balanco == 'ocultar' and $rel_sintetico_despesas == 'ocultar' and $rel_sintetico_receber == 'ocultar' and $rel_financeiro == 'ocultar' and $rel_inadimplementes == 'ocultar'){
	$menu_financeiro = 'ocultar';
}else{
	$menu_financeiro = '';
}




?>