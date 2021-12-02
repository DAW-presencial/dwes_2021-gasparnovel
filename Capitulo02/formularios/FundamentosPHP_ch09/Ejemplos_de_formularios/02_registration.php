<!DOCTYPE html">
<html>
    <head>
        <title>Membership Form</title>
        <link rel="stylesheet" type="text/css" href="common.css" />
        <style type="text/css">
            .error { background: #d33; color: white; padding: 0.2em; }
        </style>
    </head>
    <body>


        <?php
            // Condicional si es pulsado el boton 
            if (isset($_POST["submitButton"])) {
                // llama a la funcion
                processForm();
            } else {
                // llama a la funcion y le pasa un array vacio
                displayForm(array());
            }
            // funcion que se le pasa los parametros 
            function validateField($fieldName, $missingFields)
            {   // si esta en el array muestra la clase error
                if (in_array($fieldName, $missingFields)) {
                    echo ' class="error"';
                }
            }
            // funcion que mete el valor de fieldName
            function setValue($fieldName)
            {   // si esta introducido lo muestra
                if (isset($_POST[$fieldName])) {
                    echo $_POST[$fieldName];
                }
            }
            // funcion que se le pasa los parametros 
            function setChecked($fieldName, $fieldValue)
            {   // si se ha introducido fieldName y fieldName es igual a fieldValue muestra checked
                if (isset($_POST[$fieldName]) && ($_POST[$fieldName] == $fieldValue)) {
                    echo ' checked="checked"';
                }
            }
            // funcion que se le pasa los parametros 
            function setSelected($fieldName, $fieldValue)
            {   // si se ha introducido fieldName y fieldName es igual a fieldValue muestra selected
                if (isset($_POST[$fieldName]) && ($_POST[$fieldName] == $fieldValue)) {
                    echo ' selected="selected"';
                }
            }

            // funcion que procesa el formulario 
            function processForm()
            {   // array con las columnas requeridas 
                $requiredFields = array("firstName", "lastName", "password1", "password2", "gender");
                // array vacio 
                $missingFields = array();
                
                /* 
                * bucle que recorre todo el array y si esta vacio o es difirente a las columnas requeridas
                * mete cada columna en el array vacio
                */
                foreach ($requiredFields as $requiredField) {
                    if (!isset($_POST[$requiredField]) || (!$_POST[$requiredField])) {
                        $missingFields[] = $requiredField;
                    }
                }

                // si hay la variable missingFields llama a la funcion y se la pasa por parametro 
                if ($missingFields) {
                    displayForm($missingFields);
                } else {
                    // llama a la funcion 
                    displayThanks();
                }
            }

            // fuincion que crea el formulario y se le pasa el array missingFields
            function displayForm($missingFields)
            {
                ?>
                        <h1>Membership Form</h1>
                        <!-- si hay missingFields llama a la clase error -->
                        <?php if ($missingFields) {
                    ?>
                            <p class="error">There were some problems with the form you submitted. Please complete the fields highlighted below and click Send Details to resend the form.</p>
                        <?php
                        // si no hay muestra el siguiente mensaje 
                        } else {
                                ?>
                                        <p>Thanks for choosing to join The Widget Club. To register, please fill in your details below and click Send Details. Fields marked with an asterisk (*) are required.</p>
                            <?php }?>
                        <form action="02_registration.php" method="post">
                            <div style="width: 30em;">

                                <label for="firstName"<?php validateField("firstName", $missingFields)?>>First name *</label>
                                <input type="text" name="firstName" id="firstName" value="<?php setValue("firstName")?>" />

                                <label for="lastName"<?php validateField("lastName", $missingFields)?>>Last name *</label>
                                <input type="text" name="lastName" id="lastName" value="<?php setValue("lastName")?>" />

                                <label for="password1"<?php
            // si hay missingFields muestra la clase error 
            if ($missingFields) {
                    echo ' class="error"';
                }
                ?>>Choose a password *</label>
                                <input type="password" name="password1" id="password1" value="" />
                                <label for="password2"<?php
            // si hay missingFields muestra la clase error 
            if ($missingFields) {
                    echo ' class="error"';
                } 
                ?>>Retype password *</label>
                                <input type="password" name="password2" id="password2" value=""/>

                                <label<?php validateField("gender", $missingFields)?>>Your gender: *</label>
                                <label for="genderMale">Male</label>
                                <input type="radio" name="gender" id="genderMale" value="M"<?php setChecked("gender", "M")?>/>
                                <label for="genderFemale">Female</label>
                                <input type="radio" name="gender" id="genderFemale" value="F"<?php setChecked("gender", "F")?> />

                                <label for="favoriteWidget">What's your favorite widget? *</label>
                                <select name="favoriteWidget" id="favoriteWidget" size="1">
                                    <option value="superWidget"<?php setSelected("favoriteWidget", "superWidget")?>>The SuperWidget</option>
                                    <option value="megaWidget"<?php setSelected("favoriteWidget", "megaWidget")?>>The MegaWidget</option>
                                    <option value="wonderWidget"<?php setSelected("favoriteWidget", "wonderWidget")?>>The WonderWidget</option>
                                </select>

                                <label for="newsletter">Do you want to receive our newsletter?</label>
                                <input type="checkbox" name="newsletter" id="newsletter" value="yes"<?php setChecked("newsletter", "yes")?> />

                                <label for="comments">Any comments?</label>
                                <textarea name="comments" id="comments" rows="4" cols="50"><?php setValue("comments")?></textarea>

                                <div style="clear: both;">
                                    <input type="submit" name="submitButton" id="submitButton" value="Send Details" />
                                    <input type="reset" name="resetButton" id="resetButton" value="Reset Form" style="margin-right: 20px;" />
                                </div>

                            </div>
                        </form>
                        <?php
            }
            // funcion displayThanks
            function displayThanks()
            {
                ?>
                        <h1>Thank You</h1>
                        <p>Thank you, your application has been received.</p>
                <?php
            }
            ?>

    </body>
</html>