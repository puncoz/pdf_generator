<?php

require_once "vendor/autoload.php";

// disable DOMPDF's internal autoloader since we are using Composer autoload
define('DOMPDF_ENABLE_AUTOLOAD', false);

// include DOMPDF's default configuration
require_once 'vendor/dompdf/dompdf/dompdf_config.inc.php';

$html =<<<html

<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
                <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,600italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">
                <style>
                        @page { margin: 50px 46px 40px; }
                    #footer { position: fixed; text-align: center; bottom: 30px; font: italic 500 15px "Source Sans Pro"; }
                    #footer .page:after { content: counter(page, decimal); }
                        .title{
                                margin: -10px 0 0 0;
                                font: italic 500 23px "Source Sans Pro";
                                border: 1px solid black;
                                padding: 0px 0px 3px 10px;
                        }
                        table{
                                border-collapse:collapse;
                                border-bottom: 1px solid black;
                                width:100%;
                        }
                        td { 
                                border:thin solid black; 
                                padding: 3px 3px 3px 5px;
                                font: 14px "Source Sans Pro";
                        } 
                        .tabniv2{
                                margin: 0px 0px 0px 0px;
                        }
                        .tabniv3{
                                margin: 0px 0px 15px 23px;
                                width: 694px;
                        }
                        .tabniv4{
                                margin: 0px 0px 15px 45px;
                                width: 685px;
                        }
                        .niveau1{
                                margin: 25px 0 0 0;
                                font: 25px "Source Sans Pro";
                                border-bottom: 1px solid black;
                        }
                        .niveau2{
                                margin: 0 0 20px 0;
                                padding: 20px 0 0 0;
                                font: 20px "Source Sans Pro";
                                border-bottom: 1px dashed black;
                        }
                        .niveau3{
                                margin: 0 0 0 30px;
                                padding: 0 0 5px 0;
                                font: italic 500 15px "Source Sans Pro";
                        }
                        .niveau4{
                                margin: 0px 0 0 60px;
                                padding: 10px 0 5px 0;
                                font: italic 500 15px "Source Sans Pro";
                        }
                </style>
        </head>

        <body>
                <div id="footer">
                        <p class="page">Résultats scolaires du 1er trimestre pour &lt; Prénom &gt; &lt; Nom &gt; - Page </p>
                </div>
                <div id="content">
                        <p class="title">Résultats scolaires du 1er trimestre pour &lt; Prénom &gt; &lt; Nom &gt;</p>
                        <h1 class="niveau1">Français</h1>
                                <h2 class="niveau2">Langage oral</h2>
                                        <h3 class="niveau3">Échanger, débattre</h3>
                                                <table class="tabniv3">
                                                        <tr><td>Participer aux échanges de manière constructive : apporter des arguments,</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                </table>
                                        <h3 class="niveau3">Raconter, décrire, exposer</h3>
                                                <table class="tabniv3">
                                                        <tr><td>Faire un récit structuré et compréhensible pour un tiers ignorant des faits rapportés ou de l'histoire racontée</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                        <tr><td>Inventer et modifier des histoires</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                        <tr><td>Décrire une image</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                </table>
                                <h2 class="niveau2">Lecture</h2>
                                        <table class="tabniv2">
                                                <tr><td>Participer à un débat sur un texte en confrontant son interprétation à d’autres de manière argumentée.</td><td style="text-align:center; background-color:#ffffbb;" width="60px">B</td></tr>
                                                <tr><td>Utiliser les outils usuels de la classe (manuels, affichages, etc.) pour rechercher une information, surmonter une difficulté.</td><td style="text-align:center; background-color:#ffffbb;" width="60px">B</td></tr>
                                                <tr><td>Effectuer des recherches, avec l’aide de l’adulte, dans des ouvrages documentaires (livres ou produits multimédia).</td><td style="text-align:center; background-color:#ffffbb;" width="60px">B</td></tr>
                                        </table>
                                <h2 class="niveau2">Littérature</h2>
                                        <table class="tabniv2">
                                                <tr><td>Citer de mémoire un court extrait caractéristique.</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                        </table>
                                <h2 class="niveau2">Écriture</h2>
                                        <table class="tabniv2">
                                                <tr><td>En particulier, copier avec soin, en respectant la mise en page, un texte en prose ou poème appris en récitation.</td><td style="text-align:center; background-color:#ffddaa;" width="60px">C</td></tr>
                                        </table>
                                <h2 class="niveau2">Grammaire</h2>
                                        <h3 class="niveau3">Les classes de mots</h3>
                                                <table class="tabniv3">
                                                        <tr><td>Distinguer selon leur nature les pronoms relatifs (qui, que),</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                        <tr><td>Distinguer selon leur nature les adverbes (de lieu, de temps, de manière),</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                        <tr><td>Distinguer selon leur nature les négations.</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                        <tr><td>Distinguer selon leur nature les mots des classes déjà connues, </td><td style="text-align:center; background-color:#ffddaa;" width="60px">C</td></tr>
                                                        <tr><td>Distinguer selon leur nature les pronoms possessifs, démonstratifs, interrogatifs et relatifs,</td><td style="text-align:center; background-color:#ffbbaa;" width="60px">D</td></tr>
                                                        <tr><td>Distinguer selon leur nature les mots de liaison (conjonctions de coordination, adverbes ou locutions adverbiales exprimant le temps, le lieu, la cause et la conséquence),</td><td style="text-align:center; background-color:#eeeeee;" width="60px">ABS</td></tr>
                                                        <tr><td>Distinguer selon leur nature les prépositions (lieu, temps).</td><td style="text-align:center; background-color:#ffffbb;" width="60px">B</td></tr>
                                                        <tr><td>Connaître la distinction entre article défini et article indéfini et en comprendre le sens.</td><td style="text-align:center; background-color:#ffffbb;" width="60px">B</td></tr>
                                                        <tr><td>Reconnaître la forme élidée et les formes contractées de l’article défini.</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                </table>
                                <h2 class="niveau2">Orthographe</h2>
                                        <h3 class="niveau3">Orthographe grammaticale</h3>
                                                <table class="tabniv3">
                                                        <tr><td>Écrire sans erreur le pluriel des noms se terminant par -eu, par -eau.</td><td style="text-align:center; background-color:#ffffbb;" width="60px">B</td></tr>
                                                        <tr><td>Le pluriel des noms en -au, -ail est en cours d’acquisition.</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                        <tr><td>Écrire sans erreur les formes des verbes étudiés aux temps étudiés, dont les verbes du premier groupe en -cer, - ger, - guer.</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                        <tr><td>Appliquer la règle de l’accord du verbe avec son sujet, y compris pour les verbes à un temps composé, et pour les sujets inversés.</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                </table>
                        <h1 class="niveau1">Mathématiques</h1>
                                <h2 class="niveau2">Nombres et calcul</h2>
                                        <h3 class="niveau3">Calcul sur des nombres entiers</h3>
                                                <h3 class="niveau4">Calculer mentalement</h3>
                                                        <table class="tabniv4">
                                                                <tr><td>Estimer mentalement un ordre de grandeur du résultat.</td><td style="text-align:center; background-color:#ffffbb;" width="60px">B</td></tr>
                                                                <tr><td>Consolider les connaissances et capacités en calcul mental sur les nombres entiers et décimaux.</td><td style="text-align:center; background-color:#ffddaa;" width="60px">C</td></tr>
                                                                <tr><td>Diviser un nombre entier ou décimal par 10, 100, 1 000.</td><td style="text-align:center; background-color:#ffbbaa;" width="60px">D</td></tr>
                                                        </table>
                                                <h3 class="niveau4">Effectuer un calcul posé</h3>
                                                        <table class="tabniv4">
                                                                <tr><td>Addition, soustraction et multiplication.</td><td style="text-align:center; background-color:#eeeeee;" width="60px">ABS</td></tr>
                                                                <tr><td>Connaître une technique opératoire de la division et la mettre en œuvre avec un diviseur à un chiffre.</td><td style="text-align:center; background-color:#ffbbaa;" width="60px">D</td></tr>
                                                                <tr><td>Utiliser les touches des opérations de la calculatrice.</td><td style="text-align:center; background-color:#ffddaa;" width="60px">C</td></tr>
                                                        </table>
                                <h2 class="niveau2">Grandeurs et mesures</h2>
                                        <h3 class="niveau3">Problèmes</h3>
                                                <table class="tabniv3">
                                                        <tr><td>Résoudre des problèmes dont la résolution implique simultanément des unités différentes de mesure.</td><td style="text-align:center; background-color:#eeffcc;" width="60px">A</td></tr>
                                                </table>
                </div>
        </body>
</html>
html;


$dompdf = new DOMPDF();
$dompdf->set_paper("a4");
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf", array('Attachment' => 0));

?>