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
require_once("areas.php");

print("Na Era dos Antigos, o mundo era informe, envolto em névoa.\n"); 
sleep(2); 
print("Uma terra de penhascos cinzentos, Árvores Arcanas e Dragões Eternos.\n"); 
sleep(2); 
print("Mas então surgiu o Fogo e, com o fogo, veio a disparidade.\n"); 
sleep(3); 
print("Calor e frio, vida e morte, e, é claro, luz e trevas.\n"); 
sleep(2); 
print("Então, das trevas, Eles vieram e encontraram as Almas dos Lordes dentro da chama.\n"); 
sleep(4); 
print("Nito, o Primeiro dos Mortos, A Bruxa de Izalith e suas Filhas do Caos, Gwyn, o Senhor da Luz Solar, e seus fiéis cavaleiros.\n"); 
sleep(4); 
print("E o Furtivo Pigmeu, tão facilmente esquecido.\n"); 
sleep(3); 
print("Com a força dos Lordes, eles desafiaram os Dragões.\n"); 
sleep(3); 
print("Os poderosos raios de Gwyn despedaçaram suas escamas de pedra.\n"); 
sleep(3); 
print("As Bruxas teceram grandes tempestades de fogo.\n"); 
sleep(3); 
print("Nito liberou um miasma de morte e doença.\n"); 
sleep(3); 
print("E Seath, o Descamado, traiu os seus, e os Dragões não existiram mais.\n"); 
sleep(4); 
print("Assim começou a Era do Fogo.\n"); 
sleep(2); 
print("Mas logo as chamas irão se apagar e apenas a Escuridão permanecerá.\n"); 
sleep(4); 
print("Mesmo agora restam apenas brasas, e o homem já não vê luz, apenas noites infinitas.\n"); 
sleep(4); 
print("E entre os vivos são vistos portadores do amaldiçoado Sinal Negro.\n"); 
sleep(3); 
print("Sim, de fato. O Sinal Negro marca os Mortos-vivos.\n"); 
sleep(3); 
print("E nesta terra, os Mortos-vivos são aprisionados e levados ao norte, onde são trancafiados, aguardando o fim do mundo...\n"); 
sleep(5); 
print("Este é o seu destino.\n"); 
sleep(3); 
print("Porém, nas antigas lendas está escrito que, um dia, um morto-vivo será escolhido para deixar o asilo dos mortos-vivos, em peregrinação, para a terra dos antigos lordes, Lordran.\n"); 
sleep(6);

print("No meio do Asilo dos mortos vivos do Oeste, reside uma dessas criaturas.\n");
sleep(4);
print("A criatura se levanta de seu sono em sua cela, observando a mesma sala escura e úmida de sempre, nem mesmo o musgo parece crescer mais.\n");
sleep(6);
print("Então ela se movimenta ao pequeno espelho da cela, o que ela ve?\n");
sleep(3);
print("\n1.Um humano simples e ordinário, mediano em tudo que faz.\n");
sleep(3);
print("2.Um elfo de orelhas pontudas e um rosto chique, com um bom raciocinio e coordenação motora.\n");
sleep(5);
print("3.Um anão que mal alcança o espelho, usando sua força para pular e conseguir se ver suas cicatrizes.\n");

$personagem = new Personagem();

do {
    $escolha = readline("Escolha:");

    if($escolha == 1){
        $personagem->setBonusFor(1);
        $personagem->setBonusDex(1);
        $personagem->setBonusCon(1);
        $personagem->setBonusInt(1);
        $personagem->setBonusSab(1);
        $personagem->setBonusCar(1);

        print("O humano então passa sua mão sobre seu rosto, limpando um pouco de suor que suja seu rosto, vindo da cela quente que dormira.\n");
        sleep(5);
        print("O que o humano faz?\n");
    }elseif ($escolha == 2) {
        $personagem->setBonusDex(2);
        $personagem->setBonusInt(1);

        print("O elfo gentilmente passa sua mão sobre os contornos de seu rosto, se sentido orgulhoso de sua feição nobre.\n");
        sleep(4);
        print("O que o elfo faz?\n");
    }elseif($escolha == 3){
        $personagem->setBonusCon(2);

        print("O anão faz mais um salto para se observar e ajeita a sua barba ao aterrissar novamente.\n");
        sleep(4);
        print("O que o anão faz?\n");
    }
} while ($escolha > 3 && $escolha < 1);

