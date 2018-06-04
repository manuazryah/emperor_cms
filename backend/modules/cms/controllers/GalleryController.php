<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Gallery;
use yii\web\UploadedFile;

class GalleryController extends \yii\web\Controller {

    public function actionIndex() {
        $model = new Gallery();
        if ($model->load(Yii::$app->request->post())) {
            $files = UploadedFile::getInstances($model, 'image');
            if (!empty($files) && $model->package_type != '') {
                $this->Upload($files, $model);
            }
            $model = new Gallery();
        }
        return $this->render('index', [
                    'model' => $model,
        ]);
    }

    public function Upload($files, $model) {
        if ($files != '' && $model != '') {
            if ($model->package_type == 1) {
                $folder = 'car_package';
            } elseif ($model->package_type == 2) {
                $folder = 'tempo_traveler';
            } elseif ($model->package_type == 3) {
                $folder = 'pilgrimage';
            } elseif ($model->package_type == 4) {
                $folder = 'house_boats';
            }
            $paths = Yii::$app->basePath . '/../uploads/gallery/' . $folder;
            $path = $this->CheckPath($paths);
            foreach ($files as $file) {
                $name = $this->fileExists($path, $file->baseName . '.' . $file->extension, $file, 1);
                $file->saveAs($path . '/' . $name);
            }
            return true;
        } else {
            return false;
        }
    }

    public function CheckPath($paths) {
        if (!is_dir($paths)) {
            mkdir($paths);
        }
        return $paths;
    }

    public function fileExists($path, $name, $file, $sufix) {
        if (file_exists($path . '/' . $name)) {

            $name = basename($path . '/' . $file->baseName, '.' . $file->extension) . '_' . $sufix . '.' . $file->extension;
            return $this->fileExists($path, $name, $file, $sufix + 1);
        } else {
            return $name;
        }
    }

    public function actionRemove($path) {
        if (file_exists($path)) {
            unlink($path);
        }
        return $this->redirect(Yii::$app->request->referrer);
    }

}
