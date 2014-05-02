<!DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link type="text/css" rel="stylesheet" href="../src/style.css"/>
</head>
<body>
<?php
//demo
include '../src/PHPtoOrgChart.php';
$data=array(
    'a'=>array(
        'aa'=>array(
            'aaa'=>'Mike',
            'aab'=>'Look',
            'aac'=>'Rum',
        ),
        'bb'=>array(
            'aaa'=>'123',
            'aab'=>'567',
            'aac'=>'890',
            'bbdd'=>array(
                'aaa'=>'123',
                'aab'=>'567',
                'aac'=>'890',
            ),
        ),
    ),
    'b'=>array(
        'cc'=>array(
            'aaa'=>'Mike',
            'aab'=>'Look',
            'aac'=>'Rum',
        ),
        'dd'=>array(
            'aaa'=>'123',
            'aab'=>'567',
            'aac'=>'890',
        ),
    ),
);

echo '<div class="orgchart ">';
PHPtoOrgChart($data);
echo '</div>';
?>
</body>
</html>