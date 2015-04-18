<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php p($title); ?></title>
	<base href="/statics/"/>
	<meta name="keywords" content="<?php p($keywords); ?>"/>
	<meta name="description" content="<?php p($description); ?>"/>
	<meta name="author" content="<?php p($author); ?>"/>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="logo.png" type="logo.png">
	<link href="css/css.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!--[if IE 6]>
	<script src="js/IE6PNG.js"></script>
	<script type="text/javascript">
		IE6PNG.fix('.png, .menucon li a:hover, .pro-picli-bg01, .pro-picli-bg02');
	</script>
	<![endif]-->

	<script type="text/javascript" src="js/scroll.js"></script>
	<script type="text/javascript">
		$(function () {
			var slide = new slideX($('.boxtop-list ul'),
				$('.boxtop-btn a.prev'),
				$('.boxtop-btn a.next'),
				220,
				500,
				3000
			);
			var newsslide = new slideX($('.boxnews-con ul'),
				$('.boxnews-btn a.prev'),
				$('.boxnews-btn a.next'),
				245,
				500,
				2500
			);
		})
	</script>
</head>
<body>
<script type="text/javascript" src="js/banner.js"></script>
<div class="banner">
	<div class="bannerpic">
		<ul>
			<li><a href="http://www.wolong.com/sitenews!info.htm?info=intro&menuId=intro1"><img src="images/tran.gif"
																								width="100%"
																								height="583"
																								style="background:url(http://115.231.192.210/imagefile/66e978ce77f24adfaa844cf9296c77a3.jpg) no-repeat center top"></a>
			</li>
		</ul>
	</div>
	<div class="bannerbtn"></div>
</div>
<div class="top clear">
	<form action="product!search.htm" method="post">
		<div class="search png fri">
			<dl>
				<dt><input type="text" name="title" class="search_input" value="请输入产品型号"
						   onFocus="if(value==defaultValue){value='';}" onBlur="if(value==''){value=defaultValue;}"/>
				</dt>
				<dd><input type="submit" class="search_btn" value=""/></dd>
			</dl>
		</div>
	</form>
	<div class="topmenu fri">
		<ul class="clear">
			<li><a href="default.html">控股首页</a></li>
			<li>|</li>
			<li><a href="sitenews!info.htm?pageNo=1&info=news&pageSize=7&menuId=news">卧龙资讯</a></li>
			<li>|</li>
			<li><a href="#">招标中心</a></li>
			<li>|</li>
			<li><a href="sitenews!info.htm?info=job&menuIndex=0&menuId=human">人力资源</a></li>
			<li>|</li>
			<li><a href="sitemenu!ir.htm?1=1&menuId=8b3b26af34f649478edc922cee5ea3c1">投资者关系</a></li>
			<li>|</li>
			<li><a href="http://www.wolong.com/en">English</a></li>

		</ul>
	</div>
</div>

