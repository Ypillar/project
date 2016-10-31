<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>后台首页</title>
    <!-- Bootstrap -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/stylesy.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn<link href="bootstrap.min.css" rel="stylesheet">'t work if you view the page via file:// -->
</head>

<body>
    <div class="box">
        <header>
            <!-- 头部信息 -->
            <div class="header">
                <div class="header_left">
                    <h3>个人登录系统</h3>
                </div>
                <div class="header_right">
                    <input type="button" class="    btn btn-primary" value="退出">
                </div>
            </div>
        </header>
        <article>
            <div class="box_body">
                <div class="left">
                    <div class="overall">
                        <!-- <div class="title">
                            <img src="images/menu-all.png">
                        
                        </div> -->
                        <ul>
                            <li id="2001">
                                <a href="#" class="navigation">全局设置</a>
                                <div class="menu1">
                                    <a href="#">基础设置</a>
                                    <a href="#">其它设置</a>
                                    <a href="#">界面风格</a>
                                    <a href="#">系统工具</a>
                                </div>
                            </li>
                            <li id="2002">
                                <a href="#" class="navigation2">权限管理</a>
                                <div class="menu2">
                                    <a href="#">基本权限</a>
                                    <a href="#">分配权限</a>
                                    <a href="#">权限管理</a>
                                    <a href="#">成员管理</a>
                                </div>
                            </li>
                            <li id="2003">
                                <a href="#" class="navigation3">新闻管理</a>
                                <div class="menu3">
                                    <a id="_news1">新闻查询</a>
                                    <a id="_news2">添加新闻</a>
                                    <a id="_news3">修改新闻</a>
                                    <a id="_news4">删除新闻</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 右边主体 -->
                <div class="right">
                    <div class="box_center">
                        <div class="menu1">
                            <a href="#">常用功能</a>
                            <a href="#">备用记事</a>
                            <a href="#">人员登记</a>
                            <a href="#">账务后勤</a>
                        </div>
                    </div>
                    <div class="box_center2">
                        <div class="bottom_line1"></div>
                        <div class="bottom_line2"></div>
                        <div class="bottom_line3"></div>
                        <div class="bottom_line4"></div>
                    </div>
                    <div class="box-navigation">
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/blue_home_white_64px_3717_easyicon.net.png">
                                </div>
                                <span>首页管理</span>
                            </a>
                        </div>
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/29_64px_28000_easyicon.net.png">
                                </div>
                                <span>界面调整</span>
                            </a>
                        </div>
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/blue_idcmts_man_suck_user_64px_136_easyicon.net.png">
                                </div>
                                <span>个人信息</span>
                            </a>
                        </div>
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/button_folder_64px_11630_easyicon.net.png">
                                </div>
                                <span>图片添加</span>
                            </a>
                        </div>
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/12_camera_64px_12569_easyicon.net.png">
                                </div>
                                <span>视频添加</span>
                            </a>
                        </div>
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/chart_graph_statistics_64px_4228_easyicon.net.png">
                                </div>
                                <span>新闻列表</span>
                            </a>
                        </div>
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/arrow_bottom_download_64px_3704_easyicon.net.png">
                                </div>
                                <span>下载管理</span>
                            </a>
                        </div>
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/print_printer_64px_11167_easyicon.net.png">
                                </div>
                                <span>打印文件</span>
                            </a>
                        </div>
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/favourite_star_64px_11009_easyicon.net.png">
                                </div>
                                <span>我的收藏</span>
                            </a>
                        </div>
                        <div class="nav1">
                            <a href="#">
                                <div> <img src="images/on_64px_26088_easyicon.net.png">
                                </div>
                                <span>退出系统</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="news">
                    <div class="news-query">
                        <div class="news-nav">
                            <span>当前操作：新闻查询</span>
                        </div>
                        <div class="center-query">
                            <form action="php/select.php" method="get">
                                <div class="select">
                                    <input type="text" placeholder="请输入你要查询的新闻标题">
                                    <button class="btn btn-primary" type="button">查询</button>
                                </div>
                                <table class="table table-striped">
                                <?php

header("Content-type: application/json; charset=utf-8");
 header("Content-Type:text/html;charset=utf-8");
 $con = mysql_connect("localhost","root","");
 mysql_set_charset('utf8', $con);
    mysql_select_db("news", $con);
    $result = mysql_query("SELECT * FROM news_surface");

