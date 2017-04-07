[![Build Status](https://travis-ci.org/maokeyang/laravel-package-develop-demo.svg?branch=master)](https://travis-ci.org/maokeyang/laravel-package-develop-demo)

## Laravel扩展开发

### 安装扩展

    composer require maokeyang/hasher

下载完成后,直接在config/app.php中配置

    \Maokeyang\Hasher\MD5HasherProvider::class