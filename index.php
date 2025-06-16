<?php
/**
 * 影视一号基于Violet博客模板魔改而成，安装时请确保模板文件夹名字为yingshiyihao，请观看使用文档！
 * @package 影视一号
 * @author 泽泽社长
 * @version 1.7.1
 * @link http://qqdie.com/archives/violet-typecho-themes.html
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 $this->need('sidebar.php');
$lie= array("1","2","4");
$week1='';//周1要更新的番剧id
$week2='';//周2要更新的番剧id
$week3='';//周3要更新的番剧id
$week4='';//周4要更新的番剧id
$week5='';//周5要更新的番剧id
$week6='';//周6要更新的番剧id
$week0='';//周日要更新的番剧id
$dymid=array
(


//标签id和描述，用于显示在首页最新视频下方，格式如：array("标签id","想要显示的小标题"),
);
$flmid=array
(

//分类id和描述，用于显示在首页最新视频下方，格式如：array("分类id","想要显示的小标题"),
);

 ?>
<?php if(isset($_GET['register'])&&!$this->user->hasLogin()&&$this->options->allowRegister): ?>
<?php  $this->need('register.php'); ?>
<?php else: ?>
<?php if(isset($_GET['login'])&&!$this->user->hasLogin()): ?>
<?php  $this->need('login.php'); ?>
<?php else: ?>
<?php if(isset($_GET['setting'])&&$this->user->hasLogin()): ?>
<?php  $this->need('setting.php'); ?>
<?php else: ?>
<div class="container-fluid">
<div class="row">
<div class="col-12">
 <form method="post" role="search">   
<div class="input-group mt-3 mb-3 d-md-none">
<input type="text" name="s" class="form-control" placeholder="Search" aria-label="Search">
<div class="input-group-append"> <button class="btn btn-primary" type="submit">搜索</button>
</div>
</div>
</form></div>
</div>

<div class="row  mt-3">
<div class="col-12 col-xl-4 mb-3">

<div id="demo" class="carousel slide" data-ride="carousel">
 
    <!-- 指示符 -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
 
    <!-- 轮播图片 -->
    <div class="carousel-inner lunbo">
        <div class="carousel-item active">
<a href="http://sfdie.com/archives/881.html"><img src="https://s2.ax1x.com/2019/10/08/ufZKVP.jpg"></a>
        </div>
        <div class="carousel-item">
<a href="http://sfdie.com/archives/1190.html"><img src="https://s2.ax1x.com/2019/10/08/ufmQ1g.jpg"></a>
        </div>
        <div class="carousel-item">
<a href="http://sfdie.com/archives/140.html"><img src="https://s2.ax1x.com/2019/10/08/ufmoDA.jpg"></a>
        </div>
    </div>
 
    <!-- 左右切换按钮 -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
</div>





<div class="col-12 col-xl-8 d-none d-xl-block">
<div class="row archive">
        <?php $this->widget('Widget_Post_leixing', 'leixing=1&pageSize=6')->to($lianzai); ?>
        <?php while($lianzai->next()): ?>
<div class="col-4 col-md-2">
 
<div class="card d-block"><div class="card-img-bili pb-0" style="height: 200px;">
<a href="<?php $lianzai->permalink() ?>"><img class="card-img-top b-lazy y10r5" src="<?php echo theurl; ?>img/load.gif" data-url="<?php showThumbnail($lianzai); ?>" alt="<?php $lianzai->title(); ?>"></a>
 <div class="over"><a href="<?php $lianzai->permalink() ?>"><span class="title"><?php $lianzai->title(); ?></span></a></div>
<?php if($lianzai->fields->zhuangtai>0){echo '<div class="zhuangtai">连载</div>';}else{
if($lianzai->fields->zhuangtai==-1){echo '<div class="zhuangtai">待定</div>';}
} ?>
</div> 

</div> 
</div>

        <?php endwhile; ?>
        </div>

</div>
</div>







<div class="row">
<div class="col-12">

<div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mb-3">番剧表</h4>
 <ul class="nav nav-tabs nav-bordered mb-3" id="fanjubiao">
<li class="nav-item"><a href="#week-0" data-toggle="tab" aria-expanded="false" class="nav-link"> <span>周日</span>
</a></li>
<li class="nav-item"><a href="#week-1" data-toggle="tab" aria-expanded="false" class="nav-link"><span>周一</span></a></li>
<li class="nav-item"><a href="#week-2" data-toggle="tab" aria-expanded="true" class="nav-link"><span>周二</span> </a> </li>
 <li class="nav-item"><a href="#week-3" data-toggle="tab" aria-expanded="false" class="nav-link"> <span>周三</span></a></li>
<li class="nav-item"><a href="#week-4" data-toggle="tab" aria-expanded="false" class="nav-link"> <span>周四</span>
</a></li>
<li class="nav-item"><a href="#week-5" data-toggle="tab" aria-expanded="false" class="nav-link"> <span>周五</span></a></li>
<li class="nav-item"><a href="#week-6" data-toggle="tab" aria-expanded="false" class="nav-link"> <span>周六</span>
</a></li>
</ul>
<div class="tab-content">


<?php

for($i=0;$i<7;$i++){

?>

<div class="tab-pane" id="week-<?php echo $i; ?>">
<div class="row">
<?php 
if(${'week'.$i}!=null||${'week'.$i}!=''){
$this->widget('Widget_Post_fanjubiao@week'.$i, 'fanjubiao='.${'week'.$i})->to($lianzai); ?>
<?php while($lianzai->next()): ?><div class="col-6 col-md-4 col-xl-2">
<div class="media mb-2">
<a href="<?php $lianzai->permalink(); ?>" title="<?php $lianzai->title(); ?>">
<img class="mr-1 y10r5 tuijian b-lazy" src="<?php echo theurl; ?>img/load.gif" data-url="<?php if($lianzai->fields->thumb){$lianzai->fields->thumb();} ?>" alt="image"></a>
<div class="media-body">
<a href="<?php $lianzai->permalink(); ?>" title="<?php $lianzai->title(); ?>"> <span class="mb-1 mt-1"><?php $lianzai->title(); ?></span></a>
<p class="mb-1">年代：<?php if($lianzai->fields->niandai){$lianzai->fields->niandai();} ?></p>
<p class="mb-0"><?php gengxin($lianzai->fields->mp4); ?></p>
</div> <!-- end media-body -->
</div> <!-- end media --></div>
<?php endwhile;}else{echo '暂无番剧或未配置番剧更新表';} ?></div>
</div>
<?php
}
?>
                                         
                                        
</div></div></div>
</div></div>











<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=12')->to($new); ?>
<h4 class="mb-2">最新加入番剧</h4>
<div class="row archive">
<?php while ($new->next()): ?>
<div class="col-<?php echo $lie[2]; ?> col-md-<?php echo $lie[1]; ?> col-xl-<?php echo $lie[0]; ?>">
<div class="card d-block"><div class="card-img-bili">
<a href="<?php $new->permalink() ?>"><img class="card-img-top b-lazy y10r5" src="<?php echo theurl; ?>img/load.gif" data-url="<?php showThumbnail($new); ?>" alt="<?php $new->title(); ?>"></a>
 <div class="over"><a href="<?php $new->permalink() ?>"><span class="title"><?php $new->title(); ?></span></a></div>
<?php if($new->fields->zhuangtai>0){echo '<div class="zhuangtai">连载</div>';}else{
if($new->fields->zhuangtai==-1){echo '<div class="zhuangtai">待定</div>';}
} ?>
</div> 
</div> 
</div>
<?php endwhile; ?>
</div>






<?php 
$nf=count($flmid);if($nf>0){
for($i=0;$i<$nf;$i++){
$this->widget('Widget_Archive@dy'.$i, 'pageSize=12&type=category', 'mid='.$flmid[$i][0])->to($dy); ?>
<h4 class="mb-2"><?php echo $flmid[$i][1]; ?><a class="float-right" href="<?php echo $dy->_pageRow["permalink"]; ?>">更多</a></h4>
<div class="row archive">
<?php while ($dy->next()): ?>
<div class="col-<?php echo $lie[2]; ?> col-md-<?php echo $lie[1]; ?> col-xl-<?php echo $lie[0]; ?>">
<div class="card d-block"><div class="card-img-bili">
<a href="<?php $dy->permalink() ?>"><img class="card-img-top b-lazy y10r5" src="<?php echo theurl; ?>img/load.gif" data-url="<?php showThumbnail($dy); ?>" alt="<?php $dy->title(); ?>"></a>
 <div class="over"><a href="<?php $dy->permalink() ?>"><span class="title"><?php $dy->title(); ?></span></a></div>
<?php if($dy->fields->zhuangtai>0){echo '<div class="zhuangtai">连载</div>';}else{
if($dy->fields->zhuangtai==-1){echo '<div class="zhuangtai">待定</div>';}
}
 ?>
</div> 
</div> 
</div>
<?php endwhile; ?>
</div>
<?php }} ?>



<?php 
$n=count($dymid);if($n>0){
for($i=0;$i<$n;$i++){
$this->widget('Widget_Archive@dy'.$i, 'pageSize=12&type=tag', 'mid='.$dymid[$i][0])->to($dy); ?>
<h4 class="mb-2"><?php echo $dymid[$i][1]; ?><a class="float-right" href="<?php echo $dy->_pageRow["permalink"]; ?>">更多</a></h4>
<div class="row archive">
<?php while ($dy->next()): ?>
<div class="col-<?php echo $lie[2]; ?> col-md-<?php echo $lie[1]; ?> col-xl-<?php echo $lie[0]; ?>">
<div class="card d-block"><div class="card-img-bili">
<a href="<?php $dy->permalink() ?>"><img class="card-img-top b-lazy y10r5" src="<?php echo theurl; ?>img/load.gif" data-url="<?php showThumbnail($dy); ?>" alt="<?php $dy->title(); ?>"></a>
 <div class="over"><a href="<?php $dy->permalink() ?>"><span class="title"><?php $dy->title(); ?></span></a></div>
<?php if($dy->fields->zhuangtai>0){echo '<div class="zhuangtai">连载</div>';}else{
if($dy->fields->zhuangtai==-1){echo '<div class="zhuangtai">待定</div>';}
}
 ?>
</div> 
</div> 
</div>
<?php endwhile; ?>
</div>
<?php }} ?>










<!--取消注释可显示首页友链
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body youlink">
<h5 class="card-title mb-1">友链</h5>
<a href="https://qqdie.com/" target="_blank">泽泽社长</a>
</div>
</div>
</div>
</div>-->

</div><?php endif; ?><?php endif; ?><?php endif; ?>
<?php $this->need('footer.php'); ?>
