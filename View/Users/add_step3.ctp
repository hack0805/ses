

<h1>ユーザー登録確認画面</h1>
<table>
<!--  <?php foreach ($users as $user) :?>
        <tbody>

        <tr>
            <td style="width: 25%;">入力項目</td>
            <td style="width: 75%;">入力内容</td>
        </tr>
        <tr>
            <td>お名前(フリガナ)</td>
            <td><?= $user['User']['first_name_kana']; ?></td>
        </tr>
        <tr>
            <td>お名前</td>
            <td><?= $user['User']['first_name']; ?></td>
        </tr>
        <tr>
        <td>生年月日</td>
         <td><?= $this->Time->format($user['User']['created'], '%Y/%m/%d'); ?></td>
            </tr>
        <tr>
            <td>電話番号</td>
            <td><?= $user['User']['phone']; ?></td>
        </tr>
        <tr>
            <td>メールアドレス(ID)</td>
            <td><?= $user['User']['email']; ?></td>
        </tr>
        <tr>
            <td>パスワード</td>
            <td><?= $user['User']['password']; ?></td>
        </tr>
        <tr>
            <td>郵便番号</td>
            <td><?= $user['User']['postal']; ?></td>
        </tr>
        <tr>
            <td>住所</td>
            <td><?= $user['User']['address']; ?></td>
        </tr>
        <tr>
            <td>最寄り路線</td>
            <td><?= $user['User']['closest_line']; ?></td>
        </tr>
        <tr>
            <td>最寄り駅</td>
            <td><?= $user['User']['closest_sta']; ?></td>
        </tr>
        <tr>
            <td>スキルPR</td>
            <td><?= $user['User']['profile_skill']; ?></td>
        </tr>
        <tr>
            <td>自己PR</td>
            <td><?= $user['User']['profile']; ?></td>
        </tr>
        <br>

        </tbody>
    <?php endforeach; ?>
   -->  </table>