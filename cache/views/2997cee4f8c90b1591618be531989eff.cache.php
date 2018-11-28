<?php include $this->_include('header'); ?>

<div class="ban1">
	<div class="ban1z">
    	<div class="ban1z-a"><img src="<?php echo $cats[$aa]['image']; ?>" /></div>
    </div>
</div>


<style>
.sr-bdimgshare-black .bdimgshare-bg {
    background: none;
}
</style>


<div class="nfa7">
	<div class="nfa7z">
		<span>您的位置：</span><a href="<?php echo SITE_URL; ?>" title="">首页</a> <span> > </span> <?php echo catpos($catid, '<span> &gt; </span>'); ?>
    </div>
</div>



<div class="nfa8">
	<div class="nfa8z">
		<div class="nfa8z-a">
        	<div class="nfa8z-a1">
            	<h1><?php echo $title; ?></h1>
                <p><span>来源：<?php echo $laiyuan; ?></span><span>发布时间：<?php echo date('Y-m-d',$updatetime); ?></span><span>浏览次数：<script type="text/javascript" src="<?php echo url('api/hits',array('id'=>$id, 'hits'=>$hits)); ?>"></script></span></p>
            </div>
            <div class="nfa8z-a2">
            	<?php echo $content; ?>
            </div>
            <div class="nfa8z-a3">
                <?php $keywords=explode(',',$keywords);$i=1; ?>
            	<div class="nfa8z-a3a">
                    <font>关键词:</font>
                    <span>
                    <?php if (is_array($keywords)) { $count=count($keywords);foreach ($keywords as $t) {  if ($i>1) { ?>
                     、
                    <?php }  echo $t;  $i++;  } } ?>
                    </span>
                </div>
                <div class="nfa8z-a3b">
                	<a href="<?php echo $cats[$catid]['url']; ?>" title="">返回列表</a>
                </div>
            </div>
            <div class="nfa8z-a4">
            	<div class="nfa8z-a4a">
            		<p><font>上一篇文章：</font>
                    <?php if (isset($next_page['url'])) { ?>
                    <a href="<?php echo $next_page['url']; ?>" title="<?php echo $next_page['title']; ?>"><?php echo $next_page['title']; ?></a>
                    <?php } else { ?>
                    <span>已经是第一篇了</span>
                    <?php } ?>
                    </p>
                    <p><font>下一篇文章：</font>
                    <?php if (isset($prev_page['url'])) { ?>
                    <a href="<?php echo $prev_page['url']; ?>" title="<?php echo $prev_page['title']; ?>"><?php echo $prev_page['title']; ?></a>
                    <?php } else { ?>
                    <span>已经是最后一篇了</span>
                    <?php } ?>
                    </p>
                    <p>
                        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                    </p>
                </div>
            </div>
        </div>
        
        <?php include $this->_include('right'); ?>

    </div>
</div>



<?php include $this->_include('footer'); ?>