<?php 
@session_start();
$id_usuario = @$_SESSION['id'];
require_once("../verificar.php");
require_once("../../conexao.php");

$categoria = $_POST['categoria'];
$subcategoria = $_POST['subcategoria'];

$html = file_get_contents($url_sistema."sistema/painel_loja/rel/produtos.php?categoria=$categoria&subcategoria=$subcategoria&usuario=$id_usuario&token=A5090");


//CARREGAR DOMPDF

require_once '../dompdf/autoload.inc.php';

use Dompdf\Dompdf;

use Dompdf\Options;



header("Content-Transfer-Encoding: binary");

header("Content-Type: image/png");



//INICIALIZAR A CLASSE DO DOMPDF

$options = new Options();

$options->set('isRemoteEnabled', TRUE);

$pdf = new DOMPDF($options);





//Definir o tamanho do papel e orientação da página

$pdf->set_paper('A4', 'portrait');



//CARREGAR O CONTEÚDO HTML

$pdf->load_html($html);



//RENDERIZAR O PDF

$pdf->render();

//NOMEAR O PDF GERADO





$pdf->stream(

	'caixas.pdf',

	array("Attachment" => false)

);







 ?>