<div class="menu clear">
	<div class="clear">
		<div class="logo fle"><a href="default.html" title="卧龙控股集团"><img src="images/logo.jpg" width="139" height="42"
																		 alt=""></a></div>
		<div class="menucon fri">
			<ul class="clear">
				<li><a href="sitemenu!company.htm?id=company" class="first">卧龙集团</a>

					<div class="semenuBox">
						<div class="semenuCon clear">
							<div class="semenuConL fle">
								<a href="sitenews!info.htm?info=intro&menuId=intro1">公司介绍</a>
								<a href="sitenews!info.htm?info=listed&menuId=listed1">上市公司</a>
								<a href="sitenews!info.htm?info=history&menuId=history1">发展历程</a>
								<a href="sitenews!info.htm?info=culture&menuId=culture1">卧龙文化</a>
								<a href="sitenews!info.htm?pageNo=1&info=honor&menuId=honor1">卧龙荣誉</a>
								<a href="sitenews!info.htm?info=party_org&menuId=build1">党群建设</a>
							</div>
							<div class="semenuConR fle">
								<a href="sitemenu!company.htm?id=company" class="semenuPic fle"><img
										src="http://115.231.192.210/imagefile/b9615f9883384810b929abebdcb8f5a6.jpg"
										width="120" height="154" alt=""/></a>

								<div class="semenuConRcon fri">
									<p>卧龙控股集团有限公司创立于1984年，经过近30年的发展，已经成为一家拥有150亿元资产规模、年销售130亿元市场

									<p><a href="sitemenu!company.htm?id=company" class="semenuMore">卧龙集团</a></p>
								</div>
							</div>
						</div>
						<div class="semenuConLine"></div>
					</div>
				</li>
				<li><a href="sitemenu!manufacture.htm?id=manufacture" class="first">卧龙制造</a>

					<div class="semenuBox">
						<div class="semenuCon clear">
							<div class="semenuConL fle">
								<a href="sitenews!info.htm?info=creat_control&menuId=creat_control1">电机及控制</a>
								<a href="sitenews!info.htm?info=creat_power&menuId=creat_power1">电源电池</a>
								<a href="sitenews!info.htm?info=creat_project&menuId=creat_project1">工程机械</a>
								<a href="sitenews!info.htm?info=creat_electricity&menuId=creat_electricity1">输变电</a>
								<a href="sitenews!info.htm?info=creat_foreign&menuId=creat_foreign1">新能源</a>
							</div>
							<div class="semenuConR fle">
								<a href="sitemenu!manufacture.htm?id=manufacture" class="semenuPic fle"><img
										src="http://115.231.192.210/imagefile/cc389366d7ae46a5b30d21ece69b3de0.jpg"
										width="120" height="154" alt=""/></a>

								<div class="semenuConRcon fri">
									<p>卧龙制造业专业生产各类工业电机及其自动化、微电机、家用电机、电源电池、电动自行车、电力变压器、特种牵引变压器和电气

									<p><a href="sitemenu!manufacture.htm?id=manufacture" class="semenuMore">卧龙制造</a></p>
								</div>
							</div>
						</div>
						<div class="semenuConLine"></div>
					</div>
				</li>
				<li><a href="sitemenu!market.htm?id=market" class="first">市场</a>

					<div class="semenuBox semenuConPro" style="left:auto;right:-1px;">
						<div class="semenuCon clear">
							<div class="semenuConL fle">
								<a href="sitenews!info.htm?info=market_solute&menuId=market_home1">家用及住宅</a>
								<a href="sitenews!info.htm?info=market_solute&menuId=market_buildproject1">基建工程</a>
								<a href="sitenews!info.htm?info=market_solute&menuId=market_mobile1">移动通讯</a>
								<a href="sitenews!info.htm?info=market_solute&menuId=market_airship1">航空与舰船</a>
								<a href="sitenews!info.htm?info=market_solute&menuId=market_oil1">石油天然气及采矿</a>
								<a href="sitenews!info.htm?info=market_solute&menuId=market_environment1">节能环保</a>
								<a href="sitenews!info.htm?info=market_solute&menuId=market_finance1">金融解决方案</a>
								<a href="sitenews!info.htm?info=market_solute&menuId=market_network1">营销网络</a>
							</div>
							<div class="semenuConR fle">
								<a href="sitemenu!market.htm?id=market" class="semenuPic fle"><img
										src="http://115.231.192.210/imagefile/3a82a08f42f14107901de888c9af3f3e.jpg"
										width="120" height="154" alt=""/></a>

								<div class="semenuConRcon fri">
									<p>卧龙控股建立了欧洲、美洲、东南亚各国及遍布中国32个省、市、自治区的强大营销网络</p>

									<p><a href="sitemenu!market.htm?id=market" class="semenuMore">市场</a></p>
								</div>
							</div>
						</div>
						<div class="semenuConLine"></div>
					</div>
				</li>

				<li><a href="sitemenu!product.htm?id=product" class="first">产品</a>

					<div class="semenuBox semenuConPro" style="left:auto;right:-1px;">
						<div class="semenuCon clear">
							<div class="semenuConL fle">
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=102">工业驱动与自动化</a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=107">日用电机</a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=108">汽车电机</a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=110">大功率电机 </a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=105">混凝土搅拌机</a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=106">挖掘机属具</a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=111">新能源</a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=101">电池电源</a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=112">输变电设备</a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=103">高压变频和系统集成 </a>
								<a href="product!list_wlkg.htm?pageNo=1&pageSize=8&menuId=109">电工设备 </a>
							</div>
							<div class="semenuConR fle">
								<a href="sitemenu!product.htm?id=product" class="semenuPic fle"><img
										src="http://115.231.192.210/imagefile/33e209f004ee4f3ea2bcd56a03e61b8a.jpg"
										width="120" height="154" alt=""/></a>

								<div class="semenuConRcon fri">
									<div>&nbsp;卧龙在产品定位上，坚持性能卓越、品质高端、制造精密、用途专特、同类产品市场占有率高的产品策略，实现
										<p><a href="sitemenu!product.htm?id=product" class="semenuMore">产品</a></p>
									</div>
								</div>
							</div>
							<div class="semenuConLine"></div>
						</div>
				</li>
				<li><a href="sitemenu!technology.htm?id=technology" class="first">技术</a>

					<div class="semenuBox semuBoxbg2" style="left:auto;right:-1px;">
						<div class="semenuCon clear">
							<div class="semenuConL fle">
								<a href="sitetecperson!listSite.htm?pageNo=1&menuId=kjrc1">科研人才</a>
								<a href="sitenews!info.htm?info=tec_res&pageNo=1&menuId=kycg1">科研成果</a>
								<a href="sitenews!info.htm?info=tec_equ&menuId=xjsb1">先进设备</a>
								<a href="sitenews!info.htm?info=tec_org&menuId=kyjg1">科研机构</a>
								<a href="sitenews!info.htm?info=tec_res&pageNo=1&menuId=kyhz1">科研合作</a>
							</div>
							<div class="semenuConR fle">
								<a href="sitemenu!technology.htm?id=technology" class="semenuPic fle"><img
										src="http://115.231.192.210/imagefile/88467530a4604485a67c7fd9d90f5cb1.jpg"
										width="120" height="154" alt=""/></a>

								<div class="semenuConRcon fri">
									<p>卧龙聚集行业科技精英，并提供本领域最出色的研发平台，形成了行业领先的技术研发能力。</p>

									<p><a href="sitemenu!technology.htm?id=technology" class="semenuMore">技术</a></p>
								</div>
							</div>
						</div>
						<div class="semenuConLine"></div>
					</div>
				</li>
				<li><a href="sitemenu!other.htm?id=other" class="first">其他产业</a>

					<div class="semenuBox semuBoxbg2" style="left:auto;right:-1px;">
						<div class="semenuCon clear">
							<div class="semenuConL fle">
								<a href="sitenews!info.htm?info=industry_realty&menuId=fdcy1">房地产业</a>
								<a href="sitenews!info.htm?info=industry_service&menuId=jrfwy1">金融服务业</a>
							</div>
							<div class="semenuConR fle">
								<a href="sitemenu!other.htm?id=other" class="semenuPic fle"><img
										src="http://115.231.192.210/imagefile/368f0daa23ba472db763ee11d46938b2.jpg"
										width="120" height="154" alt=""/></a>

								<div class="semenuConRcon fri">
									<p>卧龙地产，拥有国家一级房地产开发资质。卧龙金融的快速起步，不断拓宽金融服务业务领域，致力于成为中小企业服务专家。<

									<p><a href="sitemenu!other.htm?id=other" class="semenuMore">其他产业</a></p>
								</div>
							</div>
						</div>
						<div class="semenuConLine"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>

