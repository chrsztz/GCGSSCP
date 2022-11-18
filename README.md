## **广碧初中学生平台（GCGSSGP）项目介绍**
各位旅行者们大家早上/中午/下午好，欢迎来到广东碧桂园学校初中部学生综合服务平台(GCGSSGP)的Github项目主页

站点：[bgyservice.cn](https://bgyservice.cn)
## 主页截图
![Alt](https://cdn.bgyservice.cn/uploads%2F2022%2F11%2F18%2F1acc6963e3fa72c60a7d0ee6e37ae7c.png#pic_center)
 ## 网站内容
 

 1. 学校综合文化项目的搬运（学生报，广播站，电视台等）
 2. 音乐鉴赏（来自HOYO-MiX的些许音乐）
 3. GCGS Drive（使用[Cloudreve](https://github.com/cloudreve/Cloudreve)搭建）
 4. 6-9年级的各学科教材（包含pdf与presentation plus)
 5. 各年级各单元的数学分层练习
 6. ......
## Q&A
 Q:本网站主要有什么内容？

 A:本网站包括了来自往期初中学生报，初中广播站，初中电视台的搬运，各年级的电子教材，编程练习，学校网盘，音乐鉴赏，数学练习等等

Q:本网站是原创吗？

A：是的。本网站的设计，搭建与制作皆由本小组团队完成，但我们使用了些许开源项目或是第三方的API，具体已在下面列出

Q:本网站是完全免费的吗？

A：所有板块均能免费试用，若您愿意支持我们，将来我们会在“网盘”板块推出增值服务，以超值的价格享用额外的储存空间

Q：Jacopo是谁？恒润标本室又是什么？

A：Jacopo是我们的特别合作伙伴，此网站与他所领导的项目：[恒润标本室](https://ins.chuangzhi.ink)紧密合作，进行了大量的双方交流

Q：本网站开源吗？

A：部分开源！获取方法就在下面！

Q：本网站与网盘安全吗：

A：本站与其附属项目全部采用了HTTPS加密协议，网盘采用了阿里云的oss对象储存技术，提供绝对的安全浏览

Q：如何练习网站团队？

A：你可以通过每个页面右下角的聊天标志，或是联系邮箱ztzchris@outlook.com联系我们
## 构建
**记得安装必要依赖：`git`  `zip`  `MySQL数据库`等

**目前代码为直接移植，未在各系统/运行环境进行测试，请谨慎操作！

**克隆代码**
```bash
cd /.../.../    #此处替换为运行位置的绝对路径
git clone https://github.com/chrsztz/GCGSSGP.git
```

**解压代码**

```bash
tar GCGSSGP-master.zip
```

**安装部署**

在浏览器中打开.../.../wp-admin/install.php安装即可
## 开源组件，资源引用与第三方API
本站使用雨云的云服务器与cdn加速进行搭建

本站的dns云解析服务, oss对象储存服务来自阿里云

本站使用Google Cloud 的Cloud Translation api进行机器翻译

本站使用来自Digicert的DV ssl证书，证书由阿里云签发，由雨云进行托管

本站的“网盘”栏目使用开源项目Cloudreve搭建

本站的“编程练习”栏目使用Google的Blocky Games项目

本站所有国内教材文件均来自于国家中小学智慧教育平台

本网站由宝塔后台部署的WordPress搭建，使用php项目以及MySQL数据库

本网站背景图片来自于Apple®以及miHoYo®等，学校图片来自学校官网

主站分别采用WordPress 6.1，Bravada，PHP7.4，宝塔7.9.4搭建
## 技术栈
PHP+JavaScript+CSS+SCSS+HTML