$personagem->setVidaMax(($personagem->getBonusCon() + 1) + 7);

sleep(2);
print("1.Ele se deita no chão e usa seus braços para fazer flexões, como um bom lutador faria.\n");
sleep(3);
print("2.Ele começa a procurar cada canto de sua cela para ver se encontra alguma maneira de sair que não tinha visto antes\n");
sleep(4);
print("3.Ele pega seu artefato sagrado e se ajoelha, começando a rezar.\n");
sleep(3);

do {
    $escolha = readline("Escolha:");

    if($escolha == 1){
        array_push($personagem->itens, $espada);

        print("Depois de um tempo, coberto de suor ele para e se deita num pequeno pedaço de couro espalhado que mal pode ser chamado de cama");
        sleep(5);
    }elseif ($escolha == 2) {
        array_push($personagem->itens, $adaga);

        print("A mesma coisa de sempre acontece, nada, nenhuma saida.\n");
        sleep(4);
    }elseif($escolha == 3){
        array_push($personagem->itens, $cajado_simples);


        print("Depois de poucos minutos de concentração, seu rito matituno foi feito.\n");
        sleep(4);
    }
} while ($escolha > 3 && $escolha < 1);

print("Depois de um tempo de descanso, esperando o tempo passar até você enlouquecer, você ouve um barulho na janela no teto da sua cela.\n");
sleep(6);
print("Olhando para cima, você vê um soldado olhando para você.\n");
sleep(4);
print("O soldado então joga uma chave pelo buraco da janela de sua cela para você.\n");
sleep(4);
print("1.Tentar pegar a chave enquanto cai[Teste de Destreza].\n");
sleep(3);
print("2.Esperar a chave cair e pegar ela.");
sleep(3);

do {
    $escolha = readline("Escolha:");
} while ($escolha != 1 and $escolha != 2);

if($escolha == 1){
    $resultado = rand(1, 20);

    if($resultado == 1){
        print("Você tirou 1.\n");
        sleep(2);
        print("A chave cai na sua cabeça, fazendo um barulho cômico.\n");
        sleep(3);
        print("Você se abaixa e pega a chave, quando olha para cima de novo, o guarda some.\n");
    }else{
        $resultado_total = $resultado + $personagem->getBonusDex();
        if($resultado_total >= 10){
            print("Você tirou $resultado_total.\n");
            sleep(3);
            print("Você pega a chave rapidamente, amortecendo sua queda na sua mão gentilmente");
            sleep(3);
            print("Você vê o guarda saindo da sua vista antes que você pudesse fazer qualquer questionamento.\n");
        }else{
            print("Você tirou $resultado_total.");
            sleep(2);
            print("A chave cai no chão.\n");
            sleep(2);
            print("Você se abaixa e pega a chave, quando olha para cima de novo, o guarda some.\n");
        }
    }
}

array_push($personagem->itens, $chave);

$passou = false;
$abriu = false;

do {
    print("1.Colocar a chave na porta.\n");
    print("2.Abrir a porta.\n");
    $escolha = readline("Escolha");

    if($escolha == 1){
        $abriu = true;
        print("A chave gira com um grunhido fino da fechadura ecoando pelos corredores do asilo.\n");
        sleep(4);

        $i = 0;

        foreach ($personagem->itens as $item) {
            if($item->getNome() == "Chave"){
                array_splice($personagem->itens, $i);
                break;
            }
            $i++;
        }
    }

    if($escolha == 2){
        if($abriu == false){
            print("A porta não abre, ela está trancada.");
            sleep(3);
        }else{
            print("Você abre a porta para o lado de fora da sua cela.");
            sleep(3);
            $passou = true;
        }
    }
} while ($passou == false);

print("O único barulho que ecoa é o ranger da porta de ferro enfurrajada.\n");
sleep(4);
print("Apoiado numa parede, você vê um morto-vivo que ficou vazio, sua pele praticamente grudada ao osso e com olhos mortos.\n");
sleep(5);
print("O morto-vivo vazio se vira lentamente para você, segurando uma espada quebrada, e começa a mancar até você\n");
sleep(5);

$personagem->vida = $personagem->getVidaMax();
$morto_vivo->vida = $morto_vivo->getVidaMax();
$distancia = 1;
$personagem->item_equipado = new Item("nada", 0, 0, 0, 0, "nada");

