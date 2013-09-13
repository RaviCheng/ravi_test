<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table >
    <tr>
        <td height="50">
            <a href="./index.php?act=add">新增留言</a>
        </td>
    </tr>
    <tr>
        <td>
            <!--  留言顯示區  -->
            <?php foreach ($this->messages as $id => $message): ?>
                <div><?=$message['Name']?> : <?= $message['Theme']?></div>
                <div><?=$message['Content']?></div>
                <div><?=$message['Nowtime']?></div>
                <div><a href="./index.php?act=edit&id=<?=$message['id']?>">編輯</a> <a href="./index.php?act=doDelete&id=<?=$message['id']?>">刪除</a></div>
                <hr>
            <?php endforeach; ?>
        </td>
    </tr>
</table>
</body>
</html>
