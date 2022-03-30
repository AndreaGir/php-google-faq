
<?php

$arrayGoogle = [
    'parteCgue' => [
        [
            'titolo' => `<h2>Come state implementando la recente  decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h2>`,
            'testo1' => `<p>La recente <a href="https://curia.europa.eu/juris/document/document.jsf?text=&docid=152065&amppageIndex=0&doclang=it&mode=lst&dir=&occ=first&part=1&cid=276332">decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>`,
            'testo2' => 'Michele Papagni',
            'testo3' => 'Michele Papagni',
            'testo4' => 'Michele Papagni',
            'testo5' => 'Michele Papagni',
        ],
    ],
];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tutto{
            width: 70%;
            height: 100%;
            margin: 0 auto;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>


<div class="tutto">

<?php

        foreach($arrayGoogle as $key => $value){

            echo $key;
        }

?>

</div>



    
</body>
</html>