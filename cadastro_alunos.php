<?php
/**
 * Arquivo para registrar os dados de um aluno no banco de dados.
 */
if(isset($_REQUEST['cadastrar']))
{
    try
    {
        include 'includes/conexao.php';

        $sql - "INSERT INTO alunos (nome, data_nascimento, sexo,
                                    genero, cpf, cidade, estado,
                                    bairro, rua, cep)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

        $stml = $conexao->preparar($sql);
        $stml->bindParam(1, $_REQUEST['nome']);
        $stml->bindParam(2, $_REQUEST['data_nascimento']);
        $stml->bindParam(3, $_REQUEST['sexo']);
        $stml->bindParam(4, $_REQUEST['genero']);
        $stml->bindParam(5, $_REQUEST['cpf']);
        $stml->bindParam(6, $_REQUEST['cidade']);
        $stml->bindParam(7, $_REQUEST['estado']);
        $stml->bindParam(8, $_REQUEST['bairro']);
        $stml->bindParam(9, $_REQUEST['rua']);
        $stml->bindParam(10, $_REQUEST['cep']);
        $stml->execute();

    } catch(Exception $e) {
        echo $e->getMessage();
    }
}
    