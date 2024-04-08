<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="<?= public_path('css/app.css') ?>">
    <title>Document</title>
</head>
<body>
<form id="login_form" action="/" method="POST"  class="flex flex-col gap-6">
    <div class="flex flex-col gap-2">
        <?php
        component('forms.controls.label-and-input', [
            'name' => 'email',
            'label' => "Votre email",
            'type' => 'email',
            'value' => '',
            'placeholder' => 'Exemple: jacquesdubois@gmail.com'
        ]);
        ?>
    </div>

    <div class="flex flex-col gap-2">
        <?php
        component('forms.controls.label-and-input', [
            'name' => 'password',
            'label' => "Votre mot de passe",
            'type' => 'password',
            'value' => '',
            'placeholder' => ''
        ]);
        ?>
    </div>

    <?php
    component('forms.controls.button', ['text' => 'Se connecter']);
    ?>

</form>
</body>
</html>