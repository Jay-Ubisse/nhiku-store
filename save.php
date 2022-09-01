<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/signup.css">
    <link rel="stylesheet" href="./styles/errors.css">
    <script src="./scripts/js/jquery-3.6.0.js"></script>
    <script src="./scripts/js/jquery.validate.js"></script>
    <script src="./scripts/js/signup.js"></script>
</head>

<body>
    <main>
        <form method="POST" action="" enctype="multipart/form-data">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td><label for="code">Codigo do Item</label></td>
                    <td><input type="text" name="code"></td>
                </tr>
                <tr>
                    <td><label for="name">Nome do Item</label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label for="brand">Marca do Item</label></td>
                    <td><input type="text" name="brand"></td>
                </tr>
                <tr>
                    <td><label for="model">Modelo do item</label></td>
                    <td><input type="text" name="model"></td>
                </tr>
                <tr>
                    <td><label for="weight">Peso</label></td>
                    <td><input type="text" name="weight"></td>
                </tr>
                <tr>
                    <td><label for="category">Categoria</label></td>
                    <td><input type="text" name="category"></td>
                </tr>
                <tr>
                    <td><label for="dimension">Dimensao</label></td>
                    <td><input type="text" name="dimension"></td>
                </tr>
                <tr>
                    <td><label for="Descriptiom">Descricao</label></td>
                    <td><textarea name="description"></textarea></td>
                </tr>
                <tr>
                    <td><label for="quantity">Quantidade</label></td>
                    <td><input type="number" name="quantity" value="1" min="1" max="100"></td>
                </tr>
                <tr>
                    <td><label for="price">Preco</label></td>
                    <td><input type="text" name="price"></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                        <label for="image">Carregue a Imagem o produto</label>
                    </td>
                    <td><input type="file" name="image"></td>
                </tr>
            </table>
            <div>
                <input type="submit" value="Submeter" class="button">
                <input type="reset" value="Cancelar" class="button ">
            <div>
        </form>
    </main>
</body>

</html>