<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=MedievalSharp' rel='stylesheet'>
</head>
<body>
    <header>
        <nav>
            <h1>BEM VINDO AO RPG!!</h1>
            <Label>JOGADOR AUSENTE</Label>
        </nav>
    </header>
    <main>
    <div id="informacoes_do_jogador">
        <Label>NOME...</Label>
        <p>Historia base</p>
        <ul>
            <li>vida</li>
            <li>destreza</li>
            <li>Força</li>
            <li>Constituição</li>
            <li>Inteligencia</li>
            <li>Carisma</li>
        </ul>

    </div>




    <div id="respiracao_do_jogador">
       <table>
        <span>
            <h2>Nome da respiração</h2>
            <button>=></button>
        </span>

        <tbody>
        <tr>
            <th>NOME DA FORMA: </th>
            <th>INFORMAÇÃO DA FORMA</th>
        </tr>
        <tr>
            <td>Nuvem Leve</td>
            <td> O usuário desfere um corte de cima para baixo, causando 1d8 de dano extra no acerto.</td>
        </tr>
        <tr>
            <td> Amarras do Céu</td>
            <td>O usuário marca um inimigo com suas nuvens, criando 3 anéis em volta do mesmo. Caso esse inimigo seja acertado, as nuvens se tornarão ventos poderosos que e cortarão o alvo. Essa forma adiciona 1d6 de dano a qualquer ataque desferido
!!!O dano extra não pode se tornar um acerto crítico!!!</td>
        </tr>
        <tr>
            <td>Comandante do Céu</td>
            <td>O usuário gasta 2 ataques para realizar essa respiração. A espada do usuário é rodeada de nuvens, formando um pequeno tornado, após o carregamento, um dos cortes é desferido: <br>
            • Uma linha reta, de 7 quadrados de distância <br>
            • uma área de 3 por 3 a sua frente
            O dano da arma se torna 2d8 nesse ataque.</td>
        </tr>

        </tbody>
       </table>
    </div>

    </main>
</body>
</html>