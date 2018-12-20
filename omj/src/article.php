<?php
class Article
{
    // 取得文章內容
    public function getArticle($id) {
        $article = $DB->getrow($id);
        return ($article) ?$article :array();
    }
    
    // 關閉文章
    public function disableArticle($id) {
        $DB->update($id, ['status' => 0]);
    }
}