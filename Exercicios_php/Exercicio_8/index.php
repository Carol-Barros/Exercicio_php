<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
include_once '/home/carolinab/Documents/Exercicio_8/Pessoa.php';
include_once '/home/carolinab/Documents/Exercicio_8/Livro.php';
include_once '/home/carolinab/Documents/Exercicio_8/Publicacao.php';

$pessoa1 = new Pessoa("Paulo Coelho", "Masculino", "73");
$pessoa2 = new Pessoa("Rick Riordan", "Masculino", "56");
$pessoa3 = new Pessoa("J.K. Rowling", "Feminino", "55");

$livro[1] = new Livro("O alquimista", $pessoa1, "245", "57", true, "Flavia");
$livro[2] = new Livro("O Ladrão de Raios", $pessoa2, "400", "53", true, "Carolina");
$livro[3] = new Livro("A pedra filosofal", $pessoa3, "208", "34", true, "Juliana");
$livro[4] = new Livro("A criança amaldiçoada", $pessoa3, "352", "78", true, "Antonio");

echo $pessoa1->GetNome() . ", " . $pessoa1->GetSexo() . ", " . $pessoa1->GetIdade() . "\n";
echo $livro[1]->GetTitulo() . " foi escrito por " . $livro[1]->GetAutor() . "\n";
echo "Dados: " . $livro[1]->GetTotPaginas() . " " . $livro[1]->GetPagAtual(). " ". $livro[1]->GetAberto(). "\n";
echo "Está sendo lido por ".  $livro[1]->GetLeitor() . "\n";

$livro[1]->GetTotPaginas() . "\n";
$pessoa1->fazerAniversario();
echo "Idade pós aniversario é " . $pessoa1->GetIdade()."\n";
$livro[1]->voltarPagina();
echo "A página após voltar é: " . $livro[1]->GetPagAtual() ."\n";
$livro[1]->avancarPagina();
echo "A página após avançar é: " . $livro[1]->GetPagAtual() ."\n";
$livro[1]->folhear(9);
echo "A página após folhear é: " . $livro[1]->GetPagAtual() ."\n";
$livro[1]->abrir();
if($livro[1]->GetAberto())
    $estado="aberto";
    else
    $estado="fechado";
echo "O livro está: " . $estado ."\n";
$livro[1]->fechar();
if($livro[1]->GetAberto())
    $estado1="aberto";
    else
    $estado1="fechado";
echo "O livro está: " . $estado1 ."\n";
?>
</body>
</html>