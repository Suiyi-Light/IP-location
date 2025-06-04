# IP-location
显示评论归属地，使用腾讯位置ip定位api，国内显示省级行政区，国外显示国家。
# 功能
1.当发表评论时请求腾讯位置api获取IP属地，成功获取后写入数据库。
2.同一IP设置24小时缓存，避免一段时间同一IP重复请求。
3.IP属地显示在评论区、后台评论页面，在后台提供一键更新获取IP属地功能。

# 功能
1.当发表评论时请求腾讯位置api获取IP属地，成功获取后写入数据库。
2.同一IP设置24小时缓存，避免一段时间同一IP重复请求。
3.IP属地显示在评论区、后台评论页面，在后台提供一键更新获取IP属地功能。
![评论区](https://cdn.suiyil.cn/blog/uploads/2025/06/image-4.png "评论区")
![后台](https://cdn.suiyil.cn/blog/uploads/2025/06/image-2.png "后台")
![评论后台](https://cdn.suiyil.cn/blog/uploads/2025/06/image-3.png "评论后台")


# 设置说明
1. 下载插件压缩包，通过本地上传的方式安装插件。
2. 前往腾讯位置服务网站 (http://lbs.qq.com) 进行注册并完成认证。
3. 新建应用，创建 key，勾选 WebServiceAPI，设置授权 IP 为服务器 IP。
4. 前往 WordPress 管理页面，前往 IP 属地设置页面填写 key。

# 感谢
1.easy-location（https://github.com/bigfa/easy-location）

2. 为博客添 ip 归属地 [enjoy](https://mcenjoy.cn/1241/ [链接已失效])

3. 腾讯位置服务 (https://lbs.qq.com/)

4.DeepSeek(https://chat.deepseek.com/) 、腾讯元宝 (https://yuanbao.tencent.com/)
