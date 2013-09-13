<?php

class IndexController extends Controller
{

    // 留言板物件
    private $guestbook = null;

    // 單筆訊息id（編輯 or 刪除用）
    private $messageID = '';

    public function __construct()
    {
        $this->guestbook = new Guestbook;
        $this->messageID = isset($_GET['id']) ? $_GET['id'] : '';
    }

    // 首頁訊息
    protected function index()
    {
        $view = new HtmlView();
        $view->setVar('messages', $this->guestbook->getAllMessage());
        $view->render('index.tpl.php');
    }

    // 新增訊息頁面
    protected function add()
    {
        $view = new HtmlView();
        $view->render('add.tpl.php');
    }

    // 新增留言
    protected function doAdd()
    {
        $theme   = $_POST['txtTheme'];
        $name    = $_POST['txtName'];
        $content = $_POST['txtContent'];

        $this->guestbook->addMessage($theme, $name, $content);

        $this->redirectTo('./');
    }

    // 編輯留言頁面
    protected function edit()
    {
        $view = new HtmlView();
        $view->setVar('detailedMessage', $this->guestbook->getDetailedMessage($this->messageID));
        $view->render('edit.tpl.php');
    }

    // 編輯留言
    protected function doEdit()
    {
        $id      = $_POST['txtMesgID'];
        $theme   = $_POST['txtTheme'];
        $name    = $_POST['txtName'];
        $content = $_POST['txtContent'];

        $this->guestbook->editMessage($id, $theme, $name, $content);
        $this->redirectTo('./');
    }

    // 刪除留言
    protected function doDelete()
    {
        $this->guestbook->deleteMessage($this->messageID);
        $this->redirectTo('./');
    }
}
