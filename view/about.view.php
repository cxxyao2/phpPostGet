<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li>
                    <strong>
                        <?=   var_dump($task);  ?></strong>

                      

                  
                </li>
            <?php endforeach; ?>
           
        </ul>




    </header>
    
</body>
</html>

