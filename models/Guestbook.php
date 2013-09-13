<?php

class Guestbook
{
    private $messages;

    // 共用db存取物件
    private $DB = null;

    // 預設從db取得所有留言

    public function __construct()
    {
        $this->DB = new DBAccess();
        $this->DB->selectAllMessage();
        while ($Message = $this->DB->fetchArray()) {
            $this->messages[] = $Message;
        }
    }

    public function  getAllMessage()
    {
        return $this->messages;
    }

    // 新增訊息

    public function  addMessage($theme, $name, $content)
    {
        $this->DB->insertMessage($theme, $name, $content);
    }

    // 詳細單筆訊息

    public function  getDetailedMessage($id)
    {
        $this->DB->selectDetailedMessage($id);

        return $this->DB->fetchArray();
    }


    // 修改訊息

    public function editMessage($id, $theme, $name, $content)
    {
        $this->DB->updateMessage($id, $theme, $name, $content);
    }

    // 刪除訊息

    public function deleteMessage($id)
    {
        $this->DB->deleteMessage($id);
    }

    // 解構函式

    public function __destruct()
    {
        $this->messages = null;
    }

}
