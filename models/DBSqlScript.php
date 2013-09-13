<?php
class DB_SqlScript
{
    public function selectAllMessage()
    {
        $Sql = "SELECT * FROM `db_message_box` ORDER BY `Nowtime` DESC";

        return $this->query($Sql);
    }

    public function selectDetailedMessage($MesgID)
    {
        $Sql = sprintf("SELECT * FROM `db_message_box` WHERE `id`='%s'", $this->escape($MesgID));

        return $this->query($Sql);
    }

    public function insertMessage($Theme, $Name, $Content)
    {
        $Sql = sprintf(
            "INSERT INTO `db_message_box`(`Theme`,`Name`,`Content`,`Nowtime`) VALUES('%s','%s','%s',Now())",
            $this->escape($Theme),
            $this->escape($Name),
            $this->escape(trim($Content))
        );

        return $this->query($Sql);
    }

    public function updateMessage($MesgID, $Theme, $Name, $Content)
    {
        $Sql = sprintf(
            "UPDATE `db_message_box`
               SET `Theme`='%s',
                   `Name`='%s',
                   `Content`='%s'
             WHERE `id`='%s'",
            $this->escape($Theme),
            $this->escape($Name),
            $this->escape(trim($Content)),
            $this->escape($MesgID)
        );

        return $this->query($Sql);
    }

    public function deleteMessage($MesgID)
    {
        $Sql = sprintf("DELETE FROM `db_message_box` WHERE `id`='%s'", $this->escape($MesgID));

        return $this->query($Sql);
    }
}