while($personagem->vida > 0 and $morto_vivo->vida > 0){
    print("É o seu turno.");
    $atacou = false;
    $moveu = false;

    while($atacou == false){
        print("\nSua Vida: $personagem->vida \n");
        print("Vida inimigo: $morto_vivo->vida \n");
        print("Distancia: $distancia \n");
        print("1.Atacar(acaba o turno)\n");
        print("2.Avançar(somente uma vez)\n");
        print("3.Recuar(somente uma vez)\n");
        print("4.Equipar item\n");
        $escolha = readline("Escolha:");

        switch ($escolha) {
            case 1:
                $atacou = true;
                $morto_vivo->vida = $morto_vivo->vida - $personagem->atacar($distancia, $personagem->getBonusFor(), $personagem->item_equipado->getDano(), $morto_vivo->vida, $morto_vivo->getCA());
            break;

            case 2:
                if($moveu == false){
                    $distancia = $distancia - $personagem->getBonusDex() + 1;
                    $moveu = true;
                }else{
                    print("\nJá se mexeu\n");
                }
            break;

            case 3:
                if($moveu == false){
                    $distancia = $distancia + $personagem->getBonusDex() + 1;
                    $moveu = true;
                    if($distancia < 0){
                        $distancia = 0;
                    }
                }else{
                    print("\nJá se mexeu\n");
                }
            break;

            case 4:
                $personagem->listarItens();
                $escolha = readline("\nEscolha o item para equipar: ");
                $personagem->item_equipado = $personagem->getItens()[$escolha];
            break;

            default:
                print("\nInsira novamente.\n");
            break;
        }//fim case
    }//fim while jogador

    if($morto_vivo->vida <= 0){
        print("O morto-vivo foi derrotado");
        break;
    }

    print("\nTurno do morto-vivo.\n");
    sleep(3);

    if($distancia > 0){
        $distancia--;
        if($distancia > 1){
            print("O morto-vivo está muito longe para atacar\n");
            $distancia--;
            sleep(3);
        }else{
            $resultado = rand(1, 20);

            if($resultado > 10 + $personagem->getBonusDex()){
                $personagem->vida--;
                print("Você tomou 1 de dano.\n");
                sleep(3);
            }else{
                print("O morto-vivo errou\n");
                sleep(3);
            }
        }
    }else{
        $resultado = rand(1, 20);

            if($resultado > 10 + $personagem->getBonusDex()){
                $personagem->vida--;
                print("Você tomou 1 de dano.\n");
                sleep(3);
            }else{
                print("O morto-vivo errou\n");
                sleep(3);
            }
    }

    if($personagem->vida <= 0){
        print("Como vc morreu no primeiro bicho prof? KKKKKK");
        die();
    }
}

$personagem->almas = 100;

print("Após essa batalha, você olha para frente e vê que no final do corredor há uma escada.\n");
sleep(4);
print("Escalando ela, você vê o céu por um tempo que nem você sabe mais.\n");
sleep(3);
print("Você se depara com um portão na sua frente, acompanhado de uma pequena fogueira no centro de um gramado\n");
sleep(5);
print("-Ei... Você.\n");
sleep(3);
print("Você ouve uma voz te chamando ao lado, olhando, você vê o cavaleiro que te salvou da sua cela, ensanguentado enquanto sentava com as costas apoiada na parede.\n");
sleep(5);
print("1.Ignorar \n2.Ouvir\n");

do {
    $escolha = readline("Escolha:");
} while ($escolha == 1 or $escolha == 2);

