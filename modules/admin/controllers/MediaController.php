<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/12/10
 * Time: 11:07
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\ArticleModel;
use GuzzleHttp\Psr7\UploadedFile;
use \yii;

class MediaController extends BaseController
{

    public function actionUpload() {
        $model = new ArticleModel();

        $imageFile = \yii\web\UploadedFile::getInstance($model, 'pic');
        $directory = \Yii::getAlias('@frontend/uploads/article_pic') . DIRECTORY_SEPARATOR . Yii::$app->session->id . DIRECTORY_SEPARATOR;
        if (!is_dir($directory)) {
            mkdir($directory);
        }
        if ($imageFile) {
            $uid = uniqid(time(), true);
            $fileName = $uid . '.' . $imageFile->extension;
            $filePath = $directory . $fileName;
            if ($imageFile->saveAs($filePath)) {
                $path = '/uploads/article_pic' . Yii::$app->session->id . DIRECTORY_SEPARATOR . $fileName;
                return yii\helpers\Json::encode([
                    'files' => [[
                        'name' => $fileName,
                        'size' => $imageFile->size,
                        "url" => $path,
                        "thumbnailUrl" => $path,
                        "deleteUrl" => 'image-delete?name=' . $fileName,
                        "deleteType" => "POST"
                    ]]
                ]);
            }
        }
        return '';
    }

}