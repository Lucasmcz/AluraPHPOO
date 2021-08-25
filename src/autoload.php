<?php
spl_autoload_register(function(string $nomeCompletoDaClasse)
{
  $caminhaArquivo = str_replace('Alura\\Banco', 'src',$nomeCompletoDaClasse);
  $caminhaArquivo = str_replace('\\',DIRECTORY_SEPARATOR,$caminhaArquivo);
  $caminhaArquivo .= '.php';

if(file_exists($caminhaArquivo))
{
  require_once $caminhaArquivo;
}
});


 ?>
