<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>新規会員登録</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--ビュー(View)-->
        <h1>新規会員登録</h1>
        <div>
            <?php if($errors !== null): ?>
            <ul>
                <?php foreach($errors as $error): ?>
                <li class="error"><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <form action="store.php" method="POST">
                <input type="hidden" name="_token" value="<?= $token ?>">
                名前: <input type="text" name="name" value="<?= $user->name ?>"><br>
                年齢: <input type="text" name="age" value="<?= $user->age ?>"><br>
                性別: <input type="radio" name="gender" value="male" <?= $user->gender === '' || $user->gender === 'male' ? 'checked' : '' ?>>男性　<input type="radio" name="gender" value="female" <?= $user->gender === 'female' ? 'checked' : '' ?>>女性<br>
                <button type="submit">登録</button>
            </form>
        </div>
        
        <p><a href="index.php">会員一覧へ戻る</a></p>
    </body>
</html>