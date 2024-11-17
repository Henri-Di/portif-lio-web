<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="icon" href="../../assets/images/icon.png" type="image/png">
    <title>M&D - Novidades</title>
    <!-- Meta Tags: Informações básicas da página -->
    <!-- Define o conjunto de caracteres da página para suporte a caracteres especiais -->
    <meta charset="UTF-8">
    <!-- Define a compatibilidade com navegadores mais antigos como Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Define o viewport para garantir a responsividade em diferentes dispositivos -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bibliotecas de Estilo e Fontes Externas -->
    <!-- Font Awesome: Biblioteca de ícones para melhorar a interface -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap: Framework CSS para facilitar a criação de layouts responsivos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Google Fonts: Importa fontes personalizadas da biblioteca Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&family=Playwrite+NO:wght@100..400&family=Reddit+Sans+Condensed:wght@200..900&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

    <!-- Estilos Personalizados -->
    <!-- Link para um arquivo CSS próprio da página -->
    <link rel="stylesheet" href="../../assets/css/style-colors-novidades-page.css">

    <!-- Estilo do Loader (CSS) -->
    <style>
        /* Loader CSS: Define o estilo do elemento de carregamento */
        #loader {
            position: fixed; /* Fixa o loader na tela */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999; /* Coloca o loader à frente dos outros elementos */
            background: #fff; /* Fundo branco */
            display: flex; /* Usa Flexbox para centralizar o conteúdo */
            align-items: center; /* Centraliza verticalmente */
            justify-content: center; /* Centraliza horizontalmente */
        }
        .loader-spinner {
            border: 16px solid #f3f3f3; /* Borda cinza para dar contraste */
            border-top: 12px solid; /* Borda superior para a animação */
            border-radius: 50%; /* Forma circular */
            width: 80px; /* Largura do loader */
            height: 80px; /* Altura do loader */
            animation: spin 2s linear infinite, rainbow 4s linear infinite; /* Animações: rotação e mudança de cor */
        }

        /* Animação de rotação do loader */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Animação para criar um efeito de arco-íris no loader */
        @keyframes rainbow {
            0% { border-top-color: #8c1aff; }    
            16% { border-top-color: #7300e6; }   
            33% { border-top-color: #ac00e6; }  
            50% { border-top-color: #9900cc; }  
            66% { border-top-color: #8600b3; }   
            83% { border-top-color: #4b0082; }   
            100% { border-top-color: #8b00ff; }  
        }
    </style>

</header>

<body>
<!-- Loader: Elemento de carregamento exibido até que a página esteja totalmente carregada -->
<div id="loader">
    	<div class="loader-spinner"></div>
    	</div>
		
        <!-- Contêiner principal da página -->
        <div class="container">
            <!-- Título com um link de retorno à página inicial -->
            <h1 onclick="window.location.href='../../index.php';" id="logo-page">M&D</h1>
            
            <!-- Subtítulo com link de retorno à página inicial -->
            <p onclick="window.location.href='../../index.php';" id="sub-logo-page">Matheus Diamantino - Desenvolvedor Web</p>
            <br>

            <!-- Início da linha para a seção sobre o desenvolvedor -->
            <div class="row">
                <!-- Subtítulo da seção sobre o desenvolvedor -->
                <h4>Novidades <i id="sub-icon-title" class="fa fa-star"></i></h4>

                <h1>Em breve as novidades das aplicações web que estão sendo desenvolvidas <i class="fa fa-child"></i></h1>
       
            </div>

        <!-- JavaScript para gerenciar o loader -->
        <script>
        // Executa quando o DOM estiver carregado
        document.addEventListener("DOMContentLoaded", function() {
            // Após todos os elementos da página estarem carregados
            window.onload = function() {
                // Definir um tempo para o loader desaparecer, mesmo que a página esteja carregada
                setTimeout(function() {
                    var loader = document.getElementById("loader");
                    loader.style.display = "none"; // Esconde o loader
                }, 500); 
            }
        });
    </script>

            <!-- Importação da biblioteca jQuery versão 3.5.1 -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <!-- Importação da biblioteca jQuery versão 3.7.1 -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

            <!-- Importação do Popper JS, necessário para alguns elementos do Bootstrap -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

            <!-- Link para a biblioteca Font Awesome -->
            <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

            <!-- Link para as bibliotecas do Bootstrap, versões 4.5.2 e 3.4.1 -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>