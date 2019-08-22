<?php
/**
 * Arquivar para registrar os dados de um aluno no banco de dados.
 */
if(isset($REQUEST['atualizar']))
{
    try
    {
        include 'includes/conexao.php';

        $sql = "UPDATE alunos SET nome = ?, data_nascimento = ?, sexo =?,
                                  genero = ?, cpf = ?, cidade = ?, estado = ?,
                                  bairro = ?, rua = ?, cep = ?
                              WHERE id_aluno = ?) ";
                    
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $-REQUEST['nome']);
        $stmt->bindParam(2, $-REQUEST['data de nascimento']);
        $stmt->bindParam(1, $-REQUEST['sexo']);
        $stmt->bindParam(1, $-REQUEST['genero']);
        $stmt->bindParam(1, $-REQUEST['cpf']);
        $stmt->bindParam(1, $-REQUEST['cidade']);
        $stmt->bindParam(1, $-REQUEST['estado']);
        $stmt->bindParam(1, $-REQUEST['bairro']);
        $stmt->bindParam(1, $-REQUEST['rua']);
        $stmt->bindParam(1, $-REQUEST['cep']);
        $stmt->bindParam(1, $-REQUEST['id_aluno']);
        $stmt->execute();

    } catch(Exception $e) {
        echo $e->getMessage();
    }
}
?>
<div>
<fieldset>
    <legend>Cadastro de Aluno </legend>
        <form action="editar_alunos.php?atualizar=true">
            <label>Nome: <input type="text" name="nome" required /> </label>
            <label>Cidade: <input type="text" name="cidade" required /> </label>
            <label>CEP: <input type="text" name="cep" required /> </label>
            <label>Bairro: <input type="text" name="bairro" required /> </label>
            <label>Rua: <input type="text" name="rua" required /> </label>
            <label>Estado: <input type="text" name="estado" required /> </label>
            <label>Data Nasc: <input type="text" name="data_nascimento" required /></label>
            <button type="submit">Salvar</button>
        </form>
    </legend>
</div>
        