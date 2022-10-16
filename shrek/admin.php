    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>
        nav{
        color: white;
        display: flex;
        align-items: baseline;
        position: relative;
        background:green;
        }
        h3{
        font-size: x-large;
        }
        ul{
        display: flex;
        align-items: baseline;
        }
        .direita{
        position: absolute;
        right: 3%;
        }
        a{
            color: white;
            text-decoration: none;
        }
        </style>
    </head>
    <body>
        <nav>
            <ul class="">
            <h2 class="Home">
                Pagina do adm       
            </h2>
            </ul>
            <section class="direita"> 
            <ul class="right">
                <h3 class="">
                    <a href="Sair.php">Sair   </a>
                </h3>
            </ul>
            </section> 
        </nav>
        <div align="center">
            <div class="caixa">
                <form action="" method="">
                <?php include_once("conexao.php");
        $sql    = "SELECT * from roteiro WHERE titulo = 'Roteiro do 1º Filme de Shrek'";
        $res    = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($res);

    ?>
                <table>
                    <tr> 
                        <th>
                            Edite os dados do roteiro
                        </th>
                    </tr>
                    <tr> 
                        <td>
                            <label for="titulo">
                                Titulo
                            </label>
                        </td>
                        <td>
                            <input type="text" name="titulo" id="titulo" value="<?php echo $result["titulo"]; ?>">
                        </td>
                    </tr>
                    <tr> 
                        <td>
                        <label for="subtitulo">
                            Subtitulo
                        </label>
                        </td>
                        <td>
                            <input type="text" name="subtitulo" id="subtitulo" value="<?php echo $result["subtitulo"]; ?>">
                        </td>
                        </tr>
                        <td>
                            <label for="texto">
                                Texto
                                </label>
                            </td>
                    <td>
                    <textarea id="texto">
                    <?php echo $result["texto"]; ?>"
                    </textarea>
                    </td>
                    </tr> 
                    
                </table>
                <input type="submit" value="Salvar">
                </form>
            </div>

        </div>
    </body>
    </html>