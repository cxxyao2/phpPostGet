# 手动写composer.json文件，内容如下：
 {
    "autoload": {
        "classmap": [
            "./"
        ]
    }
}


# 运行以下命令，自动生成composer.phar 以及 vendor文件包

- 当增加新的文件时
composer dump-autoload


- 寻找package
https://packagist.org/ 

-这是一个PHP写的包含CSUD功能的服务端
-PHP EMAIL 没有使用GMAIL.因为安全设置