switch ($escolha) {
    case 1:
        print("-Não... Espera...\n");
        sleep(3);
        print("O soldado te chama enquanto você anda até o portão que está na sua frente.\n");
    break;
    
    case 2:
        print("Você anda até o soldado e olha para ele, o sangue escorre por debaixo da armadura dele.\n");
        sleep(5);
        print("-Obrigado, morto-vivo, espero que você realmente seja o escolhido.\n");
        sleep(4);
        print("1.Perguntar o que aconteceu.\n2.Perguntar quem ele é.\n");
        do {
            $escolha = readline("Escolha:");
        } while ($escolha != 1 and $escolha != 2);

        switch ($escolha) {
            case 1:
                print("-Eu fui atacado por um Vazio, eu consegui matar ele, mas ele também conseguiu enfiar uma espada em mim.\n");
                sleep(4);
            break;
            
            default:
                print("-Eu sou Oscar, Cavaleiro de Astora.\n");
                sleep(3);
            break;
        }

        print("-Eu tenho algo para você, morto-vivo.\n");
        sleep(3);
        print("O soldado se vira e olha para uma bolsa que ele tem, ele abre ela e pega um pequeno frasco.\n");
        sleep(5);
        print("-Esse é um frasco de Estus, vá na fogueira e descanse enquanto deixa o frasco perto dela.\n");
        sleep(5);
        print("-O frasco vai se encher de um líquido amarelo, isso é a energia do sol, beba caso você se machuque, você irá precisar.\n");
        sleep(5);
        print("O cavaleiro solta um suspiro cansado enquanto olha para cima.\n");
        sleep(4);
        print("-Eu não tenho muito tempo, pegue esse frasco, e corte minha cabeça, irá te ajudar para soar os Sinos do Despertar.\n");
        array_push($personagem->itens, $frasco_estus);
        sleep(5);
        print("-Se eu morrer assim, irá demorar até eu perder a minha humanidade e virar um vazio, eu não quero te machucar.\n");
        sleep(4);
        print("1.Matar o Oscar[Teste de força]\n2.Deixar ele vivo.");
        do {
            $escolha = readline("Escolha:");
        } while ($escolha == 1 or $escolha == 2);

        switch ($escolha) {
            case 1:
                $resultado = rand(1, 20) + $personagem->getBonusFor();

                print("Você tirou $resultado");

                if($resultado > 10){
                    print("Você consegue decepar o pescoço de Oscar com um golpe simples e sem dor, sua cabeça deixando uma pequena poça de sangue no chão\n");
                    sleep(6);
                }else{
                    print("Você dá o primeiro golpe, e sua cabeça não cai, Oscar solta um grito enquanto você continua a bater no seu pescoço, até ele finalmente cair\n");
                    sleep(6);
                }
            break;
            
            case 2:
                print("-Não... Volte...\n");
                sleep(3);
                print("O soldado te chama enquanto você anda até o portão que está na sua frente.\n");
                sleep(4);
            break;

            print("Você anda até a fogueira e descansa enquanto deixa o frasco se encher, após meia hora, ele se enche por completo.\n");
        }

    break;
}

print("O portão solta um grunhido enferrujado enquanto você usa toda a sua força para abrir ele.\n");
sleep(4);
print("Você se depara com um pequeno pátio na sua frente, há também uma saída para o mundo de fora, que mostra um precipício\n");
sleep(5);
print("Então, enquanto você vai até a saída, o teto quebra e um demônio gigantesco cai na sua frente.\n");
sleep(4);

$estus = 3;

while($personagem->vida > 0 and $demonio->vida > 0){
    print("É o seu turno.");
    $atacou = false;
    $moveu = false;

    while($atacou == false){
        print("\nSua Vida: $personagem->vida \n");
        print("Vida inimigo: $demonio->vida \n");
        print("Distancia: $distancia \n");
        print("1.Atacar(acaba o turno)\n");
        print("2.Avançar(somente uma vez)\n");
        print("3.Recuar(somente uma vez)\n");
        print("4.Equipar item/usar\n");
        $escolha = readline("Escolha:");

        switch ($escolha) {
            case 1:
                $atacou = true;
                $demonio->vida = $demonio->vida - $personagem->atacar($distancia, $personagem->getBonusFor(), $personagem->item_equipado->getDano(), $demonio->vida, $demonio->getCA());
            break;

            case 2:
                if($moveu == false){
                    $distancia = $distancia - $personagem->getBonusDex() + 1;
                    $moveu = true;
                }else{
                    print("\nJá se mexeu\n");
                }
            break;

            case 3:
                if($moveu == false){
                    $distancia = $distancia + $personagem->getBonusDex() + 1;
                    $moveu = true;
                    if($distancia < 0){
                        $distancia = 0;
                    }
                }else{
                    print("\nJá se mexeu\n");
                }
            break;

            case 4:
                $personagem->listarItens();
                $escolha = readline("\nEscolha o item para equipar: ");
                if($personagem->getItens()[$escolha]->getNome() == "Frasco de Estus"){
                    if($estus > 0){
                        $personagem->vida = $personagem->getVida();
                        print("Você usou o Frasco de Estus, resta mais $estus usos");
                    }else{
                        print("Não resta mais Estus.");
                    }
                }else{
                    $personagem->item_equipado = $personagem->getItens()[$escolha];
                }
            break;

            default:
                print("\nInsira novamente.\n");
            break;
        }//fim case
    }//fim while jogador

    if($demonio->vida <= 0){
        print("VITÓRIA ALCANÇADA");
        break;
    }

    print("\nTurno do Demonio.\n");
    sleep(3);

    if($distancia > 0){
        $distancia--;
        if($distancia > 1){
            print("O Demonio está muito longe para atacar\n");
            $distancia--;
            sleep(3);
        }else{
            $resultado = rand(1, 20);

            if($resultado > 10 + $personagem->getBonusDex()){
                $resultado = rand(1,4) + 2;
                $personagem->vida = $personagem->vida - $resultado;
            }else{
                print("O Demonio errou\n");
                sleep(3);
            }
        }
    }else{
        $resultado = rand(1, 20);

        if($resultado > 10 + $personagem->getBonusDex()){
            $resultado = rand(1,4) + 2;
            $personagem->vida = $personagem->vida - $resultado;
        }else{
            print("O Demonio errou\n");
            sleep(3);
        }
    }

    if($personagem->vida <= 0){
        print("VOCÊ MORREU");
        die();
    }
}

