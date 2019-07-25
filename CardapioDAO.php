<?php
class CardapioDAO {
    private static $conexao;

    public static function setConexao(PDO $con) {
        self::$conexao = $con;
    }

    public function cadastrarCardapio($tipo, $valor, $nome, $descricao) {
      $sql = "INSERT INTO cardapio (tipo, valor, nome, descricao)  VALUES ('$tipo', $valor, '$nome', '$descricao')";
      return self::$conexao->exec($sql);


}

    }


?>
