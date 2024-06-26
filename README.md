## 安装步骤
1.克隆代码
```shell
git clone https://github.com/Textloding/docs.git
```
2.进入目录复制.env配置文件并修改数据库等配置信息
```shell
cp .env.example .env
```
3.安装依赖
```shell
composer install
```
4.创建软链接
```shell
php artisan storage:link
```
5.发布资源
```shell
php artisan admin:publish
```
6.安装后台
```shell
php artisan admin:install
```
7.注入后台菜单
```shell
php artisan db:seed --class=AdminTablesSeeder
```
8.生成appkey
```shell
php artisan key:generate
```
9.设置运行目录伪静态
10.运行项目
```
前台入口:http://你的域名
后台入口:http://你的域名/admin 
账号:admin
密码:admin
```