while($row = mysql_fetch_array($result))
  {
// json_encode
  echo ('<tr>'.'<td>'.$row['newsid'].'</td>'. '<td>'.$row['newstite'].'</td>'.'<td>'.$row['newsname'].'</td>'.'<td>'.$row['newsfl'].'</td>'.'<td>'.$row['newsdate'].'</td>'.'</tr>');
    echo ("<br/") ;
  }




mysql_close($con);
?>
                                    <tr>
                                        <th>序号</th>
                                        <th>新闻标题</th>
                                        <th>作者</th>
                                        <th>新闻分类</th>
                                        <th>发布日期</th>
                                        <th>操作</th>
                                    </tr>
                                    <tr>
                                        <td width="35px">1</td>
                                        <td>习近平就巴基斯坦遇袭表慰问</td>
                                        <td width="35px"> </td>
                                        <td width="70px">热点新闻</td>
                                        <td width="100px">2016/08/10</td>
                                        <td width="115px">
                                            <button class="btn" type="submit">修改</button>
                                            <button class="btn" type="submit">删除</button>
                                        </td>
                                    </tr>

                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="news-add">
                        <div class="news-nav">
                            <span>当前操作：新闻添加</span>
                        </div>
                        <form action="php/indexst.php" method="post">
                            <div>
                                <div class="line">
                                    <label class="widthtit">新闻标题:</label>
                                    <input type="text" name="newstite" class="textlength" />
                                    </span>
                                </div>
                                <div class="line">
                                    <label class="widthtit">新闻分类:</label>
                                    <div class="widthcenter">
                                        <div class="input-append">
                                            <select name="newsfl">
                                                <option value="精选">精选</option>
                                                <option value="百家">百家</option>
                                                <option value="本地">本地</option>
                                                <option value="娱乐">娱乐</option>
                                                <option value="奥运">奥运</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line">
                                <label class="widthtit">作者:</label>
                                <input type="text" name="newsname" placeholder="姓名">
                            </div>
                            <div class="line">
                                <label class="widthtit">日期:</label>
                                <input type="date" name="newsdate" />
                            </div>
                            <div class="line">
                                <label class="widthtit">图片上传:</label>
                                <input type="file" name="newsfile" />
                            </div>
                            <div class="line1">
                                <label class="widthtit">内容:</label>
                                <textarea rows="15" name="newscontent" class="textareastyle"></textarea>
                            </div>
                            <div class="line">
                                <button class="btn btn-large btn-primary" name="submit" type="submit">提交</button>
                                <button class="btn btn-large btn-primary" type="reset">重置</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="news-revision">
                    <div class="news-nav">
                        <span>当前操作：新闻修改</span>
                    </div>
                    <div class="center-query">
                        <div class="select">
                            <input type="text" placeholder="请输入你要修改的新闻标题">
                            <button class="btn btn-primary" type="button">修改</button>
                        </div>
                        <table class="table table-striped">
                            <tr>
                                <th>序号</th>
                                <th>新闻标题</th>
                                <th>作者</th>
                                <th>新闻分类</th>
                                <th>发布日期</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td width="35px">1</td>
                                <td>习近平就巴基斯坦遇袭表慰问</td>
                                <td width="35px"> </td>
                                <td width="70px">热点新闻</td>
                                <td width="100px">2016/08/10</td>
                                <td width="115px">
                                    <button class="btn" type="submit">修改</button>
                                    <button class="btn" type="submit">删除</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="news-delete">
                    <div class="news-nav">
                        <span>当前操作：新闻删除</span>
                    </div>
                    <div class="center-query">
                        <div class="select">
                            <input type="text" placeholder="请输入你要删除的新闻标题">
                            <button class="btn btn-primary" type="button">删除</button>
                        </div>
                        <table class="table table-striped">
                            <tr>
                                <th>序号</th>
                                <th>新闻标题</th>
                                <th>作者</th>
                                <th>新闻分类</th>
                                <th>发布日期</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td width="35px">1</td>
                                <td>习近平就巴基斯坦遇袭表慰问</td>
                                <td width="35px"> </td>
                                <td width="70px">热点新闻</td>
                                <td width="100px">2016/08/10</td>
                                <td width="115px">
                                    <button class="btn" type="submit">修改</button>
                                    <button class="btn" type="submit">删除</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <script type="text/javascript" Src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/indexsy.js"></script>
</body>

</html>
