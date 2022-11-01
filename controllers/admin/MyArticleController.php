<?php
namespace app\controllers\admin;


//my-article/hello-world
//my-article -> My-Article -> MyArticle -> MyArticleController -> app\controllers\MyArticleController
class MyArticleController extends \yii\web\Controller
{
    //hello-world
    //Hello-World -> HelloWorld -> actionHelloWorld
    public function actionHelloWorld()
    {
        echo "Hello World from admin";
    }
}