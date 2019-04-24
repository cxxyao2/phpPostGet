//手动写composer.json文件，内容如下：
 {
    "autoload": {
        "classmap": [
            "./"
        ]
    }
}


//运行以下命令，自动生成composer.phar 以及 vendor文件包

// 当增加新的文件时
composer dump-autoload


//寻找package
https://packagist.org/ 