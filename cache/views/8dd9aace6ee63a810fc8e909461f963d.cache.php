<?php include $this->_include('header'); ?>
        <div class="bottom">
        
			<?php include $this->_include('column'); ?>

            <!--m-focus-->
			     
            <div class="nfb8">
            	<div class="nfb7-a"><span><?php echo $cats[$catid]['catname']; ?></span><font><?php echo $cats[$catid]['catdir']; ?></font></div>
                <div class="nfb8-e">
                	<div class="nfb8-e1">
                    	<h1><?php echo $title; ?></h1>
                        <p><span>来源：<?php echo $laiyuan; ?></span><span>发布时间：<?php echo date('Y-m-d',$updatetime); ?></span><span>浏览次数：<script type="text/javascript" src="<?php echo url('api/hits',array('id'=>$id, 'hits'=>$hits)); ?>"></script></span></p>
                    </div>
                    <div class="nfb8-e2">
                    	<?php echo $content; ?>
                    </div>
                    <div class="nfb8-e3"><a href="<?php echo $cats[$catid]['url']; ?>" title="">返回列表</a></div>
                    <div class="nfb8-e4">
						<font>关键词：</font>
						<span>
						<?php $keywords=explode(',',$keywords);$i=1;  if (is_array($keywords)) { $count=count($keywords);foreach ($keywords as $t) {  if ($i>1) { ?>
						 、
						<?php }  echo $t;  $i++;  } } ?>
						</span>
					</div>
                    <div class="nfb8-e5">
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
                        <div>
							<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
							<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
						</div>
                    </div>
                </div>
                
                

            </div>














<?php include $this->_include('footer'); ?>