<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon"type="imagex/png" href="img/favicon.ico"> 
    <title>Loucos Anos 20</title>
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
        left:9em;
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
      <h1 class="titulo">Os Loucos Anos 20</h1>
    </center>
    </div>
<?php
  include_once('menu.php');
?>
    <center>
      <img src="img/anos20.jpg" class="img1">
    </center>
    <div class="texto">
      <p class="titulo1">Crescimento econômico e expansão tecnológica: </p>
      <center>
        <p class="texto1">A década de 1920 foi marcada por um período de prosperidade sem precedentes nos países ocidentais, especialmente nos Estados Unidos e Europa Ocidental. A disseminação da eletricidade nas residências saltou de 12 % em 1916 para 63 % em 1927, alavancando a produção industrial e o consumo de bens como eletrodomésticos, automóveis e rádios. A indústria automobilística prosperou com a adoção da linha de montagem por Henry Ford, tornando o carro acessível à classe média e impulsionando infraestrutura como estradas, postos de combustível e expansão suburbana. Esse ambiente favoreceu o surgimento de uma cultura massificada de consumo, alimentada por publicidade, financiamentos a crédito e entretenimento popular em rádios, cinemas e revistas.</p>
      </center>
      <p class="titulo2">Renovação cultural e “Jazz Age”: </p>
      <center>
        <p class="texto2">O espírito dos anos 20 foi profundamente cultural. Nos EUA, o Jazz Age trouxe a explosão do jazz — uma música nascida nas comunidades afro-americanas — que rapidamente dominou os espaços urbanos, inspirou novas danças como Charleston e virou símbolo de rebeldia e libertação juvenil. Ao mesmo tempo, movimentos como o Harlem Renaissance alçaram vozes negras na arte, literatura e música, focando na identidade afro-americana e em narrativas até então marginalizadas. Na Europa, países como a França viveram as chamadas “Années folles”, com explosões artísticas nas artes plásticas, moda (como o estilo garçonne de Chanel) e surgimento do Art Déco, enquanto na Alemanha da República de Weimar, Berlim fervilhava com cabarés, teatro de rua e um clima cultural moderno e desafiador das tradições sociais.</p>
      </center>
        <p class="titulo2">Mudanças sociais e tensões culturais: </p>
      <center>
        <p class="texto2">Esse período também foi de grandes mudanças e conflitos. No mundo ocidental, houve uma intensa urbanização e adoção de novos costumes — mulheres começaram a usar cortes curtos, saias mais curtas e desafiaram normas tradicionais, apontadas como “flappers”. Porém, esse clima de inovação conviveu com resistência conservadora: nos EUA, houve leis de imigração restritivas (como o National Origins Act de 1924), ressurgimento da Ku Klux Klan e tensões raciais marcantes. Esse choque cultural refletia uma sociedade dividida entre a modernidade urbana e valores tradicionais, entre a liberdade individual e o medo do diferente.</p>
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