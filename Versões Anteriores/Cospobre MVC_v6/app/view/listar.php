<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Listagem</title>
</head>

<body class="flex justify-center">
    <a href="<?= BASEPATH ?>login" class="absolute left-0 top-0 text-white font-bold mt-6 ml-6 cursor-pointer leading-none">
        <div class="flex items-center">
            <ion-icon name="arrow-back" class="text-2xl pr-1"></ion-icon>
            <div>Voltar</div>
        </div>
    </a>
    <table class="table-auto text-white w-3/4 md:w-9/10 mt-24">
        <thead>
            <tr class="border bg-white text-primary">
                <th class="px-2 py-2">Nome</th>
                <th class="px-2 py-2">Email</th>
                <th class="px-2 py-2">Senha</th>
                <th class="px-2 py-2">Data</th>
                <th class="px-2 py-2">Ação</th>
            </tr>
        </thead>
        <tbody class="bg-white text-gray-700">
            <?php if (is_null($data) || count($data) === 0) { ?>
                <tr>
                    <td colspan="4" class="border text-center h-24">Nenhum usuário cadastrado ainda :(</td>
                </tr>
            <?php } else { ?>
                <?php foreach ($data as $user) { ?>
                    <tr>
                        <td class="border text-center"><?= $user->nome ?></td>
                        <td class="border text-center"><?= $user->email ?></td>
                        <td class="border text-center"><?= $user->senha ?></td>
                        <td class="border text-center"><?= $user->dataNascimento ?></td>
                        <td class="border text-center">
                            <form action="<?= BASEPATH ?>user/remove" method="POST" class="delete-form">
                                <input type="hidden" name="email" value="<?= $user->email ?>">
                                <button type="submit">
                                    <ion-icon name="close-outline" class="text-2xl pt-1 text-red-500 font-bold"></ion-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>