</div>

<div class="boxbg">
	<div class="boxtop w960 clear">
		<div class="boxtop-left fle">
			<div class="boxtop-tit">
				<div class="boxtop-btn fri">
					<a href="javascript:;" class="prev">&nbsp;</a>
					<a href="javascript:;" class="next">&nbsp;</a>
				</div>
				卧龙制造
			</div>
			<div class="boxtop-list mart20">
				<ul class="clear">

					<li>
						<div class="boxtop-list-pic"><a
								href="sitenews!info.htm?info=creat_control&menuId=creat_control1"><img
									src="http://115.231.192.210/imagefile/a0653b6564ef4d259c0e7d0a2c0abf93.jpg"
									width="220" height="220" alt=""></a></div>
						<div class="boxtop-list-tit png"><a
								href="sitenews!info.htm?info=creat_control&menuId=creat_control1">电机及控制</a></div>

						<div class="boxtop-list-txt">
							卧龙电气电机及控制事业本部地处长三角中心区域--浙江省上虞经济开发区。公司现有7家子公司，包括有与全球500强日本松下合资经营的家用电机公司，目前已拥有浙江上虞……

						</div>
					</li>


					<li>
						<div class="boxtop-list-pic"><a
								href="sitenews!info.htm?info=creat_power&menuId=creat_power1"><img
									src="http://115.231.192.210/imagefile/b78821056adf445eb21d9f13302cef49.jpg"
									width="220" height="220" alt=""></a></div>
						<div class="boxtop-list-tit png"><a
								href="sitenews!info.htm?info=creat_power&menuId=creat_power1">电源电池</a></div>

						<div class="boxtop-list-txt">
							卧龙电气集团电源事业本部是卧龙电气集团下属……
						</div>
					</li>


					<li>
						<div class="boxtop-list-pic"><a
								href="sitenews!info.htm?info=creat_project&menuId=creat_project1"><img
									src="http://115.231.192.210/imagefile/08029a8a8a83494586bb55b42f6573fd.jpg"
									width="220" height="220" alt=""></a></div>
						<div class="boxtop-list-tit png"><a
								href="sitenews!info.htm?info=creat_project&menuId=creat_project1">工程机械</a></div>

						<div class="boxtop-list-txt">
							机械事业本部成立于2011年，是卧龙电气集团……
						</div>
					</li>


					<li>
						<div class="boxtop-list-pic"><a
								href="sitenews!info.htm?info=creat_electricity&menuId=creat_electricity1"><img
									src="http://115.231.192.210/imagefile/e3268a5f86444fe6a18c3801ead89d87.jpg"
									width="220" height="220" alt=""></a></div>
						<div class="boxtop-list-tit png"><a
								href="sitenews!info.htm?info=creat_electricity&menuId=creat_electricity1">输变电</a></div>

						<div class="boxtop-list-txt">
							卧龙电气输变电事业本部（以下简称事业本部）是卧龙电气集团下属输变电产品的经营主体单位。事业本部主营电力变压器、轨道交通电气设备和……
						</div>
					</li>


					<li>
						<div class="boxtop-list-pic"><a
								href="sitenews!info.htm?info=creat_foreign&menuId=creat_foreign1"><img
									src="http://115.231.192.210/imagefile/f0ff5fa6759c42b8953e22e17c250ab1.jpg"
									width="220" height="220" alt=""></a></div>
						<div class="boxtop-list-tit png"><a
								href="sitenews!info.htm?info=creat_foreign&menuId=creat_foreign1">新能源</a></div>

						<div class="boxtop-list-txt">
							浙江卧龙新能源有限公司由卧龙电气集团杭州研究院有限公司和西班牙 WIND TO POWER SYSTEM SL 于2012年11月共同投资设立，公司主要从事太阳能光伏……...
						</div>
					</li>


				</ul>
			</div>
		</div>
		<div class="boxtop-right fri">
			<div class="boxtop-tit">企业报</div>
			<div class="boxtop-con mart20">
				<a href="sitenews!info.htm?pageNo=1&info=news_report&menuId=news&childMenuId=7d6d62d996af45d597ae2f7f6845dd12"><img
						src="images/index_img01.jpg" width="255" height="220" alt=""></a>

				<p><img src="images/index_img05.jpg" width="255" height="74" alt=""></p>
			</div>
		</div>
	</div>
	<div class="boxnews clear">
		<div class="boxnews-tit fle">
			<h3>卧龙资讯</h3>
            <span>
                <a href="sitenews!info.htm?pageNo=1&info=news&pageSize=7&menuId=news">更多</a>
            </span>
		</div>
		<div class="boxnews-con fle">
			<ul class="clear">
				<li>
					<time>2015-2-2&nbsp;</time>
					<h3><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,052">2014年度卧龙热点新闻盘点&nbsp;</a></h3>

					<p><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,052">
							　　编者按： 2014年，卧龙，30年。回首往昔，我们感谢那些为公司作出过接触贡献的优秀员工，一同分享成长的喜悦；立足当下，我们通...
							&nbsp;</a></p>
				</li>
				<li>
					<time>2015-2-2&nbsp;</time>
					<h3><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,055">陈建成荣膺2014年度上虞区十大功勋企业家&nbsp;</a>
					</h3>

					<p><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,055">
							一年一度的上虞区全区企业经营者大会于近日召开，卧龙控股集团董事长陈建成荣获上虞区2014年度十大功勋企业家，获此殊荣...
							&nbsp;</a></p>
				</li>
				<li>
					<time>2015-3-25&nbsp;</time>
					<h3><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,169"> 浙江省副省长朱从玖调研卧龙&nbsp;</a></h3>

					<p><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,169">
							1月14日，浙江省副省长朱从玖一行来卧龙调研上市公司并购重组工作，卧龙控股集团董事长陈建成等出席接待调研组一行并汇报了卧龙上市公司...
							&nbsp;</a></p>
				</li>
				<li>
					<time>2015-3-25&nbsp;</time>
					<h3><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,171">卧龙控股集团召开推进“机器换人”工作现场会&nbsp;</a>
					</h3>

					<p><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,171">
							卧龙控股集团召开推进“机器换人”工作现场会
							&nbsp;</a></p>
				</li>
				<li>
					<time>2015-3-25&nbsp;</time>
					<h3><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,170">卧龙控股集团举行2015新春团拜会&nbsp;</a></h3>

					<p><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,170">
							<div>　　本报讯（记者沈雷江）骏马辞旧岁，金羊报春来。2月10日晚，卧龙控股集团有限公司隆重举行2015新春团拜会。</div>...
								&nbsp;
						</a></p>
				</li>
				<li>
					<time>2015-3-25&nbsp;</time>
					<h3><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,172">卧龙控股集团召开2014年度总结表彰大会&nbsp;</a>
					</h3>

					<p><a href="sitenews!info.htm?menuId=news&info=news_info&id=3,172">
							<div>　　2月10日，卧龙控股集团隆重召开2014年度总结表彰大会，回顾总结过去一年的工作，研究部署2015年工作任务，并对2...
								&nbsp;
						</a></p>
				</li>
			</ul>
		</div>
		<div class="boxnews-btn fri">
			<a href="javascript:;" class="prev"></a>
			<a href="javascript:;" class="next"></a>
		</div>
	</div>
	<div class="clear"></div>
