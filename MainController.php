<?php
include_once 'models/BasicRandom.php';
include_once 'models\AdvancedRandom.php';
class MainController{
    /**
     * First Action
     */
    public static function firstAction()
    {
        if (isset($_GET['title'])){
            $title = $_GET['title'];
        }
        if (isset($_GET['desc'])){
            $desc = $_GET['desc'];
        }

        include_once 'views/justPage.php';
    }

    /**
     * First Action
     * @throws Exception
     */
    public static function secondAction()
    {
        if ($_POST["amount"]!="" && $_POST["min"]!="" && $_POST["max"]!=""){
            if (!is_numeric($_POST["amount"]) && !is_numeric($_POST["min"]) && !is_numeric($_POST["max"])){
                echo "Вводи числа!";
            }else{
                if ((int)$_POST["min"]<=(int)$_POST["max"]){
                    $result = array(
                        '$amount' => (int)$_POST["amount"],
                        '$min' => (int)$_POST["min"],
                        '$max' => (int)$_POST["max"],
                        '$checkbox' => $_POST["checkbox"]
                    );

                    if ($_POST["checkbox"] == "on"){
                        $advanced = new AdvancedRandom($result['$amount'],$result['$min'], $result['$max']);
                        $res = $advanced->getRandomWordWithInt();
                        echo json_encode($res);
                    }else{
                        $basic = new BasicRandom($result['$amount'],$result['$min'], $result['$max']);
                        $res = $basic->getRandomMassive();
                        echo json_encode($res);
                    }
                }else{
                    echo "Боже мои, так лень ввести правильно? Попробуйте снова... Может получится.";
                }
            }
        }else{
            echo "Заполни окна формы, их всего-то три...";
        }


    }
}