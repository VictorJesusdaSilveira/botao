<?php
require_once("model/Link.php");

print "<link rel='stylesheet' href='botaoImagem.css'>";

function desenhaBotao($array){
    print "<div class='dropdown'>";
    print "<button class='dropbtn'>Botão</button>";
    print "<div class='dropText'>";

    foreach ($array as $a) {
        print("<span><img src='" . $a->getLinkImg() . "' width='20' height='20'>" . $a->getInfo() . "</span>");
    }

    print("</div>");
    print("</div>");
} 


$bandas = array(
    $banda1 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Slipknot_%28logo%29_2.jpg/960px-Slipknot_%28logo%29_2.jpg" , "Slipknot"),
    $banda2 = new Link("https://upload.wikimedia.org/wikipedia/commons/7/7b/Deftones_%28Logo%29.png" , "Deftones"),
    $banda3 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Linkin_Park_logo_2024.svg/960px-Linkin_Park_logo_2024.svg.png" , "Linkin Park")
);

$timesCS = array(
    $time1 = new Link("https://upload.wikimedia.org/wikipedia/pt/f/f9/Furia_Esports_logo.png?_=20221021154128" , "Fúria"),
    $time2 = new Link("https://liquipedia.net/commons/images/thumb/0/09/Team_Vitality_2020_allmode.png/162px-Team_Vitality_2020_allmode.png" , "Vitality"),
    $time3 = new Link("https://upload.wikimedia.org/wikipedia/commons/e/e0/Natus_Vincere_logo.png" , "NAVI")
);


$selecoes = array(
    $selecao1 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Brazilian_Football_Confederation_logo.svg/960px-Brazilian_Football_Confederation_logo.svg.png" , "Brasil"),
    $selecao2 = new Link("https://upload.wikimedia.org/wikipedia/pt/2/25/Logo_Sele%C3%A7%C3%A3o_Francesa_2018.png" , "França"),
    $selecao3 = new Link("https://upload.wikimedia.org/wikipedia/pt/a/a9/DFBEagle.png" , "Alemanha")
);

$jogos = array(
    $jogo1 = new Link("https://sm.ign.com/t/ign_pt/cover/c/clair-obsc/clair-obscur-expedition-33_3pcd.600.jpg" , "Clair Obsucr Expedition 33"),
    $jogo2 = new Link("https://game.capcom.com/residentevil/pc/img/common/logo_ttl_re_requiem.jpg" , "Resident Evil Requiem"),
    $jogo3 = new Link("https://static.wikia.nocookie.net/finalfantasy/images/6/65/Final_Fantasy_XVI_logo.png/revision/latest/scale-to-width-down/268?cb=20201029220246" , "Final Fantasy XVI")


);

desenhaBotao($bandas);
desenhaBotao($timesCS);
desenhaBotao($selecoes);
desenhaBotao($jogos);

?>
