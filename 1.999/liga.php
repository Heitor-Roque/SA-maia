<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon"type="imagex/png" href="img/favicon.ico">
    <title>Liga das Nações</title>
    <style>
      body {
        background: linear-gradient(90deg, #6d6d6dff, #1a1a1a);
        color: #f5f5f5;
      }
      .barra {
        background-color: #202020ff;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 60px;
        opacity: 90%;
        z-index: 3;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        font-family: sans-serif;
      }
    .menu {
        display: flex;
        gap: 20px;
        margin-right:auto;
        margin-left:auto;
      }
      .menu a {
        text-decoration: none;
        background: none;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
        padding: 12px 12px;
        border-radius: 6px;
        transition: 0.3s;
      }
      .menu a:hover {
        background-color: #444;
      }
      .voltar{
        background: none;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
        padding: 12px 10px;
        border-radius: 6px;
        transition: 0.3s;
        margin-right:-10px;
        z-index:2;
      }
      .voltar:hover {
        background-color: #444;
      }
      .img1{
        width: 100.8%;
        height: 900px;
        opacity: 60%;
        z-index: 1;
        position: relative;
        box-shadow: 1px 3px 4px black;
        margin-top:3em; 
        margin-left: -8px;
      }
      .titulo{
        z-index: 2;
        position:absolute;
        color:white;
        bottom:500px;
        left:9.9em;
        font-size:70px;
        text-shadow: 3px 3px 5px black;
        margin:0 auto;
      }
      .texto1, .texto2 {
        color:white;
        margin:10px 400px;
        font-size:20px;
        text-shadow: 3px 3px 5px black;
        text-align: justify;
      }
      .titulo1, .titulo2 {
        color:white;
        margin:35px 400px;
        font-size:30px;
        text-shadow: 3px 3px 5px black;
        text-align: justify;
      }
      .rodape {
        background-color: #202020;
        color: white;
        text-align: center;
        padding: 40px 0px;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        width: 100.9%;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.4);
        margin-top:100px;
        border:0px;
        margin-bottom: -50px;
        margin-left:-10px;
      }
      .rodape p {
        margin: 10px auto;
      }

    </style>
  </head>
  <body>
    <div class="conteudo">
      <center>
      <h1 class="titulo">Liga das Nações</h1>
    </center>
    </div>
<?php
  include_once('menu.php');
?>
    <center>
      <img src="img/leagueofnations.png" class="img1">
    </center>
       <p class="titulo1">Origem: </p>
      <center>
        <p class="texto1">Criada em 1919 pelo Tratado de Versalhes, a Liga das Nações foi a primeira organização internacional voltada à segurança coletiva, prevenção de guerras e cooperação técnica (saúde, refugiados, drogas, economia). Tinha Assembleia, Conselho, Secretariado, Corte de Justiça Internacional e agências especializadas. O Brasil participou ativamente no início, mas saiu em 1926 após não conseguir assento permanente no Conselho.</p>
      </center>

      
      <p class="titulo1">Objetivo: </p>
    <center>
      <p class="texto1">A primeira reunião formal que aconteceu no pós-guerra foi utilizada como meio para se discutir diversos assuntos, entre os quais estava a criação da Liga das Nações. Essa reunião foi a Conferência de Paz de Paris, que aconteceu na capital francesa entre 18 de janeiro de 1919 e 20 de janeiro de 1920. Durante a conferência, o então presidente dos Estados Unidos, Woodrow Wilson (1856-1924), foi um dos principais entusiastas da formação de uma entidade internacional para a garantia da paz entre as nações.
A defesa de Woodrow Wilson foi feita durante seu discurso conhecido como “14 Pontos para a Paz”. Não obstante a necessidade demonstrada pelo presidente norte-americano, seu país acabou não ingressando na Liga das Nações por questões relacionadas com a manutenção da soberania nacional. Antes da efetivação da Sociedade das Nações, vários comitês de reunião foram formados durante a Conferência de Paz de Paris para a discussão aprofundada a respeito do tema."
Veja mais sobre "Liga das Nações (Sociedade das Nações)"
    </center>
    
      <p class="titulo1">Estrutura: </p>
      <center>
        <p class="texto1"> A estrutura da Liga das Nações, ou Sociedade das Nações, era composta por uma Assembleia Geral, um Conselho Executivo e um Secretariado permanente. A Assembleia reunia todos os países-membros anualmente, o Conselho era composto por membros permanentes e não permanentes, e o Secretariado era chefiado por um Secretário-Geral, com sede em Genebra. A Liga não possuía uma força militar própria, dependendo da sua capacidade de impor sanções e da vontade dos Estados-membros para a sua implementação
    </center>
      <p class="titulo2">Êxitos e fracassos: </p>
      <center>
        <p class="texto2">A Liga teve alguns sucessos, como resolver disputas territoriais (Ilhas Åland, Alta Silésia, Mosul, Letícia), auxiliar milhões de refugiados com o Passaporte Nansen e avançar em saúde pública (vacinação, combate a epidemias). Porém, falhou diante das agressões dos anos 1930 (Japão na Manchúria, Itália na Etiópia, expansão nazista). A ausência dos EUA, a regra de unanimidade e a falta de meios militares minaram sua eficácia.</p>
      </center>
        <p class="titulo2">Legado e impacto: </p>
      <center>
        <p class="texto2">Extinta em 1946, a Liga transferiu parte de suas funções para a ONU, deixando contribuições como a Corte Internacional de Justiça, a OMS e a continuidade da OIT. Seu legado está em mostrar a importância da participação das grandes potências, de mecanismos coercitivos reais e da cooperação internacional em temas técnicos e humanitários.</p>
      </center>
    </div>
    <footer class="rodape">
      <p>&copy; 2025 Todos os direitos reservados.</p>
      <p>Desenvolvido por:</p>
      <p>
        Eron Eloterio de Mello,
        Heitor Augusto Roque Paulista,
        Lucas Carneiro Jacomelli,
        Rafael Zella de Souza e
        Vinicios de Faria.
      </p>
    </footer>
  </body>
</html>