</div>
﻿
<div class="footer">

	<div class="w960 clear">
		<div class="footmenu fle">
			<ul>
				<li><a href="sitemenu!footer.htm?info=sitemap&id=sitemap">网站地图</a></li>
				<li>|</li>
				<li><a href="sitemenu!footer.htm?info=law&id=law">法律申明</a></li>
				<li>|</li>
				<li><a href="#">版权中心</a></li>
				<li>|</li>
				<li><a href="sitemenu!footer.htm?info=contact&id=contract">联系我们</a></li>
				<li>|</li>
				<li><a href="http://www.wolong.com/wljy">卧龙家园</a> |</li>
				<li><a href="http://wolong.com.cn/olong-admin/serch.do?method=toLogin&id=1">采购系统入口</a></li>
				<li>|</li>
			</ul>
		</div>
		<div class="foot-select1 fle">
			<dl>
				<dt>成员企业</dt>
				<dd>


					<a title="|-卧龙控股集团有限公司" href="http://www.wolong.com/" target="_blank">|-卧龙控股集团有限公司</a>


					<a title="&nbsp;&nbsp;|-卧龙电气集团股份有限公司" href="http://www.wolong.com.cn/" target="_blank">&nbsp;&nbsp;|-卧龙电气集团股份有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;|-浙江龙能电力发展有限公司" href="http://www.wolong.com.cn/lndl/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;|-浙江龙能电力发展有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;|-武汉奥特彼电机有限公司" href="http://www.whwldj.com/" target="_blank">
						&nbsp;&nbsp;&nbsp;&nbsp;|-武汉奥特彼电机有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气电源事业本部" href="http://www.wolong.com.cn/dysyb/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气电源事业本部</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气浙江灯塔电源有限公司" href="http://www.wldengta.com/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气浙江灯塔电源有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气淮安清江电机有限公司" href="http://www.wolong.com.cn/qingjiang/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气淮安清江电机有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气电机与控制事业本部" href="http://www.wolong.com.cn/djkz/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气电机与控制事业本部</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气BROOK电机事业部"
					   href="http://www.wolong.com.cn/brook/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气BROOK电机事业部</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江卧龙新能源有限公司" href="http://www.wolong-solar.com/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江卧龙新能源有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气集团杭州研究院有限公司"
					   href="http://www.wolong.com.cn/yjy/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气集团杭州研究院有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气控制电机事业部" href="http://www.wolong.com.cn/kzdj/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气控制电机事业部</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气冲压件事业部" href="http://www.wolong.com.cn/cyj/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气冲压件事业部</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气工业电机事业部" href="http://www.wolong.com.cn/gydj/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气工业电机事业部</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江卧龙家用电机有限公司" href="http://www.wolong.com.cn/wljd/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江卧龙家用电机有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气微电机事业部" href="http://www.wolong.com.cn/wdj/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气微电机事业部</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙输变电事业本部" href="http://www.wolong.com.cn/wlsbd/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙输变电事业本部</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江变压器有限公司" href="http://www.wolong.com.cn/zjbyq/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江变压器有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气烟台东源变压器有限公司"
					   href="http://www.wolong.com.cn/dybyq/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气烟台东源变压器有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气集团北京华泰变压器有限公司" href="http://www.wlbjht.com/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气集团北京华泰变压器有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气银川变压器有限公司" href="http://www.ycb.com.cn/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气银川变压器有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气机械事业本部" href="http://www.wolong.com.cn/jixie/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙电气机械事业本部</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江卧龙电工设备有限公司" href="http://www.wolong.com.cn/dgsb/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江卧龙电工设备有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江欧龙搅拌技术有限公司" href="http://www.eurolon.cn/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江欧龙搅拌技术有限公司</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-绍兴欧力-卧龙振动机械有限公司  " href="http://www.oli-wolong.com/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-绍兴欧力-卧龙振动机械有限公司 </a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江曼托瓦尼机械有限公司" href="http://www.mbi-china.com.cn/"
					   target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-浙江曼托瓦尼机械有限公司</a>


					<a title="&nbsp;&nbsp;|-卧龙资本" href="http://www.wolongcapital.com/" target="_blank">&nbsp;&nbsp;|-卧龙资本</a>


					<a title="&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙租赁" href="http://www.wolongcapital.com/wlzl/" target="_blank">
						&nbsp;&nbsp;&nbsp;&nbsp;|-卧龙租赁</a>


				</dd>
			</dl>
		</div>
		<div class="foot-txt fri">

			<div class="jiathis_style fri">
				<a class="jiathis_button_tsina share-weibo"></a>
				<a class="jiathis_button_tqq share-tqq"></a>
			</div>
			© 2014 卧龙控股集团 <a target="_blank" title="杭州网站建设-博采互动" href="http://www.bocweb.cn/">技术支持：博采互动</a>

		</div>
	</div>
</div>

<script type="text/javascript">
	$(function () {
		$(".foot-select1 dt").click(function () {
			if ($(this).next().css("display") == "none") {
				$(this).next().stop().slideDown();

			} else {
				$(this).next().stop().slideUp();
			}
		});

		$(".foot-select1 dd a").click(function () {
			//$(".foot-select dt").text($(this).text());
			$(".foot-select dd").stop().slideUp();
		})
	})
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1387759827890950" charset="utf-8"></script>
<div
	style="float: center; font-size: 12px; margin-top: 8px; margin-bottom:8px; text-align: center; margin-right: 13px;display:none"></div>
<div id="backtop"><img class="png" src="images/totop.png"></div>
</body>
</html>