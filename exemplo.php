<?PHP
echo "<hr> <h1>ex1</h1>";

$tabela = [["nome"=>"Alberto", "idade"=>"20" ],
            ["nome"=>"Asdrulbaldo", "idade"=>"30"]];

        var_dump($tabela);
        echo "<hr>";

        foreach ($tabela as $dado){
            $indice = array_values((array)$dado);
            echo $indice[0];
        }




//exemplo 2 


echo "<hr> <h1>ex2</h1>";

$dados = [

    (object) ["Field" => "id", "Type" => "int(11)"],
    (object) ["Field" => "nome", "Type" => "varchar(30)"],
    (object) ["Field" => "idade", "Type" => "int(3)"],

];

$atributos = array_map(function ($obj) {
    return $obj->Field;
}, $dados);
    var_dump($atributos);       
    $str = implode (",", $atributos);
    echo $str;
    $placeholders=implode(",",array_fill(0,3,'?'));
    echo "<br>",$placeholders;