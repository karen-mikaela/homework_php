Escreva uma classe em PHP responsável por receber um texto ou conjunto de textos via POST e retornar uma estrutura JSON com:
1. Numero de palavras total
2. Array com cada uma das palavras no índice e número de ocorrências dela no valor. Ignore acentuações.


Requisitos:
A classe deve conter pelo menos uma função recursiva.
Chame seu arquivo de conta_palavras.php

Detalhes:
Nome do parâmetro POST: "textos"
Organize a resposta JSON da maneira que achar conveniente

Exemplo de chamada:
POST:
http://localhost/conta_palavras.php
textos[]="meu nome é João"
textos[]="meu nome é Maria"
