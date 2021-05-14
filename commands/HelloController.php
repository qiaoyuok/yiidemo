<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\Documents;
use yii\console\Controller;
use yii\console\ExitCode;
use Yii;
use yii\sphinx\Query;
use SphinxClient;
use Elasticsearch\ClientBuilder;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";

        return ExitCode::OK;
    }

    public function actionTest()
    {
        $db = \Yii::$app->db;
        $documents = Documents::find()->asArray()->all();
        var_dump($documents);exit;
    }

    public function actionDemo()
    {
        $sql = 'SELECT * FROM test1 WHERE group_id = :group_id';
        $params = [
            'group_id' => 1
        ];
        $rows = Yii::$app->sphinx->createCommand($sql, $params)->queryAll();
        var_dump($rows);exit;
    }

    public function actionQuery()
    {
        $query = new Query();
        $rows = $query->from("test1")
            ->match("one")
//            ->showMeta(true)
            ->all();

        var_dump($rows);exit;
    }

    public function actionQueryClient()
    {
        $client = new SphinxClient();
        $res = $client->Query("one",'test1');
        $err = $client->GetLastError();
        if ($err){
            var_dump($err);exit;
        }
        var_dump($res);exit;
    }

    public function actionEs()
    {
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'movie',
            'body'  => [
                "query"=>[
                    "match"=>[
                        "country"=>"USA"
                    ]
                ]
            ]
        ];

        $res = $client->count($params);
        var_dump($res);exit;
    }
}
