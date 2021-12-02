<?php
// Condicional si se ha pulsado el boton 
if (isset($_POST["submitButton"])) {
    // Switch que pasa por parametro lo que contega el option 
    switch ($_POST["store"]) {
        case ".com":
            // header locations te lleva a la url 
            header("Location: http://www.amazon.com/");
            break;
        case ".ca":
            header("Location: http://www.amazon.ca/");
            break;
        case ".co.uk":
            header("Location: http://www.amazon.co.uk/");
            break;
    }
} else {
    // lamma a la funcion principal displayForm
    displayForm();
}

function displayForm()
{
    ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
            <title>Amazon Store Selector</title>
            <link rel="stylesheet" type="text/css" href="common.css" />
        </head>
        <body>
            <h1>Amazon Store Selector</h1>
            <!-- Importante siempre post -->
            <form action="" method="post">
                <div style="width: 35em;">
                    <!-- Titulo -->
                    <label for="store">Choose your Amazon store:</label>
                    <!-- Seleccion -->
                    <select name="store" id="store" size="1">
                        <!-- Opciones de la seleccion-->
                        <option value=".com">Amazon.com</option>
                        <option value=".ca">Amazon.ca</option>
                        <option value=".co.uk">Amazon.co.uk</option>
                    </select>
                    <div style="clear: both;">
                        <!-- Botton submit -->
                        <input type="submit" name="submitButton" id="submitButton" value="Visit Store" />
                    </div>
                </div>
            </form>
    <?php
}
?>
    </body>
</html>