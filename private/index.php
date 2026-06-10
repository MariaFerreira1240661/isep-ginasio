<?php

// --------------------------------------------------------------------
// SEGURANÇA: Impede que o utilizador aceda diretamente a este script.
// Este ficheiro deve ser acedido apenas através de submissão de formulário (POST).
// Se for acedido diretamente (por URL), será redirecionado para o login.
// --------------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
 // Redireciona para o formulário de login (interface pública)
 header('Location: ../public/login.php');
 // Encerra a execução do script imediatamente após o redirecionamento
 return;
} 
// Mostrar os dados recebidos pelo formulário através do método POST
// O nome dos campos (entre aspas) deve ser igual ao atributo "name" no login.php
// --------------------------------------------------------------------
// RECOLHA DE DADOS DO FORMULÁRIO
// --------------------------------------------------------------------
// Verifica se o campo 'text_username' foi enviado via POST.
// Se sim, guarda-o na variável $username. Caso contrário, usa string vazia.
$username = isset($_POST['text_username']) ? $_POST['text_username'] : '';
// O mesmo para o campo da password.
$password = isset($_POST['text_password']) ? $_POST['text_password'] : ‘’;
// --------------------------------------------------------------------
// APRESENTAÇÃO DE DADOS ENVIADOS
// --------------------------------------------------------------------
echo "Utilizador: " . $username . "<br>";
echo "Password: " . $password;
// Em produção, **nunca** se deve mostrar a password assim — isto é apenas para testes!
?>


<?php include 'includes/header.php'; ?> 

<?php include 'includes/nav.php'; ?> 

    <div class="container-fluid">
        <div class="row">
           <?php include 'includes/sidebar.php'; ?> 

    <!-- Conteúdo Principal-->
    <main class="col-md-9 col-lg-10 p-4">
        <section>
            <h2>ISEP Ginásio</h2>
            <p>Escolha uma opção no menu lateral para continuar</p>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?> 
    

</body>

</html>