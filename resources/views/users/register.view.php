<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="<?= public_path('css/app.css') ?>">
    <title>S'enregister</title>
</head>
<body>
    <form id="register_form" action="/" method="get" class="flex flex-col gap-6">

        <div class="flex flex-col gap-2"><?php
            component('forms.controls.label-and-input', [
                'name' => 'firstname',
                'label' => 'Votre prénom',
                'type' => 'text',
                'value' => '',
                'placeholder' => 'Exemple: Jacques'
            ]);
            ?>
        </div>

        <div class="flex flex-col gap-2">
            <?php
            component('forms.controls.label-and-input', [
                'name' => 'lastname',
                'label' => 'Votre nom',
                'type' => 'text',
                'value' => '',
                'placeholder' => 'Exemple: Dubois'
            ]);
            ?>
        </div>

        <div class="flex flex-col gap-2">
            <?php
            component('forms.controls.label-and-input', [
                'name' => 'email',
                'label' => 'Votre email',
                'type' => 'mail',
                'value' => '',
                'placeholder' => 'Exemple: jacquesdubois@gmail.com'
            ]);
            ?>

        </div>

        <div class="flex flex-col gap-2">
            <?php
            component('forms.controls.label-and-input', [
                'name' => 'password',
                'label' => 'Votre mot de passe',
                'type' => 'password',
                'value' => '',
                'placeholder' => ''
            ]);
            ?>
        </div>
        <?php
        component('forms.controls.button', ['text' => 'S\'enregister']); ?>
    </form>
</body>
</html>



