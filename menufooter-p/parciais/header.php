<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sua página</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<header>
    <nav class="navbar">

    <div class="logo"> <a href="/">MinhaMarca</a></div>
    <div class="menu-toggle" id="menu-toggle">&#9776;</div>
    
    <ul class="nav-list" id="nav-list">

    <li><a href="/manufooter-p/">Início</a></li>
    <li><a href="/manufooter-p/sobre.php">Sobre</a></li>
    <li><a href="/manufooter-p/servicos.php">Serviços</a></li>
    <li><a href="/manufooter-p/contato.php">Contato</a></li>

    </ul>

    </nav>
</header>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const toggle = document.getElementById('menu-toggle');
            const navlist = document.getElementById('nav-list');

            toggle.addEventListener('click', () => {
                navlist.classList.toggle('active');
            });

            // Fecha o menu ao clicar em um item

            const navLinks = navList.querySelectorAll('a');
            navLinks.foreach(link => {
                link.addEventListener('click', () =>{
                    navList.classList.remove('active');
                });
            });
        });
    </script>
    
</body>
</html>