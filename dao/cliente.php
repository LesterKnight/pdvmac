<?
if (isset($_POST["clienteId"])
	$clienteId = $_POST["clienteId"];
else if(isset($_POST["nome"]) && isset($_POST["telefone"]) && isset($_POST["celular"]){
	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$celular = $_POST["celular"];
}
else
	die("Erro, impossivel salvar os dados do cliente");

phpclass Cliente{
	public $clienteId;
	public $nome;
	public $telefone;
	public $celular;
	public $endereco;

	function __construct($nome,$telefone,$celular,$endereco) {
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->celular = $celular;
		$this->endereco = $endereco;
	}

	function salvar(){
		include_once "../pdoconf.php";
		try{
			$stmt = $conn->prepare("insert into cliente (nome, fone1,fone2) values(?,?,?)" );
			$stmt->bindParam(1,$this->nome);
			$stmt->bindParam(2,$this->telefone);
			$stmt->bindParam(3,$this->celular);
			if($stmt->execute())
				echo "Cliente inserido!";
		}
		catch (PDOException $e){
			echo "Erro! ".$e->getMessage()." Cliente não inserido";
		}
	}
}
$cliente = new Cliente("joao", "123123", "234234", "rua tal");
$cliente->salvar();
?>
