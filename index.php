<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Document</title>
</head>

<body>
    <div class="container">

        <header>
            <img src="http://localhost/img/logo_cia.png" width="300" height="110"> </br>
        </header>
        <img src="http://localhost/img/heart.png" width="200" height="150"> </br>



        <p style="font-family:courier,arial,helvetica;">Oi, tudo bem?? </br> Aqui é o momento que preciso saber de algumas informações sobre você,
            para que o nosso atendimento seja focado em suas necessidades. </br> </br> São menos de <strong>10 perguntas</strong> e
            você responde <strong>rapidinho.</strong>
        </p> </br>

        <form method="POST" action="envialEmail.php">
            <label>Digite seu nome: </label>
            <input type="text" name="nome" required /></br></br>
            <label>Data de nascimento: </label>
            <input type="date" name="dtNasc" required /> </br></br>

            <div class="questions" id="pergunta1">
                <legend><strong>Atualmente você pratica atividade física?</strong></legend></br></br>
                <input type="radio" name="choice" id="yes1" />
                <label for="yes1">Sim</label>
                <input type="text" placeholder="Qual?" />
                <input type="radio" name="choice" id="no1" />
                <label for="no1">Não</label> </br> </br>
            </div>

            <div id="pergunta2">
                <legend><strong>E ao te perguntar sobre a sua forma física atual, você responderia? </strong> </legend></br></br>
                <input type="radio" name="choicep2" id="opt1" />
                <label for="opt1"> Boa </label>
                <input type="radio" name="choicep21" id="opt2" />
                <label for="opt2"> Regular </label>
                <input type="radio" name="choicep22" id="opt3" />
                <label for="opt3"> Ruim </label> </br> </br>
            </div>

            <div id="pergunta3">
                <legend><strong>Você está ativo em outra academia? </strong></legend></br></br>
                <input type="radio" name="choicep3" id="yes1" />
                <label for="yes1">Sim</label>
                <input type="radio" name="choicep31" id="no1" />
                <label for="no1">Não</label>
                <input type="text" placeholder="Qual?" /> </br> </br>
            </div>

            <div id="pergunta4">
                <legend><strong>E me diga, o que te trouxe até aqui?</strong></legend></br></br>
                <input type="radio" name="choicep4" id="opt1" />
                <label for="opt1"> Novos amigos </label>
                <input type="radio" name="choicep41" id="opt2" />
                <label for="opt2"> Não consegui resultados </label></br></br>
                <input type="radio" name="choicep42" id="opt3" />
                <label for="opt3"> Insatisfação na outra academia </label>
                <input type="radio" name="choicep43" id="opt4" />
                <label for="opt4"> Redes sociais </label>
                <input type="radio" name="choicep43" id="opt4" />
                <label for="opt4"> Valores </label>
                <input type="radio" name="choicep45" id="opt4" />
                <label for="opt4"> Distância </label>
                <input type="radio" name="choicep46" id="opt4" />
                <input type="text" placeholder="Outros" /> </br> </br>
            </div>

            <div id="pergunta5">
                <legend><strong>Tem alguma modalidade de maior interesse?</strong></legend></br></br>
                <input type="radio" name="choicep5" id="yes1" />
                <label for="yes1">Sim</label>
                <input type="text" placeholder="Qual?" />
                <input type="radio" name="choicep51" id="no1" />
                <label for="no1">Não</label> </br> </br>
            </div>

            <div id="pergunta6">
                <legend><strong>Qual horário você pretende frequentar?</strong> </legend></br>
                <input type="radio" name="choicep6" id="opt1" />
                <label for="opt1"> Manhã </label>
                <input type="radio" name="choicep61" id="opt2" />
                <label for="opt2"> Tarde </label>
                <input type="radio" name="choicep62" id="opt3" />
                <label for="opt3"> Noite </label> </br> </br>
            </div>

            <div id="pergunta7">
                <legend><strong>O que é importante para você em uma academia para que a considere ideal?</strong></legend></br>
                <input type="radio" name="choicep7" id="opt1" />
                <label for="opt1"> Atendimento </label>
                <input type="radio" name="choicep71" id="opt2" />
                <label for="opt2"> Estrutura </label>
                <input type="radio" name="choicep72" id="opt3" />
                <label for="opt3"> Variedade das aulas </label>
                <input type="radio" name="choicep73" id="opt4" />
                <label for="opt4"> Proximidade de casa ou trabalho </label> </br></br>
            </div>
            <input type="submit" name="btn-gerar" value="Salvar">
            Enviar
            </button>


        </form>

        <p style="font-family:courier,arial,helvetica;">Viu, rapidinho. <strong>Obrigado.</strong></p>
        <p style="font-family:courier,arial,helvetica;"><strong>Aberta 363 dias no ano, exceto 25/12 e 01/01.</strong></p>





    </div>

</body>

</html>
