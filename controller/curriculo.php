<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];

$efc = $_POST["efc"];
$emc = $_POST["emc"];
$esc = $_POST["esc"];
$pgc = $_POST["pgc"];
$mc = $_POST["mc"];

$empresa = $_POST["empresa"];
$data_admissao = $_POST["data_admissao"];
$data_demissao = $_POST["data_demissao"];
$atividade_exercida = $_POST["atividade_exercida"];

$descricao = $_POST["descricao"];
$horas = $_POST["horas"];
$ano_conclusao = $_POST["ano_conclusao"];

$informacoes = $_POST["informacoes"];

echo "Dados Pessoais";
echo $nome;
echo $telefone;
echo $endereco;
echo $email;
echo "Escolaridade";
echo $efc;
echo $emc;
echo $esc;
echo $pgc;
echo $mc;
echo "Experiencia Profissional";
echo $empresa;
echo $data_admissao;
echo $data_demissao;
echo $atividade_exercida;
echo "Cursos e Idiomas";
echo $descricao;
echo $horas;
echo $ano_conclusao;
echo "Informações Adicionais";
echo $informacoes;
?>





