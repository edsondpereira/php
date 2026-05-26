<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo de Receitas e Despesas</title>
</head>
<body style="font-family: 'Courier New';">
    <h1>Resumo de Receitas e Despesas</h1>
    <form action="" name="contas" method="post">
        <p style="color:blue; font-weight:bold">Despesas</p>    
            <p><label>Água.....:</label>
            <input type="number" min="1" name="agua" required>
        </p>    
            <p><label>Luz......:</label>
            <input type="number" min="1" name="luz" required>
        </p>
        </p>    
            <p><label>Telefone.:</label>
            <input type="number" min="1" name="telefone" required>
        </p>
        </p>    
        <p><label>Internet.:</label>
            <input type="number" min="1" name="internet" required>
        </p>
        <p style="color:red; font-weight:bold">Receitas</p> 
        <p><label>Salário..:</label>
            <input type="number" min="1" name="salario" required>
        </p>
        <p><label>Serviços.:</label>
            <input type="number" min="1" name="servicos" required>
        </p>
        <p>
            
        <button type="submit" name="calcular">Calcular</button>
        </p>
        
    </form>
</body>
</html>