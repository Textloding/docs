<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentsSeeder extends Seeder
{
    public function run()
    {
        DB::table('documents')->insert([
            (object) array(
   'id' => 1,
   'name' => 'Dcatadmin',
   'slug' => 'dcat-admin',
   'description' => '只需很少的代码即可快速构建出一个功能完善的高颜值后台系统，内置丰富的后台常用组件，开箱即用，基于Laravel admin实现。',
   'cover_image' => 'images/dcatadmin.png',
   'has_chapters' => 1,
   'auto_numbering' => 1,
   'is_public' => 1,
   'requires_password' => 0,
   'password' => NULL,
   'created_at' => '2024-06-26 09:44:51',
   'updated_at' => '2024-06-26 09:47:03',
)
        ]);
        DB::table('versions')->insert([
            (object) array(
   'id' => 1,
   'document_id' => 1,
   'version_number' => '1.x',
   'is_public' => 1,
   'created_at' => '2024-06-26 09:45:06',
   'updated_at' => '2024-06-26 09:45:06',
),
            (object) array(
   'id' => 2,
   'document_id' => 1,
   'version_number' => '2.x',
   'is_public' => 1,
   'created_at' => '2024-06-26 09:45:15',
   'updated_at' => '2024-06-26 09:45:15',
)
        ]);
        DB::table('chapters')->insert([
            (object) array(
   'id' => 1,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '入门',
   'order' => 1,
   'created_at' => '2024-06-26 09:45:40',
   'updated_at' => '2024-06-26 09:46:52',
),
            (object) array(
   'id' => 2,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '数据表格',
   'order' => 2,
   'created_at' => '2024-06-26 09:45:55',
   'updated_at' => '2024-06-26 09:46:57',
),
            (object) array(
   'id' => 3,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '数据表单',
   'order' => 3,
   'created_at' => '2024-06-26 09:48:11',
   'updated_at' => '2024-06-26 09:48:11',
),
            (object) array(
   'id' => 4,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '数据详情',
   'order' => 4,
   'created_at' => '2024-06-26 09:48:24',
   'updated_at' => '2024-06-26 09:48:24',
),
            (object) array(
   'id' => 5,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '模型树',
   'order' => 5,
   'created_at' => '2024-06-26 09:48:36',
   'updated_at' => '2024-06-26 09:48:36',
),
            (object) array(
   'id' => 6,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '数据仓库',
   'order' => 6,
   'created_at' => '2024-06-26 09:48:46',
   'updated_at' => '2024-06-26 09:48:46',
),
            (object) array(
   'id' => 7,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '动作',
   'order' => 7,
   'created_at' => '2024-06-26 09:49:06',
   'updated_at' => '2024-06-26 09:49:06',
),
            (object) array(
   'id' => 8,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '多语言',
   'order' => 8,
   'created_at' => '2024-06-26 09:49:15',
   'updated_at' => '2024-06-26 09:49:15',
),
            (object) array(
   'id' => 9,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '开发扩展',
   'order' => 9,
   'created_at' => '2024-06-26 09:49:30',
   'updated_at' => '2024-06-26 09:49:30',
),
            (object) array(
   'id' => 10,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '页面组件',
   'order' => 10,
   'created_at' => '2024-06-26 09:49:47',
   'updated_at' => '2024-06-26 09:49:47',
),
            (object) array(
   'id' => 11,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '区块',
   'order' => 11,
   'created_at' => '2024-06-26 09:49:55',
   'updated_at' => '2024-06-26 09:49:55',
),
            (object) array(
   'id' => 12,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '动作以及表单响应',
   'order' => 12,
   'created_at' => '2024-06-26 09:50:15',
   'updated_at' => '2024-06-26 09:50:15',
),
            (object) array(
   'id' => 13,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '权限控制',
   'order' => 13,
   'created_at' => '2024-06-26 09:50:23',
   'updated_at' => '2024-06-26 09:50:23',
),
            (object) array(
   'id' => 14,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '菜单',
   'order' => 14,
   'created_at' => '2024-06-26 09:50:39',
   'updated_at' => '2024-06-26 09:50:39',
),
            (object) array(
   'id' => 15,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '帮助函数',
   'order' => 15,
   'created_at' => '2024-06-26 09:50:50',
   'updated_at' => '2024-06-26 09:50:50',
),
            (object) array(
   'id' => 16,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '开发工具',
   'order' => 16,
   'created_at' => '2024-06-26 09:51:04',
   'updated_at' => '2024-06-26 09:51:04',
),
            (object) array(
   'id' => 17,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '自定义登陆认证',
   'order' => 17,
   'created_at' => '2024-06-26 09:51:12',
   'updated_at' => '2024-06-26 09:51:12',
),
            (object) array(
   'id' => 18,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '自定义头部导航',
   'order' => 18,
   'created_at' => '2024-06-26 09:51:20',
   'updated_at' => '2024-06-26 09:51:20',
),
            (object) array(
   'id' => 19,
   'document_id' => 1,
   'version_id' => 2,
   'title' => '更新日志',
   'order' => 19,
   'created_at' => '2024-06-26 09:51:28',
   'updated_at' => '2024-06-26 09:51:28',
)
        ]);
        DB::table('articles')->insert([
            (object) array(
   'id' => 1,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '简介',
   'content' => '# Dcat Admin

> 首发 - https://learnku.com/articles/42582

`Dcat Admin`是一个基于[laravel-admin](https://www.laravel-admin.org/)二次开发而成的后台系统构建工具，只需很少的代码即可快速构建出一个功能完善的高颜值后台系统。支持页面一键生成CURD代码，内置丰富的后台常用组件，开箱即用，让开发者告别冗杂的HTML代码，对后端开发者非常友好。

- [官方网站](http://www.dcatadmin.com)
- [English documentions](http://www.dcatadmin.com/docs/en-2.x/quick-start.html)
- [Demo / 在线演示](http://103.39.211.179:8080/admin)
- [Demo源码](https://github.com/jqhph/dcat-admin-demo)
- [Demo源码 (码云)](https://gitee.com/jqhph/dcat-admin-demo)
- [扩展](#)

### 截图
![](http://docs.oneself.icu:10010/storage/markdown/images/d29d435f115791e85faeb6f1e6c5e928667b74f2a689e.png)
![](http://docs.oneself.icu:10010/storage/markdown/images/a360a9ba99d6b0f52a168c5407f73e0d667b751831e31.png)
![](http://docs.oneself.icu:10010/storage/markdown/images/f4b4da6a3cffe61dab20fc8b19b851ad667b75200916f.jpg)
![](http://docs.oneself.icu:10010/storage/markdown/images/075849cd99383b977b499a49e8335eb6667b75432516b.png)
![](http://docs.oneself.icu:10010/storage/markdown/images/15a4ec70fdad53b18d4c9db253ed56e4667b7549c153d.jpg)
![](http://docs.oneself.icu:10010/storage/markdown/images/692a4569604a14cae7316aa66e91fb5e667b7550b1d5f.jpg)

### 技术栈

- [Laravel](https://laravel.com/)
- [AdminLTE3](https://github.com/ColorlibHQ/AdminLTE)
- [Bootstrap4](https://getbootstrap.net/)
- jQuery3
- Pjax

### 特性

- 简洁优雅、灵活可扩展的API
- 用户管理
- RBAC权限管理，支持无限极权限节点
- 菜单管理
- 使用pjax构建无刷新页面，支持**按需加载**静态资源，可以无限扩展组件而不影响整体性能
- 松耦合的页面构建与数据操作设计，可轻松切换数据源
- 自定义页面
- 自定义主题配色
- 多主题切换功能，内置多种主题色
- 可轻松构建无菜单栏的独立页面（如可用于构建弹窗选择器等功能）
- 插件功能
- 可视化代码生成器，可根据数据表一键生成增删改查页面
- 数据表格构建工具，内置丰富的表格常用功能（如组合表头、数据导出、搜索、快捷创建、批量操作等）
- 树状表格功能构建工具，支持分页和点击加载
- 数据表单构建工具，内置丰富的表单类型，支持表单异步提交
- 分步表单构建工具
- 弹窗表单构建工具
- 数据详情页构建工具
- 无限层级树状页面构建工具，支持用拖拽的方式实现数据的层级、排序等操作
- 内置丰富的常用页面组件（如图表、数据统计卡片、下拉菜单、Tab卡片、提示工具等）
- `Section`功能（类似`Wordpress`的`Filter`和`blade`模板的`section`标签）
- 异步文件上传表单，支持分块多线程上传
- 多应用(多后台)
- 插件市场，只需在管理页面轻轻点击鼠标即可完成插件的安装、更新和卸载等操作(`暂未实现`)

### 新版本预告

`Dcat Admin`计划在`2.0`版本上线插件市场功能，将对整个扩展功能进行重构，以提升用户体验。
新的扩展系统将可以让用户只需在管理页面点点鼠标即可完成插件的`安装`、`更新`和`卸载`等操作。
并且会上线插件付费功能，以激励开发者开发高质量的插件。

如果有任何建议，欢迎提`issue`或者私信我，`Dcat Admin`团队将会致力于构建一个于开发者和用户都有利的生态，感谢大家的支持！

### 与Laravel Admin的异同

`Dcat Admin`是基于`Laravel Admin`二次开发而成的后台构建工具，整体风格与`Laravel Admin`一脉相承，只是在功能细节上做了大量的调整。

调整：
- 采用[AdminLTE3](https://github.com/ColorlibHQ/AdminLTE)(`bootstrap4`+`jQuery3`)构建前端页面
- 使用`PJAX`构建无刷新页面，并且支持前端资源按需加载，开发者无需再担心安装组件过多会影响页面加载速度
- 采用松耦合的页面构建与数据操作设计，构建页面不再需要关心数据操作接口的具体实现
- 调整了表单提交方式，改为`ajax`提交
- 调整了代码生成器，支持根据已有数据表一键生成增删改查页面
- 调整了多语言翻译功能，使用更简单
- 调整了权限功能，支持分层级以及排序
- 调整了扩展系统，支持页面管理
- ...

新增：
- 新增多主题切换功能
- 新增表单弹窗功能，仅需增加数行代码就可以构建一个非Iframe表单弹窗
- 新增快速构建无菜单栏页面功能
- 新增弹窗选择器表单，可以在弹窗中选择表格数据
- 新增AJAX提交表单，以及表单前端验证功能
- 新增文件异步上传组件，支持分块上传、批量上传、上传进度条等
- 新增表格过滤器右侧滑动面板布局
- 新增表格字段值过滤功能
- 新增分步表单
- 新增`section`功能（与`wordpress`的`add_filter`功能类似）
- 新增树形表格功能，可分页显示大批量的层级结构数据
- 新增双表头表格功能，仅需增加数行代码即可构建出双表头表格
- 新增了多种实用的页面组件，如图表、下拉菜单、markdown、checkbox等等
- 新增`Tree`表单
- 新增通过数组添加菜单的功能，支持绑定权限和角色
- 新增通过数组添加菜单功能
- 新增菜单缓存功能
- ...

### 交流

**QQ群** 
一群 704661955 (已满)
二群 615467299

**扩展开发者QQ群** 679738409 (有意开发扩展的同学可以加这个群交流，开发完成之后可以上报给我，我会把扩展包收录到官网，可以让更多开发者看到。)

### 加入我们

如果您对这个项目感兴趣，非常欢迎加入项目开发团队，参与这个项目的功能维护与开发。欢迎任何形式的贡献（包括但不限于以下）：

* 贡献代码
* 完善文档
* 撰写教程
* 完善注释
* ...',
   'order' => 1,
   'created_at' => '2024-06-26 09:57:23',
   'updated_at' => '2024-06-26 09:57:23',
   'slug' => 'brief-introduction',
),
            (object) array(
   'id' => 2,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '安装',
   'content' => '# 安装

<a name="env"></a>
## 环境
+ PHP >= `7.1`
+ Laravel `5.5.0` ~ `9.*`
+ Fileinfo PHP Extension

<a name="start"></a>
## 开始安装

首先需要安装`laravel`框架，如已安装可以跳过此步骤。如果您是第一次使用`laravel`，请务必先阅读文档 https://learnku.com/docs/laravel/9.x/installation/12200 ！
```bash
composer create-project --prefer-dist laravel/laravel 项目名称 9.*
# 或
composer create-project --prefer-dist laravel/laravel 项目名称
```

安装完`laravel`之后需要修改`.env`文件，设置数据库连接设置正确

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dcat-admin
DB_USERNAME=root
DB_PASSWORD=
```

安装`dcat-admin`


```shell
cd {项目名称}

composer require dcat/laravel-admin:"2.*" -vvv
```
> 如果上一步出现报错，则更改`composer.json`的参数`minimum-stability`的值为`dev`。

然后运行下面的命令来发布资源：

```
php artisan admin:publish
```

在该命令会生成配置文件`config/admin.php`，可以在里面修改安装的地址、数据库连接、以及表名，建议都是用默认配置不修改。

然后运行下面的命令完成安装：

> {tip} 执行这一步命令可能会报以下错误`Specified key was too long ... 767 bytes`，如果出现这个报错，请在`app/Providers/AppServiceProvider.php`文件的`boot`方法中加上代码`\\Schema::defaultStringLength(191);`，然后删除掉数据库中的所有数据表，再重新运行一遍`php artisan admin:install`命令即可。

```
php artisan admin:install
```

上述步骤操作完成之后就可以配置`web`服务了，**注意需要把`web`目录指向`public`目录**！如果用的是`nginx`，还需要在配置中加上伪静态配置
```dotenv
location / {
	try_files $uri $uri/ /index.php?$query_string;
}
```

启动服务后，在浏览器打开 `http://localhost/admin`，使用用户名 `admin` 和密码 `admin`登陆。



<a name="files"></a>
## 生成的文件

安装完成之后,会在项目目录中生成以下的文件:

<a name="config"></a>
### 配置文件

安装完成之后，`dcat-admin`所有的配置都在`config/admin.php`文件中。

<a name="admin"></a>
### 后台项目文件
安装完成之后，后台的安装目录为`app/Admin`，之后大部分的后台开发编码工作都是在这个目录下进行。

```
app/Admin
├── Controllers
│   ├── AuthController.php
│   └── HomeController.php
├── Metrics
│   └── Examples
│       ├── NewDevices.php
│       ├── NewUsers.php
│       ├── ProductOrders.php
│       ├── Sessions.php
│       ├── Tickets.php
│       └── TotalUsers.php
├── bootstrap.php
└── routes.php
```

1. `app/Admin/routes.php`文件用来配置后台路由。
2. `app/Admin/bootstrap.php` 是`dcat-admin`的启动文件, 使用方法请参考文件里面的注释.
3. `app/Admin/Controllers`目录用来存放后台控制器文件，该目录下的`HomeController.php`文件是后台首页的显示控制器，`AuthController.php`为后台管理员登录鉴权控制器。
4. `app/Admin/Metrics/Examples`里面存放的是`数据统计卡片(Metric Card)`的示例代码.

<a name="assets"></a>
### 静态文件

后台所需的前端静态文件在`/public/vendor/dcat-admin`目录下。

<a name="migrations"></a>
### 数据表迁移文件
对应的数据表迁移文件在`/database/migrations`目录下。

<a name="lang"></a>
### 语言包
语言包文件在`/resources/lang`目录下。',
   'order' => 2,
   'created_at' => '2024-06-26 09:58:07',
   'updated_at' => '2024-06-26 09:58:07',
   'slug' => 'install',
),
            (object) array(
   'id' => 3,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '1.x升级指南',
   'content' => '# v1.x版本升级指南


### 前言

本章节内容只包含 `1.x` 版本中 `API` 改动的部分，不包含新增特性或对用户使用无影响的改动说明， `2.0` 的具体版本变化说明请参考 [2.0有哪些变化？](https://learnku.com/articles/50781?#reply164307)

**预计升级时间：60 分钟**


### 1.创建新分支，备份配置文件

创建一个新的分支，然后备份配置文件 `config/admin.php` 命名为 `config/admin.bak.php`，方便后续对比配置变动。

### 2.更新composer依赖

先卸载 `1.x` 版本
```bash
composer remove dcat/laravel-admin
```

再安装
```
composer require dcat/laravel-admin:"2.*"
```
如果这一步出现报错，则更改`composer.json`的参数`minimum-stability`的值为`dev`，

安装成功后

1. 删除 `public/vendors` 目录
2. 重新发布资源 `php artisan admin:publish --force`
3. 根据上面备份后的配置文件，把修改过的参数写到新的配置文件 `config/admin.php` 中，这里需要注意的是`1.x`的默认主题色是`indigo`（已被废弃），在新版本中已经替换成`default`了
4. 调整语言包，新版本中语言包目录由 `zh-CN` 变成了 `zh_CN`，需要把自定义的翻译文件移动到新目录，并且 `菜单标题` 的翻译也独立出来到 `menus.php` 中了
5. 运行数据库迁移命令命令 `php artisan migrate` ，新版本中新增了两个表`admin_settings` 以及 `admin_extensions`

### 3.全局更改命名空间

1. 全局搜索命名空间 `Dcat\\Admin\\Controllers` 并替换为 `Dcat\\Admin\\Http\\Controllers`
2. 全局搜索命名空间 `Dcat\\Admin\\Auth` 并替换为 `Dcat\\Admin\\Http\\Auth`


### 4.表格部分变动

1.字段隐藏功能调整，旧版本 `responsive` 方法已废弃，在新版本中开启字段隐藏功能方法如下

```php
// 开启字段选择器功能
$grid->showColumnSelector();

// 设置默认隐藏字段
$grid->hideColumns([\'field1\', ...]);
```

2.表格 `collection`、`fetching` 等方法已被移除，在新版本中可以通过下面的事件代替

```php
use Dcat\\Admin\\Grid;
use Illuminate\\Support\\Collection;

// 使用 Grid\\Events\\Fetched 事件代替 collection
$grid->listen(Grid\\Events\\Fetched::class, function ($grid, Collection $rows) {
    $rows->transform(function ($row) {
        // 更改行数据
        $row[\'name\'] = $row[\'first_name\'].\' \'.$row[\'last_name\'];
        
        return $row;
    });
});

// 使用 Grid\\Events\\Fetching 事件代替 fetching
$grid->listen(Grid\\Events\\Fetching::class, function ($grid) {
    
});
```

3.表格行相关闭包中允许使用模型

```php
$grid->column(\'avatar\')->display(function ({
    // 可直接访问模型相关方法
    return $this->getAvatar();
});
```


4.设置路由前缀方法由 `resource` 调整为 `setResource` 
```php
$grid->setResource(\'auth/users\');
```

5.树形表格 `tree` 方法即将被废弃，将会移动到扩展中心


### 5.表单部分变动

1.调整表单处理响应方法，旧版本中的`success`、`error`、`redirect` 以及 `location` 方法已被移除，
在 `2.0` 中我们让表单的响应方法和 `action` 的响应方法统一了起来，详细用法请参考文档 [表单响应](https://learnku.com/docs/dcat-admin/2.x/action-and-form-response/9690)，示例

```php
$form->saving(function (Form $form) {
    return $form
        ->response()
        ->success(\'保存成功\')
        ->script(\'console.log("执行JS代码")\')
        ->redirect(\'auth/users\');
});
```

如果是在[工具表单](https://learnku.com/docs/dcat-admin/2.x/tools-form/8125)中，用法如下
```php
public function handle(array $input)
{
    ...

    return $this
        ->response()
        ->alert()
        ->success(\'成功\')
        ->detail(\'详细内容\');
}
```

2.调整表单 `block` 布局功能，并废弃 `setDefaultBlockWidth` 方法，详细用法请参考文档 [表单block布局](https://learnku.com/docs/dcat-admin/2.x/table-layout/8822)，示例

```php
$form->block(8, function (Form\\BlockForm $form) {
    $form->title(\'基本设置\');
    $form->showFooter();
    $form->width(9, 2);

    $form->column(6, function (Form\\BlockForm $form) {
        $form->display(\'id\');
        $form->text(\'name\');
        $form->email(\'email\');
        $form->image(\'avatar\');
        $form->password(\'password\');
    });

    $form->column(6, function (Form\\BlockForm $form) {
        $form->text(\'username\');
        $form->email(\'mobile\');
        $form->textarea(\'description\');
    });
});
$form->block(4, function (Form\\BlockForm $form) {
    $form->title(\'分块2\');

    $form->text(\'nickname\');
    $form->number(\'age\');
    $form->radio(\'status\')->options([\'1\' => \'默认\', 2 => \'冻结\'])->default(1);

    $form->next(function (Form\\BlockForm $form) {
        $form->title(\'分块3\');

        $form->date(\'birthday\');
        $form->date(\'created_at\');
    });
});
```


3.废弃表单直接提交，只保留 `ajax` 提交的方式，并重命名 `disableAjaxSubmit` 方法为 `ajax`

```php
$form->ajax(false);
```

4.废弃分步表单，新版本请使用[分步表单扩展](https://github.com/dcat-admin/form-step)代替

6.`map`以及`listbox`、`slider`也即将废弃，并移动扩展中心

7.表单字段扩展功能变动，具体请参考文档[表单字段扩展](https://learnku.com/docs/dcat-admin/2.x/field-management/8108)章节



### 6.数据仓库部分变动

1.数据仓库的接口命名做了简化处理，新的 interface 如下

```php
interface Repository
{
    /**
     * 获取主键名称.
     *
     * @return string
     */
    public function getKeyName();

    /**
     * 获取创建时间字段.
     *
     * @return string
     */
    public function getCreatedAtColumn();

    /**
     * 获取更新时间字段.
     *
     * @return string
     */
    public function getUpdatedAtColumn();

    /**
     * 是否使用软删除.
     *
     * @return bool
     */
    public function isSoftDeletes();

    /**
     * 获取Grid表格数据.
     *
     * @param Grid\\Model $model
     *
     * @return \\Illuminate\\Contracts\\Pagination\\LengthAwarePaginator|Collection|array
     */
    public function get(Grid\\Model $model);

    /**
     * 获取编辑页面数据.
     *
     * @param Form $form
     *
     * @return array|\\Illuminate\\Contracts\\Support\\Arrayable
     */
    public function edit(Form $form);

    /**
     * 获取详情页面数据.
     *
     * @param Show $show
     *
     * @return array|\\Illuminate\\Contracts\\Support\\Arrayable
     */
    public function detail(Show $show);

    /**
     * 新增记录.
     *
     * @param Form $form
     *
     * @return mixed
     */
    public function store(Form $form);

    /**
     * 查询更新前的行数据.
     *
     * @param Form $form
     *
     * @return array|\\Illuminate\\Contracts\\Support\\Arrayable
     */
    public function updating(Form $form);

    /**
     * 更新数据.
     *
     * @param Form $form
     *
     * @return bool
     */
    public function update(Form $form);

    /**
     * 删除数据.
     *
     * @param Form  $form
     * @param array $deletingData
     *
     * @return mixed
     */
    public function delete(Form $form, array $deletingData);

    /**
     * 查询删除前的行数据.
     *
     * @param Form $form
     *
     * @return array|\\Illuminate\\Contracts\\Support\\Arrayable
     */
    public function deleting(Form $form);
}
```


2.`EloquentRepository::eloquent()` 重命名为 `EloquentRepository::model()`

### 7.Section变动

在新版本中 `AdminSection` 已被移除，请使用 `Dcat\\Admin\\Admin::SECTION` 常量代替

```php
use Dcat\\Admin\\Admin;

admin_inject_default_section(Admin::SECTION[\'HEAD\'], function () {
    return ...;
});
```


### 8.扩展

扩展相关变动请参考文档[扩展](https://learnku.com/docs/dcat-admin/2.x/extended-basic-usage/9691)

### 9.登录逻辑
1.登录模板，如果你在旧项目中自定义过登录模板，则需要调整登录模板中的`JS`代码
```js
Dcat.ready(function () {
    // ajax表单提交
    $(\'#login-form\').form({
        validate: true,
    });
});
```

2.登录逻辑，如果重写过登录逻辑，则最后登录成功的响应方法需要使用 `sendLoginResponse`

### 10.其他变动

1.资源注册
```php
use Dcat\\Admin\\Admin;

// 注册资源路径别名
Admin::asset()->alias(\'test\', \'assets/test\');

Admin::asset()->alias(\'名称\', [ 
    \'js\' => [
        // @test 会判定为别名
        \'@test/test.js\',
    ],
    \'css\' => [
        \'@test/test.css\',
    ],
]);


// 加载资源
Admin::asset()->require(\'@名称\');
// 仅加载 js
Admin::js(\'@名称\');
// 仅加载 css
Admin::css(\'@名称\');
```',
   'order' => 3,
   'created_at' => '2024-06-26 10:00:15',
   'updated_at' => '2024-06-26 10:00:15',
   'slug' => '1-x-upgrade-guide',
),
            (object) array(
   'id' => 4,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '版本升级',
   'content' => '# 版本升级须知

### 说明

`Dcat Admin`的版本发行将会参考主流`web框架`的发行策略，尽量降低版本升级带来的影响，小版本和补丁**决不**包含非兼容性更改；同时我们也将会提供更新日志，详细说明新版本的改动以及可能造成的影响。




### 升级命令
升级命令
```bash
composer update dcat/laravel-admin
```

升级成功之后需要运行 `admin:update` 命令进行重新发布语言包、配置文件、前端静态资源等文件，然后**清理浏览器缓存**

```bash
# 发布 语言包、配置文件、前端静态资源、数据迁移文件等
php artisan admin:update
```

运行 `admin:update`，相当于运行

```
php artisan admin:publish --assets --migrations --lang --force
php artisan migrate
``` 

#### 发布文件命令

> 运行 `admin:update` 后一般不需要运行 `admin:publish` 命令

```bash
php artisan admin:publish --force
```

只更新语言包
```bash
php artisan admin:publish --force --lang
```

只更新配置文件
```bash
php artisan admin:publish --force --config
```

只更新前端静态资源
```bash
php artisan admin:publish --force --assets
```

只更新数据库迁徙文件(这个一般不需要更新)
```bash
php artisan admin:publish --force --migrations
```',
   'order' => 4,
   'created_at' => '2024-06-26 10:01:44',
   'updated_at' => '2024-06-26 10:01:44',
   'slug' => 'version-upgrade',
),
            (object) array(
   'id' => 5,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '快速开始',
   'content' => '# 快速开始

在日常开发中，我们可以用代码生成器一键生成增删改查页面代码，非常的方便快捷。

下面将会给大家介绍代码生成器的使用方法，以及一个增删改查页面的基本构成。通过学习下面的内容将可以帮助大家快速理解这个系统的基本使用方法。

## 代码生成器

### 创建数据表

安装完`Laravel`之后会内置一个`users`表的`migration`文件(如果不了解`migration`文件作用，请参考文档[数据库迁移](https://learnku.com/docs/laravel/7.x/migrations/7496))，文件路径为`database/migrations/2014_10_12_000000_create_users_table.php`。

然后我们运行以下命令，在`MySQL`中创建这个数据表

```php
php artisan migrate
```

运行完之后可以看到数据库中已经多了一个`users`表，结构如下

```sql
CREATE TABLE `users` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL, 
 `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL, 
 `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL, 
 `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\', 
 `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\', 
 PRIMARY KEY (`id`), 
 UNIQUE KEY `users_email_unique` (`email`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

### 一键生成增删改查页面

> 如果你的开发环境不是`windows`，请注意要给项目目录设置读写权限，否则可能出现无法生成代码的情况。

**1.**首先打开地址`http://你的域名/admin/helpers/scaffold`，进入代码生成器页面；

**2.**由于前面已经创建好了数据表，所以这里我们可以直接通过页面左上角的第二个下拉选框选择`users`表，选择之后会自动填充字段信息，效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/17a0324d3afd048216a66624ae9efcb6667b76eb23d0f.png)

**3.**修改模型名称为`App\\User`（Laravel 8 以下），或者 `App\\Models\\User`（Laravel 8 及其以上）

**4.**由于`migration`文件、数据表、以及模型文件(使用内置的`App\\User`即可)都已经有了，所以此处我们可以把这三个选项给去掉

**5.**填写字段翻译

最后呈现效果如下
![](http://docs.oneself.icu:10010/storage/markdown/images/4dc5e692c20f1f1c3e6877849426bed7667b7703ce1aa.png)

最后点击创建按钮即可，创建的文件如下

```
app/Admin
├── Controllers
│   └── UserController.php  # 控制器
└── Repositories            # 数据仓库
│   └── User.php
resouces/lang/{当前语言}
└── user.php                # 语言包
```

### 添加路由配置

打开路由配置文件`app/Admin/routes.php`，往里面添加一行：
```
$router->resource(\'users\', \'UserController\');
```

到此，就可以打开浏览器输入地址`http://你的域名/admin/users`访问刚刚创建完的页面了

### 添加左侧菜单

打开`http://你的域名/admin/auth/menu`，添加对应的menu, 然后就能在后台管理页面的左侧边栏看到用户管理页面的链接入口了。

> 其中`uri`填写不包含路由前缀的的路径部分，比如完整路径是`http://你的域名/admin/demo/users`, 那么就填`demo/users`，如果要添加外部链接，只要填写完整的url即可，比如`http://dcat-admin.org/`.

### 菜单翻译

在您的语言文件的`menu_titles`索引中追加菜单标题。
例如“工作单位”标题：

在`resources/lang/{当前语言}/menu.php`中
```php
...
// 用_小写并用_替换空格
\'titles\' => [
     \'work_units\' => \'Unidades de trabajo\'
],
```

### 完成
这样一个简单的`CURD`功能就构建完成了，剩下的工作就是深度构建数据表格和表单了，打开 `app/Admin/Contollers/UserController.php`,找到`form()`和`grid()`方法，然添加构建代码。
更多详细使用请查看[数据表格](https://learnku.com/docs/dcat-admin/1.x/basic-use/8089)和[数据表单](https://learnku.com/docs/dcat-admin/1.x/basic-use/8105)。

## 增删改查功能简易说明

为了便于大家理解增删改查功能的基本用法，下面将给大家简单介绍前面使用生成器生成的代码。

### 控制器

`Dcat Admin`的增删改查页面代码是非常简洁和易懂的，对开发者非常的友好，只需极少的代码即可构建出一个功能完善的后台系统，并且非常简单灵活和易于扩展。

打开`app/Admin/Controllers/UserController.php`可以看到如下代码

```php
<?php

namespace App\\Admin\\Controllers;

use App\\Admin\\Repositories\\User;
use Dcat\\Admin\\Form;
use Dcat\\Admin\\Grid;
use Dcat\\Admin\\Show;
use Dcat\\Admin\\Controllers\\AdminController;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {
            // 这里的字段会自动使用翻译文件
            $grid->column(\'id\')->sortable();
            $grid->column(\'name\');
            $grid->column(\'email\');
            $grid->column(\'email_verified_at\');
            $grid->column(\'password\');
            $grid->column(\'remember_token\');
            $grid->column(\'created_at\');
            $grid->column(\'updated_at\')->sortable();
        
            $grid->filter(function (Grid\\Filter $filter) {
                $filter->equal(\'id\');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new User(), function (Show $show) {
            // 这里的字段会自动使用翻译文件
            $show->field(\'id\');
            $show->field(\'name\');
            $show->field(\'email\');
            $show->field(\'email_verified_at\');
            $show->field(\'password\');
            $show->field(\'remember_token\');
            $show->field(\'created_at\');
            $show->field(\'updated_at\');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new User(), function (Form $form) {
            // 这里的字段会自动使用翻译文件
            $form->display(\'id\');
            $form->text(\'name\');
            $form->text(\'email\');
            $form->text(\'email_verified_at\');
            $form->text(\'password\');
            $form->text(\'remember_token\');
        
            $form->display(\'created_at\');
            $form->display(\'updated_at\');
        });
    }
}
```

### 数据仓库

`Dcat Admin` 构建页面并不直接依赖于`Model`，而是引入了数据仓库作为中间层，让页面的构建不再与数据的读写产生强耦合关系。

数据仓库是`Dcat Admin`中对数据增删改查操作接口的具体实现，更详细用法请参考[数据仓库](https://learnku.com/docs/dcat-admin/1.x/basic-use/8123)。

>  如果你的数据来自`MySQL`，那么你也可以直接使用`Model`实例，底层会自动把`Model`转化为数据仓库实例。这里为了便于大家理解其中的概念，所以创建了数据仓库文件。

我们打开刚刚生成的文件`app/Admin/Repositories/User.php`，可以看到只有如下内容，非常简单

```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use App\\User as UserModel;

class User extends EloquentRepository
{
     protected $eloquentClass = UserModel::class;
 }
```

### 语言包

每个控制器都可以生成自己对应的语言包，并且[数据表格](https://learnku.com/docs/dcat-admin/1.x/basic-use/8089)、[数据表单](https://learnku.com/docs/dcat-admin/1.x/basic-use/8105)和[数据详情](https://learnku.com/docs/dcat-admin/1.x/basic-use/8116)功能都会自动读取里面的翻译。

下面我们打开`UserController`对应的语言包文件`resouces/lang/{当前语言}/user.php`

```php
<?php 
return [
    // labels是自定义标签翻译
    \'labels\' => [
        // 这个是页面 title 翻译
        \'User\' => \'用户\',
		// 默认面包屑翻译，注意这里是跟路由路径相同
		\'users\' => \'用户\',
    ],
    // 表字段翻译
    \'fields\' => [
        \'name\' => \'名称\',
        \'email\' => \'邮箱\',
        \'email_verified_at\' => \'验证时间\',
        \'password\' => \'密码\',
        \'remember_token\' => \'remember_token\',
    ],
    \'options\' => [
    ],
];
```',
   'order' => 5,
   'created_at' => '2024-06-26 10:05:40',
   'updated_at' => '2024-06-26 10:05:40',
   'slug' => 'quick-start',
),
            (object) array(
   'id' => 6,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '开发前必读',
   'content' => '# 开发前必读

## 开发环境请打开debug模式
`Dcat Admin`提供一些开发工具（如代码生成器）需要在 `debug` 模式下才能使用。
建议开发者在开发环境打开`debug`模式，把`.env`配置文件中的参数`APP_DEBUG`值设置为`true`即可。


## 按需引入JS脚本

`Dcat Admin` 使用 `jquery-pjax` 构建无刷新页面（单页应用），并且支持<b>按需加载</b> `JS` 脚本，支持在任意的页面方法（模板文件除外）中引入`JS`脚本，每个页面只需加载当前页面所需要使用到的 `js` 脚本。


示例：

写一个自定义页面，这个页面组件需要引入一些前端静态资源文件

> {tip} `Dcat Admin`构建的是一个单页应用，加载的`JS`脚本只会执行一次，所以初始化操作不能直接放在`JS`脚本中，应该使用`Admin::script`方法载入。

```php
<?php

use Illuminate\\Contracts\\Support\\Renderable;
use Dcat\\Admin\\Admin;

class Card implements Renderable
{
	public static $js = [
	    // js脚本不能直接包含初始化操作，否则页面刷新后无效
		\'xxx/js/card.min.js\',
	];
	public static $css = [
		\'xxx/css/card.min.css\',
	];

	public function script()
	{
		return <<<JS
		console.log(\'所有JS脚本都加载完了\');
		// 初始化操作
		$(\'xxx\').card();
JS;		
	}

	public function render()
	{
		// 在这里可以引入你的js或css文件
		Admin::js(static::$js);
		Admin::css(static::$css);
		
		// 需要在页面执行的JS代码，例如初始化代码
		// 通过 Admin::script 设置的JS代码会自动在所有JS脚本都加载完毕后执行
		Admin::script($this->script());
		
		return view(\'...\')->render();
	}
}
```

在控制器中使用这个组件
```php
use Dcat\\Admin\\Layout\\Content;
use Card;

class HomeController
{
	public function index(Content $content)
	{
		// 使用上面的Card组件
		// Card组件需要用到的静态文件只会在当前请求加载
		// 其他请求不会加载 
		return $content->body(new Card());
	}
}
```


## 在页面中添加JS代码

由于加入了页面按需加载`JS`脚本的功能，所以在本项目内添加的`JS`代码都必须使用`Dcat.ready`方法监听`JS`脚本加载完毕事件，在此事件内的`JS`代码会在所有`JS`脚本都加载完毕后才执行。


使用 `Dcat\\Admin\\Admin::script` 方法添加的代码会自动放在`Dcat.ready`方法内执行。

```php
<?php

use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Layout\\Content;

class UserController
{
   public function index(Content $content)
   {
       Admin::script(
           <<<JS
(function () {
    // 如果有定义局部变量的需求，最好放在匿名函数内，防止变量污染
    var name = \'test\';

    console.log(\'所有JS脚本都加载完毕啦~~\', name)
})()    
JS
       );
       
       return $content->header(...)->body(...);
   }
}
```


如果是在模板文件中添加`JS`代码，则需要把代码放在`Dcat.ready`内执行

```html
<script>
// 用 Dcat.ready() 代替 $()
// 此方法会在所有 js 脚本加载完成后执行
Dcat.ready(function () {
    // 写入你的 js 代码
    console.log(\'所有 js 脚本加载完毕啦~~\');
});
</script>
```

## 页面内容和布局

> {tip} 页面内容的布局功能是`Dcat Admin`的基石，掌握了这个功能的用法，可以非常轻松的使用`Dcat Admin`构建页面或扩展功能，请大家一定要认真阅读。

`Dcat Admin`的布局可参考后台首页的布局文件`app/Admin/Controllers/HomeController.php`的`index()`方法。


`Dcat\\Admin\\Layout\\Content`类用来实现内容区的布局。`Content::body($content)`方法用来添加页面内容。


一个简单的后台页面代码如下：

```php
use Dcat\\Admin\\Layout\\Content;

public function index(Content $content)
{
	// 选填
	$content->header(\'填写页面头标题\');
	
	// 选填
	$content->description(\'填写页面描述小标题\');
	
	// 添加面包屑导航
	$content->breadcrumb(
		[\'text\' => \'首页\', \'url\' => \'/admin\'],
		[\'text\' => \'用户管理\', \'url\' => \'/admin/users\'],
		[\'text\' => \'编辑用户\']
	);

	// 填充页面body部分，这里可以填入任何可被渲染的对象
	return $content->body(\'hello world\');
}

```

其中 `$content->body()` 方法是 `$content->row()` 的别名方法，可以接受任何可字符串化的对象作为参数，可以是字符串、数字、包含了`__toString`方法的对象，实现了`Renderable`、`Htmlable`接口的对象，包括laravel的视图。


### 布局

`dcat-admin`的布局使用bootstrap的栅格系统，每行的长度是12，下面是几个简单的示例：

添加一行内容:

```php
$content->row(\'hello\')

---------------------------------
|hello                          |
|                               |
|                               |
|                               |
|                               |
|                               |
---------------------------------

```

行内添加多列：

```php
$content->row(function(Row $row) {
    $row->column(4, \'foo\');
    $row->column(4, \'bar\');
    $row->column(4, \'baz\');
});
----------------------------------
|foo       |bar       |baz       |
|          |          |          |
|          |          |          |
|          |          |          |
|          |          |          |
|          |          |          |
----------------------------------


$content->row(function(Row $row) {
    $row->column(4, \'foo\');
    $row->column(8, \'bar\');
});
----------------------------------
|foo       |bar                  |
|          |                     |
|          |                     |
|          |                     |
|          |                     |
|          |                     |
----------------------------------

```

列中添加行：

```php
$content->row(function (Row $row) {

    $row->column(4, \'xxx\');

    $row->column(8, function (Column $column) {
        $column->row(\'111\');
        $column->row(\'222\');
        $column->row(\'333\');
    });
});
----------------------------------
|xxx       |111                  |
|          |---------------------|
|          |222                  |
|          |---------------------|
|          |333                  |
|          |                     |
----------------------------------


```


列中添加行, 行内再添加列：

```php
$content->row(function (Row $row) {

    $row->column(4, \'xxx\');

    $row->column(8, function (Column $column) {
        $column->row(\'111\');
        $column->row(\'222\');
        $column->row(function(Row $row) {
            $row->column(6, \'444\');
            $row->column(6, \'555\');
        });
    });
});
----------------------------------
|xxx       |111                  |
|          |---------------------|
|          |222                  |
|          |---------------------|
|          |444      |555        |
|          |         |           |
----------------------------------
```

#### 等宽布局

当列宽度设置为`0`时会使用等宽布局

```php
use Dcat\\Admin\\Layout\\Row;
use Dcat\\Admin\\Layout\\Content;

return Content::make()
	->body(function (Row $row) {
	    $row->column(0, \'foo\');
	    $row->column(0, \'bar\');
	    $row->column(0, \'baz\');
	});
	
----------------------------------
|foo       |bar       |baz       |
|          |          |          |
|          |          |          |
|          |          |          |
|          |          |          |
|          |          |          |
----------------------------------
```

#### no-gutters
`.row`上带有`margin-left: -15px;margin-right: -15px;`属性，你可以在`.row`上上定义`.no-gutters`属性，从而消除这个属性，使页面不会额外宽出`30px`，即`<div class="row no-gutters"...`
```php
$content->row(function (Row $row) {
	// 启用 no-gutters
	$row->noGutters();

	$row->column(9, function (Column $column) {
		$column->row($this->card([\'col-md-12\', 20], \'#4DB6AC\'));
		
		$column->row(function (Row $row) {
			// 启用 no-gutters
			$row->noGutters();

			$row->column(4, $this->card([\'col-md-4\', 30], \'#80CBC4\'));
			$row->column(4, $this->card([\'col-md-4\', 30], \'#4DB6AC\'));
			$row->column(4, function (Column $column) {
				$column->row(function (Row $row) {
					// 启用 no-gutters
					$row->noGutters();

					$row->column(6, $this->card([\'col-md-6\', 30], \'#26A69A\'));
					$row->column(6, $this->card([\'col-md-6\', 30], \'#26A69A\'));
				});
			});
		});
	});
});
```

效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/38f74414d169355de9997e59459b333e667b77d19da98.jpg)




### 构建无菜单栏页面 (full)

通过以上方法构建的页面默认是带有左边菜单栏和顶部导航栏的，
但有时候我们会需要构建一个没有菜单栏和顶部导航栏的完整页面，如登陆页面，或需要在IFRAME中加载的页面等等。


这时候就可以用 `Content::full` 这个方法了，调用了此方法后渲染出来的页面是不带菜单栏和顶部导航栏的，并且还可以使用 `Dcat Admin` 中的所有的功能和组件的，可以显著地提高效率。

下面将通过登录页的实现来演示此功能的用法

控制器
```php
use Dcat\\Admin\\Layout\\Content;

class AuthController extends Controller
{
    public function getLogin(Content $content)
    {
        if ($this->guard()->check()) {
            return redirect($this->redirectPath());
        }
		// 使用full方法构建登陆页面
        return $content->full()->body(view($this->view));
    }
	
	...
}	
```

下面是登陆功能的模板内容，因为控制器中使用了`Content::full`方法构建页面，所以不需要在模板中写`head`，也不需要关心引入哪些静态资源，只需写当前页面的HTML即可，并且还可以使用`Dcat Admin`中的所有功能，如下面用到的表单提交功能。

```html
<style>
    html body {background: #fff;}
</style>

<link rel="stylesheet" href="{{ admin_asset(\'@admin/css/pages/authentication.css\') }}">

<section class="row flexbox-container">
	<!-- 这里是你的登陆页面HTML代码 -->
	...
</section>

<script>
Dcat.ready(function () {
    // ajax表单提交
    $(\'#login-form\').form({
        validate: true,
    });
});
</script>
```

这个登陆页面使用了`ajax`表单提交功能，并且附带了按钮`loading`效果，比原来的登陆功能用户体验更好，大家可以[点这里体验](http://103.39.211.179:8080/admin/auth/login)。


### 事件

系统会在`Dcat\\Admin\\Layout\\Content`类被实例化时和`render()`方法被调用时触发以下两个事件，开发者可以在这两个事件中改变或添加一些行为。

#### 实例化 (resolving)
通过`Content::resolving`方法设置的回调函数会在`Dcat\\Admin\\Layout\\Content`类被实例化时触发；

```php
use Dcat\\Admin\\Layout\\Content;

Content::resolving(function (Content $content) {
    
    $content->view(\'app.admin.content\');
    
});
```

#### 构建页面 (composing)
通过`Content::composing`方法设置的回调函数会在`Dcat\\Admin\\Layout\\Content::render`方法被调用时触发；

```php
use Dcat\\Admin\\Layout\\Content;

Content::composing(function (Content $content) {
    
    $content->view(\'app.admin.content\');
    
});
```

#### 构建完成 (composed)
通过`Content::composed`方法设置的回调函数会在所有通过`Content::row`或`Content::body`方法设置的内容都构建完毕后触发。


```php
use Dcat\\Admin\\Layout\\Content;

class IndexController
{
	public function index(Content $content)
	{
		Content::composed(function (Content $content) {
            // Grid已执行render方法
            
        });
        
        return $content->body(function ($row) {
        	$grid = new Grid(...);
        	
        	...
        	
        	$row->column(12, $grid);
        });
	}
}
```

<a name="admincontroller"></a>
## AdminController

通过上面页面布局的相关内容的学习，我们明白了`Dcat Admin`的页面组成构建的方法，那么一个增删改查功能究竟是怎么实现的呢？我们可以看到一个由代码生成器生成的增删改查控制器代码大概如下所示

```php
use App\\Admin\\Repositories\\User;
use Dcat\\Admin\\Form;
use Dcat\\Admin\\Grid;
use Dcat\\Admin\\Show;
use Dcat\\Admin\\Http\\Controllers\\AdminController;

class UserController extends AdminController
{
    // 数据表格
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {
            ...
        });
    }

    // 数据详情
    protected function detail($id)
    {
        return Show::make($id, new User(), function (Show $show) {
            ...
        });
    }

    // 表单
    protected function form()
    {
        return Form::make(new User(), function (Form $form) {
            ...
        });
    }
}
```
上面的代码主要包含了`grid`、`detail`和`form`，从这些代码中，我们并没有办法改变一个页面的布局，那这个页面究竟是怎么构建的？我们又如何更改页面的布局？我们不妨打开`AdminController`看一看

```php
<?php

namespace Dcat\\Admin\\Controllers;

use Dcat\\Admin\\Layout\\Content;
use Illuminate\\Routing\\Controller;

class AdminController extends Controller
{
    // 页面标题
    protected $title;

    // 页面描述信息
    protected $description = [
        //        \'index\'  => \'Index\',
        //        \'show\'   => \'Show\',
        //        \'edit\'   => \'Edit\',
        //        \'create\' => \'Create\',
    ];

    // 指定语言包名称，默认与当前控制器名称相对应
    protected $translation;

    // 返回页面标题
    protected function title()
    {
        return $this->title ?: admin_trans_label();
    }

    // 返回描述信息
    protected function description()
    {
        return $this->description;
    }

    // 列表页
    public function index(Content $content)
    {
        return $content
            ->title($this->title())
            ->description($this->description()[\'index\'] ?? trans(\'admin.list\'))
            ->body($this->grid());
    }

    // 详情页
    public function show($id, Content $content)
    {
        return $content
            ->title($this->title())
            ->description($this->description()[\'show\'] ?? trans(\'admin.show\'))
            ->body($this->detail($id));
    }

    // 编辑页
    public function edit($id, Content $content)
    {
        return $content
            ->title($this->title())
            ->description($this->description()[\'edit\'] ?? trans(\'admin.edit\'))
            ->body($this->form()->edit($id));
    }

    // 新增页
    public function create(Content $content)
    {
        return $content
            ->title($this->title())
            ->description($this->description()[\'create\'] ?? trans(\'admin.create\'))
            ->body($this->form());
    }

    // 修改接口
    public function update($id)
    {
        return $this->form()->update($id);
    }

    // 新增接口
    public function store()
    {
        return $this->form()->store();
    }

    // 删除/批量删除接口
    public function destroy($id)
    {
        return $this->form()->destroy($id);
    }
}
```

现在是不是就可以明白整个页面的组成部分了呢？其实系统内很多代码都是见名知意、简单易懂的，很多时候我们只需要通过阅读代码就可以知道用法。
例如我们要更改页面标题，通过阅读这段代码，就可以得知可以通过重写`title`方法或更改翻译文件的方式实现，是不是非常简单？

下面我们通过实现一个数据表格 + 数据统计卡片的列表页面，来演示一下更改页面布局的实际应用

```php
use App\\Admin\\Metrics\\Examples\\NewDevices;
use App\\Admin\\Metrics\\Examples\\NewUsers;
use App\\Admin\\Metrics\\Examples\\TotalUsers;
use Dcat\\Admin\\Layout\\Content;
use Dcat\\Admin\\Layout\\Row;

public function index(Content $content)
{
    return $content
        ->title($this->title())
        ->description($this->description()[\'index\'] ?? trans(\'admin.list\'))
        ->body(function (Row $row) {
            $row->column(4, new TotalUsers());
            $row->column(4, new NewUsers());
            $row->column(4, new NewDevices());
        })
        ->body($this->grid());
}
```

实现效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/20385a752995bac857316845ed48df58667b77ec12c51.png)


<a name="bootstrap-styles"></a>
## Bootstrap4公共样式

`Dcat Admin`采用`bootstrap4`的栅格系统对页面进行布局，既简单又强大，开始开发前需要对此有所了解，另外`bootsrap4`提供了非常多非常有用的[公共样式](https://getbootstrap.net/docs/utilities/borders/)，对编写页面组件非常有帮助，能显著提高开发效率，建议编写组件前先查阅一遍文档，以下是推荐学习的样式列表：

- [栅格布局](https://getbootstrap.net/docs/layout/grid/)
- [Display显示属性](https://getbootstrap.net/docs/utilities/display/) 通过我们的显示实用程序，可以快速、有效地切换组件的显示值和更多，包括对一些更常见的值的支持，此样式列表对响应式布局非常有帮助。
- [flex弹性布局](https://getbootstrap.net/docs/utilities/flex/) 引入新的Flex弹性布局，可以实现通过一整套响应灵活的实用程序，快速管理栅格的列、导航、组件等的布局、对齐和大小。通过进一度的定义CSS，还可以实现更复杂的展示样式。
- [颜色(Color)](https://getbootstrap.net/docs/utilities/colors/) 通过颜色传达意义、表达不同的模块，这有一系列的定义方法，包括支持链接、悬停、选中等状态相关的的样式集。
- [Float浮动属性](https://getbootstrap.net/docs/utilities/float/) 使用我们的响应式float浮动通用样式，能在任何设备断点（浏览器尺寸）上切换浮动。                             
- [规格(sizi)](https://getbootstrap.net/docs/utilities/sizing/) 使用系统宽度和高度样式，轻松地定义任何元素的宽或高（相对于其父级）
- [间隔(spacing)](https://getbootstrap.net/docs/utilities/spacing/) 内置了各种的快速缩进、隔离、填充等间距处理工具，响应余量和填充实用程序类来修改元素的外观。
- [文本处理](https://getbootstrap.net/docs/utilities/text/) 用于控制文本的对齐、组合、字重等示例以及使用文档。
- [垂直对齐(vertical align)](https://getbootstrap.net/docs/utilities/vertical-align/) 轻松更改内联、内嵌块、内联表和表格单元格元素的垂直对齐方式。


### 内置样式
除了前面提到的[`bootstrap4`公共样式](https://getbootstrap.net/docs/utilities/borders/)，系统还内置了以下常用样式：


#### 颜色
请参考[颜色表样式](https://learnku.com/docs/dcat-admin/2.x/theme-and-color/8085#f8e56e)

#### 阴影
<style>
	.shadow-item {
		width:120px;height:100px;line-height:100px;margin:5px 10px;display:inline-block;text-align:center;
	}
</style>

<div class="shadow-item" style="box-shadow:0 2px 4px 0 rgba(0,0,0,.08);">
	<code>.shadow</code>
</div>
<div class="shadow-item" style="box-shadow:0 3px 1px -2px rgba(0,0,0,.05), 0 2px 2px 0 rgba(0,0,0,.05), 0 1px 5px 1px rgba(0,0,0,.05);">
	<code>.shadow-100</code>
</div>
<div class="shadow-item" style="box-shadow:0 3px 1px -2px rgba(0,0,0,.1), 0 2px 2px 0 rgba(0,0,0,.1), 0 1px 5px 1px rgba(0,0,0,.1)">
	<code>.shadow-200</code>
</div>',
   'order' => 6,
   'created_at' => '2024-06-26 10:07:45',
   'updated_at' => '2024-06-26 10:07:45',
   'slug' => 'required-reading-before-development',
),
            (object) array(
   'id' => 7,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '主题与颜色',
   'content' => '# 主题与颜色

### 切换主题

`Dcat Admin`支持主题切换功能，目前内置了三种主题色：`blue`、`blue-light`、`green`，可通过配置参数`admin.layout.color`进行切换。


打开配置文件`config/admin.php`
```php
     \'layout\' => [
         \'color\' => \'blue\',
         
         ...
     ],
     
     ...
```

部分主题色预览


![](http://docs.oneself.icu:10010/storage/markdown/images/20385a752995bac857316845ed48df58667b78eab5e6b.png)
![](http://docs.oneself.icu:10010/storage/markdown/images/54ca38f9c7c6b37360ebb6fd870bf58c667b78aa6c4c3.png)
![](http://docs.oneself.icu:10010/storage/markdown/images/373c01a5bf652077f7f318a438274a16667b78b7a0c06.png)

<a name="custom"></a>
### 自定义主题配色

>  需要注意的是，如果自定义了主题之后，每次更新新版本，都需要重新编译一次你的自定义主题！！！

开发者可以通过这个功能随意添加自己想要的主题配色，在使用这个功能之前需要先安装[NodeJs](http://nodejs.cn/)，没安装的同学前往[http://nodejs.cn/](http://nodejs.cn/)下载安装即可。

安装完`NodeJs`之后可打开命令行运行`npm -v`测试一下是否安装成功。

```bash
npm -v
```

如果正常返回版本号，则说明已安装成功，同时建议使用淘宝镜像
```bash
npm config set registry https://registry.npm.taobao.org
```

然后运行以下命令编译自定义主题的文件，只需输入主题的名称和主题颜色代码(`十六进制`)即可。
这里我们以生成一个`orange`主题为例

> 这个命令第一次运行时需要较长时间，请耐心等待。如果运行失败，请尝试给`vendor`目录写权限。

```bash
php artisan admin:minify orange --color fbbd08 --publish
```

上面的命令的意思是生成一个`orange`主题，颜色代码为`#fbbd08`，并且生成之后自动发布静态资源。如果编译成功，命令行会输出以下内容
```bash
...

 DONE  Compiled successfully in 48001ms8:24:28 PM


                                              Asset      Size  Chunks
               Chunk Names
               /resources/dist/adminlte/adminlte.js  29.7 KiB       0  [emitted]
               /resources/dist/adminlte/adminlte
           /resources/dist/adminlte/adminlte.js.map  87.8 KiB       0  [emitted]
 [dev]         /resources/dist/adminlte/adminlte
               /resources/dist/dcat/extra/action.js   3.7 KiB       1  [emitted]
               /resources/dist/dcat/extra/action
           /resources/dist/dcat/extra/action.js.map  12.9 KiB       1  [emitted]
 [dev]         /resources/dist/dcat/extra/action
          /resources/dist/dcat/extra/grid-extend.js  4.87 KiB       2  [emitted]
               /resources/dist/dcat/extra/grid-extend
      /resources/dist/dcat/extra/grid-extend.js.map  21.7 KiB       2  [emitted]
 [dev]         /resources/dist/dcat/extra/grid-extend
    /resources/dist/dcat/extra/resource-selector.js   5.8 KiB       3  [emitted]
               /resources/dist/dcat/extra/resource-selector
/resources/dist/dcat/extra/resource-selector.js.map    24 KiB       3  [emitted]
 [dev]         /resources/dist/dcat/extra/resource-selector
               /resources/dist/dcat/extra/upload.js  17.2 KiB       4  [emitted]
               /resources/dist/dcat/extra/upload
           /resources/dist/dcat/extra/upload.js.map  66.8 KiB       4  [emitted]
 [dev]         /resources/dist/dcat/extra/upload
                /resources/dist/dcat/js/dcat-app.js  88.8 KiB       5  [emitted]
               /resources/dist/dcat/js/dcat-app
            /resources/dist/dcat/js/dcat-app.js.map   164 KiB       5  [emitted]
 [dev]         /resources/dist/dcat/js/dcat-app
        resources/dist/adminlte/adminlte-orange.css   656 KiB       0  [emitted]
        [big]  /resources/dist/adminlte/adminlte
        resources/dist/dcat/css/dcat-app-orange.css    43 KiB       0  [emitted]
               /resources/dist/adminlte/adminlte
      resources/dist/dcat/extra/markdown-orange.css  1.72 KiB       0  [emitted]
               /resources/dist/adminlte/adminlte
          resources/dist/dcat/extra/step-orange.css  8.56 KiB       0  [emitted]
               /resources/dist/adminlte/adminlte
        resources/dist/dcat/extra/upload-orange.css  6.42 KiB       0  [emitted]
               /resources/dist/adminlte/adminlte
               

Copied Directory [\\dcat-admin\\resources\\dist] To [\\public\\vendors\\dcat-admin]
Publishing complete.
Compiled views cleared!
```

主题文件编译成功之后，还需要在`app/Admin/bootstrap.php`中加入以下代码

```php
Dcat\\Admin\\Color::extend(\'orange\', [
    \'primary\'        => \'#fbbd08\',
    \'primary-darker\' => \'#fbbd08\',
    \'link\'           => \'#fbbd08\',
]);
```

最后把你的配置参数`admin.layout.color`的值设置为`orange`就行了。


<a name="darkmode"></a>
### 深色模式

![](http://docs.oneself.icu:10010/storage/markdown/images/4fea5bd49618faa6a48c73f21ff85600667b790278705.png)

#### 启用切换按钮

通过配置参数 `admin.layout.dark_mode_switch` 可以启用或禁用深色模式切换开关。开启后会在页面顶部导航栏中增加一个开关按钮，点击可以切换深色和明亮模式，并且会把状态保存在`localStorage`中。

```php
     \'layout\' => [
         \'dark_mode_switch\' => true,
         
         ...
     ],
     
     ...
```

效果如下
![](http://docs.oneself.icu:10010/storage/markdown/images/0e82e0e09cfe86006130d0a31fdeff1f667b791b0bc92.gif)


#### 默认深色

打开配置文件`config/admin.php`，写入
```php
     \'layout\' => [
         \'body_class\' => \'dark-mode\',
         
         ...
     ],
     
     ...
```


<a name="sidebar"></a>
### 菜单样式
#### 顶部横向 (Horizontal)

设置配置参数 `admin.layout.horizontal_menu` 的值为 `true` 开启此功能，效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/3c1808e07cd41673af890cb15d442cbc667b79367b127.png)

#### sidebar-separate

通过配置参数 `admin.layout.sidebar_style` 可以配置菜单样式（如果配置文件中不存在这个参数则可以手动添加），支持三个值 `light`、`primary`、`dark`，默认为 `light`

>  `sidebar_dark`参数即将被废弃！`sidebar_style`参数会覆盖`sidebar_dark`参数，只有当`sidebar_style`不存在时`sidebar_dark`才会生效！！！

```php
     \'layout\' => [
     	 // 支持 light、primary、dark
         \'sidebar_style\' => \'light\',
         
         ...
     ],
     
     ...
```

`light` 效果

![](http://docs.oneself.icu:10010/storage/markdown/images/710eadef207acd31d8891e4b3207af54667b795952f51.jpeg)

`primary` 效果

![](http://docs.oneself.icu:10010/storage/markdown/images/f4b4da6a3cffe61dab20fc8b19b851ad667b797c7cfb9.jpg)

![](http://docs.oneself.icu:10010/storage/markdown/images/15a4ec70fdad53b18d4c9db253ed56e4667b7992e8077.jpg)

### PHP颜色管理

作为日常开发我们离不开颜色的使用，`Dcat Admin`内置了颜色管理模块，此功能可以很方便的配合主题切换功能，让页面颜色与主题色相适应！

通过 `Dcat\\Admin\\Admin::color()` 这个服务可以很轻松的获取常用颜色（可参考[颜色表与样式](#颜色表与样式)）。

#### 获取内置颜色

通过`Color::get`或魔术方法可以获取颜色代码，当通过`Color::get`获取的颜色不存在时，会返回参数的原始值。

```php
<?php
use Dcat\\Admin\\Admin;

// get 方法获取颜色
echo Admin::color()->get(\'primary\'); // 输出 #5c6bc6

// 通过魔术方法获取颜色
echo Admin::color()->primary(); // 输出 #5c6bc6
``` 

#### 颜色淡化

通过`Color::lighten`方法或魔术方法可以获取淡化后的颜色的16进制颜色代码。

`Color::lighten`方法接收两个参数：

- `$name` `string` 颜色别名
- `$amt` `int` 颜色偏差值，值越大颜色越`淡`

```php
echo Admin::color()->lighten(\'primary\', 10); // 输出 #6675d0
// 也可以这样使用，注意这里的参数要传负数
echo Admin::color()->primary(-10); // 输出 #6675d0
```

也支持直接传颜色代码

```php
echo Admin::color()->lighten(\'#5c6bc6\', 10); // 输出 #6675d0
```

#### 颜色深化

通过`Color::darken`方法或魔术方法可以获取深化后的颜色的16进制颜色代码。

`Color::darken`方法接收两个参数：

- `$name` `string` 颜色别名
- `$amt` `int` 颜色偏差值，值越大颜色越`深`

```php
echo Admin::color()->darken(\'primary\', 10); // 输出 #5261bc
// 也可以这样使用
echo Admin::color()->primary(10); // 输出 #5261bc
```

也支持直接传颜色代码

```php
echo Admin::color()->darken(\'#5c6bc6\', 10); // 输出 #5261bc
```

#### 颜色透明化
通过`Color::alpha`方法可以设置颜色的透明度。

`Color::alpha`方法接收两个参数：

- `$name` `string` 颜色别名
- `$alpha` `float` 透明度，`0 ~ 1`之间的值，值越小透明度越高

```php
echo Admin::color()->alpha(\'primary\', 0.1); // 输出 rgba(92, 107, 198, 0.1)
```

也支持直接传颜色代码

```php
echo Admin::color()->alpha(\'5c6bc6\', 0.1); // 输出 rgba(92, 107, 198, 0.1)
```

#### 获取所有内置颜色

通过`Color::all`方法可以获取所有内置颜色的16进制代码，此方法返回一个数组

```php
$allColors = Admin::color()->all();
```

### JS颜色管理

`JS`模块中同样也包含颜色管理功能，通过`Dcat.color`对象可以像在PHP代码中一样管理颜色。

#### 获取内置颜色

在`JS`代码中可以通过以下三种方式获取颜色代码
```php
Admin::script(
<<<JS
	// 方式1
	var primary = Dcat.color.primary;
	
	// 方式2
	var primary = Dcat.color[\'primary\'];
	
	// 方式3
	var primary = Dcat.color.get(\'primary\');
	
	console.log(primary);  // 打印 #5c6bc6
JS
);
```

#### 颜色淡化

通过`Dcat.color.lighten`方法或魔术方法可以获取淡化后的颜色的16进制颜色代码。

`color.lighten`方法接收两个参数：

- `name` `string` 颜色别名
- `amt` `int` 颜色偏差值，值越大颜色越`淡`

```php
Admin::script(
    <<<JS
    var primary = Dcat.color.lighten(\'primary\', 10)
    
    console.log(primary); // 输出 #6675d0
JS    
);
```

也支持直接传颜色代码

```js
var primary = Dcat.color.lighten(\'5c6bc6\', 10);
console.log(primary); // 输出 #6675d0
```

#### 颜色深化

通过`Dcat.color.darken`方法或魔术方法可以获取深化后的颜色的16进制颜色代码。

`color.darken`方法接收两个参数：

- `name` `string` 颜色别名
- `amt` `int` 颜色偏差值，值越大颜色越`深`

```php
Admin::script(
    <<<JS
    var primary = Dcat.color.darken(\'primary\', 10)
    
    console.log(primary); // 输出 #5261bc
JS    
);
```

也支持直接传颜色代码

```php
var primary = Dcat.color.darken(\'5c6bc6\', 10)

console.log(primary); // 输出 #5261bc
```

#### 颜色透明化
通过`Dcat.color.alpha`方法可以设置颜色的透明度。

`color.alpha`方法接收两个参数：

- `$name` `string` 颜色别名
- `$alpha` `float` 透明度，`0 ~ 1`之间的值，值越小透明度越高

```php
Admin::script(
    <<<JS 
    var primary = Dcat.color.alpha(\'primary\', 0.1) 
 
    console.log(primary); // 输出 rgba(92, 107, 198, 0.1)
JS    
);
```

也支持直接传颜色代码

```php
Admin::script(
    <<<JS
    var primary = Dcat.color.alpha(\'5c6bc6\', 0.1)
    
    console.log(primary); // 输出 rgba(92, 107, 198, 0.1)
JS    
);
```

#### 获取所有内置颜色

通过`Dcat.color.all`方法可以获取所有内置颜色的16进制代码，此方法返回一个键值对对象。

```js
var allColors = Dcat.color.all();
```

<a name="颜色表与样式"></a>
### 颜色表与样式

`Dcat Admin`前端是采用`bootstrap4`编写的，因此首先要学习[Bootstrap4 颜色(Color)样式](https://getbootstrap.net/docs/utilities/colors/)的使用，这里不再赘述相关内容。

以下是`Dcat Admin`中常用颜色样式表，其中以`.bg-*` 开头的样式是背景色，以`.text-` 开头的样式是文本颜色

![](http://docs.oneself.icu:10010/storage/markdown/images/aeb28f4e80111656c1c1f1a6c5923e15667b79b05c4a3.png)
![](http://docs.oneself.icu:10010/storage/markdown/images/f5fba4a69141e530366f7fb750e4396f667b79bf35858.png)
![](http://docs.oneself.icu:10010/storage/markdown/images/089590d4a1a0e337e4c49ba924e27873667b79cbf0dc7.png)
![](http://docs.oneself.icu:10010/storage/markdown/images/46f6334fcbfc3e5fd0cdd904e36cf2c7667b79dce8b20.png)',
   'order' => 7,
   'created_at' => '2024-06-26 10:16:18',
   'updated_at' => '2024-06-26 10:16:18',
   'slug' => 'theme-and-color',
),
            (object) array(
   'id' => 8,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '静态资源',
   'content' => '# 静态资源加载

`Dcat Admin`支持了`js`脚本按需加载的功能，开发者只需在控制器中或其他任意位置（包括`view`）中引入需要用到的`js`组件即可，而无需在项目初始化时引入所有的`js`组件。


### 更改静态资源域名

打开配置文件`config/admin.php`，找到`assets_server`参数进行更改即可；也可以在`.env`中加上

```dotenv
ADMIN_ASSETS_SERVER=http://xxx.com
```

### 注册路径别名

打开`app/Admin/bootstrap.php`，然后加入以下代码

```php
Admin::asset()->alias(\'@my-name1\', \'assets/admin1\');
Admin::asset()->alias(\'@my-name2\', \'assets/admin2\');

// 也可以批量注册
Admin::asset()->alias([
	\'@my-name1\' => \'assets/admin1\',
	\'@my-name2\' => \'assets/admin2\',
]);
```

使用别名

```php
Admin::js(\'@my-name1/index.js\');
Admin::css(\'@my-name1/index.css\');
```

### 注册组件

当某个组件的`js`和`css`文件比较多的话，我们可以把这些静态资源文件统一注册成一个组件，这样使用的时候会更方便。打开`app/Admin/bootstrap.php`，然后加入以下代码

```php
Admin::asset()->alias(\'@editor-md\', [
	\'js\' => [
		// 支持使用路径别名
		\'@admin/dcat/plugins/editor-md/lib/raphael.min.js\',
		\'@admin/dcat/plugins/editor-md/lib/marked.min.js\',
		\'@admin/dcat/plugins/editor-md/lib/prettify.min.js\',
		\'@admin/dcat/plugins/editor-md/lib/jquery.flowchart.min.js\',
		\'@admin/dcat/plugins/editor-md/editormd.min.js\',
	],
	\'css\' => [
		\'@admin/dcat/plugins/editor-md/css/editormd.preview.min.css\',
		\'@admin/dcat/extra/markdown.css\',
	],
]);
```

使用

```php
Admin::requireAssets([\'@editor-md\']);
```

如果你只需要加载这个组件的`js`或`css`，并不想加载所有文件，那么可以用以下方法

```php
// 只加载js文件
Admin::js(\'@editor-md\');

// 只加载css文件
Admin::css(\'@editor-md\');
```

使用动态参数

```php
use Dcat\\Admin\\Admin;

// 注册前端组件别名
// {lang} 为动态参数
Admin::asset()->alias(\'@test\', [
    \'js\' => [\'/vendor/test/js/{lang}.min.js\'],
]);

// {lang} 会被替换为 zh_CN
Admin::requireAssets(\'@test\', [\'lang\' => \'zh_CN\']);
// 也可以这样使用
Admin::requireAssets(\'@test?lang=zh_CN\');
```


### 加载js脚本

`Admin::js`方法可以引入`js`脚本，使用如下：
```php
class UserController extend Controller
{
    public function index()
    {
        Admin::js(\'/assets/js/index.js\');
        
        Admin::js([
            \'/assets/js/index2.js\'
        ]);
    }
}
```

### 加载css脚本

`Admin::css`方法可以引入`css`脚本，使用如下：
```php
class UserController extend Controller
{
    public function index()
    {
        Admin::css(\'/assets/css/index.css\');
        
        Admin::css([
            \'/assets/css/index2.css\'
        ]);
    }
}
```

### 动态添加js代码

`Admin::script`方法可以动态添加`js`代码，使用如下：
```php
    public function index()
    {
        Admin::script(
            <<<JS
    console.log(\'Hello world!\');
JS            
        );
    }
```

### 动态添加css代码

`Admin::style`方法可以动态添加`css`代码，使用如下：
```php
    public function index()
    {
        Admin::style(
            <<<CSS
    body {
        color: #333;
    }
CSS            
        );
    }
```

### 在模板中引入静态资源
在模板中手动引入静态资源需要使用`admin_asset`函数：

```html
// 引入css
<link rel="stylesheet" href="{{ admin_asset("vendor/dcat-admin/dcat-admin/main.min.css") }}">

// 引入js
<script src="{{ admin_asset(\'vendor/dcat-admin/dcat-admin/main.min.js\')}}"></script>
```

### 在模板中添加js代码

要在模板中添加的`js`代码需要放在`Dcat.ready`方法内执行，这样才能保证你的`js`代码在所有`js`脚本加载完成之后执行。

```html
<script>
Dcat.ready(function () {
   console.log(\'所有js都加载完成了\'); 
});
</script>
```',
   'order' => 8,
   'created_at' => '2024-06-26 10:16:50',
   'updated_at' => '2024-06-26 10:16:50',
   'slug' => 'static-resources',
),
            (object) array(
   'id' => 9,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '视图与自定义页面',
   'content' => '# 视图与自定义页面

## 视图


在`Dcat Admin`中我们可以用`admin_view`函数渲染视图，这个功能借鉴了`vue`的设计思想，可以把`HTML`、`CSS`和`JS`代码写在同一个模板文件中，让代码分层更清晰更简洁易读，如

```html
<div class="my-class">...</div>

<style>
	.my-class {
		color: blue;
	}
</style>

<script require="@test1,@test2" init=".my-class">
	$this.css({background: \'red\'})
</script>
```

在`php`中渲染这个视图
```php
public function index(Content $content)
{
	return $content->body(admin_view(\'...\'));
}
```

#### 示例解析 

上面示例中的代码，其实相当于下面的代码

```html
<div class="my-class">...</div>
```

```php
public function index(Content $content)
{
	admin_require_assets([\'@test1\', \'@test2\']);
	
	admin_style(\'.my-class {
		color: blue;
	}\');
	
	admin_script(
		<<<JS
Dcat.init(\'.my-class\', function (\\$this, id) {
	\\$this.css({background: \'red\'})
});
JS
	);

	return $content->body(view(\'...\'));
}
```

很显然，使用`admin_view`渲染视图会让你的代码更简洁易读，关于`Dcat.init`以及`script`标签中的`init`和`require`属性的用法，请参考文档[静态资源](https://learnku.com/docs/dcat-admin/2.x/static-resources/9720)以及[动态监听元素生成 (init)](https://learnku.com/docs/dcat-admin/2.x/js-component/8087)章节。

## 自定义页面

在`Dcat Admin`中构建自定义页面非常简单，可以参考如下两个例子


### 示例1

> {tip} `Dcat Admin`构建的是一个单页应用，加载的`JS`脚本只会执行一次，所以初始化操作不能直接放在`JS`脚本中，应该使用`Admin::script`方法载入。

```php
<?php

namespace App\\Admin\\Pages;

use Illuminate\\Contracts\\Support\\Renderable;

class MyPage implements Renderable
{
	public function render()
	{
		return admin_view(\'admin.pages.my-page\');
	}
}
```

视图`admin.pages.my-page`，注意视图代码里面不要包含`<body>`和`<html>`等标签
```html
<div class="my-class">
  <h3>自定义页面演示</h3>
</div>

<!-- 
 	引入页面所需的静态资源，这里会按需加载
	js脚本不能直接包含初始化操作，否则页面刷新后无效 
-->
{!! admin_js([\'xxx/js/page.min.js\']) !!}
{!! admin_css([\'xxx/js/page.min.css\']) !!}

<script init=".my-class">
    // js代码也可以放在模板里面
    console.log(\'所有JS脚本都加载完了!!!\');
    
    $this.on(\'click\', function () {
        ...
    });
</script>
```

使用

```php
public function index(Content $content)
{
    return $content->body(new MyPage());
}
```


### 示例2

后台的仪表盘页面`/admin`，也可以看做是一个自定义页面，代码实现如下
```php
public function index(Content $content)
{
    return $content
        ->header(\'Dashboard\')
        ->description(\'Description...\')
        ->body(function (Row $row) {
            $row->column(6, function (Column $column) {
                $column->row(Dashboard::title());
                $column->row(new Examples\\Tickets());
            });

            $row->column(6, function (Column $column) {
                $column->row(function (Row $row) {
                    $row->column(6, new Examples\\NewUsers());
                    $row->column(6, new Examples\\NewDevices());
                });

                $column->row(new Examples\\Sessions());
                $column->row(new Examples\\ProductOrders());
            });
        });
}
```',
   'order' => 9,
   'created_at' => '2024-06-26 10:17:30',
   'updated_at' => '2024-06-26 10:17:30',
   'slug' => 'custom-page',
),
            (object) array(
   'id' => 10,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '多应用(多后台)',
   'content' => '# 多应用 (多后台)


默认安装后使用的是单应用模式，如果你想在同一个`laravel`项目中使用多应用模式，那么可以采用多后台模式，最终项目中的目录结构大概如下

```
app
 ├──Admin
 │   ├── Controllers
 │   │   ├── ExampleController.php
 │   │   └── HomeController.php
 │   ├── Metrics
 │   │   └── ...
 │   ├── bootstrap.php
 │   └── routes.php
 │
 ├──Admin2
 │    └── ...
 │   
 │──Admin3
 │    └── ...
 ...
```

### 生成新应用

运行命令，此命令只接受一个参数：应用名称，注意这里的应用名称请一定要使用**大驼峰风格**命名

```php
php artisan admin:app NewAdmin
```

运行成功后你的项目中会新增一个新的应用目录`app/NewAdmin`，以及新的配置文件`config/new-admin.php`

```
app
 └──Admin
    ├── Controllers
    │   ├── ExampleController.php
    │   └── HomeController.php
    ├── Metrics
    │   └── ...
    ├── bootstrap.php
    └── routes.php
config
 └──new-admin.php
```

### 启用

新应用生成完之后，就可以开始启用这个新应用了，打开配置文件`config/admin.php`，加入以下代码

```php
return [
    ...
    
    \'multi_app\' => [
        // 与新应用的配置文件名称一致
        // 设置为true启用，false则是停用
        \'new-admin\' => true,
    ],

];
```

然后就可以打开浏览器访问这个新应用了`http://localhost:8000/new-admin`。


### 更改路由前缀

目前只能通过路由前缀区分不同应用，如果你想要更改应用的前缀，可以打开配置文件`new-admin.php`找到`route.prefix`参数进行更改即可

### 更改菜单

如果你想要在新应用中展示不同的菜单，可以参考以下方法

1.首先需要创建新的菜单表以及其关联表
```sql
CREATE TABLE `new_admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT \'0\',
  `order` int(11) NOT NULL DEFAULT \'0\',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `new_admin_permission_menu` (
  `permission_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `admin_permission_menu_permission_id_menu_id_index` (`permission_id`,`menu_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `new_admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

2.创建新的菜单模型
```php
<?php

namespace App\\Models;

use Dcat\\Admin\\Models\\Menu;

class NewMenu extends Menu
{
    protected $table = \'new_admin_menu\';
}
```

3.打开新应用的配置文件`config/new-admin.php`，然后修改以下参数
```php
return [
    ...
	
	\'database\' => [

	  ...

	  // 写入新的模型和菜单表
	  \'menu_table\' => \'new_admin_menu\',
	  \'menu_model\' => App\\Models\\NewMenu::class,

      ...
	  
	  // 新的中间表
	  \'role_menu_table\' => \'new_admin_role_menu\',
	  \'permission_menu_table\' => \'new_admin_permission_menu\',
	],
];
```

这样新的应用就可以使用独立的菜单功能了

### 更改用户和权限

自定义用户和权限可以参考以上更改菜单的方式。另外如果是自定义用户的话，还需要更改配置文件`config/new-admin.php`中的以下参数

```php
   ...

   \'auth\' => [
        ...
		
         \'guard\' => \'new-admin\', // 必须是一个新的名字
        
		\'guards\' => [
			\'new-admin\' => [
				\'driver\'   => \'session\',
				\'provider\' => \'new-admin\', // 必须是一个新的名字
			],
		],

		\'providers\' => [
			\'new-admin\' => [ // 必须是一个新的名字
				\'driver\' => \'eloquent\',
				// 这里换成新用户表的模型
				\'model\'  => App\\Models\\NewAdministrator::class,
			],
		],

        ...

    ],
```


### 使用不同域名区分应用

默认是通过路由前缀区分应用的，如果想要使用域名区分应用，只需要更改如下配置即可

```php
    \'route\' => [
        \'domain\' => \'dev.dcat.com\', // 配置你的域名

        \'prefix\' => \'\', // 路由前缀建议设置为空

        \'namespace\' => \'App\\\\Admin\\\\Controllers\',

        \'middleware\' => [\'web\', \'admin\'],
    ],
```',
   'order' => 10,
   'created_at' => '2024-06-26 10:18:06',
   'updated_at' => '2024-06-26 10:18:06',
   'slug' => 'multi-application-multi-background',
),
            (object) array(
   'id' => 11,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => 'JS组件',
   'content' => '# JS组件

`Dcat Admin`内置了一些常用的JS功能组件，通过全局变量`Dcat`可以访问到这些功能方法。

## 监听JS脚本加载完毕事件 (ready)

通过`Dcat.ready`方法设置的回调函数会在所有的`JS`脚本都加载完毕后执行。

> 只有在模板文件中写`JS`代码才需要使用`Dcat.ready`，当在`php`代码中使用`Dcat\\Admin\\Admin::script`方法添加`JS`代码时是不需要使用`Dcat.ready`方法的。因为在构建页面的时候系统会自动把代码放在`Dcat.ready`事件内执行。

```html
<div>...</div>
<script>
Dcat.ready(function () {
    // 写你的逻辑
    
    console.log(\'所有JS脚本都加载完了\');
});
</script>
```

<a name="init"></a>
## 动态监听元素生成 (init)

通过`Dcat.init`可以监听动态生成的页面元素并设置一个回调，下面来举一个简单的例子来演示用法：

假如一个元素是`JS`动态生成的，如果我们需要对这个元素绑定一个点击事件的话，那么我们通常需要这么做

```html
<div class="selector">test</div>

<script>
Dcat.ready(function () {
    // 需要先 off 再 on 否则页面刷新后会造成重复绑定问题
    $(document).off(\'click\', \'.selector\').on(\'click\', \'.selector\', function () {
        ...
    })
});
</script>
```

上面这种做法一来比较麻烦，需要先`off`再`on`；二来无法对动态生成的元素做一些特殊处理，例如你想在`.selector`生成后改变背景颜色，这个操作就没办法做到。

在`Dcat Admin`中我们可以使用`Dcat.init`方法来监听元素动态生成，可以很方便的解决上面两个问题

```html
<div class="selector">test</div>

<script>
Dcat.ready(function () {
    // $this 是当前元素的jquery dom对象
    // id 是当前元素的id属性，如果当前元素没有id则会自动生成一个随机id
    Dcat.init(\'.selector\', function ($this, id) {
        // 修改元素的背景色
        $this.css({background: "#fff"});
        
        // 这里不需要 off 再重新 on，因为这个匿名函数只会执行一次
        $this.on(\'click\', function () {
            ...
        });
    });
});
</script>
```

`Dcat.init` 接受两个参数

1. `selector` 需要监听的元素的`css选择器`
2. `callback` 事件回调，当元素生成时触发，且只触发一次

其中`callback`回调接收两个参数如下

- `$this` 是当前元素的jquery dom对象
- `id` 是当前元素的id属性，如果当前元素没有id则会自动生成一个随机id




## 手动触发JS脚本加载完毕事件

通过`Dcat.triggerReady`方法可以手动触发`JS`脚本加载完毕事件，这就意味着会自动执行在此之前所有通过`Dcat.ready`方法设置的回调函数。

> {tip} 这个功能普通开发很少会用到，只有一些比较深度的组件定制会用到，比如[表单弹窗](model-form-modal.md)功能就用到了此方法。

```js
Dcat.triggerReady();
```


## Pjax刷新页面

通过`Dcat.reload`方法可以调用`Pjax.reload`方法实现页面刷新和跳转功能。

刷新当前页面
```php
Admin::script(
<<<JS
    // 3秒后刷新当前页面
    setTimeout(function () {
        Dcat.reload();
    }, 3000);
JS
);
```

跳转页面
```php
$url = admin_url(\'auth/users\');

Admin::script(
<<<JS
    // 3秒后跳转到 admin/auth/users 页面
    setTimeout(function () {
        Dcat.reload(\'{$url}\');
    }, 3000);
JS
);
```

## Toastr提示框


`Dcat Admin`集成了[Toastr](https://github.com/CodeSeven/toastr)插件，下面是使用方法

### success
```js
Dcat.success(\'更新成功\');

// 使用标题
Dcat.success(\'更新成功\', \'我是标题\');

// 传递参数
Dcat.success(\'更新成功\', null, {
    timeOut: 5000, // 5秒后自动消失
});
```

![](http://docs.oneself.icu:10010/storage/markdown/images/d4ce851f594410faa384806a2ee05c74667b7b047985e.png)


### error
```js
Dcat.error(\'服务器出现未知错误\');

// 使用标题
Dcat.error(\'服务器出现未知错误\', \'我是标题\');

// 传递参数
Dcat.error(\'服务器出现未知错误\', null, {
    timeOut: 5000, // 5秒后自动消失
});
```

### warning
```js
Dcat.warning(\'警告\');

// 使用标题
Dcat.warning(\'警告\', \'我是标题\');

// 传递参数
Dcat.warning(\'警告\', null, {
    timeOut: 5000, // 5秒后自动消失
});
```


### info
```js
Dcat.info(\'提示信息\');

// 使用标题
Dcat.info(\'提示信息\', \'我是标题\');

// 传递参数
Dcat.info(\'提示信息\', null, {
    timeOut: 5000, // 5秒后自动消失
});
```

更多用法请参考[toastr官方文档](https://github.com/CodeSeven/toastr)

## sweetalert2弹窗

`Dcat Admin`集成了[sweetalert2](https://github.com/sweetalert2/sweetalert2)插件，下面是使用方法

### confirm

通过`Dcat.confirm`方法可以弹出确认弹窗，此方法接收5个参数

- `title` `string` 确认信息标题
- `message` `string` 确认信息内容，此参数可以不传
- `success` `function` 点击确认按钮触发的回调函数
- `fail` `function` 点击取消按钮触发的回调函数，此参数可以不传
- `options` `object` 配置参数，可参考[sweetalert2官方文档](https://github.com/sweetalert2/sweetalert2)

```js
Dcat.confirm(\'确认要删除这行数据吗？\', null, function () {
    console.log(\'确认删除\');
    
    $.post(...);
});
```
![](http://docs.oneself.icu:10010/storage/markdown/images/acc673213ec1e31d533428fd4bea2788667b7b256f645.png)



### success

```js
Dcat.swal.success(\'标题\');

Dcat.swal.success(\'标题\', \'内容\');

Dcat.swal.success(\'标题\', \'内容\', {
    ...
});
```
![](http://docs.oneself.icu:10010/storage/markdown/images/c5dfa334d693d47702a7bc15b60804bf667b7b42240d3.png)


### error

```js
Dcat.swal.error(\'标题\');

Dcat.swal.error(\'标题\', \'内容\');

Dcat.swal.error(\'标题\', \'内容\', {
    ...
});
```
![](http://docs.oneself.icu:10010/storage/markdown/images/9f9df62229a72e40910ef0d50201f996667b7b6213165.png)


### warning

```js
Dcat.swal.warning(\'标题\');

Dcat.swal.warning(\'标题\', \'内容\');

Dcat.swal.warning(\'标题\', \'内容\', {
    ...
});
```

### info

```js
Dcat.swal.info(\'标题\');

Dcat.swal.info(\'标题\', \'内容\');

Dcat.swal.info(\'标题\', \'内容\', {
    ...
});
```

更多用法请参考[sweetalert2官方文档](https://github.com/sweetalert2/sweetalert2)


## layer弹出层

`Dcat Admin`集成了[layer弹出层](http://layer.layui.com/)，用法请参考官方文档

```js
layer.open({
    ...
})
```

## Loading效果

`Dcat Admin`集成了三种常见的loading效果，[在线体验点我](http://103.39.211.179:8080/admin/components/loading)

### 全屏

通过`Dcat.loading`方法可以设置一个占满全屏幕的遮罩层，并在中间位置显示`loading`图标。

此方法接收一个`object`类型的参数：

| 参数     | 类型   | 默认值      |  描述  |
| ---------- | ----- |-------- | ------- |
|  zIndex  | `int` | 999991014 |   设置css的z-index(层重叠顺序)样式 |
|  width |   `string`   | 58px | 设置loading图标宽度 |
|  color |   `string` | #bacad6  | 设置loading图标的颜色 |
|  background |   `string`   | transparent  | 设置遮罩层背景颜色 |
|  style |  `string`    |  | 设置loading图标的css样式 |


```js
// 开启loading效果
Dcat.loading();

// 3秒后自动移除loading效果
setTimeout(function () {
    Dcat.loading(false);
})
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/f2206bec07ea9c2930d95fb24d673476667b7b7b7a7d6.png)


更改loading图标的颜色

```js
// 更改颜色
Dcat.loading({
    color: Dcat.color.primary,
});
```
![](http://docs.oneself.icu:10010/storage/markdown/images/591f8d23c1d788dae948d4531c8f55b8667b7b91e5c80.png)


### 附着于指定元素

通过`$.fn.loading`方法可以把loading效果附着于当前元素，此方法同样接收一个`object`类型参数：

| 参数     | 类型   | 默认值      |  描述  |
| ---------- | ----- |-------- | ------- |
|  zIndex  | `int` | 100 |   设置css的z-index(层重叠顺序)样式 |
|  width |   `string`   | 52px | 设置loading图标宽度 |
|  color |   `string` | #bacad6  | 设置loading图标的颜色 |
|  background |   `string`   | #fff  | 设置遮罩层背景颜色 |
|  style |  `string`    |  | 设置loading图标的css样式 |


```js
// 开启loading效果
$(\'#card\').loading();

// 关闭loading效果
$(\'#card\').loading(false);

// 更改loading图标颜色
$(\'#card\').loading({
    color: Dcat.color.primary,
});

// 更改遮罩层颜色
$(\'#card\').loading({
    background: \'#f3f3f3\',
});
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/cb1d19adedf90e63655f4a44c6c33886667b7baaeec89.png)



### 按钮

```js
// 开启loading效果
$(\'#submit-button\').buttonLoading();

// 关闭loading效果
$(\'#submit-button\').buttonLoading(false);
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/443f543132622cc0f8cc45ac8b0f3a04667b7bc641e00.png)


### a标签

点击`a`标签同样支持loading效果


```js
// 开启loading效果
$(\'a\').buttonLoading();

// 关闭loading效果
$(\'a\').buttonLoading(false);
```
效果
![]![](http://docs.oneself.icu:10010/storage/markdown/images/3f9c2bfd211d4193162000ab2d1b0e79667b7be20946b.png)




## Ajax表单提交

`Dcat Admin`集成了[jquery-form](https://github.com/jquery-form/form)组件用于实现`ajax`提交表单功能。

通过`Dcat.Form`方法可以当即发起`ajax`提交表单请求，此方法接受一个`object`类型参数：

| 参数     | 类型   | 默认值      |  描述  |
| ---------- | ----- |-------- | ------- |
|  form  | `string` | `object`  |  表单的 jquery 对象或者css选择器  |
|  validate  | `bool` | `false` | 是否开启表单验证，可参考[表单验证](#validate)  |
|  errorClass  | `string` | has-error | 字段验证出错时添加的样式，一般使用默认值即可  |
|  errorContainerSelector  | `string` | .with-errors | 表单错误信息容器css选择器，一般使用默认值即可  |
|  groupSelector  |  `string` | .form-group,.form-label-group,.form-field | 表单组css选择器，一般使用默认值即可 |
|  errorTemplate  | `string` | |  错误信息模板，使用默认值即可 |
|  autoRedirect  | `bool` | `false` |  保存成功后自动跳转 |
|  autoRemoveError  |`bool`  | true | 当表单值发生变化时自动移除表单错误信息  |
|  before  | `function` |  |  表单提交之前事件，返回`false`可以阻止表单继续提交 |
|  after  | `function` |  |  单提交之后事件(不论成功还是失败都会触发)，返回`false`可以中止后续逻辑 |
|  success  | `function` |  | 成功事件（接口返回状态码为`200`则判断为成功），返回`false`可以中止后续逻辑  |
|   error | `function` |  | 失败事件（接口返回状态码非`200`则判断为失败），返回`false`可以中止后续逻辑  |


### 基本用法

```html
<script>
Dcat.ready(function () {
    // ajax表单提交
    $(\'#login-form\').form({
        validate: true, //开启表单验证
        before: function (fields, form, opt) {
            // fields 为表单内容
            console.log(\'所有表单字段的值\', fields);
            
            if (...) {
                // 返回 false 可以阻止表单继续提交
                return false;
            }
        },
        success: function (response) {
            // data 为接口返回数据
            if (! response.status) {
                Dcat.error(response.data.message);

                return false;
            }

            Dcat.success(response.data.message);

			if (data.redirect) {
			    Dcat.reload(response.data.value)
			}

            // 中止后续逻辑（默认逻辑）
            return false;
        },
        error: function (response) {
            // 当提交表单失败的时候会有默认的处理方法，通常使用默认的方式处理即可
            var errorData = JSON.parse(response.responseText);
            
            if (errorData) {
                Dcat.error(errorData.message);
            } else {
                console.log(\'提交出错\', response.responseText);
            }
            
            // 终止后续逻辑执行
            return false;
        },
    });
});
</script>
```


### 高阶用法

如果你想要实现更细粒度的控制，可以通过类似下面这种方式自己绑定提交按钮，然后提交表单

```js
var $form = $(\'#login-form\');

// 禁用默认提交
$form.on(\'submit\', function () {
    return false;
});

// ajax表单提交
function submit() {
    Dcat.Form({
        form: $form,
        success: function (response) {
            if (! response.status) {
                Dcat.error(response.data.message);

                return false;
            }

            Dcat.success(response.data.message);

            location.href = response.data.value;

            return false;
        },
        error: function () {
            // 非200状态码响应错误
        }
    });
}

// h5表单验证
function validateForm() {
    $form.validator(\'validate\');

    // 如果出现错误，则返回false
    if ($form.find(\'.has-error\').length > 0) {
        return false;
    }

    return true;
}

// 绑定登陆按钮点击事件
$form.find(\'[type="submit"],.submit\').click(function (e) {
    // 表单验证
    if (validateForm() === false) {
        return false;
    }

    // 提交表单
    submit();

    return false;
});
```


<a name="validate"></a>
### 表单验证
    
`Dcat Admin`集成了[bootstrap-validator](https://github.com/1000hz/bootstrap-validator)组件用于表单前端验证的功能，
[bootstrap-validator](https://github.com/1000hz/bootstrap-validator)是一款支持H5表单验证的验证器，只需把验证规则写在表单元素的属性上即可自动开启验证，非常方便。



#### 添加验证规则
```html
<fieldset class="form-label-group form-group position-relative has-icon-left">
    <input
    
        minlength="5" <!-- 加上验证规则 -->
        maxlength="20" <!-- 加上验证规则 -->
        required  <!-- 加上验证规则 -->
        type="password"
        class="form-control"
        name="password"
    >

    <div class="form-control-position">
        <i class="feather icon-lock"></i>
    </div>
    <label for="password">{{ trans(\'admin.password\') }}</label>

    <!-- 这个加了 .with-errors 样式的 div 即是表单错误信息显示的位置，非常重要 -->
    <div class="help-block with-errors"></div>
</fieldset>
```
#### 开启表单验证
```js
$(\'#xx-form\').form({
    validate: true
});
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/8e9bc6dfd86abf5fad0a04e93d62ba75667b7bff8c4bc.png)
![](http://docs.oneself.icu:10010/storage/markdown/images/68201a260714813251f882a10943696a667b7c147a0d9.png)

<a name="extend-validator"></a>
#### 扩展验证规则

通过`Dcat.validator.extend`方法可以扩展表单验证规则

```js
Dcat.validator.extend(\'maxlength\', function ($el) {
    return $el.val().length > $el.attr(\'data-maxlength\');
});
```

使用自定义规则验证表单

```html
<input 
    type="input"
    class="form-control"
    name="username"
    data-maxlength="20" <!-- 使用刚刚自定义的验证规则 -->
    data-maxlength-error="已超出输入字符长度限制，请输入20个或以下的字符" <!-- 定义错误信息 -->
 />
```

#### 内置验证规则
更多内置验证规则请参考[bootstrap-validator官方文档](http://1000hz.github.io/bootstrap-validator/)',
   'order' => 11,
   'created_at' => '2024-06-26 10:25:30',
   'updated_at' => '2024-06-26 10:25:30',
   'slug' => 'js-component',
),
            (object) array(
   'id' => 12,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => '常见问题',
   'content' => '# 常见问题汇总

### 前端控制台JS报错？

如果发现这个问题，绝大部分都是因为静态资源文件有问题引起的（比如升级步骤不正确），请先重新发布资源并**清理浏览器缓存**：
```
php artisan admin:publish --assets --force
```
如果还是报错，请到此处进行反馈 https://github.com/jqhph/dcat-admin/issues

### 如何设置语言为简体中文？

打开配置文件`config/app.php`，设置`locale`参数的值为`zh_CN`。

### Laravel7时间显示为UTC格式

这个是`Laravel7`升级后带来的坑，原因请参考[日期序列化](https://learnku.com/docs/laravel/7.x/upgrade/7445#date-serialization)。

在本项目中解决这个问题很简单，只需在`Model`中引入`Dcat\\Admin\\Traits\\HasDateTimeFormatter`这个`trait`即可。

```php
<?php

namespace App\\Models;

use Dcat\\Admin\\Traits\\HasDateTimeFormatter;
use Illuminate\\Database\\Eloquent\\Model;

class MyModel extends Model
{
     use HasDateTimeFormatter;
}
```

### 表单保存时报错`Array to string conversion`

出现这个问题是因为表单提交的值最后转换成了`array`类型，而`MySQL`是不支持直接存储`array`类型数据的，在`dcat-admin`中可以用以下方式对数据格式进行转换

```php
$form->multipleSelect(\'user_id\')->saving(function ($v) {
 // 转为 , 隔开的字符串
 return implode(\',\', $v);});
```

当然，也可以通过`model`的**修改器**去转化字段的值，这方面内容可以参考`laravel`文档，这里就不再赘述。

> 更优雅的转化值方法，可参考 [Dcat Admin 教程 - 如何优雅地更改表单值的数据类型？](https://learnku.com/articles/44386)

### 如何从laravel-admin迁移到dcat-admin？
[Dcat Admin 教程 - 如何从 Laravel admin 迁移到 dcat admin？](https://learnku.com/articles/44235)

### 重写登陆页面和登陆逻辑

方式一，重写登陆控制器方法：

默认的登陆控制器用的是`App\\Admin\\AuthController`这个类，可以通过配置参数`admin.auth.controller`进行修改

```php
<?php

namespace App\\Admin\\Controllers;

use Dcat\\Admin\\Controllers\\AuthController as BaseAuthController;

class AuthController extends BaseAuthController
{
    // 自定义登陆view模板
    protected $view = \'admin.login\';
	
	// 重写登陆页面逻辑
	public function getLogin(Content $content)
    {
        ...
    }

    ...
}

```


方式二，覆写路由：

在路由文件`app/Admin/routes.php`中，覆盖掉登陆页面和登陆逻辑的路由，即可实现自定义的功能

```php
Route::group([
    \'prefix\'        => config(\'admin.prefix\'),
    \'namespace\'     => Admin::controllerNamespace(),
    \'middleware\'    => [\'web\', \'admin\'],
], function (Router $router) {

    $router->get(\'auth/login\', \'AuthController@getLogin\');
    $router->post(\'auth/login\', \'AuthController@postLogin\');
    
});
```

在自定义的路由器AuthController中的`getLogin`、`postLogin`方法里分别实现自己的登陆页面和登陆逻辑。



### 更新新版本后出现异常

如果遇到更新之后,部分组件不能正常使用,那有可能是`dcat-admin`自带的静态资源有更新了,需要运行命令`php artisan admin:publish --force`来重新发布前端资源，发布之后不要忘记清理浏览器缓存.

### 文件上传失败或无法访问？

如果你发现无法上传文件，那么通常有几下几点原因：

1. `Laravel`文件上传配置不正确，请参考文档[图片/文件上传](https://learnku.com/docs/dcat-admin/1.x/picture-file-upload/8106)。如果你不了解`laravel`文件上传功能，请阅读文档[Laravel - 文件存储](https://learnku.com/docs/laravel/7.x/filesystem/7485)
2. 文件过大，需要调整`php.ini`的`upload_max_filesize`参数
3. 文件上传目录没有写权限
4. `php`没有安装或没有开启`fileinfo`扩展
5. 检查`php.ini`的`upload_tim_dir`参数设置是否正常
6. 检查是否升级新版本没有重新发布资源或没有清理浏览器缓存

如果文件上传成功了，却无法正常访问，那么可能是`.env`配置文件中的`APP_URL`参数没有设置正确。

### 关于前端资源加载问题

`Dcat Admin`是支持前端资源按需加载的，在需要用到某个组件的时候再引入前端资源即可，开发者无需担心安装组件过多影响页面加载速度。

只有那种需要在全局页面引入的资源，才需要在`app/Admin/bootstrap.php`或`ServiceProvider::boot`方法中引入：

```php
Admin::css(\'path/to/your/css\');
Admin::js(\'path/to/your/js\');
```

### 谷歌字体加载过慢？

如果出现谷歌字体加载过慢的情况下，可以把谷歌字体下载到你自己的服务器，然后在`app/Admin/bootstrap.php`中加入以下代码，让系统从你自己的服务器中加载字体

```php
Admin::asset()->alias(
    \'@nunito\', 
     [\'css\' => asset(\'你的服务器字体路径/nunito.css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i\')]
);
```

如果你完全不想使用这两种字体，可以加入以下代码
```php
Admin::asset()->alias(\'@nunito\', []);
```

### 为何配置了角色和权限，依然提示无权访问？

这个原因可能是由于权限的`URL`路径配置错误导致的，正确的包含增删改查功能的`URL`配置应该是`auth/users*`这样的，如果配置成了`auth/users/*`，那么就会提示无权访问。

> {tip} 另外标签表单填写自定义URL有两种方法：一种是选中后按`删除键`进行更改；另一种是填写后按`空格键` + `回车键`。

### 为何没有权限的菜单不会自动隐藏？

权限与菜单是相互独立的，并且默认是可见的。当设置了权限之后，系统并没有办法可以判断用户是否可以访问某个菜单，所以需要给菜单绑定对应的**权限**或者**角色**，绑定之后系统就可以识别用户是否可访问这个菜单。

### 项目使用HTTPS之后无法登陆
需要把配置文件的`admin.https`参数的值设置为`true`

### $.get(xxx) 没有反应

`Dcat Admin`使用的是`jQuery3.x`，`$.get`方法在`jQuery3.x`中已经被废弃，请使用`$.ajax`代替

### 前后台session发生冲突

从`2.0`的版本之后 `admin.session` 中间件不再默认启用，如果您的应用同时有前台和后台，则需要开启 `admin.session` 中间件，否则会造成前后台 `session` 冲突问题。

把配置参数 `admin.route.enable_session_middleware` 的值设置为 `true` 即可开启
```php
    \'route\' => [
        \'domain\' => env(\'ADMIN_ROUTE_DOMAIN\'),

        \'prefix\' => env(\'ADMIN_ROUTE_PREFIX\', \'admin\'),

        \'namespace\' => \'App\\\\Admin\\\\Controllers\',

        \'middleware\' => [\'web\', \'admin\'],
        
        // 开启 admin.session 中间件
        \'enable_session_middleware\' => true,
    ],
```

### 数据表字段设置 Not null 后保存表单时报错

如果数据表字段设置为`not null`，当表单提交的数据是空时，会保存字段值为`null`到数据库，这时就会报错。我们可以通过以下方法解决这个问题

```php
$form->text(...)->saving(function ($v) {
    // 把字段值类型强转为 string，如果是数值强转为int
    return (string) $v;
});
```

### 图片防盗链
图片请求默认会去掉 `referer` 字段，如果有防盗链要求，可以在配置文件(`config/admin.php`)中设置：

```
 "disable_no_referrer_meta" => true
 ```
 
 ### 适配 Laravel-S 

自从 Laravel-S 3.7.18 发行版开始，支持使用 DcatAdmin 。

1，`composer require hhxsv5/laravel-s`。

2，执行 `php artisan laravels publish` 发布资源。

3，修改 `config/laravels.php` ，添加以下服务注册和清理器：
```
\'register_providers\' => [
 \\Dcat\\Admin\\AdminServiceProvider::class,
],

\'cleaners\' => [
  ...
  Hhxsv5\\LaravelS\\Illuminate\\Cleaners\\DcatAdminCleaner::class,
 
],
```

4，执行 `php bin/laravels start` 即可使用 swoole 。
 

### 为何不开发成前后端分离项目？

最近有很多同学问我为什么不采用前后端分离技术方案，我在这个帖子里回答的非常详细，有相关疑问的同学请[点击此处查看帖子](https://github.com/jqhph/dcat-admin/issues/27)，这里不再赘述。',
   'order' => 12,
   'created_at' => '2024-06-26 10:26:02',
   'updated_at' => '2024-06-26 10:26:02',
   'slug' => 'common-problem',
),
            (object) array(
   'id' => 13,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 1,
   'title' => 'Laravel Octane',
   'content' => '# Laravel Octane

[Laravel Octane](https://github.com/laravel/octane) 是一个基于 `Swoole/RoadRunner` 驱动的可以提升 `Laravel` 框架性能的项目，安装后可以大幅提升`Laravel`项目的性能。

`Dcat Admin`从`v2.0.23-beta`版本起兼容了`Laravel Octane`环境，只需在配置文件`config/octane.php`中加入如下配置即可：

```php

    \'listeners\' => [
        ...,

        RequestReceived::class => [
            ...Octane::prepareApplicationForNextOperation(),
            ...Octane::prepareApplicationForNextRequest(),
            
            // 开启对 Dcat Admin 的支持
            Dcat\\Admin\\Octane\\Listeners\\FlushAdminState::class,
        ],
        
        ...
    ],    
```

> [Laravel Octane](https://github.com/laravel/octane)目前仍处于`beta`版本阶段，关于[Laravel Octane](https://github.com/laravel/octane)的安装与更多介绍请前往文档 https://github.com/laravel/octane 查看。',
   'order' => 13,
   'created_at' => '2024-06-26 10:26:50',
   'updated_at' => '2024-06-26 10:26:50',
   'slug' => 'laravel-octane',
),
            (object) array(
   'id' => 14,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '基本使用',
   'content' => '# 表格基本使用


## 简单示例
`Dcat\\Admin\\Grid`类用于生成基于数据模型的表格，先来个例子，数据库中有`movies`表

```sql
CREATE TABLE `movies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `director` int(10) unsigned NOT NULL,
  `describe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rate` tinyint unsigned NOT NULL,
  `released` enum(0, 1),
  `release_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

```

对应的数据模型为`App\\Models\\Movie`，对应的数据仓库为`App\\Admin\\Repositories\\Movie`，数据仓库代码如下：

> {tip} 如果你的数据来自`MySQL`，则`数据仓库`不是必须的，你也可以直接使用`Model`。

```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use App\\Models\\Movie as MovieModel;

class Movie extends EloquentRepository
{
    protected $eloquentClass = MovieModel::class;
    
    /**
     * 设置表格查询的字段，默认查询所有字段
     * 
     * @return array
     */
    public function getGridColumns(){
        return [\'id\', \'title\', \'director\', \'rate\', ...];
    }
}
```

下面的代码可以生成表`movies`的数据表格：

```php
<?php

namespace App\\Admin\\Controllers;

use App\\Admin\\Repositories\\Movie;
use Dcat\\Admin\\Grid;
use \\Dcat\\Admin\\Http\\Controllers\\AdminController;

class MovieController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Movie(), function (Grid $grid) {
            // 第一列显示id字段，并将这一列设置为可排序列
            $grid->column(\'id\', \'ID\')->sortable();
            
            // 第二列显示title字段，由于title字段名和Grid对象的title方法冲突，所以用Grid的column()方法代替
            $grid->column(\'title\');
            
            // 第三列显示director字段，通过display($callback)方法设置这一列的显示内容为users表中对应的用户名
            $grid->column(\'director\')->display(function($userId) {
                return User::find($userId)->name;
            });
            
            // 第四列显示为describe字段
            $grid->column(\'describe\');
            
            // 第五列显示为rate字段
            $grid->column(\'rate\');
            
            // 第六列显示released字段，通过display($callback)方法来格式化显示输出
            $grid->column(\'released\', \'上映?\')->display(function ($released) {
                return $released ? \'是\' : \'否\';
            });
            
            // 下面为三个时间字段的列显示
            $grid->column(\'release_at\');
            $grid->column(\'created_at\');
            $grid->column(\'updated_at\');
            
            // filter($callback)方法用来设置表格的简单搜索框
            $grid->filter(function ($filter) {
                // 设置created_at字段的范围查询
                $filter->between(\'created_at\', \'Created Time\')->datetime();
            });
        });
    }
}
```

## 表格显示模式

### table_collapse

在这个版本开始，默认的表格布局将会采用 `table_collapse` 模式，效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/f1d28e2258d5db70557f6840cd40dac8667b7da370239.png)  
![](http://docs.oneself.icu:10010/storage/markdown/images/d29d435f115791e85faeb6f1e6c5e928667b7dae5c00e.png)

如果想要切换回旧版本的表格布局样式，可以在 `app/Admin/bootstrap.php`中加上

```php
Grid::resolving(function (Grid $grid) {
    $grid->tableCollapse(false);
});
```

### 边框模式

通过`withBorder`方式可以让表格显示边框

```php
$grid->withBorder();
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/9ff1c81120f163154a16dc0e9732446a667b7dbe3d250.png)



禁用边框模式
```php
$grid->withBorder(false);
```

## 基本使用方法

### 添加列 (column)

```php
// 添加单列
$grid->column(\'username\', \'用户名\');

// 添加多列
$grid->columns(\'email\', \'username\' ...);
```

### 修改查询条件 (where)
```php
$grid->model()->where(\'id\', \'>\', 100);

$grid->model()->orderBy(\'id\', \'desc\');

// 回收站数据
$grid->model()->onlyTrashed();

...
```

同时也可以使用以下方式

```php
protected function grid()
{
    return Grid::make(Model::with(\'...\')->where(...), function (Grid $grid) {
        ...
    });
}
```

其它查询方法可以参考`eloquent`的查询方法.

#### 设置默认排序

```php
$grid->model()->orderBy(\'id\', \'desc\');
```

这个功能也支持关联关系表字段排序，注意这里仅支持`一对一`以及`一对多`关联关系

```php
$grid->model()->orderBy(\'profile.age\');
```

### 修改显示输出 (display)


```php
$grid->column(\'text\')->display(function($text) {
    return str_limit($text, 30, \'...\');
});

// 允许混合使用多个“display”方法
$grid->column(\'name\')->display(function ($name) {
     return "<b>$name</b>";
 })->display(function ($name) {
    return "<span class=\'label\'>$name</span>";
});

$grid->column(\'email\')->display(function ($email) {
    return "mailto:$email";
});

// 可以直接写字符串
$grid->column(\'username\')->display(\'...\');

// 添加不存在的字段
$grid->column(\'column_not_in_table\')->display(function () {
    return \'blablabla....\'.$this->id;
});
```

### 显示序号 (number)

通过`number`方法可以在表格中添加一列从`1`开始计算的行序号列

```php
$grid->number();
```

### 设置名称 (setName)

当页面存在多个`Grid`表格时，需要给表格设置不同的名称，否则部分功能可能会出现冲突的情况

```php
$grid->setName(\'name1\');
```

### 获取当前行数据 (row)

`display()`方法接收的匿名函数绑定了当前行的数据对象，可以在里面调用当前行的其它字段数据

```php
$grid->column(\'first_name\');
$grid->column(\'last_name\');

// 不存的字段列
$grid->column(\'full_name\')->display(function () {
    return $this->first_name.\' \'.$this->last_name;
});
```


<a name="outline"></a>
### 设置工具栏按钮样式

工具栏按钮默认显示`outline`模式，效果如下


用法
```php
$grid->toolsWithOutline();

// 禁止
$grid->toolsWithOutline(false);
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/dca8cf0ab722a1456c5015563a8db402667b7dd84a1c2.png)

禁用`outline`后的效果

![](http://docs.oneself.icu:10010/storage/markdown/images/d2b554789840306ab0e3444fc2b09547667b7df160ef3.png)


如果你希望某个按钮不使用`outline`模式，可以在按钮的`class`属性中加上`disable-outline`
```php
$grid->tools(\'<a class="btn btn-primary disable-outline">测试按钮</a>\');
```

### 设置创建按钮 (createButton)

此功能默认开启
```php
// 禁用
$grid->disableCreateButton();
// 显示
$grid->showCreateButton();
```

#### 开启弹窗创建表单

此功能默认不开启

```php
$grid->enableDialogCreate();

// 设置弹窗宽高，默认值为 \'700px\', \'670px\'
$grid->setDialogFormDimensions(\'50%\', \'50%\');
```

#### 传递参数到按钮的URL

```php
$grid->model()->setConstraints([
    \'key1\' => \'v1\',
	\'key2\' => \'v2\',
	...
]);
```

### 修改创建以及更新按钮的路由 (setResource)

设置修改创建以及更新按钮的路由前缀

```php
$grid->setResource(\'auth/users\');
```


### 设置查询过滤器 (filter)

此功能默认开启

```php
// 禁用
$grid->disableFilter();
// 显示
$grid->showFilter();

// 禁用过滤器按钮
$grid->disableFilterButton();
// 显示过滤器按钮
$grid->showFilterButton();
```


### 行选择器 (rowSelector)
```php
// 禁用
$grid->disableRowSelector();
// 显示
$grid->showRowSelector();
```

#### 设置选择中行的标题字段
设置选中后需要显示的字段，如不设置，默认取 `name`、 `title`、 `username`中的一个。
```php
$grid->column(\'full_name\');
$grid->column(\'age\');

...

$grid->rowSelector()->titleColumn(\'full_name\');
```

#### 设置选择中行的ID字段
设置选中后需要保存的字段，默认为 数据表主键(id) 字段
```php
$grid->column(\'new_id\');

...

$grid->rowSelector()->idColumn(\'new_id\');
```

#### 设置checkbox选择框颜色
默认 `primary`，支持：`default`、 `primary`、 `success`、 `info`、 `danger`、 `purple`、 `inverse`。
```php
$grid->rowSelector()->style(\'success\');
```

#### 点击当前行任意位置选中
此功能默认不开启。
```php
$grid->rowSelector()->click();
```

#### 设置选中行的背景颜色
```php
use Dcat\\Admin\\Admin;

$grid->rowSelector()->background(Admin::color()->dark20());
```

### 设置默认选中行
```php
$grid->rowSelector()->check(function ($row) {
    return $row->state === 1; // 默认选中state为1的行
});
```

### 设置禁止选中行 (disable)

```php
$grid->rowSelector()->disable(function ($row) {
    return $row->state === 0; // state为0的行不可选中
});
```

### 设置行操作按钮 (actions)
```php
// 禁用
$grid->disableActions();
// 显示
$grid->showActions();

// 禁用详情按钮
$grid->disableViewButton();
// 显示详情按钮
$grid->showViewButton();

// 禁用编辑按钮
$grid->disableEditButton();
// 显示编辑按钮
$grid->showEditButton();

// 禁用快捷编辑按钮
$grid->disableQuickEditButton();
// 显示快捷编辑按钮
$grid->showQuickEditButton();

// 设置弹窗宽高，默认值为 \'700px\', \'670px\'
$grid->setDialogFormDimensions(\'50%\', \'50%\');


// 禁用删除按钮
$grid->disableDeleteButton();
// 显示删除按钮
$grid->showDeleteButton();

```

### 设置批量操作按钮 (batchActions)
```php
// 禁用
$grid->disableBatchActions();
// 显示
$grid->showBatchActions();

// 禁用批量删除按钮
$grid->disableBatchDelete();
// 显示批量删除按钮
$grid->showBatchDelete();
```
### 批量操作设置下拉菜单分割线 (divider )
```php
// 方式1
$grid->batchActions(function ($batch) {
    $batch->add(...);

    // 显示分割线
    $batch->divider();

    ...
});

// 方式2
use Dcat\\Admin\\Grid\\Tools\\ActionDivider;

$grid->batchActions([
    new Action1(),
    ...
    new ActionDivider(),
    ...
]);
```
### 设置工具栏 (toolbar)
```php
// 禁用
$grid->disableToolbar();
// 显示
$grid->showToolbar();
```

### 设置刷新按钮 (refresh)
```php
// 禁用
$grid->disableRefreshButton();
// 显示
$grid->showRefreshButton();
```

### 设置分页功能 (paginate)
```php
// 禁用
$grid->disablePagination();
// 显示
$grid->showPagination();
```

#### 简化分页 (simplePaginate)

启用 `simplePaginate` 功能后会使用`Laravel`的[simplePaginate](https://laravel.com/docs/8.x/pagination#simple-pagination)功能进行分页，当数据量较大时可以大幅提升页面的响应速度，但需要注意的是，使用此功能后将不会查询数据表的**总行数**。

```php
// 启用
$grid->simplePaginate();

// 禁用
$grid->simplePaginate(false);
```

#### 设置每页显示行数

```php
// 默认为每页20条
$grid->paginate(15);
```

#### 设置分页选择器选项 (perPages)
```php
$grid->perPages([10, 20, 30, 40, 50]);

// 禁用分页选择器
$grid->disablePerPages();
```

### 设置表格样式 (addTableClass)


通过`addTableClass`可以给表格的`table`添加`css`样式

```php
$grid->addTableClass([\'class1\', \'class2\']);
```

### 设置表格文字居中 (table-text-center)

```php
$grid->addTableClass([\'table-text-center\']);
```


### 显示横向滚动条 (scrollbarX)

显示表格横向滚动条，默认不显示

```php
// 启用
$grid->scrollbarX();

// 禁用
$grid->scrollbarX(false);
```


### 设置表格外层容器
```php
 // 更改表格外层容器
$grid->wrap(function (Renderable $view) {
    $tab = Tab::make();
    
    $tab->add(\'示例\', $view);
    $tab->add(\'代码\', $this->code(), true);

    return $tab;
});
```

## 关联模型

参考[表格关联关系](https://learnku.com/docs/dcat-admin/2.x/association/8821)',
   'order' => 1,
   'created_at' => '2024-06-26 10:33:52',
   'updated_at' => '2024-06-26 10:33:52',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 15,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '列的使用和扩展',
   'content' => '# 列的基本使用

### 设置列为可排序 (sortable)
```php
$grid->column(\'id\')->sortable();
```

表格字段支持关联关系表字段以及`json`字段的排序

> 注意，排序功能仅支持`hasOne`以及`belongsTo`两种类型的字段排序，并且不支持多层级嵌套！

```php
// 关联关系表字段排序
$grid->column(\'profile.age\')->sortable();

// 指定需要排序的字段名称
$grid->column(\'my_age\')->sortable(\'profile.age\');

// json字段排序
$grid->column(\'options.price\')->sortable(\'options->price\');
// 关联关系表的 json 字段排序
$grid->column(\'profile.options.price\')->sortable(\'profile.options->price\');
```

支持`MySql`的```order by cast(`{field}` as {type})```用法

```php
$grid->column(\'profile.age\')->sortable(null, \'SIGNED\');

$grid->column(\'profile.options.price\')->sortable(\'profile.options->price\', \'SIGNED\');
```

#### 设置默认排序

```php
$grid->model()->orderBy(\'id\', \'desc\');
```

这个功能也支持关联关系表字段排序，注意这里仅支持`hasOne`以及`belongsTo`关联关系

```php
$grid->model()->orderBy(\'profile.age\');
```

### 设置列的宽度 (width)
设置列的宽度，当字段内容过长时可以使用这个方法限制列宽度
```php
// px
$grid->column(\'long_text\')->width(\'300px\');
// 百分比
$grid->column(\'long_text\')->width(\'15%\');
```

### 固定列 (fixColumns)


通过 `fixColumns` 方法可以给表格设置固定列，第一个参数表示固定从头开始的前三列，第二个参数表示固定从后往前数的两列，（第二个参数可不传，默认为-1）

```php
$grid->fixColumns(2, -2);
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/26a1ef9ec82f49f04cdf24d0506c9173667b7e6ed08a5.gif)
  
  
### 获取行序号 (index)

序号从 `0` 开始计算

```php
// 在 display 回调中使用
$grid->column(\'序号\')->display(function () {
    return $this->_index + 1;
});


// 在行操作 action 中使用
$grid->actions(function ($actions) {
    $index = $this->_index;
    
    ...
});
```

### 设置td标签HTML属性 (setAttributes)

```php
$grid->column(\'email\')->setAttributes([\'name\' => \'...\'])
```


### 设置表格头HTML属性 (setHeaderAttributes)
设标题的`html`属性
```php
// 修改颜色
$grid->column(\'name\')->setHeaderAttributes([\'style\' => \'color:#5b69bc\']);
```

### 设置列选择器 (字段显示或隐藏 showColumnSelector)

此功能默认不启用

```php
// 开启字段选择器功能
$grid->showColumnSelector();

// 设置默认隐藏字段
$grid->hideColumns([\'field1\', ...]);
``` 

![](http://docs.oneself.icu:10010/storage/markdown/images/af68e6c3c26aa701c9ecc23bdea17040667b7e7d57656.png)

<a name="column-selector-store"></a>
#### 存储驱动 (持久化)

在配置文件`config/admin.php`可以配置存储列选择器状态的方式，支持的存储方式如下

- `Dcat\\Admin\\Grid\\ColumnSelector\\SessionStore` 列选择器状态数据保存在`session`中，仅在登陆状态中有效
- `Dcat\\Admin\\Grid\\ColumnSelector\\CacheStore`  列选择器状态数据保存在[Laravel Cache](https://laravel.com/docs/8.x/cache#driver-prerequisites)缓存系统中，最长可保存`300`天，并可以通过`admin.grid.column_selector.store_params.driver`可以配置缓存驱动，默认为`file`

```php
    \'grid\' => [

        ...

        \'column_selector\' => [
            \'store\' => Dcat\\Admin\\Grid\\ColumnSelector\\SessionStore::class,
            \'store_params\' => [
                \'driver\' => \'file\',
            ],
        ],
    ],
```


### 设置列提示信息 (help)
`Grid\\Column::help`参数：
 - $help `string` 提示内容
 - $style `string` 提示窗背景颜色，支持`green`、 `blue`、`red`、`purple`
 - $placement `string` 提示窗位置，支持`top`、`left`、`right`、`bottom`

![](http://docs.oneself.icu:10010/storage/markdown/images/33f8f96ce46254ffb7139dc9b55cb2c4667b7e8a8c3d8.png)


```php
$grid->column(\'id\')->help(\'提示信息\');
```

### 设置列搜索 (filter)

通过`Grid\\Column::filter`方法可以给列设置一个过滤器，可以很方便的根据这一列进行数据表格过滤操作，具体使用方法请参考[列过滤器](https://learnku.com/docs/dcat-admin/2.x/column-filter/8098)。

![](http://docs.oneself.icu:10010/storage/markdown/images/a4fac766ce94bfd02f0a350d8ec86b7e667b7ea1ea897.png)




### 扩展列功能

通过`Grid\\Column::macro`方法可以扩展列方法。

在 `app/Admin/bootstrap.php` 中添加以下代码

```php
use Dcat\\Admin\\Grid;

// $value 是当前字段的值
// $p1、$p2 是自定义参数
Grid\\Column::macro(\'myHeader\', function ($value, $p1, $p2 = null) {
    // MyHeader 需要实现 Illuminate\\Contracts\\Support\\Renderable 接口
    // 当然这里也可以直接传字符串
    return $this->addHeader(new MyHeader($this, $p1, $p2));
});
```

`MyHeader` 类
```php
use Dcat\\Admin\\Grid\\Column;
use Illuminate\\Contracts\\Support\\Renderable;

class MyHeader implements Renderable
{
    public function __construct(Column $column, $p1, $p2)
    {
        ...
    }
    
    public function render()
    {
        ...
    }
}
```

使用

```php
$grid->column(\'user\')->myHeader($p1, $p2);

$grid->column(\'first_name\')->myHeader($p1);
```',
   'order' => 2,
   'created_at' => '2024-06-26 10:36:21',
   'updated_at' => '2024-06-26 10:36:21',
   'slug' => 'use-and-extension-of-columns',
),
            (object) array(
   'id' => 16,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '列的显示和扩展',
   'content' => '# 列的显示和扩展


数据表格内置了很多对于列的操作方法，可以通过这些方法很灵活的操作列数据。



## 根据条件显示不同的组件
有些情况我们需要根据某个条件去判断是否使用列的某个显示功能：
> 需要注意的是，`Grid\\Column::if`只对列的显示相关功能有效，其他方法如表头的相关操作都不能使用此方法！

```php
$grid->column(\'config\')
    ->if(function ($column) {
        // 获取当前行其他字段值
        $username = $this->username;
        
    	// $column->getValue() 是当前字段的值
		// 返回 "真" 或 "假"，"真" 则执行 "if" 后面的代码
        return $column->getValue() === true;
    })
    ->display($view)
    ->copyable()
    ->else()
    ->display(\'\');
```
上面写法等同于
```php
$grid->column(\'config\')
    ->if(function ($column) {
        return $column->getValue();
    })
    ->then(function (Grid\\Column $column) {
        $column->display($view)->copyable();
    })
    ->else(function (Grid\\Column $column) {
        $column->display(\'\');
    });
```

支持多个`if`
```php
$grid->column(\'config\')
    ->if(...)
    ->then(...)
    ->else(...)
    
    ->if(...)
    ->then(...)
    ->else(...);
```

终结条件判断`end`
```php
$grid->column(\'status\')
    ->if(...) // 条件1
    ->display(...)
    ->display(...)
    
    ->if(...) // 条件2
    ->display(...)
    ->display(...)
    
    ->end() // 终结前面的条件判断
    ->display(...); // 所有条件都能生效
```


## 列显示

`model-grid`内置了若干方法来帮助你扩展列功能

### display

`Dcat\\Admin\\Grid\\Column`对象内置了`display()`方法来通过传入的回调函数来处理当前列的值，
```php
$grid->column(\'title\')->display(function ($title) {

    return "<span style=\'color:blue\'>$title</span>";
    
});
```
在传入的匿名函数中可以通过任何方式对数据进行处理，另外匿名函数绑定了当前列的数据作为父对象，可以在函数中调用当前行的数据：
```php
$grid->column(\'first_name\');

$grid->column(\'last_name\');

// 不存在的`full_name`字段
$grid->column(\'full_name\')->display(function () {
    return $this->first_name . \' \' . $this->last_name;
});
```

### 设置列的HTML属性
设列的`html`属性
```php
$grid->column(\'name\')->setAttributes([\'style\' => \'font-size:14px\']);
```

### 列视图
`view`方法可以引入一个视图文件。
```php
$grid->column(\'content\')->view(\'admin.fields.content\');
```

默认会传入视图的三个变量：
 - `$model` 当前行数据
 - `$name` 字段名称
 - `$value` 为当前列的值
 
模板代码如下：
```blade
<label>名称：{{ $name }}</label>
<label>值：{{ $value }}</label>
<label>其他字段：{{ $model->title }}</label>
```



### 图片

```php
$grid->column(\'picture\')->image();

//设置服务器和宽高
$grid->column(\'picture\')->image(\'http://xxx.com\', 100, 100);

// 显示多图
$grid->column(\'pictures\')->display(function ($pictures) {
    
    return json_decode($pictures, true);
    
})->image(\'http://xxx.com\', 100, 100);
```

### 显示label标签

支持`Dcat\\Admin\\Color`类中内置的所有颜色

```php
use Dcat\\Admin\\Admin;

$grid->column(\'name\')->label();

// 设置颜色，直接传别名
$grid->column(\'name\')->label(\'danger\');

// 也可以这样使用
$grid->column(\'name\')->label(Admin::color()->danger());

// 也可以直接传颜色代码
$grid->column(\'name\')->label(\'#222\');
```

给不同的值设置不同的颜色
```php
use Dcat\\Admin\\Admin;

$grid->column(\'state\')->using([1 => \'未处理\', 2 => \'已处理\', ...])->label([
    \'default\' => \'primary\', // 设置默认颜色，不设置则默认为 default
    
	1 => \'primary\',
	2 => \'danger\',
	3 => \'success\',
	4 => Admin::color()->info(),
]);
```

### 显示badge标签

支持`Dcat\\Admin\\Color`类中内置的所有颜色

```php
$grid->column(\'name\')->badge();

// 设置颜色，直接传别名
$grid->column(\'name\')->badge(\'danger\');

// 也可以这样使用
$grid->column(\'name\')->badge(Admin::color()->danger());

// 也可以直接传颜色代码
$grid->column(\'name\')->badge(\'#222\');
```

给不同的值设置不同的颜色
```php
use Dcat\\Admin\\Admin;

$grid->state->using([1 => \'未处理\', 2 => \'已处理\', ...])->badge([
    \'default\' => \'primary\', // 设置默认颜色，不设置则默认为 default	
    
    1 => \'primary\',
	2 => \'danger\',
	3 => \'success\',
	4 => Admin::color()->info(),
]);
```

<a name="bool"></a>
### 布尔值显示 (bool)


将这一列转为`bool`值之后显示为`✓`和`✗`。

```php
$grid->column(\'approved\')->bool();
```

你也可以按照这一列的值指定显示，比如字段的值为`Y`和`N`表示`true`和`false`

```php
$grid->column(\'approved\')->bool([\'Y\' => true, \'N\' => false]);
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/4fc2757eda2c15de2291ff9ca3fb885b667b7f35c6376.png)




### 圆点前缀 (dot)

通过`dot`方法可以在列文字前面加上一个带颜色的圆点

```php
use Dcat\\Admin\\Admin;

$grid->column(\'state\')
	->using([1 => \'未处理\', 2 => \'已处理\', ...])
	->dot(
		[
			1 => \'primary\',
			2 => \'danger\',
			3 => \'success\',
			4 => Admin::color()->info(),
		], 
	    \'primary\' // 第二个参数为默认值
	);
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/46b70e504cf7a598204ba87faab3e495667b7f49942e0.png)


<a name="expand"></a>
### 列展开 (expand)
`expand`方法可以把内容隐藏，点击按钮的时候显示在表格下一行
```php
use Dcat\\Admin\\Widgets\\Card;

$grid->column(\'content\')
    ->display(\'详情\') // 设置按钮名称
    ->expand(function () {
        // 返回显示的详情
        // 这里返回 content 字段内容，并用 Card 包裹起来
        $card = new Card(null, $this->content);
    
        return "<div style=\'padding:10px 10px 0\'>$card</div>";
    });
```
也可以通过以下方式设置按钮
```php
use Dcat\\Admin\\Widgets\\Card;

$grid->column(\'content\')->expand(function (Grid\\Displayers\\Expand $expand) {
    // 设置按钮名称
    $expand->button(\'详情\');

    // 返回显示的详情
    // 这里返回 content 字段内容，并用 Card 包裹起来
    $card = new Card(null, $this->content);

    return "<div style=\'padding:10px 10px 0\'>$card</div>";
});
```


#### 异步加载

> 更多用法请参考文档[异步加载](https://learnku.com/docs/dcat-admin/2.x/asynchronous-loading/9327)

定义渲染类，继承`Dcat\\Admin\\Support\\LazyRenderable`

```php
use App\\Models\\Post as PostModel;
use Dcat\\Admin\\Support\\LazyRenderable;
use Dcat\\Admin\\Widgets\\Table;

class Post extends LazyRenderable
{
    public function render()
    {
        // 获取ID
        $id = $this->key;
        
        // 获取其他自定义参数
        $type = $this->post_type;

        $data = PostModel::where(\'user_id\', $id)
            ->where(\'type\', $type)
            ->get([\'title\', \'body\', \'body\', \'created_at\'])
            ->toArray();

        $titles = [
            \'User ID\',
            \'Title\',
            \'Body\',
            \'Created At\',
        ];

        return Table::make($titles, $data);
    }
}
```

使用
```php
$grid->post->display(\'View\')->expand(Post::make([\'post_type\' => 1]));

// 可以在闭包内返回异步加载类的实例
$grid->post->expand(function () {
    // 允许在闭包内返回异步加载类的实例

    return Post::make([\'title\' => $this->title]);
});
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/c8429c5f1a0cc00b725dbca76477cb86667b7f6c562ca.gif)


#### 异步加载工具表单

定义[工具表单](https://learnku.com/docs/dcat-admin/1.x/tools-form/8125)类如下

> {tip} 更多用法请参考[异步加载](https://learnku.com/docs/dcat-admin/2.x/asynchronous-loading/9327)

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Contracts\\LazyRenderable;
use Dcat\\Admin\\Traits\\LazyWidget;
use Dcat\\Admin\\Widgets\\Form;

class UserProfile extends Form implements LazyRenderable
{
    use LazyWidget;

    public function handle(array $input)
    {
        // 接收外部传递参数
		$type = $this->payload[\'type\'] ?? null;
        
        return $this->response()->success(\'保存成功\');
    }

    public function form()
    {
        // 接收外部传递参数
        $type = $this->payload[\'type\'] ?? null;
        
        $this->text(\'name\', trans(\'admin.name\'))->required()->help(\'用户昵称\');
        $this->image(\'avatar\', trans(\'admin.avatar\'))->autoUpload();

        $this->password(\'old_password\', trans(\'admin.old_password\'));

        $this->password(\'password\', trans(\'admin.password\'))
            ->minLength(5)
            ->maxLength(20)
            ->customFormat(function ($v) {
                if ($v == $this->password) {
                    return;
                }

                return $v;
            })
            ->help(\'请输入5-20个字符\');
        $this->password(\'password_confirmation\', trans(\'admin.password_confirmation\'))
            ->same(\'password\')
            ->help(\'请输入确认密码\');
    }
}
```

使用

```php
$grid->user->display(\'View\')->expand(UserProfile::make([\'type\' => 1]));
```


<a name="modal"></a>
### 弹出模态框 (modal)
`modal`方法可以把内容隐藏，点击按钮的时候显示在模态框中
```php
use Dcat\\Admin\\Widgets\\Card;

$grid->column(\'content\')
    ->display(\'查看\') // 设置按钮名称
    ->modal(function ($modal) {
        // 设置弹窗标题
        $modal->title(\'标题 \'.$this->username);
		
		// 自定义图标
		$modal->icon(\'feather icon-x\');
    
        $card = new Card(null, $this->content);
    
        return "<div style=\'padding:10px 10px 0\'>$card</div>";
    });

// 也可以通过这种方式设置弹窗标题
$grid->column(\'content\')
    ->display(\'查看\') // 设置按钮名称
    ->modal(\'弹窗标题\', ...);
```


#### 异步加载

> 更多用法请参考文档[异步加载](https://learnku.com/docs/dcat-admin/2.x/asynchronous-loading/9327)       

定义渲染类，继承`Dcat\\Admin\\Support\\LazyRenderable`

```php
use App\\Models\\Post as PostModel;
use Dcat\\Admin\\Support\\LazyRenderable;
use Dcat\\Admin\\Widgets\\Table;

class Post extends LazyRenderable
{
    public function render()
    {
        // 获取ID
        $id = $this->key;
        
        // 获取其他自定义参数
        $type = $this->post_type;

        $data = PostModel::where(\'user_id\', $id)
            ->where(\'type\', $type)
            ->get([\'title\', \'body\', \'body\', \'created_at\'])
            ->toArray();

        $titles = [
            \'User ID\',
            \'Title\',
            \'Body\',
            \'Created At\',
        ];

        return Table::make($titles, $data);
    }
}
```

使用
```php
$grid->post->display(\'View\')->modal(\'Post\', Post::make([\'post_type\' => 2]));

// 可以在闭包内返回异步加载类的实例
$grid->post->modal(function ($modal) {
    $modal->title(\'自定义弹窗标题\');

    // 允许在闭包内返回异步加载类的实例
    return Post::make([\'title\' => $this->title]);
});
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/1679b6d2989cd18046904cad5b53c31b667b7fa21eb8f.gif)



#### 异步加载工具表单

定义[工具表单](https://learnku.com/docs/dcat-admin/2.x/tools-form/8125)类如下

> 更多用法请参考[异步加载](https://learnku.com/docs/dcat-admin/2.x/asynchronous-loading/9327)

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Contracts\\LazyRenderable;
use Dcat\\Admin\\Traits\\LazyWidget;
use Dcat\\Admin\\Widgets\\Form;

class UserProfile extends Form implements LazyRenderable
{
    use LazyWidget;

    public function handle(array $input)
    {
        // 接收外部传递参数
		$type = $this->payload[\'type\'] ?? null;
        
        return $this->response()->success(\'保存成功\');
    }

    public function form()
    {
        // 接收外部传递参数
        $type = $this->payload[\'type\'] ?? null;
        
        $this->text(\'name\', trans(\'admin.name\'))->required()->help(\'用户昵称\');
        $this->image(\'avatar\', trans(\'admin.avatar\'))->autoUpload();

        $this->password(\'old_password\', trans(\'admin.old_password\'));

        $this->password(\'password\', trans(\'admin.password\'))
            ->minLength(5)
            ->maxLength(20)
            ->customFormat(function ($v) {
                if ($v == $this->password) {
                    return;
                }

                return $v;
            })
            ->help(\'请输入5-20个字符\');
        $this->password(\'password_confirmation\', trans(\'admin.password_confirmation\'))
            ->same(\'password\')
            ->help(\'请输入确认密码\');
    }
}
```

使用

```php
$grid->user->display(\'View\')->modal(UserProfile::make([\'type\' => 1]));
```


### 进度条 (progressBar)
`progressBar`进度条
```php
$grid->rate->progressBar();

//设置颜色，默认`primary`,可选`danger`、`warning`、`info`、`primary`、`success`
$grid->rate->progressBar(\'success\');

// 设置进度条尺寸和最大值
$grid->rate->progressBar(\'success\', \'sm\', 100);
```

### showTreeInDialog
`showTreeInDialog`方法可以把一个带有层级关系的数组呈现为树形弹窗，比如权限就可以用此方法展示
```php
// 查出所有的权限数据
$nodes = (new $permissionModel)->allNodes();

// 传入二维数组（未分层级）
$grid->permissions->showTreeInDialog($nodes);

// 也可以传入闭包
$grid->permissions->showTreeInDialog(function (Grid\\Displayers\\DialogTree $tree) use (&$nodes, $roleModel) {
    // 设置所有节点
    $tree->nodes($nodes);
    
    // 设置节点数据字段名称，默认"id"，"name"，"parent_id"
    $tree->setIdColumn(\'id\');
    $tree->setTitleColumn(\'title\');
    $tree->setParentColumn(\'parent_id\');

    // $this->roles 可以获取当前行的字段值
    foreach (array_column($this->roles, \'slug\') as $slug) {
        if ($roleModel::isAdministrator($slug)) {
            // 选中所有节点
            $tree->checkAll();
        }
    }
});
```
![](http://docs.oneself.icu:10010/storage/markdown/images/405caece48dee843b6c8d8620f311395667b7fd2ef40b.png)


### 内容映射 (using)
```php
$grid->status->using([0 => \'未激活\', 1 => \'正常\']);

// 第二个参数为默认值
$grid->gender->using([1 => \'男\', 2 => \'女\'], \'未知\');
```

### 字符串分割为数组
`explode`方法可以把字符串分割为数组。
```php
$grid->tag->explode()->label();

// 可以指定分隔符，默认","
$grid->tag->explode(\'|\')->label();
```

### prepend

`prepend` 方法用于给 `string` 或 `array` 类型的值前面插入内容。

```php
// 当字段值是一个字符串
$grid->email->prepend(\'mailto:\');

// 当字段值是一个数组
$grid->arr->prepend(\'first item\');
```

`prepend`方法允许传入闭包参数
```php
$grid->email->prepend(function ($value, $original) {
    // $value 是当前字段值
    // $original 是当前字段从数据库中查询出来的原始值
    
    // 获取其他字段值
    $username = $this->username;
    
    return "[{$username}]";
});
```

### append
`append` 方法用于给 `string` 或 `array` 类型的值后面插入内容。

```php
// 当字段值是一个字符串
$grid->email->append(\'@gmail.com\');

// 当字段值是一个数组
$grid->arr->append(\'last item\');
```

`append`方法允许传入闭包参数
```php
$grid->email->append(function ($value, $original) {
    // $value 是当前字段值
    // $original 是当前字段从数据库中查询出来的原始值
    
    // 获取其他字段值
    $username = $this->username;
    
    return "[{$username}]";
});
```

### 字符串或数组截取 (limit)

```php
// 最多显示50个字符
$grid->column(\'content\')->limit(50, \'...\');

// 如果字段值是数组也支持
$grid->tags->limit(3);
```

### 列二维码 (qrcode)
```php
$grid->website->qrcode(function () {
    return $this->url;
}, 200, 200);
```

### 可复制 (copyable)
```php
$grid->website->copyable();
```


### 可排序 (orderable)

通过`Column::orderable`可以开启字段可排序功能，此功能需要在你的模型类中`use ModelTree`或`use SortableTrait`，并且需要继承`Spatie\\EloquentSortable\\Sortable`接口。


#### SortableTrait

如果你的数据不是层级结构数据，可以直接使用`use SortableTrait`，更多用法可参考[eloquent-sortable](https://github.com/spatie/eloquent-sortable)。

模型
```php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;
use Spatie\\EloquentSortable\\Sortable;
use Spatie\\EloquentSortable\\SortableTrait;

class MyModel extends Model implements Sortable
{
    use SortableTrait;

    protected $sortable = [
        // 设置排序字段名称
        \'order_column_name\' => \'order\',
        // 是否在创建时自动排序，此参数建议设置为true
        \'sort_when_creating\' => true,
    ];
}
```

使用
```php
$grid->model()->orderBy(\'order\');

$grid->order->orderable();
```

#### ModelTree

如果你的数据是层级结构数据，可以直接使用`use Model`，下面以权限模型为例来演示用法

> `ModelTree`实际上也是继承了[eloquent-sortable](https://github.com/spatie/eloquent-sortable)的功能。

```php
<?php

namespace Dcat\\Admin\\Models;

use Dcat\\Admin\\Traits\\HasDateTimeFormatter;
use Dcat\\Admin\\Traits\\ModelTree;
use Spatie\\EloquentSortable\\Sortable;

class Permission extends Model implements Sortable
{
    use HasDateTimeFormatter,
        ModelTree {
            ModelTree::boot as treeBoot;
        }
        
    ...    
}        
```

使用
```php
$grid->order->orderable();
```



### 链接 (link)

将字段显示为一个链接。

```php
// link方法不传参数时，链接的`href`和`text`都是当前列的值
$grid->column(\'homepage\')->link();

// 传入闭包
$grid->column(\'homepage\')->link(function ($value) {
    return admin_url(\'users/\'.$value);
});
```

<a name="action"></a>
### 行操作 (action)

> 在使用这个方法之前，请先阅读[自定义操作-行操作](https://learnku.com/docs/dcat-admin/2.x/use-and-extension-of-rows/8092)

这个功能可以将某一列显示为一个**行操作**的按钮，比如下面所示是一个标星和取消标星的列操作，
点击这一列的星标图标之后, 后台会切换字段的状态，页面图标也跟着切换，具体实现代码如下：


```php
<?php

namespace App\\Admin\\Extensions\\Grid\\RowAction;

use Dcat\\Admin\\Grid\\RowAction;
use Illuminate\\Http\\Request;

class Star extends RowAction
{
    protected function html()
    {
        $icon = ($this->row->{$this->getColumnName()}) ? \'fa-star\' : \'fa-star-o\';

        return <<<HTML
<i class="{$this->getElementClass()} fa {$icon}"></i>
HTML;
    }

    public function handle(Request $request)
    {
        try {
            $class = $request->class;
            $column = $request->column;
            $id = $this->getKey();

            $model = $class::find($id);
            $model->{$column} = (int) !$model->{$column};
            $model->save();

            return $this->response()->success("success")->refresh();
        } catch (\\Exception $e) {
            return $this->response()->error($e->getMessage());
        }
    }

    public function parameters()
    {
        return [
            \'class\' => $this->modelClass(),
            \'column\' => $this->getColumnName(),
        ];
    }

    public function getColumnName()
    {
        return $this->column->getName();
    }

    public function modelClass()
    {
        return get_class($this->parent->model()->repository()->model());
    }
}
```

使用

```php
protected function grid()
{
    $grid = new Grid(new $this->model());

    $grid->column(\'star\', \'-\')->action(Star::class);  // here
    $grid->column(\'id\', \'ID\')->sortable()->bold();
    
    return $grid;
}
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/b2da1dd37fc7e7aa009e5798b6771399667b7ff1f3ae3.png)


## 帮助方法

### 字符串操作
如果当前里的输出数据为字符串，那么可以通过链式方法调用`Illuminate\\Support\\Str`的方法。

比如有如下一列，显示`title`字段的字符串值:

```php
$grid->title();
```

在`title`列输出的字符串基础上调用`Str::title()`方法
```php
$grid->title()->title();
```
调用方法之后输出的还是字符串，所以可以继续调用`Illuminate\\Support\\Str`的方法：
```php
$grid->title()->title()->ucfirst();

$grid->title()->title()->ucfirst()->substr(1, 10);

```

### 数组操作
如果当前列输出的是数组，可以直接链式调用`Illuminate\\Support\\Collection`方法。

比如`tags`列是从一对多关系取出来的数组数据：
```php
$grid->tags();

array (
  0 => 
  array (
    \'id\' => \'16\',
    \'name\' => \'php\',
    \'created_at\' => \'2016-11-13 14:03:03\',
    \'updated_at\' => \'2016-12-25 04:29:35\',
    
  ),
  1 => 
  array (
    \'id\' => \'17\',
    \'name\' => \'python\',
    \'created_at\' => \'2016-11-13 14:03:09\',
    \'updated_at\' => \'2016-12-25 04:30:27\',
  ),
)

```

调用`Collection::pluck()`方法取出数组的中的`name`列
```php
$grid->tags()->pluck(\'name\');

array (
    0 => \'php\',
    1 => \'python\',
  ),

```
取出`name`列之后输出的还是数组，还能继续调用用`Illuminate\\Support\\Collection`的方法

```php
$grid->tags()->pluck(\'name\')->map(\'ucwords\');

array (
    0 => \'Php\',
    1 => \'Python\',
  ),
```
将数组输出为字符串
```php
$grid->tags()->pluck(\'name\')->map(\'ucwords\')->implode(\'-\');

"Php-Python"
```

### 混合使用

在上面两种类型的方法调用中，只要上一步输出的是确定类型的值，便可以调用类型对应的方法，所以可以很灵活的混合使用。

比如`images`字段是存储多图片地址数组的JSON格式字符串类型：
```php

$grid->images();

// "[\'foo.jpg\', \'bar.png\']"

// 链式方法调用来显示多图
$grid->images()->display(function ($images) {
    return json_decode($images, true);
    
})->map(function ($path) {
    return \'http://localhost/images/\'. $path;
    
})->image();

```


## 扩展列的显示功能

可以通过两种方式扩展列功能，第一种是通过匿名函数的方式。
>扩展列功能方法后IDE默认是不会自动补全的，这时候可以通过`php artisan admin:ide-helper`生成IDE提示文件。

### 匿名函数
在`app/Admin/bootstrap.php`加入以下代码:
```php
use Dcat\\Admin\\Grid\\Column;

// 第二个参数是自定义参数
Column::extend(\'color\', function ($value, $color) {
    return "<span style=\'color: $color\'>$value</span>";
});
```
然后在`model-grid`中使用这个扩展：
```php
$grid->title()->color(\'#ccc\');
```

### 扩展类
如果列显示逻辑比较复杂，可以通过扩展类来实现。

扩展类`app/Admin/Extensions/Popover.php`:
```php
<?php

namespace App\\Admin\\Extensions;

use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Grid\\Displayers\\AbstractDisplayer;

class Popover extends AbstractDisplayer
{
    public function display($placement = \'left\')
    {
        Admin::script("$(\'[data-toggle=\\"popover\\"]\').popover()");

        return <<<EOT
<button type="button"
    class="btn btn-secondary"
    title="popover"
    data-container="body"
    data-toggle="popover"
    data-placement="$placement"
    data-content="{$this->value}"
    >
  弹出提示
</button>
EOT;

    }
}
```
然后在`app/Admin/bootstrap.php`注册扩展类：
```php
use Dcat\\Admin\\Grid\\Column;
use App\\Admin\\Extensions\\Popover;

Column::extend(\'popover\', Popover::class);
```
然后就能在`model-grid`中使用了：
```php
$grid->desciption()->popover(\'right\');
```',
   'order' => 3,
   'created_at' => '2024-06-26 10:41:59',
   'updated_at' => '2024-06-26 10:41:59',
   'slug' => 'display-and-expansion-of-columns',
),
            (object) array(
   'id' => 17,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '行的使用和扩展',
   'content' => '# 行的使用和扩展

### 启用或禁用默认操作按钮

`model-grid`默认有四个行操作`编辑`、`快捷编辑`、`删除`和`详情`，可以通过下面的方式关闭它们：

```php
use Dcat\\Admin\\Grid;

 $grid->actions(function (Grid\\Displayers\\Actions $actions) {
    $actions->disableDelete();
    $actions->disableEdit();
    $actions->disableQuickEdit();
    $actions->disableView();
});

// 也可以通过以下方式启用或禁用按钮
$grid->disableDeleteButton();
$grid->disableEditButton();
$grid->disableQuickEditButton();
$grid->disableViewButton();
```

### 切换行操作按钮显示方式

全局默认的行操作按钮显示方式可以通过配置参数`admin.grid.grid_action_class`参数进行配置，目前支持的行操作按钮显示方式有以下两种：

- `Dcat\\Admin\\Grid\\Displayers\\DropdownActions` 下拉菜单方式
- `Dcat\\Admin\\Grid\\Displayers\\Actions` 图标展开方式
- `Dcat\\Admin\\Grid\\Displayers\\ContextMenuActions` 鼠标右键显示下拉菜单 (Since `v1.4.5`)

```php
    ...

    \'grid\' => [

        /*
        |--------------------------------------------------------------------------
        | The global Grid action display class.
        |--------------------------------------------------------------------------
        */
        \'grid_action_class\' => Dcat\\Admin\\Grid\\Displayers\\DropdownActions::class,
    ],
    
    ...
```

在控制器中切换显示方式
```php
use Dcat\\Admin\\Grid;

public function grid()
{
    return Grid(new Model(), function (Grid $grid) {
        $grid->setActionClass(Grid\\Displayers\\Actions::class);
        
        ...
    });
}
```

### 获取行序号 (index)

序号从 `0` 开始计算

```php
// 在 display 回调中使用
$grid->column(\'序号\')->display(function () {
    return $this->_index + 1;
});


// 在行操作 action 中使用
$grid->actions(function ($actions) {
    $index = $this->_index;
    
    ...
});
```

### 获取当前行数据

可以通过传入的`$actions`参数来获取当前行的数据：
```php
use Dcat\\Admin\\Grid;

$grid->actions(function (Grid\\Displayers\\Actions $actions) {
    // 当前行的数据数组
    $rowArray = $actions->row->toArray();
    
    // 当前行的某个字段的数据
    $email = $actions->row->email;
    
    // 获取当前行主键值
    $id = $actions->getKey();
});
```

### 添加自定义按钮

如果有自定义的操作按钮，可以通过下面的方式添加：

```php
use Dcat\\Admin\\Grid;

$grid->actions(function (Grid\\Displayers\\Actions $actions) {
    // append一个操作
    $actions->append(\'<a href=""><i class="fa fa-eye"></i></a>\');

    // prepend一个操作
    $actions->prepend(\'<a href=""><i class="fa fa-paper-plane"></i></a>\');
});
```


### 添加复杂操作按钮

如果有比较复杂的操作，可以参考下面的方式：


先定义行操作类继承`Dcat\\Admin\\Grid\\RowAction`

> {tip} 动作类更详细的用法，请参考[动作基本使用](https://learnku.com/docs/dcat-admin/1.x/basic-use/8124)以及[数据表格动作](https://learnku.com/docs/dcat-admin/1.x/data-table/8126)。

```php
<?php

namespace App\\Admin\\Extensions;

use Dcat\\Admin\\Grid\\RowAction;

class CheckRow extends RowAction
{
    /**
     * 返回字段标题
     * 
     * @return string
     */
    public function title()
    {
        return \'Check row\';
    }
    
    /**
     * 添加JS
     * 
     * @return string
     */
    protected function script()
    {
        return <<<JS
$(\'.grid-check-row\').on(\'click\', function () {
    
    // Your code.
    console.log($(this).data(\'id\'));
    
});
JS;
    }

    public function html()
    {
        // 获取当前行数据ID
        $id = $this->getKey();
        
        // 获取当前行数据的用户名
        $username = $this->row->username;
        
        // 这里需要添加一个class, 和上面script方法对应
        $this->setHtmlAttribute([\'data-id\' => $id, \'email\' => $username, \'class\' => \'grid-check-row\']);

        return parent::html();
    }
}
```
然后添加操作：
```php
$grid->actions(new CheckRow());

// 也可以通过这种方式添加
$grid->actions(function (Grid\\Displayers\\Actions $actions) {
    $actions->append(new CheckRow());
});
```

### 操作按钮需要与API交互

如果你的操作类需要与后台接口交互，则可以在你的操作类中加上`handle`方法，这样就可以很方便的在同一个类里面处理完所有逻辑

> {tip} 动作类更详细的用法，请参考[动作基本使用](https://learnku.com/docs/dcat-admin/1.x/basic-use/8124)以及[数据表格动作](https://learnku.com/docs/dcat-admin/1.x/data-table/8126)。

```php
<?php

namespace App\\Admin\\RowActions;

use Dcat\\Admin\\Grid\\RowAction;
use Illuminate\\Http\\Request;
use Illuminate\\Database\\Eloquent\\Model;

class Copy extends RowAction
{
    protected $model;

    public function __construct(string $model = null)
    {
        $this->model = $model;
    }

    /**
     * 标题
     *
     * @return string
     */
    public function title()
    {
        return \'Copy\';
    }

    /**
     * 设置确认弹窗信息，如果返回空值，则不会弹出弹窗
     *
     * 允许返回字符串或数组类型
     *
     * @return array|string|void
     */
    public function confirm()
    {
        return [
            // 确认弹窗 title
            "您确定要复制这行数据吗？",
            // 确认弹窗 content
            $this->row->username,
        ];
    }

    /**
     * 处理请求
     *
     * @param Request $request
     *
     * @return \\Dcat\\Admin\\Actions\\Response
     */
    public function handle(Request $request)
    {
        // 获取当前行ID
        $id = $this->getKey();

        // 获取 parameters 方法传递的参数
        $username = $request->get(\'username\');
        $model = $request->get(\'model\');

        // 复制数据
        $model::find($id)->replicate()->save();

        // 返回响应结果并刷新页面
        return $this->response()->success("复制成功: [{$username}]")->refresh();
    }

    /**
     * 设置要POST到接口的数据
     *
     * @return array
     */
    public function parameters()
    {
        return [
            // 发送当前行 username 字段数据到接口
            \'username\' => $this->row->username,
            // 把模型类名传递到接口
            \'model\' => $this->model,
        ];
    }
}

```

使用
```php
use App\\Models\\User;

$grid->actions([new Copy(User::class)]);

// 也可以通过这种方式添加
$grid->actions(function (Grid\\Displayers\\Actions $actions) {
    $actions->append(new Copy(User::class));
});
```

### 表单弹窗

请参考文档[工具表单 - 弹窗](https://learnku.com/docs/dcat-admin/1.x/tools-form/8125#modal)',
   'order' => 4,
   'created_at' => '2024-06-26 10:42:46',
   'updated_at' => '2024-06-26 10:42:46',
   'slug' => 'use-and-extension-of-rows',
),
            (object) array(
   'id' => 18,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '工具栏',
   'content' => '# 工具栏

## 工具按钮

在`model-grid`的头部默认有`批量删除`和`刷新`两个操作工具，如果有更多的操作需求，系统提供了自定义工具的功能,下面的示例添加一个性别分类选择的按钮组工具。

<a name="outline"></a>
### 设置工具栏按钮样式

工具栏按钮默认显示`outline`模式，效果如下

用法
```php
$grid->toolsWithOutline();

// 禁止
$grid->toolsWithOutline(false);
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/dca8cf0ab722a1456c5015563a8db402667b806f5fced.png)

禁用`outline`后的效果

![](http://docs.oneself.icu:10010/storage/markdown/images/d2b554789840306ab0e3444fc2b09547667b807a92866.png)

如果你希望某个按钮不使用`outline`模式，可以在按钮的`class`属性中加上`disable-outline`
```php
$grid->tools(\'<a class="btn btn-primary disable-outline">测试按钮</a>\');
```

### 自定义工具栏按钮

先定义工具类`app/Admin/Extensions/Tools/UserGender.php`继承工具类的基类`Dcat\\Admin\\Grid\\Tools\\AbstractTool`：

```php
<?php

namespace App\\Admin\\Extensions\\Tools;

use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Grid\\Tools\\AbstractTool;

class UserGender extends AbstractTool
{
    protected function script()
    {
        $url = request()->fullUrlWithQuery([\'gender\' => \'_gender_\']);

        return <<<JS
$(\'input:radio.user-gender\').change(function () {
    var url = "$url".replace(\'_gender_\', $(this).val());

    Dcat.reload(url);
});
JS;
    }

    public function render()
    {
        Admin::script($this->script());

        $options = [
            \'all\'   => \'All\',
            \'m\'     => \'Male\',
            \'f\'     => \'Female\',
        ];

        return view(\'admin.tools.gender\', compact(\'options\'));
    }
}
```

视图`admin.tools.gender`文件为`resources/views/admin/tools/gender.blade.php`:
```html
<div class="btn-group" data-toggle="buttons">
    @foreach($options as $option => $label)
    <label class="btn btn-default {{ request()->get(\'gender\', \'all\') == $option ? \'active\' : \'\' }}">
        <input type="radio" class="user-gender" value="{{ $option }}">{{$label}}
    </label>
    @endforeach
</div>
```

在`Grid`引入这个工具：
```php
$grid->tools(new UserGender());
```

在`model-grid`定义中接收到`gender`参数后，做好数据查询就可以了：
```php
if (in_array($gender = request()->get(\'gender\'), [\'m\', \'f\'])) {
    $grid->model()->where(\'gender\', $gender);
}
```

可以参考上面的方式来添加自己的工具。

### 进阶用法

如果你的工具按钮需要与后端API进行交互，则可以参考以下方式定义：

> `AbstractTool`类是属于`Dcat\\Admin\\Actions\\Action`的子类，本质也是动作类的一种，更详细用法请参考[动作类基本使用](https://learnku.com/docs/dcat-admin/1.x/basic-use/8124)。


```php
<?php

namespace App\\Admin\\Grid\\Tools;

use Dcat\\Admin\\Grid\\Tools\\AbstractTool;
use Illuminate\\Http\\Request;

class SendMessage extends AbstractTool
{
    /**
     * 按钮样式定义，默认 btn btn-white waves-effect
     * 
     * @var string 
     */
    protected $style = \'btn btn-white waves-effect\';
    
    
    /**
     * 按钮文本
     * 
     * @return string|void
     */
    public function title()
    {
        return \'发送提醒\';
    }
    
    /**
     *  确认弹窗，如果不需要则返回空即可
     * 
     * @return array|string|void
     */
    public function confirm()
    {
        // 只显示标题
//        return \'您确定要发送新的提醒消息吗？\';
        
        // 显示标题和内容
        return [\'您确定要发送新的提醒消息吗？\', \'确认信息内容，如没有可以留空\'];
    }
    
    /**
     * 处理请求
     * 如果你的类中包含了此方法，则点击按钮后会自动向后端发起ajax请求，并且会通过此方法处理请求逻辑
     * 
     * @param Request $request
     */
    public function handle(Request $request)
    {
        // 你的代码逻辑
        
        return $this->response()->success(\'发送成功\')->refresh();
    }
    
    /**
     * 设置请求参数
     * 
     * @return array|void
     */
    public function parameters()
    {
        return [
            
        ];
    }
}
```

使用

```php
use App\\Admin\\Grid\\Tools\\SendMessage;

$grid->tools(new SendMessage());
```


### 添加工具类

`Grid::tools` 方法允许传入 `string`，`array`, `AbstractTool` 和 `闭包`等类型参数，下面是演示。

```php
// 传入字符串
$grid->tools(\'<a class="btn btn-sm btn-default">工具按钮测试</a>\');

// 传入数组
$grid->tools([
	\'<a class="btn btn-sm btn-default">工具按钮测试</a>\',
	new UserGender(),
]);

// 传入闭包
$grid->tools(function (Grid\\Tools $tools) {
	$tools->append(new UserGender());
});
```

<a name="batch"></a>
## 批量操作

### 禁用批量删除

系统默认开启了批量删除操作的功能，如果要禁用批量删除操作：

```php
$grid->tools(function ($tools) {
    $tools->batch(function ($batch) {
        $batch->disableDelete();
    });
});

// 也可以这样
$grid->disableBatchDelete();

// 或
$grid->batchActions(function (Grid\\Tools\\BatchActions $batch) {
	$batch->disableDelete();
});
```

### 自定义批量操作

下面通过扩展一个对文章批量发布的功能来演示自定义批量操作的功能：

先定义操作类`app/Admin/Extensions/Tools/ReleasePost.php`，继承`Dcat\\Admin\\Grid\\BatchAction`：

> `BatchAction`类是属于`Dcat\\Admin\\Actions\\Action`的子类，本质也是动作类的一种，更详细用法请参考[动作类基本使用](https://learnku.com/docs/dcat-admin/1.x/basic-use/8124)。

```php
<?php

namespace App\\Admin\\Extensions\\Tools;

use Dcat\\Admin\\Grid\\BatchAction;
use Illuminate\\Http\\Request;

class ReleasePost extends BatchAction
{
    protected $action;

    // 注意action的构造方法参数一定要给默认值
    public function __construct($title = null, $action = 1)
    {
        $this->title = $title;
        $this->action = $action;
    }
    
    // 确认弹窗信息
    public function confirm()
    {
        return \'您确定要发布已选中的文章吗？\';
    }
    
    // 处理请求
    public function handle(Request $request)
    {
        // 获取选中的文章ID数组
        $keys = $this->getKey();
        
        // 获取请求参数
        $action = $request->get(\'action\');
        
        foreach (Post::find($keys) as $post) {
            $post->released = $action;
            $post->save();
        }
        
        $message = $action ? \'文章发布成功\' : \'文章下线成功\';
        
        return $this->response()->success($message)->refresh();
    }
    
    // 设置请求参数
    public function parameters()
    {
        return [
            \'action\' => $this->action,
        ];
    }
}
```
看代码的实现，通过click操作发送一个post请求，把选中的行数据`id`通过数组的形式传给后端接口，后端接口拿到`id`列表和要修改的状态来更新数据，然后前端刷新页面(pjax reload)，并弹出`toastr`提示操作成功。

在`model-grid`中加入这个批量操作功能：
```php
$grid->batchActions([
	new ReleasePost(\'发布文章\', 1),
	new ReleasePost(\'文章下线\', 0)
]);  

// 也可以这么写
$grid->batchActions(function ($batch) {
    $batch->add(new ReleasePost(\'发布文章\', 1));
    $batch->add(new ReleasePost(\'文章下线\', 0));
});

// 或
$grid->tools(function ($tools) {
    $tools->batch(function ($batch) {
    	$batch->add(new ReleasePost(\'发布文章\', 1));
    	$batch->add(new ReleasePost(\'文章下线\', 0));
    });
});
```

#### 获取复选框选中的ID数组

通过`getSelectedKeysScript`方法可以获取到复选框选中的ID数组，用法如下

> {tip} `getSelectedKeysScript`方法返回的是`js`代码，只能在`js`代码中使用。

```php
<?php

namespace App\\Admin\\Extensions\\Tools;

use Dcat\\Admin\\Grid\\BatchAction;
use Illuminate\\Http\\Request;

class ReleasePost extends BatchAction
{
    protected $action;

    public function __construct($title, $action = 1)
    {
        $this->title = $title;
        $this->action = $action;
    }
    
    // 确认弹窗信息
    public function confirm()
    {
        return \'您确定要发布已选中的文章吗？\';
    }
    
    // 处理请求
    public function handle(Request $request)
    {
        ...
    }
    
    /**
     * 设置动作发起请求前的回调函数，返回false可以中断请求. 
     * 
     * @return string
     */
    public function actionScript(){
        $warning = __(\'No data selected!\');

        return <<<JS
function (data, target, action) { 
    var key = {$this->getSelectedKeysScript()}

    if (key.length === 0) {
        Dcat.warning(\'{$warning}\');
        return false;
    }

    // 设置主键为复选框选中的行ID数组
    action.options.key = key;
}
JS;
    }
}
```

### 表单弹窗

请参考文档[工具表单 - 弹窗](https://learnku.com/docs/dcat-admin/1.x/tools-form/8125#modal)',
   'order' => 5,
   'created_at' => '2024-06-26 10:44:19',
   'updated_at' => '2024-06-26 10:44:19',
   'slug' => 'toolbar',
),
            (object) array(
   'id' => 19,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '树状表格',
   'content' => '# 树状表格

树状表格支持分页和点击加载功能，特别适合用来展示数据量较大的多层级结构数据。
![](http://docs.oneself.icu:10010/storage/markdown/images/b227414accaa7d34500c0d3ac11c60c4667b80b591547.png)


### 表结构和模型
要使用树状表格，要遵守约定的表结构：

> 此表结构和模型可完全兼容 <code>[模型树](https://learnku.com/docs/dcat-admin/1.x/basic-use/8122)</code> 。

```sql
CREATE TABLE `demo_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT \'0\',
  `order` int(11) NOT NULL DEFAULT \'0\', // order 字段不是必须的，不设置也可以
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
```
上面的表格结构里面有三个必要的字段`id`、`parent_id`、`title`,其它字段没有要求。

对应的模型为`app/Models/Category.php`:

> 为了便于阅读，这里不再展示 `Repository` 代码。

```php
<?php

namespace App\\Models\\Demo;

use Dcat\\Admin\\Traits\\ModelTree;
use Illuminate\\Database\\Eloquent\\Model;

class Category extends Model
{
    use ModelTree;

    protected $table = \'demo_categories\';
}
```
表结构中的三个字段`parent_id`、`order`、`title`的字段名也是可以修改的：
```php
<?php

namespace App\\Models\\Demo;

use Dcat\\Admin\\Traits\\ModelTree;
use Illuminate\\Database\\Eloquent\\Model;

class Category extends Model
{
    use ModelTree;

    protected $table = \'demo_categories\';
    
    protected $titleColumn = \'name\';
    
    protected $orderColumn = \'sort\';
    
    protected $parentColumn = \'pid\';
}
```

如果你的数据表不需要 `order` 字段排序，则在模型中添加如下代码即可
```php
<?php

namespace App\\Models\\Demo;

use Dcat\\Admin\\Traits\\ModelTree;
use Illuminate\\Database\\Eloquent\\Model;

class Category extends Model
{
    use ModelTree;

    protected $table = \'demo_categories\';
    
    // 返回空值即可禁用 order 字段
    public function getOrderColumn()
    {
        return null;
    }
}
```


### 使用

通过调用 `Grid\\Column::tree` 方法即可开启树状表格功能，开启之后默认只查询最顶级节点的数据，子节点数据需要点击加载

```php
<?php

namespace App\\Admin\\Controllers\\Demo;

use App\\Models\\Category;
use Dcat\\Admin\\Grid;
use Dcat\\Admin\\Controllers\\AdminController;

class CategoryController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->id(\'ID\')->bold()->sortable();
            $grid->title->tree(); // 开启树状表格功能 
            $grid->order;
    
            $grid->created_at;
            $grid->updated_at->sortable();
            
            $grid->filter(function (Grid\\Filter $filter) {
                $filter->like(\'slug\');
                $filter->like(\'name\');
                $filter->like(\'http_path\');
            });
        });
    }
}
```

上面的代码执行的 `sql` 如下（默认只查询 `parent = 0` 的数据）：
```sql
select count(*) as aggregate from `demo_categories` where `parent_id` = 0

select * from `demo_categories` where `parent_id` = 0 order by `order` asc, `id` asc limit 20 offset 0
```


`Grid\\Column::tree` 方法参数

+ `bool` `$showAll`  `false`  是否一次性展示下一层级的所有节点，默认分页展示
+ `bool` `$sortable` `true`   是否开启排序功能

```php
// 禁用分页功能，一次性加载所有下一层级节点
$grid->title->tree(true);


// 不需要 order 字段排序，第二个参数传 false 即可
$grid->title->tree(false, false);
```


### orderable排序

`orderable` 排序功能依赖 <a href="https://github.com/spatie/eloquent-sortable" target="__blank">spatie/eloquent-sortable</a> 组件，需要修改模型：

```php
use Spatie\\EloquentSortable\\Sortable;

class Category extends Model implements Sortable
{
    use ModelTree;
    
    // 设置排序字段，默认order
    protected $orderColumn = \'sort\';
}
```

下面是使用示例

```php
class CategoryController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->id(\'ID\')->bold()->sortable();
            $grid->title->tree(); // 开启树状表格功能 
            $grid->order->orderable(); // 开启排序功能
    
            ...;
        });
    }
}
```

### 关于数据搜索

如果在树状表格中使用了搜索功能（`Grid::filter`、`Grid\\Column::filter`、`Grid::quickSearch`），为了让用户能搜索到想要的数据，则会<b>取消只查最顶级数据的操作</b>。

> 使用 [查询过滤](https://learnku.com/docs/dcat-admin/1.x/query-filtering/8097)、[列过滤器](https://learnku.com/docs/dcat-admin/1.x/column-filter/8098)、[快捷搜索](https://learnku.com/docs/dcat-admin/1.x/quick-search/8099) 等搜索功能都会<b>取消只查最顶级数据的操作</b>，只有 [筛选器](https://learnku.com/docs/dcat-admin/1.x/specification-filter/8100) 和 [范围查询scope](https://learnku.com/docs/dcat-admin/1.x/query-filtering/8097#scope) 等功能例外。


例如下面的代码开启了快捷搜索
```php
class CategoryController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->id(\'ID\')->bold()->sortable();
            $grid->title->tree(); // 开启树状表格功能 
            $grid->order->orderable(); // 开启排序功能
    
            $grid->quickSearch([\'id\', \'title\']);
            ...;
        });
    }
}
```

且用户在浏览器中使用了快捷搜索，则产生`sql`如下

```sql
select count(*) as aggregate from `demo_categories` where `id` like "%xxx%" or `title` like "%xxx%"

select * from `demo_categories` where `id` like "%xxx%" or `title` like "%xxx%" order by `order` asc, `id` asc limit 20 offset 0
```

### 与模型树功能的差别

[模型树](https://learnku.com/docs/dcat-admin/1.x/basic-use/8122)同样可用于展示多层级结构数据，并且支持用拖拽的方式实现数据的层级、排序等操作，但是不支持分页和点击加载功能，只能一次性加载完所有数据，
因此[模型树](https://learnku.com/docs/dcat-admin/1.x/basic-use/8122)并不适合用来展示数据量较大的数据。


而树状表格支持分页和点击加载功能，适合用来展示数据量较大的多层级结构数据，但不支持用拖拽的方式实现数据的层级、排序操作。',
   'order' => 6,
   'created_at' => '2024-06-26 10:45:17',
   'updated_at' => '2024-06-26 10:45:17',
   'slug' => 'tree-table',
),
            (object) array(
   'id' => 20,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '组合表头',
   'content' => '# 组合表头

通过 `Grid::combine` 方法可以很方便的把任意两个以上的字段组合成一级表头

![](http://docs.oneself.icu:10010/storage/markdown/images/aa22f3573fa0e09aa51bab59772b5d6b667b80fd08b7e.png)


示例

```php
protected function grid()
{
    return Grid::make(new Report(), function (Grid $grid) {
        // 第一个参数为一级表头字段名称，第二个字段为二级表头字段名称，二级表头字段最少设置两个
        $grid->combine(\'avgCost\', [\'avgMonthCost\', \'avgQuarterCost\', \'avgYearCost\']);
        
        $grid->combine(\'avgVist\', [\'avgMonthVist\', \'avgQuarterVist\', \'avgYearVist\']);
        
        // 设置样式
        $grid->combine(\'top\', [\'topCost\', \'topVist\', \'topIncr\'])->style(\'color:#1867c0\');
        
        $grid->column(\'content\')->limit(50);
        $grid->column(\'cost\')->sortable();
        $grid->column(\'avgMonthCost\');
        $grid->column(\'avgQuarterCost\')->setHeaderAttributes([\'style\' => \'color:#5b69bc\']);
        $grid->column(\'avgYearCost\');
        $grid->column(\'avgMonthVist\');
        $grid->column(\'avgQuarterVist\');
        $grid->column(\'avgYearVist\');
        $grid->column(\'incrs\');
        $grid->column(\'avgVists\');
        $grid->column(\'topCost\');
        $grid->column(\'topVist\');
        $grid->column(\'topIncr\');
        $grid->column(\'date\')->sortable();
    });
}
```',
   'order' => 7,
   'created_at' => '2024-06-26 10:46:26',
   'updated_at' => '2024-06-26 10:46:26',
   'slug' => 'combined-header',
),
            (object) array(
   'id' => 21,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '数据来源以及查询条件',
   'content' => '# 表格数据源


数据仓库(`Repository`)是一个可以提供特定接口对数据进行读写操作的类，通过数据仓库的引入，可以让页面的构建不再关心数据读写功能的具体实现，开发者只需要实现特定的操作接口即可轻松切换数据源。关于数据仓库的详细用法请参考文档[数据仓库](https://learnku.com/docs/dcat-admin/1.x/basic-use/8123)。


> 表格的数据是通过 `Dcat\\Admin\\Contracts\\Repository::get` 接口获取的。


<a name="model"></a>
## 数据来自模型

> 如果你的数据来自`Model`，那么你也可以直接使用`Model`实例，底层会自动把`Model`转化为数据仓库实例。


当数据源支持`Eloquent Model`时，只需创建一个简单的`Repository`类继承`Dcat\\Admin\\Repositories\\EloquentRepository`即可
```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use App\\Models\\Movie as MovieModel;

class Movie extends EloquentRepository
{
    // 这里定义你的模型类名
    protected $eloquentClass = MovieModel::class;
    
    // 通过这个方法可以指定查询的字段，默认"*"
    public function getGridColumns()
    {
        return [$this->getKeyName(), \'name\', \'title\', \'created_at\'];
    }
}
```


### 直接使用模型
如果你还觉得创建 `Repository` 类麻烦，也可以直接把 `Eloquent Model` 的实例传递到 `Grid` 中，底层会自动把 `Eloquent Model` 转化为 `EloquentRepository` 实例 

```php
use App\\Models\\Movie as MovieModel;

$grid = new Grid(new MovieModel());

...
```


### 修改数据查询条件

1、使用 `Grid\\Model`
```php
use App\\Admin\\Repositories\\Movie;

$grid = new Grid(new Movie());

// 添加默认查询条件
$grid->model()->where(\'id\', \'>\', 100);

// 设置初始排序条件
$grid->model()->orderBy(\'id\', \'desc\');

...

```
其它查询方法可以参考`eloquent`的查询方法。


2、使用 `Model Query`

```php
use App\\Models\\Movie as MovieModel;

$grid = new Grid(MovieModel::where(\'id\', \'>\', 100));

...
```


### 关联数据

有以下三种方式让你的表格支持关联数据


1、使用Repository
```php
use App\\Admin\\Repositories\\Movie;

// 相当于 MovieModel::with(\'categories\')
$grid = new Grid(Movie::with([\'categories\']));

$grid->categories;

...
```


2、使用 `Grid\\Model`
```php
use App\\Admin\\Repositories\\Movie;

$grid = new Grid(new Movie());

$grid->model()->with(\'categories\');

$grid->categories;

...
```


3、使用 `Model Query`
```php
use App\\Models\\Movie as MovieModel;

$grid = new Grid(MovieModel::with(\'categories\'));

$grid->categories;

...
```



<a name="api"></a>
## 数据来自外部API

<a name="example"></a>
### 示例

如果数据是来自外部的API，只需要覆写`Repository`中的`get`方法既可, 具体用法可参考下面的示例，采用`豆瓣电影`API获取并展示数据：

> {tip} 需要注意的是分页和不分页的情况下`get`方法返回的参数值类型是不同的，具体使用可参考[数据仓库 - get](https://learnku.com/docs/dcat-admin/1.x/basic-use/8123#get)。


```php
<?php
namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Grid;
use Dcat\\Admin\\Repositories\\Repository;
use Illuminate\\Pagination\\LengthAwarePaginator;

class ComingSoon extends Repository
{
    protected $api = \'https://api.douban.com/v2/movie/coming_soon\';
    
    /**
     * 定义主键字段名称 
     * 
     * @return string
     */
    public function getPrimaryKeyColumn()
    {
        return \'_id\';
    }

    /**
     * 查询表格数据
     *
     * @param Grid\\Model $model
     * @return LengthAwarePaginator
     */
    public function get(Grid\\Model $model)
    {
        // 当前页数
		$currentPage = $model->getCurrentPage();
		// 每页显示行数
		$perPage = $model->getPerPage();

		// 获取排序字段
		[$orderColumn, $orderType] = $model->getSort();

		// 获取"scope"筛选值
		$city = $model->filter()->input($model->filter()->getScopeQueryName(), \'广州\');
		
		// 如果设置了其他过滤器字段，也可以通过“input”方法获取值，如：
		$title = $model->filter()->input(\'title\');
		if ($title !== null) {
			// 执行你的筛选逻辑
			
		}

		$start = ($currentPage - 1) * $perPage;

		$client = new \\GuzzleHttp\\Client();

		$response = $client->get("{$this->api}?{$this->apiKey}&city=$city&start=$start&count=$perPage");
		$data = json_decode((string)$response->getBody(), true);

		return $model->makePaginator(
            $data[\'total\'] ?? 0, // 传入总记录数
            $data[\'subjects\'] ?? [] // 传入数据二维数组
		);
    }

}
```
<a name="grid-model"></a>
### Grid\\Model 常用方法

<a name="getCurrentPage"></a>
#### 获取当前页数 (getCurrentPage)
获取当前页码
- 返回值： `int|null` 如果不允许分页返回null
```php
$page = $model->getCurrentPage();
```

<a name="getPerPage"></a>
#### 获取每页显示行数 (getPerPage)
获取每页显示行数
- 返回值： `int|null` 如果不允许分页返回null
```php
$limit = $model->getPerPage();
```

<a name="getSort"></a>
#### 获取排序字段 (getSort)
获取排序字段
- 返回值： `array` `[$orderColumn, \'desc\'|\'asc\']` || `[null, null]`

```php
// $orderColumn 字段名称，如没有进行排序则为 null
// $orderType 正序或倒序： "desc"、"asc"，如没有进行排序则为 null
list($orderColumn, $orderType) = $model->getSort();
```

<a name="getFilter"></a>
#### 获取过滤器对象 (filter)
获取过滤器对象，通过过滤器对象可以获取到搜索表单的值，用法如下
- 返回值 `Dcat\\Admin\\Grid\\Filter`

```php
// 获取"scope"筛选值
$city = $model->filter()->input(Grid\\Filter\\Scope::QUERY_NAME, \'广州\');

// 如果设置了其他过滤器字段，也可以通过“input”方法获取值，如：
$title = $model->filter()->input(\'title\');
if ($title !== null) {
    // 执行你的筛选逻辑
}
```

#### 获取快捷搜索表单值

通过以下方式可以获取到快捷搜索表单值

```php
$quickSearch = $model->grid()->quickSearch()->value();
```


<a name="sql"></a>
## 数据来自复杂SQL查询

如果来源数据需要执行比较复杂的SQL语句获取，可以通过覆盖掉`Repository`的`get`方法实现。

> 需要注意的是分页和不分页的情况下`get`方法返回的参数值类型是不同的，具体使用可参考[数据仓库 - get](https://learnku.com/docs/dcat-admin/1.x/basic-use/8123#get)。',
   'order' => 8,
   'created_at' => '2024-06-26 10:47:18',
   'updated_at' => '2024-06-26 10:47:18',
   'slug' => 'data-source',
),
            (object) array(
   'id' => 22,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '关联关系',
   'content' => '# 表格关联关系

### 一对一
`users`表和`profiles`表通过`profiles.user_id`字段生成一对一关联

```sql
CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
`updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `profiles` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
`updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

对应的数据模以及数据仓库分别为:

```php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class User extends Model
{
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
```

```php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
```
数据仓库
```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use App\\Models\\User as UserModel;

class User extends EloquentRepository
{
    protected $eloquentClass = UserModel::class;
}
```

<a name="relation"></a>
#### 三种关联数据表的方法

通过以下三种方式的代码可以关联`profile`表数据:

方式一：直接使用数据仓库关联
```php
use App\\Admin\\Repositories\\User;
use Dcat\\Admin\\Grid;

// 关联 profile 表数据
$grid = Grid::make(new User([\'profile\']), function (Grid $grid) {    
    $grid->id(\'ID\')->sortable();
    
    $grid->name();
    $grid->email();
    
    // 显示一对一数据
    $grid->column(\'profile.age\');
    $grid->column(\'profile.gender\');
    
    $grid->created_at();
    $grid->updated_at();
});
```

方式二：使用`Model::with`方法关联
```php
use App\\Models\\User;
use Dcat\\Admin\\Grid;

// 关联 profile 表数据
$grid = Grid::make(User::with([\'profile\']), function (Grid $grid) {    
    $grid->id(\'ID\')->sortable();
    
    ...
});
```

方式三：使用`Grid\\Model`方法关联
```php
use App\\Admin\\Repositories\\User;
use Dcat\\Admin\\Grid;


$grid = Grid::make(new User(), function (Grid $grid) {
	// 关联 profile 表数据
	$grid->model()->with([\'profile\']);
    
    $grid->id(\'ID\')->sortable();
    
    ...
});
```


### 一对多

`posts`表和`comments`表通过`comments.post_id`字段生成一对多关联

```sql
CREATE TABLE `posts` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
`updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `comments` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`post_id` int(10) unsigned NOT NULL,
`content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
`updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

对应的数据模和数据仓库分别为:

```php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
```

```php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
```

```php
<?php

namespace App\\Admin\\Repositories;

use App\\Models\\Post as PostModel;
use Dcat\\Admin\\Repositories\\EloquentRepository;

class Post extends EloquentRepository
{
    protected $eloquentClass = PostModel::class;
}
```

```php
<?php

namespace App\\Admin\\Repositories;

use App\\Models\\Comment as CommentModel;
use Dcat\\Admin\\Repositories\\EloquentRepository;

class Comment extends EloquentRepository
{
    protected $eloquentClass = CommentModel::class;
}
```

同样这里支持上述的[三种方式关联数据](#relation)，限于篇幅这里不再重复写所有用法

Post表格

```php
use App\\Admin\\Repositories\\Post;

// 关联 comment 表数据
$grid = Grid::make(new Post([\'comments\']), function (Grid $grid) {
    $grid->id(\'id\')->sortable();
    $grid->title();
    $grid->content();
    
    $grid->comments(\'评论数\')->display(function ($comments) {
        $count = count($comments);
        
        return "<span class=\'label label-warning\'>{$count}</span>";
    });
    
    $grid->created_at();
    $grid->updated_at();
});
```

Comment表格

```php
use App\\Admin\\Repositories\\Comment;

// 关联 post 表数据
$grid = new Grid(new Comment([\'post\']));

$grid->column(\'id\');
$grid->column(\'post.title\');
$grid->column(\'content\');

$grid->created_at()->sortable();
$grid->updated_at();
```

### 多对多

`users`和`roles`表通过中间表`role_users`产生多对多关系

```sql
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci

CREATE TABLE `role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `role_users_role_id_user_id_index` (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
```

对应的数据模和数据仓库分别为:


User 模型
```php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class User extends Model
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
```
Role 模型
```php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
```

数据仓库
```php
<?php

namespace App\\Admin\\Repositories;

use App\\Models\\User as UserModel;
use Dcat\\Admin\\Repositories\\EloquentRepository;

class User extends EloquentRepository
{
    protected $eloquentClass = UserModel::class;
}
```

同样这里支持上述的[三种方式关联数据](#relation)，限于篇幅这里不再重复写所有用法

```php
use App\\Admin\\Repositories\\User;

// 关联 role 表数据
$grid = Grid::make(new User(\'roles\'), function (Grid $grid) {
    $grid->id(\'ID\')->sortable();
    $grid->username();
    $grid->name();
    
    $grid->roles()->pluck(\'name\')->label();
    
    $grid->created_at();
    $grid->updated_at();
});
```',
   'order' => 9,
   'created_at' => '2024-06-26 10:47:50',
   'updated_at' => '2024-06-26 10:47:50',
   'slug' => 'association',
),
            (object) array(
   'id' => 23,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '查询过滤',
   'content' => '# 查询过滤


`model-grid`提供了一系列的方法实现表格数据的查询过滤：

```php
// 禁用
$grid->disableFilter();
// 显示
$grid->showFilter();

// 禁用过滤器按钮
$grid->disableFilterButton();
// 显示过滤器按钮
$grid->showFilterButton();

$grid->filter(function($filter){
    // 展开过滤器
    $filter->expand();
    
    // 在这里添加字段过滤器
    $filter->equal(\'id\', \'产品序列号\');
    $filter->like(\'name\', \'name\');
    ...

});
```

禁止自动展开过滤器
```php
$grid->filter(function($filter){
    // 禁止自动展开过滤器
    $filter->expand(false);
    
    ...

});
```

## 过滤器布局

默认布局方式为`rightSide`

### rightSide
```php
use Dcat\\Admin\\Grid;

$grid->filter(function (Grid\\Filter $filter) {
    // 更改为 rightSide 布局
    $filter->rightSide();
    
    ...
});
```
效果

![](http://docs.oneself.icu:10010/storage/markdown/images/4e324f0c86e304aa15f2e628765f6d7c667b81d26a500.png)


### panel

```php
use Dcat\\Admin\\Grid;

$grid->filter(function (Grid\\Filter $filter) {
    // 更改为 panel 布局
    $filter->panel();
    
    // 注意切换为panel布局方式时需要重新调整表单字段的宽度
    $filter->equal(\'id\')->width(3);
});
```
效果

![](http://docs.oneself.icu:10010/storage/markdown/images/a4b15fd8d92cc692944d8a89c736849f667b81a43db2b.png)


### 自定义布局 (view)

如果以上的布局无法满足需求，可以通过`view`方法自定义过滤器模板

```php
$grid->filter(function ($filter) {
    $filter->view(\'xxx\');
    
    ...
});
```


<a name="type"></a>
## 查询类型

目前支持的过滤类型有下面这些:

<a name="equal"></a>
### equal
`sql: ... WHERE `column` = "$input"`：
```php
$filter->equal(\'column\', $label);
```

<a name="nequal"></a>
### notEqual
`sql: ... WHERE `column` != "$input"`：
```php
$filter->notEqual(\'column\', $label);
```
<a name="like"></a>
### like
`sql: ... WHERE `column` LIKE "%$input%"`：
```php
$filter->like(\'column\', $label);
```

### ilike
`sql: ... WHERE `column` ILIKE "%$input%"`：
```php
$filter->ilike(\'column\', $label);
```
<a name="startwith"></a>
### startWith
`sql: ... WHERE `column` LIKE "$input%"`：
```php
$filter->startWith(\'column\', $label);

// 如果需要使用“ilike”
$filter->startWith(\'column\', $label)->ilike();
```

<a name="endwith"></a>
### endWith
`sql: ... WHERE `column` LIKE "%$input"`：
```php
$filter->endWith(\'column\', $label);

// 如果需要使用“ilike”
$filter->endWith(\'column\', $label)->ilike();
```

<a name="gt"></a>
### gt
`sql: ... WHERE `column` > "$input"`：
```php
$filter->gt(\'column\', $label);
```

<a name="lt"></a>
### lt
`sql: ... WHERE `column` < "$input"`：
```php
$filter->lt(\'column\', $label);
```

<a name="ngt"></a>
### ngt
`sql: ... WHERE `column` <= "$input"`：
```php
$filter->ngt(\'column\', $label);
```

<a name="nlt"></a>
### nlt
`sql: ... WHERE `column` >= "$input"`：
```php
$filter->nlt(\'column\', $label);
```

<a name="between"></a>
### between
`sql: ... WHERE `column` BETWEEN "$start" AND "$end"`：
```php
$filter->between(\'column\', $label);

// 设置datetime类型
$filter->between(\'column\', $label)->datetime();

// 设置time类型
$filter->between(\'column\', $label)->time();
```

<a name="in"></a>
### in
`sql: ... WHERE `column` in (...$inputs)`：
```php
$filter->in(\'column\', $label)->multipleSelect([\'key\' => \'value\']);
```

<a name="notIn"></a>
### notIn
`sql: ... WHERE `column` not in (...$inputs)`：
```php
$filter->notIn(\'column\', $label)->multipleSelect([\'key\' => \'value\']);
```

<a name="date"></a>
### date
`sql: ... WHERE DATE(`column`) = "$input"`：
```php
$filter->date(\'column\', $label);
```

<a name="day"></a>
### day
`sql: ... WHERE DAY(`column`) = "$input"`：
```php
$filter->day(\'column\', $label);
```

<a name="month"></a>
### month
`sql: ... WHERE MONTH(`column`) = "$input"`：
```php
$filter->month(\'column\', $label);
```

<a name="year"></a>
### year
`sql: ... WHERE YEAR(`column`) = "$input"`：
```php
$filter->year(\'column\', $label);
```
<a name="findinset"></a>
### findInSet
`sql: ... WHERE FIND_IN_SET("$input", $column)`：
```php
$filter->findInSet(\'column\', $label);
```


<a name="where"></a>
### 复杂查询where

可以用where来构建比较复杂的查询过滤

`sql: ... WHERE `title` LIKE "%$input" OR `content` LIKE "%$input"`：
```php
$filter->where(\'search\', function ($query) {

    $query->where(\'title\', \'like\', "%{$this->input}%")
        ->orWhere(\'content\', \'like\', "%{$this->input}%");

});
```

`sql: ... WHERE `rate` >= 6 AND `created_at` = {$input}`:
```php
$filter->where(\'Text\', function ($query) {

    $query->whereRaw("`rate` >= 6 AND `created_at` = {$this->input}");

});
```

关系查询，查询对应关系`profile`的字段：
```php
$filter->where(\'mobile\', function ($query) {

    $query->whereHas(\'profile\', function ($query) {
        $query->where(\'address\', \'like\', "%{$this->input}%")->orWhere(\'email\', \'like\', "%{$this->input}%");
    });

}, \'地址或手机号\');
```

<a name="whereBetween"></a>
### 复杂范围查询whereBetween

通过`whereBetween`可以自定义范围查询

```php
$filter->whereBetween(\'created_at\', function ($q) {
	$start = $this->input[\'start\'] ?? null;
	$end = $this->input[\'end\'] ?? null;

	$q->whereHas(\'goods\', function ($q) use ($start,$end) {
		if ($start !== null) {
			$q->where(\'price\', \'>=\', $start);
		}
		 
		if ($end !== null) {
			$q->where(\'price\', \'<=\', $end);
		}
	});
});       
```

同时这个方法也支持时间日期范围查询

```php
$filter->whereBetween(\'created_at\', function ($q) {
	...
})->datetime(); 
```

<a name="group"></a>
### 过滤器组group
有时候对同一个字段要设置多种筛选方式，可以通过下面的方式实现

```php
$filter->group(\'rate\', function ($group) {
    $group->gt(\'大于\');
    $group->lt(\'小于\');
    $group->nlt(\'不小于\');
    $group->ngt(\'不大于\');
    $group->equal(\'等于\');
});
```
有下面的几个方法可以调用
```php
// 等于
$group->equal();

// 不等于
$group->notEqual();

// 大于
$group->gt();

// 小于
$group->lt();

// 大于等于
$group->nlt();

// 小于等于
$group->ngt();

// 匹配
$group->match();

// 复杂条件
$group->where();

// like查询
$group->like();

// like查询
$group->contains();

// ilike查询
$group->ilike();

// 以输入的内容开头
$group->startWith();

// 以输入的内容结尾
$group->endWith();
```

<a name="scope"></a>
### 范围查询scope
可以把你最常用的查询定义为一个查询范围，它将会出现在筛选按钮的下拉菜单中，下面是几个例子：
```php
$filter->scope(\'male\', \'男性\')->where(\'gender\', \'m\');

// 多条件查询
$filter->scope(\'new\', \'最近修改\')
    ->whereDate(\'created_at\', date(\'Y-m-d\'))
    ->orWhere(\'updated_at\', date(\'Y-m-d\'));

// 关联关系查询
$filter->scope(\'address\')->whereHas(\'profile\', function ($query) {
    $query->whereNotNull(\'address\');
});

$filter->scope(\'trashed\', \'被软删除的数据\')->onlyTrashed();
```
scope方法第一个参数为查询的key, 会出现的url参数中，第二个参数是下拉菜单项的label, 如果不填，第一个参数会作为label显示

scope方法可以链式调用任何eloquent查询条件，效果参考Demo

<a name="form"></a>
## 表单类型

<a name="text"></a>
### text

表单类型默认是`text input`，可以设置`placeholder`：

```php
$filter->equal(\'column\')->placeholder(\'请输入。。。\');
```

也可以通过下面的一些方法来限制用户输入格式：

```php
$filter->equal(\'column\')->url();

$filter->equal(\'column\')->email();

$filter->equal(\'column\')->integer();

$filter->equal(\'column\')->ip();

$filter->equal(\'column\')->mac();

$filter->equal(\'column\')->mobile();

// $options 参考 https://github.com/RobinHerbots/Inputmask/blob/4.x/README_numeric.md
$filter->equal(\'column\')->decimal($options = []);

// $options 参考 https://github.com/RobinHerbots/Inputmask/blob/4.x/README_numeric.md
$filter->equal(\'column\')->currency($options = []);

// $options 参考 https://github.com/RobinHerbots/Inputmask/blob/4.x/README_numeric.md
$filter->equal(\'column\')->percentage($options = []);

// $options 参考 https://github.com/RobinHerbots/Inputmask, $icon为input前面的图标
$filter->equal(\'column\')->inputmask($options = [], $icon = \'pencil\');
```


<a name="select-table"></a>
### 表格选择器 (selectTable)


```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Models\\Administrator;

$filter->equal(\'user_id\')
	->selectTable(UserTable::make([\'id\' => ...])) // 设置渲染类实例，并传递自定义参数
	->title(\'弹窗标题\')
	->dialogWidth(\'50%\') // 弹窗宽度，默认 800px
	->model(Administrator::class, \'id\', \'name\'); // 设置编辑数据显示
	
// 上面的代码等同于
$filter->equal(\'user_id\')
	->selectTable(UserTable::make([\'id\' => ...])) // 设置渲染类实例，并传递自定义参数
	->options(function ($v) { // 设置编辑数据显示
		if (! $v) {
			return [];
		}
		
		return Administrator::find($v)->pluck(\'name\', \'id\');
	});
```

定义渲染类如下，需要继承`Dcat\\Admin\\Grid\\LazyRenderable`

> {tip} 这里使用了数据表格异步加载功能，详细用法请参考[异步加载](https://learnku.com/docs/dcat-admin/2.x/asynchronous-loading/9327)

```php
<?php

namespace App\\Admin\\Renderable;

use Dcat\\Admin\\Grid;
use Dcat\\Admin\\Grid\\LazyRenderable;
use Dcat\\Admin\\Models\\Administrator;

class UserTable extends LazyRenderable
{
    public function grid(): Grid
    {
        // 获取外部传递的参数
        $id = $this->id;
        
        return Grid::make(new Administrator(), function (Grid $grid) {
            $grid->column(\'id\');
            $grid->column(\'username\');
            $grid->column(\'name\');
            $grid->column(\'created_at\');
            $grid->column(\'updated_at\');
            
            // 指定行选择器选中时显示的值的字段名称
			// 指定行选择器选中时显示的值的字段名称
			// 指定行选择器选中时显示的值的字段名称
			// 如果表格数据中带有 “name”、“title”或“username”字段，则可以不用设置
			$grid->rowSelector()->titleColumn(\'username\');

            $grid->quickSearch([\'id\', \'username\', \'name\']);

            $grid->paginate(10);
            $grid->disableActions();

            $grid->filter(function (Grid\\Filter $filter) {
                $filter->like(\'username\')->width(4);
                $filter->like(\'name\')->width(4);
            });
        });
    }
}
```


#### 多选（multipleSelectTable）

多选的用法与上述`selectTable`方法一致

```php
$filter->in(\'user_id\')
	->multipleSelectTable(UserTable::make([\'id\' => $form->getKey()])) // 设置渲染类实例，并传递自定义参数
	->max(10) // 最多选择 10 个选项，不传则不限制
	->model(Administrator::class, \'id\', \'name\'); // 设置编辑数据显示
```



<a name="select"></a>
### select
```php
$filter->equal(\'column\')->select([\'key\' => \'value\'...]);

// 或者从api获取数据，api的格式参考model-form的select组件
$filter->equal(\'column\')->select(\'api/users\');
```

<a name="multipleSelect"></a>
### multipleSelect
一般用来配合`in`和`notIn`两个需要查询数组的查询类型使用，也可以在`where`类型的查询中使用：
```php
$filter->in(\'column\')->multipleSelect([\'key\' => \'value\'...]);

// 或者从api获取数据，api的格式参考model-form的multipleSelect组件
$filter->in(\'column\')->multipleSelect(\'api/users\');
```

<a name="datetime"></a>
### datetime

通过日期时间组件来查询，`$options`的参数和值参考[bootstrap-datetimepicker](http://eonasdan.github.io/bootstrap-datetimepicker/Options/)

```php
$filter->equal(\'column\')->datetime($options);

// `date()` 相当于 `datetime([\'format\' => \'YYYY-MM-DD\'])`
$filter->equal(\'column\')->date();

// `time()` 相当于 `datetime([\'format\' => \'HH:mm:ss\'])`
$filter->equal(\'column\')->time();

// `day()` 相当于 `datetime([\'format\' => \'DD\'])`
$filter->equal(\'column\')->day();

// `month()` 相当于 `datetime([\'format\' => \'MM\'])`
$filter->equal(\'column\')->month();

// `year()` 相当于 `datetime([\'format\' => \'YYYY\'])`
$filter->equal(\'column\')->year();

```

如果你的时间日期字段在数据库中存储的是时间戳类型，那么可以通过`toTimestamp`方法把表单的值转化为时间戳
```php
$filter->equal(\'column\')->datetime($options)->toTimestamp();
```


<a name="method"></a>
## 常用方法

<a name="width"></a>
### 过滤器宽度 (width)
```php
// 设置为“1-12”之间的值，默认值是“3”
$filter->equal(\'column\')->width(3);

// 也可以写死宽度
$filter->equal(\'column\')->width(\'250px\');
```

<a name="default"></a>
### 设置默认值 (default)
```php
$filter->equal(\'column\')->default(\'text\');

$filter->equal(\'column\')->select([0 => \'PHP\', 1 => \'Java\'])->default(1);

// 使用 between 过滤器时，提供 start 和 end 为键的数组
$filter->between(\'column\')->default([\'start\' => 0, \'end\' => 1]);
$filter->between(\'column\')->date()->default([\'start\' => \'2000-01-01\', \'end\' => \'2000-01-01\']);
```

<a name="expand"></a>
### 展开过滤器 (expand)
```php
$filter->expand();

$filter->equal(\'column\');
...
```

<a name="withoutInputBorder"></a>
### 不显示过滤器input输入框的边框
```php
$filter->withoutInputBorder();

$filter->equal(\'column\');
...
```

<a name="style"></a>
### 设置过滤器容器样式
```php
$filter->style(\'padding:0\');

$filter->equal(\'column\');
...
```

<a name="padding"></a>
### 设置过滤器容器padding
```php
$filter->padding(\'10px\', \'10px\', \'10px\', \'10px\');

$filter->equal(\'column\');
...
```

### 忽略筛选项 (ignore)

通过`ignore`方法可以在提交表单时忽略当前筛选项

```php
$filter->equal(\'column\')->ignore();
```


<a name="relation"></a>
## 关联关系字段查询

假设你的模型如下

```php
class User extends Model
{
    public function profile()
    {
        return $this->hasOne(...);
    }
    
    public function myPosts()
    {
        return $this->hasMany(...);
    }
}
```

通过下面的方法可以查询`profiles`表的`first_name`字段以及`posts`表的`title`字段

```php
$grid->filter(function ($filter) {
    $filter->like(\'profile.first_name\');
    
    $filter->like(\'myPosts.title\');
});
```

如果安装了 [dcat/laravel-wherehasin](https://github.com/jqhph/laravel-wherehasin)，则会优先使用`whereHasIn`方法进行查询操作


<a name="extend"></a>
## 自定义过滤器
下面通过`between`的实现来讲解下怎么自定义过滤器。

首先新建一个过滤器类继承`Dcat\\Admin\\Grid\\Filter\\AbstractFilter`：
```php
<?php

namespace Dcat\\Admin\\Grid\\Filter;

use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Grid\\Filter\\Presenter\\DateTime;
use Illuminate\\Support\\Arr;

class Between extends AbstractFilter
{
    // 自定义你的过滤器显示模板
    protected $view = \'admin::filter.between\';

    // 这个方法用于生成过滤器字段的唯一id
    // 通过这个唯一id则可以用js代码对其进行操作
    public function formatId($column)
    {
       $id   = str_replace(\'.\', \'_\', $column);
       $name = $this->parent->getGrid()->getName();

       return [\'start\' => "{$name}{$id}_start", \'end\' => "{$name}{$id}_end"];
    }

    // form表单name属性格式化
    protected function formatName($column)
    {
        $columns = explode(\'.\', $column);

        if (count($columns) == 1) {
            $name = $columns[0];
        } else {
            $name = array_shift($columns);

            foreach ($columns as $column) {
                $name .= "[$column]";
            }
        }

        return [\'start\' => "{$name}[start]", \'end\' => "{$name}[end]"];
    }

    // 创建条件
    // 这里构建的条件支持`Laravel query builder`即可。
    public function condition($inputs)
    {
        if (!Arr::has($inputs, $this->column)) {
            return;
        }

        $this->value = Arr::get($inputs, $this->column);

        $value = array_filter($this->value, function ($val) {
            return $val !== \'\';
        });

        if (empty($value)) {
            return;
        }

        if (!isset($value[\'start\']) && isset($value[\'end\'])) {
            // 这里返回的数组相当于
            // $query->where($this->column, \'<=\', $value[\'end\']);
            return $this->buildCondition($this->column, \'<=\', $value[\'end\']);
        }

        if (!isset($value[\'end\']) && isset($value[\'start\'])) {
            // 这里返回的数组相当于
            // $query->where($this->column, \'>=\', $value[\'end\']);
            return $this->buildCondition($this->column, \'>=\', $value[\'start\']);
        }

        $this->query = \'whereBetween\';

        // 这里返回的数组相当于
        // $query->whereBetween($this->column, $value[\'end\']);
        return $this->buildCondition($this->column, $this->value);
    }

    // 自定义过滤器表单显示方式
    public function datetime($options = [])
    {
        $this->view = \'admin::filter.betweenDatetime\';

        DateTime::collectAssets();

        $this->setupDatetime($options);

        return $this;
    }

    protected function setupDatetime($options = [])
    {
        $options[\'format\'] = Arr::get($options, \'format\', \'YYYY-MM-DD HH:mm:ss\');
        $options[\'locale\'] = Arr::get($options, \'locale\', config(\'app.locale\'));

        $startOptions = json_encode($options);
        $endOptions = json_encode($options + [\'useCurrent\' => false]);

        // 通过上面格式化后的id对表单进行你想要的操作
        $script = <<<JS
            $(\'#{$this->id[\'start\']}\').datetimepicker($startOptions);
            $(\'#{$this->id[\'end\']}\').datetimepicker($endOptions);
            $("#{$this->id[\'start\']}").on("dp.change", function (e) {
                $(\'#{$this->id[\'end\']}\').data("DateTimePicker").minDate(e.date);
            });
            $("#{$this->id[\'end\']}").on("dp.change", function (e) {
                $(\'#{$this->id[\'start\']}\').data("DateTimePicker").maxDate(e.date);
            });
JS;

        Admin::script($script);
    }
}
```
`admin::filter.between`模板内容如下：
```php
<div class="filter-input col-sm-{{ $width }} "  style="{!! $style !!}">
    <div class="form-group" >
        <div class="input-group input-group-sm">
            <span class="input-group-addon"><b>{!! $label !!}</b></span>
            <input type="text" class="form-control" placeholder="{{$label}}" name="{{$name[\'start\']}}" value="{{ request($name[\'start\'], \\Illuminate\\Support\\Arr::get($value, \'start\')) }}">
            <span class="input-group-addon" style="border-left: 0; border-right: 0;">To</span>
            <input type="text" class="form-control" placeholder="{{$label}}" name="{{$name[\'end\']}}" value="{{ request($name[\'end\'], \\Illuminate\\Support\\Arr::get($value, \'end\')) }}">
        </div>
    </div>
</div>
```
`admin::filter.betweenDatetime`模板内容如下：
```php
<div class="filter-input col-sm-{{ $width }}"  style="{!! $style !!}">
    <div class="form-group">
        <div class="input-group input-group-sm">
            <span class="input-group-addon"><b>{{$label}}</b>  &nbsp;<i class="fa fa-calendar"></i></span>
            <input type="text" class="form-control" id="{{$id[\'start\']}}" placeholder="{{$label}}" name="{{$name[\'start\']}}" value="{{ request($name[\'start\'], \\Illuminate\\Support\\Arr::get($value, \'start\')) }}">
            <span class="input-group-addon" style="border-left: 0; border-right: 0;">To</span>
            <input type="text" class="form-control" id="{{$id[\'end\']}}" placeholder="{{$label}}" name="{{$name[\'end\']}}" value="{{ request($name[\'end\'], \\Illuminate\\Support\\Arr::get($value, \'end\')) }}">
        </div>
    </div>
</div>
```

现在只要调用`extend`方法可以使用了，打开`app/Admin/bootstrap.php`，加入以下代码：
```php
Filter::extend(\'customBetween\', Filter\\Between::class);
```

使用：

```php
$filter->customBetween(\'created_at\')->datetime();
```',
   'order' => 10,
   'created_at' => '2024-06-26 10:50:09',
   'updated_at' => '2024-06-26 10:50:09',
   'slug' => 'query-filtering',
),
            (object) array(
   'id' => 24,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '列过滤器',
   'content' => '# 列过滤器

这个功能可以给表格的列设置一个过滤器，可以更方便的根据这一列进行数据表格过滤操作

![](http://docs.oneself.icu:10010/storage/markdown/images/d3cd06a56a46e5fec0e05a8fe8b2f455667b8248b315c.png)



## 字符串比较查询

```php
use Dcat\\Admin\\Grid;

// WHERE `username` = "$input"
$grid->username->filter(
    Grid\\Column\\Filter\\Equal::make()
);
```

上面的调用可以给 `username` 这一列的头部加上一个 `input` 类型的过滤器，点击过滤器图标展开过滤器，输入查询提交后，会对这一列执行 `等于` 查询。


### 开启字段值查询
这个功能可以给每一列字段的值设置一个过滤器，点击该列字段的值就可以进行数据表格过滤操作，非常方便。

> 开启此功能之后会把这个字段的原始值作为搜索内容，不会受 `display` 方法影响。

```php
use Dcat\\Admin\\Grid;

// 设置为 label 或调用 display 方法不会影响查询内容
$grid->ip->label()->filter();

// 相当于
$grid->ip->filter(
    Grid\\Column\\Filter\\Equal::make()->valueFilter()
);
```

鼠标移动到开启了值查询功能的列上面，右边会显示一个`放大镜`图标
![](http://docs.oneself.icu:10010/storage/markdown/images/8343fc06d78aa06ff14e9ff9c6c32ce5667b82556f919.png)


点击列之后，表头会出现`重置`按钮，点击可以取消筛选

![](http://docs.oneself.icu:10010/storage/markdown/images/e87e90b4fea92e8b0384e30274289237667b8260c73a8.png)


#### 设置值的字段名称

如果当前列的值并非用户想要搜索的值，可以通过以下方法更改字段名称。

```php
$grid->model()->with(\'user\');

// 实际搜索的会是 name 字段的值
$grid->username->filter(\'name\');

// 二维数组
$grid->user_id->filter(\'user.id\');

// 闭包
$grid->user_id->filter(function () {
    return $this->user[\'id\'];
});
```

#### 隐藏表头的筛选器图标

```php
use Dcat\\Admin\\Grid;

$grid->user_id->filterByValue();

// 相当于
$grid->user_id->filter(
    Grid\\Column\\Filter\\Equal::make()
        ->valueFilter()
        ->hide()
);
```

效果如下
![](http://docs.oneself.icu:10010/storage/markdown/images/637c62fa6bee8f7b4402fb9fb9923314667b826caa156.png)



### 其余Input表单类型过滤器

```php
use Dcat\\Admin\\Grid;

// WHERE `username` LIKE "%{$input}%"
$grid->username->filter(
    Grid\\Column\\Filter\\Like::make()
);

// WHERE `username` LIKE "{$input}%"
$grid->username->filter(
    Grid\\Column\\Filter\\StartWith::make()
);

// WHERE `username` > "$input"
$grid->username->filter(
    Grid\\Column\\Filter\\Gt::make()
);

// WHERE `username` <= "$input"
$grid->username->filter(
    Grid\\Column\\Filter\\Ngt::make()
);

// WHERE `username` < "$input"
$grid->username->filter(
    Grid\\Column\\Filter\\Lt::make()
);

// WHERE `username` >= "$input"
$grid->username->filter(
    Grid\\Column\\Filter\\Nlt::make()
);
```

### 时间日期
如果字段是时间、日期相关的字段，可以使用下面的方法

```php
use Dcat\\Admin\\Grid;

$grid->date()->filter(
    Grid\\Column\\Filter\\Equal::make()->date()
);

$grid->time()->filter(
    Grid\\Column\\Filter\\Like::make()->time()
);

$grid->datetime()->filter(
    Grid\\Column\\Filter\\Gt::make()->datetime(\'YYYY-MM-DD HH:mm:ss\')
);
```




## 多选查询
假设需要在表格数据中通过 `status` 字段过滤一个或者多个状态的数据，使用多选过滤可以非常方便的实现

```php
use Dcat\\Admin\\Grid;

$grid->column(\'status\', \'状态\')->filter(
    Grid\\Column\\Filter\\In::make([
        0 => \'未知\',
        1 => \'已下单\',
        2 => \'已付款\',
        3 => \'已取消\',
    ])
);
```

## 范围查询
假设需要通过 `price` 字段过滤出某个价格范围内的数据

```php
$grid->column(\'price\')->filter(
    Grid\\Column\\Filter\\Between::make()
);
```

或者是时间、日期范围的过滤

```php
use Dcat\\Admin\\Grid;

$grid->date()->filter(
    Grid\\Column\\Filter\\Between::make()->date()
);

$grid->time()->filter(
    Grid\\Column\\Filter\\Between::make()->time()
);

$grid->datetime()->filter(
    Grid\\Column\\Filter\\Between::make()->datetime()
);
```

## 指定查询字段名

通过`setColumnName`方法可以指定查询字段的名称

```php
$grid->column(\'column\')->filter(
    Grid\\Column\\Filter\\Equal::make()->setColumnName(\'custom_column\')
);
```

### 查询json字段

> Since `v1.7.0`

```php
$grid->column(\'column\')->filter(
    Grid\\Column\\Filter\\Equal::make()->setColumnName(\'json_column->label\')
);
```


### 关联关系字段查询

> Since `v1.7.0`

如果安装了 [dcat/laravel-wherehasin](https://github.com/jqhph/laravel-wherehasin)，则会优先使用`whereHasIn`方法进行查询操作

```php
$grid->column(\'user.name\')->filter(
    Grid\\Column\\Filter\\Equal::make()
);

$grid->column(\'user_name\')->filter(
    Grid\\Column\\Filter\\Equal::make()->setColumnName(\'user.name\')
);
```',
   'order' => 11,
   'created_at' => '2024-06-26 10:52:53',
   'updated_at' => '2024-06-26 10:52:53',
   'slug' => 'column-filter',
),
            (object) array(
   'id' => 25,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '快捷搜索',
   'content' => '# 表格快捷搜索

快捷搜索是除了`filter`之外的另一个表格数据搜索方式，用来快速过滤你想要的数据，开启方式如下：

```php
$grid->quickSearch();

// 设置表单提示值
$grid->quickSearch()->placeholder(\'搜索...\');
```
这样表头会出现一个搜索框:

![](http://docs.oneself.icu:10010/storage/markdown/images/9b8dcac5e3d86d633a4bd1238f0cfbba667b832bbef5e.png)


通过给`quickSearch`方法传入不同的参数，来设置不同的搜索方式，有下面几种使用方法

## Like搜索

第一种方式，通过设置字段名称来进行简单的like查询
```php
$grid->quickSearch(\'title\');

// 提交后模型会执行下面的查询
$model->where(\'title\', \'like\', "%{$input}%");
```

或者对多个字段做like查询:
```php
$grid->quickSearch(\'title\', \'desc\', \'content\');
// 或
$grid->quickSearch([\'title\', \'desc\', \'content\']);

// 提交后模型会执行下面的查询
$model->where(\'title\', \'like\', "%{$input}%")
    ->orWhere(\'desc\', \'like\', "%{$input}%")
    ->orWhere(\'content\', \'like\', "%{$input}%");
```

### 关联关系

> Since `v1.7.0`

如果安装了 [dcat/laravel-wherehasin](https://github.com/jqhph/laravel-wherehasin)，则会优先使用`whereHasIn`方法进行查询操作

```php
$grid->quickSearch(\'user.name\', \'user.username\', \'content\');
```

## 自定义搜索
第二种方式可以让你更灵活的控制搜索条件

```php
$grid->quickSearch(function ($model, $query) {
    $model->where(\'title\', $query)->orWhere(\'desc\', \'like\', "%{$query}%");
});
```
其中闭包的参数`$query`为你填入搜索框中的内容，提交之后进行闭包中的查询。

## 快捷语法搜索
第三种方式参考了`Github`的搜索语法，来进行快捷搜索，调用方式：

```php
// 不传参数
$grid->quickSearch();
```
填入搜索框的内容按照以下的语法，在提交之后会进行相应的查询 :

### 比较查询
`title:foo` 、`title:!foo`

```php
$model->where(\'title\', \'foo\');

$model->where(\'title\', \'!=\', \'foo\');
```

`rate:>10`、`rate:<10`、`rate:>=10`、`rate:<=10`
```php
$model->where(\'rate\', \'>\', 10);

$model->where(\'rate\', \'<\', 10);

$model->where(\'rate\', \'>=\', 10);

$model->where(\'rate\', \'<=\', 10);
```

### In、NotIn查询
`status:(1,2,3,4)`、`status:!(1,2,3,4)`

```php
$model->whereIn(\'status\', [1,2,3,4]);

$model->whereNotIn(\'status\', [1,2,3,4]);
```

### Between查询
`score:[1,10]`

```php
$model->whereBetween(\'score\', [1, 10]);
```

### 时间日期函数查询
`created_at:date,2019-06-08`

```php
$model->whereDate(\'created_at\', \'2019-06-08\');
```

`created_at:time,09:57:45`
```php
$model->whereTime(\'created_at\', \'09:57:45\');
```

`created_at:day,08`
```php
$model->whereDay(\'created_at\', \'08\');
```

`created_at:month,06`
```php
$model->whereMonth(\'created_at\', \'06\');
```

`created_at:year,2019`
```php
$model->whereYear(\'created_at\', \'2019\');
```

### Like查询
`content:%Laudantium%`、`content:Laud%`

```php
$model->where(\'content\', \'like\', \'%Laudantium%\');

$model->where(\'content\', \'like\', \'Laud%\');
```

### 正则查询
`username:/song/`

> 这里请使用MYSQL正则语法

```php
$model->where(\'username\', \'REGEXP\', \'song\');
```

### 多条件组合搜索
用空格隔开多个搜索语句就可以实现多个字段的AND查询，比如`username:%song% status:(1,2,3)`, 提交之后会运行下面的搜索
```php
$model->where(\'username\', \'like\', \'%song%\')->whereIn(\'status\', [1, 2, 3]);
```

如果某一个条件是`OR`查询, 只需要在语句单元前增加一个|符号即可： `username:%song% |status:(1,2,3)`
```php
$model->where(\'username\', \'like\', \'%song%\')->orWhereIn(\'status\', [1, 2, 3]);
```

> 如果填入的查询文字中包含空格，需要放在双引号里面：`updated_at:"2019-06-08 09:57:45"`

### Label作为查询字段名称
不方便得到字段名的情况下，可以直接使用label名称作为查询字段

```php
 // 比如设置了`user_status`的表头列名为`用户状态`
$grid->column(\'user_status\', \'用户状态\');
```

那么可以填入`用户状态:(1,2,3)`来执行下面的查询

```php
$model->whereIn(\'user_status\', [1, 2, 3]);
```

## 禁止自动提交

快捷搜索默认是开启自动提交功能的，如果你不需要自动提交，可以通过以下方式禁用这个功能

> 禁用了自动提交功能之后需要通过按回车(`Enter`)键进行搜索。

```php
$grid->quickSearch()->auto(false);
```',
   'order' => 12,
   'created_at' => '2024-06-26 10:55:43',
   'updated_at' => '2024-06-26 10:55:43',
   'slug' => 'quick-search',
),
            (object) array(
   'id' => 26,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '规格筛选器',
   'content' => '# 表格规格筛选器


这个功能用来构建类似淘宝或京东商品的规格选择。

![](http://docs.oneself.icu:10010/storage/markdown/images/49709ad58cb1b49984b25b3d066e4b14667b8365101f0.png)


### 基本使用

> `select`和`selectOne`方法的第二个参数为选择器`label`, 可以省略，如果省略的话将会自动使用翻译文件的翻译.


如下代码所示，假设`brand`字段的4个取值分别对应4个品牌，下面的方式会构建出`brand`的规格选择器

```php
use Dcat\\Admin\\Grid;

$grid->selector(function (Grid\\Tools\\Selector $selector) {
    $selector->select(\'brand\', \'品牌\', [
        1 => \'华为\',
        2 => \'小米\',
        3 => \'OPPO\',
        4 => \'vivo\',
    ]);
});
```

`select`方法默认是多选的，在页面上点击每一个选项的右边的加号，这个字段的查询会增加一个查询选项，如果字段筛选只允许选择一项，使用`selectOne`方法

```php
$selector->selectOne(\'brand\', \'品牌\', [
    1 => \'华为\',
    2 => \'小米\',
    3 => \'OPPO\',
    4 => \'vivo\',
]);
```

### 关联关系字段查询


如果安装了 [dcat/laravel-wherehasin](https://github.com/jqhph/laravel-wherehasin)，则会优先使用`whereHasIn`方法进行查询操作

```php
use Dcat\\Admin\\Grid;

$grid->selector(function (Grid\\Tools\\Selector $selector) {
    $selector->select(\'brand.id\', \'品牌\', [
        1 => \'华为\',
        2 => \'小米\',
        3 => \'OPPO\',
        4 => \'vivo\',
    ]);
});
```

### 自定义查询
上面的方式会使用在选择器上选定的值，作为查询条件进行查询，但是有些情况需要更灵活的控制查询方式，那么可以使用下面的方式自定义查询：

```php
$selector->select(\'price\', \'价格\', [\'0-999\', \'1000-1999\', \'2000-2999\'], function ($query, $value) {
    $between = [
        [0, 999],
        [1000, 1999],
        [2000, 2999],
    ];
    
    $value = current($value);

    $query->whereBetween(\'price\', $between[$value]);
});
```

如上所示，传入一个匿名函数作为第四个参数，价格字段price选择之后，将会使用匿名函数中的逻辑进行数据查询，这样你可以定义任意的查询方式。',
   'order' => 13,
   'created_at' => '2024-06-26 10:56:40',
   'updated_at' => '2024-06-26 10:56:40',
   'slug' => 'specification-filter',
),
            (object) array(
   'id' => 27,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '数据导出',
   'content' => '# 数据导出

系统默认使用<a href="https://github.com/jqhph/easy-excel" target="__blank">Easy Excel</a>作为导出工具，支持导出 `csv`、 `xlsx` 和 `ods` 等格式文件。


使用前必须先安装<a href="https://github.com/jqhph/easy-excel" target="__blank">Easy Excel</a>：

```bash
composer require dcat/easy-excel
```

> {tip} 默认不开启导出功能。

### 启用导出功能
启用或禁用导出功能
```php
$grid->export();
```

禁用 `导出所有` 选项
```php
$grid->export()->disableExportAll();
```

禁用 `导出选中行` 选项
```php
$grid->export()->disableExportSelectedRow();
```

禁用 `导出当前页` 选项
```php
$grid->export()->disableExportCurrentPage();
```

### 导出文件类型

> {tip} 默认导出 `xlsx` 格式文件。

```php
// csv
$grid->export()->csv();

// xlsx
$grid->export()->xlsx();

// ods
$grid->export()->ods();
```

### 设置列标题

> 如果设置了标题，那么导出的文件的**列数**与标题的**列数**相同，且列的**排序**也相同。

```php
// 只导出 id, name和email 三列数据
$titles = [\'id\' => \'ID\', \'name\' => \'名称\', \'email\' => \'邮箱\'];

$grid->export($titles);

// 也可以这么使用
$grid->export()->titles($titles);
```

### 处理导出数据

```php
$grid->export()->rows(function ($rows) {
    foreach ($rows as $index => &$row) {
        $row[\'name\'] = $row[\'first_name\'].\' \'.$row[\'last_name\'];
    }
    
    return $rows;
});
```

### 设置导出文件名

```php
$grid->export()->filename(\'管理员数据\');
```

<a name="disable-export-extend"></a>
## 扩展导出功能

如果系统内置的导出功能满足不了自己的需求，可以按照下面的步骤来自定义导出功能

本示例用[Laravel-Excel](https://github.com/Maatwebsite/Laravel-Excel)作为excel操作库，当然也可以使用任何其他excel库

首先安装好它：

```shell
composer require maatwebsite/excel:~2.1.0

php artisan vendor:publish --provider="Maatwebsite\\Excel\\ExcelServiceProvider"
```

然后新建自定义导出类，比如`app/Admin/Extensions/ExcelExpoter.php`:
```php
<?php

namespace App\\Admin\\Extensions;

use Dcat\\Admin\\Grid\\Exporters\\AbstractExporter;
use Maatwebsite\\Excel\\Facades\\Excel;

class ExcelExpoter extends AbstractExporter
{
    public function export()
    {
        Excel::create(\'Filename\', function($excel) {

            $excel->sheet(\'Sheetname\', function($sheet) {
                
                 // 最多导出10W条数据
                 // 必须设置maxSize，当否则选择导出所有选项时只能导出默认的20条数据。
                $maxSize = 10000;

                // 这段逻辑是从表格数据中取出需要导出的字段
                $rows = collect($this->buildData(1, $maxSize))->map(function ($item) {
                    return array_only($item, [\'id\', \'title\', \'content\', \'rate\', \'keywords\']);
                });

                $sheet->rows($rows);

            });

        })->export(\'xls\');
    }
}
```

然后在`model-grid`中使用这个导出类：
```php

use App\\Admin\\Extensions\\ExcelExpoter;

$grid->export(new ExcelExpoter());
```

有关更多`Laravel-Excel`的使用方法，参考[laravel-excel/docs](http://www.maatwebsite.nl/laravel-excel/docs)',
   'order' => 14,
   'created_at' => '2024-06-26 10:57:20',
   'updated_at' => '2024-06-26 10:57:20',
   'slug' => 'data-export',
),
            (object) array(
   'id' => 28,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '快捷创建',
   'content' => '# 快捷创建

在表格中开启这个功能之后，会在表格头部增加一个`form`表单来创建数据，对于一些简单的表格页面，可以方便快速创建数据，不用跳转到创建页面操作
![](http://docs.oneself.icu:10010/storage/markdown/images/e6b6723163294c1cd0af7486f5098cb3667b83cf0d12a.png)


### 基本使用

>  需要注意的是，快捷创建表单中的每一项，在`form`表单页面要设置相同类型的表单项。

```php
$grid->quickCreate(function (Grid\\Tools\\QuickCreate $create) {
    $create->text(\'name\', \'名称\');
    $create->email(\'email\', \'邮箱\');
});
```

### 设置提交地址

> Since `v1.4.0`

```php
$grid->quickCreate(function (Grid\\Tools\\QuickCreate $create) {
	$create->action(\'auth/users\');
	$create->method(\'GET\');
});
```

表单支持的表单项有下面的几种类型


### 文本(text)
文本输入框

```php
$create->text(\'column_name\', \'placeholder...\');
```

### 隐藏表单(hidden)
文本输入框


```php
$create->hidden(\'column_name\');
```

### 邮箱(email)
邮箱输入框
```php
$create->email(\'column_name\', \'placeholder...\');
```

### IP输入框
ip地址输入框

```php
$create->ip(\'column_name\', \'placeholder...\');
```

### URL输入框
url输入框
```php
$create->url(\'column_name\', \'placeholder...\');
```


### 密码(password)
密码输入框
```php
$create->password(\'column_name\', \'placeholder...\');
```

### 手机号(mobile)
手机号输入框
```php
$create->mobile(\'column_name\', \'placeholder...\');
```

### 整数(integer)
整形数字输入框
```php
$create->integer(\'column_name\', \'placeholder...\');
```

### 下拉选框(select)
单选框
```php
$create->select(\'column_name\', \'placeholder...\')->options([
    1 => \'foo\',
    2 => \'bar\',
]);
```


### 下拉选框多选(multipleSelect)
多选框
```php
$create->multipleSelect(\'column_name\', \'placeholder...\')->options([
    1 => \'foo\',
    2 => \'bar\',
]);
```

### 标签(tags)
```php
$create->tags(\'column_name\', \'placeholder...\')->options([
    1 => \'foo\',
    2 => \'bar\',
]);
```


### 日期时间选择
时间日期输入框
```php
$create->datetime(\'column_name\', \'placeholder...\');
```

### 时间选择(time)
时间输入框
```php
$create->time(\'column_name\', \'placeholder...\');
```

### 日期选择
```php
$create->date(\'column_name\', \'placeholder...\');
```',
   'order' => 15,
   'created_at' => '2024-06-26 10:58:26',
   'updated_at' => '2024-06-26 10:58:26',
   'slug' => 'quick-creation',
),
            (object) array(
   'id' => 29,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '行内编辑',
   'content' => '# 数据表格行内编辑

数据表格所有使用行内编辑的列字段，都必须在`form`表单中定义一个相同的表单字段，否则将无法进行编辑。

### 文本 (editable)


启用
```php
$grid->column(\'title\')->editable();

// 编辑成功后刷新页面
$grid->column(\'nickname\')->editable(true);
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/f71b2558ae17a49393fe61f28f66bcf0667b848c631a8.png)

### 开关 (switch)


快速将列变成开关组件，使用方法如下：
```php
$grid->status()->switch();
```
这个功能需要你在`form`表单方法中同样设置一个`status`字段

```php
$form->hidden(\'status\')
	->customFormat(function ($v) {
		return $v == \'打开\' ? 1 : 0;
	})
	->saving(function ($v) {
		return $v ? \'打开\' : \'关闭\';
	});

// 或者
$form->switch(\'status\')
	->customFormat(function ($v) {
		return $v == \'打开\' ? 1 : 0;
	})
	->saving(function ($v) {
		return $v ? \'打开\' : \'关闭\';
	});
```

编辑成功后刷新页面
```php
$grid->column(\'status\')->switch(\'\', true);
```

### 开关组 (switchGroup)

> 注意：在`grid`中对某字段设置`switchGroup`默认的保存结果是`0`或`1`，如需修改可以通过`$form->hidden(xxx)->saving(...)`方法修改。

快速将列变成开关组件组，使用方法如下：
```php
$grid->switch_group->switchGroup([
    \'hot\'        => \'热门\',
    \'new\'        => \'最新\',
    \'recommend\'  => \'推荐\',
    \'image.show\' => \'显示图片\', // 更新对应关联模型
]);
// 或
// 不写label会自动从翻译文件翻译，具体使用请参照 “字段翻译” 章节
$grid->switch_group->switchGroup([\'is_new\', \'is_hot\', \'published\']);
```

这个功能需要你在`form`表单方法中同样设置对应的字段

```php
$form->switch(\'hot\')
	->customFormat(function ($v) {
		return $v == \'打开\' ? 1 : 0;
	})
	->saving(function ($v) {
		return $v ? \'打开\' : \'关闭\';
	});

$form->switch(\'new\')
	->customFormat(function ($v) {
		return $v == \'打开\' ? 1 : 0;
	})
	->saving(function ($v) {
		return $v ? \'打开\' : \'关闭\';
	});
```


编辑成功后刷新页面
```php
$grid->column(\'switch_group\')->switchGroup([...], true);
```

![](http://docs.oneself.icu:10010/storage/markdown/images/7ab239b8c2e7893e86483ffc0ba31985667b849c1daa2.png)



### 下拉选框

```php
$grid->options()->select([
    1 => \'Sed ut perspiciatis unde omni\',
    2 => \'voluptatem accusantium doloremque\',
    3 => \'dicta sunt explicabo\',
    4 => \'laudantium, totam rem aperiam\',
]);
```

`select` 也支持参数为闭包，使用方法和`editable`的`select`类似。


编辑成功后刷新页面
```php
$grid->column(\'options\')->select([...], true);
```

![](http://docs.oneself.icu:10010/storage/markdown/images/09a7f8428384f7deb04c3b8b66721755667b84b4cd1cd.png)


### 单选框
```php
$grid->options()->radio([
    1 => \'Sed ut perspiciatis unde omni\',
    2 => \'voluptatem accusantium doloremque\',
    3 => \'dicta sunt explicabo\',
    4 => \'laudantium, totam rem aperiam\',
]);
```

`radio` 也支持参数为闭包，使用方法和`editable`的`select`类似。


编辑成功后刷新页面
```php
$grid->column(\'options\')->radio([...], true);
```

### 多选框
```php
$grid->options()->checkbox([
    1 => \'Sed ut perspiciatis unde omni\',
    2 => \'voluptatem accusantium doloremque\',
    3 => \'dicta sunt explicabo\',
    4 => \'laudantium, totam rem aperiam\',
]);
```

`checkbox` 也支持参数为闭包。


编辑成功后刷新页面
```php
$grid->column(\'options\')->checkbox([...], true);
```

![](http://docs.oneself.icu:10010/storage/markdown/images/e539923b032b0fc6412c4d43a26cdbde667b84c4b2054.png)

### textarea

```php
$grid->column(\'...\')->textarea();
```

![](http://docs.oneself.icu:10010/storage/markdown/images/fe6a2952eabf94ae4dc2db1b3d42d359667b84f81c548.png)',
   'order' => 16,
   'created_at' => '2024-06-26 11:03:32',
   'updated_at' => '2024-06-26 11:03:32',
   'slug' => 'in-line-editing',
),
            (object) array(
   'id' => 30,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '事件',
   'content' => '# 数据表格事件

### 初始化


通过 `Grid::resolving` 方法可以监听表格初始化事件。


开发者可以在这两个事件中改变 `Grid` 的一些设置或行为，比如需要禁用掉某些操作，可以在 `app/Admin/bootstrap.php` 加入下面的代码：

```php
use Dcat\\Admin\\Grid;

Grid::resolving(function (Grid $grid) {
    $grid->disableActions();

    $grid->disablePagination();

    $grid->disableCreateButton();

    $grid->disableFilter();

    $grid->disableRowSelector();

    $grid->disableToolbar();
});


// 只需要监听一次
Grid::resolving(function (Grid $grid) {
    ...
}, true);
```
这样就不用在每一个控制器的代码中来设置了。

如果全局设置后，要在其中某一个表格中开启设置，比如开启显示操作列，在对应的实例上调用 `$grid->disableActions(false);` 就可以了


### 构建

通过 `Grid::composing` 方法可以监听表格被调用事件。

```php
Grid::composing(function (Grid $grid) {
    ...
});

// 只需要监听一次
Grid::composing(function (Grid $grid) {
    ...
}, true);
```

### Fetching

监听表格获取数据之前事件，此事件在 `composing` 事件之后触发。

```php
$grid->listen(Grid\\Events\\Fetching::class, function ($grid) {
	  
});


// 可以在 composing 事件中使用
Grid::composing(function (Grid $grid) {
    $grid->listen(Grid\\Events\\Fetching::class, function ($grid) {
    	  
    });
});
```

### Fetched

监听表格获取数据之后事件，通过监听此事件可以批量修改数据, 参考下面实例

```php
$grid->listen(Grid\\Events\\Fetched::class, function ($grid, Collection $rows) {
	// $collection 当前这一个表格数据的模型集合， 你可以根据你的需要来读取或者修改它的数据。

    $rows->transform(function ($row) {
        // 更改行数据
        $row[\'name\'] = $row[\'first_name\'].\' \'.$row[\'last_name\'];
        
        return $row;
    });
});
```

### ApplyFilter

监听表格过滤器搜索事件，此事件只有在过滤器有搜索条件时才会触发

```php
$grid->listen(Grid\\Events\\ApplyFilter::class, function ($grid, array $conditions) {
	// $conditions 当前过滤器生成的搜索条件数组

    dd(\'表格过滤器\', $conditions);
});
```


### ApplyQuickSearch

监听表格快捷搜索事件，此事件只有在快捷搜索输入框有值时才会触发

```php
$grid->listen(Grid\\Events\\ApplyQuickSearch::class, function ($grid, $input) {
	// $input 搜索关键字

    dd(\'表格快捷搜索\', $input);
});
```

### ApplySelector

监听表格规格筛选器事件，此事件只有在规格筛选器选中选项时才会触发

```php
$grid->listen(Grid\\Events\\ApplySelector::class, function ($grid, array $input) {
	// $input 筛选器选中的选项数组

    dd(\'表格规格筛选器\', $input);
});
```



### rows回调

通过 `Grid::rows` 方法可以监听表格获取数据之后事件。

```php
use Dcat\\Admin\\Grid\\Row;
use Illuminate\\Support\\Collection;

$grid->rows(function (Collection $rows) {
    /**
     * 获取第一行数据
     *
     * @var Row $firstRow
     */
    $firstRow = $rows->first();
    
    // 设置 tr html属性
    $firstRow->setAttributes([\'name\' => \'....\']);
    
    if ($firstRow) {
        // 获取第一行的 id
        $id = $firstRow->id;
        // 转化为数组
        $row = $firstRow->toArray();
    }
});
```',
   'order' => 17,
   'created_at' => '2024-06-26 11:04:36',
   'updated_at' => '2024-06-26 11:04:36',
   'slug' => 'event',
),
            (object) array(
   'id' => 31,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '字段翻译',
   'content' => '# 表格字段翻译

数据表格中所有使用到字段的地方都会自动读取语言包中的翻译。

> 语言包的详细使用方法请参考<a>[多语言](https://learnku.com/docs/dcat-admin/1.x/basic-use/8127)</a>。

### 语言包名称
语言包名称需要与控制器名相对应，假如控制器名`UserProfileController`，则对应的语言包为`resources/lang/{当前语言}/user-profile.php`（需要转化为小写中划线风格）。

如果想要更改语言包的名称，可以通过下面两种方式进行更改

方式1
```php
use Dcat\\Admin\\Http\\Controllers\\AdminController;

class UserController extends AdminController
{
    /**
     * 指定翻译文件名称
     * 
     * @var string 
     */
    protected $translation = \'user1\';
    
    ...
}
```

方式2
```php
use Dcat\\Admin\\Admin;

Admin::translation(\'user1\');
```



### 示例
现在假设语言包`resources/lang/zh_CN/user-profile.php`内容如下：
```php
return [
    \'fields\' => [
        \'name\'  => \'名称\',
        \'age\'   => \'年龄\',
        \'class\' => \'班级\',
    ],
];
```

控制器`UserProfileController`中设置的`Grid`字段会自动读取以上翻译：
```php
// 不设置labael会自动读取语言包翻译
$grid->id();
$grid->name;
$grid->age;
$grid->class;

$grid->filter(function ($filter) {
    $filter->gt(\'age\');
});

// 上面代码等同于
$grid->name(\'名称\');
$grid->age(\'年龄\');

// 也可这样使用
$grid->id(admin_trans_field(\'id\'));
$grid->name(admin_trans_field(\'name\'));
$grid->age(admin_trans_field(\'age\'));

```

### 公共翻译
当`admin_trans_field`函数找不到当前控制器中对指定字段的翻译时，会去`global.php`中查找。如果某些字段是很多数据表中都有的，可以把这些翻译写在`resources/lang/{当前语言}/global.php`文件中。
```php
return [
    // 常用的字段放在 global.php 中可以所有控制器共用。
    \'fields\' => [
        \'id\'         => \'ID\',
        \'created_at\' => \'创建时间\',
        \'updated_at\' => \'更新时间\',
    ],
];
```',
   'order' => 18,
   'created_at' => '2024-06-26 11:05:18',
   'updated_at' => '2024-06-26 11:05:18',
   'slug' => 'field-translation',
),
            (object) array(
   'id' => 32,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '数据软删除',
   'content' => '# 数据软删除


先参考`Laravel`文档实现模型的[软删除](https://learnku.com/docs/laravel/6.x/eloquent/5176#soft-deleting):

```php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Database\\Eloquent\\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
}
```

这样在`grid`列表中显示的数据都是未被删除的数据

```php
return Grid::make(new Post(), function (Grid $grid) {
	$grid->id(\'ID\')->sortable();
	$grid->title(\'Title\');
	$grid->created_at(\'Created at\');
	$grid->updated_at(\'Updated at\');
});
```

## 回收站入口

接下来需要增加一个入口，能让我们看到被软删除的数据，这里可以使用`model-grid`的[范围过滤器](https://learnku.com/docs/dcat-admin/1.x/query-filtering/8097#scope)来实现

```php
$grid->filter(function ($filter) {

    // 范围过滤器，调用模型的`onlyTrashed`方法，查询出被软删除的数据。
    $filter->scope(\'trashed\', \'回收站\')->onlyTrashed();

});
```

在表头的筛选按钮的下拉菜单中就会出现一个`回收站`按钮，点击它，就会调用模型的`onlyTrashed`方法，从表中查询出被删除的数据，也就是回收站中的数据。
# 数据软删除


先参考`Laravel`文档实现模型的[软删除](https://learnku.com/docs/laravel/6.x/eloquent/5176#soft-deleting):

```php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Database\\Eloquent\\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
}
```

这样在`grid`列表中显示的数据都是未被删除的数据

```php
return Grid::make(new Post(), function (Grid $grid) {
	$grid->id(\'ID\')->sortable();
	$grid->title(\'Title\');
	$grid->created_at(\'Created at\');
	$grid->updated_at(\'Updated at\');
});
```

## 回收站入口

接下来需要增加一个入口，能让我们看到被软删除的数据，这里可以使用`model-grid`的[范围过滤器](https://learnku.com/docs/dcat-admin/1.x/query-filtering/8097#scope)来实现

```php
$grid->filter(function ($filter) {

    // 范围过滤器，调用模型的`onlyTrashed`方法，查询出被软删除的数据。
    $filter->scope(\'trashed\', \'回收站\')->onlyTrashed();

});
```

在表头的筛选按钮的下拉菜单中就会出现一个`回收站`按钮，点击它，就会调用模型的`onlyTrashed`方法，从表中查询出被删除的数据，也就是回收站中的数据。
<img style="box-shadow:0 1px 6px 1px rgba(0, 0, 0, 0.12)" width="40%" src="https://cdn.learnku.com/uploads/images/202205/19/98106/7imWhgPa38.png!large">



## 行恢复操作

按照下面的方法，我们可以在回收站中的每一行数据加上一个恢复操作，方便恢复数据

先定义操作类`app/Admin/Actions/Post/Restore.php`：

```php
<?php

namespace App\\Admin\\Actions\\Post;

use Dcat\\Admin\\Grid\\RowAction;
use Illuminate\\Http\\Request;

class Restore extends RowAction
{
    protected $title = \'恢复\';
        
	protected $model;
	
	// 注意构造方法的参数必须要有默认值
	public function __construct(string $model = null) 
	{
		$this->model = $model;
	}

    public function handle(Request $request)
    {
        $key = $this->getKey();
        $model = $request->get(\'model\');
        
        $model::withTrashed()->findOrFail($key)->restore();

        return $this->response()->success(\'已恢复\')->refresh();
    }

    public function confirm()
    {
        return [\'确定恢复吗？\'];
    }
    
    public function parameters()
    {
        return [
            \'model\' => $this->model,    
		];
	}
}
```

添加到行操作:

```php
use App\\Models\\Post;
use App\\Admin\\Actions\\Post\\Restore;

$grid->actions(function (Grid\\Displayers\\Actions $actions) {
    if (request(\'_scope_\') == \'trashed\') {
        $actions->append(new Restore(Post::class));
    }
});
```

## 批量恢复操作

先定义操作类`app/Admin/Actions/Post/BatchRestore.php`：

```php
<?php

namespace App\\Admin\\Actions\\Post;

use Dcat\\Admin\\Grid\\BatchAction;
use Illuminate\\Http\\Request;

class BatchRestore extends BatchAction
{
    protected $title = \'恢复\';
    
    protected $model;
    
    // 注意构造方法的参数必须要有默认值
    public function __construct(string $model = null) 
    {
        $this->model = $model;
    }

    public function handle(Request $request)
    {
        $model = $request->get(\'model\');
        
        foreach ((array) $this->getKey() as $key) {
			$model::withTrashed()->findOrFail($key)->restore();
		}
        
        return $this->response()->success(\'已恢复\')->refresh();
    }

    public function confirm()
    {
        return [\'确定恢复吗？\'];
    }
    
	public function parameters()
	{
		return [
			\'model\' => $this->model,    
		];
	}
}
```

添加到批量操作:

```php
use App\\Models\\Post;
use App\\Admin\\Actions\\Post\\BatchRestore;

$grid->batchActions(function (Grid\\Tools\\BatchActions $batch) {
	if (request(\'_scope_\') == \'trashed\') {
		$batch->add(new BatchRestore(Post::class));
	}
});
```
![](http://docs.oneself.icu:10010/storage/markdown/images/c1935b36c4f69b6bdbfa9e85e73c8c2f667b85d6687a1.png)



## 行恢复操作

按照下面的方法，我们可以在回收站中的每一行数据加上一个恢复操作，方便恢复数据

先定义操作类`app/Admin/Actions/Post/Restore.php`：

```php
<?php

namespace App\\Admin\\Actions\\Post;

use Dcat\\Admin\\Grid\\RowAction;
use Illuminate\\Http\\Request;

class Restore extends RowAction
{
    protected $title = \'恢复\';
        
	protected $model;
	
	// 注意构造方法的参数必须要有默认值
	public function __construct(string $model = null) 
	{
		$this->model = $model;
	}

    public function handle(Request $request)
    {
        $key = $this->getKey();
        $model = $request->get(\'model\');
        
        $model::withTrashed()->findOrFail($key)->restore();

        return $this->response()->success(\'已恢复\')->refresh();
    }

    public function confirm()
    {
        return [\'确定恢复吗？\'];
    }
    
    public function parameters()
    {
        return [
            \'model\' => $this->model,    
		];
	}
}
```

添加到行操作:

```php
use App\\Models\\Post;
use App\\Admin\\Actions\\Post\\Restore;

$grid->actions(function (Grid\\Displayers\\Actions $actions) {
    if (request(\'_scope_\') == \'trashed\') {
        $actions->append(new Restore(Post::class));
    }
});
```

## 批量恢复操作

先定义操作类`app/Admin/Actions/Post/BatchRestore.php`：

```php
<?php

namespace App\\Admin\\Actions\\Post;

use Dcat\\Admin\\Grid\\BatchAction;
use Illuminate\\Http\\Request;

class BatchRestore extends BatchAction
{
    protected $title = \'恢复\';
    
    protected $model;
    
    // 注意构造方法的参数必须要有默认值
    public function __construct(string $model = null) 
    {
        $this->model = $model;
    }

    public function handle(Request $request)
    {
        $model = $request->get(\'model\');
        
        foreach ((array) $this->getKey() as $key) {
			$model::withTrashed()->findOrFail($key)->restore();
		}
        
        return $this->response()->success(\'已恢复\')->refresh();
    }

    public function confirm()
    {
        return [\'确定恢复吗？\'];
    }
    
	public function parameters()
	{
		return [
			\'model\' => $this->model,    
		];
	}
}
```

添加到批量操作:

```php
use App\\Models\\Post;
use App\\Admin\\Actions\\Post\\BatchRestore;

$grid->batchActions(function (Grid\\Tools\\BatchActions $batch) {
	if (request(\'_scope_\') == \'trashed\') {
		$batch->add(new BatchRestore(Post::class));
	}
});
```',
   'order' => 19,
   'created_at' => '2024-06-26 11:07:18',
   'updated_at' => '2024-06-26 11:07:18',
   'slug' => 'data-soft-deletion',
),
            (object) array(
   'id' => 33,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '头部和脚部',
   'content' => '# 头部和脚部

数据表格支持往头部和脚部两个区块填入你想要的内容

```php
$grid->header(function ($collection) {
    return \'header\';
});

$grid->footer(function ($collection) {
    return \'footer\'; 
});
```

其中闭包函数的参数`$collection`为`Illuminate\\Support\\Collection`类实例，是当前页表格数据，下面是两个不同场景的使用举例

## 头部

```php
$grid->header(function ($collection) use ($grid) {
	$query = Model::query();
    	
	// 拿到表格筛选 where 条件数组进行遍历
	$grid->model()->getQueries()->unique()->each(function ($value) use (&$query) {
		if (in_array($value[\'method\'], [\'paginate\', \'get\', \'orderBy\', \'orderByDesc\'], true)) {
			return;
		}

		$query = call_user_func_array([$query, $value[\'method\']], $value[\'arguments\'] ?? []);
	});
	
	// 查出统计数据
	$data = $query->get();

    // 自定义组件
    return new Card($data);
});
```

自定义头部展示的组件实现
```php
<?php

use Illuminate\\Contracts\\Support\\Renderable;
use Dcat\\Admin\\Admin;

class Card implements Renderable
{
	public static $js = [
		\'xxx/js/card.min.js\',
	];
	public static $css = [
		\'xxx/css/card.min.css\',
	];
	
	protected $data;
	
	public function __construct($data) 
	{
	    $this->data = $data;
	}

	public function script()
	{
		return <<<JS
		console.log(\'所有JS脚本都加载完了\');
		$(\'xxx\').card();
JS;		
	}

	public function render()
	{
		// 在这里可以引入你的js或css文件
		Admin::js(static::$js);
		Admin::css(static::$css);
		
		// 需要在页面执行的JS代码
		// 通过 Admin::script 设置的JS代码会自动在所有JS脚本都加载完毕后执行
		Admin::script($this->script());
		
		return view(\'...\', [\'data\' => $this->data])->render();
	}
}
```


## 脚部

一个比较常见的场景是在数据表格的脚部显示统计信息，比如在订单表格的脚部加入收入统计，可以参考下面的代码实现：

```php
$grid->footer(function ($collection) use ($grid) {
	$query = Model::query();
	
	// 拿到表格筛选 where 条件数组进行遍历
	$grid->model()->getQueries()->unique()->each(function ($value) use (&$query) {
		if (in_array($value[\'method\'], [\'paginate\', \'get\', \'orderBy\', \'orderByDesc\'], true)) {
		    return;
		}

		$query = call_user_func_array([$query, $value[\'method\']], $value[\'arguments\'] ?? []);
	});
	
	// 查出统计数据
	$data = $query->get();

    return "<div style=\'padding: 10px;\'>总收入 ： $data</div>";
});
```

如果有比较复杂的脚部需要显示，也可以使用视图对象或者封装成一个类来实现。',
   'order' => 20,
   'created_at' => '2024-06-26 11:08:03',
   'updated_at' => '2024-06-26 11:08:03',
   'slug' => 'head-and-feet',
),
            (object) array(
   'id' => 34,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 2,
   'title' => '表格异步渲染',
   'content' => '# 表格异步渲染

当页面的表格展示的数据特别多（列多行多），并且加载的组件也较多时，可能会出现卡顿的现象，此时可以使用表格异步渲染功能，可以有效地减轻页面卡顿的情况：


```php
// 启用表格异步渲染功能
$grid->async();

// 禁用
$grid->async(false);

// 判断是否是异步渲染请求
if ($grid->isAsyncRequest()) {
    ...
}
```

> 需要注意的是，如果页面没有出现明显的卡顿现象，则无需启用此功能；并且如果页面中存在多个数据表格，那么也无法使用此功能。

开启此功能之后，表格**工具栏**(`toolbar`)以下的位置都会采用异步的方式进行渲染，换句话说，**工具栏**(`toolbar`)以及以上的位置只会刷新一次！在实际编码过程中需要注意有无特殊影响。',
   'order' => 21,
   'created_at' => '2024-06-26 11:09:05',
   'updated_at' => '2024-06-26 11:09:05',
   'slug' => 'asynchronous-rendering',
),
            (object) array(
   'id' => 35,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '基本使用',
   'content' => '# 表单基本使用

## 示例
`Dcat\\Admin\\Form`类用于快速生成表单页面，先来个例子，数据库中有`movies`表

```sql
CREATE TABLE `movies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `director` int(10) unsigned NOT NULL,
  `describe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rate` tinyint unsigned NOT NULL,
  `released` enum(0, 1),
  `release_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

```

对应的数据模型为`App\\Models\\Movie`，数据仓库为`App\\Admin\\Repositories\\Movie`：

```php
use App\\Admin\\Repositories\\Movie;
use Dcat\\Admin\\Form;
use Dcat\\Admin\\Admin;

$form = Form::make(new Movie(), function (Form $form) {
    // 显示记录id
    $form->display(\'id\', \'ID\');
    
    // 添加text类型的input框
    $form->text(\'title\', \'电影标题\');
    
    $directors = [
        1 => \'John\',
        2 => \'Smith\',
        3 => \'Kate\',
    ];
    
    $form->select(\'director\', \'导演\')->options($directors);
    
    // 添加describe的textarea输入框
    $form->textarea(\'describe\', \'简介\');
    
    // 数字输入框
    $form->number(\'rate\', \'打分\');
    
    // 添加开关操作
    $form->switch(\'released\', \'发布？\');
    
    // 添加日期时间选择框
    $form->datetime(\'release_at\', \'发布时间\');
    
    // 两个时间显示
    $form->display(\'created_at\', \'创建时间\');
    $form->display(\'updated_at\', \'修改时间\');
});
```

## 数据仓库

数据仓库(`Repository`)是一个可以提供特定接口对数据进行读写操作的类，通过数据仓库的引入，可以让页面的构建不再关心数据读写功能的具体实现。只需要实现特定的操作接口即可轻松切换数据源，关于数据仓库的详细用法请参考文档[数据仓库](https://learnku.com/docs/dcat-admin/1.x/basic-use/8123)。


## 表单定义

推荐使用以下方式构建表单
```php
use App\\Admin\\Repositories\\Movie;
use Dcat\\Admin\\Form;
use Dcat\\Admin\\Admin;

$form = Form::make(new Movie, function (Form $form) {
    // 显示记录id
    $form->display(\'id\', \'ID\');

    $form->select(\'director\', \'导演\')->options($directors);
    
    ...
});
```

### 获取当前模型数据

在闭包内可以获取到当前模型的数据（编辑）
```php
Form::make(new Movie, function (Form $form) {
    // 显示记录id
    $form->display(\'id\', \'ID\');

    // 获取模型数据，如果"status == 1"则显示"rate"字段
    if ($form->model()->status == 1) {
        $form->number(\'rate\');
    }
    
    $form->select(\'director\', \'导演\')->options($directors);
    
    ...
});
```


## 自定义工具

表单右上角默认有返回和跳转列表两个按钮工具, 可以使用下面的方式修改它:

```php
$form->tools(function (Form\\Tools $tools) {
    // 去掉跳转列表按钮
    $tools->disableList();
    // 去掉跳转详情页按钮
    $tools->disableView();
    // 去掉删除按钮
    $tools->disableDelete();

    // 添加一个按钮, 参数可以是字符串, 匿名函数, 或者实现了Renderable或Htmlable接口的对象实例
    $tools->append(\'<a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>  delete</a>\');
});

// 去除整个工具栏内容
$form->disableHeader();

// 也可以通过以下方式去除工具栏的默认按钮
$form->disableListButton();
$form->disableViewButton();
$form->disableDeleteButton();
```

自定义视图

自定义视图

```php
$form->footer(function ($footer) {
    $footer->view(\'...\', [...]);
});
```

### 自定义复杂工具按钮

请参考文档[数据表单动作](https://learnku.com/docs/dcat-admin/1.x/data-form/8450)


## 表单底部
使用下面的方法去掉form底部的元素

```php
$form->footer(function ($footer) {

    // 去掉`重置`按钮
    $footer->disableReset();

    // 去掉`提交`按钮
    $footer->disableSubmit();

    // 去掉`查看`checkbox
    $footer->disableViewCheck();

    // 去掉`继续编辑`checkbox
    $footer->disableEditingCheck();

    // 去掉`继续创建`checkbox
    $footer->disableCreatingCheck();
    
    // 设置`查看`默认选中
	$footer->defaultViewChecked();

	// 设置`继续编辑`默认选中
	$footer->defaultEditingChecked();
	
	// 设置`继续创建`默认选中
	$footer->defaultCreatingChecked();
});

// 去除整个底部内容
$form->disableFooter();

// 也可以通过以下方式去底部元素
$form->disableSubmitButton();
$form->disableResetButton();
$form->disableViewCheck();
$form->disableEditingCheck();
$form->disableCreatingCheck();

// 设置`查看`默认选中
$form->defaultViewChecked();

// 设置`继续编辑`默认选中
$form->defaultEditingChecked();

// 设置`继续创建`默认选中
$form->defaultCreatingChecked();
```

## 常用方法

### 布局
参考文档[表单布局](https://learnku.com/docs/dcat-admin/1.x/table-layout/8822)



### 返回字段验证出错信息

通过`responseValidationMessages`方法可以很方便的返回字段验证出错信息，而不需要使用`Laravel validation`功能。

普通使用
```php
protected function form()
{
	return Form::make(new Model(), function (Form $form) {
		if (...) { // 验证逻辑
			$form->responseValidationMessages(\'title\', \'title格式错误\');
			
			// 如有多个错误信息，第二个参数可以传数组
			$form->responseValidationMessages(\'content\', [\'content格式错误\', \'content不能为空\']);
		}
	});
}
```
在事件中使用
> 此方法仅在`submitted`事件中可用

```php
$form->submitted(function (Form $form) {
	// 接收表单参数
	$title = $form->title;

    if (...) { // 验证逻辑
        $form->responseValidationMessages(\'title\', \'title格式错误\');
        
        // 如有多个错误信息，第二个参数可以传数组
        $form->responseValidationMessages(\'content\', [\'content格式错误\', \'content不能为空\']);
    }
});
```

### 去掉提交按钮:

```php
$form->disableSubmitButton();
```

### 去掉重置按钮:
```php
$form->disableResetButton();
```

### 忽略掉不需要保存的字段 (ignore)

```php
$form->ignore([\'column1\', \'column2\', \'column3\']);

// 取消已忽略的字段
$form->removeIgnoredFields([\'column1\',]);
```

### 设置宽度 (width)

此处的宽度值是一个`1-12`之间的数字，第一个参数为 ```field``` 的宽，第二个参数为 ```label``` 的宽，第二个可省略。

```php
$form->width(10, 2); // field, label
```

### 设置表单提交的action

```php
$form->action(\'auth/users\');
```

### 判断是否是新增 (isCreating)

新增页面和保存新增数据都可以用这个方法判断

```php
if ($form->isCreating()) {
    ...
}
```

### 判断是否是编辑 (isEditing)

编辑页面和保存编辑数据都可以用这个方法判断

```php
if ($form->isEditing()) {
    ...
}
```

### 判断是否是删除 (isDeleting)

```php
if ($form->isDeleting()) {
    ...
}
```

### 获取ID (getKey)

新增页面无效

```php
return Form::make(new User, function (Form $form) {
    $id = $form->getKey();
    
    ...
});
```

### 获取编辑数据 (model)
新增页面无效，必须在闭包里面使用

```php
return Form::make(new User, function (Form $form) {
 $username = $form->model()->xxx;     ...
});
```

### 获取表单提交的数据 (input)

```php
$form->saving(function (Form $form) {
    $username = $form->username;
    
    // 等同于
    $username = $form->input(\'username\');
});
```

### 修改或删除表单提交的数据

```php
$form->saving(function (Form $form) {
    // 修改
    $form->input(\'username\', \'Marry\');
    // 或
    $form->username = \'Marry\';
    
    // 删除
    $form->deleteInput(\'username\');
});
```


### 获取最终保存的数据 (updates)

此方法仅在`saved`回调有效。

```php
$form->saved(function (Form $form) {

    $data = $form->updates();
    
});
```

<a name="redirect"></a>
### 页面跳转 (redirect)

跳转到指定页面，此方法仅在[表单回调](https://learnku.com/docs/dcat-admin/1.x/event/8113)事件内可用

```php
// 跳转并提示成功信息
$form->saved(function (Form $form) {
    return $form->response()->success(\'保存成功\')->redirect(\'auth/user\');
});

// 跳转并提示错误信息
$form->saving(function (Form $form) {
    return $form->response()->error(\'系统错误\')->redirect(\'auth/user\');
});
```


<a name="confirm"></a>
### 显示确认弹窗 (confirm)


点击表单提交按钮时弹出确认弹窗，如果是在普通数据表单中
```php
$form->confirm(\'您确定要提交表单吗？\', \'content\');
```



### 设置外层容器
```php
 // 更改表格外层容器
$form->wrap(function (Renderable $view) {
    $tab = Tab::make();
    
    $tab->add(\'示例\', $view);
    $tab->add(\'代码\', $this->code(), true);

    return $tab;
});
```


<a name="saving"></a>
### 修改待保存的表单输入值 (saving)

通过`saving`方法可以更改待保存数据的格式。

```php
use Dcat\\Admin\\Support\\Helper;

$form->mutipleFile(\'files\')->saving(function ($paths) {
    $paths = Helper::array($paths);
    
    // 获取数据库当前行的其他字段
    $username = $this->username;
    
    // 最终转化为json保存到数据库
    return json_encode($paths);
});
```

<a name="customFormat"></a>
### 修改表单数据显示 (customFormat)
通过`customFormat`方法可以改变从外部注入到表单的字段值。

如下例子中，`mutipleFile`字段要求待渲染的字段值为数组格式，我们可以通过`customFormat`方法把从数据库查出的字段值转化为`array`格式
```php
use Dcat\\Admin\\Support\\Helper;

$form->mutipleFile(\'files\')->saving(function ($paths) {
    $paths = Helper::array($paths);
    
    return json_encode($paths);
})->customFormat(function ($paths) {
	// 获取数据库当前行的其他字段
    $username = $this->username;

    // 转为数组
    return Helper::array($paths);
});
```



## 关联模型


### 一对一

`users`表和`profiles`表通过`profiles.user_id`字段生成一对一关联

```sql
CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
`updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `profiles` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
`updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

对应的数据模分别为:

```php
<?php namespace App\\Admin\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class User extends Model
{
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
```
对应的数据仓库为：
```php
<?php namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use User as UserModel;

class User extends \\Dcat\\Admin\\Repositories\\EloquentRepository
{
    protected $eloquentClass = UserModel::class;
}
```


通过下面的代码可以关联在一个form里面:
> 实例化数据仓库时需要传入关联模型定义的关联名称，相当于主动使用`Eloquent\\Model::with`方法。

```php
use App\\Admin\\Repositories\\User;

// 注意这里实例化数据仓库`User`时必须传入"profile"，否则将无法关联"profiles"表数据
$form = Form::make(new User(\'profile\'), function (Form $form) {
    $form->display(\'id\');
    
    $form->text(\'name\');
    $form->text(\'email\');
    
    $form->text(\'profile.age\');
    $form->text(\'profile.gender\');
    
    $form->datetime(\'created_at\');
    $form->datetime(\'updated_at\');
});
```

如果你不想使用数据仓库，也可以直接使用模型
```php
use App\\Admin\\Models\\User;

// 注意这里是直接使用模型，没有使用数据仓库
$form = Form::make(User::with(\'profile\'), function (Form $form) {
    $form->display(\'id\');
    
    ...
});
```


### 一对多

一对多的使用请参考文档[表单字段的使用-一对多](https://learnku.com/docs/dcat-admin/1.x/use-of-fields/8107#onemany)

### 多对多


下面以项目内置的`角色管理`模块的**角色绑定权限**功能为例来演示多对多关联模型的用法

模型`Role`
```php
<?php namespace Dcat\\Admin\\Models;

use Dcat\\Admin\\Traits\\HasDateTimeFormatter;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany;

class Role extends Model
{
    use HasDateTimeFormatter;

    /**
     * 定义你的关联模型.
     *
     * @return BelongsToMany
     */
    public function permissions(): BelongsToMany
    {
        $pivotTable = \'admin_role_permissions\'; // 中间表

        $relatedModel = Permission::class; // 关联模型类名

        return $this->belongsToMany($relatedModel, $pivotTable, \'role_id\', \'permission_id\');
    }
}
```

```php
use Dcat\\Admin\\Models\\Permission;

// 实例化数据仓库时传入 permissions，则会自动关联关联模型的数据
// 这里传入 permissions 关联权限模型的数据
$repository = new Role([\'permissions\']);

return Form::make($repository, function (Form $form) {
    $form->display(\'id\', \'ID\');

    $form->text(\'slug\', trans(\'admin.slug\'))->required();
    $form->text(\'name\', trans(\'admin.name\'))->required();
    
    // 这里的数据会自动保存到关联模型中
    $form->tree(\'permissions\')
        ->nodes(function () {
            return (new Permission())->allNodes();
        })
        ->customFormat(function ($v) {
            if (!$v) return [];

            // 这一步非常重要，需要把数据库中查出来的二维数组转化成一维数组
            return array_column($v, \'id\');
        });

    ...
});
```

如果你不想使用数据仓库，也可以直接使用模型
```php
use Dcat\\Admin\\Models\\Role;

// 注意这里是直接使用模型，没有使用数据仓库
$form = Form::make(Role::with(\'permissions\'), function (Form $form) {
    $form->display(\'id\');
    
    ...
});
```

最终效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/1476ce7c7f24af0d3dbc03b6c7785983667b86efc7407.png)



### 关联模型名称为驼峰风格

如果你的关联模型名称的命名是**驼峰**风格，那么使用的时候需要转化为**下划线**风格命名（v2.0.21-beta之前）


例如
```php
class User extend Model
{
    public function userProfile()
    {
        return ...;
    }
}
```

使用
```php
return Form::make(User::with([\'userProfile\']), function (Form $form) {

    ...
    
    // 注意这里必须使用下划线风格命名，否则将无法显示编辑数据，从v2.0.21-beta版本开始已经支持驼峰命名
    $form->text(\'user_profile.postcode\');
    $form->text(\'user_profile.address\');
    
});
```',
   'order' => 1,
   'created_at' => '2024-06-26 11:11:59',
   'updated_at' => '2024-06-26 11:12:59',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 36,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '图片/文件上传',
   'content' => '# 图片/文件上传

[数据表单](model-form.md)通过以下的调用来生成图片/文件上传表单，支持本地和云存储的文件上传。上传组件是基于[webuploader](https://fex.baidu.com/webuploader/)实现的，具体的使用配置可参考[webuploader官方文档](https://fex.baidu.com/webuploader/document.html)。

> 文件或图片上传表单字段请不要在模型中设置**访问器**和**修改器**拼接域名，如有相关需求可参考[文件/图片域名拼接](#withhost)。

```php
$form->file(\'file_column\');
$form->image(\'image_column\');
```

<a name="local"></a>
## 本地上传

先添加存储配置，`config/filesystems.php` 添加一项`disk`:

```php

\'disks\' => [
    ... ,

    \'admin\' => [
        \'driver\' => \'local\',
        \'root\' => public_path(\'uploads\'),
        \'visibility\' => \'public\',
        \'url\' => env(\'APP_URL\').\'/uploads\',
    ],
],

```

设置上传的路径为`public/uploads`(public_path(\'uploads\'))。

然后选择上传的`disk`，打开`config/admin.php`找到：

```php
    
\'upload\'  => [

    \'disk\' => \'admin\',

    \'directory\'  => [
        \'image\'  => \'images\',
        \'file\'   => \'files\',
    ]
],

```

将`disk`设置为上面添加的`admin`，`directory.image`和`directory.file`分别为用`$form->image($column)`和`$form->file($column)`上传的图片和文件的上传目录。

当然你也可以在代码中指定`disk`：
```php
$form->file(\'file\')->disk(\'your disk name\');
```

<a name="oss"></a>
## 云盘上传

如果需要上传到云存储，需要安装对应`laravel storage`的适配器，拿七牛云存储举例

首先安装 [zgldh/qiniu-laravel-storage](https://github.com/zgldh/qiniu-laravel-storage)

同样配置好disk，在`config/filesystems.php` 添加一项:

```php
\'disks\' => [
    ... ,
    \'qiniu\' => [
        \'driver\'  => \'qiniu\',
        \'domains\' => [
            \'default\'   => \'xxxxx.com1.z0.glb.clouddn.com\', //你的七牛域名
            \'https\'     => \'dn-yourdomain.qbox.me\',         //你的HTTPS域名
            \'custom\'    => \'static.abc.com\',                //你的自定义域名
         ],
        \'access_key\'=> \'\',  //AccessKey
        \'secret_key\'=> \'\',  //SecretKey
        \'bucket\'    => \'\',  //Bucket名字
        \'notify_url\'=> \'\',  //持久化处理回调地址
        \'url\'       => \'http://of8kfibjo.bkt.clouddn.com/\',  // 填写文件访问根url
    ],
],

```

然后修改`dcat-admin`的上传配置，打开`config/admin.php`找到：

```php

\'upload\'  => [

    \'disk\' => \'qiniu\',

    \'directory\'  => [
        \'image\'  => \'image\',
        \'file\'   => \'file\',
    ],
],

```

`disk`选择上面配置的`qiniu`，或：
```php
$form->file(\'file\')->disk(\'qiniu\');
```

<a name="public"></a>
## 公共方法

### 缩略图 (thumbnail)

上传图片的同时生成缩略图

```php
$form->image($column[, $label])->thumbnail(\'small\', $width = 300, $height = 300);

// 生成多张缩略图
$form->image($column[, $label])->thumbnail([
    \'small1\' => [100, 100],
    \'small2\' => [200, 200],
    \'small3\' => [300, 300],
]);
```

```php
use Dcat\\Admin\\Traits\\Resizable;

class Photo extends Model
{
    use Resizable;
}

// To access thumbnail
$photo->thumbnail(\'small\', \'photo_column\');
```

<a name="disk"></a>
### 存储驱动 (disk)
修改文件上传源
```php
$form->file(\'file\')->disk(\'your disk name\');
```

<a name="move"></a>
### 上传路径 (move)
修改上传路径
```php
$form->file(\'file\')->move(\'public/upload/image1/\');
```

<a name="name"></a>
### 文件名称 (name)
修改上传文件名称
```php
$form->file(\'file\')->name(\'test.text\');

$form->image(\'picture\')->name(function ($file) {
    return \'test.\'.$file->guessExtension();
});
```

<a name="uniqueName"></a>
### 随机名称 (uniqueName)
使用随机生成文件名 (md5(uniqid()).extension)
```php
$form->image(\'picture\')->uniqueName();
```

<a name="removable"></a>
### 禁止页面删除文件 (替换上传)

通过`removable`方法可以禁止用户从页面点击删除服务器上的文件，可以实现图片覆盖上传效果。


```php
$form->file($column[, $label])->removable(false);
```


<a name="autoUpload"></a>
### 自动上传 (autoUpload)

开启这个功能之后选择完文件之后会立即自动上传，页面将不再显示`上传`按钮，使用方法如下

```php
$form->file(\'file\')->autoUpload();

$form->image(\'img\')->autoUpload();
```


### 文件上传表单下载功能 (downloadable)

```php
$form->file(\'...\')->downloadable();
```

<a name="retainable"></a>
### 禁止删除 (retainable)

开启这个功能之后文件将不会从服务器删除

```php
$form->file(\'file\')->retainable();

$form->image(\'img\')->retainable();
```


<a name="storagePermission"></a>
### storagePermission
设置上传文件的权限
```php
$form->image(\'picture\')->storagePermission(777);
```


<a name="accept"></a>
### 限制上传文件类型
限制上传文件的类型
```php
$form->file(\'file\')->accept(\'jpg,png,gif,jpeg\');

// 可以指定 mimeTypes， 多个用逗号分割
$form->file(\'file\')->accept(\'jpg,png,gif,jpeg\', \'image/*\');
```

<a name="chunked"></a>
### 分块上传 (chunked)

启用分块上传

```php
$form->file(\'file\')->chunked();
```

<a name="chunkSize"></a>
### 分块大小(chunkSize)

设置分块大小，单位为`KB`，默认`5MB`

> {tip} 调用这个方法会自动启用分块上传

```php
// 设置为 1MB
$form->file(\'file\')->chunkSize(1024);
```

<a name="maxSize"></a>
### 文件大小(maxSize)
设置单个文件最大大小，单位为`Kb`，默认大小为`10M`。

> {tip} 同时应该保证`php.ini`配置文件的`upload_max_filesize`参数值必须大于这个方法设置的值。

```php
// 设置单个文件最大为1Mb
$form->file(\'file\')->maxSize(1024);
```

<a name="threads"></a>
### 并发上传线程数 (threads)
设置并发上传线程数，默认`3`
```php
$form->file(\'file\')->threads(5);
```

<a name="url"></a>
### 自定义上传接口 (url)
通过`url`可以设置自定义上传接口
```php
$form->file(\'file\')->url(\'users/files\');
```

系统提供了`Dcat\\Admin\\Traits\\HasUploadedFile`这个`trait`来帮助开发者更轻松地处理上传文件，用法如下

```php
<?php

namespace App\\Admin\\Controllers;

use Dcat\\Admin\\Traits\\HasUploadedFile;

class FileController
{
    use HasUploadedFile;

    public function handle()
    {
        $disk = $this->disk(\'local\');
        
        // 判断是否是删除文件请求
        if ($this->isDeleteRequest()) {
            // 删除文件并响应
            return $this->deleteFileAndResponse($disk);
        }
        
        // 获取上传的文件
        $file = $this->file();

        // 获取上传的字段名称
        $column = $this->uploader()->upload_column;

        $dir = \'my-images\';
        $newName = $column.\'-我的文件名称.\'.$file->getClientOriginalExtension();

        $result = $disk->putFileAs($dir, $file, $newName);

        $path = "{$dir}/$newName";

        return $result
            ? $this->responseUploaded($path, $disk->url($path))
            : $this->responseErrorMessage(\'文件上传失败\');
    }
}
```

在你的路由文件`app\\Admin\\routes.php`中加上

```php
$router->any(\'users/files\', \'FileController@handle\');
```


<a name="deleteUrl"></a>
### deleteUrl
修改删除已上传文件路径，此方法一般不需要修改
```php
$form->file(\'file\')->deleteUrl(\'file/delete\');
```

<a name="autoSave"></a>
### 自动保存字段值 (autoSave)

设置上传文件后是否自动保存文件路径到数据库，此方法默认启用，一般不需要修改

```php
$form->file(\'file\')->autoSave(false);
```

<a name="options"></a>
### 配置 (options)
自定义[webuploader](https://fex.baidu.com/webuploader/document.html)配置
```php
$form->file(\'file\')->options([\'disableGlobalDnd\' => true]);
```

### 可排序 (sortable)

此方法仅针对多图/文件上传表单有效

```php
$form->multipleImage(\'images\')->sortable();
```


### 压缩图片 (compress)

默认不启用

```php
// 启用图片压缩功能

$form->multipleImage(\'images\')->compress();

$form->image(\'avatar\')->compress([
	\'width\' => 1600,
	\'height\' => 1600,

	// 图片质量，只有type为`image/jpeg`的时候才有效。
	\'quality\' => 90,

	// 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
	\'allowMagnify\' => false,

	// 是否允许裁剪。
	\'crop\' => false,

	// 是否保留头部meta信息。
	\'preserveHeaders\' => true,

	// 如果发现压缩后文件大小比原来还大，则使用原来图片
	// 此属性可能会影响图片自动纠正功能
	\'noCompressIfLarger\' => false,

	// 单位字节，如果图片大小小于此值，不会采用压缩。
	\'compressSize\' => 0
]);
```

### 监听WebUploader文件上传事件 (on)

通过 `on` 方法可以监听 [WebUploader文件上传相关事件](http://fex.baidu.com/webuploader/doc/index.html#WebUploader_Uploader_events)

```php
$form->file(\'...\')
	->on(\'startUpload\', <<<JS
		function () {
			console.log(\'文件开始上传...\', this);
			
			// 上传文件前附加自定义参数到文件上传接口
			this.uploader.options.formData[\'custom_field\'] = \'...\';
		}
JS
    )
	->on(\'uploadFinished\', <<<JS
    	function () {
    		console.log(\'文件上传完毕\');
    	}
JS
    );
```


<a name="withhost"></a>
### 文件/图片域名拼接

文件或图片上传表单字段请不要在模型中设置**访问器**和**修改器**拼接域名，如果你需要在访问的时候拼接完整域名，可以在模型中定义一个`public`方法

```php
<?php

use Illuminate\\Support\\Str;
use Illuminate\\Support\\Facades\\Storage;

class YourModel extends Model
{
    // 定义一个public方法访问图片或文件
	public function getImage()
	{
		if (Str::contains($this->image, \'//\')) {
		    return $this->image;
		}
		
		return Storage::disk(\'admin\')->url($this->image);
	}
}
```


### 保存域名

如果你需要保存文件域名到数据表，可以使用`saveFullUrl`方法

```php
$form->image(\'avatar\')->saveFullUrl();

$form->file(\'...\')->saveFullUrl();
```

### 监听文件上传变动 (change)

通过以下方法可以监听文件**上传成功**或文件**被删除**时产生的变动

```php
$file = $form->file(\'...\');

Admin::script(
	<<<JS
$(\'{$file->getElementClassSelector()} .file-input\').on(\'change\', function () {
	console.log(\'文件发生变动\', this.value);
});
JS
);
```

<a name="override"></a>
### 覆盖上传 (override)

通过 `override` 方法可以实现文件覆盖上传。

```php
$form->file(\'file\')->override();

$form->image(\'img\')->override();
```


<a name="imagefun"></a>
## 图片上传内置方法

<a name="intervention"></a>
### 压缩、裁切、添加水印等
可以使用压缩、裁切、添加水印等各种方法,需要先安装[intervention/image](https://image.intervention.io/v2).

更多使用方法请参考[[Intervention](https://image.intervention.io/v2)]：
```php
$form->image($column[, $label]);

// 修改图片上传路径和文件名
$form->image($column[, $label])->move($dir, $name);

// 剪裁图片
$form->image($column[, $label])->crop(int $width, int $height, [int $x, int $y]);

// 加水印
$form->image($column[, $label])->insert($watermark, \'center\');
```

<a name="dimensions"></a>
### 限制上传图片的尺寸
设置文件上传尺寸限制

参数： `array` 单位为像素
- `width` 指定宽度
- `height` 指定高度
- `min_width` 最小宽度
- `min_height` 最小高度
- `max_width` 最大宽度
- `max_height` 最大高度
- `ratio` 宽高比 (width/height)
  
```php
// 上传宽度为100-300像素之间的图片
$form->image(\'img\')->dimensions([\'min_width\' => 100, \'max_width\' => 300]);
```
<a name="referer"></a>


## 把图片/文件路径保存在其他数据表

通过下面的方法可以把图片或文件的路径保存在单独的附件表，而当前的图片/文件字段只保存ID

> {tip} 这里的示例用的是单图上传表单，如果是多图的话可以按这个思路自行调整。


图片/文件表结构
```sql
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT \'\',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
使用
```php
$form->image(\'image1\')
    ->saving(function ($value) use ($form) {
        if ($form->isEditing() && ! $value) {
            // 编辑页面，删除图片逻辑
            Image::destroy($form->model()->image1);

            return;
        }

        // 新增或编辑页面上传图片
        if ($value) {
            $model = Image::where(\'path\', $value)->first();
        }

        if (empty($model)) {
            $model = new Image();
        }

        $model->path = $value;

        $model->save();

        return $model->getKey();
    })
    ->customFormat(function ($v) {
        if (! $v) {
            return;
        }

        return Image::find((array) $v)->pluck(\'path\')->toArray();
    });
```


## 文件上传失败或无法访问？

如果你发现无法上传文件，那么通常有几下几点原因：

1. `Laravel`文件上传配置不正确，请检查`admin.upload.disk`参数。如果你不了解`laravel`文件上传功能，请阅读文档[Laravel - 文件存储](https://learnku.com/docs/laravel/7.x/filesystem/7485)
2. 文件过大，需要调整`php.ini`的`upload_max_filesize`参数
3. 文件上传目录没有写权限
4. `php`没有安装或没有开启`fileinfo`扩展

如果你的文件上传成功了，却无法正常访问，那么可能是`.env`配置文件中的`APP_URL`参数没有设置正确。',
   'order' => 2,
   'created_at' => '2024-06-26 12:03:37',
   'updated_at' => '2024-06-26 12:03:37',
   'slug' => 'picture-file-upload',
),
            (object) array(
   'id' => 37,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '字段的使用',
   'content' => '# 表单字段的使用

在`model-form`中内置了大量的form组件来帮助你快速的构建form表单

<a name="public"></a>
## 公共方法

<a name="value"></a>
### 设置表单值 (value)
```php
$form->text(\'title\')->value(\'text...\');
```

<a name="default"></a>
### 设置默认值 (default)

```php
$form->text(\'title\')->default(\'text...\');
```

此方法仅在**新增页面**有效，如果**编辑页面**也需要设置默认值，可以参考以下方法

```php
$form->text(\'xxx\')->default(\'默认值\', true);
```

### 设置自定义class (addElementClass)

```php
// 如果不希望添加前缀，则第二个参数设置为false
$form->text(...)->addElementClass([\'class1\', \'class2\'], false);
```


<a name="help"></a>
### 设置提示信息 (help)
```php
$form->text(\'title\')->help(\'help...\');
```

<a name="attr"></a>
### 设置属性 (attribute)
```php
$form->text(\'title\')->attribute([\'data-title\' => \'title...\']);

$form->text(\'title\')->attribute(\'data-title\', \'title...\');
```

<a name="required"></a>
### 设置为必填 (required)
```php
$form->text(\'title\')->required();

// 不显示"*"号
$form->text(\'title\')->required(false);
```

<a name="disable"></a>
### 设置为不可编辑 (disable)
```php
$form->text(\'title\')->disable();
```

<a name="placeholder"></a>
### 设置占位符 (placeholder)
```php
$form->text(\'title\')->placeholder(\'请输入。。。\');
```

<a name="setWidth"></a>
### 设置宽度 (width)
```php
$form->text(\'title\')->width(8, 2);
```

<a name="rules"></a>
### 设置验证规则 (rules)
具体使用可参考[表单验证](https://learnku.com/docs/dcat-admin/1.x/form-validation/8112)。


<a name="saving"></a>
### 修改待保存的表单输入值 (saving)

通过`saving`方法可以更改待保存数据的格式。

```php
use Dcat\\Admin\\Support\\Helper;

$form->multipleFile(\'files\')->saving(function ($paths) {
    $paths = Helper::array($paths);
	
	// 获取数据库当前行的其他字段
    $username = $this->username;
    
    // 最终转化为json保存到数据库
    return json_encode($paths);
});
```

<a name="customFormat"></a>
### 修改表单数据显示 (customFormat)
通过`customFormat`方法可以改变从外部注入到表单的字段值。

如下例子中，`multipleFile`字段要求待渲染的字段值为数组格式，我们可以通过`customFormat`方法把从数据库查出的字段值转化为`array`格式
```php
use Dcat\\Admin\\Support\\Helper;

$form->multipleFile(\'files\')->saving(function ($paths) {
    $paths = Helper::array($paths);
    
    return json_encode($paths);
})->customFormat(function ($paths) {
    // 获取数据库当前行的其他字段
    $username = $this->username;

    // 转为数组
    return Helper::array($paths);
});
```

### 在弹窗中隐藏

如果不想在弹窗中显示某个字段，可以使用`Form\\Field::hideInDialog`方法

```php
$form->display(\'id\');
$form->text(\'title\');
$form->textare(\'contents\')->hideInDialog();
```


<a name="text"></a>
## 文本 (text)

```php
$form->text($column, [$label]);

// 添加提交验证规则
$form->text($column, [$label])->rules(\'required|min:10\');
```

<a name="hidden"></a>
## 隐藏字段 (hidden)

通过`hidden`方法可以给你的表单设置一个隐藏字段。

```php
$form->hidden(\'author_id\')->value(Admin::user()->getKey());
```

通常可以结合`saving`事件使用
```php
$form->hidden(\'author_id\');

$form->saving(function (Form $form) {
    $form->author_id = Admin::user()->getKey();
});
```


<a name="select"></a>
## 下拉选框单选 (select)
```php
$form->select($column[, $label])->options([1 => \'foo\', 2 => \'bar\', \'val\' => \'Option name\']);
```

或者从api中获取选项列表：
```php
$form->select($column[, $label])->options(\'/api/users\');

// 使用ajax并显示所选项目

$form->select($column[, $label])->options(Model::class)->ajax(\'/api/users\');

// 或指定名称和ID

$form->select($column[, $label])->options(Model::class, \'id\', \'name\')->ajax(\'/api/users\');
```
其中api接口的格式必须为下面格式：
```php
[
    {
        "id": 9,
        "text": "xxx"
    },
    {
        "id": 21,
        "text": "xxx"
    },
    ...
]
```

如果选项过多，可通过ajax方式动态分页载入选项：

```php
$form->select(\'user_id\')->options(function ($id) {
    $user = User::find($id);

    if ($user) {
        return [$user->id => $user->name];
    }
})->ajax(\'api/users\');
```

API `/admin/api/users`接口的代码：

```php
public function users(Request $request)
{
    $q = $request->get(\'q\');

    return User::where(\'name\', \'like\', "%$q%")->paginate(null, [\'id\', \'name as text\']);
}

```
接口返回的数据结构为
```json
{
    "total": 4,
    "per_page": 15,
    "current_page": 1,
    "last_page": 1,
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 3,
    "data": [
        {
            "id": 9,
            "text": "xxx"
        },
        {
            "id": 21,
            "text": "xxx"
        },
        {
            "id": 42,
            "text": "xxx"
        },
        {
            "id": 48,
            "text": "xxx"
        }
    ]
}
```

<a name="selectload"></a>
## 下拉选框联动 (load)

`select`组件支持父子关系的单向联动：
```php
$form->select(\'province\')->options(...)->load(\'city\', \'/api/city\');

$form->select(\'city\');
```

其中`load(\'city\', \'/api/city\');`的意思是，在当前select的选项切换之后，会把当前选项的值通过参数`q`, 调用接口`/api/city`，并把api返回的数据填充为city选择框的选项，其中api`/api/city`返回的数据格式必须符合:

```php
[
    {
        "id": 9,
        "text": "xxx"
    },
    {
        "id": 21,
        "text": "xxx"
    },
    ...
]
```
控制器action的代码示例如下：

```php
public function city(Request $request)
{
    $provinceId = $request->get(\'q\');

    return ChinaArea::city()->where(\'parent_id\', $provinceId)->get([\'id\', DB::raw(\'name as text\')]);
}
```

`selectTable`、`multipleSelectTable`、`radio`、`checkbox`也可以使用`load`方法联动`select`和`multipleSelect`表单，用法和上面的示例一致。

### 联动多个字段 (loads)

使用`loads`方法可以联动多个字段，用法如下

```php
$form->select(\'status\')
    ->options(...)
    ->loads([\'field1\', \'field2\'], [\'/api/field1\', \'/api/field2\']);

$form->select(\'field1\');
$form->select(\'field2\');
```

`api`返回的数据格式与`load`方法一致，`selectTable`、`multipleSelectTable`、`radio`、`checkbox`也可以使用`loads`方法联动。

<a name="multipleSelect"></a>
## 下拉选框多选 (multipleSelect)

> 注入这个字段的数据（从数据库查出来的）可以是一个以`,`隔开的字符串，也可以是`json`字符串或`array`数组。

```php
$form->multipleSelect($column[, $label])
	->options([1 => \'foo\', 2 => \'bar\', \'val\' => \'Option name\'])
	->saving(function ($value) {
		// 转化成json字符串保存到数据库
		return json_encode($value);
	});

// 使用ajax并显示所选项目：

$form->multipleSelect($column[, $label])->options(Model::class)->ajax(\'ajax_url\');

// 或指定名称和ID

$form->multipleSelect($column[, $label])->options(Model::class, \'name\', \'id\')->ajax(\'ajax_url\');
```

多选框可以处理两种情况，第一种是`ManyToMany`的关系。

```php
class Post extends Models
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

return Form::make(Post::with(\'tags\'), function (Form $form) {
    ...

    $form->multipleSelect(\'tags\')
        ->options(Tag::all()->pluck(\'name\', \'id\'))
        ->customFormat(function ($v) {
            if (! $v) {
                return [];
            }

            // 从数据库中查出的二维数组中转化成ID
            return array_column($v, \'id\');
        });
});
```

第二种是将选项数组存储到单字段中，如果字段是字符串类型，那就需要在模型里面为该字段定义[访问器和修改器](https://laravel.com/docs/5.5/eloquent-mutators)来存储和读取了。

如果选项过多，可通过ajax方式动态分页载入选项：

```php
$form->multipleSelect(\'friends\')->options(function ($ids) {

    return User::find($ids)->pluck(\'name\', \'id\');
    
})->ajax(\'api/users\');
```


API `/admin/api/users`接口的代码：

```php
public function users(Request $request)
{
    $q = $request->get(\'q\');

    return User::where(\'name\', \'like\', "%$q%")->paginate(null, [\'id\', \'name as text\']);
}

```
接口返回的数据结构为
```
{
    "total": 4,
    "per_page": 15,
    "current_page": 1,
    "last_page": 1,
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 3,
    "data": [
        {
            "id": 9,
            "text": "xxx"
        },
        {
            "id": 21,
            "text": "xxx"
        },
        {
            "id": 42,
            "text": "xxx"
        },
        {
            "id": 48,
            "text": "xxx"
        }
    ]
}
```


<a name="select-table"></a>
## 表格选择器 (selectTable)

```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Models\\Administrator;

$form->selectTable($field)
	->title(\'弹窗标题\')
	->dialogWidth(\'50%\') // 弹窗宽度，默认 800px
	->from(UserTable::make([\'id\' => $form->getKey()])) // 设置渲染类实例，并传递自定义参数
	->model(Administrator::class, \'id\', \'name\'); // 设置编辑数据显示
	
// 上面的代码等同于
$form->selectTable($field)
	->from(UserTable::make([\'id\' => $form->getKey()])) // 设置渲染类实例，并传递自定义参数
	->options(function ($v) { // 设置编辑数据显示
		if (! $v) {
			return [];
		}
		
		return Administrator::find($v)->pluck(\'name\', \'id\');
	});
```

定义渲染类如下，需要继承`Dcat\\Admin\\Grid\\LazyRenderable`

> 这里使用了数据表格异步加载功能，详细用法请参考[异步加载](https://learnku.com/docs/dcat-admin/2.x/asynchronous-loading/9327)

```php
<?php

namespace App\\Admin\\Renderable;

use Dcat\\Admin\\Grid;
use Dcat\\Admin\\Grid\\LazyRenderable;
use Dcat\\Admin\\Models\\Administrator;

class UserTable extends LazyRenderable
{
    public function grid(): Grid
    {
        // 获取外部传递的参数
        $id = $this->id;
        
        return Grid::make(new Administrator(), function (Grid $grid) {
            $grid->column(\'id\');
            $grid->column(\'username\');
            $grid->column(\'name\');
            $grid->column(\'created_at\');
            $grid->column(\'updated_at\');

            $grid->quickSearch([\'id\', \'username\', \'name\']);

            $grid->paginate(10);
            $grid->disableActions();

            $grid->filter(function (Grid\\Filter $filter) {
                $filter->like(\'username\')->width(4);
                $filter->like(\'name\')->width(4);
            });
        });
    }
}
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/7bcd285175c8f097149ad4f6a75506fc667bacec42db1.gif)

### 设置选中后将保存到表单的字段和显示的字段

```php
$form->selectTable($field)
	->from(UserTable::make([\'id\' => $form->getKey()]))
	->options(function ($v) { // 设置编辑数据显示
		if (! $v) {
			return [];
		}
		
		return Administrator::find($v)->pluck(\'name\', \'id\');
	})
	->pluck(\'name\', \'id\'); // 第一个参数为显示的字段，第二个参数为选中后将保存到表单的字段
	
// 上面的代码也可以简化为
$form->selectTable($field)
	->from(UserTable::make([\'id\' => $form->getKey()]))
	->model(Administrator::class, \'id\', \'name\'); // 设置编辑数据显示
```

<a name="listbox"></a>
## 多选盒 (listbox)

使用方法和`multipleSelect`类似。

> 注入这个字段的数据（从数据库查出来的）可以是一个以`,`隔开的字符串，也可以是`json`字符串或`array`数组。

```php
$form->listbox($column[, $label])->options([1 => \'foo\', 2 => \'bar\', \'val\' => \'Option name\']);
```

<a name="textarea"></a>
## 长文本 (textarea)
```php
$form->textarea($column[, $label])->rows(10);
```

<a name="radio"></a>
## 单选 (radio)
```php
$form->radio($column[, $label])->options([\'m\' => \'Female\', \'f\'=> \'Male\'])->default(\'m\');
```

<a name="checkbox"></a>
## 多选 (checkbox)

`options()`方法用来设置选择项:
```php
$form->checkbox($column[, $label])
	->options([1 => \'foo\', 2 => \'bar\', \'val\' => \'Option name\'])
	->saving(function ($value) {
		// 转化成json字符串保存到数据库
		return json_encode($value);
	});
```

启用选中全部功能

```php
$form->checkbox(\'column\')->canCheckAll();
```

<a name="autocomplete"></a>
## autocomplete

此表单可以在填写表单时进行对表单值进行搜索，并把结果展示在下拉列表中，用法如下

```php
$form->autocomplete($column[, $label])->options([\'foo\', \'bar\', ...]);

// 设置分组名称
$form->autocomplete($column[, $label])->groups([
    [
        \'label\' => \'group name\',
        \'options\' => [\'foo\', \'bar\', ...],
    ],
]);
```

效果如下
![](http://docs.oneself.icu:10010/storage/markdown/images/8cf35c9cc8c53e0f328019eecbb0d4a4667bacfb3b1f1.png)

### 从远程API获取数据

也可以从远程API中获取数据
```php
// ajax 函数的第一个参数为 ajax url, 第二个参数为 valueField（可选）, 第三个参数为 groupField（可选）
$form->autocomplete($column[, $label])->ajax(\'/countries\', \'name\', \'region\');
```

远程API 服务端的请求参数为query，示例代码如下：
```php
class CountryController extends AdminController
{
    public function search()
    {
        $countries = Country::when(request(\'query\'), function ($query, $value) {
            $query->where(\'name\', \'like\', "%{$value}%");
        })->get();

        return Admin::json($countries->toArray());
    }
}
```

### 自定义 autocomplete 的设置：
详细设置请参考： [devbridge/jQuery-Autocomplete](https://github.com/devbridge/jQuery-Autocomplete)
```
$js = <<<JS
    function (suggestion) {
        alert(\'You selected: \' + suggestion.value + \', \' + suggestion.data);
    }
JS;

$form->autocomplete($column[, $label])->configs([
    \'minChars\' => 5,
    \'noCache\' => true,
    \'onSelect\' => JavaScript::make($js),
]);
```

configs 同样也支持闭包：
```
$form->autocomplete($column[, $label])->configs(function($model, $value){
    return [
        ....
    ];
});
```

### 表单联动
autocomplete 的联动逻辑和select的刚好相反。
depends 需要写在受影响的字段，不限上级字段类型，上级字段的值将同时上传到API。
```
$form->select(\'region\')->options([
    \'asia\',
    \'Africa\',
    \'America\',
    \'Europe\',
]);

$form->autocomplete(\'country\')->ajax(\'/countries\', \'name\', \'region\');

// 将会发出 /states?query={query}&region={region}&country={country}  的请求
$form->autocomplete(\'addr\')->ajax(\'/states\', \'name\')->depends([\'region\', \'country\']);
```




<a name="email"></a>
## 邮箱 (email)
```php
$form->email($column[, $label]);
```

<a name="password"></a>
## 密码 (password)
```php
$form->password($column[, $label]);
```

<a name="url"></a>
## 链接 (url)
```php
$form->url($column[, $label]);
```

<a name="ip"></a>
## IP地址 (ip)
```php
$form->ip($column[, $label]);
```

<a name="mobile"></a>
## 手机 (mobile)
```php
$form->mobile($column[, $label])->options([\'mask\' => \'999 9999 9999\']);
```

<a name="color"></a>
## 颜色选择器 (color)

```php
$form->color($column[, $label]);
```

<a name="time"></a>
## 时间 (time)
```php
$form->time($column[, $label]);

// 设置时间格式，更多格式参考http://momentjs.com/docs/#/displaying/format/
$form->time($column[, $label])->format(\'HH:mm:ss\');
```

<a name="date"></a>
## 日期 (date)
```php
$form->date($column[, $label]);

// 设置日期格式，更多格式参考http://momentjs.com/docs/#/displaying/format/
$form->date($column[, $label])->format(\'YYYY-MM-DD\');
```

<a name="datetime"></a>
## 时间日期 (datetime)
```php
$form->datetime($column[, $label]);

// 设置日期格式，更多格式参考http://momentjs.com/docs/#/displaying/format/
$form->datetime($column[, $label])->format(\'YYYY-MM-DD HH:mm:ss\');
```

<a name="timeRange"></a>
## 时间范围 (timeRange)
`$startTime`、`$endTime`为开始和结束时间字段:
```php
$form->timeRange($startTime, $endTime, \'Time Range\');
```

<a name="dateRange"></a>
## 日期范围 (dateRange)
`$startDate`、`$endDate`为开始和结束日期字段:
```php
$form->dateRange($startDate, $endDate, \'Date Range\');
```

<a name="datetimeRange"></a>
## 时间日期范围 (datetimeRange)
`$startDateTime`、`$endDateTime`为开始和结束时间日期:
```php
$form->datetimeRange($startDateTime, $endDateTime, \'DateTime Range\');
```

## 范围 (range)

```php
$form->range(\'start_column\', \'end_column\', \'范围\');
```

<a name="file"></a>
## 文件上传 (file)

使用文件上传功能之前需要先完成上传配置。文件上传配置以及内置方法请参考:[图片/文件上传](https://learnku.com/docs/dcat-admin/1.x/picture-file-upload/8106).

> 文件或图片上传表单字段请不要在模型中设置**访问器**和**修改器**拼接域名，如有相关需求可参考[文件/图片域名拼接](https://learnku.com/docs/dcat-admin/1.x/picture-file-upload/8106#withhost)。

文件上传目录在文件`config/admin.php`中的`upload.file`中配置，如果目录不存在，需要创建该目录并开放写权限。
```php
$form->file($column[, $label]);

// 修改文件上传路径和文件名
$form->file($column[, $label])->move($dir, $name);

// 并设置上传文件类型
$form->file($column[, $label])->rules(\'mimes:doc,docx,xlsx\');

// 添加文件删除按钮
$form->file($column[, $label])->removable();
```

<a name="image"></a>
## 图片上传 (image)

使用图片上传功能之前需要先完成上传配置，图片上传配置以及内置方法请参考:[图片/文件上传](https://learnku.com/docs/dcat-admin/1.x/picture-file-upload/8106)。

> 文件或图片上传表单字段请不要在模型中设置**访问器**和**修改器**拼接域名，如有相关需求可参考[文件/图片域名拼接](https://learnku.com/docs/dcat-admin/1.x/picture-file-upload/8106#withhost)。

图片上传目录在文件`config/admin.php`中的`upload.image`中配置，如果目录不存在，需要创建该目录并开放写权限。

可以使用压缩、裁切、添加水印等各种方法,需要先安装[intervention/image](http://image.intervention.io/getting_started/installation)。更多使用方法请参考[[Intervention](http://image.intervention.io/getting_started/introduction)]：
```php
$form->image($column[, $label]);

// 修改图片上传路径和文件名
$form->image($column[, $label])->move($dir, $name);

// 剪裁图片
$form->image($column[, $label])->crop(int $width, int $height, [int $x, int $y]);

// 加水印
$form->image($column[, $label])->insert($watermark, \'center\');
```

<a name="multipleImage"></a>
## 多图和多文件上传 (multipleImage)

使用图片上传功能之前需要先完成上传配置，图片上传配置以及内置方法请参考:[图片/文件上传](https://learnku.com/docs/dcat-admin/1.x/picture-file-upload/8106)。

> 注入这个字段的数据（从数据库查出来的）可以是一个以`,`隔开的字符串，也可以是`json`字符串或`array`数组。

```php
// 多图
$form->multipleImage($column[, $label]);

// 限制最大上传数量
$form->multipleImage($column[, $label])->limit(3);

// 多文件
$form->multipleFile($column[, $label]);

// 限制最大上传数量
$form->multipleFile($column[, $label])->limit(5);
```

多图/文件上传的时候提交的数据是一个`array`数组，你可以通过以下方式把数据在保存进数据库之前改为你想要的格式：
```php
// 转化为json格式保存到数据库
$form->multipleFile($column[, $label])->saving(function ($paths) {
    // 可以转化为由 , 隔开的字符串格式
    // return implode(\',\', $paths);
    
    // 也可以转化为json
    return json_encode($paths);
});
```

当然，如果你想保存为其他任意格式都是可以的，只是如果要保存其他格式，需要通过用`customFormat`方法把数据转化为一维数组展示，如：
```php
$form->multipleFile(\'images\')
    ->customFormat(function ($paths) {
        return collect($paths)->map(function ($value) {
        	return explode(\'|\', $value);
        })->flatten()->toArray();
    })
    ->saving(function ($paths) {
        return implode(\'|\', $paths);
    });
```
启用可排序功能

```php
$form->multipleImage(\'images\')->sortable();
```


<a name="editor"></a>
## 富文本编辑器 (editor)

系统集成了`TinyMCE`编辑器作为内置编辑器。


#### 基本使用
```php
$form->editor($column[, $label]);
```

#### 设置语言包

默认支持简体中文和英文两种语言，如需其他语言可以通过以下方式设置语言包地址。

```php
$form->editor(\'content\')->languageUrl(url(\'TinyMCE/langs/de.js\'));
```

#### 编辑器配置

具体配置等的使用可以参考[官方文档](https://www.tiny.cloud/docs)或[中文文档](http://tinymce.ax-z.cn/)

```php
<?php

use Dcat\\Admin\\Support\\JavaScript;

$form->editor(\'content\')->options([
    \'toolbar\' => [],
    \'setup\' => JavaScript::make(
        <<<JS
function (editor) {
    console.log(\'编辑器初始化成功\', editor)
}
JS
    ),
]);
```

#### 设置高度

默认值为`400`

```php
$form->editor(\'content\')->height(\'600\');
```


#### 只读

```php
$form->editor(\'content\')->readOnly();

// 或
$form->editor(\'content\')->disable();
```

#### 图片上传

设置图片上传`disk`配置，默认上传到`admin.upload.disk`指定的配置

```php
// 上传到oss
$form->editor(\'content\')->disk(\'oss\');
```

设置图片上传目录，默认为`tinymce/images`
```php
$form->editor(\'content\')->imageDirectory(\'editor/images\');
```

自定义上传接口，接口返回格式需要是`{"location": "图片url"}`
```php
$form->editor(\'content\')->imageUrl(\'editor/upload-image\');
```


#### 全局设置

如果你需要对编辑器进行全局设置，可以在`app\\Admin\\bootstrap.php`加上以下代码

```php
<?php

use Dcat\\Admin\\Form\\Field\\Editor;

Editor::resolving(function (Editor $editor) {
    // 设置默认配置
    $editor->options([...]);
    
    // 设置编辑器图片默认上传到七牛云
    $editor->disk(\'qiniu\');
});
```



<a name="markdown"></a>
## Markdown编辑器 (markdown)

系统集成了`editor-md`编辑器作为内置Markdown编辑器。


#### 基本使用
```php
$form->markdown($column[, $label]);
```

#### 设置语言包

默认支持简体中文和英文两种语言，如需其他语言可以通过以下方式设置语言包地址。

```php
$form->markdown(\'content\')->languageUrl(admin_asset(\'@admin/dcat/plugins/editor-md/languages/zh-tw.js\'));
```

#### 编辑器配置

具体配置等的使用可以参考[官方文档](https://pandao.github.io/editor.md/)

```php
<?php

use Dcat\\Admin\\Support\\JavaScript;

$form->markdown(\'content\')->options([
    \'onpreviewing\' => JavaScript::make(
        <<<JS
function() {
	// console.log("onpreviewing =>", this, this.id, this.settings);
	// on previewing you can custom css .editormd-preview-active
}
JS
    ),
]);
```

#### 设置高度

默认值为`500`

```php
$form->markdown(\'content\')->height(\'600\');
```


#### 只读

```php
$form->markdown(\'content\')->readOnly();

// 或
$form->markdown(\'content\')->disable();
```


#### 图片上传

设置图片上传`disk`配置，默认上传到`admin.upload.disk`指定的配置

```php
// 上传到oss
$form->markdown(\'content\')->disk(\'oss\');
```

设置图片上传目录，默认为`markdown/images`
```php
$form->markdown(\'content\')->imageDirectory(\'markdown/images\');
```

自定义上传接口，接口返回格式需要是`{"success": 1, "url": "图片url"}`
```php
$form->markdown(\'content\')->imageUrl(\'markdown/upload-image\');
```

#### 全局设置

如果你需要对编辑器进行全局设置，可以在`app\\Admin\\bootstrap.php`加上以下代码

```php
<?php

use Dcat\\Admin\\Form\\Field\\Markdown;

Markdown::resolving(function (Markdown $markdown) {
    // 设置默认配置
    $markdown->options([...]);
    
    // 设置编辑器图片默认上传到七牛云
    $markdown->disk(\'qiniu\');
});
```


<a name="switch"></a>
## 开关 (switch)

使用
```php
$form->switch($column[, $label]);
```

开关表单保存到数据库的默认值为`1`和`0`，如果需要更改保存到数据库的值，可以这样使用

```php
$form->switch($column[, $label])
	->customFormat(function ($v) {
		return $v == \'打开\' ? 1 : 0;
	})
	->saving(function ($v) {
		return $v ? \'打开\' : \'关闭\';
	});
```


<a name="map"></a>
## 地图 (map)

地图控件，用来选择经纬度,`$latitude`, `$longitude`为经纬度字段。

使用这个功能需要在 `config/admin.php` 文件中修改 `map_provider` 的值（目前支持的地图为："tencent","amap", "google", "yandex", "baidu")，不同地图需要自己申请相应的 KEY 并在 .env 文件中配置，然后需要在`app/Admin/bootstrap.php`中加入以下代码
```php
Form\\Field\\Map::requireAssets();
```

使用

```php
$form->map($latitude, $longitude, $label);
```


<a name="slider"></a>
## 滑动条 (slider)
可以用来数字类型字段的选择，比如年龄：
```php
$form->slider($column[, $label])->options([\'max\' => 100, \'min\' => 1, \'step\' => 1, \'postfix\' => \'years old\']);
```
更多options请参考:https://github.com/IonDen/ion.rangeSlider#settings


<a name="display"></a>
## 仅显示 (display)
只显示字段，不做任何操作：
```php
$form->display($column[, $label]);


//更复杂的显示
$form->display($column[, $label])->with(function ($value) {
    return "<img src="$value" />";
});
```


<a name="currency"></a>
## 单位符号 (currency)
```php
$form->currency($column[, $label]);

// 设置单位符号
$form->currency($column[, $label])->symbol(\'￥\');
```

<a name="number"></a>
## 数字 (number)
```php
$form->number($column[, $label]);
```

<a name="rate"></a>
## 费率 (rate)
```php
$form->rate($column[, $label]);
```

<a name="divider"></a>
## 分割线 (divider)
```php
$form->divider();
```

<a name="html"></a>
## 自定义内容 (html)
插入html内容，参数可以是实现了`Htmlable`、`Renderable`或者实现了`__toString()`方法的类
```php
$form->html(\'你的html内容\', $label = \'\');
```

<a name="tags"></a>
## 标签 (tags)
插入逗号(,)隔开的字符串`tags`
```php
$form->tags(\'keywords\');
```

`tags`同样支持`ManyToMany`的关系，示例如下：

```php
$form->tags(\'tags\', \'文章标签\')
    ->pluck(\'name\', \'id\') // name 为需要显示的 Tag 模型的字段，id 为主键
    ->options(Tag::all());// 下拉框选项
```

注意：处理`ManyToMany`关系时必须调用`pluck`方法，指定显示的字段名和主键。
此外 `options` 方法传入一个`Collection`对象时，`options`会自动调用该对象的`pluck`方法转为`[\'主键名\' => \'显示字段名\']` 数组，作为下拉框选项。或者可以直接使用`[\'主键名\' => \'显示字段名\']`这样的数组作为参数。

`tags`还支持`saving`方法用于处理提交的数据，示例如下：

```php
$form->tags(\'tags\', \'文章标签\')
    ->pluck(\'name\', \'id\')
    ->options(Tag::all())
    ->saving(function ($value) {
        return $value;
    });
```

`saving` 方法接收一个「参数为 tags 的提交值，返回值为修改后的 tags 提交值」的闭包，可以用于实现自动创建新 tag 或其它功能。



如果选项过多，可通过ajax方式动态分页载入选项：

```php
$form->tags(\'friends\')->options(function ($ids) {
    return User::find((array) $ids)->pluck(\'name\', \'id\');
    
})->ajax(\'api/users\');
```

API `/admin/api/users`接口的代码：

```php
public function users(Request $request)
{
    $q = $request->get(\'q\');

    return User::where(\'name\', \'like\', "%$q%")->paginate(null, [\'id\', \'name as text\']);
}
```
接口返回的数据结构为
```
{
    "total": 4,
    "per_page": 15,
    "current_page": 1,
    "last_page": 1,
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 3,
    "data": [
        {
            "id": 9,
            "text": "xxx"
        },
        {
            "id": 21,
            "text": "xxx"
        },
        {
            "id": 42,
            "text": "xxx"
        },
        {
            "id": 48,
            "text": "xxx"
        }
    ]
}
```



<a name="icon"></a>
## 图标选择器 (icon)
选择`font-awesome`图标
```php
$form->icon(\'icon\');
```

<a name="tree"></a>
## 树形选择器 (tree)
树形结构表单

```php
$form->tree(\'permissions\')
    ->nodes(Model::get()->toArray()) // 设置所有节点
    ->customFormat(function ($v) { // 格式化外部注入的值
        if (!$v) return [];

        return array_column($v, \'id\');
    });

// 修改节点的字段名称
// 默认 “id” “name” “parent_id”
$form->tree(\'permissions\')
    ->nodes($permissionModel::get()->toArray())
    ->setIdColumn(\'id\')
    ->setTitleColumn(\'title\')
    ->setParentColumn(\'parent\'); 
    
// 默认是不保存父节点的值的，因为一般来说父节点只是作为标题的形式存在
// 禁止过滤父节点的值
$form->tree(\'permissions\')
    ->nodes($permissionModel->allNodes())
    ->exceptParentNode();
    
// 默认收缩子节点
$form->tree(\'permissions\')
    ->nodes($permissionModel->allNodes())
    ->expand(false);
```

`tree`表单默认不允许单独选中父节点，可以通过`treeState(false)`开启这个功能

```php
$form->tree(\'xxx\')
    ->treeState(false) # 允许单独选择父节点
    ->setTitleColumn(\'title\')
    ->nodes(...);
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/a4a58ad7395e387b017eca057515b50a667bad3006a49.gif)



<a name="table"></a>
## 表格表单 (table)

如果某一个字段存储的是json格式的二维数组，可以使用table表单组件来实现快速的编辑：

```php
$form->table(\'extra\', function (NestedForm $table) {
    $table->text(\'key\');
    $table->text(\'value\');
    $table->text(\'desc\');
});
```
同时在模型里面给这个字段增加访问器和修改器:
```php
public function getExtraAttribute($extra)
{
    return array_values(json_decode($extra, true) ?: []);
}

public function setExtraAttribute($extra)
{
    $this->attributes[\'extra\'] = json_encode(array_values($extra));
}
```
这个组件类似于hasMany组件，不过是用来处理单个字段的情况，适用于简单的二维数据。


<a name="onemany"></a>
## 一对多 (hasMany)

一对多内嵌表格，用于处理一对多的关系，下面是个简单的例子：

有两张表是一对多关系：

```sql
CREATE TABLE `demo_painters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `demo_paintings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `painter_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `completed_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  PRIMARY KEY (`id`),
  KEY painter_id (`painter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

表的模型为：
```php
<?php

namespace App\\Models\\Demo;

use Illuminate\\Database\\Eloquent\\Model;

class Painter extends Model
{
    public function paintings()
    {
        return $this->hasMany(Painting::class, \'painter_id\');
    }
}
```
```php
<?php

namespace App\\Models\\Demo;

use Illuminate\\Database\\Eloquent\\Model;

class Painting extends Model
{
    protected $fillable = [\'title\', \'body\', \'completed_at\'];

    public function painter()
    {
        return $this->belongsTo(Painter::class, \'painter_id\');
    }
}
```

构建表单代码如下：
```php
use App\\Models\\Demo\\Painter;

// 这里需要显式地指定关联关系
$builder = Painter::with(\'paintings\');

// 如果你使用的是数据仓库，则可以这样指定关联关系
// $repository = new Painter([\'paintings\']);

return Form::make($builder, function (Form $form) {
    $form->display(\'id\', \'ID\');
    
    $form->text(\'username\')->rules(\'required\');
    $form->textarea(\'bio\')->rules(\'required\');
    
    $form->hasMany(\'paintings\', function (Form\\NestedForm $form) {
        $form->text(\'title\');
        $form->textarea(\'body\');
        $form->datetime(\'completed_at\');
    });
    
    $form->display(\'created_at\', \'Created At\');
    $form->display(\'updated_at\', \'Updated At\');
    
    // 也可以设置label
    
    $form->hasMany(\'paintings\', \'画作\', function (Form\\NestedForm $form) {
        ...
    });
});
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/d649255149f414a4acdfd48d8ceb55f9667bad43ad211.png)


<a name="has-many-table"></a>
### 表格模式 (table)

如果你想要显示表格模式，可以这样使用

```php
use Dcat\\Admin\\Support\\Helper;

$form->hasMany(\'paintings\', function (Form\\NestedForm $form) {
     ...
})->useTable();
```
效果

![](http://docs.oneself.icu:10010/storage/markdown/images/238005def4731c25c8fcdba578f5050b667bad5818b23.png)


<a name="embeds"></a>
## 内嵌 (embeds)

> 内嵌表单不支持图片和文件上传表单。

用于处理`mysql`的`JSON`类型字段数据或者`mongodb`的`object`类型数据，也可以将多个field的数据值以`JSON`字符串的形式存储在`mysql`的字符串类型字段中

比如`orders`表中的`JSON`或字符串类型的`extra`字段，用来存储多个field的数据，先定义model:
```php
class Order extends Model
{
    protected $casts = [
        \'extra\' => \'json\',
    ];
}
```
然后在form中使用：
```php
$form->embeds(\'extra\', function ($form) {

    $form->text(\'extra1\')->rules(\'required\');
    $form->email(\'extra2\')->rules(\'required\');
    $form->mobile(\'extra3\');
    $form->datetime(\'extra4\');

    $form->dateRange(\'extra5\', \'extra6\', \'范围\')->rules(\'required\');

});

// 自定义标题
$form->embeds(\'extra\', \'附加信息\', function ($form) {
    ...
});
```

回调函数里面构建表单元素的方法调用和外面是一样的。',
   'order' => 3,
   'created_at' => '2024-06-26 13:55:40',
   'updated_at' => '2024-06-26 13:55:40',
   'slug' => 'use-of-fields',
),
            (object) array(
   'id' => 38,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '字段扩展',
   'content' => '# 表单字段扩展


## 扩展自定义组件

在开始扩展表单组件之前需要先了解[动态监听元素生成 (init)](https://learnku.com/docs/dcat-admin/2.x/js-component/8087#1dae4a)功能，表单组件的`JS`代码建议都使用`Dcat.init`方法监听并初始化，否则可能无法兼容`Form::hasMany`以及`Form::array`等动态生成字段的表单类型。

### 集成富文本编辑器wangEditor

[wangEditor](http://www.wangeditor.com/)是一个优秀的国产的轻量级富文本编辑器，如果`dcat-admin`自带的基于`ckeditor`的编辑器组件使用上有问题，可以通过下面的步骤可以集成它，并覆盖掉默认的`editor`：

> 为了方便演示，示例中直接使用CDN链接。实际开发中需要先下载前端库文件[wangEditor](https://github.com/wangfupeng1988/wangEditor/releases)到服务器，解压到目录`public/vendor/wangEditor-4.7.1`。

新建组件类`app/Admin/Extensions/Form/WangEditor.php`。

```php
<?php

namespace App\\Admin\\Extensions\\Form;

use Dcat\\Admin\\Form\\Field;

class WangEditor extends Field
{
    protected $view = \'admin.wang-editor\';
}
```

新建视图文件`resources/views/admin/wang-editor.blade.php`：
```html
<div class="{{$viewClass[\'form-group\']}}">

    <label class="{{$viewClass[\'label\']}} control-label">{{$label}}</label>

    <div class="{{$viewClass[\'field\']}}">

        @include(\'admin::form.error\')

        <div {!! $attributes !!} style="width: 100%; height: 100%;">
            <p>{!! $value !!}</p>
        </div>

        <input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}" />

        @include(\'admin::form.help-block\')

    </div>
</div>

<!-- script标签加上 "init" 属性后会自动使用 Dcat.init() 方法动态监听元素生成 -->
<script require="@wang-editor" init="{!! $selector !!}">
    var E = window.wangEditor
	// id 变量是 Dcat.init() 自动生成的，是一个唯一的随机字符串
    var editor = new E(\'#\' + id);
    editor.config.zIndex = 0
    editor.config.uploadImgShowBase64 = true
    editor.config.onchange = function (html) {
        $this.parents(\'.form-field\').find(\'input[type="hidden"]\').val(html);
    }
    editor.create()
</script>
```

然后注册进`dcat-admin`，在`app/Admin/bootstrap.php`中添加以下代码：

```php
<?php

use App\\Admin\\Extensions\\Form\\WangEditor;
use Dcat\\Admin\\Form;

// 注册前端组件别名
Admin::asset()->alias(\'@wang-editor\', [
    // 为了方便演示效果，这里直接加载CDN链接，实际开发中可以下载到服务器加载
    \'js\' => [\'https://cdn.jsdelivr.net/npm/wangeditor@4.7.1/dist/wangEditor.min.js\'],
]);

Form::extend(\'editor\', WangEditor::class);
```

调用:

```php
$form->editor(\'body\');
```

### 集成富文本编辑器ckeditor

先下载[ckeditor](http://ckeditor.com/download) 并解压到/public目录，比如放在`/public/packages/`目录下。

然后新建扩展文件`app/Admin/Extensions/Form/CKEditor.php`:
```php
<?php

namespace App\\Admin\\Extensions\\Form;

use Dcat\\Admin\\Form\\Field;

class CKEditor extends Field
{
    protected $view = \'admin.ckeditor\';
}
```

新建view `resources/views/admin/ckeditor.blade.php`:
```html
<div class="{{$viewClass[\'form-group\']}}">

    <label class="{{$viewClass[\'label\']}} control-label">{{$label}}</label>

    <div class="{{$viewClass[\'field\']}}">

        @include(\'admin::form.error\')

        <textarea name="{{ $name}}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{!! $value !!}</textarea>

        @include(\'admin::form.help-block\')

    </div>
</div>

<script require="@ckeditor" init="{!! $selector !!}">
    $this.ckeditor();
</script>
```

然后在`app/Admin/bootstrap.php`中引入扩展：
```php
use App\\Admin\\Extensions\\Form\\CKEditor;
use Dcat\\Admin\\Form;

// 注册前端组件别名
Admin::asset()->alias(\'@ckeditor\', [
    \'js\' => [
        \'/packages/ckeditor/ckeditor.js\',
        \'/packages/ckeditor/adapters/jquery.js\',
    ],
]);

Form::extend(\'ckeditor\', CKEditor::class);
```

然后就能在form中使用了:
```php
$form->ckeditor(\'content\');
```

### 集成PHP editor


通过下面的步骤来扩展一个基于[codemirror](http://codemirror.net/index.html)的PHP代码编辑器，效果参考[PHP mode](http://codemirror.net/mode/php/)。

先将[codemirror](http://codemirror.net/codemirror.zip)库下载并解压到前端资源目录下，比如放在`public/packages/codemirror-5.20.2`目录下。

新建组件类`app/Admin/Extensions/PHPEditor.php`:

```php
<?php

namespace App\\Admin\\Extensions\\Form;

use Dcat\\Admin\\Form\\Field;

class PHPEditor extends Field
{
    protected $view = \'admin.php-editor\';
}

```

> {tip} 类中的静态资源也同样可以从外部引入，参考[Editor.php](https://github.com/jqhph/dcat-admin/blob/master/src/Form/Field/Editor.php)

创建视图`resources/views/admin/php-editor.blade.php`:

```html
<div class="{{$viewClass[\'form-group\']}}">

    <label class="{{$viewClass[\'label\']}} control-label">{{$label}}</label>

    <div class="{{$viewClass[\'field\']}}">

        @include(\'admin::form.error\')

        <textarea class="{{ $class }}"   {!! $attributes !!} >{!! $value !!}</textarea>

        <input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}" />

        @include(\'admin::form.help-block\')
    </div>
</div>

<script require="@phpeditor" init="{!! $selector !!}">
    var Editor = CodeMirror.fromTextArea(document.getElementById(id), {
        lineNumbers: true,
        mode: "text/x-php",
        extraKeys: {
            "Tab": function(cm){
                cm.replaceSelection("    " , "end");
            }
        }
    });
    Editor.on("change", function (Editor, changes) {
        let val = Editor.getValue();
        //console.log(val);
        $this.parents(\'.form-field\').find(\'input[name="hidden"]\').val(val);
    });
</script>
```

最后找到文件`app/Admin/bootstrap.php`,如果文件不存在，请更新`dcat-admin`，然后新建该文件,添加下面代码：

```
<?php

use App\\Admin\\Extensions\\Form\\PHPEditor;
use Dcat\\Admin\\Form;

Admin::asset()->alias(\'@phpeditor\', [
    \'js\' => [
        \'/packages/codemirror-5.20.2/lib/codemirror.js\',
        \'/packages/codemirror-5.20.2/addon/edit/matchbrackets.js\',
        \'/packages/codemirror-5.20.2/mode/htmlmixed/htmlmixed.js\',
        \'/packages/codemirror-5.20.2/mode/xml/xml.js\',
        \'/packages/codemirror-5.20.2/mode/javascript/javascript.js\',
        \'/packages/codemirror-5.20.2/mode/css/css.js\',
        \'/packages/codemirror-5.20.2/mode/clike/clike.js\',
        \'/packages/codemirror-5.20.2/mode/php/php.js\',
    ],
    \'css\' => \'/packages/codemirror-5.20.2/lib/codemirror.css\',
]);

Form::extend(\'php\', PHPEditor::class);
```

这样就能在[model-form](model-form.md)中使用PHP编辑器了：

```
$form->php(\'code\');
```

通过这种方式，可以添加任意你想要添加的`form`组件。


## 常用方法

表单组件是`Dcat Admin`中最为复杂的组件，下面列一些在扩展表单组件中可能需要用到的方法


### 处理用户输入的表单值 (prepareInputValue)

通过`prepareInputValue`方法可以处理用户输入的表单值，默认不做任何处理。此方法在`Form`表单的`saving`事件触发之后，表单字段的`saving`方法之前执行

> {tip} 这个功能类似`Laravel model`中的**修改器**。

```php
class PHPEditor extends Field
{
	...
	
	// 把用户输入的表单值转化为 string 格式保存到数据库
	protected function prepareInputValue($value)
	{
		return (string) $value;
	}
}
```

### 处理待显示的字段值 (formatFieldData)

通过`formatFieldData`方法可以处理处理待显示的字段值。此方法在表单字段的`customFormat`方法之前执行

> {tip} 这个功能类似`Laravel model`中的**访问器**。

```php
class PHPEditor extends Field
{
	...
	
	// 把字段值转化为数组格式
	// $data是当前表单的编辑数据，数据格式是 array
	protected function formatFieldData($data)
	{
	    // 获取到当前字段值
		$value = parent::formatFieldData($data);
		
		// 处理字段值
		...
		
		return $value;
	}
}
```

### 获取元素CSS选择器 (getElementClassSelector)

表单组件类实例化后会根据字段名称生成一个`css class`，然后传递到模板中，我们通常可以通过这个`class`获取到当前表单的元素对象

模板
```html
<div class="{{$viewClass[\'form-group\']}}">

    <div class="{{ $viewClass[\'label\'] }} control-label">
        <span>{!! $label !!}</span>
    </div>

    <div class="{{$viewClass[\'field\']}}">

        @include(\'admin::form.error\')

        <input type="hidden" name="{{$name}}"/>

        <select style="width: 100%;" name="{{$name}}" {!! $attributes !!} >
           <option value=""></option>
		   @foreach($options as $select => $option)
			   <option value="{{$select}}" {{ Dcat\\Admin\\Support\\Helper::equal($select, $value) ?\'selected\':\'\' }}>{{$option}}</option>
		   @endforeach
        </select>

        @include(\'admin::form.help-block\')

    </div>
</div>


<script require="..." init="{!! $selector !!}">
    // 这里的 $selector 即是当前字段的 css选择器
    $this.select2($configs);
</script>
```

### JS代码

为了让扩展的表单组件能够兼容`HasMany`、`array`以及`Table`表单，我们必须使用[动态监听元素生成 (init)](https://learnku.com/docs/dcat-admin/2.x/js-component/8087#1dae4a)功能


```html
<div class="{{$viewClass[\'form-group\']}}">
    ...
</div>


<script require="..." init="{!! $selector !!}">
    $this.select2($configs);
</script>
```',
   'order' => 4,
   'created_at' => '2024-06-26 13:56:10',
   'updated_at' => '2024-06-26 13:56:10',
   'slug' => 'field-management',
),
            (object) array(
   'id' => 39,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '数据源',
   'content' => '# 表单数据源

## 模型与数据仓库

数据仓库(`Repository`)是一个可以提供特定接口对数据进行读写操作的类，通过数据仓库的引入，可以让页面的构建不再关心数据读写功能的具体实现。只需要实现特定的操作接口即可轻松切换数据源，关于数据仓库的详细用法请参考文档[数据仓库](https://learnku.com/docs/dcat-admin/1.x/basic-use/8123)。


## 数据来自模型

> 如果你的数据来自`Model`，那么你也可以直接使用`Model`实例，底层会自动把`Model`转化为数据仓库实例。



当数据源支持模型时，只需创建一个非常简单的`Repository`类既可：


```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use App\\Models\\Movie as MovieModel;

class Movie extends EloquentRepository
{
    // 这里定义你的模型类名
    protected $eloquentClass = MovieModel::class;
    
    // 通过这个方法可以指定表单页查询的字段，默认"*"
    public function getFormColumns()
    {
        return [$this->getKeyName(), \'name\', \'title\', \'created_at\'];
    }
}
```
使用：
```php
use App\\Admin\\Repositories\\Movie;

$form = new Form(new Movie);

...
```

## 数据来自外部API

下面以`豆瓣电影`的API为例子，来展示`Repository`的表单数据读写操作相关接口的用法：

```php
<?php
namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\Repository;
use Dcat\\Admin\\Form;

class ComingSoon extends Repository
{
    protected $api = \'https://api.douban.com/v2/movie/coming_soon\';
    
    // 返回你的id字段名称，默认“id”
    protected $keyName = \'_id\';

    // 查询编辑页数据
    // 这个方法需要返回一个数组
    public function edit(Form $form)
    {
        // 获取id
        $id = $form->builder()->getResourceId();

        $data = file_get_contents("http://api.douban.com/v2/movie/subject/$id");

        return json_decode($data, true);
    }
    
    // 这个方法用于在修改数据前查询原记录
    // 如果使用了文件上传表单，当文件发生变更时会根据这个原始记录自动删除旧文件
     // 如果不需要此数据返回空数组即可
    public function updating(Form $form)
    {
        // 获取id
        $id = $form->builder()->getResourceId();
        
        return [];
    }

    // 修改操作
    // 返回一个bool类型的数据
    public function update(Form $form)
    {
        // 获取id
        $id = $form->builder()->getResourceId();

        // 获取要修改的数据
        $attributes = $form->updates();

        // TODO
        // 这里写你的修改逻辑
        
        return true;
    }

    // 这个方法用于在修改数据前查询原始数据
    // 如果使用了文件上传表单，会根据这个数据自动删除文件
    // 如果不需要此数据返回空数组即可
    public function deleting(Form $form)
    {
        $id = $form->builder()->getResourceId();
        
        $id = explode(\',\', $id);

//        $data = file_get_contents("http://api.douban.com/v2/movie/subject/$id");
//
//        return json_decode($data, true);

        return [];
    }

    // 删除数据
    // $deletingData 是由 getDataWhenDeleting 方法返回的数据
    public function destroy(Form $form, $deletingData)
    {
        // 注意这里的id可能是多个
        $id = $form->builder()->getResourceId();
        
        // 当使用批量删除功能时，这里的id是用“,”隔开的字符串
        $id = explode(\',\', $id);

        // TODO
//        var_dump($id, $deletingData);

        return true;
    }

}
```',
   'order' => 5,
   'created_at' => '2024-06-26 13:56:51',
   'updated_at' => '2024-06-26 13:56:51',
   'slug' => 'data-source',
),
            (object) array(
   'id' => 40,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '表单弹窗',
   'content' => '# 表单弹窗


## 数据表单弹窗

通过`Form::dialog`方法可以快速构建一个基于数据表单的表单弹窗，仅需增加数行代码。

> 表单弹窗的实现原理是：通过`create`和`edit`页面获取构建好的表单`HTML`字符，然后使用弹窗插件把这部分`HTML`字符渲染出来。
如果期间需要加载新的`js`脚本，则会等待脚本加载完毕再执行表单初始化`js`代码。

### 简单示例

#### 开启表单弹窗
```php
<?php use App\\Http\\Controllers\\Controller;
use Dcat\\Admin\\Form;
use Dcat\\Admin\\Layout\\Content;

class ModalFormController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header(\'Modal Form\')
            ->body($this->build());
    }

    protected function build()
    {
        Form::dialog(\'新增角色\')
            ->click(\'.create-form\') // 绑定点击按钮
            ->url(\'auth/roles/create\') // 表单页面链接，此参数会被按钮中的 “data-url” 属性替换。。
            ->width(\'700px\') // 指定弹窗宽度，可填写百分比，默认 720px
            ->height(\'650px\') // 指定弹窗高度，可填写百分比，默认 690px
            ->success(\'Dcat.reload()\'); // 新增成功后刷新页面

        Form::dialog(\'编辑角色\')
            ->click(\'.edit-form\')
            ->success(\'Dcat.reload()\'); // 编辑成功后刷新页面

        // 当需要在同个“class”的按钮中绑定不同的链接时，把链接放到按钮的“data-url”属性中即可
        $editPage = admin_base_path(\'auth/roles/1/edit\');

        return "
<div style="padding:30px 0">
    <span class="btn btn-success create-form"> 新增表单弹窗 </span>   
    <span class="btn btn-blue edit-form" data-url="{$editPage}"> 编辑表单弹窗 </span>
</div>
";
    }

}
```

#### 表单构建以及保存数据
```php
<?php use App\\Admin\\Repositories\\Role;
use Dcat\\Admin\\Controllers\\HasResourceActions;
use Dcat\\Admin\\Form;
use Dcat\\Admin\\Layout\\Content;
use Dcat\\Admin\\Admin;

class RoleController
{
    use HasResourceActions;
    
    /**
         * Edit interface.
         *
         * @param mixed   $id
         * @param Content $content
         *
         * @return Content
         */
        public function edit($id, Content $content)
        {
            return $content
                ->header(trans(\'admin.roles\'))
                ->description(trans(\'admin.edit\'))
                ->body($this->form()->edit($id));
        }
    
        /**
         * Create interface.
         *
         * @param Content $content
         *
         * @return Content
         */
        public function create(Content $content)
        {
            return $content
                ->header(trans(\'admin.roles\'))
                ->description(trans(\'admin.create\'))
                ->body($this->form());
        }
    
    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Role(), function (Form $form) {
            $form->display(\'id\', \'ID\');
            
            $form->text(\'slug\', trans(\'admin.slug\'))->required()->prepareForSave(function ($value) {
                return $value;
            });
            $form->text(\'name\', trans(\'admin.name\'))->required();
    
            $form->tree(\'permissions\')
                ->nodes(function () {
                    $permissionModel = config(\'admin.database.permissions_model\');
                    $permissionModel = new $permissionModel;
    
                    return $permissionModel->allNodes();
                })
                ->customFormat(function ($v) {
                    if (!$v) return [];
    
                    return array_column($v, \'id\');
                });
    
            $form->display(\'created_at\', trans(\'admin.created_at\'));
            $form->display(\'updated_at\', trans(\'admin.updated_at\'));
        });
    }
}
```

#### 效果

![](http://docs.oneself.icu:10010/storage/markdown/images/fcec9da4de95874894667751d7799b73667badf664018.png)

### 功能接口

表单弹窗必须绑定一个可点击的页面元素，通过点击这个元素弹出弹窗。

#### 设置弹窗标题

```php
$modal = Form::dialog(\'标题\');
```

#### 绑定点击按钮
通过`ModalForm::click`方法可以绑定点击按钮，绑定后当点击该按钮时会弹出弹窗

```php
Form::dialog(\'标题\')
    ->click(\'#click-button\');
```

#### 设置URL

如果是创建类型的表单，则可以通过以下方法设置获取表单模板的url
```php
Form::dialog(\'新增角色\')
    ->click(\'.create-form\')
    ->url(\'auth/roles/create\');
```

如果是编辑类型的表单，则需要多个url，因为点击每个按钮弹出弹窗的表单内容是不同的，所以每个按钮的链接也不同。

这个时候通过`ModalForm::url`方法设置的一个链接已经无法满足需求了，因而需要在点击按钮的`data-url`属性上保存url：
```php
Form::dialog(\'编辑角色\')
    ->click(\'.edit-form\')
    ->success(\'Dcat.reload()\'); // 编辑成功后刷新页面

    // 当需要在同个“class”的按钮中绑定不同的链接时，把链接放到按钮的“data-url”属性中即可
    $editPage1 = admin_base_path(\'auth/roles/1/edit\');
    $editPage2 = admin_base_path(\'auth/roles/2/edit\');
return "
<div style="padding:30px 0">
    <span class="btn btn-blue edit-form" data-url="{$editPage1}"> 编辑表单弹窗1 </span>
    <span class="btn btn-blue edit-form" data-url="{$editPage2}"> 编辑表单弹窗2 </span>
</div>
";
```

#### 表单保存成功回调

通过`success`方法可以设置表单保存成功之后执行的`js`代码，在这段`js`代码作用域内有一个`response`变量，通过这个变量可以获取服务端返回的`json`数据。

```php
Form::dialog(\'编辑角色\')
   ->click(\'.edit-form\')
   ->success(
       click(\'.edit-form\')
   ->error(
       click(\'.edit-form\')
   ->saved(
       click(\'.edit-form\')
    ->forceRefresh();
```

#### 设置弹窗宽高

```php
Form::dialog(\'编辑角色\')
    ->click(\'.edit-form\')
    ->dimensions(\'50%\', \'400px\');
    
// 或
Form::dialog(\'编辑角色\')
    ->click(\'.edit-form\')
    ->width(\'50%\')
    ->height(\'400px\');
```


## 工具表单弹窗

数据表单的弹窗功能通常需要结合一个资源控制器去实现，相对会比较复杂一点，所以系统也内置了另外一种更简便的表单弹窗功能，使用方法请参考[工具表单-弹窗](https://learnku.com/docs/dcat-admin/1.x/tools-form/8125#modal)。

![](http://docs.oneself.icu:10010/storage/markdown/images/4bfa244ec40c9ed0563d3d760ecec7f7667bae031a299.png)',
   'order' => 6,
   'created_at' => '2024-06-26 13:57:48',
   'updated_at' => '2024-06-26 13:58:29',
   'slug' => 'form-popup',
),
            (object) array(
   'id' => 41,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '关联关系',
   'content' => '# 表单关联关系


### 一对一

`users`表和`profiles`表通过`profiles.user_id`字段生成一对一关联

```sql
CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
`updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `profiles` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
`updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

对应的数据模分别为:

```php
<?php

namespace App\\Admin\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class User extends Model
{
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
```
对应的数据仓库为：
```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use User as UserModel;

class User extends \\Dcat\\Admin\\Repositories\\EloquentRepository
{
    protected $eloquentClass = UserModel::class;
}
```


通过下面的代码可以关联在一个form里面:
> {tip} 实例化数据仓库时需要传入关联模型定义的关联名称，相当于主动使用`Eloquent\\Model::with`方法。

```php
use App\\Admin\\Repositories\\User;

// 注意这里实例化数据仓库`User`时必须传入"profile"，否则将无法关联"profiles"表数据
$form = Form::make(User::with(\'profile\'), function (Form $form) {
    $form->display(\'id\');
    
    $form->text(\'name\');
    $form->text(\'email\');
    
    $form->text(\'profile.age\');
    $form->text(\'profile.gender\');
    
    $form->datetime(\'created_at\');
    $form->datetime(\'updated_at\');
});
```

如果你不想使用数据仓库，也可以直接使用模型
```php
use App\\Admin\\Models\\User;

// 注意这里是直接使用模型，没有使用数据仓库
$form = Form::make(User::with(\'profile\'), function (Form $form) {
    $form->display(\'id\');
    
    ...
});
```


### 一对多

一对多的使用请参考文档[表单字段的使用-一对多](https://learnku.com/docs/dcat-admin/1.x/use-of-fields/8107#onemany)


### 多对多


下面以项目内置的`角色管理`模块的**角色绑定权限**功能为例来演示多对多关联模型的用法

模型`Role`
```php
<?php

namespace Dcat\\Admin\\Models;

use Dcat\\Admin\\Traits\\HasDateTimeFormatter;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany;

class Role extends Model
{
    use HasDateTimeFormatter;

    /**
     * 定义你的关联模型.
     *
     * @return BelongsToMany
     */
    public function permissions(): BelongsToMany
    {
        $pivotTable = \'admin_role_permissions\'; // 中间表

        $relatedModel = Permission::class; // 关联模型类名

        return $this->belongsToMany($relatedModel, $pivotTable, \'role_id\', \'permission_id\');
    }
}
```

```php
use Dcat\\Admin\\Models\\Permission;

// 实例化数据仓库时传入 permissions，则会自动关联关联模型的数据
// 这里传入 permissions 关联权限模型的数据
$repository = Role::with([\'permissions\']);

return Form::make($repository, function (Form $form) {
    $form->display(\'id\', \'ID\');

    $form->text(\'slug\', trans(\'admin.slug\'))->required();
    $form->text(\'name\', trans(\'admin.name\'))->required();
    
    // 这里的数据会自动保存到关联模型中
    $form->tree(\'permissions\')
        ->nodes(function () {
            return (new Permission())->allNodes();
        })
        ->customFormat(function ($v) {
            if (!$v) return [];

            // 这一步非常重要，需要把数据库中查出来的二维数组转化成一维数组
            return array_column($v, \'id\');
        });

    ...
});
```

如果你不想使用数据仓库，也可以直接使用模型
```php
use Dcat\\Admin\\Models\\Role;

// 注意这里是直接使用模型，没有使用数据仓库
$form = Form::make(Role::with(\'permissions\'), function (Form $form) {
    $form->display(\'id\');
    
    ...
});
```

最终效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/1476ce7c7f24af0d3dbc03b6c7785983667bae3391833.png)


### 关联模型名称为驼峰风格

如果你的关联模型名称的命名是**驼峰**风格，那么使用的时候需要转化为**下划线**风格命名


例如
```php
class User extend Model
{
    public function userProfile()
    {
        return ...;
    }
}
```

使用
```php
return Form::make(User::with([\'userProfile\']), function (Form $form) {

    ...
    
    // 注意这里必须使用下划线风格命名，否则将无法显示编辑数据
    $form->text(\'user_profile.postcode\');
    $form->text(\'user_profile.address\');
    
});
```',
   'order' => 7,
   'created_at' => '2024-06-26 13:59:27',
   'updated_at' => '2024-06-26 13:59:27',
   'slug' => 'relationship',
),
            (object) array(
   'id' => 42,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => 'JSON表单',
   'content' => '# JSON格式字段处理

`dcat-admin`的表单提供了下面几个组件来处理`JSON`格式的字段，方便用来处理`JSON`格式的对象、一维数组、二维数组等对象。


## 键值对象 (keyValue)

![](http://docs.oneself.icu:10010/storage/markdown/images/b2acc65fcca3700fd6db418c2e11edf2667bae9660114.png)

如果你的字段存储的是不固定`键`的`{"field":"value"}`格式，可以用`keyValue`组件:

```php
$form->keyValue(\'column_name\');

// 设置校验规则
$form->keyValue(\'column_name\')->rules(\'required|min:5\');
```

自定义键名以及键值标题翻译

```php
$form->keyValue(...)->setKeyLabel(\'键名\')->setValueLabel(\'键值\');
```

也可以自定义默认结构，以便于新建数据时候自动带入 keyValue 数据的模板
```php
$form->keyValue(\'price\')->default([\'cny\' => \'\', \'usd\' => \'\'])->setKeyLabel(\'币种\')->setValueLabel(\'价格\');
```
![](http://docs.oneself.icu:10010/storage/markdown/images/f015f31ffd66be957a3ad969f4cee826667baea5a593c.png)

## 固定键值对象 (embeds)

![](http://docs.oneself.icu:10010/storage/markdown/images/acfa8e74bccbf62248409ed19b2c0949667baeb05b895.png)

用于处理`mysql`的`JSON`类型字段数据或者`mongodb`的`object`类型数据，也可以将多个`field`的数据值以`JSON`字符串的形式存储在`mysql`的字符串类型字段中

适用于有固定键值的`JSON`类型字段

```php
$form->embeds(\'column_name\', function ($form) {

    $form->text(\'key1\')->required();
    $form->email(\'key2\')->required();
    $form->datetime(\'key3\');

    $form->dateRange(\'key4\', \'key5\', \'范围\')->rules(\'required\');
})->saving(function ($v) {
    // 转化为json格式存储
    return json_encode($v);
});

// 自定义标题
$form->embeds(\'column_name\', \'字段标题\', function ($form) {
    ...
});
```

回调函数里面构建表单元素的方法调用和外面是一样的。

## 一维数组 (list)

![](http://docs.oneself.icu:10010/storage/markdown/images/0e28fb87dc638bb67e6e8db696eccd7f667baec074d2d.png)

如果你的字段是用来存储`["foo", "Bar"]`格式的一维数组, 可以使用`list`组件:

```php
$form->list(\'column_name\');

// 设置校验规则
$form->list(\'column_name\')->rules(\'required|min:5\');

// 设置最大和最小元素个数
$form->list(\'column_name\')->max(10)->min(5);
```

## 二维数组 (table)

![](http://docs.oneself.icu:10010/storage/markdown/images/f52cdedffdd6044c8491d89c87551a77667baecc64f6d.png)

如果某一个字段存储的是`json`格式的二维数组，可以使用`table`表单组件来实现快速的编辑：

```php
$form->table(\'column_name\', function ($table) {
    $table->text(\'key\');
    $table->text(\'value\');
    $table->text(\'desc\');
})->saving(function ($v) {
    return json_encode($v);
});
```

这个组件类似于`hasMany`组件，不过是用来处理单个字段的情况，适用于简单的二维数据。

## 二维数组 (array)


![](http://docs.oneself.icu:10010/storage/markdown/images/d649255149f414a4acdfd48d8ceb55f9667baed60d29c.png)

如果某一个字段存储的是`json`格式的二维数组，并且字段比较多，可以使用`array`表单组件来实现快速的编辑：

```php
$form->array(\'column_name\', function ($table) {
    $table->text(\'key\');
    $table->text(\'value\');
    $table->textarea(\'desc\');
})->saveAsJson();
```',
   'order' => 8,
   'created_at' => '2024-06-26 14:02:01',
   'updated_at' => '2024-06-26 14:02:01',
   'slug' => 'json-form',
),
            (object) array(
   'id' => 43,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '分步表单',
   'content' => '# 分步表单

## 安装

前往[https://github.com/dcat-admin/form-step](https://github.com/dcat-admin/form-step)下载分步表单扩展，然后安装并启用。

> 扩展安装请参考文档[扩展基本使用](https://learnku.com/docs/dcat-admin/2.x/extended-basic-usage/9691)章节。

## 简单示例

```php
protected function form()
{
    return Form::make(new Model(), function (Form $form) {
        $form->title(\'分步表单\');
        $form->action(\'step\');
        $form->disableListButton();
    
        $form->multipleSteps()
            ->remember() // 记住表单步骤，默认不开启
            ->width(\'950px\')
            ->add(\'基本信息\', function ($step) {
                $info = \'<i class="fa fa-exclamation-circle"></i> 表单字段支持前端验证和后端验证混用，前端验证支持H5表单验证以及自定义验证。\';
    
                $step->html(Alert::make($info)->info());
    
                $step->text(\'name\', \'姓名\')->required()->maxLength(20);
                // h5 表单验证
                $step->text(\'age\', \'年龄\')
                    ->required()
                    ->type(\'number\')
                    ->attribute(\'max\', 150)
                    ->help(\'前端验证\');
    
                $step->radio(\'sex\', \'性别\')->options([\'未知\', \'男\', \'女\'])->default(0);
    
                // 后端验证
                $step->text(\'birthplace\', \'籍贯\')
                    ->rules(\'required\')
                    ->help(\'演示后端字段验证\');
    
                $step->url(\'homepage\', \'个人主页\');
    
                $step->textarea(\'description\', \'简介\');
    
            })
            ->add(\'兴趣爱好\', function ($step) {
                $step->tags(\'hobbies\', \'爱好\')
                    ->options([\'唱\', \'跳\', \'RAP\', \'踢足球\'])
                    ->required();
    
                $step->text(\'books\', \'书籍\');
                $step->text(\'music\', \'音乐\');
    
                // 事件
                $step->shown(function () {
                    return <<<JS
    Dcat.info(\'兴趣爱好\');
    console.log(\'兴趣爱好\', args);
    JS;
                });
    
            })
            ->add(\'地址\', function ($step) {
                $step->text(\'address\', \'街道地址\');
                $step->text(\'post_code\', \'邮政编码\');
                $step->tel(\'tel\', \' 联系电话\');
            })
            ->done(function () use ($form) {
                $resource = $form->getResource(0);
    
                $data = [
                    \'title\'       => \'操作成功\',
                    \'description\' => \'恭喜您成为第10086位用户\',
                    \'createUrl\'   => $resource,
                    \'backUrl\'     => $resource,
                ];
    
                return view(\'admin::form.done-step\', $data);
            });
    });
}
```



## 运行逻辑

分步表单的使用很简单，运行逻辑也与普通表单没有太大区别，下面简单说说分步表单的运行逻辑。

> {tip} 分步表单没有 `update` 的概念。

#### 参数验证
当用户点击 `下一步` 时，会向后端发起请求验证参数是否正确，如果参数不符合要求则显示错误信息，验证通过才会进入下一个步骤。

#### 表单提交
当进行到最后一步时，会对所有步骤的表单参数一起提交到后端并进行验证，如果参数不符合要求则显示错误信息，验证通过则保存表单数据，保存的方法与普通表单完全一致。

> {tip} 最后保存表单的方法是 `Form::store`。

#### 完成页面

表单保存完成之后会显示完成页面，此步骤无法忽略。


## 编辑表单

分步表单默认是没有编辑功能的，用户输入了长步骤的表单之后不需要再分步编辑，因此如果需要对分步表单进行编辑，可以参考以下方式

```php
protected function form()
{
    return Form::make(new MyRepository(), function (Form $form) {
        // 判断是否是编辑页面
        if ($form->isEditing()) {
            $form->text(\'age\', \'年龄\')
                 ->required()
                 ->type(\'number\')
                 ->attribute(\'max\', 150)
                 ->help(\'前端验证\')
        
            ...
            
            return;
        }
    
    
        $form->multipleSteps()
            ->remember()
            ->width(\'950px\')
            ->add(\'基本信息\', function (Form\\StepForm $step) {
                $info = \'<i class="fa fa-exclamation-circle"></i> 表单字段支持前端验证和后端验证混用，前端验证支持H5表单验证以及自定义验证。\';
    
                $step->html(Alert::make($info)->info());
    
                $step->text(\'name\', \'姓名\')->required()->maxLength(20);
                // h5 表单验证
                $step->text(\'age\', \'年龄\')
                    ->required()
                    ->type(\'number\')
                    ->attribute(\'max\', 150)
                    ->help(\'前端验证\');
    
                $step->radio(\'sex\', \'性别\')->options([\'未知\', \'男\', \'女\'])->default(0);
    
                ...
    
            })
            ->add(\'兴趣爱好\', function (Form\\StepForm $step) {
                ...
            })
            ->done(function () use ($form) {
                ...
            });
    });
}
```

## 功能接口

### 设置容器最大宽度

默认 `1000px`。

> {tip} 此方法只针对大屏幕，手机端页面会自动调节大小。

```php
$form->multipleSteps()->width(\'900px\');
```

### 记住表单数据

开启此功能之后，当用户点击 `下一步` 按钮并且参数验证通过后，会把表单数据保存在 `session` 中，直到整个分步表单保存完毕之后才会销毁。

> {tip} 此功能默认不开启。

```php
// 开启
$form->multipleSteps()->remember();

// 关闭
$form->multipleSteps()->remember(false);
```

### 设置容器间距

默认值 `30px 18px 30px`。

```php
$form->multipleSteps()->padding(\'30px 18px 30px\');
```

### 监听页面离开事件

监听所有步骤表单页面离开事件，可添加多个。

```php
$form->multipleSteps()->leaving(<<<JS
     // 获取当前页面的步骤索引
     var index = args.index; 
                 
     Dcat.info("你将要离开第 " + (index + 1) + " 个页面");
     
     // args变量是一个js对象，包含当前事件对象、当前步骤选项、表单对象和表单值等字段。
     console.log("leaving", args);
     
     // 获取当前事件对象
     var evt = args.event;
     // 获取步骤表单标题tap对象
     var tab = args.tab;
     // 获取动向是前往上一步还是下一步页面："forward"、"backward"
     var direction = args.direction;
     // 获取当前步骤的表单JQ对象
     var $form = args.form;
     // 获取当前步骤页的表单值
     var formArray = args.formArray;
     
     // 获取指定步骤的表单JQ对象
     var $firstForm = args.getForm(0);
     // 获取指定步骤的表单值
     var firstFormArray = args.getFormArray(0);
     
     // 停止离开当前页面
     return false;
JS    
)->leaving(...);
```

### 监听页面显示事件

监听所有步骤表单页面显示事件，可添加多个。

```php
$form->multipleSteps()->shown(<<<JS
     // 获取当前页面的步骤索引
     var index = args.index; 
                 
     Dcat.info("当前显示的是第 " + (index + 1) + " 个页面");
     
     // args变量的值与“leaving”事件的值相同。
     console.log("shown", args);
JS    
)->shown(...);
```

### 增加步骤表单

步骤表单支持所有表单字段。

```php
use Dcat\\Admin\\Form;

$form->multipleSteps()->add(\'标题\', function (Form\\StepForm $step) {

    $step->text(\'username\')->rules(\'required\');
    
    ...
});
```

#### 监听步骤页面离开事件

监听当前步骤页面离开事件，支持监听多次。

```php
use Dcat\\Admin\\Form;

$form->multipleSteps()->add(\'基本信息\', function (Form\\StepForm $step) {
    ...
    
    $step->leaving(<<<JS
    
    Dcat.info("你将要离开 基本信息 页面");
    
    // args变量是一个js对象，包含当前事件对象、当前步骤选项、表单对象和表单值等字段。
    console.log("离开 基本信息", args);
    
    // 获取当前事件对象
    var evt = args.event;
    // 获取当前页面的步骤索引
    var index = args.index;
    // 获取步骤表单标题tap对象
    var tab = args.tab;
    // 获取动向是前往上一步还是下一步页面："forward"、"backward"
    var direction = args.direction;
    // 获取当前步骤的表单JQ对象
    var $form = args.form;
    // 获取当前步骤页的表单值
    var formArray = args.formArray;
    
    // 获取指定步骤的表单JQ对象
    var $firstForm = args.getForm(0);
    // 获取指定步骤的表单值
    var firstFormArray = args.getFormArray(0);
    
    // 停止离开当前页面
    return false;
JS    
    );
    
    // 监听多次
    $step->leaving(...);
});
```

#### 监听步骤页面显示事件

监听当前步骤页面显示事件，支持监听多次。

```php
use Dcat\\Admin\\Form;

$form->multipleSteps()->add(\'基本信息\', function (Form\\StepForm $step) {
    ...
    
    $step->shown(<<<JS
    
    Dcat.info("当前步骤是 基本信息");
    
    // args变量的值与“leaving”事件的值相同。
    console.log("显示 基本信息", args);
JS    
    );
    
    // 监听多次
    $step->shown(...);
});
```

### 设置完成页面

当所有步骤都完成之后会显示完成页面，系统提供一个默认的完成页面，开发者也可以通过以下方法自定义完成页面要显示的内容。

```php
use Dcat\\Admin\\Form;

$form->multipleSteps()->done(function (Form\\DoneStep $done) {
    
    // 获取新增ID
    // 由 Repository::store 返回的值
    $newId = $done->getNewId();
    
    // 返回你要显示的内容，可以使一个视图也可以是一个字符串。
    return view(...);
});
```',
   'order' => 9,
   'created_at' => '2024-06-26 14:04:31',
   'updated_at' => '2024-06-26 14:04:31',
   'slug' => 'step-by-step-form',
),
            (object) array(
   'id' => 44,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '表单验证',
   'content' => '# 表单验证

### rule

`model-form`使用laravel的验证规则来验证表单提交的数据：

```php
$form->text(\'title\')->rules(\'required|min:3\');

// 复杂的验证规则可以在回调里面实现
$form->text(\'title\')->rules(function (Form $form) {
    
    // 如果不是编辑状态，则添加字段唯一验证
    if (!$id = $form->model()->id) {
        return \'unique:users,email_address\';
    }
    
});
```

也可以给验证规则自定义错误提示消息：

```php
$form->text(\'code\')->rules(\'required|regex:/^\\d+$/|min:10\', [
    \'regex\' => \'code必须全部为数字\',
    \'min\'   => \'code不能少于10个字符\',
]);
```

如果要允许字段为空，首先要在数据库的表里面对该字段设置为`NULL`，然后

```php
$form->text(\'title\')->rules(\'nullable\');
```

更多规则请参考[Validation](https://laravel.com/docs/5.5/validation)。

### creationRules

此方法用法和`Form\\Field::rule`用法完全一致，不同的是此方法只有在新增数据时才有效。

> {tip} 如果调用了`creationRules`方法，则`rule`方法设置的验证规则将会被忽略。

### updateRules

此方法用法和`Form\\Field::rule`用法完全一致，不同的是此方法只有在更新数据时才有效。

> {tip} 如果调用了`updateRules`方法，则`rule`方法设置的验证规则将会被忽略。


## responseValidationMessages

通过`Form::responseValidationMessages`方法可以返回自定义验证错误信息，并中断后续逻辑，用法如下：

```php
// 编辑提交时是“PUT”方法
if (request()->getMethod() == \'PUT\') {
    if (...) { // 你的验证逻辑
        $form->responseValidationMessages(\'title\', \'title格式错误\');
        
        // 如有多个错误信息，第二个参数可以传数组
        $form->responseValidationMessages(\'content\', [\'content格式错误\', \'content不能为空\']);
    }
}

$form->text(\'title\');
$form->text(\'content\');
```

也可以在`submitted`事件中使用这个方法
```php
$form->submitted(function ($form) {
    if (...) { // 你的验证逻辑
        $form->responseValidationMessages(\'title\', \'title格式错误\');
        
        // 如有多个错误信息，第二个参数可以传数组
        $form->responseValidationMessages(\'content\', [\'content格式错误\', \'content不能为空\']);
    }
});
```

## 前端验证

系统继承了<a href="https://github.com/1000hz/bootstrap-validator" target="_blank">bootstrap-validator</a>进行前端表单验证，支持H5表单类型的验证。

> {tip} 不支持H5的浏览器也可以使用前端验证，系统已经做好了兼容。大部分表单都支持前端和后端验证，两者可以同时工作不冲突，少部分表单前端验证无效。

### H5验证

#### required

必填
```php
$form->text(\'title\')->required();
```

#### number

只允许输入数字
```php
$form->text(\'age\')->type(\'number\');
```

限制范围
```php
// 只允许输入 10-60 范围内的数字
$form->text(\'age\')
    ->type(\'number\')
    ->attribute(\'min\', 10)
    ->attribute(\'max\', 60);
```

#### email

邮箱
```php
$form->email(\'email\');
```

#### url

链接
```php
$form->text(\'website\')->type(\'url\');
```

### 其它

#### minLength

限制字符最小长度

```php
$form->text(\'title\')->minLength(20);

// 设置错误信息
$form->text(\'title\')->minLength(20, \'最少输入20个字符\');
```

#### maxLength

限制字符最大长度
```php
$form->text(\'title\')->maxLength(50);

// 设置错误信息
$form->text(\'title\')->maxLength(50, \'不能超过50个字符\');
```

#### same

限制当前字段值必须与给定字段的值相等，常用于密码确认

```php
$form->password(\'password\');

$form->password(\'password_confirm\')->same(\'password\');

// 设置错误信息
$form->password(\'password_confirm\')->same(\'password\', \'两次密码输入不一致\');
```

### 自定义

开发者可以通过以下方法自定义前端验证规则。



在 `app/Admin/bootstrap.php` 中添加以下代码。
```php
use Dcat\\Admin\\Form\\Field;

Field\\Text::macro(\'len\', function (int $length, ?string $error = null) {
    // 前端验证逻辑扩展
    Admin::script(
                <<<\'JS\'
Dcat.validator.extend(\'len\', function ($el) {
    return $el.val().length != $el.attr(\'data-len\');
});
JS
        );

        // 同时添加后端验证逻辑，这个可以看需要
        $this->rules(\'size:\'.$length);

        return $this->attribute([
            \'data-len\'       => $length,
            \'data-len-error\' => str_replace(
                [\':attribute\', \':len\'],
                [$this->label, $length],
                $error ?: "只能输入:len个字符"
            ),
        ]);
});
```

使用

```php
$form->text(\'name\')->len(10);
```',
   'order' => 10,
   'created_at' => '2024-06-26 14:05:01',
   'updated_at' => '2024-06-26 14:05:01',
   'slug' => 'form-validation',
),
            (object) array(
   'id' => 45,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '工具表单',
   'content' => '# 工具表单

工具表单(`Dcat\\Admin\\Widgets\\Form`)用来构建表单和处理提交数据，可以很方便的独立处理数据，而不需要额外注册路由。


### 基本使用
用命令`admin:form`来生成表单类文件：

```bash
php artisan admin:form Setting
```
将会生成表单文件`app/Admin/Forms/Setting.php`

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Widgets\\Form;
use Symfony\\Component\\HttpFoundation\\Response;

class Setting extends Form
{
    // 处理表单提交请求
    public function handle(array $input)
    {
        // dump($input);

        // return $this->response()->error(\'Your error message.\');

        return $this->response()->success(\'Processed successfully.\')->refresh();
    }

    // 构建表单
    public function form()
    {
        // Since v1.6.5 弹出确认弹窗 
        $this->confirm(\'您确定要提交表单吗\', \'content\');
        
        $this->text(\'name\')->required();
        $this->email(\'email\')->rules(\'email\');
    }

    /**
     * 返回表单数据，如不需要可以删除此方法
     *
     * @return array
     */
    public function default()
    {
        return [
            \'name\'  => \'John Doe\',
            \'email\' => \'John.Doe@gmail.com\',
        ];
    }
}
```
在上面的表单类里面，在`form`方法中构建表单项，使用方法和[数据表单](https://learnku.com/docs/dcat-admin/1.x/basic-use/8089)一致，`default`方法用来给这个表单项设置默认数据。

在页面中填入数据提交表单之后，请求会进入到`handle`方法中，在这里可以加入你的数据处理逻辑，处理完成之后可以通过`success`或`error`方法响应数据到前端：
```php
    public function handle(array $input)
    {
        // $input是你接收到的表单数据
        // 在这里可以写你的处理逻辑


        // 第一个参数是响应的成功信息，第二个参数是要跳转的路由
        return $this->response()->success(\'Processed successfully.\')->refresh();
    }
```

然后按照下面的方法将上面的表单放到你的页面中：

```php
<?php

use App\\Admin\\Forms\\Setting;
use App\\Http\\Controllers\\Controller;
use Dcat\\Admin\\Widgets\\Card;
use Dcat\\Admin\\Layout\\Content;

class UserController extends Controller
{
    public function setting(Content $content)
    {
        return $content
            ->title(\'网站设置\')
            ->body(new Card(new Setting()));
    }
}
```

### 弹出确认弹窗

第二个参数可忽略

```php
$this->confirm(\'title\', \'content\');
```


### 响应方法
参考[动作以及表单响应](https://learnku.com/docs/dcat-admin/2.x/action-and-form-response/9690)章节



### 自定义表单保存的后续行为


```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Widgets\\Form;
use Symfony\\Component\\HttpFoundation\\Response;

class Setting extends Form
{
    ...
    
    /**
 	 * 设置表单保存成功后执行的JS
 	 * 
	 * @return string|void
	 */
	protected function savedScript()
	{
	    return <<<JS
		// data 为接口返回数据
		if (! data.status) {
			Dcat.error(data.message);

			return false;
		}

		Dcat.success(data.message);

		if (data.redirect) {
			Dcat.reload(data.redirect)
		}

		// 中止后续逻辑（默认逻辑）
		return false;
JS;
	}

	/**
	 * 设置表单保存失败后执行的JS
	 * 
	 * @return string|void
	 */
	protected function errorScript()
	{
		return <<<JS
		var errorData = JSON.parse(response.responseText);
		
		if (errorData) {
			Dcat.error(errorData.message);
		} else {
			console.log(\'提交出错\', response.responseText);
		}
		
		// 终止后续逻辑执行（默认逻辑）
		return false;
JS;
	}
}
```


<a name="layout"></a>
### 布局


`column`多列布局
```php
<?php

use Dcat\\Admin\\Widgets\\Form;

class Setting extends Form
{
    public function form()
    {
        $this->column(6, function () {
            $this->text(\'text1\');
            
            ...
        });
        
        $this->column(6, function () {
            $this->text(\'text2\');
            
            ...
        });
    }    
}
```

`tab`选项卡布局
```php
<?php

use Dcat\\Admin\\Widgets\\Form;

class Setting extends Form
{
    public function form()
    {
        $this->tab(\'选项卡1\', function () {
            $this->text(\'text1\');
            
            ...
        });
        
        $this->tab(\'选项卡2\', function () {
            $this->text(\'text2\');
            
            ...
        });
    }    
}
```

`row`多行布局
```php
public function form()
{
    $this->row(function ($row) {
        $row->width(3)->text(\'text1\');
        
        ...
    });
    
    $this->row(function ($row) {
        $row->width(3)->text(\'text2\');
        
        ...
    });
} 
```


<a name="modal"></a>
### 在弹窗中显示

> Since `v1.7.0` 

#### 基本用法

使用命令生成工具表单`php artisan admin:form ResetPassword`，然后修改表单文件如下

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Widgets\\Form;

class ResetPassword extends Form
{
    // 处理请求
    public function handle(array $input)
    {
        $password = $input[\'password\'] ?? null;

        // 逻辑操作

        return $this->response()->success(\'密码修改成功\');
    }

    public function form()
    {
        $this->password(\'password\')->required();
        // 密码确认表单
        $this->password(\'password_confirm\')->same(\'password\');
    }

    // 返回表单数据，如不需要可以删除此方法
    public function default()
    {
        return [
            \'password\'         => \'\',
            \'password_confirm\' => \'\',
        ];
    }
}
```

使用

```php
use App\\Admin\\Forms\\ResetPassword;
use Dcat\\Admin\\Widgets\\Modal;

$modal = Modal::make()
	->lg()
	->title(\'修改密码\')
	->body(ResetPassword::make())
	->button(\'修改密码\');
```

#### 异步加载

只需要让`Form`表单类实现`Dcat\\Admin\\Contracts\\LazyRenderable`接口即可支持异步渲染功能，修改上面创建的工具表单类如下

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Widgets\\Form;
use Dcat\\Admin\\Traits\\LazyWidget;
use Dcat\\Admin\\Contracts\\LazyRenderable;

class ResetPassword extends Form implements LazyRenderable
{
    use LazyWidget; 
    
    // 处理请求
	public function handle(array $input)
	{
	    // 获取外部传递参数
	    $id = $this->payload[\'id\'] ?? null;
	    
		$password = $input[\'password\'] ?? null;

		// 逻辑操作

		return $this->response()->success(\'密码修改成功\');
	}

	public function form()
	{
	    // 获取外部传递参数
		$id = $this->payload[\'id\'] ?? null;
	    
		$this->password(\'password\')->required();
		// 密码确认表单
		$this->password(\'password_confirm\')->same(\'password\');
	}

	// 返回表单数据，如不需要可以删除此方法
	public function default()
	{
	    // 获取外部传递参数
		$id = $this->payload[\'id\'] ?? null;
	    
		return [
			\'password\'         => \'\',
			\'password_confirm\' => \'\',
		];
	}
}
```

使用代码与上面基本一致，并且我们可以用`payload`方法往表单里面传递自定义参数

```php
use App\\Admin\\Forms\\ResetPassword;
use Dcat\\Admin\\Widgets\\Modal;

$modal = Modal::make()
	->lg()
	->title(\'修改密码\')
	->body(ResetPassword::make()->payload([\'id\' => \'...\'])) // 传递自定义参数
	->button(\'修改密码\');
```



#### 表格行操作弹窗


下面通过一个数据表格修改密码的行操作功能来展示弹窗结合工具表单的用法：


使用命令生成工具表单`php artisan admin:form ResetPassword`，然后修改表单文件如下

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Models\\Administrator;
use Dcat\\Admin\\Traits\\LazyWidget;
use Dcat\\Admin\\Widgets\\Form;
use Dcat\\Admin\\Contracts\\LazyRenderable;

class ResetPassword extends Form implements LazyRenderable
{
    use LazyWidget; // 使用异步加载功能
    
    // 处理请求
    public function handle(array $input)
    {
        // 获取外部传递参数
        $id = $this->payload[\'id\'] ?? null;
        
        // 表单参数
        $password = $input[\'password\'] ?? null;

        if (! $id) {
            return $this->response()->error(\'参数错误\');
        }

        $user = Administrator::query()->find($id);

        if (! $user) {
            return $this->response()->error(\'用户不存在\');
        }

        $user->update([\'password\' => bcrypt($password)]);

        return $this->response()->success(\'密码修改成功\');
    }

    public function form()
    {
        // 获取外部传递参数
		//$id = $this->payload[\'id\'] ?? null;
        
        $this->password(\'password\')->required();
        // 密码确认表单
        $this->password(\'password_confirm\')->same(\'password\');
    }

    // 返回表单数据，如不需要可以删除此方法
    public function default()
    {
        return [
            \'password\'         => \'\',
            \'password_confirm\' => \'\',
        ];
    }
}
```

然后运行`php artisan admin:action`命令，选择选项`2`，生成数据表格行操作类，并修改如下：

```php
<?php

namespace App\\Admin\\Actions\\Grid;

use App\\Admin\\Forms\\ResetPassword as ResetPasswordForm;
use Dcat\\Admin\\Widgets\\Modal;
use Dcat\\Admin\\Grid\\RowAction;

class ResetPassword extends RowAction
{
    protected $title = \'修改密码\';
    
    public function render()
    {
        // 实例化表单类并传递自定义参数
        $form = ResetPasswordForm::make()->payload([\'id\' => $this->getKey()]);
        
        return Modal::make()
        	->lg()
        	->title($this->title)
        	->body($form)
        	->button($this->title);
    }
}
```

使用

```php
use App\\Admin\\Actions\\Grid\\ResetPassword;

$grid->actions([new ResetPassword()]);
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/4bfa244ec40c9ed0563d3d760ecec7f7667bafbd89f46.png)


<a name="batch-modal"></a>
#### 表格批量操作弹窗

如果你想在批量操作按钮中使用表单弹窗，可以参考以下例子：


这里我们仍然沿用上面用到的`App\\Admin\\Forms\\ResetPassword`表单，并修改如下

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Models\\Administrator;
use Dcat\\Admin\\Widgets\\Form;
use Dcat\\Admin\\Traits\\LazyWidget;
use Dcat\\Admin\\Contracts\\LazyRenderable;

class ResetPassword extends Form implements LazyRenderable
{
    use LazyWidget;
    
    // 处理请求
    public function handle(array $input)
    {
	    // id转化为数组
	    $id = explode(\',\', $input[\'id\'] ?? null);
	    $password = $input[\'password\'] ?? null;

	    if (! $id) {
		    return $this->response()->error(\'参数错误\');
	    }

	    $users = Administrator::query()->find($id);

	    if ($users->isEmpty()) {
		    return $this->response()->error(\'用户不存在\');
	    }

	    // 这里改为循环批量修改
	    $users->each(function ($user) use ($password) {
	 	    $user->update([\'password\' => bcrypt($password)]);
	    });

	    return $this->response()->success(\'密码修改成功\');
    }

    public function form()
    {
        $this->password(\'password\')->required();
        // 密码确认表单
        $this->password(\'password_confirm\')->same(\'password\');
   
        // 设置隐藏表单，传递用户id
        $this->hidden(\'id\')->attribute(\'id\', \'reset-password-id\');
    }
   
    // 返回表单数据，如不需要可以删除此方法
    public function default()
    {
        return [
            \'password\'         => \'\',
            \'password_confirm\' => \'\',
        ];
    }
}
```

然后运行`php artisan admin:action`命令，选择选项`1`，生成数据表格批量操作类，并修改如下：

```php
<?php

namespace App\\Admin\\Actions\\Grid;

use App\\Admin\\Forms\\ResetPassword as ResetPasswordForm;
use Dcat\\Admin\\Widgets\\Modal;
use Dcat\\Admin\\Grid\\BatchAction;

class BatchResetPassword extends BatchAction
{
    protected $title = \'修改密码\';
    
    public function render()
    {
        // 实例化表单类
		$form = ResetPasswordForm::make();
		
		return Modal::make()
			->lg()
			->title($this->title)
			->body($form)
			// 因为此处使用了表单异步加载功能，所以一定要用 onLoad 方法
			// 如果是非异步方式加载表单，则需要改成 onShow 方法
			->onLoad($this->getModalScript())
			->button($this->title);
    }

    protected function getModalScript()
    {
        // 弹窗显示后往隐藏的id表单中写入批量选中的行ID
        return <<<JS
// 获取选中的ID数组
var key = {$this->getSelectedKeysScript()}

$(\'#reset-password-id\').val(key);
JS;
	}
}
```

使用

```php
use App\\Admin\\Actions\\Grid\\BatchResetPassword;

$grid->batchActions([new BatchResetPassword()]);
```',
   'order' => 11,
   'created_at' => '2024-06-26 14:06:03',
   'updated_at' => '2024-06-26 14:06:03',
   'slug' => 'tools-form',
),
            (object) array(
   'id' => 46,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '事件以及表单响应',
   'content' => '# 表单回调

`Form`目前提供了下面几个方法来接收回调函数：

### creating

在新增页面调用（非提交操作）

```php
$form->creating(function (Form $form) {
    if (...) { // 验证逻辑
		$form->responseValidationMessages(\'title\', \'title格式错误\');
		
		// 如有多个错误信息，第二个参数可以传数组
		$form->responseValidationMessages(\'content\', [\'content格式错误\', \'content不能为空\']);
	}
});
```

### editing

在编辑页面调用（非提交操作）

```php
$form->editing(function (Form $form) {
    if (...) { // 验证逻辑
		$form->responseValidationMessages(\'title\', \'title格式错误\');
		
		// 如有多个错误信息，第二个参数可以传数组
		$form->responseValidationMessages(\'content\', [\'content格式错误\', \'content不能为空\']);
	}
});
```

### submitted

在表单提交前调用，在此事件中可以修改、删除用户提交的数据或者中断提交操作

```php
$form->submitted(function (Form $form) {
    // 获取用户提交参数
    $title = $form->title;
    
    // 上面写法等同于
    $title = $form->input(\'title\');
    
    // 删除用户提交的数据
    $form->deleteInput(\'title\');
    
    // 中断后续逻辑
    return $form->response()->error(\'服务器出错了~\');
});
```

### saving
保存前回调，在此事件中可以修改、删除用户提交的数据或者中断提交操作

```php
$form->saving(function (Form $form) {
    // 判断是否是新增操作
    if ($form->isCreating()) {
    
    }
    
    // 删除用户提交的数据
    $form->deleteInput(\'title\');
    
    // 中断后续逻辑
    return $form->response()->error(\'服务器出错了~\');
});
```

### saved

保存后回调，此事件新增和修改操作共用，通过第二个参数`$result`可以判断数据是否保存成功。

> {tip} 新增页面下，`$result`的值是新增记录的自增ID

```php
$form->saved(function (Form $form, $result) {
    // 判断是否是新增操作
    if ($form->isCreating()) {
    	// 自增ID
    	$newId = $result;
    	// 也可以这样获取自增ID
    	$newId = $form->getKey();
    	
    	if (! $newId) {
    		return $form->error(\'数据保存失败\');
    	}
    	
    	return;
    }
    
    // 修改操作
});
```
> {tip} `$form->repository()->model()`为当前新增或编辑后的eloquent

```php
$form->saved(function (Form $form, $result) {
    // 在表單保存後獲取eloquent
    $form->model()->update([\'data\' => \'new\']);
});
```

### deleting

删除前回调

```php
$form->deleting(function (Form $form) {
    // 获取待删除行数据，这里获取的是一个二维数组
	$data = $form->model()->toArray();
});
```

### deleted

删除后回调，通过第二个参数`$result`可以判断数据是否删除成功。

```php
$form->deleted(function (Form $form, $result) {
	// 获取待删除行数据，这里获取的是一个二维数组
	$data = $form->model()->toArray();
	
	// 通过 $result 可以判断数据是否删除成功
	if (! $result) {
		return $form->response()->error(\'数据删除失败\');
	}

    // 返回删除成功提醒，此处跳转参数无效
    return $form->response()->success(\'删除成功\');
});
```

### uploading

图片、文件上传事件

> {tip} 文件上传是一个独立的api请求，这个事件内`redirect`方法是无效的。

```php
use Dcat\\Admin\\Form;
use Dcat\\Admin\\Form\\Field;
use Dcat\\Admin\\Contracts\\UploadField as UploadFieldInterface;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

$form->uploading(function (Form $form, UploadFieldInterface $field, UploadedFile $file) {
	// $file 即是当前上传的完整文件
	
	/* @var Field $field */
	// 获取文件上传字段名称
	$column = $field->column();
});
```

### uploaded

图片、文件上传完毕事件

> 文件上传是一个独立的api请求，这个事件内`redirect`方法是无效的。

```php
use Dcat\\Admin\\Form;
use Dcat\\Admin\\Form\\Field;
use Dcat\\Admin\\Contracts\\UploadField as UploadFieldInterface;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

$form->uploaded(function (Form $form, UploadFieldInterface $field, UploadedFile $file, $response) {
	// $file 即是当前上传的完整文件
	
	/* @var Field $field */
	// 获取文件上传字段名称
	$column = $field->column();
	
	$response = $response->toArray();
	
	// 文件上传成功
	if ($response[\'status\']) {
		// 文件访问地址
		$url = $response[\'data\'][\'url\'];
	}
});
```

### 获取模型中的数据
```php
$form->saved(function (Form $form) {

    $id = $form->getKey();

    $username = $form->model()->username;
    
    // 获取最终保存的数组
    $updates = $form->updates();
});
```

### 修改或删除用户提交的数据

此功能在`saving`和`submitted`事件中有效

```php
$form->select(\'author_id\');

$form->saving(function (Form $form) {
    // 修改用户提交的数据
    $form->author_id = 1;
    
    // 删除、忽略用户提交的数据
    $form->deleteInput(\'author_id\');  
});
```

### 修改模型中的数据
修改模型中的数据需要配合隐藏表单使用。举例：
```php
$form->hidden(\'author_id\');

$form->saving(function (Form $form) {

    $form->author_id = 1;
});
```

### 表单响应

> 此方法在`creating`、`editing`事件中均不可用。

详细用法请参考文档 [动作和表单响应](https://learnku.com/docs/dcat-admin/2.x/action-and-form-response/9690) 章节。


redirect（局部刷新/单页刷新）
```php
// 跳转并提示成功信息
$form->saved(function (Form $form) {
    return $form->response()->success(\'保存成功\')->redirect(\'auth/user\');
});

// 跳转并提示错误信息
$form->saved(function (Form $form) {
    return $form->response()->error(\'系统错误\')->redirect(\'auth/user\');
});
```

仅返回错误信息但不跳转

```php
$form->saving(function (Form $form) {
    return $form->response()->error(\'系统异常\');
});
```
也可以通过抛出异常的形式展示错误信息

```php
$form->submitted(function ($form) {
    throw new \\Exception(\'禁止访问\');
});
```

![](http://docs.oneself.icu:10010/storage/markdown/images/89a2930d3f4a9dea6ed3fa741ac0a8d2667bb00b44bf8.png)


### 返回字段验证出错信息

通过`responseValidationMessages`方法可以很方便的返回字段验证出错信息，而不需要使用`Laravel validation`功能。

普通使用
```php
protected function form()
{
	return Form::make(new Model(), function (Form $form) {
		if (...) { // 验证逻辑
			$form->responseValidationMessages(\'title\', \'title格式错误\');
			
			// 如有多个错误信息，第二个参数可以传数组
			$form->responseValidationMessages(\'content\', [\'content格式错误\', \'content不能为空\']);
		}
	});
}
```

在事件中使用
> 此方法仅在`submitted`事件中可用

```php
$form->submitted(function (Form $form) {
	// 接收表单参数
	$title = $form->title;

    if (...) { // 验证逻辑
        $form->responseValidationMessages(\'title\', \'title格式错误\');
        
        // 如有多个错误信息，第二个参数可以传数组
        $form->responseValidationMessages(\'content\', [\'content格式错误\', \'content不能为空\']);
    }
});
```',
   'order' => 12,
   'created_at' => '2024-06-26 14:07:22',
   'updated_at' => '2024-06-26 14:07:22',
   'slug' => 'event',
),
            (object) array(
   'id' => 47,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '初始化',
   'content' => '# 表单初始化

通过`Form::resolving`方法设置的回调函数会在`Dcat\\Admin\\Form`类被实例化时触发；

通过`Form::composing`方法设置的回调函数会在`render()`方法被调用时（渲染页面时）触发；

开发者可以在这两个事件中改变`Form`的一些设置或行为，比如需要禁用掉某些操作，可以在`app/Admin/bootstrap.php`加入下面的代码：

```php
use Dcat\\Admin\\Form;

Form::resolving(function (Form $form) {
     $form->disableEditingCheck();
    
     $form->disableCreatingCheck();
    
     $form->disableViewCheck();
    
     $form->tools(function (Form\\Tools $tools) {
          $tools->disableDelete();
          $tools->disableView();
          $tools->disableList();
     });

});
```
这样就不用在每一个控制器的代码中来设置了。

如果全局设置后，要在其中某一个表单中开启设置，比如开启显示`继续编辑`的checkbox，在对应的实例上调用`$form->disableEditingCheck(false);`就可以了',
   'order' => 13,
   'created_at' => '2024-06-26 14:08:05',
   'updated_at' => '2024-06-26 14:08:05',
   'slug' => 'initialization',
),
            (object) array(
   'id' => 48,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '表单布局',
   'content' => '# 表单布局

### 多列布局 (column)

![](http://docs.oneself.icu:10010/storage/markdown/images/bde2b75cecf514acb76eb9872c781f47667bb0a176bb3.png)

类似于上图的左右两列布局方式，可以参考下面的代码来实现

```php
// 第一列占据1/2的页面宽度
$form->column(6, function (Form $form) {
    $form->text(\'name\')->required();
    $form->date(\'born\')->required();
    $form->select(\'education\')->options([...])->required();
    $form->text(\'nation\')->required();
    $form->text(\'native\')->required();
    $form->text(\'job\')->required();
    $form->text(\'code\')->required();
    $form->text(\'phone\')->required();
    $form->text(\'work\')->required();
    $form->text(\'census\')->required();
});

// 第二列占据1/2的页面宽度
$form->column(6, function (Form $form) {
    $form->image(\'avatar\');
    $form->decimal(\'wages\');
    $form->decimal(\'fund\');
    $form->decimal(\'pension\');
    $form->decimal(\'fee\');
    $form->decimal(\'business\');
    $form->decimal(\'other\');
    $form->text(\'area\')->default(0);
    $form->textarea(\'illness\');
    $form->textarea(\'comment\');
});

// 调整所有表单的宽度
$form->width(9, 2);
```

以上布局功能使用了`bootstrap`的栅格布局系统，所有列的宽度总和不得超出`12`，并且也支持在`hasMany`和`array`表单中使用

```php
$form->hasMany(\'jobs\', function ($form) {
     $form->column(6, function (Form $form) {
         $form->text(\'name\')->required();
         $form->date(\'born\')->required();
     });
     
     $form->column(6, function (Form $form) {
         $form->image(\'avatar\');
         $form->decimal(\'wages\');
     });
});
```




### 多行布局 (row)

使用
```php
$form->row(function (Form\\Row $form) {
    $form->width(4)->text(\'username\')->required();
	$form->width(3)->text(\'title\');
	...
});

$form->row(function (Form\\Row $form) {
	...
});

...
```
效果
![](http://docs.oneself.icu:10010/storage/markdown/images/45f481b11265e6abba75cd4ebd02e454667bb0ae81e2b.png)


并且也支持在`hasMany`和`array`表单中使用

```php
$form->hasMany(\'jobs\', function ($form) {
     $form->row(function (Form\\Row $form) {
     	...
     });
     
     $form->row(function (Form\\Row $form) {
     	...
     });
});
```

设置布局为 `horizontal`
```php
$form->row(function (Form\\Row $form) {
	$form->horizontal();

	...
});
```


<a name="tab"></a>
### 选项卡表单 (tab)

如果表单元素太多,会导致表单页面太长, 这种情况下可以使用`tab`方法来分隔表单:

```php
$form->tab(\'Basic info\', function (Form $form) {
    
    $form->text(\'username\');
    $form->email(\'email\');
    
})->tab(\'Profile\', function (Form $form) {
                       
   $form->image(\'avatar\');
   $form->text(\'address\');
   $form->mobile(\'phone\');
   
})->tab(\'Jobs\', function (Form $form) {
                         
     $form->hasMany(\'jobs\', function ($form) {
         $form->text(\'company\');
         $form->date(\'start_date\');
         $form->date(\'end_date\');
     });

})
```

同时，`tab` 布局中也允许嵌套使用`column`和`row`布局

```php
$form->tab(\'Basic info\', function (Form $form) {
    $form->column(6, function (Form\\BlockForm $form) {
		$form->display(\'id\');
		$form->text(\'name\');
	});

	$form->column(6, function (Form\\BlockForm $form) {
		$form->text(\'username\');
	});
})
```


设置默认显示的 `Tab`

```php
// 默认显示标题为 标题2 的 Tab
$form->getTab()->active(\'标题2\');
// 也可以指定偏移量
$form->getTab()->activeByIndex(1);

$form->tab(\'标题1\', function ($form) {
    ...
});

$form->tab(\'标题2\', function ($form) {
    ...
});
```



#### Fieldset布局

```php
$form->fieldset(\'分组\', function (Form $form) {
    $form->text(\'company\');
    $form->date(\'start_date\');
    $form->date(\'end_date\');
});
```

如果想要默认收起

```php
$form->fieldset(\'分组\', function (Form $form) {
    ...
})->collapsed();
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/99936be36b612d5e066f568e6e6f0b97667bb0bec49a4.png)

### 分块布局 (block)

如果你的表单中字段非常多，那么可以通过以下方式让你的表单分块布局，并且允许嵌套使用`column`和`row`布局

```php
$form->block(8, function (Form\\BlockForm $form) {
	// 设置标题
    $form->title(\'基本设置\');
    
    // 显示底部提交按钮
    $form->showFooter();
    
    // 设置字段宽度
    $form->width(9, 2);

    $form->column(6, function (Form\\BlockForm $form) {
        $form->display(\'id\');
        $form->text(\'name\');
        $form->email(\'email\');
        $form->image(\'avatar\');
        $form->password(\'password\');
    });

    $form->column(6, function (Form\\BlockForm $form) {
        $form->text(\'username\');
        $form->email(\'mobile\');
        $form->textarea(\'description\');
    });
});
$form->block(4, function (Form\\BlockForm $form) {
    $form->title(\'分块2\');

    $form->text(\'nickname\');
    $form->number(\'age\');
    $form->radio(\'status\')->options([\'1\' => \'默认\', 2 => \'冻结\'])->default(1);

    $form->next(function (Form\\BlockForm $form) {
        $form->title(\'分块3\');

        $form->date(\'birthday\');
        $form->date(\'created_at\');
    });
});
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/b37ee00afe3585f6f103ac75e833fd63667bb0ca0f556.jpg)',
   'order' => 14,
   'created_at' => '2024-06-26 14:10:33',
   'updated_at' => '2024-06-26 14:10:33',
   'slug' => 'table-layout',
),
            (object) array(
   'id' => 49,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '字段翻译',
   'content' => '# 表单字段翻译

数据表单表单中所有使用到字段的地方都会自动读取语言包中的翻译。

>  语言包的详细使用方法请参考<a>[多语言](https://learnku.com/docs/dcat-admin/1.x/basic-use/8127)</a>。

### 语言包名称
语言包名称需要与控制器名相对应，假如控制器名`UserProfileController`，则对应的语言包为`resources/lang/{当前语言}/user-profile.php`（需要转化为小写中划线风格）。

如果想要更改语言包的名称，可以通过下面两种方式进行更改

方式1
```php
use Dcat\\Admin\\Http\\Controllers\\AdminController;

class UserController extends AdminController
{
    /**
     * 指定翻译文件名称
     * 
     * @var string 
     */
    protected $translation = \'user1\';
    
    ...
}
```

方式2
```php
use Dcat\\Admin\\Admin;

Admin::translation(\'user1\');
```



### 示例
现在假设语言包`resources/lang/zh_CN/user-profile.php`内容如下：
```php
return [
    \'fields\' => [
        \'name\'  => \'名称\',
        \'age\'   => \'年龄\',
        \'class\' => \'班级\',
    ],
];
```

控制器`UserProfileController`中设置的`Form`字段会自动读取以上翻译：
```php
// 不设置labael会自动读取语言包翻译
$form->display(\'id\');
$form->text(\'name\');
$form->text(\'age\');
$form->text(\'class\');
```

### 公共翻译
当`admin_trans_field`函数找不到当前控制器中对指定字段的翻译时，会去`global.php`中查找。如果某些字段是很多数据表中都有的，可以把这些翻译写在`resources/lang/{当前语言}/global.php`文件中。
```php
return [
    // 常用的字段放在 global.php 中可以所有控制器共用。
    \'fields\' => [
        \'id\'         => \'ID\',
        \'created_at\' => \'创建时间\',
        \'updated_at\' => \'更新时间\',
    ],
];
```',
   'order' => 15,
   'created_at' => '2024-06-26 14:11:13',
   'updated_at' => '2024-06-26 14:11:13',
   'slug' => 'field-translation',
),
            (object) array(
   'id' => 50,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 3,
   'title' => '字段动态显示',
   'content' => '# 表单字段动态显示



表单字段动态显示是指，在选择表单项的指定的选项时，联动显示其他的表单项。

![](http://docs.oneself.icu:10010/storage/markdown/images/3b65c7998d7e5ae17169a1285266e55d667bb165ac7c7.gif)

> 此功能在[工具表单](https://learnku.com/docs/dcat-admin/2.x/tools-form/8125)中一样有效

目前支持的表单联动的组件有：

- `select`
- `multipleSelect`
- `radio`
- `checkbox`

## 使用方法

可以将上面的组件分为单选和多选两种类型，其中`select`、`radio`为单选组件，其它为多选组件

> 需要注意同个表单中不能出现同名字段，否则前面的字段会被后面的覆盖！

### 单选组件

下面的例子中，选择不同的国籍类型，将会切换选择不同的联动表单项：

```php
$form->radio(\'radio\')
    ->when([1, 4], function (Form $form) {
        // 值为1和4时显示文本框
        $form->text(\'text1\');
        $form->text(\'text2\');
        $form->text(\'text3\');
    })
    ->when(2, function (Form $form) {
        $form->editor(\'editor\');
    })
    ->when(3, function (Form $form) {
        $form->image(\'image\');
    })
    ->options([
        1 => \'显示文本框\',
        2 => \'显示编辑器\',
        3 => \'显示文件上传\',
        4 => \'还是显示文本框\',
    ])
    ->default(1);
```

上例中，方法`when(1, $callback)`等效于`when(\'=\', 1, $callback)`, 如果用操作符`=`，则可以省略这个参数

同时也支持这些操作符，`=`、`>`、`>=`、`<`、`<=`、`!=`使用方法如下：

```php
$form->radio(\'check\')
    ->when(\'>\', 1, function () {

    })->when(\'>=\', 2, function () {

    });
```

`select` 组件的使用方法和`radio`是一样的。

另外需要注意的是，如果使用动态显示功能之后表单不能使用`required`方法，应该使用`required_if`代替，如

```php
$form->radio(\'type\')
    ->when([1, 4], function (Form $form) {
        $form->text(\'text1\')
            ->rules(\'required_if:type,1,4\') // 使用required_if
            ->setLabelClass([\'asterisk\']); // 显示 * 号
    });
```

### 多选组件

多选组件支持两个操作符：`in`、`notIn`

```php
$form->checkbox(\'nationality\', \'国籍\')
    ->options([
        1 => \'中国\',
        2 => \'外国\',
    ])->when([1, 2], function (Form $form) { 

        $form->text(\'name\', \'姓名\');
        $form->text(\'idcard\', \'身份证\');

    })->when(\'notIn\', 2, function (Form $form) { 

        $form->text(\'username\', \'姓名\');
        $form->text(\'passport\', \'护照\');

    });
```

`multipleSelect`组件的使用方法和`checkbox`是一样的。


### 布局

表单动态显示功能支持结合`column`以及`tab`布局功能一起使用，用法如下


`tab`布局
```php
$form->tab(\'Radio\', function (Form $form) {
    $form->display(\'title\')->value(\'单选框动态展示\');

    $form->radio(\'radio\')
        ->when([1, 4], function (Form $form) {
            $form->text(\'text1\');
            $form->text(\'text2\');
        })
        ->when(2, function (Form $form) {
            $form->editor(\'editor\');
        })
        ->options($this->options)
        ->default(1);
});
```

`column`布局
```php
$form->column(6, function (Form $form) {
    $form->radio(\'radio\')
        ->when([1, 4], function (Form $form) {
            $form->text(\'text1\');
            $form->text(\'text2\');
        })
        ->when(2, function (Form $form) {
            $form->editor(\'editor\');
        })
        ->options($this->options)
        ->default(1);
});
```',
   'order' => 16,
   'created_at' => '2024-06-26 14:12:56',
   'updated_at' => '2024-06-26 14:12:56',
   'slug' => 'field-dynamic-display',
),
            (object) array(
   'id' => 51,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 4,
   'title' => '基本使用',
   'content' => '# 数据详情基本使用

`Dcat\\Admin\\Show`用来显示数据详情，先来个例子，数据库中有posts表：

```sql
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) unsigned NOT NULL ,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rate` int(255) COLLATE utf8_unicode_ci NOT NULL,
  `release_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```
对应的数据模型为`App\\Models\\Post`，数据仓库为`App\\Admin\\Repositories\\Post`，下面的代码可以显示posts表的数据详情：


```php
<?php

namespace App\\Admin\\Controllers;

use App\\Http\\Controllers\\Controller;
use App\\Admin\\Repositories\\Post;
use Dcat\\Admin\\Layout\\Content;
use Dcat\\Admin\\Show;
use Dcat\\Admin\\Admin;

class PostController extends Controller
{
    public function show($id, Content $content)
    {
        return $content->header(\'Post\')
            ->description(\'详情\')
            ->body(Show::make($id, new Post(), function (Show $show) {
                $show->id(\'ID\');
                $show->title(\'标题\');
                $show->content(\'内容\');
                $show->rate();
                $show->created_at();
                $show->updated_at();
                $show->release_at();
            }));
    }
}
```

## 基本使用方法

### HTML内容转义(unescape)
为了防止`XSS`攻击, 默认输出的内容都会使用HTML转义，如果你不想转义输出`HTML`，可以调用`unescape`方法：

```php
$show->avatar()->unescape()->as(function ($avatar) {

    return "<img src=\'{$avatar}\' />";

});
```

### 字段宽度
字段宽度默认值为“3”，可以设置1-12之间的数字。

```php
$show->created_at->width(4);
```

### 面板的样式和标题
```php
$show->panel()
    ->style(\'danger\')
    ->title(\'post基本信息...\');
```
style的取值可以是primary、info、danger、warning、default

### 工具栏
面板右上角默认有三个按钮编辑、删除、列表，可以分别用下面的方式关掉它们：

```php
$show->panel()
    ->tools(function ($tools) {
        $tools->disableEdit();
        $tools->disableList();
        $tools->disableDelete();
        // 显示快捷编辑按钮
        $tools->showQuickEdit();
    });
```

#### 自定义复杂工具按钮

请参考文档[数据详情动作](https://learnku.com/docs/dcat-admin/1.x/data-detail-action/8451)

### 多列布局

使用

> Since `v1.3.4`

```php
$show->row(function (Show\\Row $show) {
    $show->width(3)->id;
    $show->width(3)->name;
    $show->width(5)->email;
});

$show->row(function (Show\\Row $show) {
    $show->width(5)->email_verified_at;
    $show->created_at;
    $show->updated_at;
});

$show->row(function (Show\\Row $show) {
    $show->width(3)->field(\'profile.first_name\');
    $show->field(\'profile.last_name\');
    $show->width(3)->field(\'profile.postcode\');
});
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/1244966e24932193b3150a07241dae3e667bb1b4823f9.png)',
   'order' => 1,
   'created_at' => '2024-06-26 14:14:26',
   'updated_at' => '2024-06-26 14:14:26',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 52,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 4,
   'title' => '字段显示',
   'content' => '# 字段显示

### HTML

> Since `v1.7.0`

通过`html`方法可以在详情页插入一段不显示`label`的`HTML`代码

```php
// 传入字符串
$show->html(\'<br/>\');

// 传入视图
$show->html(view(...));

// 传入闭包
$show->html(function () {
	// 获取字段信息
	$id = $this->id;
	$username = $this->username;
	
	return view(..., [\'id\' => $id]);
});
```

### 分隔线
如果要在字段之间添加一条分隔线：

```php
$show->divider();
```

### 换行
如果要在字段之间使用换行：

```php
$show->newline();
```

### 修改显示内容
用下面的方法修改显示内容

```php
$show->title()->as(function ($title) {
    // 获取当前行的其他字段
    $username = $this->username;

    return "<{$title}> {$username}";
});

$show->contents()->as(function ($content) {
    return "<pre>{$content}</pre>";
});
```

### 帮助方法
帮助方法与数据表格字段帮助方法使用一致，可参考[帮助方法](https://learnku.com/docs/dcat-admin/1.x/basic-use/8142#help)。


### 内置显示扩展方法
下面是通过as方法内置实现的几个常用的显示样式：

#### view
`view`方法可以引入一个视图文件。
```php
// 模板中接收以下三个变量：
// name 字段名称
// value 字段值
// model 当前行数据
$show->content->view(\'admin.fields.content\');
```

#### explode
`explode`方法可以把字符串分割为数组。
```php
$show->tag->explode()->label();

// 可以指定分隔符，默认","
$show->tag->explode(\'|\')->label();
```

#### prepend

`prepend` 方法用于给 `string` 或 `array` 类型的值前面插入内容。

```php
// 当字段值是一个字符串
$show->email->prepend(\'mailto:\');

// 当字段值是一个数组
$show->arr->prepend(\'first item\');
```

从`v1.2.5`版本开始，`prepend`方法允许传入闭包参数
```php
$show->email->prepend(function ($value, $original) {
    // $value 是当前字段值
    // $original 是当前字段从数据库中查询出来的原始值
    
    // 获取其他字段值
    $username = $this->username;
    
    return "[{$username}]";
});
```


#### append


`append` 方法用于给 `string` 或 `array` 类型的值后面插入内容。

```php
// 当字段值是一个字符串
$show->email->append(\'@gmail.com\');

// 当字段值是一个数组
$show->arr->append(\'last item\');
```

从`v1.2.5`版本开始，`append`方法允许传入闭包参数
```php
$show->email->prepend(function ($value, $original) {
    // $value 是当前字段值
    // $original 是当前字段从数据库中查询出来的原始值
    
    // 获取其他字段值
    $username = $this->username;
    
    return "[{$username}]";
});
```

#### image
字段avatar的内容是图片的路径或者url，可以将它显示为图片：

```php
$show->avatar()->image();
```
image()方法的参数参考Field::image()

#### file
字段document的内容是文件的路径或者url，可以将它显示为文件：

```php
$show->avatar()->file();
```
file()方法的参数参考Field::file()

#### link
字段homepage的内容是url链接，可以将它显示为HTML链接：

```php
$show->homepage()->link();
```
link()方法的参数参考Field::link()

#### label
将字段tag的内容显示为label：

```php
$show->tag()->label();
```
label()方法的参数参考Field::label()

#### badge
将字段rate的内容显示为badge：

```php
$show->rate()->badge();
```
badge()方法的参数参考Field::badge()

#### using
如果字段gender的取值为f、m，分别需要用女、男来显示

```php
$show->gender()->using([\'f\' => \'女\', \'m\' => \'男\']);
```

#### dot

通过`dot`方法可以在列文字前面加上一个带颜色的圆点

> `Since v1.2.5` 支持`Dcat\\Admin\\Color`类中内置的所有颜色

```php
use Dcat\\Admin\\Admin;

$show->state
	->using([1 => \'未处理\', 2 => \'已处理\', ...])
	->dot(
		[
			1 => \'primary\',
			2 => \'danger\',
			3 => \'success\',
			4 => Admin::color()->info(),
		], 
	    \'primary\' // 第二个参数为默认值
	);
```

#### 显示文件尺寸
如果字段数据是表示文件大小的字节数，可以通过调用filezise方法来显示更有可读性的文字

```php
$show->field(\'file_size\')->filesize();
```
这样数值199812019将会显示为190.56 MB',
   'order' => 2,
   'created_at' => '2024-06-26 14:15:29',
   'updated_at' => '2024-06-26 14:15:29',
   'slug' => 'field-display',
),
            (object) array(
   'id' => 53,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 5,
   'title' => '基本使用',
   'content' => '# 模型树

这个功能可以实现一个树状组件，可以用拖拽的方式实现数据的层级、排序等操作，下面是基本的用法。

![](http://docs.oneself.icu:10010/storage/markdown/images/c642c85fd1addc20faaf8c2f7fe54c17667bb3ad0b115.png)


## 表结构和模型
要使用`model-tree`，要遵守约定的表结构：

> {tip} `parent_id`字段一定要默认为`0`！！！

```sql
CREATE TABLE `demo_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT \'0\',
  `order` int(11) NOT NULL DEFAULT \'0\',
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  # 此字段非必须
  # `depth` tinyint(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
```
上面的表格结构里面有三个必要的字段`parent_id`、`order`、`title`,其它字段没有要求。

对应的模型为`app/Models/Category.php`:
```php
<?php

namespace App\\Models\\Demo;

use Dcat\\Admin\\Traits\\ModelTree;
use Illuminate\\Database\\Eloquent\\Model;

class Category extends Model
{
    use ModelTree;

    protected $table = \'demo_categories\';
}
```
表结构中的三个字段`parent_id`、`order`、`title`的字段名也是可以修改的：

> {tip} 为了便于阅读，这里不再展示 `Repository` 代码。

```php
<?php

namespace App\\Models\\Demo;

use Dcat\\Admin\\Traits\\ModelTree;
use Illuminate\\Database\\Eloquent\\Model;

class Category extends Model
{
    use ModelTree;

    protected $table = \'demo_categories\';
    
    // 父级ID字段名称，默认值为 parent_id
    protected $parentColumn = \'pid\';
    
    // 排序字段名称，默认值为 order
    protected $orderColumn = \'sort\';
    
    // 标题字段名称，默认值为 title
    protected $titleColumn = \'name\';
	
	// Since v2.1.6-beta，定义depthColumn属性后，将会在数据表保存当前行的层级
	protected $depthColumn = \'depth\';
}
```

## 使用方法
然后就是在页面中使用`model-tree`了：
```php
<?php

namespace App\\Admin\\Controllers\\Demo;

use App\\Models\\Category;
use Dcat\\Admin\\Layout\\Row;
use Dcat\\Admin\\Layout\\Content;
use Dcat\\Admin\\Tree;
use Dcat\\Admin\\Http\\Controllers\\AdminController;

class CategoryController extends AdminController
{
    public function index(Content $content)
    {
        return $content->header(\'树状模型\')
            ->body(function (Row $row) {
                $tree = new Tree(new Category);
                
                $row->column(12, $tree);
            });
    }
}
```
可以通过下面的方式来修改行数据的显示：
```php
$tree = new Tree(new Category);

$tree->branch(function ($branch) {
    $src = config(\'admin.upload.host\') . \'/\' . $branch[\'logo\'] ;
    $logo = "<img src=\'$src\' style=\'max-width:30px;max-height:30px\' class=\'img\'/>";

    return "{$branch[\'id\']} - {$branch[\'title\']} $logo";
});
```
在回调函数中返回的字符串类型数据，就是在树状组件中的每一行的显示内容，`$branch`参数是当前行的数据数组。

### 修改模型查询条件

如果要修改模型的查询，用下面的方式
```php
$tree->query(function ($model) {
    return $model->where(\'type\', 1);
});
```

### 限制最大层级数

默认 `5`

```php
$tree->maxDepth(3);
```

### 展开子节点数据


```php
$tree->expand();
```
### 收起所有子节点数据


```php
$tree->expand(false);
```

### 快速创建

默认新增按钮为跳转页面创建表单，使用快速创建可改为异步创建表单

```php
$tree->disableCreateButton();
```

## 自定义行操作

```php
use Dcat\\Admin\\Tree;

$tree->actions(function (Tree\\Actions $actions) {
    if ($actions->row->id > 5) {
        $actions->disableDelete(); // 禁用删除按钮
    }

    // 添加新的action
    $actions->append(...);
});

// 批量添加action
$tree->actions([
    new Action1(),
    "<div>...</div>",
    ...
]);
```

自定义复杂操作，请参考文档[模型树动作](https://learnku.com/docs/dcat-admin/1.x/model-tree/8452)

## 自定义工具栏按钮

请参考文档[模型树动作](https://learnku.com/docs/dcat-admin/1.x/model-tree/8452)',
   'order' => 1,
   'created_at' => '2024-06-26 14:22:45',
   'updated_at' => '2024-06-26 14:22:45',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 54,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 4,
   'title' => '关联关系',
   'content' => '# 关联关系

## 一对一
`users`表和上面的`posts`表为一对一关联关系，通过`posts.author_id`字段关联，`users`和`post`表结构如下：

```sql
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) unsigned NOT NULL ,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rate` int(255) COLLATE utf8_unicode_ci NOT NULL,
  `release_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```
模型定义为：

```php
class User extends Model
{
}

class Post extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, \'author_id\');
    }
}
```
数据仓库定义为：
```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use User as UserModel;

class User extends EloquentRepository
{
    protected $eloquentClass = UserModel::class;
}
```

那么可以用下面的方式显示`post`所属的用户的详细：

```php
use App\\Models\\User;

$show->relation(\'author\', function ($model) {
    return Show::make($model->author_id, new User(), function (Show $show) {
        // 设置路由
		$show->setResource(\'/users\');
    
        $show->id();
        $show->name();
        $show->email();
    });
});
```

> 为了能够正常使用这个面板右上角的工具，必须用`setResource`方法设置用户资源的url访问路径。

如果你的关联模型还需要有其他的条件查询，则可以参考以下方式
```php
use App\\Models\\User;

$show->relation(\'author\', function ($model) {
    // 模型设置查询条件
    $userModel = User::where(\'state\', $model->state);

    return Show::make($model->author_id, $userModel, function (Show $show) {
        // 设置路由
		$show->setResource(\'/users\');
    
        $show->id();
        $show->name();
        $show->email();
    });
});
```
### 简单方式
如果你只是简单的展示关联表信息，也可以这么写

```php
// 如果你用的是模型，可以这样指定关联关系
$model = Post::with(\'author\');

// 如果你用的是数据仓库，可以这样指定关联关系
// $repository = new Post([\'author\']);

return Show::make($id, $model, function (Show $show) {
    $show->field(\'author.id\', \'作者ID\');
    $show->field(\'author.name\', \'作者名称\');
    
    ...
});
```

如果你的关联模型名称的命名是**驼峰**风格，那么使用的时候需要转化为**下划线**风格命名

```php
// 注意这里必须使用下划线风格命名，否则将无法显示编辑数据
$show->field(\'user_profile.postcode\');
$show->field(\'user_profile.address\');
```



## 一对多
一对多会以[数据表格](https://learnku.com/docs/dcat-admin/1.x/basic-use/8089)的方式呈现，下面是简单的例子

`posts`表和评论表`comments`为一对多关系(一条post有多条comments)，通过`comments.post_id`字段关联

```sql
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
```
模型定义为：

```php
class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

class Comment extends Model
{
}
```
数据仓库定义为：
```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use Comment as CommentModel;

class Comment extends EloquentRepository
{
    protected $eloquentClass = CommentModel::class;
}
```

那么评论的显示通过下面的代码实现：

```php
use App\\Admin\\Repositories\\Comment;

$show->relation(\'comments\', function ($model) {
    $grid = new Grid(new Comment);
    
    $grid->model()->where(\'post_id\', $model->id);
    
	// 设置路由
    $grid->setResource(\'comments\');

    $grid->id();
    $grid->content()->limit(10);
    $grid->created_at();
    $grid->updated_at();

    $grid->filter(function ($filter) {
        $filter->like(\'content\')->width(\'300px\');
    });
    
    return $grid;
});
```

注意：为了能够正常使用这个数据表格的功能，必须用`setResource()`方法设置`comments`资源的url访问路径

## 多对多

多对多会以[数据表格](model-grid.md)的方式呈现，下面是简单的例子

角色表`roles`和权限表`permissions`为多对多关系，通过中间表`role_permissions`关联

```sql
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT \'0\',
  `parent_id` int(11) NOT NULL DEFAULT \'0\',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
模型定义为：

```php
class Role extends Model
{
  public function permissions() : BelongsToMany
  {
      return $this->belongsToMany(Permission::class, \'role_permissions\', \'role_id\', \'permission_id\');
  }

}

class Permission extends Model
{
}
```
数据仓库定义为：
```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use Permission as PermissionModel;

class Permission extends EloquentRepository
{
    protected $eloquentClass = PermissionModel::class;
}
```

那么权限的显示通过下面的代码实现：

```php
use App\\Admin\\Repositories\\Permission;

$show->relation(\'permissions\', function ($model) {
    $grid = new Grid(new Permission);

    $grid->model()->join(\'role_permissions\', function ($join) use ($model) {
        $join->on(\'role_permissions.permission_id\', \'id\')
            ->where(\'role_id\', \'=\', $model->id);
    });

    // 设置路由
    $grid->setResource(\'auth/permissions\');

    $grid->id;
    $grid->name;
    $grid->slug;
    $grid->http_path;

    $grid->filter(function (Grid\\Filter $filter) {
        $filter->equal(\'id\')->width(\'300px\');
    });

    return $grid;
});
```',
   'order' => 3,
   'created_at' => '2024-06-26 14:54:41',
   'updated_at' => '2024-06-26 14:54:41',
   'slug' => 'relationship',
),
            (object) array(
   'id' => 55,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 4,
   'title' => '字段显示扩展',
   'content' => '# 详情字段显示扩展

这个功能用来扩展详情字段显示, 在内置的显示方法不满足需求的情况下，可以使用这个功能来实现

首先定义扩展类：

```php
<?php

namespace App\\Admin\\Extensions\\Show;

use Dcat\\Admin\\Show\\AbstractField;

class UnSerialize extends AbstractField
{
    // 这个属性设置为false则不会转义HTML代码
    public $escape = false;
    
    public function render($arg = \'\')
    {
        // 返回任意可被渲染的内容
        return unserialize($this->value);
    }
}
```
然后在`app/Admin/bootstrap.php`中注册扩展类

```php
use Dcat\\Admin\\Show\\Field;
use App\\Admin\\Extensions\\Show\\UnSerialize;

Field::extend(\'unserialize\', UnSerialize::class);
```
然后在控制器中使用这个扩展

```php
$show->column()->unserialize(\'xxx\');
```
传入unserialize()方法的参数会按顺序传入UnSerialize::render()方法中。

在父类`Dcat\\Admin\\Show\\AbstractField`中可以看到几个常用的属性

```php
/**
 * Field value.
 *
 * @var mixed
 */
protected $value;

/**
 * Current field model.
 *
 * @var Fluent
 */
protected $model;

/**
 * If this field show with a border.
 *
 * @var bool
 */
public $border = true;

/**
 * If this field show escaped contents.
 *
 * @var bool
 */
public $escape = true;
```
其中`$value`和`$model`分别是当前字段值和当前详情内容的数据，在`render()`方法中可以用来获取你想要的数据。

`$border`用来控制当前显示内容是否需要外边框，`$escape`分别用来设置当前显示内容要不要HTML转义。',
   'order' => 4,
   'created_at' => '2024-06-26 14:55:24',
   'updated_at' => '2024-06-26 14:55:24',
   'slug' => 'field-display-extension',
),
            (object) array(
   'id' => 56,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 4,
   'title' => '初始化',
   'content' => '# 数据详情初始化

通过`Show::resolving`方法设置的回调函数会在`Dcat\\Admin\\Show`类被实例化时触发；

通过`Show::composing`方法设置的回调函数会在`render()`方法被调用时触发；

开发者可以在这两个事件中改变`Show`的一些设置或行为，比如需要禁用掉某些操作，可以在`app/Admin/bootstrap.php`加入下面的代码：

```php
use Dcat\\Admin\\Show;

Show::resolving(function (Show $show) {

     $show->showQuickEdit();
   
});
```',
   'order' => 5,
   'created_at' => '2024-06-26 14:55:50',
   'updated_at' => '2024-06-26 14:55:50',
   'slug' => 'initialization',
),
            (object) array(
   'id' => 57,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 4,
   'title' => '字段翻译',
   'content' => '# 数据详情字段翻译

与数据表格字段翻译的使用基本一致，可参考[数据表格字段翻译](https://learnku.com/docs/dcat-admin/1.x/field-translation/8104)。',
   'order' => 6,
   'created_at' => '2024-06-26 14:56:26',
   'updated_at' => '2024-06-26 14:56:26',
   'slug' => 'field-translation',
),
            (object) array(
   'id' => 58,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 6,
   'title' => '基本使用',
   'content' => '# 数据仓库


数据仓库(`Repository`)是`Dcat Admin`中对数据增删改查操作接口的具体实现，通过`Repository`的介入可以让页面的构建不再关心数据读写功能的具体实现，开发者通过实现`Repository`接口即可对数据进行读写操作。

> {tip} 当然为了方便系统也保留了直接使用 `Model` 的功能，底层会自动把`Model`转化为数据仓库实例，毕竟大多数时候直接使用 `Model` 也能满足我们的需求。



数据表格`Grid`、数据表单`Form`、数据详情`Show`、`Tree` 等组件不再直接依赖于`Model`，而是依赖于提供更简单清晰的接口的数据仓库，下面是`Repository`的所有接口：

```php
<?php

namespace Dcat\\Admin\\Contracts;

use Dcat\\Admin\\Form;
use Dcat\\Admin\\Grid;
use Dcat\\Admin\\Show;
use Illuminate\\Support\\Collection;

interface Repository
{
    /**
     * 获取主键名称.
     *
     * @return string
     */
    public function getKeyName();

    /**
     * 获取创建时间字段.
     *
     * @return string
     */
    public function getCreatedAtColumn();

    /**
     * 获取更新时间字段.
     *
     * @return string
     */
    public function getUpdatedAtColumn();

    /**
     * 是否使用软删除.
     *
     * @return bool
     */
    public function isSoftDeletes();

    /**
     * 获取Grid表格数据.
     *
     * @param Grid\\Model $model
     *
     * @return \\Illuminate\\Contracts\\Pagination\\LengthAwarePaginator|Collection|array
     */
    public function get(Grid\\Model $model);

    /**
     * 获取编辑页面数据.
     *
     * @param Form $form
     *
     * @return array|\\Illuminate\\Contracts\\Support\\Arrayable
     */
    public function edit(Form $form);

    /**
     * 获取详情页面数据.
     *
     * @param Show $show
     *
     * @return array|\\Illuminate\\Contracts\\Support\\Arrayable
     */
    public function detail(Show $show);

    /**
     * 新增记录.
     *
     * @param Form $form
     *
     * @return mixed
     */
    public function store(Form $form);

    /**
     * 查询更新前的行数据.
     *
     * @param Form $form
     *
     * @return array|\\Illuminate\\Contracts\\Support\\Arrayable
     */
    public function updating(Form $form);

    /**
     * 更新数据.
     *
     * @param Form $form
     *
     * @return bool
     */
    public function update(Form $form);

    /**
     * 删除数据.
     *
     * @param Form  $form
     * @param array $deletingData
     *
     * @return mixed
     */
    public function delete(Form $form, array $deletingData);

    /**
     * 查询删除前的行数据.
     *
     * @param Form $form
     *
     * @return array|\\Illuminate\\Contracts\\Support\\Arrayable
     */
    public function deleting(Form $form);
}

```

如果你的数据是多层级结构，则还需要实现以下接口
```php
<?php

namespace Dcat\\Admin\\Contracts;

interface TreeRepository
{
    /**
     * 获取主键字段名称.
     *
     * @return string
     */
    public function getPrimaryKeyColumn();

    /**
     * 获取父级ID字段名称.
     *
     * @return string
     */
    public function getParentColumn();

    /**
     * 获取标题字段名称.
     *
     * @return string
     */
    public function getTitleColumn();

    /**
     * 获取排序字段名称.
     *
     * @return string
     */
    public function getOrderColumn();

    /**
     * 保存层级数据排序.
     *
     * @param array $tree
     * @param int   $parentId
     */
    public function saveOrder($tree = [], $parentId = 0);

    /**
     * 设置数据查询回调.
     *
     * @param \\Closure|null $query
     *
     * @return $this
     */
    public function withQuery($queryCallback);

    /**
     * 获取层级数据.
     *
     * @return array
     */
    public function toTree();
}
```

## Repository接口

### getKeyName
此接口要求返回数据的主键字段名称，需要返回`string`类型值。
```php
    public function getKeyName()
    {
        return \'id\';
    }
```

### getCreatedAtColumn
此接口要求返回数据的`created_at`字段名称，如果没有值可以返回空字符串或`null`值。
```php
    // 如果没有值可以返回空字符串或`null`值
    public function getCreatedAtColumn()
    {
        return \'created_at\';
    }
```

### getUpdatedAtColumn
此接口要求返回数据的`updated_at`字段名称，如果没有值可以返回空字符串或`null`值。
```php
    // 如果没有值可以返回空字符串或`null`值
    public function getCreatedAtColumn()
    {
        return \'updated_at\';
    }
```

### isSoftDeletes
此接口要求返回数据是否支持软删除，请返回一个`bool`类型的值。
```php
    public function isSoftDeletes()
    {
        return true;
    }
```

<a name="get"></a>
### get
此接口要求返回数据表格`Grid`的数据，用于数据表格展示，要求返回一个`array`、`Illuminate\\Support\\Collection`或`LengthAwarePaginator`类型值。

#### 分页
当数据需要分页时要求返回一个`\\Illuminate\\Contracts\\Pagination\\LengthAwarePaginator`类型值：
```php
    public function get(Grid\\Model $model)
    {
        // 获取当前页数
        $currentPage = $model->getCurrentPage();
        // 获取每页显示行数
        $perPage = $model->getPerPage();

        // 获取筛选参数
        $city = $model->filter()->input(Grid\\Filter\\Scope::QUERY_NAME, \'广州\');

        $start = ($currentPage - 1) * $perPage;

        $client = new \\GuzzleHttp\\Client();

        $response = $client->get("{$this->api}?{$this->apiKey}&city=$city&start=$start&count=$perPage");
        $data = json_decode((string)$response->getBody(), true);

        return $model->makePaginator(
            $data[\'total\'] ?? 0, // 传入总记录数
            $data[\'subjects\'] ?? [] // 传入数据二维数组
        );
    }
```

#### 不分页
如果不需要分页，则直接返回一个`array`或`Illuminate\\Support\\Collection`类型值即可。
```php
    public function get(Grid\\Model $model)
    {
        return [
            [\'id\' => 1, \'name\' => \'n1\'],
            [\'id\' => 2, \'name\' => \'n2\']
        ];
    }
```

注意，`grid`需要禁用分页
```php
$grid->disablePagination()
```

### edit
此接口要求返回表单编辑页面的数据，用于显示数据表单编辑页面，需要返回`array`类型值。
```php
    public function edit(Form $form): array
    {
        // 获取数据主键值
        $id = $form->getKey();
    
        return [\'id\' => 1, \'name\' => \'n1\'];
    }
```

### detail
此接口要求返回数据详情页面的数据，用于显示数据详情，需要返回`array`类型值。
```php
    public function detail(Show $show): array
    {
        // 获取数据主键值
        $id = $show->getId();
    
        return [\'id\' => 1, \'name\' => \'n1\'];
    }
```

### store
此接口用于新增一条记录，可以返回`int`、`string`或`bool`类型值。
```php
    public function store(Form $form)
    {
        // 获取待新增的数据
        $attributes = $form->updates();
        
        // 执行你的新增逻辑
    
        // 返回新增记录id或bool值
        return 1;
    }
```

### updating
此接口用于数据表单修改数据时查询原始记录，需要返回`array`或`Model`类型值。

> {tip} 此接口只有某些特殊字段会用到，如图片、文件上传字段，当更改了图片或文件时可以根据这个接口查出的数据删除旧文件。所以如果你的表单中没有用到此类特殊字段，此接口可以返回一个空数组。

```php
    public function updating(Form $form)
    {
        // 获取数据主键值
        $id = $form->getKey();
    
        return [\'id\' => 1, \'name\' => \'n1\'];
    }
```

### update
此接口用于数据表单修改记录，可以返回`int`、`string`或`bool`类型值。
```php
    public function update(Form $form)
    {
        // 获取待编辑的数据
        $attributes = $form->updates();
        
        // 执行你的编辑逻辑
    
        // 返回成功
        return true;
    }
```

### deleting
此接口用于删除数据时查询原始记录，需要返回二维数组，或Collection model。

```php
    public function deleting(Form $form): array
    {
        // 当批量删除时id为多个
        $id = explode(\',\', $form->getKey());
        
        // 执行你的逻辑
    
        // 注意这里需要返回二维数组
        return [
            [\'id\' => 1, \'name\' => \'h1\'],
        ];
        
        // 也可以返回collection
        return Model::find($id);
    }
```


### delete
单行/批量删除数据方法，成功返回`true`，失败返回`false`。

```php
    public function delete(Form $form, array $deletingData)
    {
        // 当批量删除时id为多个
        $id = explode(\',\', $form->getKey());
        
        // $deletingData 是 getDataWhenDeleting 接口返回的数据
        
        // 执行你的逻辑
    
        return true;
    }
```

## TreeRepository接口

### getPrimaryKeyColumn

此接口用于返回数据的主键字段名称，需要返回`string`类型值。

```php
    public function getPrimaryKeyColumn()
    {
        return $this->getKeyName();
    }
```

### getParentColumn

此接口用于返回数据的父ID字段名称，需要返回`string`类型值。

```php
    public function getParentColumn()
    {
        return \'parent_id\';
    }
```


### getTitleColumn

此接口用于返回数据标题字段名称，需要返回`string`类型值。

```php
    public function getTitleColumn()
    {
        return \'title\';
    }
```

### getOrderColumn

此接口用于返回数据排序字段名称，需要返回`string`类型值。

> {tip} 此字段不是必须的，如果你的数据不支持或不需要排序，请返回空值！

```php
    public function getOrderColumn()
    {
        return \'order\';
    }
```

### saveOrder

此接口用于保存层级数据的排序，并且接收两个参数

+ `$tree` `array` 此字段是一个已分好层级的数组
+ `$parentId` `int` 此字段主要用于递归时传递父ID使用

> {tip} 如果你的数据不支持 `MySQL`，可参考 `Dcat\\Admin\\Traits\\ModelTree::saveOrder` 方法自行实现。

```php
$tree = [
	[
		\'id\'        => 1,
		\'title\'     => \'title\',
		\'parent_id\' => 0,
		
		\'children\' => [
			[
				\'id\'        => 2,
				\'title\'     => \'child1\',
				\'parent_id\' => 1,
			],
			[
				\'id\'        => 3,
				\'title\'     => \'child2\',
				\'parent_id\' => 1,
			],
		],
	]
];

// 保存排序，内层逻辑请自行实现
$repository->saveOrder($tree);  
```

### withQuery

此接口需结合 `toTree` 接口使用，接收一个参数：主要用于设置数据查询操作的相关回调或参数。

```php
<?php

use Dcat\\Admin\\Contracts\\Repository;
use Dcat\\Admin\\Contracts\\TreeRepository;
use Dcat\\Admin\\Support\\Helper;

class Category implements Repository, TreeRepository
{
    protected $queryCallbacks = [];
    
    public function withQuery($queryCallback)
    {
        $this->queryCallbacks[] = $queryCallback;
        
        return $this;
	}
	
	public function toTree()
	{
	    // 这里演示的代码只是为了说明 withQuery 方法的作用
	    $client = ...;
	    
	    foreach ($this->queryCallbacks as $callback) {
	    	$callback($client);
	    }
	    
	    return Helper::buildNestedArray($client->get());
	}
}   
```

### toTree

此接口主要用于查询数据并分好层级返回，需要返回 `array` 类型值。

```php
	public function toTree()
	{
	    $client = ...;
	    
	    foreach ($this->queryCallbacks as $callback) {
	    	$callback($client);
	    }
	    
	    return Helper::buildNestedArray($client->get());
	}
```

## 模型
`Dcat Admin`已经内置了对`Eloquent model`的支持，如果你的数据源是支持`Model`的，那么只需继承`Dcat\\Admin\\Repositories\\EloquentRepository`类即可实现对数据的`CURD`操作，如：
```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\EloquentRepository;
use App\\Models\\Movie as MovieModel;

class Movie extends EloquentRepository
{
    // 这里设置你的模型类名即可
    protected $eloquentClass = MovieModel::class;
    
    // 通过这个方法可以指定查询的字段，默认"*"
    public function getGridColumns()
    {
        return [$this->getKeyName(), \'name\', \'title\', \'created_at\'];
    }
    
    // 通过这个方法可以指定表单页查询的字段，默认"*"
    public function getFormColumns()
    {
        return [$this->getKeyName(), \'name\', \'title\', \'created_at\'];
    }
    
   // 通过这个方法可以指定数据详情页查询的字段，默认"*"
    public function getDetailColumns()
    {
        return [\'*\'];
    }
    
}
```

## QueryBuilder

如果你的数据支持`QueryBuilder`查询，但不方便建模型类（比如需要动态查表数据），则可以继承`Dcat\\Admin\\Repositories\\QueryBuilderRepository`类。

> {tip} 注意，`QueryBuilderRepository`默认是不支持`Model`的关联模型、软删除、模型树以及字段排序等功能，如果需要这些功能，请自定实现上述相关接口即可。

```php
<?php

namespace App\\Admin\\Repositories;

use Dcat\\Admin\\Repositories\\QueryBuilderRepository;

class MyRepository extends QueryBuilderRepository
{
    // 设置你的主键名称
    protected $keyName = \'id\';
    
    // 设置创建时间字段
    protected $createdAtColumn = \'created_at\';
    
     // 设置更新时间字段
    protected $updatedAtColumn = \'updated_at\';
    
    // 返回表名
    public function getTable()
    {
        return \'your_table_name\';
    }
    
    // 返回你的主键名称
    public function getKeyName()
    {
        return $this->keyName;
    }
    
    // 通过这个方法可以指定查询的字段，默认"*"
    public function getGridColumns()
    {
        return [$this->getKeyName(), \'name\', \'title\', \'created_at\'];
    }
    
    // 通过这个方法可以指定表单页查询的字段，默认"*"
    public function getFormColumns()
    {
        return [$this->getKeyName(), \'name\', \'title\', \'created_at\'];
    }
    
   // 通过这个方法可以指定数据详情页查询的字段，默认"*"
    public function getDetailColumns()
    {
        return [\'*\'];
    }
}
```',
   'order' => 1,
   'created_at' => '2024-06-26 14:57:09',
   'updated_at' => '2024-06-26 14:57:09',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 59,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 7,
   'title' => '基本使用',
   'content' => '# 动作基本使用

开发者通过 `Action` 动作类可以非常方便的开发出一个含有特定功能的操作，可以非常方便的让用户与服务器产生交互。

例如，页面上需要一个按钮，用户点击之后可以向服务器发起请求，通过弹窗展示当前登录用户的信息，那么这个功能按钮就可以用 `Action` 来开发。

## 示例

下面我们就开始开发一个用于查看登录用户信息的按钮：


### 使用命令创建Action类
首先需要先创建 `Action` 类，运行命令

```bash
php artisan admin:action
```

运行成功之后会看到命令窗口出现如下信息，让开发者选择一个 `Action` 类的类型，这里我们输入 `0` 就行

>  `default`类型的动作类，可以用在页面的任意位置。

```bash
 Which type of action would you like to make?:
  [0] default
  [1] grid-batch
  [2] grid-row
  [3] grid-tool
  [4] form-tool
  [5] show-tool
  [6] tree-tool
 > 0 # 输入 0
 
```

接着输入 `Action` 类名称，这里需要输入 `大驼峰` 风格的英文字母

```bash

 Please enter a name of action class:
 > ShowCurrentAdminUser

```

类名输入完成之后会出现以下信息让开发者输入类的命名空间，默认的命名空间是 `App\\Admin\\Actions`，这里我们直接按回车跳过就行了

```bash

 Please enter the namespace of action class [App\\Admin\\Actions]:
 >

```

这样一个 `Action` 类就创建完成了，刚刚创建的类路径是 `app/Admin/Actions/ShowCurrentAdminUser.php`


### 使用

修改 `Action` 类如下

> 如果你的动作类中需要通过构造方法传递参数，则一定要给构造方法的所有参数都设置一个默认值！

```php
<?php

namespace App\\Admin\\Actions;

use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Widgets\\Table;
use Dcat\\Admin\\Actions\\Action;
use Dcat\\Admin\\Actions\\Response;
use Dcat\\Admin\\Traits\\HasPermissions;
use Illuminate\\Contracts\\Auth\\Authenticatable;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Http\\Request;

class ShowCurrentAdminUser extends Action
{
    /**
     * 按钮标题
     *
     * @var string
     */
    protected $title = \'个人信息\';

    /**
     * @var string
     */
    protected $modalId = \'show-current-user\';

    /**
     * 处理当前动作的请求接口，如果不需要请直接删除
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(Request $request)
    {
        // 获取当前登录用户模型
        $user = Admin::user();
        // 这里我们用表格展示模型数据
        $table = Table::make($user->toArray());

        return $this->response()
            ->success(\'查询成功\')
            ->html($table);
    }

    /**
     * 处理响应的HTML字符串，附加到弹窗节点中
     *
     * @return string
     */
    protected function handleHtmlResponse()
    {
        return <<<\'JS\'
function (target, html, data) {
    var $modal = $(target.data(\'target\')); 
    
    $modal.find(\'.modal-body\').html(html)
    $modal.modal(\'show\')
} 
JS;
    }

    /**
     * 设置HTML标签的属性
     *
     * @return void
     */
    protected function setupHtmlAttributes()
    {
        // 添加class
        $this->addHtmlClass(\'btn btn-primary\');

        // 保存弹窗的ID
        $this->setHtmlAttribute(\'data-target\', \'#\'.$this->modalId);

        parent::setupHtmlAttributes();
    }

    /**
     * 设置按钮的HTML，这里我们需要附加上弹窗的HTML
     *
     * @return string|void
     */
    public function html()
    {
        // 按钮的html
        $html = parent::html();

        return <<<HTML
{$html}        
<div class="modal fade" id="{$this->modalId}" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{$this->title()}</h4>
      </div>
      <div class="modal-body"></div>
    </div>
  </div>
</div>
HTML;
    }

    /**
     * 确认弹窗信息，如不需要可以删除此方法 
     *
     * @return string|void
     */
    public function confirm()
    {
        // return [\'Confirm?\', \'contents\'];
    }

    /**
     * 动作权限判断，返回false则表示无权限，如果不需要可以删除此方法
     *
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    /**
     * 通过这个方法可以设置动作发起请求时需要附带的参数，如果不需要可以删除此方法
     *
     * @return array
     */
    protected function parameters()
    {
        return [];
    }
}
```


修改完之后就可以开始使用了

```php
<?php

use App\\Admin\\Actions\\ShowCurrentAdminUser;

class IndexController
{
	public function index(Content $content)
	{
	    return $content->body(ShowCurrentAdminUser::make());
	}
}
```

效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/71eaa886eb181bf365b62de2b224b20c667bbc04b17df.png)


## 属性

`Dcat\\Admin\\Actions\\Action` 类可用属性说明

| 属性名      | 类型     | 默认值     | 描述     |
| ---------- | -------- |---------- | -------- |
| title | `string`  |  | 标题 |
| selectorPrefix | `public` `string` | `.admin-action-` | 目标元素的`Css`选择器 |
| method | `string` | `POST`  | 与服务器交互的请求方法 |
| event | `string` | `click` | 目标元素绑定的事件，默认为点击事件 |
| disabled | `bool` | `false` | 是否渲染动作元素，设置`true`则不渲染 |
| allowHandler | `bool` | `true` | 当此属性设置为`false`，则无论`Action`中是否包含`handle`方法都不会向服务器发起请求 |


## 方法

`Dcat\\Admin\\Actions\\Action` 类方法说明

### 创建实例 (make)

此方法是一个静态方法，用于实例化动作类

```php
$action = MyAction::make($param1, $param2...);
```

### 处理请求 (handle)

当`Action`类中包含此方法之时，目标元素会被绑定通过`event`属性设置的事件（默认为`click`）。如果事件被触发，则会向服务器发起请求，而`handle`方法则可以处理并响应此请求。
 
> 如果没有此方法，则目标元素不会被绑定事件。

### 响应 (response)

此方法用于获取`Response`对象，然后响应前端发起的请求，此方法仅在`handle`方法内有效。

```php
<?php

use Dcat\\Admin\\Actions\\Action;
use Illuminate\\Http\\Request;

class MyAction extends Action
{
    public function handle(Request $request) 
    {
        return $this->response()->success(\'成功！\');
    }
}

```


#### 展示成功信息

此方法接收一个`string`类型参数

```php
$this->response()->success(\'成功！\');
```

#### 展示错误信息

此方法接收一个`string`类型参数

```php
$this->response()->error(\'出错了！\');
```

#### 展示警告信息

此方法接收一个`string`类型参数

```php
$this->response()->warning(\'警告\');
```

#### 跳转

此方法接收一个`string`类型参数，可以与`success`、`error`、`warning`等方法同时使用

```php
$this->response()->redirect(\'auth/users\');
```

#### 跳转 (location)

此方法接收一个`string`类型参数

```php
$this->response()->location(\'auth/users\');
```

#### 刷新当前页面

此方法可以与`success`、`error`、`warning`等方法同时使用

```php
$this->response()->refresh();
```

#### 下载

此方法接收一个`string`类型参数

```php
$this->response()->download(\'auth/users?_export_=1\');
```

#### 返回HTML

此方法可接收一个`string`、`Renderable`、`Htmlable`类型参数，可以与`success`、`error`、`warning`等方法同时使用

> 响应的`HTML`字符默认会被置入动作按钮元素上，如果需要自己控制，则覆写[handleHtmlResponse](#handleHtmlResponse)方法即可。

```php
$this->response()->html(\'<a>a标签</a>\');

$this->response()->html(view(\'...\'));
```

#### 执行JS代码

此方法接收一个`string`类型参数，可以与`success`、`error`、`warning`等方法同时使用

```php
$this->response()->script(
	<<<JS
console.log(\'response\', response, target);	
JS	
);
```

### 设置请求数据 (parameters)

通过这个方法可以设置动作发起请求时需要附带的参数

```php
<?php

use Dcat\\Admin\\Actions\\Action;
use Illuminate\\Http\\Request;

class MyAction extends Action
{
    public function handle(Request $request) 
    {
        // 接收参数
        $key1 = $request->get(\'key1\');
        $key2 = $request->get(\'key2\');
        
        return $this->response()->success(\'成功！\');
    }
    
    public function parameters()
    {
        return [
        	\'key1\' => \'value1\',
        	\'key2\' => \'value2\',    
		];
    }
}

```

### 确认弹窗 (confirm)

设置确认信息，此方法要求返回一个`string`类型参数。

当此方法返回值不为空时会加入确认窗功能，当事件被触发时自动弹出确认框，点击确认后才会进行下一步操作。


```php
public function confirm()
{
	return \'你确定要删除此行内容吗？\';
}
```

显示弹窗标题和内容

```php
public function confirm()
{
	return [\'你确定要删除此行内容吗？\', \'弹窗内容\'];
}
```

### 发起请求之前执行的JS代码 (actionScript)

设置动作执行的前置`js`代码，当按钮绑定的事件被触发后，发起请求之前会执行通过此方法设置的`js`代码，此方法要求返回一个`js`的匿名函数。

`js`匿名函数接收以下三个参数：

- `data` `object` 需要传递给接口的数据对象
- `target` `object` 动作按钮的`jQuery`对象
- `action` `object` 动作的管理对象

```php
protected function actionScript()
{
	return <<<JS
function (data, target, action) {
    console.log(\'发起请求之前\', data, target, action);
    
    // return false; 在这里return false可以终止执行后面的操作	
    
    // 更改传递到接口的主键值
    action.options.key = 123;
}
JS	
}
```

<a name="handleHtmlResponse"></a>
### 处理服务器响应的HTML代码 (handleHtmlResponse)

处理服务器响应的`HTML`代码，此方法要求返回一个`js`匿名函数。

```php
protected function handleHtmlResponse()
{
        return <<<\'JS\'
function (target, html, data) {
    // target 参数是动作按钮的JQ对象
    // html 参数是接口返回HTML字符串
    // data 参数是接口返回的完整数据的json对象

    target.html(html);
}
JS;
}
```

### 权限 (authorize)

此方法用于判断登录用户的操作权限，默认返回`true`

```php
protected function authorize($user): bool
{
	return $user->can(\'do-action\');
}
```

### 无权限响应 (failedAuthorization)

此方法用于设置鉴权失败的响应内容，如果需要则可覆写此方法

```php
public function failedAuthorization()
{
	return $this->response()->error(__(\'admin.deny\'));
}
```


### 隐藏或显示 (disable)

设置显示或隐藏此动作

```php
// 隐藏
MyAction::make()->disable();

// 显示
MyAction::make()->disable(false);
```


### 判断是否显示 (allowed)

判断动作是否允许显示
```php
if (MyAction::make()->allowed()) {
	...
}
```

### 设置主键 (setKey)

设置数据主键

```php
$id = ...;

MyAction::make()->setKey($id);
```

### 获取主键值 (getKey)

获取数据主键，此方法在`handle`方法内也同样可用

```php
<?php

use Dcat\\Admin\\Actions\\Action;
use Illuminate\\Http\\Request;

class MyAction extends Action
{
    public function handle(Request $request) 
    {
        $id = $this->getKey();
        
        ...
        
        return $this->response()->success(\'成功！\');
    }
    
    public function title()
    {
        return "标题 {$this->key()}";
    }
}
```


### 获取目标元素样式 (getElementClass)

获取动作目标元素（按钮）的`class`

```php
$class = MyAction::make()->getElementClass();
```

### 获取目标元素的Css选择器 (selector)

获取动作目标元素（按钮）的CSS选择器

```php
$selector = MyAction::make()->selector();

Admin::script(
	<<<JS
	$(\'$selector\').click(...);
JS	
);
```

### 追加样式 (addHtmlClass)

追加获取动作目标元素（按钮）的`class`

```php
MyAction::make()->addHtmlClass(\'btn btn-primary\');

MyAction::make()->addHtmlClass([\'btn\', \'btn-primary\']);
```

### 设置目标元素的HTML (html)

此方法用于设置动作目标元素的`HTML`代码，如有需要可以覆写

```php
protected function html()
{
	return <<<HTML
<a {$this->formatHtmlAttributes()}>{$this->title()}</a>
HTML;
}
```

### 添加JS代码 (script)

此方法用于在`render`方法执行完毕之前添加`JS`代码

```php
protected function script()
{
	return <<<JS
console.log(\'...\')
JS;
}
```

### 设置目标元素的HTML属性 (setHtmlAttribute)

设置目标元素的`HTML`标签属性

```php
MyAction::make()->setHtmlAttribute(\'name\', $value);

// 批量设置
MyAction::make()->setHtmlAttribute([\'name\' => $value]);

```',
   'order' => 1,
   'created_at' => '2024-06-26 14:58:16',
   'updated_at' => '2024-06-26 14:58:16',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 60,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 7,
   'title' => '数据表格',
   'content' => '# 数据表格动作

## 表格动作基类 (GridAction)
所有数据表格相关的动作类，包括[工具栏按钮](https://learnku.com/docs/dcat-admin/1.x/toolbar/8093)(`AbstractTool`)、
[行操作](https://learnku.com/docs/dcat-admin/1.x/use-and-extension-of-rows/8092)(`RowAction`)、[批量操作](https://learnku.com/docs/dcat-admin/1.x/toolbar/8093#batch)(`BatchAction`)
等等操作按钮的基类都继承自`Dcat\\Admin\\Grid\\GridAction`类，而`GridAction`则继承自[动作类基类](https://learnku.com/docs/dcat-admin/1.x/basic-use/8124)(`Action`)。

下面将介绍`GridAction`类中增加的方法或属性

### 表格实例 (parent)

通过 `parent` 属性可以获取到表格实例 (`Dcat\\Admin\\Grid`)。


下面简单的演示下用法，这段代码没有任何实际意义
```php
use Dcat\\Admin\\Grid\\GridAction

class MyAction extends GridAction
{
    public function html()
    {
        $gridName = $this->parent->getName();
        
        return ...;
    }
    
    ...
}
```

### 表格页面地址 (resource)

通过 `resource` 方法可以获取到表格页面的地址。

下面简单的演示下用法，这段代码没有任何实际意义
```php
use Dcat\\Admin\\Grid\\GridAction

class MyAction extends GridAction
{
    public function html()
    {
        // 假如你的列表页路径为 /admin/users，则这里的值为 http://域名/admin/users    
        $path = $this->resource();
        
        return ...;
    }
    
    ...
}
```

## 工具栏操作按钮基类 (AbstractTool)

表格工具栏按钮基类(`Dcat\\Admin\\Grid\\Tools\\AbstractTool`)继承自`GridAction`类。

下面将介绍`AbstractTool`类中增加的方法或属性

### 按钮样式 (style)

通过 `style` 属性可以设置工具栏按钮的类(`class`)，默认值为 `btn btn-white waves-effect`。


下面简单的演示下用法
```php
use Dcat\\Admin\\Grid\\AbstractTool

class MyTool extends AbstractTool
{
    protected $style = \'btn btn-outline-primary waves-effect\';
    
    ...
}
```


## 批量操作基类 (BatchAction)

表格工具栏按钮基类(`Dcat\\Admin\\Grid\\Tools\\BatchAction`)继承自`GridAction`类。

下面将介绍`BatchAction`类中增加的方法或属性

### 获取选中行的主键数组 (getSelectedKeysScript)

通过 `getSelectedKeysScript` 方法可以生成获取选中的行的主键数组的`JS`代码。


下面简单的演示下用法
```php
use Dcat\\Admin\\Grid\\BatchAction

class MyBatchAction extends BatchAction
{
    /**
     * {@inheritdoc}
     */
    public function actionScript()
    {
        $warning = __(\'No data selected!\');

        return <<<JS
    var key = {$this->getSelectedKeysScript()}
    
    if (key.length === 0) {
        Dcat.warning(\'{$warning}\');
        return ;
    }
    Object.assign(data, {_key:key});
JS;
    }
    
    ...
}
```


## 行操作基类 (RowAction)

表格工具栏按钮基类(`Dcat\\Admin\\Grid\\Tools\\RowAction`)继承自`GridAction`类。

下面将介绍`RowAction`类中增加的方法或属性

### 行数据 (row)

通过 `row` 属性可以获取到当前行数据内容。

下面简单的演示下用法，这段代码没有任何实际意义
```php
use Dcat\\Admin\\Grid\\RowAction

class MyRowAction extends RowAction
{
    public function html()
    {
        // 获取当前行的字段值
        $username = $this->row->username;
        
        // 转化为数组
        $rowArray = $this->row->toArray();
        
        return ...;
    }
    
    ...
}
```

### 主键值 (getKey)

通过 `getKey` 属性方法可以获取到当前行数据的主键值(`ID`)。

下面简单的演示下用法，这段代码没有任何实际意义
```php
use Dcat\\Admin\\Grid\\RowAction

class MyRowAction extends RowAction
{
    public function html()
    {
        $id = $this->getKey();
        
        return ...;
    }
    
    ...
}
```',
   'order' => 2,
   'created_at' => '2024-06-26 14:59:21',
   'updated_at' => '2024-06-26 14:59:21',
   'slug' => 'data-table',
),
            (object) array(
   'id' => 61,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 7,
   'title' => '数据表单',
   'content' => '# 数据表单动作

运行命令

```bash
php artisan admin:action
```

然后输入 `4` 

```bash
 Which type of action would you like to make?:
  [0] default
  [1] grid-batch
  [2] grid-row
  [3] grid-tool
  [4] form-tool
  [5] show-tool
  [6] tree-tool
 > 4 # 输入 4
 
```

接着输入 `Action` 类名称，这里需要输入 `大驼峰` 风格的英文字母

```bash

 Please enter a name of action class:
 > Copy

```

类名输入完成之后会出现以下信息让开发者输入类的命名空间，默认的命名空间是 `App\\Admin\\Actions\\Form`，这里使用默认的就行

```bash

 Please enter the namespace of action class [App\\Admin\\Actions\\Form]:
 > 

```

最后生成文件如下

```php
<?php

namespace App\\Admin\\Actions\\Form;

use Dcat\\Admin\\Actions\\Response;
use Dcat\\Admin\\Form\\AbstractTool;
use Dcat\\Admin\\Traits\\HasPermissions;
use Illuminate\\Contracts\\Auth\\Authenticatable;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Http\\Request;

class Copy extends AbstractTool
{
    /**
     * 按钮标题
     *
     * @return string
     */
	protected $title = \'Title\';

    /**
     * 处理请求，如果不需要接口处理，请直接删除这个方法
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(Request $request)
    {
        // 获取主键
        $key = $this->getKey();
        
        return $this->response()
            ->success(\'Processed successfully.\')
            ->redirect(\'/\');
    }

    /**
     * 如果只是a标签跳转，则在这里返回跳转链接即可
     * 
     * @return string|void
     */
    protected function href()
    {
        // 获取主键
        $key = $this->getKey();
        
        // 获取当前页其他字段
        $username = $this->parent->model()->username;
        
        // return admin_url(\'auth/users\');
    }
    
     // 如果你想自定义动作按钮的HTML，可以重写此方法
    public function html()
    {
        return parent::html();
    }

    /**
     * 确认弹窗信息，如不需要可以删除此方法 
     * 
	 * @return string|array|void
	 */
	public function confirm()
	{
		// return [\'Confirm?\', \'contents\'];
	}

    /**
     * 权限判断，如不需要可以删除此方法 
     * 
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    /**
     * 返回请求接口的参数，如不需要可以删除此方法
     * 
     * @return array
     */
    protected function parameters()
    {
        return [];
    }
}

```

使用

```php
$form->tools(function (Form\\Tools $tools) {
    $tools->append(new Copy());
});
```',
   'order' => 3,
   'created_at' => '2024-06-26 14:59:44',
   'updated_at' => '2024-06-26 14:59:44',
   'slug' => 'data-form',
),
            (object) array(
   'id' => 62,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 7,
   'title' => '数据详情',
   'content' => '# 数据详情动作

运行命令

```bash
php artisan admin:action
```

然后输入 `5` 

```bash
 Which type of action would you like to make?:
  [0] default
  [1] grid-batch
  [2] grid-row
  [3] grid-tool
  [4] form-tool
  [5] show-tool
  [6] tree-tool
 > 5 # 输入 5
 
```

接着输入 `Action` 类名称，这里需要输入 `大驼峰` 风格的英文字母

```bash

 Please enter a name of action class:
 > Copy

```

类名输入完成之后会出现以下信息让开发者输入类的命名空间，默认的命名空间是 `App\\Admin\\Actions\\Show`，这里使用默认的就行

```bash

 Please enter the namespace of action class [App\\Admin\\Actions\\Show]:
 > 

```

最后生成文件如下

```php
<?php

namespace App\\Admin\\Actions\\Show;

use Dcat\\Admin\\Actions\\Response;
use Dcat\\Admin\\Show\\AbstractTool;
use Dcat\\Admin\\Traits\\HasPermissions;
use Illuminate\\Contracts\\Auth\\Authenticatable;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Http\\Request;

class Copy extends AbstractTool
{
    /**
     * 按钮标题
     *
     * @return string
     */
	protected $title = \'Title\';

    /**
     * 处理请求，如果不需要接口处理，请直接删除这个方法
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(Request $request)
    {
        // 获取主键
        $key = $this->getKey();
        
        return $this->response()
            ->success(\'Processed successfully.\')
            ->redirect(\'/\');
    }

    /**
     * 如果只是a标签跳转，则在这里返回跳转链接即可
     * 
     * @return string|void
     */
    protected function href()
    {
        // 获取主键
        $key = $this->getKey();
        
        // 获取当前页其他字段
        $username = $this->parent->model()->username;
        
        // return admin_url(\'auth/users\');
    }
    
     // 如果你想自定义动作按钮的HTML，可以重写此方法
    public function html()
    {
        return parent::html();
    }

    /**
     * 确认弹窗信息，如不需要可以删除此方法 
     * 
	 * @return string|array|void
	 */
	public function confirm()
	{
		// return [\'Confirm?\', \'contents\'];
	}

    /**
     * 权限判断，如不需要可以删除此方法 
     * 
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    /**
     * 返回请求接口的参数，如不需要可以删除此方法
     * 
     * @return array
     */
    protected function parameters()
    {
        return [];
    }
}

```

使用

```php
$show->tools(function (Show\\Tools $tools) {
    $tools->append(new Copy());
});
```',
   'order' => 4,
   'created_at' => '2024-06-26 15:01:30',
   'updated_at' => '2024-06-26 15:01:30',
   'slug' => 'data-detail-action',
),
            (object) array(
   'id' => 63,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 7,
   'title' => '模型树',
   'content' => '# 模型树动作

### 工具栏

运行命令

```bash
php artisan admin:action
```

然后输入 `7` 

```bash
 Which type of action would you like to make?:
  [0] default
  [1] grid-batch
  [2] grid-row
  [3] grid-tool
  [4] form-tool
  [5] show-tool
  [6] tree-row
  [7] tree-tool

 > 7 # 输入 7
```

接着输入 `Action` 类名称，这里需要输入 `大驼峰` 风格的英文字母

```bash

 Please enter a name of action class:
 > Copy

```

类名输入完成之后会出现以下信息让开发者输入类的命名空间，默认的命名空间是 `App\\Admin\\Actions\\Tree`，这里使用默认的就行

```bash

 Please enter the namespace of action class [App\\Admin\\Actions\\Tree]:
 > 

```

最后生成文件如下

```php
<?php

namespace App\\Admin\\Actions\\Tree;

use Dcat\\Admin\\Actions\\Response;
use Dcat\\Admin\\Tree\\AbstractTool;
use Dcat\\Admin\\Traits\\HasPermissions;
use Illuminate\\Contracts\\Auth\\Authenticatable;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Http\\Request;

class Copy extends AbstractTool
{
    /**
     * 按钮标题
     *
     * @return string
     */
	protected $title = \'Title\';

    /**
     * 处理请求，如果不需要接口处理，请直接删除这个方法
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(Request $request)
    {
        return $this->response()
            ->success(\'Processed successfully.\')
            ->redirect(\'/\');
    }

    /**
     * 如果只是a标签跳转，则在这里返回跳转链接即可
     * 
     * @return string|void
     */
    protected function href()
    {
        // return admin_url(\'auth/users\');
    }
    
     // 如果你想自定义动作按钮的HTML，可以重写此方法
    public function html()
    {
        return parent::html();
    }

    /**
     * 确认弹窗信息，如不需要可以删除此方法 
     * 
	 * @return string|array|void
	 */
	public function confirm()
	{
		// return [\'Confirm?\', \'contents\'];
	}

    /**
     * 权限判断，如不需要可以删除此方法 
     * 
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    /**
     * 返回请求接口的参数，如不需要可以删除此方法
     * 
     * @return array
     */
    protected function parameters()
    {
        return [];
    }
}

```

使用

```php
$tree->tools(function (Tree\\Tools $tools) {
    $tools->add(new Copy());
});
```

<a name="row-action"></a>
### 行操作

运行命令

```bash
php artisan admin:action
```

然后输入 `6` 

```bash
 Which type of action would you like to make?:
  [0] default
  [1] grid-batch
  [2] grid-row
  [3] grid-tool
  [4] form-tool
  [5] show-tool
  [6] tree-row
  [7] tree-tool

 > 6 # 输入 6
```

接着输入 `Action` 类名称，这里需要输入 `大驼峰` 风格的英文字母

```bash

 Please enter a name of action class:
 > Copy

```

类名输入完成之后会出现以下信息让开发者输入类的命名空间，默认的命名空间是 `App\\Admin\\Actions\\Tree`，这里使用默认的就行

```bash

 Please enter the namespace of action class [App\\Admin\\Actions\\Tree]:
 > 

```

最后生成文件如下

```php
<?php

namespace App\\Admin\\Actions\\Tree;

use Dcat\\Admin\\Tree\\RowAction;
use Dcat\\Admin\\Actions\\Response;
use Dcat\\Admin\\Traits\\HasPermissions;
use Illuminate\\Contracts\\Auth\\Authenticatable;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Http\\Request;

class Copy extends RowAction
{
    /**
     * @return string
     */
	protected $title = \'Title\';

    /**
     * 处理请求，如果不需要接口处理，请直接删除这个方法 
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(Request $request)
    {
    	// 获取主键
    	$key = $this->getKey();

        return $this->response()
            ->success(\'Processed successfully.\')
            ->redirect(\'/\');
    }

    /**
     * 返回跳转地址，如果不需要可以删除
     * 
     * @return string|void
     */
    protected function href()
    {
        // return admin_url(\'auth/users/\'.$this->getKey());
    }

    /**
     * 确认弹窗信息，如果不需要可以删除 
     * 
	 * @return string|array|void
	 */
	public function confirm()
	{
		// return [\'Confirm?\', \'contents\'];
	}

    /**
     * 权限判断，如果不需要可以删除  
     * 
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }
}
```

使用

```php
$tree->actions(new Copy());
```',
   'order' => 5,
   'created_at' => '2024-06-26 15:02:29',
   'updated_at' => '2024-06-26 15:02:29',
   'slug' => 'model-tree',
),
            (object) array(
   'id' => 64,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 8,
   'title' => '基本使用',
   'content' => '# 多语言基本使用

在`Dcat Admin`中使用多语言翻译非常方便，数据表格、数据表单、数据详情和模型树的字段都支持自动读取语言包翻译，具体可参考[表格字段翻译](https://learnku.com/docs/dcat-admin/1.x/field-translation/8104)、[表单字段翻译](https://learnku.com/docs/dcat-admin/1.x/field-translation/8115)、[数据详情字段翻译](https://learnku.com/docs/dcat-admin/1.x/field-translation/8121)。


## 语言包文件

语言包文件类型大概如下

```bash
resources/lang
    ├── ...
    └── en
        ├── admin.php   # 系统内容语言包
		├── menu.php    # 菜单标题语言包
        ├── global.php  # 控制器公共语言包
        ├── {xxx}.php   # 控制器语言包，一个控制器对应一个语言包
        └── ...         
```


控制器语言包名称需要与控制器名相对应，例如控制器名`UserProfileController`，则对应的语言包为`resources/lang/{当前语言}/user-profile.php`（需要转化为小写中划线风格）。



## 控制器语言包内容格式

控制器语言包（包括`global.php`）中的内容分为三个类别：

- `fields` 数据字段的翻译，这个类别下放置数据字段的翻译
- `labels` 自定义内容翻译，这个类别下是对数据字段外的内容翻译，可以是任何自定义内容
- `options` 枚举选项翻译

下面是例子：


假设控制器语言包`user-profile.php`内容如下：
```php
<?php 

return [
    \'labels\' => [
        \'UserProfile\' => \'用户中心\',
        \'list\'        => \'列表\',
        
        \'pagination\' => [
            \'range\' => \'从 :first 到 :last ，总共 :total 条\',
        ],
    ],
    \'fields\' => [
        \'name\'      => \'名称\',
        \'published\' => \'发布\',
        \'author\'    => \'作者\',
        \'status\'    => \'状态\',
    ],
    \'options\' => [
        \'status\' => [
            0 => \'未激活\',
            1 => \'已激活\',
        ],
    ],
];
```

则语言包可以这么使用

```php
class UserProfileController extend AdminController
{
    // 页面标题翻译，默认会自动读取，不需要指定
    public function title()
    {
        // labels翻译示例，最终翻译成 “用户中心”
        return admin_trans_label(\'UserProfile\');    
    }

    // fields和options翻译示例
    public function grid()
    {
        $grid = new Grid(new UserProfile());
        
        // 显示调用语言包翻译，这里会把 “name” 字段翻译成 “名称”
        $grid->name(admin_trans_field(\'name\'));
        
        // 隐式使用语言包翻译，“author” 字段会自动翻译成 “作者”
        $grid->author;
        
        // 调用options翻译
        $grid->status()->using(admin_trans(\'user-profile.options.status\'));
        
        return $grid;
    }
}
```

### 语言包名称
语言包名称需要与控制器名相对应，假如控制器名`UserProfileController`，则对应的语言包为`resources/lang/{当前语言}/user-profile.php`（需要转化为小写中划线风格）。

如果想要更改语言包的名称，可以通过下面两种方式进行更改

方式1
```php
use Dcat\\Admin\\Http\\Controllers\\AdminController;

class UserController extends AdminController
{
    /**
     * 指定翻译文件名称
     * 
     * @var string 
     */
    protected $translation = \'user1\';
    
    ...
}
```

方式2
```php
use Dcat\\Admin\\Admin;

Admin::translation(\'user1\');
```


## 使用

### admin_trans_field
这个函数用于翻译`fields`类别下内容，会自动找对应控制器下的翻译文件，如果翻译不存在会去找`global.php`中的翻译。
```php
admin_trans_field(\'name\');
```

### admin_trans_label
这个函数用于翻译`labels`类别下内容，会自动找对应控制器下的翻译文件，如果翻译不存在会去找`global.php`中的翻译。
```php
admin_trans_label(\'Posts\');

admin_trans_label(\'pagination.range\', [\'first\' => 1, \'last\' => 1, \'total\' => 0]);
```

### admin_trans_option
这个函数用于翻译`options`类别下内容，会自动找对应控制器下的翻译文件，如果翻译不存在会去找`global.php`中的翻译。
```php
admin_trans_option(1, \'status\');
```

### admin_trans
此方法与`Laravel`框架自带的`trans`方法用法没有区别，唯一的区别是：当翻译的内容找不到时，会去`global.php`中再找一次。
```php
// 先去 user.php 中找 first_name 的翻译，如果找不到会去 global.php 中找
admin_trans(\'user.first_name\');
```

## 公共翻译文件
所有常用的翻译都可以放在`resources/lang/{当前语言}/global.php`中，当控制器翻译文件不存在时会读取公共翻译文件翻译。

```php
<?php

return [
    \'fields\' => [
        \'id\'                    => \'ID\',
        \'name\'                  => \'名称\',
        \'username\'              => \'用户名\',
        \'email\'                 => \'邮箱\',
        \'password\'              => \'密码\',
    ],
    \'labels\' => [
        \'list\'   => \'列表\',
        \'edit\'   => \'编辑\',
        \'detail\' => \'详细\',
        \'create\' => \'创建\',
        \'root\'   => \'顶级\',
        \'scaffold\' => \'代码生成器\',
    ],
    \'options\' => [
    ],
];
```

## 默认面包屑翻译

例如你的访问路径是`/admin/my-users`，控制器是`MyUserController`，那么则可以在控制器对应的翻译文件中加上

```php
return [
 \'labels\' => [ 
     // 跟路由路径相同
     \'my-users\' => \'用户\',
 ], 
 ...
];
```',
   'order' => 1,
   'created_at' => '2024-06-26 15:03:17',
   'updated_at' => '2024-06-26 15:03:17',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 65,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 9,
   'title' => '扩展基本使用',
   'content' => '# 扩展基本使用

## 基本使用

### 扩展安装

`Dcat Admin`中扩展支持以下三种安装方式，安装成功后均能在扩展管理页面`admin/auth/extensions`看到相关扩展信息

#### 1.通过应用市场安装

敬请期待...

#### 2.本地安装

下载扩展的`zip`压缩包，注意必须是`zip`格式，然后打开扩展管理页面`admin/auth/extensions`，然后点击表格工具栏的`本地安装`按钮上传提交即可。

#### 3.composer安装

根据扩展开发者文档提供的说明，直接使用composer安装即可

```bash
composer require {扩展名称}
```

#### 启用扩展

安装之后，需要在扩展管理页面点击 `更新至xxx版本` 以及更新 `启用` 按钮之后方可正常使用


## 开发扩展

详细的开发教程，请参考文档 [开发扩展](https://learnku.com/docs/dcat-admin/2.x/basic-use/8128) 章节。


<a name="service"></a>
### 服务注册与初始化

> {tip} 如果你对服务提供者的概念并不熟悉，请先前往[Laravel文档 - 服务提供者](https://learnku.com/docs/laravel/8.x/providers/9362)学习。

扩展的 `ServiceProvider` 类实际上是一个[服务提供者](https://learnku.com/docs/laravel/8.x/providers/9362)，唯一的区别是扩展的 `ServiceProvider` 不能重写 `boot` 方法，需要通过 `init` 代替 `boot`方法。


<a name="version"></a>
### 版本管理

每个扩展都有一个`version.php`文件，通过这个文件可以实现版本管理功能，每次发布新版本我们只需要往这个文件添加新的版本号以及相关描述即可

```php
<?php

return [
    // key 是版本号，注意这里不要带 v 前缀！
    \'1.0.0\' => [
        \'版本描述信息，可以有多条\',
        \'描述2...\',
        \'create_operation_log.php\', // 版本迁移文件，可以有多条
    ],
    
    \'1.0.1\' => [
        \'版本描述信息，可以有多条\',
        \'update_operation_log.php\', // 版本迁移文件
    ],
    
    ...
];
```


#### 升级版本

安装了新的版本代码之后，可以在扩展管理页面`admin/auth/extensions`中点击更新按钮进行升级。

点击升级后如果有迁移文件则会运行迁移文件，如果有菜单则会重新创建菜单，如果有静态资源则会自动重新发布资源文件。


#### 回滚版本

通过命令 `php artisan admin:ext-rollback {扩展名称} {版本号}` 可以回滚到指定版本，但需要注意的是，回滚扩展会删除数据，可能会导致数据丢失，请谨慎操作！！！

#### 卸载

如果你的扩展已安装，通过扩展页面 `admin/auth/extensions` 可以扩展进行卸载，但需要注意的是，卸载扩展会删除数据，可能会导致数据丢失，请谨慎操作！！！


如果你想完全移除扩展的代码，则直接删除 `dcat-admin-extensions` 目录下对应的扩展文件夹即可。

<a name="view"></a>
### 视图 (view)

视图的默认目录为`扩展目录/resources/view`

```bash
├── resources 
│   ├── ...
│   └── views # 视图目录
│       └── index.blade.php # 视图示例文件
```

只要把视图文件放在上述目录，系统就会自动给视图目录注册别名，别名与扩展名称相同。假设你的扩展包名称为 `dcat-admin/form-step`，则可以通过以下方式加载视图

```php
return view(\'dcat-admin.form-step::index\');
```

<a name="assets"></a>
### 静态资源

假设你的扩展包名称为 `dcat-admin/form-step`，如果你的扩展中包含静态资源如下，那么你可以通过 `FormStepServiceProvider` 上的 `$js` 和 `$css` 属性为你的静态资源注册别名

```php
└── resources 
    └─── assets
      ├── css
      │   └── index.css
      └── js
          └── index.js
```

```php
class FormStepServiceProvider extends ServiceProvider
{
    protected $js = [
        \'js/index.js\',
    ];
    protected $css = [
        \'css/index.css\',
    ];
}
```

然后就可以通过下面的方法加载静态资源

```php
use Dcat\\Admin\\Admin;

// 直接用你的 包名 即可引入扩展包的静态资源
Admin::requireAssets(\'@dcat-admin.form-step\');
```


当然你也可以不通过 `$js` 和 `$css` 属性注册别名，那么也可以用下面的方法直接加载静态资源，效果是一样的

```php
// 上面的写法相当于
Admin::js([\'@dcat-admin.form-step/js/index.js\']);
Admin::css([\'@dcat-admin.form-step/css/index.css\']);
```

### 判断扩展是否启用

判断扩展是否启用：`Admin::extension()->enabled(\'package.name\')`，当扩展不存在或禁用时，返回 `false`；当扩展启用的时返回 `true`。',
   'order' => 1,
   'created_at' => '2024-06-26 15:03:52',
   'updated_at' => '2024-06-26 15:03:52',
   'slug' => 'extended-basic-usage',
),
            (object) array(
   'id' => 66,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 9,
   'title' => '开发扩展',
   'content' => '# 开发扩展


`Dcat Admin`支持安装扩展工具来帮助丰富你的后台功能。
>需要注意的是，`Laravel Admin`原有的扩展无法直接在`Dcat Admin`中使用，但大部分扩展只需要做一些微小的调整就可以正常使用了，有兴趣的同学可以自行移植。

如果大家在使用的过程中有在`Dcat Admin`的基础上添加一些自己的功能或者组件，不妨做成一个`Dcat Admin`扩展，这样可以给其它`Dcat Admin`使用者提供帮助，并且在其它人的使用反馈中的提升扩展的质量。

这篇文档将会以开发一个 [操作日志扩展](https://github.com/dcat-admin/operation-log) 为例，一步一步的教大家开发一个扩展，并且发布给他人使用，最终的效果参考[操作日志扩展](https://github.com/dcat-admin/operation-log)。


## 开始之前

在开始开发扩展之前，如果是`linux`环境，请先手动在项目根目录创建一个`dcat-admin-extensions`目录，并设置可读**可写**权限，扩展文件将会被安装在`dcat-admin-extensions`目录，请保证拥有以下几个目录的读写权限

1. `项目目录/dcat-admin-extensions` 扩展的安装目录，可以根据配置参数 `admin.extensions.dir` 进行更改
2. `public/vendor` 扩展静态资源发布目录
3. `resources/lang` 语言包目录


## 1.创建扩展

`Dcat Admin`的扩展是一个标准的`composer`扩展包，可以通过`composer`安装，也可以通过系统内部的`本地安装`功能直接安装。我们可以通过命令或界面创建一个新的扩展，下面分别简单介绍一下命令和界面创建的方法


1.通过命令创建扩展 

```bash
php artisan admin:ext-make 扩展包名 --namespace=命名空间 --theme
```

命令参数说明

- `name` 扩展包名称，扩展的名称是一个标准的`composer`包名，请统一使用**小写字母** + **中划线(-)**的风格命名，标准的格式如 `dcat-admin/operation-log`，前面一部分可以是个人名称，后面一部分可以是对扩展包功能的概括词语
- `--namespace=` 扩展包命名空间，默认会根据包名自动生成，例如你的包名是`jiangqh/operation-log`，那么默认的命名空间是`Jiangqh/OperationLog`
- `--theme` 是否为主题扩展

那么在当前这个例子中我们运行一下命令生成扩展包

```php
# `--namespace`
php artisan admin:ext-make dcat-admin/operation-log --namespace="Dcat\\Admin\\OperationLog"
```

2.通过管理页面创建扩展

打开扩展管理页面`http://localhost/admin/auth/extensions`，然后点击表格下面第一行的**快速创建**，然后输入扩展包名和命名空间即可，在实际开发中也更推荐大家使用界面创建扩展，这样更方便


扩展创建完成之后可以看到扩展文件夹下多了个`dcat-admin/extensions/dcat-admin/operation-log`目录，目录结构如下
```php
├── README.md
├── composer.json # composer配置文件
├── version.php   # 扩展包版本管理文件
├── logo.png      # logo
├── updates       # 扩展包每个版本对应的表迁移文件
├── resources 
│   ├── lang    # 语言包
│   ├── assets  # 静态资源
│   │   ├── css
│   │   │   └── index.css # css示例文件
│   │   └── js
│   │       └── index.js  # js示例文件
│   └── views
│       └── index.blade.php # 视图示例文件
└── src
    ├── OperationLogServiceProvider.php # 扩展包服务提供者
    ├── Setting.php  # 扩展设置表单
    ├── Models  # 模型目录
    └── Http
        ├── routes.php  # 扩展包路由文件
        ├── Middleware  # 扩展包中间件文件夹
        └── Controllers # 扩展包控制器
            └── OperationLogController.php
```

然后你还可以设置扩展的`logo`以及扩展名称，设置之后会在扩展管理页面展示，让你的扩展更具容易被人记住！

<a name="logo"></a>
### 扩展logo

扩展`logo`必须放在扩展的根目录，并且文件名必须是`logo.png`，建议尺寸`100x100`。

### 扩展名称

扩展名称需要修改`composer.json`里面的`alias`参数，如果不设置则默认展示包名

## 2.启用扩展

扩展创建成功之后就可以在管理页面`http://localhost/admin/auth/extensions` 看到新创建的扩展了，效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/63a6be5ecc4f0c1e0140a12b34f1fde3667bbdabae3ec.png)

然后我们分别点击扩展对应的 `更新至1.0.0版本` 以及 `启用` 按钮，就可以使这个扩展生效了。
新创建的扩展会生成一个默认的控制器，在这个例子中，我们可以尝试访问`http://localhost:8000/admin/operation-log`，如果可以正常访问则说明扩展启用成功。


## 3.功能开发

这个扩展的功能主要是用来记录用户的操作记录，然后提供一个查看记录的页面，然后我们可以把默认创建的扩展文件中用不到的给清理掉，清理后的目录结构如下
```php
├── README.md
├── composer.json # composer配置文件
├── version.php   # 扩展包版本管理文件
├── logo.png      # 扩展包logo
├── updates       # 扩展包每个版本对应的表迁移文件
├── resources 
│   └── lang  # 语言包
└── src
    ├── OperationLogServiceProvider.php # 扩展包服务提供者
    ├── Setting.php  # 扩展设置表单
    ├── Models  # 模型目录
    └── Http
        ├── routes.php  # 扩展包路由文件
        ├── Middleware  # 扩展包中间件文件夹
        └── Controllers # 扩展包控制器
            └── OperationLogController.php
```

接下来就正式进入功能开发部分


### 创建迁移文件 (migration)
首先我们需要创建一个表迁移文件，运行命令 `php artisan make:migration CreateOperationLogTable`，然后写入文件内容如下

```php
<?php

use Illuminate\\Database\\Migrations\\Migration;
use Illuminate\\Database\\Schema\\Blueprint;
use Illuminate\\Support\\Facades\\Schema;

class CreateOperationLogTable extends Migration
{
    // 这里可以指定你的数据库连接
    public function getConnection()
    {
        return config(\'database.connection\') ?: config(\'database.default\');
    }

    public function up()
    {
        if (! Schema::hasTable(\'admin_operation_log\')) {
            Schema::create(\'admin_operation_log\', function (Blueprint $table) {
                $table->bigIncrements(\'id\')->unsigned();
                $table->bigInteger(\'user_id\');
                $table->string(\'path\');
                $table->string(\'method\', 10);
                $table->string(\'ip\');
                $table->text(\'input\');
                $table->index(\'user_id\');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists(\'admin_operation_log\');
    }
}
```

然后把文件移动到 `扩展目录/updates` 目录，并重命名为 `create_opration_log_table.php`。最后我们需要修改扩展的版本管理文件 `扩展目录/version.php`，写入迁移文件的文件名，最终内容如下
```php
<?php

return [
    \'1.0.0\' => [
        \'版本变化描述1\',
        \'版本变化描述2\',
        \'create_opration_log_table.php\', // 迁移文件名称，安装或更新版本时会自动执行
    ],
];
```

关于扩展的版本管理更详细的介绍，请前往[扩展 - 版本管理](extension-f.md#version)章节查看。

### 模型、控制器和路由

创建模型文件 `扩展目录/src/Models/OperationLog`，模型内容点击[OperationLog.php](https://github.com/dcat-admin/operation-log/blob/master/src/Models/OperationLog.php)查看；

然后修改我们的控制器`扩展目录/src/Http/Controllers/OperationLogController.php`，控制器内容点击[LogController.php](https://github.com/dcat-admin/operation-log/blob/master/src/Http/Controllers/LogController.php)查看；

最后需要修改我们的路由文件，尽量让你的路由不与其他路由产生冲突
```php
use Dcat\\Admin\\OperationLog\\Http\\Controllers;
use Illuminate\\Support\\Facades\\Route;

Route::get(\'auth/operation-logs\', Controllers\\OperationLogController::class.\'@index\')->name(\'dcat-admin.operation-log.index\');
Route::delete(\'auth/operation-logs/{id}\', Controllers\\OperationLogController::class.\'@destroy\')->name(\'dcat-admin.operation-log.destroy\');
```

### 语言包

在控制器中，我们可以让一些文本描述支持语言包翻译功能，在这个例子中我们以`en`以及`zh_CN`两种语言为例，在`扩展包/resources/lang`目录下分别创建`en/log.php`和`zh_CN/log.php`文件，并写入以下内容

```php
// en
return [
    \'title\' => \'Operation Log\',
    \'setting_title\' => \'Operation Log\',
];

// zh_CN
return [
    \'title\' => \'操作日志\',
    \'setting_title\' => \'操作日志\',
];
```

最后在控制器中可以通过下面的方法访问语言包内容，关于多语言的更多用法可以参考laravel官方文档

```php
use Dcat\\Admin\\OperationLog\\OperationLogServiceProvider;

OperationLogServiceProvider::trans(\'log.title\');
OperationLogServiceProvider::trans(\'log.setting_title\');
```

### 定义菜单

接下来我们还需要给我们的扩展生成菜单，打开`扩展目录/src/OperationLogServiceProvider.php`，然后修改内容如下

```php
class OperationLogServiceProvider extends ServiceProvider
{
    // 定义菜单
    protected $menu = [
        [
            \'title\' => \'Operation Log\',
            \'uri\'   => \'auth/operation-logs\',
            \'icon\'  => \'\', // 图标可以留空
        ],
    ];

    public function settingForm()
    {
        return new Setting($this);
    }
}
```

如果你想注册带有层级关系的菜单，可以通过下面这种方式注册

```php
// 注册菜单
protected $menu = [
    [
        \'title\' => \'Operation Log\',
        \'uri\'   => \'\',
        \'icon\'  => \'feather icon-x\', 
    ],
    [
        \'parent\' => \'Operation Log\', // 指定父级菜单
        \'title\'  => \'List\',
        \'uri\'    => \'auth/operation-logs\',
    ],
];
```

### 测试扩展

上面的步骤都完成之后，我们可以先开始测试一下上面的功能，验证下是否有错误，然后再进行后续的开发。


由于刚开始创建扩展的时候，我们已经安装并启用了这个扩展，所以此处我们要先**卸载**当前扩展，再重新更新到`1.0.0`版本，这样数据表和菜单才会被创建。

>  **卸载**功能会删除扩展的数据或数据表，请谨慎操作，以免造成数据丢失！！！

打开扩展管理页面`http://域名/admin/auth/extensions`，找到当前扩展，鼠标移动到扩展行，点击 `卸载` 按钮并确认，然后重新点击`更新至1.0.0版本` 以及 `启用` 按钮，
最后 `F5` 刷新浏览器即可看到新创建的菜单，点击菜单可访问操作日志管理页面`admin/auth/operation-logs`。


### 注册中间件

现在我们的扩展还需要一个中间件来记录用户的操作，创建文件 `扩展目录/src/Http/Middleware/LogOperation.php`，文件内容点击[LogOperation.php](https://github.com/dcat-admin/operation-log/blob/master/src/Http/Middleware/LogOperation.php)查看。

然后我们需要注册这个中间件，让这个中间件生效，打开`扩展目录/src/OperationLogServiceProvider.php`，然后修改内容如下

```php
class OperationLogServiceProvider extends ServiceProvider
{
    protected $middleware = [
        \'middle\' => [ // 注册中间件
            LogOperation::class,
        ],
    ];

    protected $menu = [
        [
            \'title\' => \'Operation Log\',
            \'uri\'   => \'auth/operation-logs\',
        ],
    ];

    public function settingForm()
    {
        return new Setting($this);
    }
}
```

`$middleware`属性中注册的中间件最后会合并到配置参数`admin.route.middleware`中，中间件注册支持以下三种类型注册

1. `before` 中间件会在最前面，也就是最先执行
2. `middle` 中间件会在`admin.auth`（登陆鉴权中）和`admin.permission`（权限判断）两个中间件**之间**执行
3. `after`  中间件会在最后执行

在这个例子中，操作日志记录用户操作时显然需要记录登陆用户的信息，所以中间件必须在 `admin.auth` 中间件之后执行，这样才能拿到登陆用户数据；
并且无权限的操作也需要记录，所以必须在 `admin.permission` 中间件之前执行，所以只有注册为 `middle` 类型的中间件才能满足上述要求！

注册完中间件之后，我们随意访问一下系统中的其他页面（除了操作日志管理页面），然后再访问操作日志管理页面，就可以看到用户的操作日志了，到这里插件基本开发完毕。

### 配置参数（设置）

在当前这个例子中，我们需要让用户能配置一些自定义参数（比如配置不需要记录操作日志的路由），所以我们还需要一个 `配置表单` 让用户能通过页面直接配置相关参数，
我们需要在 `OperationLogServiceProvider` 类里面的 `settingForm` 返回这个配置表单的对象

```php
class OperationLogServiceProvider extends ServiceProvider
{
    ...

    // 返回配置表单对象，如果不需要保存配置参数，则请删除这个方法  
    public function settingForm()
    {
        return new Setting($this);
    }
}
```

然后我们需要修改配置表单类 `扩展目录/src/Setting.php` 如下

```php
namespace Dcat\\Admin\\OperationLog;

use Dcat\\Admin\\Extend\\Setting as Form;
use Dcat\\Admin\\OperationLog\\Models\\OperationLog;
use Dcat\\Admin\\Support\\Helper;

class Setting extends Form
{
    // 返回表单弹窗标题
    public function title()
    {
        return $this->trans(\'log.title\');
    }

    // 格式化待保存的配置参数值
    protected function formatInput(array $input)
    {
        // 转化为数组，注意如果这里保存的时候是数组，那么读取出来的时候也是数组
        $input[\'except\'] = Helper::array($input[\'except\']);
        $input[\'allowed_methods\'] = Helper::array($input[\'allowed_methods\']);

        return $input;
    }

    public function form()
    {
        // 定义表单字段
        $this->tags(\'except\');
        $this->multipleSelect(\'allowed_methods\')
            ->options(array_combine(OperationLog::$methods, OperationLog::$methods));
        $this->tags(\'secret_fields\');
    }
}
```

以上设置完成之后我们就可以在扩展管理页面保存自定义参数了

![](http://docs.oneself.icu:10010/storage/markdown/images/a93d92fe4ae33cd353950b5fd1c1318a667bbdbbbc5d1.png)

配置参数读取用法如下，我们可以在中间件 `LogOperation` 中使用这些参数

```php
use Dcat\\Admin\\OperationLog\\OperationLogServiceProvider;

// 读取配置参数
$except = OperationLogServiceProvider::setting(\'except\');
$allowedMethods = OperationLogServiceProvider::setting(\'allowed_methods\');
$secretFields = OperationLogServiceProvider::setting(\'secret_fields\');
```

### 服务注册与初始化

由于当前这个例子中没有使用到服务注册与初始化相关功能，所以这部分内容先略过，有相关需要的同学可以参考[扩展 - 服务注册与初始化](extension-f.md#service)章节。


### 视图 (view)
由于当前这个例子中没有使用到自定义静态资源的功能，所以这部分内容先略过，有相关需要的同学可以参考[扩展 - 视图](https://learnku.com/docs/dcat-admin/2.x/extended-basic-usage/9691#view)章节。


### 静态资源

由于当前这个例子中没有使用到自定义静态资源的功能，所以这部分内容先略过，有相关需要的同学可以参考[扩展 - 静态资源](https://learnku.com/docs/dcat-admin/2.x/extended-basic-usage/9691#assets)章节。


### 修改 composer.json & README.md

代码部分完成之后，需要修改`composer.json`里面的内容，将`description`、`keywords`、`license`、`authors`等内容替换为你的信息，然后不要忘记完善`README.md`，补充使用文档等相关信息。


### 发布扩展


#### 上传应用市场

正式版发布后会上线应用市场功能，开发者可以把扩展发布到应用市场，然后用户就可以通过页面直接安装使用，敬请期待...


<a name="github"></a>
#### 上传到Github
先登录你的Github，创建一个仓库，然后按照页面上的提示把你的代码push上去

```
git init
git remote add origin https://github.com/<your-name>/<your-repository>.git
git add .
git commit -am "Initial commit."
git push origin master
```

<a name="packagist"></a>
#### 发布到Packagist.org
接下来就是发布你的项目到`Packagist.org`，如果没有账号的话，先注册一个，然后打开顶部导航的`Submit`, 填入仓库地址提交

默认情况下，当您推送新代码时，`Packagist.org`不会自动更新，所以，您需要创建一个GitHub服务钩子， 你也可以使用点击页面上的`Update`按钮手动更新它，但我建议自动执行这个过程

提交之后，由于各地的镜像同步时间的延迟，可能在用 `composer` 安装的时候，会暂时找不到你的项目，这个时候可能需要等待同步完成

发布完成之后就可以通过 `composer` 安装你的扩展了',
   'order' => 2,
   'created_at' => '2024-06-26 15:05:39',
   'updated_at' => '2024-06-26 15:05:39',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 67,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '异步加载',
   'content' => '# 异步加载基本使用

> Since `v1.7.0` 异步加载功能支持**静态资源按需加载**的特性，目前内置的**所有组件**都支持使用异步渲染功能，并且支持在页面的**任意位置**中使用

通过异步加载功能可以让页面中的整体或局部组件使用`ajax`异步渲染，从而提高页面加载效率（例如弹窗异步加载表单）。


## 基本用法

下面通过一个简单的示例来演示异步加载功能的用法


先定义一个异步渲染类，继承`Dcat\\Admin\\Support\\LazyRenderable`

```php
<?php

namespace App\\Admin\\Renderable;

use App\\Admin\\Widgets\\Charts\\Bar;
use Dcat\\Admin\\Support\\LazyRenderable;

class PostChart extends LazyRenderable
{
    public function render()
    {
    	// 获取外部传递的参数
    	$id = $this->id;
        
    	// 查询数据逻辑
    	$data = [...];
    	
    	// 这里可以返回内置组件，也可以返回视图文件或HTML字符串
        return Bar::make($data);
	}
}
```

然后需要把渲染类实例传入`Dcat\\Admin\\Widgets\\Lazy`对象中，才能最终实现异步渲染的效果

```php
use App\\Admin\\Renderable\\PostChart;
use Dcat\\Admin\\Widgets\\Lazy;
use Dcat\\Admin\\Layout\\Content;

public function index(Content $content)
{
    // 实例化异步渲染类并传递自定义参数
    $chart = PostChart::make([\'id\' => ...]);
    
	return $content->body(Lazy::make($chart));
}
```

也可以放在内置组件中

> 如果是 `Dcat\\Admin\\Widgets\\Card`、`Dcat\\Admin\\Widgets\\Box`、`Dcat\\Admin\\Widgets\\Modal`、`Dcat\\Admin\\Widgets\\Tab`等组件，则可以略过`Dcat\\Admin\\Widgets\\Lazy`组件，直接传递渲染类实例

```php
use App\\Admin\\Renderable\\PostChart;
use Dcat\\Admin\\Widgets\\Card;
use Dcat\\Admin\\Layout\\Content;

public function index(Content $content)
{
    $chart = PostChart::make([\'id\' => ...]);
    
    // Card 组件支持直接传递 LazyRenderable 实例，可以略过 Lazy 对象
	return $content->body(Card::make($chart));
}

// 如果是 Modal、Box 等等都可以直接略过 Lazy
use Dcat\\Admin\\Widgets\\Modal;

$chart = PostChart::make([\'id\' => ...]);
 
$modal = Modal::make()
	->lg()
	->title(\'标题\')
	->delay(300) // 如果是异步渲染图表则需要设置一个延迟时间，否则可能导致图表渲染异常
	->body($chart);
```

当然也可以放置在视图或者是`HTML`代码中
```php
use App\\Admin\\Renderable\\PostChart;
use Dcat\\Admin\\Widgets\\Lazy;
use Dcat\\Admin\\Layout\\Content;

public function index(Content $content)
{
    $chart = Lazy::make(PostChart::make([\'id\' => ...]));
    
	return $content->body(view(\'admin.xxx\', [\'chart\' => $chart]));
}
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/1e95df9e8cdf05f3bea6921d0bada29b667bbe134062b.gif)


### Dcat\\Admin\\Support\\LazyRenderable

#### 参数传递 (payload)

```php
use App\\Admin\\Renderable\\PostChart;

PostChart::make([\'key1\' => \'值\', ...]);

// 也可以通过 payload 方法传递
PostChart::make()->payload([\'key1\' => \'值\', ...]);
```

获取参数

```php
class PostChart extends LazyRenderable
{
    protected $title = [\'#\', \'标题\', \'内容\'];
    
    public function render()
    {
    	// 获取外部传递的参数
    	$key1 = $this->key1;
    	$key2 = $this->key2;
        
    	...
	}
}
```


#### 载入JS和CSS

异步加载功能同样支持**静态资源按需加载**的特性，并且用法也很简单

```php
<?php

namespace App\\Admin\\Renderable;

use Dcat\\Admin\\Support\\LazyRenderable;
use Dcat\\Admin\\Admin;

class CustomView extends LazyRenderable
{
    // 这里写入需要加载的js和css文件路径
    public static $js = [
    	\'xxx/xxx1.js\',
    	\'xxx/xxx2.js\',     
	];
    
    public static $css = [
        \'xxx/xxx1.css\',
		\'xxx/xxx2.css\', 
	];
    
    protected function addScript()
    {
        Admin::script(
            <<<JS
		console.log(\'JS脚本都加载完了~\');
JS
        );
    }
    
    public function render()
    {
        // 添加你的 JS 代码
        $this->addScript();
        
     	return view(\'admin.custom\', [\'...\']);   
	}
}
```

模板文件代码示例，注意不要包含`body`和`html`等标签

```HTML
<div id="custom" class="custom"><h2>异步加载功能</h2></div>

<script>
Dcat.ready(function () {
    // JS 代码也可以放在模板文件中
    console.log(\'模板文件执行js~\');
});
</script>
```


### Dcat\\Admin\\Widgets\\Lazy

#### onLoad

通过此方法可以监听异步加载完成事件

```php
use App\\Admin\\Renderable\\PostChart;
use Dcat\\Admin\\Widgets\\Lazy;

$chart = Lazy::make(PostChart::make())->onLoad(
	<<<JS
console.log(\'组件渲染完成\');	
JS
);
```

#### load

此方法可以控制是否立即渲染异步组件，默认值是`true`

```php
use App\\Admin\\Renderable\\PostChart;
use Dcat\\Admin\\Widgets\\Lazy;
use Dcat\\Admin\\Admin;

$lazy = Lazy::make(PostChart::make())->load(false);

Admin::script(
	<<<JS
setTimeout(function () {
	// 3秒后自动触发异步渲染事件
	{$lazy->getLoadScript()}
}, 3000);	
JS
);
```

#### JS事件

```php
use App\\Admin\\Renderable\\PostChart;
use Dcat\\Admin\\Widgets\\Lazy;
use Dcat\\Admin\\Admin;

$lazy = Lazy::make(PostChart::make());

Admin::script(
	<<<JS
// 手动触发异步渲染事件	
$(\'{$lazy->getElementSelector()}\').trigger(\'lazy:load\');

// 监听渲染完成事件
$(\'{$lazy->getElementSelector()}\').on(\'lazy:loaded\', function () {
	console.log(\'组件渲染完成了\')
});
JS
);
```


<a name="lazy-table"></a>
## 异步加载数据表格

如果需要异步加载数据表格，则定义渲染类时需要继承`Dcat\\Admin\\Grid\\LazyRenderable`

```php
<?php

namespace App\\Admin\\Renderable;

use Dcat\\Admin\\Grid;
use Dcat\\Admin\\Grid\\LazyRenderable;
use Dcat\\Admin\\Models\\Administrator;

class UserTable extends LazyRenderable
{
    public function grid(): Grid
    {
        return Grid::make(new Administrator(), function (Grid $grid) {
            $grid->column(\'id\');
            $grid->column(\'username\');
            $grid->column(\'name\');
            $grid->column(\'created_at\');
            $grid->column(\'updated_at\');

            $grid->quickSearch([\'id\', \'username\', \'name\']);

            $grid->paginate(10);
            $grid->disableActions();

            $grid->filter(function (Grid\\Filter $filter) {
                $filter->like(\'username\')->width(4);
                $filter->like(\'name\')->width(4);
            });
        });
    }
}
```

使用

```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Widgets\\Modal;
use Dcat\\Admin\\Layout\\Content;

public function index(Content $content)
{
	$modal = Modal::make()
		->lg()
		->title(\'异步加载 - 表格\')
		->body(UserTable::make()) // Modal 组件支持直接传递 渲染类实例
		->button(\'打开表格\');

	return $content->body($modal);
}
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/ca39b97d8a0a1fa62f1cb9fb47ac061c667bbe2c47669.gif)



同样渲染类的实例也可以附加到 `Dcat\\Admin\\Widgets\\Card`、`Dcat\\Admin\\Widgets\\Box`、`Dcat\\Admin\\Widgets\\Tab`等组件中

```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Widgets\\Card;

$table = UserTable::make();

$card = Card::make(\'标题\', $table)->withHeaderBorder();
```

以上代码渲染`UserTable`实例时，其实是底层自动加上了`Dcat\\Admin\\Widgets\\LazyTable`类实例，以上代码等同于

```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Widgets\\Card;
use Dcat\\Admin\\Widgets\\LazyTable;

$table = LazyTable::make(UserTable::make()->simple());

$card = Card::make(\'标题\', $table)->withHeaderBorder();
```

### Dcat\\Admin\\Grid\\LazyRenderable

`Dcat\\Admin\\Grid\\LazyRenderable`用于异步渲染数据表格，是`Dcat\\Admin\\Support\\LazyRenderable`的子类

#### 简化模式

此功能会去除简化一些数据表格默认开启的功能，默认不启用

```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Widgets\\LazyTable;
use Dcat\\Admin\\Layout\\Content;

public function index(Content $content)
{
	$table = UserTable::make()->simple();

	return $content->body(LazyTable::make($table));
}
```

注意，如果把渲染类实例直接注入到`Dcat\\Admin\\Widgets\\Card`、`Dcat\\Admin\\Widgets\\Box`、`Dcat\\Admin\\Widgets\\Tab`和`Dcat\\Admin\\Widgets\\Modal`等组件时，则会自动启用`simple`模式

```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Widgets\\Card;

// 这里会自动启用 simple 模式
$card = Card::make(\'标题\', UserTable::make())->withHeaderBorder();
```

如果你不希望启用 simple 模式，可以传入 LazyTable 实例

```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Widgets\\Card;
use Dcat\\Admin\\Widgets\\LazyTable;

$table = LazyTable::make(UserTable::make());

$card = Card::make(\'标题\', $table)->withHeaderBorder();
```

### Dcat\\Admin\\Widgets\\LazyTable

#### onLoad

通过此方法可以监听异步加载完成事件

```php
use App\\Admin\\Renderable\\PostChart;
use Dcat\\Admin\\Widgets\\Lazy;

$chart = Lazy::make(PostChart::make())->onLoad(
	<<<JS
console.log(\'组件渲染完成\');	
JS
);
```

#### load

此方法可以控制是否立即渲染异步组件，默认值是`true`

```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Widgets\\LazyTable;
use Dcat\\Admin\\Admin;

$lazy = LazyTable::make(UserTable::make())->load(false);

Admin::script(
	<<<JS
setTimeout(function () {
	// 3秒后自动触发异步渲染事件
	{$lazy->getLoadScript()}
}, 3000);	
JS
);
```

#### JS事件

```php
use App\\Admin\\Renderable\\UserTable;
use Dcat\\Admin\\Widgets\\LazyTable;
use Dcat\\Admin\\Admin;

$lazy = LazyTable::make(UserTable::make());

Admin::script(
	<<<JS
// 手动触发异步渲染事件	
$(\'{$lazy->getElementSelector()}\').trigger(\'table:load\');

// 监听渲染完成事件
$(\'{$lazy->getElementSelector()}\').on(\'table:loaded\', function () {
	console.log(\'组件渲染完成了\')
});
JS
);
```


<a name="lazy-form"></a>
## 异步加载工具表单

定义工具表单类，实现`Dcat\\Admin\\Contracts\\LazyRenderable`，并载入`Dcat\\Admin\\Traits\\LazyWidget`这个`trait`

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Contracts\\LazyRenderable;
use Dcat\\Admin\\Traits\\LazyWidget;
use Dcat\\Admin\\Widgets\\Form;

class UserProfile extends Form implements LazyRenderable
{
    use LazyWidget;

    public function handle(array $input)
    {
        return $this->success(\'保存成功\');
    }

    public function form()
    {
        $this->text(\'name\', trans(\'admin.name\'))->required()->help(\'用户昵称\');
        $this->image(\'avatar\', trans(\'admin.avatar\'))->autoUpload();

        $this->password(\'old_password\', trans(\'admin.old_password\'));

        $this->password(\'password\', trans(\'admin.password\'))
            ->minLength(5)
            ->maxLength(20)
            ->customFormat(function ($v) {
                if ($v == $this->password) {
                    return;
                }

                return $v;
            })
            ->help(\'请输入5-20个字符\');
        $this->password(\'password_confirmation\', trans(\'admin.password_confirmation\'))
            ->same(\'password\')
            ->help(\'请输入确认密码\');
    }
}
```


使用


```php
use App\\Admin\\Forms\\UserProfile;
use Dcat\\Admin\\Widgets\\Modal;
use Dcat\\Admin\\Layout\\Content;

public function index(Content $content)
{
	$modal = Modal::make()
		->lg()
		->title(\'异步加载 - 表单\')
		->body(UserProfile::make()) // Modal 组件支持直接传递渲染类实例
		->button(\'打开表单\');

	return $content->body($modal);
}
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/8cb3591badad9f5c398af83d51c0fe10667bbe3a16478.gif)


当然异步表单实例，也可以在其他组件中使用

```php
use App\\Admin\\Forms\\UserProfile;
use Dcat\\Admin\\Widgets\\Lazy;
use Dcat\\Admin\\Widgets\\Card;

$form = UserProfile::make();

// 直接传递到 Card 组件中
$card = Card::make($form);

// 等同于
$card = Card::make(Lazy::make($form));
```


### 传递自定义参数

给异步表单传递参数非常简单，修改上面表单类如下

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Contracts\\LazyRenderable;
use Dcat\\Admin\\Traits\\LazyWidget;
use Dcat\\Admin\\Widgets\\Form;

class UserProfile extends Form implements LazyRenderable
{
    use LazyWidget;

    public function handle(array $input)
    {
        // 获取外部传递的参数
        $key1 = $this->payload[\'key1\'] ?? null;
        $key2 = $this->payload[\'key1\'] ?? null;
        
        return $this->success(\'保存成功\');
    }

    public function form()
    {
        // 获取外部传递的参数
		$key1 = $this->payload[\'key1\'] ?? null;
		$key2 = $this->payload[\'key1\'] ?? null;
        
        $this->text(\'name\', trans(\'admin.name\'))->required()->help(\'用户昵称\');
        $this->image(\'avatar\', trans(\'admin.avatar\'))->autoUpload();

        $this->password(\'old_password\', trans(\'admin.old_password\'));

        $this->password(\'password\', trans(\'admin.password\'))
            ->minLength(5)
            ->maxLength(20)
            ->customFormat(function ($v) {
                if ($v == $this->password) {
                    return;
                }

                return $v;
            })
            ->help(\'请输入5-20个字符\');
        $this->password(\'password_confirmation\', trans(\'admin.password_confirmation\'))
            ->same(\'password\')
            ->help(\'请输入确认密码\');
    }
    
    public function default()
    {
        // 获取外部传递的参数
		$key1 = $this->payload[\'key1\'] ?? null;
		$key2 = $this->payload[\'key1\'] ?? null;
        
        return [
            \'name\' => \'...\',
		];
    }
}
```

传递参数代码如下

```php
// 传递自定义参数
$form = UserProfile::make()->payload([\'key1\' => \'...\', \'key2\' => \'...\']);

$modal = Modal::make()
	->lg()
	->title(\'异步加载 - 表单\')
	->body($form)
	->button(\'打开表单\');
```',
   'order' => 1,
   'created_at' => '2024-06-26 15:07:42',
   'updated_at' => '2024-06-26 15:07:42',
   'slug' => 'asynchronous-loading',
),
            (object) array(
   'id' => 68,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '图表',
   'content' => '# 图表

`Dcat Admin`引入了[apexcharts图表](https://apexcharts.com/)功能，通过`Dcat\\Admin\\Widgets\\ApexCharts\\Chart`这个类可以帮助开发者快速渲染图表。


### 简单用法

如果你需要构建一个图表，可以参考下面的方式

> 更多类型的图表，请参考[apexcharts官方文档](https://apexcharts.com/)。

```php
<?php

namespace App\\Admin\\Widgets\\Charts;

use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Widgets\\ApexCharts\\Chart;

class MyBar extends Chart
{
    public function __construct($containerSelector = null, $options = [])
    {
        parent::__construct($containerSelector, $options);

        $this->setUpOptions();
    }

    /**
     * 初始化图表配置
     */
    protected function setUpOptions()
    {
        $color = Admin::color();

        $colors = [$color->primary(), $color->primaryDarker()];

        $this->options([
            \'colors\' => $colors,
            \'chart\' => [
                \'type\' => \'bar\',
                \'height\' => 430
            ],
            \'plotOptions\' => [
                \'bar\' => [
                    \'horizontal\' => true,
                    \'dataLabels\' => [
                        \'position\' => \'top\',
                    ],
                ]
            ],
            \'dataLabels\' => [
                \'enabled\' => true,
                \'offsetX\' => -6,
                \'style\' => [
                    \'fontSize\' => \'12px\',
                    \'colors\' => [\'#fff\']
                ]
            ],
            \'stroke\' => [
                \'show\' => true,
                \'width\' => 1,
                \'colors\' => [\'#fff\']
            ],
            \'xaxis\' => [
                \'categories\' => [],
            ],
        ]);
    }

    /**
     * 处理图表数据
     */
    protected function buildData()
    {
        // 执行你的数据查询逻辑
        $data = [
            [
                \'data\' => [44, 55, 41, 64, 22, 43, 21]
            ],
            [
                \'data\' => [53, 32, 33, 52, 13, 44, 32]
            ]
        ];
        $categories = [2001, 2002, 2003, 2004, 2005, 2006, 2007];

        $this->withData($data);
        $this->withCategories($categories);
    }

    /**
     * 设置图表数据
     *
     * @param array $data
     *
     * @return $this
     */
    public function withData(array $data)
    {
        return $this->option(\'series\', $data);
    }

    /**
     * 设置图表类别.
     *
     * @param array $data
     *
     * @return $this
     */
    public function withCategories(array $data)
    {
        return $this->option(\'xaxis.categories\', $data);
    }

    /**
     * 渲染图表
     *
     * @return string
     */
    public function render()
    {
        $this->buildData();

        return parent::render();
    }
}
```

使用

```php
<?php

use App\\Admin\\Widgets\\Charts\\MyBar;
use Dcat\\Admin\\Widgets\\Card;
use Dcat\\Admin\\Layout\\Content;

class MyController
{
    public function index(Content $content)
    {
        return $content->body(
            Card::make(\'我的图表\', MyBar::make())
        );
    }
}
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/13086409386f989763e78236045e644c667bbe7851fa9.png)

### 图表与后端API交互

如果你的图表需要与后端API交互，可以参考以下方式

> 为了方便阅读，这里的示例代码直接继承前面定义的`MyBar`类。

```php
<?php

namespace App\\Admin\\Widgets\\Charts;

use Illuminate\\Http\\Request;

class MyAjaxBar extends MyBar
{
    protected $id;
    protected $username;
    
    // 这里的参数一定要设置默认值
    public function __construct($id = null, $username = null) 
    {
        parent::__construct();
        
        $this->id = $id;
        $this->username = $username;
    }
    
    /**
     * 处理请求
     * 如果你的图表类中包含此方法，则可以通过此方法处理前端通过ajax提交的获取图表数据的请求
     *
     * @param Request $request
     * @return mixed|void
     */
    public function handle(Request $request)
    {
        // 获取 parameters 方法设置的自定义参数
        $id = $request->get(\'id\');
        $username = $request->get(\'username\');
        
        switch ((int) $request->get(\'option\')) {
            case 30:
                // 你的数据查询逻辑
                $data = [
                    [
                        \'data\' => [44, 55, 41, 64, 22, 43, 21]
                    ],
                    [
                        \'data\' => [53, 32, 33, 52, 13, 44, 32]
                    ]
                ];
                $categories = [2001, 2002, 2003, 2004, 2005, 2006, 2007];

                break;
            case 28:
                // 你的数据查询逻辑
                $data = [
                    [
                        \'data\' => [44, 55, 41, 64, 22, 43, 21]
                    ],
                    [
                        \'data\' => [53, 32, 33, 52, 13, 44, 32]
                    ]
                ];
                $categories = [2001, 2002, 2003, 2004, 2005, 2006, 2007];

                break;
            case 7:
            default:
                // 你的数据查询逻辑
                $data = [
                    [
                        \'data\' => [44, 55, 41, 64, 22, 43, 21]
                    ],
                    [
                        \'data\' => [53, 32, 33, 52, 13, 44, 32]
                    ]
                ];
                $categories = [2001, 2002, 2003, 2004, 2005, 2006, 2007];
                break;
        }

        $this->withData($data);
        $this->withCategories($categories);
    }

	/**
 	 * 这里返回需要异步传递到 handler 方法的参数 
 	 * 
	 * @return array
	 */
	public function parameters(): array
	{
	    return [
	        \'id\' 	   => $this->id,
	        \'username\' => $this->username,
		];
	}

    /**
     * 这里覆写父类的方法，不再查询数据
     */
    protected function buildData()
    {
    }
}
```

用户点击构建下拉菜单加载不同的图表数据

```php
<?php

use App\\Admin\\Widgets\\Charts\\MyAjaxBar;
use Dcat\\Admin\\Widgets\\Dropdown;
use Dcat\\Admin\\Widgets\\Box;
use Dcat\\Admin\\Layout\\Row;
use Dcat\\Admin\\Layout\\Content;

class MyController
{
    public function index(Content $content)
    {
        return $content->body(function (Row $row) {
            // 构建下拉菜单，当点击菜单时发起请求获取数据重新渲染图表
            $menu = [
                \'7\'  => \'最近7天\',
                \'28\' => \'最近28天\',
                \'30\' => \'最近30天\',
            ];
            $dropdown = Dropdown::make($menu)
                ->button(current($menu))
                ->click()
                ->map(function ($v, $k) {
                    // 此处设置的 data-xxx 属性会作为post数据发送到后端api
                    return "<a class=\'switch-bar\' data-option=\'{$k}\'>{$v}</a>";
                });

			// 传递自定义参数
            $id = ...;
            $username = ...;

            $bar = MyAjaxBar::make($id, $username)
                ->fetching(\'$("#my-box").loading()\') // 设置loading效果
                ->fetched(\'$("#my-box").loading(false)\') // 移除loading效果
                ->click(\'.switch-bar\'); // 设置图表点击菜单则重新发起请求，且被点击的目标元素上的 data-xxx 属性会被作为post数据发送到后端API

            $box = Box::make(\'我的图表2\', $bar)
                ->id(\'my-box\') // 设置盒子的ID
                ->tool($dropdown); // 设置下拉菜单按钮

            $row->column(12, $box);
        });
    }
}
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/ea25c5c7ac930cad4ee58aa0cc0f894f667bbe83a897a.png)


<a href="js"></a>
### 设置图表配置为可执行JS代码

如果你需要在图表配置加入可执行的JS代码，可参考以下方式

```php
use Dcat\\Admin\\Support\\JavaScript;
use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Widgets\\ApexCharts\\Chart;

class MyBar extends Chart
{
    public function __construct($containerSelector = null, $options = [])
    {
        parent::__construct($containerSelector, $options);

        $this->setUpOptions();
    }

    /**
     * 初始化图表配置
     */
    protected function setUpOptions()
    {
        $number = 20;
    
        $this->option(
            \'plotOptions.radialBar.dataLabels.total.formatter\',
            // 这个值最后段代码会作为JS代码执行
            JavaScript::make("function () { return {$number}; }")
        );
        
        ...
    }
    
    ...   
}    
```',
   'order' => 2,
   'created_at' => '2024-06-26 15:08:57',
   'updated_at' => '2024-06-26 15:08:57',
   'slug' => 'chart',
),
            (object) array(
   'id' => 69,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '数据统计卡片',
   'content' => '# 数据统计卡片

`Dcat Admin`中内置了多种常用数据统计卡片，可以非常方便的与后端API交互，下面逐一介绍用法。

## 基础卡片

基础卡片(`Dcat\\Admin\\Widgets\\Metrics\\Card`)是一种默认不显示图表的卡片，也是数据卡片中最简单的一种。

![](http://docs.oneself.icu:10010/storage/markdown/images/af3b9027d46d26f05cab1c3826c22262667bbee2875bc.png)


### 简单示例

基础卡片的使用可参考内置的`App\\Admin\\Metrics\\Examples\\TotalUsers`类。

```php
<?php

namespace App\\Admin\\Metrics\\Examples;

use Dcat\\Admin\\Widgets\\Metrics\\Card;
use Illuminate\\Contracts\\Support\\Renderable;
use Illuminate\\Http\\Request;

class TotalUsers extends Card
{
    /**
     * 卡片底部内容.
     *
     * @var string|Renderable|\\Closure
     */
    protected $footer;
    
    // 保存自定义参数
    protected $data = [];
    
    // 构造方法参数必须设置默认值
    public function __construct(array $data = []) 
    {
        $this->data = [];
        
        parent::__construct();
    }

    protected function init()
    {
        parent::init();

        // 设置标题
        $this->title(\'Total Users\');
        // 设置下拉菜单
        $this->dropdown([
            \'7\' => \'Last 7 Days\',
            \'28\' => \'Last 28 Days\',
            \'30\' => \'Last Month\',
            \'365\' => \'Last Year\',
        ]);
    }

    /**
     * 处理请求.
     *
     * @param Request $request
     *
     * @return void
     */
    public function handle(Request $request)
    {
        // 获取外部传递的自定义参数
        $key1 = $request->get(\'key1\');
        
        switch ($request->get(\'option\')) {
            case \'365\':
                $this->content(mt_rand(600, 1500));
                $this->down(mt_rand(1, 30));
                break;
            case \'30\':
                $this->content(mt_rand(170, 250));
                $this->up(mt_rand(12, 50));
                break;
            case \'28\':
                $this->content(mt_rand(155, 200));
                $this->up(mt_rand(5, 50));
                break;
            case \'7\':
            default:
                $this->content(143);
                $this->up(15);
        }
    }
    
    // 传递自定义参数到 handle 方法
    public function parameters() : array
    {
        return $this->data;
	}

    /**
     * @param int $percent
     *
     * @return $this
     */
    public function up($percent)
    {
        return $this->footer(
            "<i class=\\"feather icon-trending-up text-success\\"></i> {$percent}% Increase"
        );
    }

    /**
     * @param int $percent
     *
     * @return $this
     */
    public function down($percent)
    {
        return $this->footer(
            "<i class=\\"feather icon-trending-down text-danger\\"></i> {$percent}% Decrease"
        );
    }

    /**
     * 设置卡片底部内容
     *
     * @param string|Renderable|\\Closure $footer
     *
     * @return $this
     */
    public function footer($footer)
    {
        $this->footer = $footer;

        return $this;
    }

    /**
     * 渲染卡片内容.
     *
     * @return string
     */
    public function renderContent()
    {
        $content = parent::renderContent();

        return <<<HTML
<div class="d-flex justify-content-between align-items-center mt-1" style="margin-bottom: 2px">
    <h2 class="ml-1 font-large-1">{$content}</h2>
</div>
<div class="ml-1 mt-1 font-weight-bold text-80">
    {$this->renderFooter()}
</div>
HTML;
    }

    /**
     * @return string
     */
    public function renderFooter()
    {
        return $this->toString($this->footer);
    }
}
```

### 基础卡片方法

#### 初始化 (init)

`init`方法会在卡片构造方法中被调用，可用于卡片初始化操作。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
    
        // 你的初始化操作
    }
}
```


#### 设置标题 (title)

通过`title`方法可以在卡片的左上角设置一个标题

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
    
        $this->title(\'活跃用户\');
    }
}
```

#### 设置下拉菜单 (dropdown)

通过`dropdown`方法可以在卡片右上角设置一个下拉菜单按钮，此功能需要结合`handle`方法一起使用才有效果。

```php
class MyCard extend Card
{
    protected function init()
    {
        $this->dropdown([
            \'7\' => \'Last 7 Days\',
            \'28\' => \'Last 28 Days\',
            \'30\' => \'Last Month\',
            \'365\' => \'Last Year\',
        ]);
    }
}
```

#### 设置副标题 (subTitle)

通过`subTitle`方法可以在卡片的又上角设置一个副标题。

> 此方法与`dropdown`方法会有冲突，如果设置过下拉菜单按钮，就不需要设置副标题。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
    
        $this->subTitle(\'最近30天\');
    }
}
```

#### 设置头部内容 (header)

通过`header`方法可以设置卡片头部内容，此方法接受一个参数，可以是`string`、`Closure`，也可以是模板视图(`Illuminate\\Contracts\\Support\\Renderable`)。

> 通过此方法设置的内容与`title`在同一个`div`容器内。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
    
        $this->header(
            <<<HTML
            <div>头部内容</div>        
HTML            
        );
        
        // 也可以传闭包
        $this->header(function () {
            return ...;
        });
        
        // 也可以传视图
        $this->header(view(\'...\'));
    }
}
```

#### 设置主体内容 (content)

通过`content`方法可以设置卡片的内容主体，此方法接受一个参数，可以是`string`、`Closure`，也可以是模板视图(`Illuminate\\Contracts\\Support\\Renderable`)。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
        
        $this->withContent(\'自定义内容\');
    }

    /**
     * 卡片内容
     *
     * @param string $content
     *
     * @return $this
     */
    public function withContent($content)
    {
        return $this->content(
            <<<HTML
<div class="d-flex flex-column flex-wrap text-center">
    <h1 class="font-large-2 mt-2 mb-0">{$content}</h1>
    <small>Tickets</small>
</div>
HTML
        );
    }
}
```

#### 设置高度 (height)

通过`height`方法可以设置卡片的最小高度，默认`165`。

```php
protected function init()
{
    parent::init();
    
    $this->height(200);
}
```


#### 传递自定义参数 (parameters)

通过 `parameters` 方法可以把参数传递到 `handle` 方法

```php
// 传递自定义参数到 handle 方法
public function parameters() : array
{
	return [
		\'key1\' => \'value1\',
		
		...
	];
}
```

获取自定义参数
```php
public function handle(Request $request)
{
    // 获取自定义参数
	$key1 = $request->get(\'key1\');
}
```

#### 渲染内容 (renderContent)

为了保证内容的灵活和可扩展性，系统没有对卡片内容预设任何样式(即设置什么内容就只显示什么内容，没有预设布局或其他样式)，
通过`renderContent`方法即可以更改卡片默认的渲染方式。

以下的例子演示了`renderContent`方法的主要功能
```php
use Dcat\\Admin\\Support\\Helper;

class MyCard extend Card
{
    protected $footer;
    
    protected function init()
    {
        parent::init();
        
        // 设置卡片内容
        $this->content(...);
        // 设置卡片底部内容
        $this->footer(...);
    }
    
    /**
     * 增加此方法设置卡片底部内容
     *
     * @return $this
     */
    public function footer($footer)
    {
        $this->footer = $footer;
        
        return $this;
    }
    
    /**
     * 渲染底部内容
     *
     * @return $this
     */
    public function renderFooter()
    {
        return Helper::render($this->footer);
    }
    
    /**
     * 渲染卡片内容
     * 在这里即可加上卡片底部内容
     *
     * @return string
     */
    public function renderContent()
    {
        $content = parent::renderContent();
        $footer = $this->renderFooter();
    
        return <<<HTML
<div class="card-content">
    <div class="row">
        {$content}
    </div>
    <div class="metric-footer">
        {$footer}
    </div>
</div>
HTML;      
    }
}
```

#### 启用以及渲染图表

基本卡片默认是启用图表功能的，通过`useChart`方法可以启用图表功能，调用此方法之后会实例化一个图表类，然后保存在`chart`属性当中。

当图表启用之后，还需要在你的卡片内容中渲染图表，否则图表虽然被初始化了，但是仍无法显示。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
    
        // 启用图表
        $this->useChart();
    }
    
    /**
     * 渲染卡片内容
     * 需要在这里加上渲染图表的代码
     *
     * @return string
     */
    public function renderContent()
    {
        // 通过 content 方法设置的内容
        $content = parent::renderContent();
        
        // 渲染图表
        $chart = $this->renderChart();
        
        return <<<HTML
    <div class="my-chart">{$chart}</div>
    {$content}    
HTML           
    }
}
```

#### 图表默认配置 (defaultChartOptions)

通过`defaultChartOptions`方法可以设置图表默认配置，此方法只有启用图表之后才有效。

> 这里的图表配置同样支持设置可执行`JS`代码，详细用法请参考[图表配置设置可执行JS代码](https://learnku.com/docs/dcat-admin/2.x/chart/8129#57124c)。

```php
class MyCard extend Card
{
    protected function defaultChartOptions()
    {
        // 返回图表的配置
        return [
            ...
        ];
    }
}
```

#### 设置图表 (chart)

通过`chart`方法可以设置图表配置。

> 这里的图表配置同样支持设置可执行`JS`代码，详细用法请参考[图表配置设置可执行JS代码](widgets-charts.md#js)。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
        
        $this->chart([...]);
    }
}
```

#### 设置图表配置 (chartOption)

通过`chartOption`方法可以设置图表配置，此方法一次只能设置一个参数，支持设置多维参数。

> 这里的图表配置同样支持设置可执行`JS`代码，详细用法请参考[图表配置设置可执行JS代码](widgets-charts.md#js)。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
        
        $this->chartOption(\'stroke.curve\', \'smooth\');
        $this->chartOption(
            \'plotOptions.radialBar.dataLabels.total.formatter\',
            // 这个值最后段代码会作为JS代码执行
            JavaScript::make("function () { return {$number}; }")
        );
    }
}
```

#### 设置图表高度 (chartHeight)

通过`chartHeight`方法可以设置图表的高度，这个方法非常重要，经常需要结合`height`方法一起使用，调整卡片的整体高度。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
        
        $this->chartHeight(150);
    }
}
```

#### 设置图表上间距 (chartMarginTop)

通过`chartMarginTop`方法可以设置图表与上级元素的间距，此方法接受一个`int`类型参数，可以传`负数`。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
        
        $this->chartMarginTop(-10);
    }
}
```

#### 设置图表下间距 (chartMarginBottom)

通过`chartMarginBottom`方法可以设置图表与下级元素的间距，此方法接受一个`int`类型参数，可以传`负数`。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
        
        $this->chartMarginBottom(10);
    }
}
```

#### 设置图表标签 (chartLabels)

通过`chartLabels`方法可以设置图表的标签(`labels`)配置。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
        
        $this->chartLabels(\'标签1\');
        
        // 也可以传递数组
        $this->chartLabels([\'标签1\']);
    }
}
```

#### 设置图表颜色 (chartColors)

通过`chartLabels`方法可以设置图表的颜色(`colors`)配置。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
        
        $this->chartColors(\'#4f41a1\');
        
        // 也可以传递数组
        $this->chartColors([\'#4f41a1\']);
    }
}
```

#### 渲染图表 (renderChart)

通过`renderChart`方法可以渲染图表。

```php
class MyCard extend Card
{
    protected function init()
    {
        parent::init();
    
        // 启用图表
        $this->useChart();
    }
    
    /**
     * 渲染卡片内容
     * 需要在这里加上渲染图表的代码
     *
     * @return string
     */
    public function renderContent()
    {
        // 通过 content 方法设置的内容
        $content = parent::renderContent();
        
        // 渲染图表
        $chart = $this->renderChart();
        
        return <<<HTML
    <div class="my-chart">{$chart}</div>
    {$content}    
HTML           
    }
}
```

## 线性趋势图卡片 (Line)

线性趋势图卡片(`Dcat\\Admin\\Widgets\\Metrics\\Line`)是一个附带了折线\\曲线图的数据统计卡片，继承自基础卡片`Dcat\\Admin\\Widgets\\Metrics\\Card`。


### 示例

可参考内置的`App\\Admin\\Metrics\\Examples\\NewUsers`类。

```php
<?php

namespace App\\Admin\\Metrics\\Examples;

use Dcat\\Admin\\Widgets\\Metrics\\Line;
use Illuminate\\Http\\Request;

class NewUsers extends Line
{
    /**
     * @var string
     */
    protected $label = \'New Users\';

    /**
     * 初始化卡片内容
     *
     * @return void
     */
    protected function init()
    {
        parent::init();

        $this->title($this->label);
        $this->dropdown([
            \'7\' => \'Last 7 Days\',
            \'28\' => \'Last 28 Days\',
            \'30\' => \'Last Month\',
            \'365\' => \'Last Year\',
        ]);
    }

    /**
     * 处理请求
     *
     * @param Request $request
     *
     * @return mixed|void
     */
    public function handle(Request $request)
    {
        $generator = function ($len, $min = 10, $max = 300) {
            for ($i = 0; $i <= $len; $i++) {
                yield mt_rand($min, $max);
            }
        };

        switch ($request->get(\'option\')) {
            case \'365\':
                // 卡片内容
                $this->withContent(mt_rand(1000, 5000).\'k\');
                // 图表数据
                $this->withChart(collect($generator(30))->toArray());
                // 直线
                break;
            case \'30\':
                // 卡片内容
                $this->withContent(mt_rand(400, 1000).\'k\');
                // 图表数据
                $this->withChart(collect($generator(30))->toArray());
                // 直线
                break;
            case \'28\':
                // 卡片内容
                $this->withContent(mt_rand(400, 1000).\'k\');
                // 图表数据
                $this->withChart(collect($generator(28))->toArray());
                // 直线
                break;
            case \'7\':
            default:
                // 卡片内容
                $this->withContent(\'89.2k\');
                // 图表数据
                $this->withChart([28, 40, 36, 52, 38, 60, 55,]);
        }
    }

    /**
     * 设置图表数据.
     *
     * @param array $data
     *
     * @return $this
     */
    public function withChart(array $data)
    {
        return $this->chart([
            \'series\' => [
                [
                    \'name\' => $this->label,
                    \'data\' => $data,
                ],
            ],
        ]);
    }

    /**
     * 设置卡片内容.
     *
     * @param string $content
     *
     * @return $this
     */
    public function withContent($content)
    {
        return $this->content(
            <<<HTML
<div class="d-flex justify-content-between align-items-center mt-1" style="margin-bottom: 2px">
    <h2 class="ml-1 font-large-1">{$content}</h2>
    <span class="mb-0 mr-1 text-80">{$this->label}</span>
</div>
HTML
        );
    }
}
```

### 方法

#### 设置线条为直线 (chartStraight)

```php
use Dcat\\Admin\\Widgets\\Metrics\\Line;

class MyCard extend Line
{
    protected function init()
    {
        parent::init();
        
        $this->chartStraight();
    }
}
```

#### 设置线条为曲线 (chartSmooth)

默认显示的是曲线。

```php
use Dcat\\Admin\\Widgets\\Metrics\\Line;

class MyCard extend Line
{
    protected function init()
    {
        parent::init();
        
        $this->chartSmooth();
    }
}
```

## 圆环图卡片 (Donut)

圆环图卡片(`Dcat\\Admin\\Widgets\\Metrics\\Donut`)是一个附带了圆环图的数据统计卡片，继承自基础卡片`Dcat\\Admin\\Widgets\\Metrics\\Card`。

![](http://docs.oneself.icu:10010/storage/markdown/images/cffcae0c742e7d75794e38b550e7e6d3667bbf0ec3b86.png)

### 示例

可参考内置的`App\\Admin\\Metrics\\Examples\\NewDevices`类。

```php
<?php

namespace App\\Admin\\Metrics\\Examples;

use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Widgets\\Metrics\\Donut;

class NewDevices extends Donut
{
    protected $labels = [\'Desktop\', \'Mobile\'];

    /**
     * 初始化卡片内容
     */
    protected function init()
    {
        parent::init();

        $color = Admin::color();
        $colors = [$color->primary(), $color->alpha(\'blue2\', 0.5)];

        $this->title(\'New Devices\');
        $this->subTitle(\'Last 30 days\');
        $this->chartLabels($this->labels);
        // 设置图表颜色
        $this->chartColors($colors);
    }

    /**
     * 渲染模板
     *
     * @return string
     */
    public function render()
    {
        $this->fill();

        return parent::render();
    }

    /**
     * 写入数据.
     *
     * @return void
     */
    public function fill()
    {
        $this->withContent(44.9, 28.6);

        // 图表数据
        $this->withChart([44.9, 28.6]);
    }

    /**
     * 设置图表数据.
     *
     * @param array $data
     *
     * @return $this
     */
    public function withChart(array $data)
    {
        return $this->chart([
            \'series\' => $data
        ]);
    }

    /**
     * 设置卡片头部内容.
     *
     * @param mixed $desktop
     * @param mixed $mobile
     *
     * @return $this
     */
    protected function withContent($desktop, $mobile)
    {
        $blue = Admin::color()->alpha(\'blue2\', 0.5);

        $style = \'margin-bottom: 8px\';
        $labelWidth = 120;

        return $this->content(
            <<<HTML
<div class="d-flex pl-1 pr-1 pt-1" style="{$style}">
    <div style="width: {$labelWidth}px">
        <i class="fa fa-circle text-primary"></i> {$this->labels[0]}
    </div>
    <div>{$desktop}</div>
</div>
<div class="d-flex pl-1 pr-1" style="{$style}">
    <div style="width: {$labelWidth}px">
        <i class="fa fa-circle" style="color: $blue"></i> {$this->labels[1]}
    </div>
    <div>{$mobile}</div>
</div>
HTML
        );
    }
}
```


### 方法

#### 设置内容宽度 (contentWidth)

通过`contentWidth`方法可以设置文本内容以及图表内容的宽度，默认为`[6, 6]`。

> {tip} 这里的宽度是一个`1-12`之间的一个值。

```php
use Dcat\\Admin\\Widgets\\Metrics\\Line;

class MyCard extend Line
{
    protected function init()
    {
        parent::init();
        
        $this->contentWidth(4, 8);
    }
}
```


## 柱状图卡片 (Bar)


柱状图卡片(`Dcat\\Admin\\Widgets\\Metrics\\Bar`)是一个附带了柱状图的数据统计卡片，继承自基础卡片`Dcat\\Admin\\Widgets\\Metrics\\Card`。

![](http://docs.oneself.icu:10010/storage/markdown/images/bab5a9fc1cea01d36430229d4a4fa6ab667bbf29bb313.png)


### 示例

可参考内置的`App\\Admin\\Metrics\\Examples\\NewDevices`类。

```php
<?php

namespace App\\Admin\\Metrics\\Examples;

use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Widgets\\Metrics\\Bar;
use Illuminate\\Http\\Request;

class Sessions extends Bar
{
    /**
     * 初始化卡片内容
     */
    public function init()
    {
        parent::init();

        $color = Admin::color();

        $dark35 = $color->dark35();

        // 卡片内容宽度
        $this->contentWidth(5, 7);
        // 标题
        $this->title(\'Avg Sessions\');
        // 设置下拉选项
        $this->dropdown([
            \'7\' => \'Last 7 Days\',
            \'28\' => \'Last 28 Days\',
            \'30\' => \'Last Month\',
            \'365\' => \'Last Year\',
        ]);
        // 设置图表颜色
        $this->chartColors([
            $dark35,
            $dark35,
            $color->primary(),
            $dark35,
            $dark35,
            $dark35
        ]);
    }

    /**
     * 处理请求
     *
     * @param Request $request
     *
     * @return mixed|void
     */
    public function handle(Request $request)
    {
        switch ($request->get(\'option\')) {
            case \'7\':
            default:
                // 卡片内容
                $this->withContent(\'2.7k\', \'+5.2%\');

                // 图表数据
                $this->withChart([
                    [
                        \'name\' => \'Sessions\',
                        \'data\' => [75, 125, 225, 175, 125, 75, 25],
                    ],
                ]);
        }
    }

    /**
     * 设置图表数据.
     *
     * @param array $data
     *
     * @return $this
     */
    public function withChart(array $data)
    {
        return $this->chart([
            \'series\' => $data,
        ]);
    }

    /**
     * 设置卡片内容.
     *
     * @param string $title
     * @param string $value
     * @param string $style
     *
     * @return $this
     */
    public function withContent($title, $value, $style = \'success\')
    {
        // 根据选项显示
        $label = strtolower(
            $this->dropdown[request()->option] ?? \'last 7 days\'
        );

        $minHeight = \'183px\';

        return $this->content(
            <<<HTML
<div class="d-flex p-1 flex-column justify-content-between" style="padding-top: 0;width: 100%;height: 100%;min-height: {$minHeight}">
    <div class="text-left">
        <h1 class="font-large-2 mt-2 mb-0">{$title}</h1>
        <h5 class="font-medium-2" style="margin-top: 10px;">
            <span class="text-{$style}">{$value} </span>
            <span>vs {$label}</span>
        </h5>
    </div>

    <a href="#" class="btn btn-primary shadow waves-effect waves-light">View Details <i class="feather icon-chevrons-right"></i></a>
</div>
HTML
        );
    }
}
```


## 多环形图卡片 (Round)

柱状图卡片(`Dcat\\Admin\\Widgets\\Metrics\\Round`)是一个附带了多环形图的数据统计卡片，继承自基础卡片`Dcat\\Admin\\Widgets\\Metrics\\Card`。
![](http://docs.oneself.icu:10010/storage/markdown/images/e693fec57342b8bd387d32ea92d3e07b667bbf352b3a1.png)

### 示例

具体示例与上述卡片的示例大同小异，具体可参考内置的`App\\Admin\\Metrics\\Examples\\ProductOrders`类，这里不再贴出。

## 更多内置卡片

系统还内置了`Dcat\\Admin\\Widgets\\Metrics\\RadialBar`、`Dcat\\Admin\\Widgets\\Metrics\\SingleRound`等卡片，由于用法与上述卡片雷同，这里不再重复贴出代码。

[点击我查看所有内置卡片在线演示](http://103.39.211.179:8080/admin/components/metric-cards)

## 自定义图表卡片

如需自定义卡片，可参考上述内置图表的代码。',
   'order' => 3,
   'created_at' => '2024-06-26 15:13:14',
   'updated_at' => '2024-06-26 15:13:14',
   'slug' => 'data-statistics-card',
),
            (object) array(
   'id' => 70,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '模态窗（Modal）',
   'content' => '# 模态窗 (Modal)

> Since `v1.7.0`

基本使用

```php
use Dcat\\Admin\\Widgets\\Modal;

$modal = Modal::make()
	->lg()
	->title(\'标题\')
	->body(view(...))
	->button(\'<button class="btn btn-primary">点击打开弹窗</button>\');
	
return view(..., [\'modal\' => $modal]);	
```

## 功能

### 标题 (title)

设置弹窗标题

```php
$modal->title(\'标题\');
```

### 内容 (body)

设置弹窗内容，此方法接受一个参数，允许传入`string`、`Cloure`、`Illuminate\\Contracts\\Support\\Renderable`以及`Dcat\\Admin\\Contracts\\LazyRenderable`类型值

```php
// 传入字符串
$modal->body(\'字符串\');

// 传入闭包，注意闭包必须返回字符串类型值或空值
$modal->body(function () {
	return view(...)->render();
});

// 传入 Renderable
use Dcat\\Admin\\Widgets\\

$modal->body(view(...));
$modal->body(Card::make());

// 传入 LazyRenderable
$modal->body(PostTable::make());
```

### 底部内容 (footer)
设置弹窗底部内容，此方法接受一个参数，允许传入`string`、`Cloure`、`Illuminate\\Contracts\\Support\\Renderable`以及`Dcat\\Admin\\Contracts\\LazyRenderable`类型值，用法同上

```php
$modal->footer(\'字符串\');

$modal->footer(view(...));
```

### 尺寸 

默认 `500px`

```php
// 800px
$modal->lg();

// 1140px
$modal->xl();
```

### 按钮 (button)

设置按钮

### 事件监听

支持事件

 - `onShow` 弹窗显示事件
 - `onShown` 弹窗已显示事件
 - `onHide` 弹窗隐藏事件
 - `onHidden` 弹窗已隐藏事件
 
用法示例

```php
use Dcat\\Admin\\Admin;

$modal->onShow(
	<<<JS
console.log(\'显示弹窗\', target, $(this));	
JS
);

$modal->onHide(
	<<<JS
console.log(\'隐藏弹窗\', target, $(this));	
JS
);
``` 
 
### 垂直居中 (centered)

设置弹窗垂直居中

```php
$modal = Modal::make()
    ->xl()
    ->centered() // 设置弹窗垂直居中
    ->title(...)
    ->body(...);
```

### 内容可滚动 (scrollable)

设置弹窗内容可滚动

```php
$modal = Modal::make()
    ->xl()
    ->scrollable() // 设置弹窗内容可滚动
    ->title(...)
    ->body(...);
```

<a name="form"></a>
## 表单弹窗

参考文档 [工具表单 - 弹窗](https://learnku.com/docs/dcat-admin/1.x/tools-form/8125#modal)',
   'order' => 4,
   'created_at' => '2024-06-26 15:13:52',
   'updated_at' => '2024-06-26 15:13:52',
   'slug' => 'modal-window',
),
            (object) array(
   'id' => 71,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '工具表单',
   'content' => '请前往[工具表单](https://learnku.com/docs/dcat-admin/1.x/tools-form/8125)',
   'order' => 5,
   'created_at' => '2024-06-26 15:14:21',
   'updated_at' => '2024-06-26 15:14:21',
   'slug' => 'tools-form',
),
            (object) array(
   'id' => 72,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '下拉菜单',
   'content' => '# 下拉菜单

通过`Dcat\\Admin\\Widgets\\Dropdown`这个类可以快速帮大家构建下拉菜单功能。


### 基本用法

```php
<?php

use Dcat\\Admin\\Widgets\\Dropdown;
use Dcat\\Admin\\Layout\\Content;

class MyController
{
    public function index(Content $content)
    {
        $options = [
            \'名称1\',
            \'名称2\',
            \'名称3\',
            \'名称4\',
            \'名称5\',
        ];
        
        $dropdown = Dropdown::make($options)
            ->button(\'分类导航\') // 设置按钮
            ->buttonClass(\'btn btn-white  waves-effect\') // 设置按钮样式
            ->map(function ($label, $key) {
                // 格式化菜单选项
                $url = admin_url(\'categories/\'.$key);

                return "<a href=\'$url\'>{$label}</a>";
            });
         
        return $content->body($dropdown);
    }
}
```
效果
![](http://docs.oneself.icu:10010/storage/markdown/images/f759a18ee9feb85f18d126cd88332a54667bc03ad969a.png)

### 点击菜单更换按钮文本

`click`方法可以让选中的菜单文本显示在按钮中，做到类似下拉选框的效果。

```php
$options = [
    ...
];

$dropdown = Dropdown::make($options)
    ->button(\'选择\') // 设置按钮
    ->click();
```

### 设置标题

```php
$options1 = [
    \'名称1\',
    \'名称2\',
];

$options2 = [
    \'测试1\',
    \'测试2\',
];

$dropdown = Dropdown::make()
    ->button(\'使用标题\')
    ->options($options1, \'标题1\')
    ->options($options2, \'标题2\');
```
效果
![](http://docs.oneself.icu:10010/storage/markdown/images/79efb14a6bee7cb8704f916e737635fb667bc04641069.png)

### 增加分割线

```php
$options = [
    \'名称1\',
    \'名称2\',
    Dropdown::DIVIDER,
    \'名称3\',
    \'名称4\',
];

$dropdown = Dropdown::make()
    ->button(\'使用分割线\')
    ->options($options)
```
效果
![](http://docs.oneself.icu:10010/storage/markdown/images/feceb87fce2ccfb38d58ce6d6e36516b667bc05267f75.png)


### 自定义按钮

```php
    public function index(Content $content)
    {
        $options = [
            \'名称1\',
            \'名称2\',
            \'名称3\',
            \'名称4\',
            \'名称5\',
        ];
        
        $dropdown = Dropdown::make($options)
            ->map(function ($label, $key) {
                // 格式化菜单选项
                $url = admin_url(\'categories/\'.$key);

                return "<a href=\'$url\'>{$label}</a>";
            });
         
        return $content->body(
            <<<HTML
<div class=\'dropdown\'>
     <button class=\'btn btn-primary dropdown-toggle\' data-toggle=\'dropdown\'>
        <i class=\'feather icon-email\'></i> 自定义按钮 
     </button>
     {$dropdown->render()}
</div>            
HTML            
        );
    }
```

效果

![](http://docs.oneself.icu:10010/storage/markdown/images/b048c2c06842c5a10951b26e08394602667bc064784e8.png)',
   'order' => 6,
   'created_at' => '2024-06-26 15:16:55',
   'updated_at' => '2024-06-26 15:16:55',
   'slug' => 'drop-down-menu',
),
            (object) array(
   'id' => 73,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '单/复选框',
   'content' => '# 单/复选框

## 单选框

通过 `Dcat\\Admin\\Widgets\\Radio`类可以很方便地快速构建单选框表单。

### 基本使用

```php
<?php
use Dcat\\Admin\\Widgets\\Radio;

// 表单 name 属性
$name = \'state\';
// 选项
$options = [
   1 => \'未处理\',
   2 => \'已处理\',
   3 => \'已拒绝\',
];

$radio = Radio::make($name, $options)->check(1); // 选中第一个选项
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/e146c7e34f2f58a98b02f436383b2952667bc0a66e46a.png)


### 显示在同一行 (inline)

```php
<?php
use Dcat\\Admin\\Widgets\\Radio;

$name = \'state\';
$options = [
   1 => \'未处理\',
   2 => \'已处理\',
   3 => \'已拒绝\',
];

$radio = Radio::make($name, $options)->check(1)->inline();
```
效果
![](http://docs.oneself.icu:10010/storage/markdown/images/4556f7ad3960f1b46affcd17da857db4667bc0af947c3.png)

### 设置禁选的选项 (disable)


```php
<?php
use Dcat\\Admin\\Widgets\\Radio;

$name = \'state\';
$options = [
   1 => \'未处理\',
   2 => \'已处理\',
   3 => \'已拒绝\',
];

$radio = Radio::make($name, $options)->inline()->disable([2, 3]);
```
效果
![](http://docs.oneself.icu:10010/storage/markdown/images/5856196fcddc2a76bbdac031589dc80c667bc0ba61345.png)


### 设置样式 (style)

通过`style`方法可以设置单选框的样式，支持`primary`、`info`、`success`、`danger`。

### 设置尺寸

单选框支持3种尺寸，使用方法如下


`small`设置为小尺寸
```php
$radio->small();
```

`large`设置为大尺寸
```php
$radio->large();
```


## 复选框

通过 `Dcat\\Admin\\Widgets\\Checkbox`类可以很方便地快速构建复选框表单，并且复选框类是属于`Radio`的子类，因此用法与`Radio`类基本一致。

### 基本用法

```php
<?php
use Dcat\\Admin\\Widgets\\Checkbox;

// 表单 name 属性，因为此处是多选，所以需要加上中括号
$name = \'hobbies[]\';
// 选项
$options = [
   1 => \'唱\',
   2 => \'跳\',
   3 => \'RAP\',
   4 => \'打篮球\',
];

$checkbox = Checkbox::make($name, $options)
    ->inline()
    ->check([1, 2]); // 这里允许传递数组，默认选中多个选项
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/f252035351006b081f2e0f964a545462667bc0c74f0a1.png)


### 全选

通过`checkAll`方法可以选中全部选项。

```php
<?php
use Dcat\\Admin\\Widgets\\Checkbox;

// 表单 name 属性，因为此处是多选，所以需要加上中括号
$name = \'hobbies[]\';
// 选项
$options = [
   1 => \'唱\',
   2 => \'跳\',
   3 => \'RAP\',
   4 => \'打篮球\',
];

$checkbox = Checkbox::make($name, $options)
    ->inline()
    ->checkAll(); // 全部选中
```

`checkAll`方法也允许全选的同时排除指定选项。

```php
$checkbox = Checkbox::make($name, $options)
    ->inline()
    ->checkAll([1, 3]); // 全部选中，但是排除key为1和3的选项
```

### 更多用法

更多用法与`Radio`的用法一致，这里不再赘述。',
   'order' => 7,
   'created_at' => '2024-06-26 15:18:44',
   'updated_at' => '2024-06-26 15:18:44',
   'slug' => 'single-check-box',
),
            (object) array(
   'id' => 74,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '选项卡',
   'content' => '# 选项卡

通过`Dcat\\Admin\\Widgets\\Tab`方法可以快速构建`tab`选项卡。

### 基本用法

```php
<?php

use Dcat\\Admin\\Widgets\\Tab;

$tab = Tab::make();

// 第一个参数是选项卡标题，第二个参数是内容，第三个参数是是否选中
$tab->add(\'选项卡1\', view(\'...\'), true);
$tab->add(\'选项2\', \'html\');
// 添加选项卡链接
$tab->addLink(\'跳转链接\', \'http://xxx\');

return $content->body($tab->withCard());
```

### 切换显示模式

```php
$tab = Tab::make()->theme();
```

### 垂直 (vertical)

通过`vertical`方法可以让选项卡标题栏呈垂直排列。

```php
<?php

use Dcat\\Admin\\Widgets\\Tab;

$tab = Tab::make();

$tab->add(\'选项卡1\', view(\'...\'));
$tab->add(\'选项2\', \'html\');

return $content->body($tab->withCard()->vertical());
```',
   'order' => 8,
   'created_at' => '2024-06-26 15:19:07',
   'updated_at' => '2024-06-26 15:19:07',
   'slug' => 'tab',
),
            (object) array(
   'id' => 75,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '警告框',
   'content' => '# 警告框

### Alert
基本用法

```php
<?php

use Dcat\\Admin\\Widgets\\Alert;

$alert = Alert::make(\'内容\', \'标题\');

// 类型
$alert->success();
$alert->danger();
$alert->info();
$alert->warning();

// 图标
$alert->icon(\'feather icon-x\');

// 可移除按钮
$alert->removable();
```
效果
![](http://docs.oneself.icu:10010/storage/markdown/images/edce1ccb7c082e17f9030f2bbcef5160667bc11abab0e.png)


### Callout

```php
<?php

use Dcat\\Admin\\Widgets\\Callout;

$callout = Callout::make(\'内容\', \'标题\');

// 颜色
$callout->light();
$callout->primary();

// 可移除按钮
$callout->removable();
```

效果
![](http://docs.oneself.icu:10010/storage/markdown/images/0b3f8ac2c5393ae7afff8a0bb44793ca667bc126b0eef.png)',
   'order' => 9,
   'created_at' => '2024-06-26 15:20:17',
   'updated_at' => '2024-06-26 15:20:17',
   'slug' => 'warning-box',
),
            (object) array(
   'id' => 76,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '提示窗',
   'content' => '# 提示窗

基本用法

```php
<?php

use Dcat\\Admin\\Widgets\\Tooltip;
use Dcat\\Admin\\Widgets\\Card;
use Dcat\\Admin\\Layout\\Content;

class MyController
{
    public function index(Content $content)
    {
        Tooltip::make(\'.icon-help-circle\')->title(\'我是提示信息\');
        
        return $content->body(new Card(
            <<<HTML
<div class="p4">
    <i class="feather icon-help-circle"></i>
</div>
HTML
        ));
    }
}
```
效果
![](http://docs.oneself.icu:10010/storage/markdown/images/d9827047dcfb793ec782af52dc39d84e667bc1592b4f3.png)',
   'order' => 10,
   'created_at' => '2024-06-26 15:20:59',
   'updated_at' => '2024-06-26 15:20:59',
   'slug' => 'prompt-window',
),
            (object) array(
   'id' => 77,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => 'Markdown',
   'content' => '# Markdown

基本用法

```php
<?php

use Dcat\\Admin\\Widgets\\Markdown;
use Dcat\\Admin\\Widgets\\Card;
use Dcat\\Admin\\Layout\\Content;

class MyController
{
    public function index(Content $content)
    {
        return $content->body(Card::make(
            Markdown::make(\'你的markdown本文内容\')
        ));
    }
}
```',
   'order' => 11,
   'created_at' => '2024-06-26 15:21:23',
   'updated_at' => '2024-06-26 15:21:23',
   'slug' => 'markdown',
),
            (object) array(
   'id' => 78,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 10,
   'title' => '卡片',
   'content' => '# 卡片

## Card

```php
<?php

use Dcat\\Admin\\Widgets\\Card;

// 只填充内容，不需要标题
$card = Card::make(view(\'...\'));

// 标题和内容
$card = Card::make(\'标题\', \'内容\');

// 设置间距
$card->padding(\'0 15px 0 12px\');

// 设置工具按钮
$card->tool(\'<button class="btn btn-sm btn-light shadow-none">按钮</button>\');

// 设置底部内容
$card->footer(view(\'...\'));
```

## Box

```php
<?php

use Dcat\\Admin\\Widgets\\Box;

// 标题和内容
$box = Box::make(\'标题\', \'内容\');

// 设置间距
$box->padding(\'0 15px 0 12px\');

// 设置工具按钮
$box->tool(\'<button class="btn btn-sm btn-light shadow-none">按钮</button>\');

// 设置收缩按钮
$box->collapsable();

// 设置移除按钮
$box->removable();
```',
   'order' => 12,
   'created_at' => '2024-06-26 15:21:45',
   'updated_at' => '2024-06-26 15:21:45',
   'slug' => 'card',
),
            (object) array(
   'id' => 79,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 11,
   'title' => '区块基本使用',
   'content' => '# 区块（section）

## 简介

`Dcat Admin`提供`section`功能允许开发者在项目运行时更改页面各个部分的内容，而不需要直接去修改模板。

> {tip} `Dcat Admin`的`section`功能参考了`Blade`模板引擎的`@section`功能和`Wordpress`的`add_filter`功能，如果开发者理解这两者其中之一就能快速上手。

## 使用

### admin_section

输出`section`内容，此函数类似于`Blade`模板中的`@yield`指令以及`WordPress`中的`apply_filters`函数。

参数：
- `$section` {string} 区块名称
- `$default` {string|Closure} 默认值
- `$options` {array} 参数，需要注意的是`key`值必须使用英文字母开头，否则无法被获取到

返回值：
- {string}

```php
echo admin_section(\'navigation\', null, [\'count\' => 4]);
```

### admin_inject_section

注入`section`内容，此函数类似`WordPress`中的`add_filter`函数。

参数：
- `$section` {string} 区块名称
- `$content` {string|Illuminate\\Contracts\\Support\\Renderable|Closure} 区块内容
- `$append` {bool} 默认`true`，是否追加到上一个注入的内容后面，如果传`false`则会替换掉前面注入的内容
- `$priority` {int} 默认`10`，优先级，值越大排序越靠前

当第二个参数传入的是匿名函数时，匿名函数接收一个`Illuminate\\Support\\Fluent`对象。匿名函数中接收一个`Illuminate\\Support\\Fluent`对象，此对象包含有前面注入到此区块的内容，通过`previous`属性可以获得；如果此`section`还有其他参数，也可以通过访问属性的方式获得，如下：

```php
admin_inject_section(\'navigation\', e("<navigation>1</navigation>"));

admin_inject_section(\'navigation\', function ($options) {
    // 获取上一个注入此区块的内容
    $previous = $options->previous;
    
    // 获取自定义参数
    $count = $options->count;

    return e("<navigation>count:{$count}</navigation>");
}, true, 11);

// 输出
echo admin_section(\'navigation\', null, [\'count\' => 4]);
// 最终输出结果为
// <navigation>count:4</navigation><navigation>1</navigation>
```

### admin_inject_default_section

注入默认内容，如果调用了`admin_inject_section`函数注入内容（无论是在前面还是后面都一样），则此函数不生效。

参数：
- `$section` {string} 区块名称
- `$content` {string|Illuminate\\Contracts\\Support\\Renderable|Closure} 区块内容，与`admin_inject_section`的第二个参数一致

```php
admin_inject_default_section(\'navigation\', \'暂无数据\');
```

### admin_has_section

判断是否注入过内容到`section`，此函数返回一个`bool`类型值。
```php
var_dump(admin_has_section(\'navigation\'));
```

### admin_has_default_section

判断是否注入过默认内容到`section`，此函数返回一个`bool`类型值。
```php
var_dump(admin_has_default_section(\'navigation\'));
```

## 系统预定义区块

`Dcat Admin`预定义了一些区块，开发者可以通过这些区块改变页面内容。

所有的预定义区块名称都定义在`Dcat\\Admin\\Admin::SECTION`这个类常量中，通过类常量的方式访问。

### 往&lt;head>标签内输入内容

此通过`Admin::SECTION[\'HEAD\']`区块可以往`<head>`标签内输入内容。

在`app\\Admin\\bootstrap.php`中加入以下代码：
```php
use Dcat\\Admin\\Admin;

admin_inject_section(Admin::SECTION[\'HEAD\'], function () {
    return \'<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>\';
});
```

### 往&lt;body>标签内输入内容

通过`Admin::SECTION[\'BODY_INNER_BEFORE\']`区块可以往`<body>`标签内部的开头位置输入内容。

通过`Admin::SECTION[\'BODY_INNER_AFTER\']`区块可以往`<body>`标签内部的结束位置输入内容。


### 往&lt;div id="app">标签内输入内容

通过`Admin::SECTION[\'APP_INNER_BEFORE\']`区块可以往`<div id="app">`标签内部的开头位置输入内容。

通过`Admin::SECTION[\'APP_INNER_AFTER\']`区块可以往`<div id="app">`标签内部的结束位置输入内容。

### 更改顶部导航栏用户信息面板内容

通过`Admin::SECTION[\'NAVBAR_USER_PANEL\']`区块可以更改顶部导航栏的用户信息面板内容。

```php
admin_inject_section(Admin::SECTION[\'NAVBAR_USER_PANEL\'], view(\'admin::partials.navbar-user-panel\'));
```

### 更改顶部导航栏用户信息面板后面内容

通过`Admin::SECTION[\'NAVBAR_AFTER_USER_PANEL\']`区块可以更改顶部导航栏的用户信息面板后面的内容。

```php
admin_inject_section(Admin::SECTION[\'NAVBAR_AFTER_USER_PANEL\'], function () {
    return <<<HTML
    <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
    </li>
HTML;    
});
```

### 更改顶部导航栏前面内容

```php
admin_inject_section(Admin::SECTION[\'NAVBAR_BEFORE\'], view(\'...\'));
```
### 更改顶部导航栏后面内容

```php
admin_inject_section(Admin::SECTION[\'NAVBAR_AFTER\'], view(\'...\'));
```

### 更改菜单栏用户信息面板内容

通过`Admin::SECTION[\'LEFT_SIDEBAR_USER_PANEL\']`区块可以更改菜单栏的用户信息面板的内容。
```php
 admin_inject_section(Admin::SECTION[\'LEFT_SIDEBAR_USER_PANEL\'], view(\'admin::partials.sidebar-user-panel\'));
```

### 更改菜单栏

通过`Admin::SECTION[\'LEFT_SIDEBAR_MENU\']`可以更改整个菜单栏内容。
> {tip} `Dcat Admin`的菜单是通过注入默认内容到`LEFT_SIDEBAR_MENU`区块构建的，开发者可以替换掉系统默认的菜单渲染逻辑。

```php
use Dcat\\Admin\\Support\\Helper;
use Dcat\\Admin\\Admin;

admin_inject_section(Admin::SECTION[\'LEFT_SIDEBAR_MENU\'], function () {
    $menuModel = config(\'admin.database.menu_model\');
	
	$builder = Admin::menu();

	$html = \'\';
	foreach (Helper::buildNestedArray((new $menuModel())->allNodes()) as $item) {
		$html .= view(\'admin::partials.menu\', [\'item\' => $item, \'builder\' => $builder])->render();
	}

	return $html;
});
```',
   'order' => 1,
   'created_at' => '2024-06-26 15:22:32',
   'updated_at' => '2024-06-26 15:22:32',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 80,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 12,
   'title' => '动作以及表单响应',
   'content' => '# 动作以及表单响应

[动作](https://learnku.com/docs/dcat-admin/2.x/basic-use/8124)、[数据表单](https://learnku.com/docs/dcat-admin/2.x/basic-use/8105)以及[工具表单](https://learnku.com/docs/dcat-admin/2.x/tools-form/8125)的响应方法都是同一套方法。

在类中可以通过 `$this->response()` 获取到 `Dcat\\Admin\\Http\\JsonResponse`对象并响应数据到前端

```php
return $this->response()->success(\'成功！\');

// 等同于
use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Http\\JsonResponse;

return JsonResponse::make()->success(\'成功！\');

return Admin::make()->success(\'成功！\');
```

### 功能
下面介绍一下 `JsonResponse` 的主要用法

#### 展示成功信息

此方法接收一个`string`类型参数

```php
$this->response()->success(\'成功！\');
```

#### 展示错误信息

此方法接收一个`string`类型参数

```php
$this->response()->error(\'出错了！\');
```

#### 展示警告信息

此方法接收一个`string`类型参数

```php
$this->response()->warning(\'警告\');
```

#### 跳转

此方法接收一个`string`类型参数，可以与`success`、`error`、`warning`等方法同时使用

```php
$this->response()->redirect(\'auth/users\');
```

#### 跳转 (location)

`1`秒后自动跳转（非局部刷新），此方法接收一个`string`类型参数

```php
$this->response()->success(\'操作成功\')->location(\'auth/users\');
```

如果不传参则刷新当前页面

```php
$this->response()->success(\'操作成功\')->location();
```

#### 刷新当前页面

此方法可以与`success`、`error`、`warning`等方法同时使用

```php
$this->response()->success(\'xxx\')->refresh();
```

#### 下载

此方法接收一个`string`类型参数

```php
$this->response()->download(\'auth/users?_export_=1\');
```

#### 展示确认弹窗

```php
// 成功
$this->response()->alert(true)->success(\'...\')->detail(\'详细内容\');

// 错误
$this->response()->alert(true)->error(\'...\')->detail(\'详细内容\');

// 警告
$this->response()->alert(true)->warning(\'...\')->detail(\'详细内容\');

// 提示
$this->response()->alert(true)->info(\'...\')->detail(\'详细内容\');
```

#### 返回HTML

此方法可接收一个`string`、`Renderable`、`Htmlable`类型参数，可以与`success`、`error`、`warning`等方法同时使用

> {tip} 响应的`HTML`字符默认会被置入动作按钮元素上，如果需要自己控制，则覆写[handleHtmlResponse](#handleHtmlResponse)方法即可。

```php
$this->response()->html(\'<a>a标签</a>\');

$this->response()->html(view(\'...\'));
```

#### 执行JS代码

此方法接收一个`string`类型参数，可以与`success`、`error`、`warning`等方法同时使用

```php
$this->response()->script(
 <<<JS
    console.log(\'response\', response, target); 
JS 
);
```

### 根据条件判断是否调用

上面所有功能接口都支持`if`模式，如

```php
// 如果 $condition 的值为 真，则调用 refresh 方法
$this->response()->success(...)->refreshIf($condition);
$this->response()->success(...)->locationIf($condition, \'auth/users\');

// $condition 也可以是闭包
$this->response()->success(...)->refreshIf(function () {
    return true;
});
```',
   'order' => 1,
   'created_at' => '2024-06-26 15:23:07',
   'updated_at' => '2024-06-26 15:23:07',
   'slug' => 'action-and-form-response',
),
            (object) array(
   'id' => 81,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 13,
   'title' => '权限控制',
   'content' => '# 权限控制

`Dcat Admin`已经内置了`RBAC`权限控制模块，展开左侧边栏的`Auth`，下面有用户、角色、权限三项的管理面板，权限控制的使用如下：

## 路由控制

在`Dcat Admin`中，权限和路由是绑定在一起的，在编辑权限页面里面设置当前权限能访问的路由，在`HTTP方法`select框中选择访问路由的方法，在`HTTP路径`中填写能访问的路径。

比如要添加一个权限，该权限可以以`GET`方式访问路径`/admin/users`，那么`HTTP方法`选择`GET`，`HTTP路径`填写`/users`。

如果要访问前缀是`/admin/users`的所有路径，那么`HTTP路径`填写`/users*`；如果要访问的是编辑页，那么`HTTP路径`填写`/users/*/edit`；如果多个路径中每个路径的方法不同，那么`HTTP路径`填写`GET:users/*`。

> Since `v1.7.0`

如果上述的方法不能满足需求，`HTTP路径`还支持填写路由别名，如`admin.users.show`


## 禁用权限功能

>  Since `v1.5.3`

把`admin.auth.enable`配置参数的值设置为`false`可以完全禁用内置的权限系统。

## 跳过权限验证

可以把需要跳过权限验证的接口加入到配置文件`admin.permission.except`参数中

```php
	\'permission\' => [
		// Whether enable permission.
		\'enable\' => true,

		// All method to path like: auth/users/*/edit
		// or specific method to path like: get:auth/users.
		\'except\' => [
			\'/\',
			\'auth/login\',
			\'auth/logout\',
			\'auth/setting\',
		],

	],
```

## 页面控制

如果你要在页面中控制用户的权限，可以参考下面的例子

### 场景1

比如现在有一个场景，对文章发布模块做权限管理，以创建文章为例

首先创建一项权限，进入`http://localhost/admin/auth/permissions`，权限标识（slug）填写`create-post`，权限名称填写`创建文章`，这样权限就创建好了。

第二步可以把这个权限直接附加给个人或者角色，在用户编辑页面可以直接把上面创建好的权限附加给当前编辑用户，也可以在编辑角色页面附加给某个角色。

第三步，在创建文章控制器里面添加控制代码：
```php
use Dcat\\Admin\\Http\\Auth\\Permission;

class PostController extends Controller
{
    public function create()
    {
        // 检查权限，有create-post权限的用户或者角色可以访问创建文章页面
        Permission::check(\'create-post\');
    }
}
```
这样就完成了一个页面的权限控制。

### 场景2

如果你要在表格中控制用户对元素的显示，那么需要先定义两个权限，比如权限标示`delete-image`、和`view-title-column`分别用来控制有删除图片的权限和显示某一列的权限，把这两个权限赋给你设置的角色，然后在grid中加入代码：
```php
$grid->actions(function ($actions) {

    // 没有`delete-image`权限的角色不显示删除按钮
    if (!Admin::user()->can(\'delete-image\')) {
        $actions->disableDelete();
    }
});

// 只有具有`view-title-column`权限的用户才能显示`title`这一列
if (Admin::user()->can(\'view-title-column\')) {
    $grid->column(\'title\');
}
```

## 相关方法

获取当前用户对象
```php
Admin::user();
```

获取当前用户id
```php
Admin::user()->id;
```

获取用户角色
```php
Admin::user()->roles;
```

获取用户的权限
```php
Admin::user()->permissions;
```

用户是否有某个角色
```php
Admin::user()->isRole(\'developer\');
```

是否有某个权限
```php
Admin::user()->can(\'create-post\');
```

是否没有某个权限
```php
Admin::user()->cannot(\'delete-post\');
```

是否是超级管理员
```php
Admin::user()->isAdministrator();
```

是否是其中的角色
```php
Admin::user()->inRoles([\'editor\', \'developer\']);
```

## 权限中间件

可以在路由配置上结合权限中间件来控制路由的权限

```php

// 允许administrator、editor两个角色访问group里面的路由
Route::group([
    \'middleware\' => \'admin.permission:allow,administrator,editor\',
], function ($router) {

    $router->resource(\'users\', UserController::class);
    ...
    
});

// 禁止developer、operator两个角色访问group里面的路由
Route::group([
    \'middleware\' => \'admin.permission:deny,developer,operator\',
], function ($router) {

    $router->resource(\'users\', UserController::class);
    ...
    
});

// 有edit-post、create-post、delete-post三个权限的用户可以访问group里面的路由
Route::group([
    \'middleware\' => \'admin.permission:check,edit-post,create-post,delete-post\',
], function ($router) {

    $router->resource(\'posts\', PostController::class);
    ...
    
});
```

权限中间件和其它中间件使用方法一致。

## 为何配置了角色和权限，依然提示无权访问？

这个原因可能是由于权限的`URL`路径配置错误导致的，正确的包含增删改查功能的`URL`配置应该是`auth/users*`这样的，如果你配置成了`auth/users/*`，那么就会提示无权访问。

> 另外标签表单填写自定义URL有两种方法：一种是选中后按`删除键`进行更改；另一种是填写后按`空格键` + `回车键`。',
   'order' => 1,
   'created_at' => '2024-06-26 15:23:48',
   'updated_at' => '2024-06-26 15:23:48',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 82,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 14,
   'title' => '菜单基本使用',
   'content' => '# 菜单

`Dcat Admin`的菜单是保存在数据表`admin_menu`上的，开发者可以在后台菜单管理页面对菜单进行管理。

### 菜单权限
每个菜单都可以与权限或角色进行绑定，如果不设置则为公共菜单，所有账号都能看到。

通过`admin.menu.bind_permission`配置参数可以设置是否允许绑定权限。


### 菜单翻译
在您的语言文件的menu_titles索引中追加菜单标题。 例如“工作单位”标题：

在`resources/lang/{当前语言}/menu.php`中
```php
...
\'titles\' => [
    \'work_units\' => \'Unidades de trabajo\'
],
```

### 菜单缓存
通过`admin.menu.cache.enable`配置参数可以开启或关闭菜单缓存，建议开启。

### 通过Menu::add接口动态添加菜单
`Dcat Admin`还提供了通过数组的方式在代码中即时添加菜单。

在`app\\Admin\\bootstrap.php`中添加如下代码：
```php
<?php
use Dcat\\Admin\\Admin;
use Dcat\\Admin\\Layout\\Menu;

Admin::menu(function (Menu $menu) {
    $menu->add([
        [
            \'id\'            => \'1\', // 此id只要保证当前的数组中是唯一的即可
            \'title\'         => \'测试菜单\',
            \'icon\'          => \'fa-file-text-o\',
            \'uri\'           => \'\',
            \'parent_id\'     => 0, 
            \'permission_id\' => \'test\', // 与权限绑定
            \'roles\'         => \'test-roles\', // 与角色绑定
        ],  
        [
            \'id\'            => \'2\', // 此id只要保证当前的数组中是唯一的即可
            \'title\'         => \'测试菜单2\',
            \'icon\'          => \'fa-file-text-o\',
            \'uri\'           => \'test-menu2\',
            \'parent_id\'     => \'1\', 
        ],  
    ]);
});

```
### 为何没有权限的菜单不会自动隐藏？

这个问题是因为你没有给菜单绑定权限或者角色，给你想要无权不显示的菜单绑定权限或者角色即可。',
   'order' => 1,
   'created_at' => '2024-06-26 15:24:21',
   'updated_at' => '2024-06-26 15:24:21',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 83,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 15,
   'title' => '帮助函数',
   'content' => '# 帮助函数

### admin_redirect
> Since `v2.1.7-beta`

跳转到指定`url`，此函数可用于代替`redirect`函数，支持`pjax`以及`ajax`请求

```php
// 不需要添加admin前缀
return admin_redirect(\'auth/users\');

// 如果想要跳转到非admin前缀的链接，需要传递完整url链接
return admin_redirect(url(\'users\'));
```


### admin_exit

`admin_exit` 用于中断程序执行，并响应数据到浏览器进行显示，用于代替 `exit` 和 `die`，下面简单介绍下用法


用法1，返回 `Content` 布局对象，此用法可用于返回错误信息显示到前端
```php
use Dcat\\Admin\\Widgets\\Alert;
use Dcat\\Admin\\Layout\\Content;

// 中断程序，并显示自定义页面到前端
admin_exit(
    Content::make()
        ->title(\'标题\')
        ->description(\'描述\')
        ->body(\'页面内容1\')
        ->body(Alert::make(\'服务器出错了~\', \'Error\')->danger())
);
```

效果如下

![](http://docs.oneself.icu:10010/storage/markdown/images/8545dfca9aa2a5714290761c71b20ee6667bc25b05cff.png)

用法2，返回 `json` 格式数据，此用法经常用于表单提交数据的`api`请求拦截，或`Action`的`api`请求拦截

```php
use Dcat\\Admin\\Admin;

admin_exit(
    Admin::json()
        ->success(\'成功了\')
        ->refresh()
        ->data([
            ...
        ])
);

// 当然也可以直接响应数组
admin_exit([
   ...
]);
```

用法3，直接响应`Response`对象或字符串

```php
admin_exit(\'Hello world\');

admin_exit(response(\'Hello world\', 500));
```

### admin_color

获取内置颜色，关于主题颜色更多用法请参考[主题 - 颜色](theme.md#color)章节

```php
// 获取主题色的三种方式
$primary = admin_color(\'primary\');
$primary = admin_color()->get(\'primary\');
$primary = admin_color()->primary();

$color = admin_color();
$color->lighten(\'primary\', 10);
```

### admin_js

可以在任意位置引入`js`文件，更多用法参考[静态资源](assets.md)章节

```php
admin_js([\'@admin/xxx.js\']);
```

### admin_css

可以在任意位置引入`css`文件，更多用法参考[静态资源](assets.md)章节

```php
admin_css([\'@admin/xxx.css\']);
```

### admin_require_assets

可以在任意位置引入静态资源组件，更多用法参考[静态资源](assets.md)章节

```php
admin_require_assets([\'@datime\']);
```


### admin_path

获取`Dcat Admin`安装的应用路径，默认目录是`app/Admin`：

```php
$bootstrap = admin_path(\'bootstrap.php\');
```

### admin_url

获取`Dcat Admin`应用的路由完整url：

```php
// 返回： http://localhost/admin/auth/users
$url = admin_url(\'auth/users\');
```

### admin_route

根据别名获取URL

`app/Admin/routes.php`路由注册如下
```php
Route::group([
    \'prefix\'        => config(\'admin.route.prefix\'),
    \'namespace\'     => config(\'admin.route.namespace\'),
    \'middleware\'    => config(\'admin.route.middleware\'),
], function (Router $router) {
	// 设置别名
	$router->resource(\'users\', \'UserController\', [
	    \'names\' => [\'index\' => \'my-users\'],
	]);

});
```

根据别名获取URL

```php
// 获取url
$url = admin_route(\'users\');

// 获取url并附带请求参数
$url = admin_route(\'users\',[\'id\'=>1]);

// 判断路由
$isUsers = request()->routeIs(admin_route_name(\'users\'));
```

### admin_base_path

获取`Dcat Admin`应用的路由路径：
```php
// 返回： /admin/auth/users
$path = admin_base_path(\'auth/users\');
```

### admin_toastr

在页面刷新后弹出一个`toastr`提示窗，参数：

- `$message` 提示窗内容
- `$type` 提示窗类型，默认`success`，支持`success`、`info`、`warning`、`error`
- `$options` toastr配置参数

```php
admin_toastr(\'更新成功\', \'success\');
```

### admin_success

在页面刷新后在页面顶部显示一个成功消息：
```php
admin_success(\'标题\', \'成功了\');
```

### admin_error

在页面刷新后在页面顶部显示一个错误消息：
```php
admin_error(\'标题\', \'失败了\');
```

### admin_warning

在页面刷新后在页面顶部显示一个警告消息：
```php
admin_warning(\'标题\', \'警告\');
```

### admin_info

在页面刷新后在页面顶部显示一个提示消息：
```php
admin_info(\'标题\', \'内容\');
```

### admin_asset

获取静态资源的完整链接：

> {tip} 此函数支持别名.

```html
// 引入css
<link rel="stylesheet" href="{{ admin_asset("@admin/dcat-admin/main.min.css") }}">

// 引入js
<script src="{{ admin_asset(\'@admin/dcat-admin/main.min.js\')}}"></script>
```

### admin_trans_field

翻译当前控制器的字段，控制器名称去除`Controller`后缀之后再转化为小写中划线就是语言包的名称，如：控制器名称为`UserProfileController`，则对应的语言包名称为`user-profile.php`。

> {tip} 如果当前控制器对应的语言包中不存在该字段翻译，则会去公共翻译文件`global.php`中查找。

```php
$name = admin_trans_field(\'name\');
$createdAt = admin_trans_field(\'created_at\');
```
语言包内容如下：
```php
return [
    \'fields\' => [
        \'name\' => \'名称\',
        \'created_at\' => \'创建时间\',
    ],
];
```


### admin_trans_label

翻译当前控制器的自定义内容，控制器名称去除`Controller`后缀之后再转化为小写中划线就是语言包的名称，如：控制器名称为`UserProfileController`，则对应的语言包名称为`user-profile.php`。

> {tip} 如果当前控制器对应的语言包中不存在该字段翻译，则会去公共翻译文件`global.php`中查找。

```php
$user = admin_trans_label(\'User\');
```
语言包内容如下：
```php
return [
    \'labels\' => [
        \'User\' => \'管理员\',
    ],
];
```

### admin_trans_option

翻译当前控制器的字段选项值，控制器名称去除`Controller`后缀之后再转化为小写中划线就是语言包的名称，如：控制器名称为`UserProfileController`，则对应的语言包名称为`user-profile.php`。

> 如果当前控制器对应的语言包中不存在该字段翻译，则会去公共翻译文件`global.php`中查找。

```php
$status = admin_trans_option(1, \'status\');
```
语言包内容如下：
```php
return [
    \'options\' => [
        \'status\' => [
            1 => \'启用\',
            0 => \'禁用\'
        ],
    ],
];
```',
   'order' => 1,
   'created_at' => '2024-06-26 15:25:22',
   'updated_at' => '2024-06-26 15:25:22',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 84,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 16,
   'title' => '基本使用',
   'content' => '# 开发工具

`Dcat Admin`提供了一些开发工具以帮助开发者提升开发效率。
如果需要禁用开发工具，则把配置文件中的`app.debug`或`admin.helpers.enable`的参数值设置为`false`即可。


### 代码生成器

代码生成器可以通过界面一键生成增删改查代码，支持根据已有数据表生成增删改查代码，打开浏览器访问`http://localhost:8000/admin/helpers/scaffold`即可使用。

> 如果你的开发环境不是`windows`系统，请给整个项目`777`权限，否则可能无法生成文件。


### 扩展包管理
`Dcat Admin`支持可视化管理扩展包，只要通过`composer`安装进来的扩展包都能在管理界面中看到，支持通过界面启用和导入扩展包，打开浏览器访问`http://localhost:8000/admin/helpers/extensions`即可使用。

### IDE自动补全
通过`php artisan admin:ide-helper`命令可以生成IDE自动补全文件，可以生成`Grid`、`Form`、`Show`等功能的IDE自动补全提示文件。

### 图标
访问`http://localhost:8000/admin/helpers/icons`可以查看已支持的图标列表。',
   'order' => 1,
   'created_at' => '2024-06-26 15:26:04',
   'updated_at' => '2024-06-26 15:26:04',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 85,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 17,
   'title' => '自定义登录',
   'content' => '# 自定义登录
### 重写登录页面和登录逻辑

方式一，重写登录控制器方法：

默认的登录控制器用的是`App\\Admin\\AuthController`这个类，可以通过配置参数`admin.auth.controller`进行修改

```php
<?php

namespace App\\Admin\\Controllers;

use Dcat\\Admin\\Controllers\\AuthController as BaseAuthController;

class AuthController extends BaseAuthController
{
    // 自定义登录view模板
    protected $view = \'admin.login\';
	
	// 重写你的登录页面逻辑
	public function getLogin(Content $content)
    {
        ...
    }

    ...
}

```


方式二，覆写路由：

在路由文件`app/Admin/routes.php`中，覆盖掉登录页面和登录逻辑的路由，即可实现自定义的功能

```php
Route::group([
    \'prefix\'        => config(\'admin.prefix\'),
    \'namespace\'     => Admin::controllerNamespace(),
    \'middleware\'    => [\'web\', \'admin\'],
], function (Router $router) {

    $router->get(\'auth/login\', \'AuthController@getLogin\');
    $router->post(\'auth/login\', \'AuthController@postLogin\');
    
});
```

在自定义的路由器AuthController中的`getLogin`、`postLogin`方法里分别实现自己的登录页面和登录逻辑。


### 重写laravel认证

如果不使用`Dcat Admin`内置的认证登录逻辑，可以参考下面的方式自定义登录认证逻辑

首先要先定义一个`user provider`，用来获取用户身份, 比如`app/Providers/CustomUserProvider.php`：

```php
<?php

namespace App\\Providers;

use Illuminate\\Contracts\\Auth\\Authenticatable;
use Illuminate\\Contracts\\Auth\\UserProvider;

class CustomUserProvider implements UserProvider
{
    public function retrieveById($identifier)
    {}

    public function retrieveByToken($identifier, $token)
    {}

    public function updateRememberToken(Authenticatable $user, $token)
    {}

    public function retrieveByCredentials(array $credentials)
    {
        // 用$credentials里面的用户名密码去获取用户信息，然后返回Illuminate\\Contracts\\Auth\\Authenticatable对象
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // 用$credentials里面的用户名密码校验用户，返回true或false
    }
}

```

在方法`retrieveByCredentials`和`validateCredentials`中, 传入的`$credentials`就是登录页面提交的用户名和密码数组，然后你可以使用`$credentials`去实现自己的登录逻辑

Interface `Illuminate\\Contracts\\Auth\\Authenticatable`的定义如下：
```php
<?php

namespace Illuminate\\Contracts\\Auth;

interface Authenticatable {

    public function getAuthIdentifierName();
    public function getAuthIdentifier();
    public function getAuthPassword();
    public function getRememberToken();
    public function setRememberToken($value);
    public function getRememberTokenName();

}
```

上面interface每个方法的解释参考[adding-custom-user-providers](https://laravel.com/docs/5.5/authentication#adding-custom-user-providers)

定义好了`User provider`之后，打开`app/Providers/AuthServiceProvider.php`注册它：

```php
<?php

namespace App\\Providers;

use Illuminate\\Support\\Facades\\Auth;
use Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::provider(\'custom\', function ($app, array $config) {
            
            // Return an instance of Illuminate\\Contracts\\Auth\\UserProvider...
            return new CustomUserProvider();
        });
    }
}
```

最后修改一下配置,打开`config/admin.php`，找到`auth`部分修改:

```php
    \'auth\' => [
        \'guards\' => [
            \'admin\' => [
                \'driver\' => \'session\',
                \'provider\' => \'admin\',
            ]
        ],

        // 修改下面
        \'providers\' => [
            \'admin\' => [
                \'driver\' => \'custom\',
            ]
        ],
    ],
```
这样就完成了自定义登录认证的逻辑，自定义登陆算是laravel中比较复杂的部分，需要开发者有耐心的一步步调试完成。',
   'order' => 1,
   'created_at' => '2024-06-26 15:26:42',
   'updated_at' => '2024-06-26 15:26:42',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 86,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 18,
   'title' => '自定义头部导航条',
   'content' => '# 自定义头部导航条

如果要在顶部导航条上添加html元素,  打开`app/Admin/bootstrap.php`：
```php
use Dcat\\Admin\\Layout\\Navbar;
use Dcat\\Admin\\Admin;

Admin::navbar(function (Navbar $navbar) {

    $navbar->left(\'html...\');

    $navbar->right(\'html...\');

});
```

`left`和`right`方法分别用来在头部的左右两边添加内容，方法参数可以是任何可以渲染的对象(实现了`Htmlable`、`Renderable`接口或者包含`__toString()`方法的对象)或字符串



## 添加下拉面板

在模板文件中加上
```html
<ul class="nav navbar-nav">
    <li class="dropdown dropdown-notification nav-item">
        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown" aria-expanded="true"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right ">
            <li class="dropdown-menu-header">
                <div class="dropdown-header m-0 p-2">
                    <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                </div>
            </li>
            <li class="scrollable-container media-list ps ps--active-y">
                <a class="d-flex justify-content-between" href="javascript:void(0)">
                    <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                        <div class="media-body">
                            <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are
                                your going to meet me
                                tonight?</small>
                        </div><small>
                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                ago</time></small>
                    </div>
                </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                    <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                        <div class="media-body">
                            <h6 class="success media-heading red darken-1">99% Server load</h6>
                            <small class="notification-text">You got new order of goods.</small>
                        </div><small>
                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                ago</time></small>
                    </div>
                </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                    <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                        <div class="media-body">
                            <h6 class="danger media-heading yellow darken-3">Warning notifixation
                            </h6><small class="notification-text">Server have 99% CPU usage.</small>
                        </div><small>
                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                    </div>
                </a>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px; height: 254px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 184px;"></div></div></li>
            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read
                    all notifications</a></li>
        </ul>
    </li>
</ul>
```

使用

```php
$navbar->right(view(\'...\'));
```

## 添加下拉菜单

```html
<ul class="nav navbar-nav">
    <li class="dropdown dropdown-language nav-item">
        <a class="dropdown-toggle nav-link" href="#" id="dropdown-flag" data-toggle="dropdown">
            <i class="flag-icon flag-icon-us"></i>
            <span class="selected-language">English</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdown-flag">
            <li class="dropdown-item" href="#" data-language="en">
                <a><i class="flag-icon flag-icon-us"></i> English</a>
            </li>
            <li class="dropdown-item" href="#" data-language="fr">
                <a><i class="flag-icon flag-icon-fr"></i> French</a>
            </li>
            <lia class="dropdown-item" href="#" data-language="de">
                <a><i class="flag-icon flag-icon-de"></i>  German</a>
            </lia>
        </ul>
    </li>
</ul>
```
使用

```php
$navbar->right(view(\'...\'));
```

更多的组件可以参考[AdminLTE3](https://github.com/ColorlibHQ/AdminLTE)。

## 修改默认用户面板

打开`app/Admin/bootstrap.php`，写入

```php
use Dcat\\Admin\\Admin;

admin_inject_section(Admin::SECTION[\'NAVBAR_USER_PANEL\'], function () {
	return view(\'admin.partials.navbar-user-panel\', [\'user\' => Admin::user()]);
});
```

`navbar-user-panel.blade.php`视图内容
```php
@if($user)
<li class="dropdown dropdown-user nav-item">
    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
        <div class="user-nav d-sm-flex d-none">
            <span class="user-name text-bold-600">{{ $user->name }}</span>
            <span class="user-status"><i class="fa fa-circle text-success"></i> {{ trans(\'admin.online\') }}</span>
        </div>
        <span>
            <img class="round" src="{{ $user->getAvatar() }}" alt="avatar" height="40" width="40" />
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="{{ admin_url(\'auth/setting\') }}" class="dropdown-item">
            <i class="feather icon-user"></i> {{ trans(\'admin.setting\') }}
        </a>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="{{ admin_url(\'auth/logout\') }}">
            <i class="feather icon-power"></i> {{ trans(\'admin.logout\') }}
        </a>
    </div>
</li>
@endif
```',
   'order' => 1,
   'created_at' => '2024-06-26 15:27:14',
   'updated_at' => '2024-06-26 15:27:14',
   'slug' => 'basic-use',
),
            (object) array(
   'id' => 87,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 19,
   'title' => 'BETA版本更新日志',
   'content' => '# BETA版本更新日志

## v2.2.2-beta

发布时间 2022/6/27


### 升级版本

逐步执行以下命令，最后清除**浏览器缓存**
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.2.2-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### BUG 修复

1. 修复 Grid 表格当字段值为`0`时无法显示问题




## v2.2.1-beta

发布时间 2022/6/26


### 升级版本

逐步执行以下命令，最后清除**浏览器缓存**
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.2.1-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### 新增功能

**1. 日夜模式切换支持多开场景 ([#1672 by @ReedSun](https://github.com/jqhph/dcat-admin/pull/1672))**

**2. 表单增加 `override` 方法实现文件覆盖 ([#1706 by @laradocs](https://github.com/jqhph/dcat-admin/pull/1706))**

```php
$form->file(\'file\')->override();

$form->image(\'img\')->override();
```

**3. 支持嵌套资源型控制器 ([#1725 by @lddtime](https://github.com/jqhph/dcat-admin/pull/1725))**

**4. 支持在array/hasMany表单中使用when控制表单显示功能 （[#1776 by @rainhon](https://github.com/jqhph/dcat-admin/pull/1776))**

```php
$form->array($column, function ($form) {
    $form->radio(\'radio\')
        ->when([1, 4], function (Form $form) {
            $form->text(\'text1\');
            $form->text(\'text2\');
            $form->text(\'text3\');
        })
        ->when(2, function (Form $form) {
            $form->editor(\'editor\');
        })
        ->when(3, function (Form $form) {
            $form->image(\'image\');
        })
        ->options([...])
        ->default(1);
});
```

**5. 页面组件 `tab` 刷新后可选中对应选项 ([#1689 by @iljalukin](https://github.com/jqhph/dcat-admin/pull/1689))**

```php
use Dcat\\Admin\\Widgets\\Tab;

$tab = new Tab();

$tab->add(\'tab1\', ..., \'id1\');
$tab->add(\'tab2\', ..., \'id2\');
```

**6. 页面组件 `table` 没有数据时显示 `No data.` ([#1678 by @shacky](https://github.com/jqhph/dcat-admin/pull/1678))**


### BUG 修复

1. 修复 laravel9 中代码生成器报错问题
2. 修复  Laravel9 发布语言文件路径错误 ([#1688 by @laradocs](https://github.com/jqhph/dcat-admin/pull/1688))
3. 修复 `tab` 选项卡重复加载后不选中错误 ([#1689 by @iljalukin](https://github.com/jqhph/dcat-admin/pull/1689))

4. 修复代码生成器提交失败保存状态 ([#1690 @by laradocs](https://github.com/jqhph/dcat-admin/pull/1690))

5. 修复 `HasMany`表单中使用 `map` 字段错误问题 ([#1701 by @mojiajuzi](https://github.com/jqhph/dcat-admin/pull/1701))

6. 修复代码生成器生成 Laravel9 语言文件路径错误 ([#1711 by @laradocs](https://github.com/jqhph/dcat-admin/pull/1711))

7. 修复上传文件 `options` 被覆盖错误 ([#1747 by @laradocs](https://github.com/jqhph/dcat-admin/pull/1747))

8. 修复 Grid 中 `editable` 方法触发 `xss` 错误 ([#1755 by @laradocs](https://github.com/jqhph/dcat-admin/pull/1755))

9. 修复 Form 中 `number` 调用 `disable` 方法对自增减按钮失效 ([#1771 @by @laradocs](https://github.com/jqhph/dcat-admin/pull/1771))

10. 修复 Form 中使用 `layout` 布局后 `HasMany` 字段删除子字段后验证规则依然生效问题([#1781 @by laradocs](https://github.com/jqhph/dcat-admin/pull/1781))

11. 修复 PHP8.1 中触发 `ltrim` 和 `htmlentities` 方法异常 ([#1783 by @laradocs](https://github.com/jqhph/dcat-admin/pull/1783))

12. 修复 Grid 使用`$grid->column(\'xxx.xxx\')`无法导出关联模型字段值问题 ([#1740 by @xyzzxy123](https://github.com/jqhph/dcat-admin/pull/1740))

13. 修复项目路径中含有`Admin`造成代码生成器无法正常解析命名空间的问题  ([#1778 by @GMD170629](https://github.com/jqhph/dcat-admin/pull/1778))

14. 修复 `embeds` 字段无法上传文件问题 ([#1770 by @pianzhou2021](https://github.com/jqhph/dcat-admin/pull/1770))


## v2.2.0-beta

发布时间 2022/2/20

升级方法，逐步执行以下命令，最后清除**浏览器缓存**
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.2.0-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### 新增功能

**1.增加对Laravel9.x版本的支持**


**2.支持在`hasMany`以及`array`表单中使用`table`表单**

用法如下

```php
$form->array($field, function ($form) {
    $form->table(\'table_json\', function ($form) {
        $form->text(\'title\');
        
        ...
    });
});
```

**3.数据表格过滤器增加findInSet方法**

[#1639 @guanguans](https://github.com/jqhph/dcat-admin/pull/1639) sql: ` ... WHERE FIND_IN_SET("$input", $column)`，示例

```php
$grid->filter(function ($filter) {
    $filter->findInSet($field);
});
```


**4.调整代码生成器选择默认目录逻辑**

[#1627 @Edwin](https://github.com/jqhph/dcat-admin/pull/1514) 新版本将会根据配置参数`admin.directory`设置的目录作为默认目录，默认为`Admin`。


### BUG修复

1. 修复`table`表单不支持`help`方法问题 [#1616 @jcbt](https://github.com/jqhph/dcat-admin/pull/1616)
2. 修复启用多应用后注册扩展路由会导致默认应用首页无法访问问题
3. 修复无法隐藏弹窗表单重置按钮问题 [#1631 @Sparkinzy](https://github.com/jqhph/dcat-admin/pull/1631)
4. 修复`autocomplete`当字段值为数字时js组件报错问题 [#1661 @Sparkinzy](https://github.com/jqhph/dcat-admin/pull/1661)
5. 修复设置路由前缀为"/"时权限管理表单无法读取路由信息问题


## v2.1.7-beta

发布时间 2021/12/25

升级方法，逐步执行以下命令，最后清除**浏览器缓存**
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.1.7-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### 新增功能

**1.增加`admin_redirect`函数**

跳转到指定`url`，此函数可用于代替`redirect`函数，支持`pjax`以及`ajax`请求

```php
// 不需要添加admin前缀
return admin_redirect(\'auth/users\');

// 如果想要跳转到非admin前缀的链接，需要传递完整url链接
return admin_redirect(url(\'users\'));
```

### BUG修复

1. 修复使用文件(file)上传表单删除文件时会报`destroyThumbnail`问题
2. 修复当`hasMany`/`array`/`table`表单字段名与子表单字段名一样时无法删除行数据问题



## v2.1.6-beta

发布时间 2021/12/12

升级方法，逐步执行以下命令，最后清除**浏览器缓存**
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.1.6-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### 新增功能

**1.增加`Form::autocomplete()`表单**

[#1514 @Edwin](https://github.com/jqhph/dcat-admin/pull/1514) 此表单可以在填写表单时进行对表单值进行搜索，并把结果展示在下拉列表中，用法如下

```php
$form->autocomplete($column[, $label])->options([\'foo\', \'bar\', ...]);
```

效果如下
![](https://cdn.learnku.com/uploads/images/202112/12/38389/ArVNSvChag.png!large)

也可以从远程API中获取数据
```php
// ajax 函数的第一个参数为 ajax url, 第二个参数为 valueField（可选）, 第三个参数为 groupField（可选）
$form->autocomplete($column[, $label])->ajax(\'/countries\', \'name\', \'region\');
```

远程API 服务端的请求参数为query，示例代码如下：
```php
class CountryController extends AdminController
{
    public function search()
    {
        $countries = Country::when(request(\'query\'), function ($query, $value) {
            $query->where(\'name\', \'like\', "%{$value}%");
        })->get();

        return Admin::json($countries->toArray());
    }
}
```

更多用法参考文档[数据表单 - 字段使用 - autocomplete](https://learnku.com/docs/dcat-admin/2.x/use-of-fields/8107#autocomplete)


**2.图片/文件上传支持`arttribute`方法**
[#1510 @iwzh](https://github.com/jqhph/dcat-admin/pull/1510) 通过`attribute`方法可以给文件上传的隐藏域表单设置属性，用法如下

```php
$form->file($column)->attribute([\'foo\' => \'bar\', ...]);
```

**3.数据表格增加`between`表头过滤器**
[#1510 @iwzh](https://github.com/jqhph/dcat-admin/pull/1510) 用法如下

```php
$grid->column(\'created_at\')->filter(
    Grid\\Column\\Filter\\Between::make()->datetime()
);
```

**4.模型树增加`depthColumn`用于保存当前层级**

[#1549 @weiwait](https://github.com/jqhph/dcat-admin/pull/1510)

用法如下
```php
class Category extends Model
{
    use ModelTree;
    
    // 定义depthColumn属性后，将会在数据表保存当前行的层级
    protected $depthColumn = \'depth\';
}
```

**5.表单`Row`布局可独立设置宽度**
[#1530 @iwzh](https://github.com/jqhph/dcat-admin/pull/1530) 用法如下

```php
$form->row(function ($row) {
    // 给所有字段设置默认宽度
    $row->defaultWidth(3);
    
    // 每个字段独立设置宽度
    $row->width(4)->text(...);
});
```

### 功能改进

**1.调整数据表格导出数据时rows方法回调函数接受的参数类型为Collection**
[#1584 @jourdon](https://github.com/jqhph/dcat-admin/pull/1584) 用法如下

```php
use Illuminate\\Support\\Collection;

$grid->export()->rows(function (Collection $rows) {
    foreach ($rows as $index => &$row) {
       // $row 的格式为模型
       dd($row);
    }

    return $rows;
});
```


### BUG修复

1. 修复使用OSS上传图片缩略图报错问题 [#1499 @jorry2008](https://github.com/jqhph/dcat-admin/pull/1499)
2. 修复数据表格筛选默认项不能设置为`0`问题 [#1506 @liushoukun](https://github.com/jqhph/dcat-admin/pull/1506)
3. 修复一对一关联关系表单验证规则异常问题 [#1516](https://github.com/jqhph/dcat-admin/issues/1516)
4. 修复表单文件上传时，若已添加过文件则无法继续拖拽上传问题 [#1541 @hmilyfyj](https://github.com/jqhph/dcat-admin/pull/1541)
5. 修复分页器在`LazyRenderable`下切换时导致样式丢失的问题 [#1539 @jyiL](https://github.com/jqhph/dcat-admin/pull/1539)
6. 修复数据表格使用MongoDB时分页`perPage`数据类型错误问题 [#1555 @SmallRuralDog](https://github.com/jqhph/dcat-admin/pull/1555)
7. 修复页面使用`pjax`渲染后`pjax`无法再次初始化`a`标签问题 [#1576 @xyzzxy123](https://github.com/jqhph/dcat-admin/pull/1576)
8. 修复数据表格`Column::switch()`方法`refresh`参数无效问题 [#1595 @wxfjamdc](https://github.com/jqhph/dcat-admin/pull/1595)
9. 修复多图片上传上传多个图片会导致旧图片缩略图被删除问题 [#1556](https://github.com/jqhph/dcat-admin/issues/1556)


## v2.1.5-beta

发布时间 2021/9/17

升级方法，逐步执行以下命令，最后清除**浏览器缓存**
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.1.5-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### BUG修复

- 修复`v2.1.4`版本更新后不兼容`php v7.3`以下版本问题


## v2.1.4-beta

发布时间 2021/9/16

升级方法，逐步执行以下命令，最后清除**浏览器缓存**
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.1.4-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### BUG修复

1. 修复管理员列表点击查看权限弹窗展示为空问题
2. 修复数据表格关联关系表字段`非equal`查询均不生效问题
3. 修复数据表格`column`使用`if`方法后无法在`displayer`中取得原始字段值问题

## v2.1.3-beta

发布时间 2021/9/14

升级方法，逐步执行以下命令，最后清除**浏览器缓存**
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.1.3-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### 功能改进

**1.重构数据表格行内编辑功能**

当前版本重构了`editable`、`checkbox`和`radio`等三种行内编辑表单的`UI`样式，改为在弹窗中展示表单。并且增加了新的行内编辑表单`textarea`，效果如下：

![](https://cdn.learnku.com/uploads/images/202109/14/38389/mX4Za4nj1y.png!large)
![](https://cdn.learnku.com/uploads/images/202109/14/38389/9A2GdY3nSx.png!large)
![](https://cdn.learnku.com/uploads/images/202109/14/38389/6Bo4phkB3f.png!large)
![](https://cdn.learnku.com/uploads/images/202109/14/38389/wViO5EoPBg.png!large)


**2.配置文件增加`favicon`参数**

从当前版本开始可以在`config/admin.php`中配置`favicon`链接，参数名为`favicon`

**3.数据表单提交时支持展示被抛出异常的`message`**

从当前版本开始，假如提交表单时抛出异常如下
```php
$form->submitted(function ($form) {
    throw new \\Exception(\'禁止访问\');
});
```

那么将可以在页面中看到如下提示

![](https://cdn.learnku.com/uploads/images/202109/14/38389/S0KtwNRYGK.png!large)


**5.优化`array`、`table`表单在工具表单中的使用**

在旧版本`Widgtet/Form`中如果使用了`array`、`table`表单，并且在`array`、`table`表单中使用了文件上传表单时，需要自定义文件上传地址才能正常上传，所以此次版本对这个功能做了优化，更新版本之后将不需要再自定义上传地址
```php
$this->array(\'...\', function ($form) {
    // 无需自定义上传地址
    $form->image(\'img\');
});
```

**4.增加数据表单`html`对`addElementClass`方法的支持**

在旧版本中，`addElementClass`设置的`class`无法对`html`方法生效，所以新版中对此做了改进
```php
$form->html(...)->addElementClass([\'class1\', ...]);
```

**5.数据表单图片上传表单访问缩略图时不检查图片是否存在**

[@zhaiyuxin103](https://github.com/jqhph/dcat-admin/pull/1455)


### BUG修复

1. 修复数据表单使用闭包验证规则时无法正确合并问题 [#1429 @Edwin](https://github.com/jqhph/dcat-admin/pull/1429)
2. 修复文件上传启用`sequenceName`方法后生成的文件名带有重复后缀问题
3. 修复文件上传表单上传一对一字段设置`required`验证规则后无法上传文件问题
4. 修复某些操作下出现空白筛选边栏的问题 [#1445 @Abbotton](https://github.com/jqhph/dcat-admin/pull/1445)
5. 修复`selectTable`、`multipleSelectTable`等字段的`model`方法指定第二个参数无效问题 [#1460 @hhniao](https://github.com/jqhph/dcat-admin/pull/1460)
6. 修复无法翻译图片上传表单`dimensions`验证失败提示文案问题
7. 修复当在`array`、`table`以及`hasMany`表单中使用图片上传表单，并且设置`dimensions`验证规则后无法提交问题
8. 修复多图上传只能预览第一个图片问题
9. 修复表单动态展示如果字段值带小数点时不生效问题



## v2.1.2-beta

![](https://cdn.learnku.com/uploads/images/202109/14/38389/mX4Za4nj1y.png!large)
![](https://cdn.learnku.com/uploads/images/202109/14/38389/6Bo4phkB3f.png!large)
![](https://cdn.learnku.com/uploads/images/202109/14/38389/wViO5EoPBg.png!large)
![](https://cdn.learnku.com/uploads/images/202109/14/38389/S0KtwNRYGK.png!large)
发布时间 2021/8/1

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.1.2-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```



### 功能改进

**1.增加 Grid\\Model::apply() 方法**

此方法可以应用数据表格的快捷搜索和筛选过滤的查询条件，用法示例如下

在旧版本中，使用快捷搜索和筛选过滤的查询条件非常的麻烦
```php
$grid->header(function ($collection) use ($grid) {
    $query = Model::query();

    // 拿到表格筛选 where 条件数组进行遍历
    $grid->model()->getQueries()->unique()->each(function ($value) use (&$query) {
        if (in_array($value[\'method\'], [\'paginate\', \'get\', \'orderBy\', \'orderByDesc\'], true)) {
            return;
        }

        $query = call_user_func_array([$query, $value[\'method\']], $value[\'arguments\'] ?? []);
    });

    // 查出统计数据
    $data = $query->get();

    // 自定义组件
    return new Card($data);
});
```

从当前版本开始可以使用`apply`方法简化上面的代码
```php
$grid->header(function ($collection) use ($grid) {
    $query = Model::query();

    // 拿到表格筛选 where 条件数组进行遍历
    $grid->model()->apply($query);

    // 查出统计数据
    $data = $query->get();

    // 自定义组件
    return new Card($data);
});
```



### BUG修复

1. 修复数据表格无法禁用批量删除按钮问题
2. 修复高德地图表单有坐标时没有缩放问题  [#1377 @gzxy-0102](https://github.com/jqhph/dcat-admin/pull/1377)
3. 修复文件上传表单下载按钮不显示问题 [#1405](https://github.com/jqhph/dcat-admin/issues/1405)
4. 修复数据表格使用了`simplePaginate`后数据筛选参数不生效问题 [#1405](https://github.com/jqhph/dcat-admin/issues/1405)


## v2.1.1-beta

发布时间 2021/7/12

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.1.1-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### 新增功能

**1.增加模型树expand方法控制是否展开所有子节点数据**

默认展开所有子节点数据

```php
// 展开子节点数据
$tree->expand();

// 收起所有子节点数据
$tree->expand(false);
```

**2.增加文件上传表单下载功能**

```php
$form->file(\'...\')->downloadable();
```


**3.增加高德地图表单**

在配置文件`config/admin.php`中设置 [#1331 @gaizhixin](https://github.com/jqhph/dcat-admin/pull/1331)
```php
    \'map\' => [
        \'provider\' => \'amap\',
        \'keys\' => [
            // 配置高德地图的key
            \'amap\' => \'key\',
        ],
    ],
```


**4.新增addElementClass方法用于给表单字段设置自定义class**

```php
// 如果不希望添加前缀，则第二个参数设置为false
$form->text(...)->addElementClass([\'class1\', \'class2\'], false);
```

**5.增加表格批量操作设置下拉菜单分割线功能**

支持以下两种方式

```php
// 方式1
$grid->batchActions(function ($batch) {
    $batch->add(...);
    
    // 显示分割线
    $batch->divider();
    
    ...
});

// 方式2
use Dcat\\Admin\\Grid\\Tools\\ActionDivider;

$grid->batchActions([
    new Action1(),
    ...
    new ActionDivider(),
    ...
]);
```

### 功能改进


**1.table表单支持自定义view**

```php
$this->table(...)->setView(\'...\');
```

**2.优化菜单收缩后的操作体验以及UI**

当菜单收缩后，光标移动上去后自动展开如果点击了菜单，跳转后会自动收缩回去；并且修复了`mini-logo`显示异常的问题


**3.数据表格行操作列当没有任何操作按钮时不再显示空的下拉菜单**

数据表格行操作列当没有任何操作按钮时不再显示空的下拉菜单 [#1327 @jiangyuntao](https://github.com/jqhph/dcat-admin/pull/1331)

**4.优化图片上传表单图片的显示效果**

[#1366 @ShermanTsang](https://github.com/jqhph/dcat-admin/pull/1366)

### BUG修复

1. 修复树形表格(`tree`)展开子节点时如果无数据`Grid::__toString()`会报错问题
2. 修复启用数据表格异步渲染功能后减少筛选条件无效问题
3. 修复表格异步渲染筛选项数量显示异常问题
4. 修复设置表单字段`class`会覆盖默认`class`问题
5. 修复关闭`debug`模式后访问无权限页面会显示异常报文问题
6. 修复配置文件自定义批量删除按钮后 `Grid::disableBatchDelete` 失效问题
7. 修复菜单缩进后三级菜单无法隐藏问题
8. 修复当设置为无路由前缀时，内置的权限系统点击`新增权限`报错的问题 
9. 修复当禁用内置权限系统时没有禁用掉权限中间件无效问题
10. 修复`select`以及`selectTable`的`model`传递了第二个参数为非`id`时无法显示编辑数据的问题
11. 修复部分表单设置大小样式未生效的问题 [#1361 @Abbotton](https://github.com/jqhph/dcat-admin/pull/1361)
12. 修复表格排序功能无法兼容`Grid\\Model::latest`以及`oldest`方法问题


## v2.1.0-beta

发布时间 2021/5/23

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.1.0-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### 新增功能

**1.增加表格异步渲染功能**

当页面的表格展示的数据特别多（列多行多），并且加载的组件也较多时，可能会出现卡顿的现象，此时可以使用表格异步渲染功能，可以有效地减轻页面卡顿的情况：

```php
// 启用表格异步渲染功能
$grid->async();
```

需要注意的是，如果页面没有出现明显的卡顿现象，则无需启用此功能，并且如果页面中存在多个数据表格，那么也无法使用此功能！详细用法参考https://learnku.com/docs/dcat-admin/2.x/asynchronous-rendering/11051

### 功能改进

**1.支持`Laravel Octane 1.x`版本**

此次版本适配了`Laravel Octane 1.x`版本的相关变动，具体用法参考[Laravel Octane](laravel-octane.md)。

**2.调用`expand(false)`可以禁止自动弹出过滤器侧栏**

```php
// 禁止自动弹出过滤器侧边栏
$grid->filter(function ($filter) {
    $filter->expand(false);
});
```

**3.升级`tinymce`至`v5.8.0`版本**

[@yiming0](https://github.com/jqhph/dcat-admin/pull/1263)

**4.权限以及角色页面绑定菜单后自动清除菜单缓存**

### BUG修复

1\\. 修复`withConstraints`方法对详情页`url`无效问题 [#1232](https://github.com/jqhph/dcat-admin/issues/1232)
2\\. 修复多图/文件上传表单删除图片时表单值会转化成关联数组问题
3\\. 修复百度地图组件在启用`https`后无法使用问题 [#1162](https://github.com/jqhph/dcat-admin/issues/1162)

## v2.0.24-beta

发布时间 2021/4/30

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.24-beta"
php artisan admin:update # 不会覆盖翻译文件 menu.php 以及 global.php
```

### 新增功能

**1.增加创建或编辑角色以及权限时可直接绑定菜单功能**

在角色和权限的创建以及编辑页面可以直接绑定菜单，此功能默认开启，可以通过配置参数`admin.menu.role_bind_menu`以及`admin.menu.permission_bind_menu`进行关闭，效果如下

![](https://cdn.learnku.com/uploads/images/202104/30/38389/OUgvZVSA5l.jpg!large)

**2.新增`Form\\Tree::treeStatus()`方法，允许单独选择父节点**

用法
```php
$form->tree(\'xxx\')
    ->treeState(false) # 允许单独选择父节点
    ->setTitleColumn(\'title\')
    ->nodes(...);
```

效果
![](https://cdn.learnku.com/uploads/images/202104/30/38389/oChwzky2BT.gif!large)

### BUG修复

1. 修复多应用情况下无法使用域名区分应用问题
2. 修复`Admin::pjax()`方法未声明为`static`问题
3. 修复`grid filter checkbox`只能选中多个选项后只有单个选项生效问题 [@outer199](https://github.com/jqhph/dcat-admin/pull/1174)
4. 修复菜单默认图标设置无效问题
5. 修复`php7.4`或以上版本中使用`embeds`表单时报错问题 [#1204](https://github.com/jqhph/dcat-admin/issues/1204)
6. 修复分步表单下使用`$form->list(...)->limit(...);`参数校验不通过后刷新页面报错问题 [#1206](https://github.com/jqhph/dcat-admin/issues/1206)
7. 修复禁用`pjax`后编辑和创建完成后无法进行跳转问题 [#1208](https://github.com/jqhph/dcat-admin/issues/1208)
8. 修复使用固定列功能时列表会多出一列`ActionsClass`问题


## v2.0.23-beta

发布时间 2021/4/18

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.23-beta"
# 不会覆盖翻译文件 menu.php 以及 global.php
php artisan admin:update
```

### 新增功能

**1.增加对`Laravel Octane`的支持**

[Laravel Octane](https://github.com/laravel/octane) 是一个基于 `Swoole/RoadRunner` 驱动的可以提升 `Laravel` 框架性能的项目，安装后可以大幅提升`Laravel`项目的性能，`Dcat Admin`也兼容了`Laravel Octane`环境，只需在配置文件`config/octane.php`中加入如下配置即可：

```php

    \'listeners\' => [
        ...,

        RequestReceived::class => [
            ...Octane::prepareApplicationForNextOperation(),
            ...Octane::prepareApplicationForNextRequest(),
            
            // 开启对 Dcat Admin 的支持
            Dcat\\Admin\\Octane\\Listeners\\FlushAdminState::class,
        ],
        
        ...
    ],    
```

> [Laravel Octane](https://github.com/laravel/octane)目前仍处于`beta`版本阶段，关于[Laravel Octane](https://github.com/laravel/octane)的安装与更多介绍请前往文档 https://github.com/laravel/octane 查看。



**2.增加表格简化分页（`simplePaginate`）功能**

启用 `simplePaginate` 功能后会使用`Laravel`的[simplePaginate](https://laravel.com/docs/8.x/pagination#simple-pagination)功能进行分页，当数据量较大时可以大幅提升页面的响应速度，但需要注意的是，使用此功能后将不会查询数据表的**总行数**。

```php
// 启用
$grid->simplePaginate();

// 禁用
$grid->simplePaginate(false);
```

### 功能改进

**1.重构翻译功能**

在过去版本中，当使用[异步表单](lazy.md)以及[异步表格](lazy.md)功能时无法自动对字段名称进行翻译，从当前版本开始可以通过`translation`属性指定翻译文件的路径进行自动翻译，用法如下

```php
<?php

namespace App\\Admin\\Forms;

use Dcat\\Admin\\Traits\\LazyWidget;
use Dcat\\Admin\\Widgets\\Form;
use Dcat\\Admin\\Contracts\\LazyRenderable;

class MyForm extends Form implements LazyRenderable
{
    use LazyWidget;
    
    /**
     * 指定翻译文件名称
     * 
     * @var string 
     */
    protected $translation = \'my-form\';
    
    public function form()
    {
        $this->text(\'field1\');
        $this->text(\'field2\');
        
        ...
    }
    
    ...
}
```

语言包`resources/lang/{locale}/my-form.php`内容如下
```php
<?php

return [
    \'fields\' => [
        \'field1\' => \'字段1\',
        \'field2\' => \'字段2\',
        
        ...
    ],
];
```

并且在控制器中也可以指定当前翻译文件的路径

```php
use Dcat\\Admin\\Http\\Controllers\\AdminController;

class UserController extends AdminController
{
    /**
     * 指定翻译文件名称
     * 
     * @var string 
     */
    protected $translation = \'user1\';
    
    ...
}
```

当然也可以通过`Admin::translation()`方法指定

```php
use Dcat\\Admin\\Admin;

Admin::translation(\'user\');
```


**2.增加表格相关配置参数**

增加数个表格相关的配置文件参数`admin.grid.*`:

```php
    \'grid\' => [

        // 表格行操作类
        \'grid_action_class\' => Dcat\\Admin\\Grid\\Displayers\\DropdownActions::class,

        // 表格批量操作类
        \'batch_action_class\' => Dcat\\Admin\\Grid\\Tools\\BatchActions::class,

        // 表格分页类
        \'paginator_class\' => Dcat\\Admin\\Grid\\Tools\\Paginator::class,

        // 表格行默认的几个操作类配置
        \'actions\' => [
            \'view\' => Dcat\\Admin\\Grid\\Actions\\Show::class,
            \'edit\' => Dcat\\Admin\\Grid\\Actions\\Edit::class,
            \'quick_edit\' => Dcat\\Admin\\Grid\\Actions\\QuickEdit::class,
            \'delete\' => Dcat\\Admin\\Grid\\Actions\\Delete::class,
            \'batch_delete\' => Dcat\\Admin\\Grid\\Tools\\BatchDelete::class,
        ],

        ...
    ],
```


**3.移除禁用表格分页后显示表格页脚信息**

从当前版本开始，如果禁用了表格的分页功能，将不会再显示表格的页脚信息。

**4.优化 `Filter::panel()` 布局间距**


**5.优化文件发布功能，发布语言包文件时将不再覆盖`menu.php`以及`global.php`文件**

从当前版本开始，当使用`admin:update`以及`admin:publish --force`命令文件时，将不再覆盖`menu.php`以及`global.php`文件。

**6.更新`Tinymce`版本至`5.6.2`**

[@wk1025](https://github.com/jqhph/dcat-admin/pull/1154)

### BUG修复

1. 修复数据表格中字段类型为`Object`时报错问题 [@xiaohuilam](https://github.com/jqhph/dcat-admin/pull/1154)
2. 修复文件上传失败仍然提示上传成功问题
3. 修复权限判断中间件匹配时没有使用传入的`$request`对象问题 [@asmodai1985](https://github.com/jqhph/dcat-admin/pull/1157)
4. 修复表单`rules`方法第二个参数设置`message`无效问题
5. 修复`Helper::array()`会把`0`转为空数组问题
6. 修复行选择器无法选中树形表格子级行问题
7. 修复`KeyValue::setValueLabel()`方法无效问题
8. 修复`hasmany`以及`table`表单删除选项时会重置表单问题
9. 修复表格行操作编辑按钮文本显示错误问题 [@GemaDynamic](https://github.com/jqhph/dcat-admin/pull/1174)
10. 修复树形表格子级行无法正常使用表单弹窗问题 [#813](https://github.com/jqhph/dcat-admin/issues/1174)



## v2.0.22-beta

发布时间 2021/4/1

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.22-beta"
php artisan admin:update
```

### BUG修复

1. 修复部分功能缺失`CSRF_TOKEN`报错问题
2. 修复菜单自动适应高度功能报错问题



## v2.0.21-beta

发布时间 2021/3/30

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.21-beta"
php artisan admin:update
```

### 新增功能

**1.增加表格列选择器`ColumnSelector`支持持久化存储功能**

在配置文件`config/admin.php`可以配置存储列选择器状态的方式，支持的存储方式如下

- `Dcat\\Admin\\Grid\\ColumnSelector\\SessionStore` 列选择器状态数据保存在`session`中，仅在登陆中有效
- `Dcat\\Admin\\Grid\\ColumnSelector\\CacheStore`  列选择器状态数据保存在[Laravel Cache](https://laravel.com/docs/8.x/cache#driver-prerequisites)缓存系统中，最长可保存`300`天，并可以通过`admin.grid.column_selector.store_params.driver`可以配置缓存驱动，默认为`file`

```php
    \'grid\' => [

        ...

        \'column_selector\' => [
            \'store\' => Dcat\\Admin\\Grid\\ColumnSelector\\SessionStore::class,
            \'store_params\' => [
                \'driver\' => \'file\',
            ],
        ],
    ],
```

**2.增加表格条件判断(`if`)的终结方法(`end`)**

```php
$grid->column(\'status\')
    ->if(...) // 条件1
    ->display(...)
    ->display(...)
    
    ->if(...) // 条件2
    ->display(...)
    ->display(...)
    
    ->end() // 终结前面的条件判断
    ->display(...); // 所有条件都能生效
```

**3.增加表格行选择器默认选中(`check`)以及禁止更改选中状态(`disable`)功能**


通过`check`方法可以设置默认选中的行，此方法接受一个`array`类型或`匿名函数`参数

```php
// 设置默认选中第 1/3/5 行
$grid->rowSelector()->check([0, 2, 4]);

// 传递闭包
$grid->rowSelector()->check(function () {
    // 设置默认选中第 1/3/5 行
    return in_array($this->_index, [0, 2, 4]);
});

// 在闭包中使用当前行其他字段
$grid->rowSelector()->check(function () {
    // 设置默认选中 id > 10 的行
    return $this->id > 10;
});
```

通过`disable`方法可以设置禁止更改选中状态的行，此方法接受一个`array`类型或`匿名函数`参数

```php
// 禁止第 1/3/5 行更改选中状态
$grid->rowSelector()->disable([0, 2, 4]);

// 传递闭包
$grid->rowSelector()->disable(function () {
    // 禁止第 1/3/5 行更改选中状态
    return in_array($this->_index, [0, 2, 4]);
});

// 在闭包中使用当前行其他字段
$grid->rowSelector()->disable(function () {
    // 禁止 id > 10 的行更改选中状态
    return $this->id > 10;
});

// disable 可以和 check 方法一起使用
$grid->rowSelector()->check([2, 4])->disable([0, 2, 4]);
```

**4.增加`KeyValue`表单自定义标题翻译功能**

```php
$form->keyValue(...)->setKeyLabel(\'键名\')->setValueLabel(\'键值\');
```


**5.增加`Grid::scrollbarX`显示表格横向滚动条方法**

显示表格横向滚动条，默认不显示

```php
// 启用
$grid->scrollbarX();

// 禁用
$grid->scrollbarX(false);
```


**6.增加`admin:update`命令**
从当前版本开始，升级后可以直接运行 `admin:update`，相当于运行

```
php artisan admin:publish --assets --migrations --lang --force
php artisan migrate
``` 

### 功能改进

**1.表单显示编辑数据时兼容驼峰风格的关联关系名称**

在旧版本中，如果需要编辑模型关联关系字段，且模型的关联关系名称为驼峰风格时，需要把名称更改为下划线风格才能正常显示，这对开发者非常不友好。从当前版本开始，可以直接使用驼峰风格的关联关系名称，不需要做任何特殊处理
```php
return Form::make(User::with([\'myProfile\']), function (Form $form) {
    // 直接使用驼峰风格命名，不需做其他处理
    $form->text(\'myProfile.full_name\');
    
    ...
});
```


**2.调整工具表单数据设置逻辑，可在`form`方法中获取`default`方法数据**

```php
use Dcat\\Admin\\Widgets\\Form;

class Setting extends Form
{
    public function form()
    {
        // 获取 default 方法设置的数据
        $id = $this->data()->id;
        $name = $this->data()->name;
    
        $this->text(\'name\');
        
        ...
    }
    
    public function default()
    {
        return [
            \'id\' => 1,
            \'name\' => \'abc\',
            ...
        ];
    }
}
```

**3.`hasMany`以及`array`表单支持整体使用`rules`验证规则校验**

```php
$form->hasMany(...)->rules(\'size:2\');
```

**4.调整`selectTable`默认占位符为`选择 ...`**

**5.优化表单row布局间距**

[#1092](https://github.com/jqhph/dcat-admin/issues/1092)


### BUG修复

1. 修复 `ModelTree` 删除节点时无法删除间隔一个层级以上的子节点问题
2. 修复导出功能在部分环境可能会出现异常问题
3. 修复表单联动(`load`)加载后初始值丢失的问题 [@xqbumu](https://github.com/jqhph/dcat-admin/pull/1103)
4. 修复文件上传失败后显示提示信息异常问题
5. 修复数据详情`Show`实例化函数如果传递模型，主键赋值错误的问题  [@jisuye](https://github.com/jqhph/dcat-admin/pull/1112)
6. 修复表格`setConstraints`方法对快速编辑无效问题 [#1119](https://github.com/jqhph/dcat-admin/issues/1119)
7. 修复在`iframe`页面中预览图片功能异常问题
8. 修复`hasMany`以及`array`表单下删除使用`required`验证规则的字段后导致无法提交表单问题
9. 修复表格`dialogTree`当顶级ID为字符串`0`时加载异常问题 [#1122](https://github.com/jqhph/dcat-admin/issues/1122)



## v2.0.20-beta

发布时间 2021/3/8

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.20-beta"
php artisan admin:publish --assets --migrations --force
php artisan migrate
```

### 功能改进

**1.`selectTable`表单表格刷新时保留前页的数据状态**

`selectTable`表单表格刷新或翻页后会保留前页选中或取消的数据状态

**2.`selectTable`表单设置显示字段名称功能优化**

在旧版本中，如果想要设置`selectTable`表单选中的字段或显示的字段，需要在`Renderable`对象中设置，非常的麻烦和不便，从当前版本开始，开发者可以直接通过下面的方法设置选中的字段或显示的字段

```php
$form->selectTable(\'user_id\')
	->from(UserTable::make())
	->pluck(\'full_name\', \'id\'); // 第一个参数为显示的字段，第二个参数为选中后将保存到表单的字段

// 也可以直接使用下面的方法
$form->selectTable(\'user_id\')
	->from(UserTable::make())
	->model(UserModel::class, \'id\', \'full_name\');
```


**3.`selectTable`、`multipleSelectTable`、`radio`、`checkbox`表单增加`load`方法**

从当前版本开始，`selectTable`、`multipleSelectTable`、`radio`、`checkbox`也可以使用`load`方法联动`select`和`multipleSelect`表单

```php
$form->radio(\'type\')->options([...])->load(\'category\', \'categories/options\');

$form->select(\'categories\');
```

接口`categories/options`返回格式如下

```json
[
    {
        "id": 9,
        "text": "xxx"
    },
    {
        "id": 21,
        "text": "xxx"
    },
    ...
]
```


**4.增加菜单水平布局自动适应页面以及菜单高度变化功能**

启用菜单水平布局功能后，当页面高度或菜单高度发生变动时，页面会自适应、自行调整内容间距

****


**5.增加表格`Grid::dropColumn()`方法用于删除设置的列**

```php
$nameColumn = $grid->column(\'name\');

// 删除名称为 `name` 的列
$grid->dropColumn(\'name\');
// 等同于
$grid->dropColumn($nameColumn);
```

**6.增加`admin_javascript`函数**

此函数可用于往`php`的配置`array`中添加`JS`代码，用法如下

```php
$form->text(\'number\')->inputmask([
	\'oncomplete\' => admin_javascript(\'function () {
		// 这里是js代码
	    alert(\'inputmask complete\');
	}\'),
]);
```

**6.`Form`表单底部可默认勾选`查看`、`继续编辑`、`继续创建`等选项功能**

用法如下 [#1073](https://github.com/jqhph/dcat-admin/pull/1073)

```php
$form->footer(function (Footer $footer) {
    // 设置`查看`默认选中
    $footer->defaultViewChecked();

    // 设置`继续编辑`默认选中
    $footer->defaultEditingChecked();
    
    // 设置`继续创建`默认选中
    $footer->defaultCreatingChecked();
});

// 设置`查看`默认选中
$form->defaultViewChecked();

// 设置`继续编辑`默认选中
$form->defaultEditingChecked();

// 设置`继续创建`默认选中
$form->defaultCreatingChecked();
```


### BUG

1. 修复表格使用关联关系字段排序时必须先`with`问题
2. 修复同个页面无法同时渲染多个异步组件问题
3. 修复树形表格下删除子节点数据后跳转异常问题 [#1071](https://github.com/jqhph/dcat-admin/issues/1071)
4. 修复表格导出字段中存在空数组时导出异常问题
5. 修复表单多图上传使用`sortable`功能进行排序会导致页面的图片元素消失不见问题
6. 修复表单字段`disable`方法设置`false`无效问题
7. 修复`multipleSelect`表单使用`load`联动加载时无法把所有选中选项传入接口问题 [#1076](https://github.com/jqhph/dcat-admin/issues/1076)
8. 修复表格规格选择器存在多个0开头选项时选中功能异常问题

### BUG

1\\. 修复表格使用关联关系字段排序时必须先`with`问题
2\\. 修复同个页面无法同时渲染多个异步组件问题
3\\. 修复树形表格下删除子节点数据后跳转异常问题 [#1071](https://github.com/jqhph/dcat-admin/issues/1071)
4\\. 修复表格导出字段中存在空数组时导出异常问题
5\\. 修复表单多图上传使用`sortable`功能进行排序会导致页面的图片元素消失不见问题
6\\. 修复表单字段`disable`方法设置`false`无效问题
7\\. 修复`multipleSelect`表单使用`load`联动加载时无法把所有选中选项传入接口问题 [#1076](https://github.com/jqhph/dcat-admin/issues/1076)
8\\. 修复表格规格选择器存在多个0开头选项时选中功能异常问题

## v2.0.19-beta

发布时间 2021/2/21

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.19-beta"
php artisan admin:publish --assets --migrations --force
php artisan migrate
```

### BUG修复

1\\. 修复非超管角色下请求 `内置api` 时提示 `无权访问` 问题
2\\. 修复在弹窗中使用时间范围表单报错问题

## v2.0.18-beta

发布时间 2021/2/20

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.18-beta"
php artisan admin:publish --assets --migrations --force
php artisan migrate
```

### 功能改进


**1.增加菜单顶部横向布局 (Horizontal)**

设置配置参数 `admin.layout.horizontal_menu` 的值为 `true` 开启此功能，效果如下

![](https://cdn.learnku.com/uploads/images/202102/20/38389/SpmXMujJ3D.png!large)

**2.权限中间件以及跳过登陆判断时可以填写路由别名并且无需增加前缀**

配置文件以及权限设置路由别名时无需填写路由前缀

```php
    \'permission\' => [
        ...
    
        // 跳过权限判断
        \'except\' => [
            // 可以直接填写路由别名，并且无需写路由前缀
            \'custom.users\',
        ],

    ],
```

**3.数据表格行数据增加 `_index` 字段用于保存行序号**

数据表格行数据增加 `_index` 字段用于保存行序号，从 `0` 开始，用法如下

```php
// 在 display 回调中使用
$grid->column(\'序号\')->display(function () {
    return $this->_index + 1;
});


// 在行操作 action 中使用
$grid->actions(function ($actions) {
    $index = $this->_index;
    
    ...
});
```


**4.重命名 markdown 组件静态资源别名，避免与自定义 blade 标签产生冲突**

**5.增加配置参数 `admin.menu.default_icon` 用于设置默认菜单图标**

`admin.menu.default_icon` 用于设置菜单默认图标，默认值为 `feather icon-circle`

**6.增加新的区块位置 `NAVBAR_BEFORE` 以及 `NAVBAR_AFTER`**

```php
use Dcat\\Admin\\Admin;

// 往顶部导航栏前输出内容
admin_inject_section(Admin::SECTION[\'NAVBAR_BEFORE\'], view(\'...\'));

// 往顶部导航栏后输出内容
admin_inject_section(Admin::SECTION[\'NAVBAR_AFTER\'], view(\'...\'));
```

**6.优化表格字段选择器代码**


### BUG修复

1. 修复扩展管理页面`new`标签显示异常问题 [#1044](https://github.com/jqhph/dcat-admin/issues/1044)
2. 修复文件上传成功后直接删除报错问题 [#1058](https://github.com/jqhph/dcat-admin/issues/1058)
3. 修复 `Form::number` 表单在使用 `min` 和 `max` 方法后输入值异常问题


## v2.0.17-beta

发布时间 2021/2/5

升级方法，逐步执行以下命令，并清除浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.17-beta"
php artisan admin:publish --assets --migrations --force
php artisan migrate
```

### 破坏性变动

**1.路由别名调整**
所有后台的路由别名都会自动增加前缀，需要通过 `admin_route` 函数获取路由URL，`admin_route` 可以完全代替 Laravel 内建的 `route` 方法，且支持单一方法请求的路由别名，以下是一些合法范例：

`admin_route(\'records\')`，资源路由和方法路由的别名。

`admin_route(\'records\',[\'id\' => 1])`，附带请求参数。


### 功能改进

**1.优化表格排序功能**

支持`orderBy`直接使用关联关系表字段进行排序，注意这里仅支持`一对一`以及`一对多`关联关系

```php
$grid->model()->orderBy(\'profile.age\');
```

**2.增加模型树以及树形表格自定义顶级`parent_id`值功能**

模型树以及树形表格可以在`model`中自定义顶级`parent_id`值，默认值为`0`
```php
class Category extends Model
{
	use ModelTree;

	// 设置默认 parent_id 为 A
	protected $defaultParentId = \'A\';
}
```

**3.数据详情 `file` 支持展示多文件**

[#985](https://github.com/jqhph/dcat-admin/pull/985)

```php
$show->field(\'...\')->files();
```

效果

![](https://cdn.learnku.com/uploads/images/202102/02/38389/B0a2qZEBUL.png!large)


**4.`Form::input`支持数组批量设置**

```php
$form->submitted(function ($form) {
    $form->input([\'k1\' => \'v1\', \'k2\' => \'v2\' ...]);
});
```

**5.扩展管理支持`logo`以及`别名展示`**

详细用法参考文档 [扩展](extension-dev.md#logo)


**6.增加admin_route方法根据别名获取URL**

`app/Admin/routes.php`路由注册如下
```php
Route::group([
    \'prefix\'        => config(\'admin.route.prefix\'),
    \'namespace\'     => config(\'admin.route.namespace\'),
    \'middleware\'    => config(\'admin.route.middleware\'),
], function (Router $router) {
	// 设置别名
	$router->resource(\'users\', \'UserController\', [
	    \'names\' => [\'index\' => \'my-users\'],
	]);

});
```

根据别名获取URL

```php
// 获取url
$url = admin_route(\'my-users\');

// 判断路由
$isUsers = request()->routeIs(admin_route_name(\'users\'));
```

**8.JsonResponse::location 允许不传参**

如果不传参会在`1`秒之后自动刷新当前页面

```php
return Admin::json()->success(\'操作成功\')->location();
```

**9.页面布局Layout\\Column支持等宽布局**

当列宽度设置为`0`时会使用等宽布局 [#1018](https://github.com/jqhph/dcat-admin/pull/1018)

```php
use Dcat\\Admin\\Layout\\Row;
use Dcat\\Admin\\Layout\\Content;

return Content::make()
	->body(function (Row $row) {
	    $row->column(0, view(\'...\'));
	});
```

**10.页面布局Layout\\Row支持no-gutters属性**

`.row`上带有`margin-left: -15px;margin-right: -15px;`属性，你可以在`.row`上上定义`.no-gutters`属性，从而消除这个属性，使页面不会额外宽出`30px`，即`<div class="row no-gutters"...`
```php
$content->row(function (Row $row) {
	// 启用 no-gutters
	$row->noGutters();

	$row->column(9, function (Column $column) {
		$column->row($this->card([\'col-md-12\', 20], \'#4DB6AC\'));
		
		$column->row(function (Row $row) {
			// 启用 no-gutters
			$row->noGutters();

			$row->column(4, $this->card([\'col-md-4\', 30], \'#80CBC4\'));
			$row->column(4, $this->card([\'col-md-4\', 30], \'#4DB6AC\'));
			$row->column(4, function (Column $column) {
				$column->row(function (Row $row) {
					// 启用 no-gutters
					$row->noGutters();

					$row->column(6, $this->card([\'col-md-6\', 30], \'#26A69A\'));
					$row->column(6, $this->card([\'col-md-6\', 30], \'#26A69A\'));
				});
			});
		});
	});
});
```

效果如下

![](https://cdn.learnku.com/uploads/images/202102/05/38389/4YlO8aOPCW.jpg!large)

**11.表格删除数据后保留URL的get参数**

在之前的版本中，删除数据后会丢失`URL`的`get`参数，导致跳转回表格第一页，这个版本对这个功能进行了优化，删除后依然会保留`URL`的`get`参数 [#961](https://github.com/jqhph/dcat-admin/issues/961)


**12.重构文件上传前端代码**

此功能为技术性优化，这个版本对文件上传前端代码进行了重构、拆分代码，使其更易阅读和维护

### BUG修复

1. 修复`MultipleSelect`表单样式异常问题 [#967](https://github.com/jqhph/dcat-admin/issues/967)
2. 修复加载`markdown`组件后使用`select2`表单异常问题 [#990](https://github.com/jqhph/dcat-admin/issues/990)
3. 修复文件上传在`Linux`服务器下保存繁体中文文件名丢失问题 [#993](https://github.com/jqhph/dcat-admin/issues/993)
4. 修复 `Widgets\\Dropdown::click` 无法显示默认选项问题
5. 修复`form`表单中的`number`组件文本内容为空时点击加减按钮出现`NaN`问题  [#995](https://github.com/jqhph/dcat-admin/issues/995)
6. 修复图片预览失败提示无法使用翻译文件问题
7. 修复一对一关联关系`Range`表单使用验证规则判断异常问题
8. 修复多应用情况下路由别名冲突的问题




## v2.0.16-beta

发布时间 2021/1/11

升级方法，逐步执行以下命令，并清理浏览器缓存
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.16-beta"
php artisan admin:publish --assets --migrations --force
php artisan migrate
```


### 破坏性变动

**1.表单字段的 `disableHorizontal` 调整为 `horizontal` **

更改表单字段布局方式为`horizontal`，此功能默认启用，用法如下

```php
// 禁用 horizontal 布局
$form->text(\'...\')->horizontal(false);
```

### 功能改进

**1.增强表格字段排序(sortable)功能**

使表格字段支持关联关系表字段以及`json`字段的排序

> 注意，关联关系仅支持`hasOne`以及`belongsTo`两种类型的字段排序，并且不支持多层级嵌套！

```php
// 关联关系表字段排序
$grid->column(\'profile.age\')->sortable();

// 指定需要排序的字段名称
$grid->column(\'my_age\')->sortable(\'profile.age\');

// json字段排序
$grid->column(\'options.price\')->sortable(\'options->price\');
// 关联关系表的 json 字段排序
$grid->column(\'profile.options.price\')->sortable(\'profile.options->price\');
```

支持`MySql`的```order by cast(`{field}` as {type})```用法

```php
$grid->column(\'profile.age\')->sortable(null, \'SIGNED\');

$grid->column(\'profile.options.price\')->sortable(\'profile.options->price\', \'SIGNED\');
```


**2.增加 admin_exit 函数，用于代替 exit**

`admin_exit` 用于中断程序执行，并响应数据到浏览器进行显示，用于代替 `exit` 和 `die`，下面简单介绍下用法


用法1，返回 `Content` 布局对象，此用法可用于返回错误信息显示到前端
```php
use Dcat\\Admin\\Widgets\\Alert;
use Dcat\\Admin\\Layout\\Content;

// 中断程序，并显示自定义页面到前端
admin_exit(
    Content::make()
        ->title(\'标题\')
        ->description(\'描述\')
        ->body(\'页面内容1\')
        ->body(Alert::make(\'服务器出错了~\', \'Error\')->danger())
);
```

效果如下

![](https://cdn.learnku.com/uploads/images/202101/11/38389/FLg6C7kwRq.png!large)

用法2，返回 `json` 格式数据，此用法经常用于表单提交数据的`api`请求拦截，或`Action`的`api`请求拦截

```php
use Dcat\\Admin\\Admin;

admin_exit(
    Admin::json()
        ->success(\'成功了\')
        ->refresh()
        ->data([
            ...
        ])
);

// 当然也可以直接响应数组
admin_exit([
   ...
]);
```

用法3，直接相应`Response`对象或字符串

```php
admin_exit(\'Hello world\');

admin_exit(response(\'Hello world\', 500));
```


**3.增加 Show\\Field::bool() 和 Show\\Field::bold() 方法**

字段值为真显示 `✓`, 否则显示 `✗` [#940](https://github.com/jqhph/dcat-admin/pull/940)

```php
$show->field(\'...\')->bool();
```

字段值加粗显示

```php
$show->field(\'...\')->bold();

// 指定颜色
$show->field(\'...\')->bold(admin_color()->primary());
```


**4.增加 Form\\Footer::view()  方法**
 
通过 `Form\\Footer::view()` 方法可以自定义数据表单的底部视图 [#957](https://github.com/jqhph/dcat-admin/pull/957)

```php
$form->footer(function ($footer) {
    $footer->view(\'...\', [...]);
});
```


**5.增加表单默认显示指定 Tab 功能**

```php
// 默认显示标题为 标题2 的 Tab
$form->getTab()->active(\'标题2\');
// 也可以指定偏移量
$form->getTab()->activeByIndex(1);

$form->tab(\'标题1\', function ($form) {
    ...
});

$form->tab(\'标题2\', function ($form) {
    ...
});
```

**6.增加表单 Form\\Row::horizontal() 方法**

设置布局为 `horizontal`

```php
$form->row(function (Form\\Row $form) {
	$form->horizontal();

	...
});
```

**7.表格 Modal 增加自定义图标功能**


```php
$grid->column(\'...\')->modal(function ($modal) {
    // 自定义图标
    $modal->icon(\'feather icon-x\');
    
    return ...;
});
```

**8.增加路由域名限制配置**

通过配置参数`admin.route.domain`可以限制路由的域名, 打开配置文件 `config/admin.php`

```php
    \'route\' => [
        \'domain\' => env(\'ADMIN_ROUTE_DOMAIN\'),

        \'prefix\' => env(\'ADMIN_ROUTE_PREFIX\', \'admin\'),

        \'namespace\' => \'App\\\\Admin\\\\Controllers\',

        \'middleware\' => [\'web\', \'admin\'],
    ],
```


**9.增加 admin.session 中间件的启用或禁用配置**

从`2.0`的版本之后 `admin.session` 中间件不再默认启用，如果您的应用同时有前台和后台，则需要开启 `admin.session` 中间件，否则会造成前后台 `session` 冲突问题。

把配置参数 `admin.route.enable_session_middleware` 的值设置为 `true` 即可开启
```php
    \'route\' => [
        \'domain\' => env(\'ADMIN_ROUTE_DOMAIN\'),

        \'prefix\' => env(\'ADMIN_ROUTE_PREFIX\', \'admin\'),

        \'namespace\' => \'App\\\\Admin\\\\Controllers\',

        \'middleware\' => [\'web\', \'admin\'],
        
        // 开启 admin.session 中间件
        \'enable_session_middleware\' => true,
    ],
```

### BUG修复

1. 修复数据表格`Grid::header`以及`Grid::footer`回调的第一个参数中`Model`被转化为`array`格式问题
2. 修复切换主题时文件上传按钮颜色无法跟着改变问题 [#938](https://github.com/jqhph/dcat-admin/issues/938)
3. 修复 `Widgets\\Table` 构造方法第三个参数设置无效问题
4. 修复 `app/Admin/bootstrap.php` 中使用 `config([\'admin.layout.color\' => \'...\'])` 覆盖主题色可能无效问题
5. 修复数据表格过滤器重置关联关系表单字段无效问题 [#949](https://github.com/jqhph/dcat-admin/issues/949)
6. 修复表格过滤器 `group` 功能显示异常问题 [#929](https://github.com/jqhph/dcat-admin/issues/929)
7. 修复当页面存在多个 `selectTable` 表单时所有弹窗都只显示第一个设置的 `title` 问题 [#926](https://github.com/jqhph/dcat-admin/issues/926)



## v2.0.15-beta

发布时间 2021/1/3

升级方法，逐步执行以下命令
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.15-beta"
php artisan admin:publish --assets --migrations --force
php artisan migrate
```

### 功能改进

**1.升级select2到v4.1.x-beta版本**


`select`组件升级至`v4.1.x-beta`，使`tags`表单体验更好，并支持了多国语言翻译。

**2.Widgets/Modal增加弹窗垂直居中以及可滚动功能**

用法如下 [#901](https://github.com/jqhph/dcat-admin/pull/901)

```php
$modal = Modal::make()
    ->xl()
    ->centered() // 设置弹窗垂直居中
    ->scrollable() // 设置弹窗内容可滚动
    ->title(...)
    ->body(...);
```

**3.`Admin::requiredAssets`支持传递动态参数**

```php
use Dcat\\Admin\\Admin;

// 注册前端组件别名
// {lang} 为动态参数
Admin::asset()->alias(\'@test\', [
    \'js\' => [\'/vendor/test/js/{lang}.min.js\'],
]);

// {lang} 会被替换为 zh_CN
Admin::requireAssets(\'@test\', [\'lang\' => \'zh_CN\']);
// 也可以这样使用
Admin::requireAssets(\'@test?lang=zh_CN\');
```


### Bug修复

1. 修复表单`block`布局无法保存数据问题 [#883](https://github.com/jqhph/dcat-admin/issues/883)
2. 修复`hasMany`表单下使用`currency`失效问题 [#886](https://github.com/jqhph/dcat-admin/issues/886)
3. 修复数据表单保存后自动跳转到详情页问题 [#893](https://github.com/jqhph/dcat-admin/issues/893)
4. 修复`editor`表单无法清空数据问题 [#895](https://github.com/jqhph/dcat-admin/issues/895)
5. 修复`hasMany`表单下使用`tags`的`required`验证异常问题 [#905](https://github.com/jqhph/dcat-admin/issues/905)
6. 修复多文件上传表单删除单个文件时会导致全部文件被清空问题 [#914](https://github.com/jqhph/dcat-admin/issues/914)
7. 修复表格字段无法使用模型访问器问题


## v2.0.14-beta

发布时间 2020/12/24

升级方法，逐步执行以下命令
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.14-beta"
php artisan admin:publish --assets --migrations --force
php artisan migrate
```

### 功能改进

**1.优化文件上传失败错误信息提示**

在旧版本中，文件上传失败的错误提示信息不太明确，导致难以定义错误原因，所以在这个版本中对错误提示进行了优化，一旦文件上传失败会显示具体原因。

### Bug修复

1\\. 修复表格字段与模型`casts`属性产生冲突，以及`display`闭包中使用字符串拼接显示异常问题 [#876](https://github.com/jqhph/dcat-admin/issues/876)
2\\. 修复表单动态显示功能无法使用问题 [#879](https://github.com/jqhph/dcat-admin/issues/879)
3\\. 修复表单使用`Block`布局时无法显示编辑数据问题 [#877](https://github.com/jqhph/dcat-admin/issues/877)

## v2.0.13-beta

发布时间 2020/12/23

升级方法，逐步执行以下命令
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.13-beta"
php artisan admin:publish --assets --migrations --force
php artisan migrate
```

### Bug修复

1\\. 修复表格展示关联关系字段当关联数据不存在时有可能报错问题 [#867](https://github.com/jqhph/dcat-admin/issues/867)
2\\. 修复当表格使用数据仓库返回数组或非模型`collection`时`display`方法无效问题 [#869](https://github.com/jqhph/dcat-admin/issues/869)


## v2.0.12-beta

发布时间 2020/12/22

升级方法，逐步执行以下命令
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.12-beta"
php artisan admin:publish --assets --migrations --force
php artisan migrate
```

### 破坏性变动

**1.图片/文件上传表单`removeable`重命名为`removable`**

```php
$form->file(\'...\')->removable();
```

### 功能改进

**1.支持PHP8.0**

**2.图片/文件上传表单支持监听WebUploader事件**

通过 `on` 方法可以监听 [WebUploader文件上传相关事件](http://fex.baidu.com/webuploader/doc/index.html#WebUploader_Uploader_events)

```php
$form->file(\'...\')
	->on(\'startUpload\', <<<JS
		function () {
			console.log(\'文件开始上传...\', this);
			
			// 上传文件前附加自定义参数到文件上传接口
			this.uploader.options.formData[\'custom_field\'] = \'...\';
		}
JS
    )
	->on(\'uploadFinished\', <<<JS
    	function () {
    		console.log(\'文件上传完毕\');
    	}
JS
    );
    
//         
```

**3.监听文件上传成功或文件被删除时产生的变动**

通过以下方法可以监听文件**上传成功**或文件**被删除**时产生的变动

```php
$file = $form->file(\'...\');

Admin::script(
	<<<JS
$(\'{$file->getElementClassSelector()} .file-input\').on(\'change\', function () {
	console.log(\'文件发生变动\', this.value);
});
JS
);
```

**4.允许在uploading事件中拦截并响应错误信息**

从这个版本开始支持在表单的 `uploading` 事件中拦截文件上传并支持响应错误信息到前端

```php
$form->uploading(function (Form $form) {
    return $form->response()->error(\'文件上传失败，请重试！\');
});
```

**5.监听selectTable选中值变动**

```php
$selectTable = $form->selectTable(\'...\')->from(...);

Admin::script(
	<<<JS
$(\'{$selectTable->getElementClassSelector()} input[type="hidden"]\').on(\'change\', function () {
	console.log(\'选中值发生变化\', this.value);
});
JS
);
```

**6.调整树状表格无数据返回，取消返回404状态码**

**7.调整表格displayer类的row属性值类型为model**

**8.暗黑模式细节优化**

```php
$grid->column(...)->modal(function () {
    // $this 指向 model 对象
    dd($this);
});

$grid->actions(function () {
    // $this 指向 model 对象
    dd($this);
});
```

**9.优化卡片中图表显示溢出的问题**

[#822](https://github.com/jqhph/dcat-admin/pull/822)

**10.widget组件增加when方法**

```php
$modal = Dcat\\Admin\\Widgets\\Modal::make()
	->when($condition, function ($modal) {
		// 当 $condition 的值为 真 时，会执行闭包里面的逻辑
	    $modal->xl();
	})
	->body(...)
	->render();
```

### Bug修复

1\\. 修复 `Grid\\Filter::group` 无法保持选择状态问题 [#739](https://github.com/jqhph/dcat-admin/pull/793)
2\\. 修复 `Form::hasMany` 表单条目删除后仍然验证 `required` 问题 [#795](https://github.com/jqhph/dcat-admin/pull/795)
3\\. 修复 地图 表单无法使用问题
4\\. 修复当生成 `composer` 类映射文件且类文件被删除的情况下使用 `guessClassFileName` 会报错问题
5\\. 修复数据导出使用 `Fetched` 事件报错问题 [#815](https://github.com/jqhph/dcat-admin/issues/815)
6\\. 修复设置 `Grid name` 之后无法重置 `filter` 问题
7\\. 修复 `select2` 无法自动使用中文语言包问题 [#839](https://github.com/jqhph/dcat-admin/issues/839)
8\\. 修复表单勾选 `继续创建` 以及 `继续编辑` 跳转路由错误问题 [#814](https://github.com/jqhph/dcat-admin/issues/814)
9\\. 修复一对一关联关系 `range` 表单设置 `rules` 无效问题
10\\. 修复当启用 `fixColumns` 时，时间筛选下拉会被遮挡问题 [#833](https://github.com/jqhph/dcat-admin/issues/833)
11\\. 修复菜单使用`fa`图标无法自动对齐问题 [#758](https://github.com/jqhph/dcat-admin/pull/758)
12\\. 修复表单 `row` 布局下使用 `hasMany` 提交报错问题 [#801](https://github.com/jqhph/dcat-admin/issues/801)
13\\. 修复表单 `hasMany` 无法使用 `select` 联动问题 [#769](https://github.com/jqhph/dcat-admin/issues/769)


## v2.0.11-beta

发布时间 2020/12/06

升级方法，逐步执行以下命令
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.11-beta"
php artisan admin:publish --assets --force
php artisan admin:publish --migrations --force # 表结构有变动
php artisan migrate
```

### Bug修复

1\\. 修复使用 `pjax` 重复刷新页面可能导致 `Dcat.init` 监听失效问题
2\\. 修复 `admin:export-seed --users` 会生成多余代码问题
3\\. 修复表单编辑页面保存后跳转异常问题
4\\. 修复表单页面选择继续编辑会导致 `hasMany` 重复添加数据问题
5\\. 修复 `select` 表单联动后原 `select2 config` 丢失问题 [#779](https://github.com/jqhph/dcat-admin/issues/779)
6\\. 修复 `map` 表单加载异常问题 [#764](https://github.com/jqhph/dcat-admin/issues/764)
7\\. 修复批量删除功能删除数据后无法自动刷新页面问题
8\\. 修复 `hasMany` 表单编辑页面无法正常展示 `row` 以及 `column` 布局问题
9\\. 修复 `Dcat.init` 监听会被异步弹窗解绑问题
10\\. 修复表格工具栏下拉菜单会被固定列表格遮挡问题 [#728](https://github.com/jqhph/dcat-admin/issues/728)
11\\. 修复禁用 `showColumnSelector` 时仍然会读取缓存内容问题

### 功能改进

**1.Form::divider 增加 title 参数**

增加 `title` 参数用于在分割线中间显示标题功能，用法

```php
$form->divider(\'标题\');
```

**2.Grid::footer以及Grid::header调整为支持多次回调**

```php
$grid->header(...);

$grid->header(...);

$grid->header(...);
```

**3.优化表格规格筛选器以及select表单样式**
## v2.0.10-beta

发布时间 2020/11/29

升级方法，逐步执行以下命令
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.10-beta"
php artisan admin:publish --assets --force
php artisan admin:publish --migrations --force # 表结构有变动
php artisan migrate
```

### 功能改进

**1.增加表单右上角提示窗展示字段验证错误信息**

此功能默认开启，可以通过`validationErrorToastr`方法禁用

```php
$form->validationErrorToastr(false);
```

**2.增加 Tree::maxDepth 方法用于限制模型树最大层级**

```php
$tree->maxDepth(5);
```

**3.优化导出功能，支持标题设置关联关系字段以及自动读取grid表格列的标题**

在当前版本中导出列默认与`column`列一致，不再需要手动设置导出的列名称以及翻译，并且支持关联关系字段

```php
$grid->column(\'id\');
$grid->column(\'name\');
...

// 默认与上面的列相同
$grid->export();
```

**4.工具表单增加resetButton与submitButton方法**

```php
// 禁用重置和提交按钮
$form->resetButton(false);
$form->submitButton(false);
```

**5.表单字段的`disable`以及`readOnly`方法增加参数控制是否启用**

```php
// 传 false 则不启用
$form->text(...)->disable(false);
```

**6.文件上传增加`withDeleteData`允许用户设置请求参数，并在上传接口以及删除接口中增加主键字段**

通过 `withDeleteData` 方法可以传递自定义参数到文件删除接口

```php
$form->file(...)->withDeleteData([\'key\' => \'value]);
```

**7.增加`embeds`表单禁止显示标题功能`**
第二个参数传 `false` 则不显示标题

```php
$form->embeds(\'field\', false, function ($form) {
    ...
});
```

**8.重新编写部分单元测试用例，以支持2.x用法**

### Bug修复

1. 修复管理员详情页无法选中已有权限问题 
2. 修复 `admin:export-seed` 命令导出 `seeder` 类名异常问题
3. 修复表单删除跳转异常问题
4. 修复表单继续编辑跳转异常问题
5. 修复父表与 `hasMany` 存在同样字段名称时无法保存父表字段问题
6. 修复暗黑模式下选中子菜单样式异常问题 [#712](https://github.com/jqhph/dcat-admin/issues/712)
7. 修复表单 `block` 布局下表单动态显示功能无效问题 [#723](https://github.com/jqhph/dcat-admin/issues/723)
8. 优化 `selectOptions` 层级结构显示，解决前缀呈现随层级深度指数增加问题 [#618](https://github.com/jqhph/dcat-admin/issues/618)
9. 修复 `admin_view` 没有返回数据问题
10. 修复 `select` 表单 `ajax` 以及 `load` 设置的链接不能带参数问题 [#745](https://github.com/jqhph/dcat-admin/issues/745)
11. 修复表格行操作 `action` 的 `handle` 方法只能获取最后一行数据的 `id` 问题
12. 修复 `list` 表单编辑页无法删除已有数据问题 [#759](https://github.com/jqhph/dcat-admin/issues/723)
13. 修复 `embeds` 范围表单 `name` 属性错误问题


**功能改进**

1.引入[jquery.initialize](https://github.com/pie6k/jquery.initialize)组件，用于监听动态生成的页面元素并设置一个回调，下面来举一个简单的例子来演示用法：

在旧版本中，假如一个元素是`JS`动态生成的，如果我们需要对这个元素绑定一个点击事件的话，那么我们通常需要这么做

```html
<div class="selector">test</div>

<script>
Dcat.ready(function () {
    // 需要先 off 再 on 否则页面刷新后会造成重复绑定问题
    $(document).off(\'click\', \'.selector\').on(\'click\', \'.selector\', function () {
        ...
    })
});
</script>
```

上面这种做法一来比较麻烦，需要先`off`再`on`；二来无法对动态生成的元素做一些特殊处理，例如你想在`.selector`生成后改变背景颜色，这个操作就没办法做到。

在这个版本中我们可以使用`Dcat.init`方法来监听元素动态生成，可以很方便的解决上面两个问题

```html
<div class="selector">test</div>

<script>
Dcat.ready(function () {
    // $this 是当前元素的jquery dom对象
    // id 是当前元素的id属性，如果当前元素没有id则会自动生成一个随机id
    Dcat.init(\'.selector\', function ($this, id) {
        // 修改元素的背景色
        $this.css({background: "#fff"});
        
        // 这里不需要 off 再重新 on，因为这个匿名函数只会执行一次
        $this.on(\'click\', function () {
            ...
        });
    });
});
</script>
```

得益于这个[jquery.initialize](https://github.com/pie6k/jquery.initialize)组件的引入，在当前这个版本中我们对表单组件的前端代码也进行了优化，使其更容易支持`HasMany`这种动态生成的表单类型，大大降低了代码的复杂性。


2.Form::hasMany以及Form::array表单支持column和row布局

如果字段比较多，可以用`column`和`row`布局以节省空间

```php
$form->array(\'field\', function (NestedForm $form) {
    $form->column(6, function (NestedForm $form) {
        $form->text(\'...\');
        
        ...
    });
    
    $form->column(6, function (NestedForm $form) {
        ...
    });
});
```

3.配置过admin.auth.except参数的路由不需要验证权限 [#673](https://github.com/jqhph/dcat-admin/issues/673)


4.Form、Grid以及Show字段类增加when方法

用法示例，类似`Laravel QueryBuilder`的`when`方法

在表格中
```php
// 当第一个参数的值为 真 时才会执行闭包的代码
$grid->column(\'title\')->when(true, function (Grid\\Column $column, $value) {
    $column->label();
});
```

表单
```php
// 当第一个参数的值为 真 时才会执行闭包的代码
$form->text(\'email\')->when(true, function (Form\\Field\\Text $text, $value) {
    $text->type(\'email\');
});
```

5.管理员模型增加canSeeMenu方法控制是否可见菜单

```php
<?php

namespace App\\Models;

use Dcat\\Admin\\Models\\Administrator as Model;

class Administrator extends Model
{
    /**
     * 控制菜单是否可见，默认返回true
     * 
     * @param array|\\Illuminate\\Database\\Eloquent\\Model $menu 菜单节点
     * @return bool
     */
    public function canSeeMenu($menu)
    {
        return true;
    }
}
```

6.增加 admin_script、admin_style、admin_js、admin_css以及admin_require_assets函数

```php
// 相当于 Admin::script
admin_script(\'console.log(xxx)\');

// 相当于 Admin::style
admin_style(\'.my-class {color: red}\');

// 相当于 Admin::js() 
admin_js([\'@admin/xxx.js\']);

// 相当于 Admin::css() 
admin_css([\'@admin/xxx.css\']);

// 相当于 Admin::requireAssets() 
admin_require_assets([\'@select2\']);
```

7.简化动作(Action)的`JS`代码逻辑，去除记住`selector`功能

**BUG修复**

1. 修复表格 orderable 功能异常问题 [#674](https://github.com/jqhph/dcat-admin/issues/674)
2. 修复 JsonResponse methodIf 用法报错问题
3. 修复表格、表单以及数据详情指定 `label`  [#684](https://github.com/jqhph/dcat-admin/issues/684)
4. 修复表格 `Grid::rows` 回调无法正常使用问题
5. 修复widget添加`JS`代码异常导致部分类型的统计卡片异步加载功失效问题
6. 修复表格行操作 getKey 方法异常问题 [#691](https://github.com/jqhph/dcat-admin/issues/691)
7. 修复当页面存在多个 select 表单时无法使用联动功能问题
8. 修复表格删除数据后无法自动刷新页面问题


## v2.0.6-beta

发布时间 2020/11/7

升级方法，逐步执行以下命令
```bash
composer remove dcat/laravel-admin
composer require dcat/laravel-admin:"2.0.6-beta"
php artisan admin:publish --assets --force
php artisan admin:publish --migrations --force # 表结构有变动
php artisan migrate
```

**功能接口破坏性变动**

1.`Form::tags`表单默认保存为`array`类型
```php
// 需要自己转换保存到数据库的格式
$form->tags(\'tag\')->saveAsJson();
```

2.默认禁用 session 中间件

3.`Form\\Tree::disableFilterParents` 重命名为 `Form\\Tree::exceptParentNode`
```php
$form->tree(\'cate\')->exceptParentNode(false);
```

4.文件上传表单部分方法名称调整
```php
// 启用分块上传功能 disableChunked 更改为 chunked$form->image(\'avatar\')->chunked(true);

// 启用自动保存字段值功能 disableAutoSave 更改为 autoSave$form->image(\'avatar\')->autoSave(false);

// 启用删除文件功能 disableRemove 更改为 removeable$form->image(\'avatar\')->removeable(false);
```

**功能改进**

1.代码生成器增加字段拖动排序功能，此方法由小伙伴[@codingyu](https://github.com/codingyu)贡献

2.菜单表增加`show`和`extension`字段，`show`字段用于控制是否显示菜单；`extension`字段用于标记是否为扩展菜单

3.`Form::table`、`Form::array`、`Form::embeds`表单支持关联关系字段
```php
$form->table(\'profile.options\', function ($form) {
 ...});
```

4.增加 `Form::checkbox` 以及 `Form::radio` 表单选项竖排显示功能
```php
$form->checkbox(\'xxx\')->inline(false)->options([...]);
```

5.配置文件跳过登录以及权限验证功能允许配置路由别名
```php
\'auth\' => [
 \'except\' => [ ... \'user.login\', ],],
```

6.`Form\\Row` 增加 `getKey` 以及 `model` 方法

7.优化表格过滤器select表单选中效果，默认不选中

8.表单tab布局优化

**BUG修复**
1\\. 修复 `Form::checkbox` 选中/取消选中全部选项时动态显示表单功能无效问题
2\\. 修复台湾繁体无法翻译默认菜单标题问题 
3\\. 修复 `NestedForm` 中的 `number` 字段输入值为 0 时会被过滤问题 [#634](https://github.com/jqhph/dcat-admin/issues/634)
4\\. 修复模型树`RowAction`异步处理接口时获取主键报错问题
5\\. 修复表格过滤器无法重置关联表字段搜索值问题 [#650](https://github.com/jqhph/dcat-admin/issues/650)
6\\. 修复表格过滤器multipleSelect表单异常问题

## v2.0.5-beta 

发布时间 2020/10/29

BUG修复
1. 修复表格搜索多个关联表字段sql错误问题 [I232T7](https://gitee.com/jqhph/dcat-admin/issues/I232T7)
2. 修复`Form::datetimeRange`表单无法选择日志问题
3. 修复无法添加多个`Form::table`表单字段问题 [#627](https://github.com/jqhph/dcat-admin/issues/627)
4. 修复表格过滤器 MultipleSelectTable 中报错问题
5. 修复表格规格筛选器样式异常问题


## v2.0.4-beta 

发布时间 2020/10/27

BUG修复
1\\. 修复 admin_javascript_json 函数会自动空滤数组空值问题
2\\. 修复数据表单使用 tab 布局报错问题 [#620](https://github.com/jqhph/dcat-admin/issues/620)
3\\. 修复扩展本地安装生成临时目录权限异常问题 [#625](https://github.com/jqhph/dcat-admin/issues/625)
4\\. 修复表单使用 html 方法设置视图存在 script 标签时报错问题 [#624](https://github.com/jqhph/dcat-admin/issues/624)
5\\. 修复数据详情使用关联关系（一对多）显示报错问题 [#623](https://github.com/jqhph/dcat-admin/issues/623)
6\\. 修复 dropdown 下拉菜单计算显示位置异常问题 [#I22S2N](https://gitee.com/jqhph/dcat-admin/issues/I22S2N)

## v2.0.3-beta 

发布时间 2020/10/27

BUG修复
1\\. 修复表单行内编辑显示返回信息异常问题
2\\. 修复`admin.auth.remember`设置无效问题 [#613](https://github.com/jqhph/dcat-admin/issues/613)
3\\. 修复`editor`表单中文翻译异常问题 [#611](https://github.com/jqhph/dcat-admin/issues/611)
4\\. 修复`Filter::scope`选择筛选项不会过滤分页参数问题
5\\. 修复表单事件拦截相关问题
6\\. 修复树形表单使用异常问题 [#619](https://github.com/jqhph/dcat-admin/issues/619)

功能改进
1\\. 增加跳过权限和登录验证的配置方式
2\\. 扩展service provider增加middleware和路由排查注册功能
3\\. 批量操作change事件监听优化
4\\. 增加`RowSelector`健壮性, 以避免遇到`json`数组类型字段无法处理而报错 [#609](https://github.com/jqhph/dcat-admin/pull/609)

## v2.0.2-beta 

发布时间 2020/10/21

BUG修复
1\\. 修复代码生成器生成控制器文件命名空间异常问题 #600 
2\\. 修复配置文件logo路径错误问题
3\\. 修复表格关联字段搜索无效问题
4\\. 修复模型树行操作生成选择器重复问题
5\\. 修复访问无权限页面报错问题
6\\. 修复表格过滤器multipleSelect无法选中关联表字段值问题 #603 
7\\. 修复表单tab布局无效问题 #605 

功能改进
1\\. Auth\\Permission移至Http目录
2\\. 数据表json字段改成text
3\\. 增加登录账号密码错误翻译
4\\. 增加 admin_javascript_json 函数，使大部分组件配置支持传递JS代码
5\\. Admin::color 增加暗黑模式颜色

## v2.0.1-beta 

发布时间 2020/10/20

BUG修复
- 修复数据表格过滤搜索BUG #599 
- 修复代码生成器生成控制器基类命名空间错误问题 #600 

功能改进

- 代码生成器增加页面标题以及面包屑翻译功能
- 异常处理优化
- 增加 admin_setting_array 函数',
   'order' => 1,
   'created_at' => '2024-06-26 15:32:41',
   'updated_at' => '2024-06-26 15:32:41',
   'slug' => 'beta-version-update-log',
),
            (object) array(
   'id' => 88,
   'document_id' => 1,
   'version_id' => 2,
   'chapter_id' => 19,
   'title' => '更新日志',
   'content' => '# 更新日志',
   'order' => 2,
   'created_at' => '2024-06-26 15:33:48',
   'updated_at' => '2024-06-26 15:33:48',
   'slug' => 'update-log',
)
        ]);
    }
}
