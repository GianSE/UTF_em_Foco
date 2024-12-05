
<?php 

$ra	= filter_input(INPUT_POST, 'ra');	//atribui��o do campo "nome" vindo do formul�rio para variavel	
$email	= filter_input(INPUT_POST, 'email');	//atribui��o do campo "email" vindo do formul�rio para variavel
$senha	= filter_input(INPUT_POST, 'senha');	//atribui��o do campo "senha" vindo do formul�rio para variavel
//Gravando no banco de dados !
require_once 'pdoconfig.php';
 
try {
    $conn = new PDO("mysql:localhost=$host;bdcad=$bdname", 'root', '');
    echo "Conectado a $bdcad em $host com sucesso.";
} catch (PDOException $pe) {
    die("N�o foi poss�vel se conectar ao banco de dados $dbname :" . $pe->getMessage());
}
//conectando com o localhost - mysql
$conexao = mysqli_connect("localhost","root","", "bdcad");
if (!$conexao)
	die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysqli_error());
//conectando com o banco de dados chamado TabClientes
$banco = mysqli_select_db($conexao,"bdcad"); 
if (!$banco)
	die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());

$sql = "INSERT INTO TabCad VALUES ";
$sql .= "('$ra', '$email', '$senha')"; 
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "Cliente cadastrado com sucesso!<br>";
//FORMA 1
//$dados = mysqli_query($conexao, "INSERT INTO `TabClientes` ( `nome`, `sexo`, `email`, `ddd`, `telefone`, `endere�o`, `cidade`, `estado`, `bairro`, `pais`, `login`, `senha` ) 
	//VALUES ('$nome', '$sexo', '$email', '$ddd', '$telefone', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha')");

//if($dados)
	//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a aten��o.";
//else
	//echo "Erro no cadastro";


//FORMA 2
//$query = "INSERT INTO `TabClientes` ( `nome` , `sexo`, `email`, `ddd`, `telefone`, `endere�o`, `cidade`, `estado`, `bairro`, `pais`, `login`, `senha` ) 
//VALUES ('$nome', '$sexo', '$email', '$ddd', '$telefone', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha')";

//mysqli_query($conexao, $query);


?>

