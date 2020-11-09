<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Ola Mundo</title>
<style>body{font-family:Arial;text-align:center;padding:50px;background:#f0f0f0}h1{color:#333}.info{background:white;padding:20px;border-radius:8px;display:inline-block}</style>
</head>
<body><div class="info">
<h1><?php echo "Ola, Mundo!"; ?></h1>
<p>PHP: <?php echo phpversion(); ?></p>
<p>Server: <?php echo $_SERVER["SERVER_SOFTWARE"] ?? "N/A"; ?></p>
<p>Data: <?php echo date("d/m/Y H:i:s"); ?></p>
</div></body></html>
