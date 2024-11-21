<?php

require_once("model/Equipamento.php");
require_once("model/Inimigo.php");
require_once("model/Inimigos.php");
require_once("model/Item.php");
require_once("model/ItensMagicos.php");
require_once("model/Magico.php");
require_once("model/Material.php");
require_once("model/Personagem.php");
require_once("inimigos.php");
require_once("itens.php");
require_once("index.php");

function TemploDoFogo($almas, $personagem, $estus){
    print("Você se depara com um homem sentado em um bloco de pedra do templo.\n");
    sleep(4);
    print("1.Conversar com o homem.\n2.Seguir para o Burgo dos Mortos-Vivos.\n3.Descansar na fogueira\n");
    do {
        $escolha = readline("Escolha:");
    } while ($escolha > 3 and $escolha < 1);

    switch ($escolha) {
        case 1:
            print("Você se aproxima do homem, ele está usando uma cota de malha enquanto senta no bloco de pedra com as costas para a frente\n");
            sleep(5);
            print("-Ah, mais um morto-vivo, veio soar o Sino do Despertar?\n");
            sleep(3);
            print("1.Mentir[Teste de Carisma]\n2.Falar a verdade.\n");
            $escolha = readline("Escolha:");

            switch ($escolha) {
                case 1:
                    # code...
                break;
                
                default:
                    # code...
                break;
            }
        break;

        case 2:
            //faz depois
        break;

        case 3:
            descansar($almas, $personagem, $estus);
        break;
    }
}