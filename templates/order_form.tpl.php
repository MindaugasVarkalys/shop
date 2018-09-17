<div>                                    
    <?php
    echo "<p class='description'>Dauguma riedžių panašūs savo išore, tačiau vidinių dalių pasirinkimas yra labai gausus. Mūsų tikslas - pateikti patį kokybiškiausią riedį. Mūsų specialistai kruopščiai atrinko gaminių kokybę, mūsų riedžiai yra komplektuojami tik pagal mūsų parinktas geriausias dalis ir jų gamintojus. Kainų skirtumas - tai kokybės skirtumas, todėl neapsigaukite matydami, atrodo, tokį pat gaminį, tačiau skirtinga kaina, vis dėlto - tai elektrinio transporto priemonė. Dedame didžiausias pastangas į kokybiško produkto paieškas ir atrankas, todėl didžiuojamės sulaukdami teigiamų atsiliepimų iš savo klientų ir gausybės rekomendacijų.</p>";
    ?>
</div>
<h2 class="heading-secondary">Užsakymo informacija</h2>
<?php if ($formErrors != null) { ?>
    <div>
        Neįvesti arba neteisingai įvesti šie laukai:
        <?php
        echo $formErrors;
        ?>
    </div>
<?php } ?>
<form action="" method="post">
    <table class="table">
        <tr>
            <td><label class="field" for="firstName">Vardas<?php echo in_array('firstName', $required) ? '<span> *</span>' : ''; ?></label></td>
            <td><input type="text" id="firstName" name="firstName" class="textbox textbox-150" value="<?php echo isset($data['firstName']) ? $data['firstName'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td><label class="field" for="lastName">Pavardė<?php echo in_array('lastName', $required) ? '<span> *</span>' : ''; ?></label></td>
            <td><input type="text" id="lastName" name="lastName" class="textbox textbox-150" value="<?php echo isset($data['lastName']) ? $data['lastName'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td><label class="field" for="email">Elektroninis paštas<?php echo in_array('email', $required) ? '<span> *</span>' : ''; ?></label></td>
            <td><input type="text" id="email" name="email" class="textbox textbox-150" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td><label class="field" for="phoneNumber">Telefono numeris<?php echo in_array('phoneNumber', $required) ? '<span> *</span>' : ''; ?></label></td>
            <td><input type="text" id="phoneNumber" name="phoneNumber" class="textbox textbox-150" value="<?php echo isset($data['phoneNumber']) ? $data['phoneNumber'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td><label class="field" for="country">Valstybė<?php echo in_array('country', $required) ? '<span> *</span>' : ''; ?></label></td>
            <td><input type="text" id="country" name="country" class="textbox textbox-150" value="<?php echo isset($data['country']) ? $data['country'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td><label class="field" for="city">Miestas<?php echo in_array('city', $required) ? '<span> *</span>' : ''; ?></label></td>
            <td><input type="text" id="city" name="city" class="textbox textbox-150" value="<?php echo isset($data['city']) ? $data['city'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td><label class="field" for="streetAndHouseNumber">Gatvė ir namo numeris<?php echo in_array('streetAndHouseNumber', $required) ? '<span> *</span>' : ''; ?></label></td>
            <td><input type="text" id="streetAndHouseNumber" name="streetAndHouseNumber" class="textbox textbox-150" value="<?php echo isset($data['streetAndHouseNumber']) ? $data['streetAndHouseNumber'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td><label class="field" for="postalCode">Pašto kodas<?php echo in_array('postalCode', $required) ? '<span> *</span>' : ''; ?></label></td>
            <td><input type="text" id="postalCode" name="postalCode" class="textbox textbox-150" value="<?php echo isset($data['postalCode']) ? $data['postalCode'] : ''; ?>" /></td>
        </tr>
    </table>
    <p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
    <?php if (isset($data['id'])) { ?>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
    <?php } ?>
    <input type="submit" class="submit button" name="submit" value="Išsaugoti">
</form>
