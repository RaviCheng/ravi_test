<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table>
    <tr><td align="center">新增留言</td></tr>
    <tr>
        <td>
            <form id="Postform" name="Postform" method="post" action="./index.php?act=doAdd">
                <table cellpadding="0" cellspacing="0" width="100%" border="0" style="line-height:25px;">
                    <tr>
                        <td align="right" width="100">
                            主題：
                        </td>
                        <td align="left">
                            <input type="text" id="txtTheme" name="txtTheme" style="border:1px solid #abadb3;width:300px;" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            姓名：
                        </td>
                        <td align="left">
                            <input type="text" name="txtName" id="txtName" style="border:1px solid #abadb3;width:300px;" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            內容：
                        </td>
                        <td align="left">
                            <textarea name="txtContent" id="txtContent" style="border:1px solid #abadb3;width:450px;height:120px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding:10px 0;" colspan="2" >
                            <table cellpadding="0" cellspacing="0"  border="0">
                                <tr>
                                    <td style="padding-right: 10px;">
                                        <input type="submit" name="btnSend" id="btnSend" value="確定送出"/>
                                    </td>
                                    <td style="padding-right: 10px;">
                                        <input type="reset" value="重新填寫" />
                                    </td>
                                    <td style="padding-right: 10px;">
                                        <input type="button" value="返回"  onclick="self.location.href='./'"/>
                                    </td>
                            </table>
                        </td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</body>
</html>
