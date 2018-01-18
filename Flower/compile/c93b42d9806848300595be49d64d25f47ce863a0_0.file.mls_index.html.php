<?php
/* Smarty version 3.1.30, created on 2018-01-18 07:38:34
  from "D:\Desktop\www\Flower\template\index\mls_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a604efa21d4a5_31666257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c93b42d9806848300595be49d64d25f47ce863a0' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\mls_index.html',
      1 => 1516260261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a604efa21d4a5_31666257 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docter</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
mls_index.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
/mls_iconfont/iconfont.css">
</head>
<body>
<header>
    <a href="" class="write"><img src="<?php echo IMG_PATH;?>
01.png" alt=""></a>
    <div class="title">花医生</div>
    <a href="index.php?a=search2" class="sou"><img src="<?php echo IMG_PATH;?>
02.gif" alt=""></a>
</header>
<section>
    <div class="ellipse"><img src="<?php echo IMG_PATH;?>
03.png" alt=""></div>
    <div class="question">
        <div class="all"><a href="doctor.html">
            <i>.</i>
            全部问题
            <i>.</i></a>
        </div>
        <a href='index.php?a=doctor2' class="my">
            <!--<i>.</i>-->
            我的提问
            <!--<i>.</i>-->
        </a>
    </div>
</section>
<section>
    <div class="display">
        <div class="only">
            <input type="checkbox" id="dui" class="agreement" name="agreement" onclick="checkboxChecked(this);">
            仅显示已解答问题
        </div>
        <div class="only1">
            <input type="checkbox" id="dui" class="agreement" name="agreement" onclick="checkboxChecked(this);">
            仅显示未解答问题
        </div>
    </div>
    <!--1-->
    <div class="con">
        <div class="admin">
            <img src="<?php echo IMG_PATH;?>
04.png" alt="" class="admin1">
            <span class="riqi">
                <div><img src="<?php echo IMG_PATH;?>
05.png" alt="">09-17</div>
                <div class="solution1">已解答 <i class="icon1 icon-duihao"></i></div>
                <div class="triangle1"></div>
            </span>
            <div class="problem"><p>夏天紫花苜蓿突然凋零怎么办 ? 到底是由于什 么原因所导致的，请专家帮忙解答。</p></div>
        </div>
        <div class="name">Mr.Echo</div>
        <div class="answer">
            <div class="answer-title">
                <div><img src="<?php echo IMG_PATH;?>
06.png" alt="">最佳答案</div>
                <div class="zhuan">专家波</div>
            </div>
            <p>如果拿不准的情况下，尽量选择原盆原土尽量选择本地、应季开花的种类，容易缓苗恢复。</p>
            <div class="bottom">
                <ul class="icons">
                    <li><a href=""><i class="icon icon-dianzan"></i>448</a></li>
                    <li><a href=""><i class="icon icon-shoucang"></i>525</a></li>
                    <!--<li><i class="icon icon-fenxiang"></i>826</li>-->
                </ul>
                <h6>更多解答&nbsp&gt;</h6>
            </div>
        </div>

    </div>

    <!--2-->
    <div class="con1">
        <div class="admin2">
            <img src="<?php echo IMG_PATH;?>
07.png" alt="" class="admin1">
            <span class="riqi">
                <div><img src="<?php echo IMG_PATH;?>
05.png" alt="">09-17</div>
                <div class="solution">待解答 <i class="icon1 icon-qianbi"></i></div>
                <div class="triangle"></div>
            </span>
            <div class="answer1">
                <div class="answer-title1">
                    <p>夏天紫花苜蓿突然凋零怎么办 ? 到底是由于什 么原因所导致的，请专家帮忙解答。</p>
                    <img src="<?php echo IMG_PATH;?>
08.png" alt="">
                </div>
            </div>
        </div>
        <div class="name">Mr.Echo</div>

    </div>
    <!--3-->
    <div class="con2">
        <div class="admin">
            <img src="<?php echo IMG_PATH;?>
09.png" alt="" class="admin1">
            <span class="riqi">
                <div><img src="<?php echo IMG_PATH;?>
05.png" alt="">09-17</div>
                <div class="solution1">已解答 <i class="icon1 icon-duihao"></i></div>
                <div class="triangle1"></div>
            </span>
            <div class="problem1">
                <p>夏天紫花苜蓿突然凋零怎么办 ? 到底是由于什 么原因所导致的，请专家帮忙解答。</p>
                <ul class="image">
                    <li><img src="<?php echo IMG_PATH;?>
10.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
11.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
12.png" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="name">Mr.Echo</div>
        <div class="answer2">
            <div class="answer2-title">
                <div><img src="<?php echo IMG_PATH;?>
06.png" alt="">最佳答案</div>
                <div class="zhuan">专家波</div>
            </div>
            <p>如果拿不准的情况下，尽量选择原盆原土尽量 选择本地、应季开花的种类，容易缓苗恢复。</p>
            <div class="bottom">
                <ul class="icons">
                    <li><a href=""><i class="icon icon-dianzan"></i>448</a></li>
                    <li><a href=""><i class="icon icon-shoucang"></i>525</a></li>
                    <li><a href=""><i class="icon icon-fenxiang"></i>826</a></li>
                </ul>
                <h6>更多解答&nbsp&gt;</h6>
            </div>
        </div>
    </div>
</section>
<!--footer-->
<footer>
    <ul class="footer_list">
        <li>
            <a href="index.php">
                <div class="footer_icon">
                    <img src="<?php echo IMG_PATH;?>
hfy_%20science.png" alt="">
                </div>
                <div class="footer_text">
                    科普
                </div>
            </a>

        </li>
        <li class='show'>
            <a href="index.php?a=doctor">
                <div class="footer_icon hot">
                    <img src="<?php echo IMG_PATH;?>
hfy_doctor.png" alt="">
                </div>
                <div class="footer_text txt">
                    医生
                </div>
            </a>

        </li>
        <div class="RichScan">
            <div class="richscan_round">
                <div class="camera">
                    <img src="<?php echo IMG_PATH;?>
hfy_camera.png" alt="">
                </div>
            </div>
        </div>
        <li>
            <a href="index.php?a=around">
                <div class="footer_icon">
                    <img src="<?php echo IMG_PATH;?>
hfy_shopping.png" alt="">
                </div>
                <div class="footer_text">
                    周围
                </div>
            </a>

        </li>
        <li>

            <a href="index.php?a=mrrPre">
                <div class="footer_icon">
                    <img src="<?php echo IMG_PATH;?>
hfy_contact.png" alt="">
                </div>
                <div class="footer_text">
                    我的
                </div>
            </a>

        </li>
    </ul>
</footer>
</body>
</html>






















<?php }
}
