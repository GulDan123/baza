<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>60921fdd_test</title>
    <style>

        body {
            ;
        }

        th, td {
            padding: 10px;
        }

        th {
            background: #606060;
            color: #fff;
        }

        td {
            background: #b5b5b5;
        }

        .header {
            background-color: darkgray;
            width: 100%;
            height: 90px;
        }

        .header-item {
            padding-top: 10px;
            padding-left: 10px;

        .content {
            width: 100%;
            min-height: 800px;
        }

        .inner-content {
            margin-left: 30px;
        }

        }
        table {
            margin-left: 20px;
            margin-top: 20px;
        }

    </style>
</head>
<body>

    <div class="header">
        <div class="inner-header">
            <div class="header-item">
                <b>Веб-приложение гр. 609-21з <br></b>
                <b>Тема: 7. Информационная система поиска и бронирования уроков репетиторов<br></b>
                <b>Автор: Филоненко Д.Д.</b>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="inner-content">
            <table>
                <tr>
                    <th>ID</th>
                    <th>ФИО репетитора</th>
                    <th>Название предмета</th>
                    <th>Цена за час</th>
                </tr>

                <?php

                require "dbconnect.php";
                $result = $conn->query("SELECT teacher.id, teacher.name, teacher.price FROM teacher, subj WHERE teacher.id_pred=subj.id GROUP BY teacher.id;");
                $result_subj = $conn->query("SELECT subj.name FROM teacher, subj WHERE teacher.id_pred=subj.id GROUP BY teacher.id;");
                while ($row = $result->fetch() and $row_subj = $result_subj->fetch()) {
                    ?>

                    <tr>
                        <th><?=$row['id']?></th>
                        <th><?=$row['name']?></th>
                        <th><?=$row_subj['name']?></th>
                        <th><?=$row['price']?></th>
                    </tr>

                    <?php
                }
                ?>
            </table>
        </div>
    </div>


</body>
</html>

