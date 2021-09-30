<?php



?>

<div class="titulo">
    <h1>Sistema de Recomendação FAQ</h1>
    <h2>Cadastro Chamado</h2>
</div>

<form action="src/Controller/controlChamado.php" method="post">
    <div class="form">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit" name="btnEnviar">Enviar</button>
        </div>
    </div>
</form>
    
