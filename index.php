<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros em PHP POO</title>
</head>
<body>
    <pre>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";

        $p[0] = new Pessoa("Pedro", 20, "M");
        $p[1] = new Pessoa("Sara", 21, "F");

        $l[0] = new Livro("Games of Thrones", "George R. R. Martin", 835, $p[0]);
        $l[1] = new Livro("World History", "Dorling Kindersley", 512, $p[1]);

        $l[0]->abrir();
        $l[0]->folhear(901);
        $l[0]->avancarPag();
        $l[0]->detalhes();

        $l[1]->abrir();
        $l[1]->folhear(68);
        $l[1]->voltarPag();
        $l[1]->detalhes();
    ?>
    </pre>
</body>
</html>