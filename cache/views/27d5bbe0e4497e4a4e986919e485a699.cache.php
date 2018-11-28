<?php include $this->_include('header'); ?>

<div class="ban1">
	<div class="ban1z">
    	<div class="ban1z-a"><img src="<?php echo $cats[$aa]['image']; ?>" /></div>
    </div>
</div>





<div class="nfa6">
	<div class="nfa6z">
		<div class="nfa6z-a">
        	<div class="nfa6z-a1">
            	<p><span><?php echo $cats[$aa]['catname']; ?></span></p>
                <p><font><?php echo $cats[$aa]['catdir']; ?></font></p>
            </div>
            <div class="nfa6z-a2">
            	<ul>
                	<?php if (is_array($cats)) { $count=count($cats);foreach ($cats as $t) {  if ($t['parentid']==$aa && $t['ismenu']) { ?>
                    <li <?php if ($t['catid']==$catid) { ?>class="pon"<?php } ?>><a href="<?php echo $t['url']; ?>" title="<?php echo $t['catname']; ?>" ><?php echo $t['catname']; ?></a></li>
                    <?php }  } } ?>
                </ul>
            </div>
        </div>
        <div class="nfa6z-b">
        	<div class="nfa6z-b1"><span><?php echo $cats[$catid]['catname']; ?></span><font><?php echo $cats[$catid]['catdir']; ?></font></div>
            <div class="nfa6z-b6">
            	<p><span>重庆总部：</span></p>
                <p><font><i><img src="<?php echo SITE_THEME; ?>images/lw1.png" /></i>全国服务电话：<!--服务热线--><?php echo block(7); ?><!--服务热线--></font></p>
                <p><font><i><img src="<?php echo SITE_THEME; ?>images/lw2.png" /></i><!--总部地址--><?php echo block(10); ?><!--总部地址--></font></p>
                <div><?php echo $cats[$catid]['content']; ?></div>
            </div>
        
		
			
			
			
			
			
			
			
			
			
			<link rel="stylesheet" type="text/css" href="<?php echo SITE_THEME; ?>ditu/css/style.css">
			<div class="nfa6z-bdt">
				<div class="m_map" style="transform: scale(0.85,0.85)-ms-transform: scale(0.85,0.85);-webkit-transform: scale(0.85,0.85);">
					<!--
					<div class="mp mp1">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：乌鲁木齐央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito find_mi1">乌鲁木齐</div>
					</div>
					<div class="mp mp2">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：西安市未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">西安</div>
					</div>
					<div class="mp mp3">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：成都未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">成都</div>
					</div>
					-->
					<?php $return = $this->_listdata("catid=41 more=1"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
					<div class="mp <?php echo $t['chengshidaima']; ?>">
						<?php if (!empty($t['content'])) { ?>
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<!--<div class="boou"><img src="<?php echo $t['thumb']; ?>" alt=""/></div>-->
								<div class="du_size">
									<P><?php echo html_entity_decode($t['content']); ?></P>
								</div>
							</div>
						</div>
						<?php } ?>
						<div class="mito"><?php echo $t['title']; ?></div>
					</div>
					<?php } } ?>
					<!--
					<div class="mp mp5">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：贵阳未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">贵阳</div>
					</div>
					<div class="mp mp6">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：南宁未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">南宁</div>
					</div>
					<div class="mp mp7">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：昆明未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">昆明</div>
					</div>
					<div class="mp mp8">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：西安未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">西安</div>
					</div>
					<div class="mp mp9">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：郑州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">郑州</div>
					</div>
					<div class="mp mp10">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：太原未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">太原</div>
					</div>
					<div class="mp mp11">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：武汉未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">武汉</div>
					</div>
					<div class="mp mp12">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：长沙未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">长沙</div>
					</div>
					<div class="mp mp13">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：南昌未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">南昌</div>
					</div>
					<div class="mp mp14">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：杭州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">杭州</div>
					</div>
					<div class="mp mp15">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：厦门未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">厦门</div>
					</div>
					<div class="mp mp16">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：广州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">广州</div>
					</div>
					<div class="mp mp17">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：深圳未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">深圳</div>
					</div>
					<div class="mp mp18">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：合肥未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">合肥</div>
					</div>
					<div class="mp mp19">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：南京未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">南京</div>
					</div>
					<div class="mp mp20">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：上海未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">上海</div>
					</div>
					<div class="mp mp21">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：济南未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">济南</div>
					</div>
					<div class="mp mp22">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：青岛未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">青岛</div>
					</div>
					<div class="mp mp23">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：北京未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">北京</div>
					</div>
					<div class="mp mp24">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：天津未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">天津</div>
					</div>
					<div class="mp mp25">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：沈阳未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">沈阳</div>
					</div>
					<div class="mp mp26">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：长春未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">长春</div>
					</div>
					<div class="mp mp27">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：哈尔滨未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito find_mi2">哈尔滨</div>
					</div>
					<div class="mp mp28">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：佛山未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">佛山</div>
					</div>
					<div class="mp mp29">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：常州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">常州</div>
					</div>
					<div class="mp mp30">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：东莞未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">东莞</div>
					</div>
					<div class="mp mp31">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：无锡未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">无锡</div>
					</div>
					<div class="mp mp32">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：中山未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">中山</div>
					</div>
					<div class="mp mp33">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：苏州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">苏州</div>
					</div>
					<div class="mp mp34">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：秦皇岛未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito find_mi2">秦皇岛</div>
					</div>
					<div class="mp mp35">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：镇江岛未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">镇江</div>
					</div>
					<div class="mp mp36">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：洛阳岛未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">洛阳</div>
					</div>
					<div class="mp mp37">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：襄阳岛未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">襄阳</div>
					</div>
					<div class="mp mp38">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：衡阳岛未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">衡阳</div>
					</div>
					<div class="mp mp39">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：湘潭岛未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">湘潭</div>
					</div>
					<div class="mp mp40">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：石家庄岛未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito find_mi2">石家庄</div>
					</div>
					<div class="mp mp41">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：嘉兴岛未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">嘉兴</div>
					</div>
					<div class="mp mp42">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：潍坊未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">潍坊</div>
					</div>
					<div class="mp mp43">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：惠州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">惠州</div>
					</div>
					<div class="mp mp44">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：温州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">温州</div>
					</div>
					<div class="mp mp45">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：台州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">台州</div>
					</div>
					<div class="mp mp46">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：株州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">株州</div>
					</div>
					<div class="mp mp47">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：绵阳未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">绵阳</div>
					</div>
					<div class="mp mp48">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：宁波未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">宁波</div>
					</div>
					<div class="mp mp49">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：绍兴未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">绍兴</div>
					</div>
					<div class="mp mp50">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：金华未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">金华</div>
					</div>
					<div class="mp mp51">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：福州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">福州</div>
					</div>
					<div class="mp mp52">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：泉州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">泉州</div>
					</div>
					<div class="mp mp53">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：乐山未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">乐山</div>
					</div>
					<div class="mp mp54">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：江门未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">江门</div>
					</div>
					<div class="mp mp55">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：新乡未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">新乡</div>
					</div>
					<div class="mp mp56">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：信阳未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">信阳</div>
					</div>
					<div class="mp mp57">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：德阳未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">德阳</div>
					</div>
					<div class="mp mp58">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：常德未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">常德</div>
					</div>
					<div class="mp mp59">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：徐州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">徐州</div>
					</div>
					<div class="mp mp60">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：梧州未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">梧州</div>
					</div>
					<div class="mp mp61">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：宜昌未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">宜昌</div>
					</div>
					<div class="mp mp62">
						<div class="feng">
							<div class="tree">
								<div class="sang"></div>
								<div class="boou"><img src="<?php echo SITE_THEME; ?>ditu/images/boou.png" alt=""/></div>
								<div class="du_size">
									<P>地址：岳阳未央区未央宫街道未央路2号老三届首座大厦11208 </P>
									<P>电话：029-68829598</P>
								</div>
							</div>
						</div>
						<div class="mito">岳阳</div>
					</div>
					-->
				</div>
				<script type="text/javascript">
				jQuery(document).ready(function($) {
				   $(".mp").mouseover(function(){
						$(this).find(".feng").show();	
					}).mouseout(function(){
						$(this).find(".feng").hide();

					});	
				});
				</script>
	        	
	            
	        	
	        </div>





        </div>
    </div>
</div>  





<?php include $this->_include('footer'); ?>