<?php
class HolaController extends Controller
{

    public function actionIndex()
    {
        $model = Users::model()->findAll();
        $twitter = "@codigofacilito";
        $this->render("index", array("model" => $model, "twitter" => $twitter));
    }
}
