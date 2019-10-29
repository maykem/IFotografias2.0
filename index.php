<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="" content="">
    <link href="css/style.css" rel="stylesheet">
    <title>Incrições - IFotografias</title>
    
</head>
    <body>
    
      <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action=""> 
          <h1>Login</h1> 
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@gmail.com"/>
          </p>
          
          <p> 
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" /> 
          </p>
          
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
          
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
          
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>

      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="tratar.php"> 
          <h1>Cadastro</h1> 
          
          <p> 
            <label for="nome_completo">Seu nome</label>
            <input id="nome_completo" name="nome_completo" required="required" type="text" placeholder="Luiz Augusto" />
          </p>
          
          <p> 
            <label for="e-mail">Seu e-mail</label>
            <input id="email" name="email" required="required" type="email" placeholder="contato@gmail.com"/> 
          </p>
          
          <p> 
            <label for="senha">Sua senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="1234"/>
          </p>
          
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
          
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div> 
        
        
    </body>
</html>