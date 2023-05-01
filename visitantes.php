    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=visitantes', 'root', '');

    if (isset($_POST['acao'])) {
        $nome = $_POST['nome'];
        $dataNascimento = $_POST['dataNascimento'];
        $pgt1 = $_POST['pergunta1'];
        $pgt11 = $_POST['pergunta11'];
        $pgt2 = $_POST['pergunta2'];
        $pgt3 = $_POST['pergunta3'];
        $pgt33 = $_POST['pergunta33'];
        $pgt4 = $_POST['pergunta4'];
        $pgt44 = $_POST['pergunta44'];
        $pgt5 = $_POST['pergunta5'];
        $pgt55 = $_POST['pergunta55'];
        $pgt6 = $_POST['pergunta6'];
        $pgt7 = $_POST['pergunta7'];

        $sql = $pdo->prepare('INSERT INTO `respostasForm` VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

        $sql->execute(array($nome, $dataNascimento, $pgt1, $pgt11, $pgt2, $pgt3, $pgt33, $pgt4, $pgt44, $pgt5, $pgt55, $pgt6, $pgt7));
        echo 'Cliente inserido com sucesso';
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Visitante</title>
    </head>

    <body>

        <div class="container">

            <header>
            </header>
            <img src="http://localhost/img/heart.png" width="200" height="150"> </br>

            <p style="font-family:courier,arial,helvetica;">Oi, tudo bem?? </br> Aqui é o momento que preciso saber de algumas informações sobre você,
                para que o nosso atendimento seja focado em suas necessidades. </br> </br> São menos de <strong>10 perguntas</strong> e
                você responde <strong>rapidinho.</strong>
            </p> </br>

            <form method="post">
                <input type="text" name="nome" placeholder="Seu nome" required />
                <input type="date" name="dataNascimento" required />
                <div class="questions" id="pergunta1">
                    <legend><strong>Atualmente você pratica atividade física?</strong></legend></br></br>
                    <input type="radio" name="pergunta1" value="SIM" id="yes1" />
                    <label for="yes1">Sim</label>
                    <input type="text" name="pergunta11" placeholder="Qual?" />
                    <input type="radio" name="pergunta1" value="NÃO" id="no1" />
                    <label for="no1">Não</label> </br> </br>
                </div>
                <div id="pergunta2">
                    <legend><strong>E ao te perguntar sobre a sua forma física atual, você responderia? </strong> </legend></br></br>
                    <input type="radio" name="pergunta2" value="BOA" id="opt1" />
                    <label for="opt1"> Boa </label>
                    <input type="radio" name="pergunta2" value="REGULAR" id="opt2" />
                    <label for="opt2"> Regular </label>
                    <input type="radio" name="pergunta2" value="RUIM" id="opt3" />
                    <label for="opt3"> Ruim </label> </br> </br>
                </div>
                <div id="pergunta3">
                    <legend><strong>Você está ativo em outra academia? </strong></legend></br></br>
                    <input type="radio" name="pergunta3" value="SIM" id="yes1" />
                    <label for="yes1">Sim</label>
                    <input type="text" name="pergunta33" placeholder="Qual?" />
                    <input type="radio" name="pergunta3" value="NÃO" id="no1" />
                    <label for="no1">Não</label> </br> </br>
                </div>
                <div id="pergunta4">
                    <legend><strong>E me diga, o que te trouxe até aqui?</strong></legend></br></br>
                    <input type="radio" name="pergunta4" value="NOVOS AMIGOS" />
                    <label for="opt1"> Novos amigos </label>
                    <input type="radio" name="pergunta4" value="NÃO CONSEGUI RESULTADOS" id="opt2" />
                    <label for="opt2"> Não consegui resultados </label></br></br>
                    <input type="radio" name="pergunta4" value="INSTISFAÇÃO OUTRA ACADEMIA" id="opt3" />
                    <label for="opt3"> Insatisfação na outra academia </label>
                    <input type="radio" name="pergunta4" value="REDES SOCIAIS" id="opt4" />
                    <label for="opt4"> Redes sociais </label>
                    <input type="radio" name="pergunta4" value="VALORES" id="opt4" />
                    <label for="opt4"> Valores </label>
                    <input type="radio" name="pergunta4" value="DISTANCIA" id="opt4" />
                    <label for="opt4"> Distância </label>
                    <input type="radio" name="pergunta4" value="OUTROS" id="opt4" />
                    <input type="text" name="pergunta44" placeholder="Outros" /> </br> </br>
                </div>
                <div>
                    <legend><strong>Tem alguma modalidade de maior interesse?</strong></legend></br></br>
                    <input type="radio" name="pergunta5" value="SIM" />
                    <label for="yes1">Sim</label>
                    <input type="text" name="pergunta55" placeholder="Qual?" />
                    <input type="radio" name="pergunta5" value="NAO" />
                    <label for="no1">Não</label> </br> </br>
                </div>
                <div>
                    <legend><strong>Qual horário você pretende frequentar?</strong> </legend></br>
                    <input type="radio" name="pergunta6" value="MANHÃ" />
                    <label for="opt1"> Manhã </label>
                    <input type="radio" name="pergunta6" value="TARDE" />
                    <label for="opt2"> Tarde </label>
                    <input type="radio" name="pergunta6" value="NOITE" />
                    <label for="opt3"> Noite </label> </br> </br>
                </div>
                <div>
                    <legend><strong>O que é importante para você em uma academia para que a considere ideal?</strong></legend></br>
                    <input type="radio" name="pergunta7" value="ATENDIMENTO" />
                    <label for="opt1"> Atendimento </label>
                    <input type="radio" name="pergunta7" value="ESTRUTURA" />
                    <label for="opt2"> Estrutura </label>
                    <input type="radio" name="pergunta7" value="VARIEDADE DAS AULAS" />
                    <label for="opt3"> Variedade das aulas </label>
                    <input type="radio" name="pergunta7" value="PROXIMIDADE" />
                    <label for="opt4"> Proximidade de casa ou trabalho </label> </br></br>
                </div>
                <input type="submit" name="acao" value="Enviar" />
            </form>
            <p style="font-family:courier,arial,helvetica;">Viu, rapidinho. <strong>Obrigado.</strong></p>
            <p style="font-family:courier,arial,helvetica;"><strong>Aberta 363 dias no ano, exceto 25/12 e 01/01.</strong></p>

            <footer> <img src="http://localhost/img/logo_cia.png" width="300" height="110"> </br></footer>
        </div>
    </body>

    </html>
