
5. Segurança
Você está desenvolvendo um sistema de autenticação para uma aplicação web em PHP.
Explique as melhores práticas de segurança que você implementaria para garantir a proteção
contra ataques comuns, como injeção de SQL, Cross-Site Scripting (XSS) e Cross-Site Request
Forgery (CSRF). Forneça exemplos específicos de como você abordaria cada uma dessas
preocupações de segurança em seu código?

injeção de SQL
Filtrar entrada de dados
exemplo
<?php
$stmt = $mysqli->prepare("SELECT ID,LOGIN, NOME FROM USUARIO WHERE EMAIL = ?");
$stmt->bind_param('s', $email);
$stm->execute();
?>

Cross-Site
Pode ser usada a function htmlentities() e htmlspecialchars(), tambem pode ser usada algumas bibliotecas de mercado que torna o texto de entrada mais seguro,
manter o php sempre atualizado e suas bliblotecas, sempre vaildar as entras. 

Cross-Site Request
Forgery (CSRF)
Criar um token aleatorios para cada chamada
exemplo
<?php
$_SESSION['token'] = bin2hex(random_bytes(16)); // 1bf3dea9fbe265e40d3f9595f2239103

//    <input type="hidden" name="_token" value="{{token}}" />

if ($_POST['_token'] !== $_SESSION['token']) {
    die("Token CSRF inválido!");
}
?>