$personagem->almas = $personagem->almas + 1200;

print("Após essa batalha dura, você olha para o corpo do demônio e para a saída novamente\n");
sleep(4);
print("Saindo com mais cautela, Você pisa na beira do precipício, conseguindo ver o reino de Lordran na sua frente.\n");
sleep(5);
print("Após alguns segundos de espera, um corvo gigante chega voando e captura você em suas garras.\n");
sleep(4);
print("Cegado pelas penas do corvo e por suas garras, você é levado para algum lugar.\n");
sleep(3);
print("Finalmente, ele te larga no que parece ser um centro de um templo onde há uma fogueira.\n");
sleep(4);
print("Boas vindas a Lordran, morto-vivo, não ouse ficar vazio.\n");
sleep(3);

$inimigos_derrotados = array();

$personagem->nivel = 1;

function descansar($almas, $personagem, $estus){
    $escolha = "sla";

    while($escolha != 0){
        print("1.Subir de nível\n");
        print("2.Reabastecer Estus\n");
        print("0.Levantar\n");
        $escolha = readline("Escolha:");

        switch ($escolha) {
            case 1:
                if($almas > $personagem->nivel * 100 + 1000){
                    $custo = $personagem->nivel * 100 + 1000;
                    print("Almas: $almas\n");
                    print("Custo: $custo");
                    print("1.Força: $personagem->getBonusFor()\n");
                    print("2.Destreza: $personagem->getBonusDex()\n");
                    print("3.Constituiçâo: $personagem->getBonusCon()\n");
                    print("4.Inteligencia: $personagem->getBonusInt()\n");
                    print("5.Sabedoria: $personagem->getBonusSab()\n");
                    print("6.Carisma: $personagem->getBonusCar\n");
                    $escolha = readline("Escolha:");

                    switch ($escolha) {
                        case 1:
                            $personagem->setBonusFor($personagem->getBonusFor() + 1);
                            $almas = $almas - ($personagem->nivel * 100 + 1000);
                            $personagem->nivel++;
                        break;

                        case 2:
                            $personagem->setBonusDex($personagem->getBonusDex() + 1);
                            $almas = $almas - ($personagem->nivel * 100 + 1000);
                            $personagem->nivel++;
                        break;

                        case 3:
                            $personagem->setBonusCon($personagem->getBonusCon() + 1);
                            $almas = $almas - ($personagem->nivel * 100 + 1000);
                            $personagem->nivel++;
                        break;

                        case 4:
                            $personagem->setBonusInt($personagem->getBonusInt() + 1);
                            $almas = $almas - ($personagem->nivel * 100 + 1000);
                            $personagem->nivel++;
                        break;

                        case 5:
                            $personagem->setBonusSab($personagem->getBonusSab() + 1);
                            $almas = $almas - ($personagem->nivel * 100 + 1000);
                            $personagem->nivel++;
                        break;

                        case 6:
                            $personagem->setBonusCar($personagem->getBonusCar() + 1);
                            $almas = $almas - ($personagem->nivel * 100 + 1000);
                            $personagem->nivel++;
                        break;
                        
                    }
                }
            break;
            
            case 2:
                $estus = 3;
                print("Você descansa enquanto espera o frasco encher.");
                sleep(3);
            break;
        }
    }
}

while(true){

}