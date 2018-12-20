<?php
require('article.php');
use PHPUnit\Framework\TestCase;
class ArticleTest extends TestCase
{
    /**
     * @dataProvider articleProvider
     */
    public function testGetArticle($id, $title, $status) {
        $article = new Article();
        $content = $article->getArticle($id);
        // 測試標題是否如預期
        $this->assertEquals($title, $content['title']);
        // 測試文章狀態是否如預期
        $this->assertEquals($status, $content['status']);
    }
    public function testDisableArticle() {
        $article = new Article();
        $article->disableArticle(2);
        $content = $article->getArticle(2);
        
        // 測試文章狀態是否如預期
        $this->assertEquals(0, $content['status']);
    }
    public function articleProvider() {
        return [
            [1, '伐伐伐伐伐木工', 0],
            [2, '請給我工作', 1],
        ];
    }
}