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
7.填充数据库
```shell
php artisan db:seed

#首次安装执行上面单独一条命令即可
#如果只需要填充菜单则执行如下命令
php artisan db:seed --class=AdminTablesSeeder
#如果只需要文档则执行如下命令
php artisan db:seed --class=DocumentsSeeder
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

## 可使用的快捷命令
```shell
#按顺序导出现有documents、versions、chapters、articles四个表的数据生成DocumentsSeeder种子文件
php artisan export:documents-seed
```

## 前台展示
[![pkyKQWq.md.png](https://s21.ax1x.com/2024/06/26/pkyKQWq.md.png)](https://imgse.com/i/pkyKQWq)
暗夜模式(目前只主页更改)
[![pkyKNTJ.md.png](https://s21.ax1x.com/2024/06/26/pkyKNTJ.md.png)](https://imgse.com/i/pkyKNTJ)
验证密码页
[![pkyKr6K.md.png](https://s21.ax1x.com/2024/06/26/pkyKr6K.md.png)](https://imgse.com/i/pkyKr6K)
文档展示页
[![pkyK51P.md.png](https://s21.ax1x.com/2024/06/26/pkyK51P.md.png)](https://imgse.com/i/pkyK51P)
文章详情页
[![pkyKLkj.md.png](https://s21.ax1x.com/2024/06/26/pkyKLkj.md.png)](https://imgse.com/i/pkyKLkj)

## 后台展示
文档管理
[![pkyKvpq.md.png](https://s21.ax1x.com/2024/06/26/pkyKvpq.md.png)](https://imgse.com/i/pkyKvpq)
版本管理(公开开关暂不可用)
[![pkyM9nU.md.png](https://s21.ax1x.com/2024/06/26/pkyM9nU.md.png)](https://imgse.com/i/pkyM9nU)
章节管理
[![pkyMG9I.md.png](https://s21.ax1x.com/2024/06/26/pkyMG9I.md.png)](https://imgse.com/i/pkyMG9I)
文章管理
[![pkyMG9I.md.png](http://laravel.oneself.icu/1719393031852.png)](http://laravel.oneself.icu/1719393031852.png)
文章编辑
[![pkyMG9I.md.png](http://laravel.oneself.icu/1719393603061.png)](http://laravel.oneself.icu/1719393603061.png)

## 待解决已知问题
1.BUG问题
 - 后台分页跳转后地址栏id会清空，造成创建 版本、章节、文章失效
内部之间互相链接
 - 目录跳转后开关闭合状态不存储问题
2.体验优化问题

3.逻辑问题
 - 后台有空目录(目录下没有文章)前台不展示

4.Dcatadmin文档问题
 - 版本日志更新图片没有本地化
 - 文章具体内容内部链接跳转仍是learnku站点


