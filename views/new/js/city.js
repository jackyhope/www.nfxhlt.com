cityareaname=new Array(35);
cityareacode=new Array(35);
function first(preP,preC,VeryHuo,selectP,selectC)
{
a=0;
if (selectP=='01')
{ a=1;tempoption=new Option('北京','北京',false,true); }
else
{ tempoption=new Option('北京','北京'); }
eval('document.'+VeryHuo+'.'+preP+'.options[1]=tempoption;');
cityareacode[0]=new Array('东城区','西城区','崇文区','宣武区','朝阳区','海淀区','丰台区','石景山','门头沟区','房山区','顺义区','大兴区','平谷区','延庆县','密云县','怀柔区','昌平区','通州区');
cityareaname[0]=new Array('东城区','西城区','崇文区','宣武区','朝阳区','海淀区','丰台区','石景山','门头沟区','房山区','顺义区','大兴区','平谷区','延庆县','密云县','怀柔区','昌平区','通州区');
if (selectP=='02')
{ a=2;tempoption=new Option('深圳','深圳',false,true); }
else
{ tempoption=new Option('深圳','深圳'); }
eval('document.'+VeryHuo+'.'+preP+'.options[2]=tempoption;');
cityareacode[1]=new Array('罗湖','福田','南山','盐田','宝安','龙岗','龙华','坪山');
cityareaname[1]=new Array('罗湖','福田','南山','盐田','宝安','龙岗','龙华','坪山');
if (selectP=='03')
{ a=3;tempoption=new Option('上海','上海',false,true); }
else
{ tempoption=new Option('上海','上海'); }
eval('document.'+VeryHuo+'.'+preP+'.options[3]=tempoption;');
cityareacode[2]=new Array('宝山','金山','南市','长宁','静安','青浦','崇明','卢湾','松江','奉贤','浦东','杨浦','虹口','普陀','闸北','黄浦','闵行','徐汇','嘉定','南汇');
cityareaname[2]=new Array('宝山','金山','南市','长宁','静安','青浦','崇明','卢湾','松江','奉贤','浦东','杨浦','虹口','普陀','闸北','黄浦','闵行','徐汇','嘉定','南汇');
if (selectP=='04')
{ a=4;tempoption=new Option('重庆','重庆',false,true); }
else
{ tempoption=new Option('重庆','重庆'); }
eval('document.'+VeryHuo+'.'+preP+'.options[4]=tempoption;');
cityareacode[3]=new Array('渝中','江北','沙坪坝','南岸','九龙坡','大渡口','万州','涪陵','北碚','綦江','大足','渝北','巴南','黔江','长寿','江津','合川','永川','南川','铜梁','璧山','潼南','荣昌','开州','梁平','武隆','城口县','丰都县','垫江县','忠县','云阳县','奉节县','巫山县','巫溪县','石柱县','秀山县','酉阳县','彭水县');
cityareaname[3]=new Array('渝中','江北','沙坪坝','南岸','九龙坡','大渡口','万州','涪陵','北碚','綦江','大足','渝北','巴南','黔江','长寿','江津','合川','永川','南川','铜梁','璧山','潼南','荣昌','开州','梁平','武隆','城口县','丰都县','垫江县','忠县','云阳县','奉节县','巫山县','巫溪县','石柱县','秀山县','酉阳县','彭水县');
if (selectP=='05')
{ a=5;tempoption=new Option('天津','天津',false,true); }
else
{ tempoption=new Option('天津','天津'); }
eval('document.'+VeryHuo+'.'+preP+'.options[5]=tempoption;');
cityareacode[4]=new Array('和平','河北','河西','河东','南开','红桥','塘沽','汉沽','大港','东丽','西青','津南','北辰','武清','滨海','东丽','宝坻','宁河','蓟县','静海');
cityareaname[4]=new Array('和平','河北','河西','河东','南开','红桥','塘沽','汉沽','大港','东丽','西青','津南','北辰','武清','滨海','东丽','宝坻','宁河','蓟县','静海');
if (selectP=='06')
{ a=6;tempoption=new Option('广东','广东',false,true); }
else
{ tempoption=new Option('广东','广东'); }
eval('document.'+VeryHuo+'.'+preP+'.options[6]=tempoption;');
cityareacode[5]=new Array('广州','珠海','中山','佛山','东莞','清远','肇庆','阳江','湛江','韶关','惠州','河源','汕尾','汕头','梅州','茂名','云浮','江门','佛山','潮州','揭阳','梅州','深圳');
cityareaname[5]=new Array('广州','珠海','中山','佛山','东莞','清远','肇庆','阳江','湛江','韶关','惠州','河源','汕尾','汕头','梅州','茂名','云浮','江门','佛山','潮州','揭阳','梅州','深圳');
if (selectP=='07')
{ a=7;tempoption=new Option('河北','河北',false,true); }
else
{ tempoption=new Option('河北','河北'); }
eval('document.'+VeryHuo+'.'+preP+'.options[7]=tempoption;');
cityareacode[6]=new Array('石家庄','唐山','秦皇岛','邯郸','邢台','张家口','承德','廊坊','沧州','保定','衡水');
cityareaname[6]=new Array('石家庄','唐山','秦皇岛','邯郸','邢台','张家口','承德','廊坊','沧州','保定','衡水');
if (selectP=='08')
{ a=8;tempoption=new Option('山西','山西',false,true); }
else
{ tempoption=new Option('山西','山西'); }
eval('document.'+VeryHuo+'.'+preP+'.options[8]=tempoption;');
cityareacode[7]=new Array('太原','大同','阳泉','朔州','长治','临汾','晋城','运城','晋中','吕梁','忻州');
cityareaname[7]=new Array('太原','大同','阳泉','朔州','长治','临汾','晋城','运城','晋中','吕梁','忻州');
if (selectP=='09')
{ a=9;tempoption=new Option('内蒙古','内蒙古',false,true); }
else
{ tempoption=new Option('内蒙古','内蒙古'); }
eval('document.'+VeryHuo+'.'+preP+'.options[9]=tempoption;');
cityareacode[8]=new Array('呼和浩特','包头','乌海','临河','东胜','集宁','锡林浩特','通辽','赤峰','海拉尔','乌兰浩特','兴安盟','鄂尔多斯','乌兰察布','巴彦淖尔','阿拉善盟','呼伦贝尔');
cityareaname[8]=new Array('呼和浩特','包头','乌海','临河','东胜','集宁','锡林浩特','通辽','赤峰','海拉尔','乌兰浩特','兴安盟','鄂尔多斯','乌兰察布','巴彦淖尔','阿拉善盟','呼伦贝尔');
if (selectP=='10')
{ a=10;tempoption=new Option('辽宁','辽宁',false,true); }
else
{ tempoption=new Option('辽宁','辽宁'); }
eval('document.'+VeryHuo+'.'+preP+'.options[10]=tempoption;');
cityareacode[9]=new Array('沈阳','大连','鞍山','锦州','丹东','盘锦','铁岭','抚顺','营口','辽阳','阜新','本溪','朝阳','葫芦岛');
cityareaname[9]=new Array('沈阳','大连','鞍山','锦州','丹东','盘锦','铁岭','抚顺','营口','辽阳','阜新','本溪','朝阳','葫芦岛');
if (selectP=='11')
{ a=11;tempoption=new Option('吉林','吉林',false,true); }
else
{ tempoption=new Option('吉林','吉林'); }
eval('document.'+VeryHuo+'.'+preP+'.options[11]=tempoption;');
cityareacode[10]=new Array('长春','吉林','四平','辽源','通化','白山','松原','白城','延边');
cityareaname[10]=new Array('长春','吉林','四平','辽源','通化','白山','松原','白城','延边');
if (selectP=='12')
{ a=12;tempoption=new Option('黑龙江','黑龙江',false,true); }
else
{ tempoption=new Option('黑龙江','黑龙江'); }
eval('document.'+VeryHuo+'.'+preP+'.options[12]=tempoption;');
cityareacode[11]=new Array('哈尔滨','齐齐哈尔','牡丹江','佳木斯','大庆','伊春','黑河','鸡西','鹤岗','双鸭山','七台河','绥化','大兴安岭');
cityareaname[11]=new Array('哈尔滨','齐齐哈尔','牡丹江','佳木斯','大庆','伊春','黑河','鸡西','鹤岗','双鸭山','七台河','绥化','大兴安岭');
if (selectP=='13')
{ a=13;tempoption=new Option('江苏','江苏',false,true); }
else
{ tempoption=new Option('江苏','江苏'); }
eval('document.'+VeryHuo+'.'+preP+'.options[13]=tempoption;');
cityareacode[12]=new Array('南京','苏州','无锡','常州','镇江','连云港 ','扬州','徐州 ','南通','盐城','淮阴','泰州','宿迁');
cityareaname[12]=new Array('南京','苏州','无锡','常州','镇江','连云港 ','扬州','徐州 ','南通','盐城','淮阴','泰州','宿迁');
if (selectP=='14')
{ a=14;tempoption=new Option('浙江','浙江',false,true); }
else
{ tempoption=new Option('浙江','浙江'); }
eval('document.'+VeryHuo+'.'+preP+'.options[14]=tempoption;');
cityareacode[13]=new Array('杭州','湖州','丽水','温州','绍兴','舟山','嘉兴','金华','台州','衢州','宁波');
cityareaname[13]=new Array('杭州','湖州','丽水','温州','绍兴','舟山','嘉兴','金华','台州','衢州','宁波');
if (selectP=='15')
{ a=15;tempoption=new Option('安徽','安徽',false,true); }
else
{ tempoption=new Option('安徽','安徽'); }
eval('document.'+VeryHuo+'.'+preP+'.options[15]=tempoption;');
cityareacode[14]=new Array('合肥  ','芜湖 ','蚌埠 ','滁州 ','安庆 ','六安 ','黄山 ','宣城 ','淮南 ','宿州 ','马鞍山 ','铜陵','淮北 ','阜阳 ','池州 ','巢湖 ','亳州');
cityareaname[14]=new Array('合肥  ','芜湖 ','蚌埠 ','滁州 ','安庆 ','六安 ','黄山 ','宣城 ','淮南 ','宿州 ','马鞍山 ','铜陵','淮北 ','阜阳 ','池州 ','巢湖 ','亳州');
if (selectP=='16')
{ a=16;tempoption=new Option('福建','福建',false,true); }
else
{ tempoption=new Option('福建','福建'); }
eval('document.'+VeryHuo+'.'+preP+'.options[16]=tempoption;');
cityareacode[15]=new Array('福州 ','厦门 ','泉州 ','漳州 ','龙岩 ','南平 ','宁德 ','莆田 ','三明');
cityareaname[15]=new Array('福州 ','厦门 ','泉州 ','漳州 ','龙岩 ','南平 ','宁德 ','莆田 ','三明');
if (selectP=='17')
{ a=17;tempoption=new Option('江西','江西',false,true); }
else
{ tempoption=new Option('江西','江西'); }
eval('document.'+VeryHuo+'.'+preP+'.options[17]=tempoption;');
cityareacode[16]=new Array('南昌','景德镇','九江','萍乡','新余','鹰潭','赣州','宜春','吉安','上饶','抚州');
cityareaname[16]=new Array('南昌','景德镇','九江','萍乡','新余','鹰潭','赣州','宜春','吉安','上饶','抚州');
if (selectP=='18')
{ a=18;tempoption=new Option('山东','山东',false,true); }
else
{ tempoption=new Option('山东','山东'); }
eval('document.'+VeryHuo+'.'+preP+'.options[18]=tempoption;');
cityareacode[17]=new Array('济南','青岛','淄博','德州','烟台','潍坊','济宁','泰安','临沂','菏泽','威海','枣庄','日照','莱芜','聊城','滨州','东营');
cityareaname[17]=new Array('济南','青岛','淄博','德州','烟台','潍坊','济宁','泰安','临沂','菏泽','威海','枣庄','日照','莱芜','聊城','滨州','东营');
if (selectP=='19')
{ a=19;tempoption=new Option('河南','河南',false,true); }
else
{ tempoption=new Option('河南','河南'); }
eval('document.'+VeryHuo+'.'+preP+'.options[19]=tempoption;');
cityareacode[18]=new Array('郑州','开封','洛阳','平顶山','安阳','鹤壁','新乡','焦作','濮阳','许昌','漯河','三门峡','南阳','商丘','周口','驻马店','信阳','济源');
cityareaname[18]=new Array('郑州','开封','洛阳','平顶山','安阳','鹤壁','新乡','焦作','濮阳','许昌','漯河','三门峡','南阳','商丘','周口','驻马店','信阳','济源');
if (selectP=='20')
{ a=20;tempoption=new Option('湖北','湖北',false,true); }
else
{ tempoption=new Option('湖北','湖北'); }
eval('document.'+VeryHuo+'.'+preP+'.options[20]=tempoption;');
cityareacode[19]=new Array('武汉','黄石','十堰','荆州','宜昌','襄樊','鄂州','荆门','孝感','黄冈','咸宁','恩施','随州','仙桃','天门','潜江','神农架');
cityareaname[19]=new Array('武汉','黄石','十堰','荆州','宜昌','襄樊','鄂州','荆门','孝感','黄冈','咸宁','恩施','随州','仙桃','天门','潜江','神农架');
if (selectP=='21')
{ a=21;tempoption=new Option('湖南','湖南',false,true); }
else
{ tempoption=new Option('湖南','湖南'); }
eval('document.'+VeryHuo+'.'+preP+'.options[21]=tempoption;');
cityareacode[20]=new Array('长沙','株州','湘潭','衡阳','邵阳','岳阳','常德','郴州','益阳','永州','怀化','娄底','湘西 ','张家界','湘西州');
cityareaname[20]=new Array('长沙','株州','湘潭','衡阳','邵阳','岳阳','常德','郴州','益阳','永州','怀化','娄底','湘西 ','张家界','湘西州');
if (selectP=='22')
{ a=22;tempoption=new Option('广西','广西',false,true); }
else
{ tempoption=new Option('广西','广西'); }
eval('document.'+VeryHuo+'.'+preP+'.options[22]=tempoption;');
cityareacode[21]=new Array('南宁','柳州','桂林','梧州','北海','防城港','钦州','贵港','玉林','贺州','百色','河池','来宾','百色','崇左');
cityareaname[21]=new Array('南宁','柳州','桂林','梧州','北海','防城港','钦州','贵港','玉林','贺州','百色','河池','来宾','百色','崇左');
if (selectP=='23')
{ a=23;tempoption=new Option('海南','海南',false,true); }
else
{ tempoption=new Option('海南','海南'); }
eval('document.'+VeryHuo+'.'+preP+'.options[23]=tempoption;');
cityareacode[22]=new Array('海口 ','三亚','通什','琼海','琼山','文昌','万宁','东方','儋州','三沙市','白沙县','定安县','屯昌县','澄迈县','临高县','陵水县','琼中县','保亭县','五指山市','昌江县','乐东县');
cityareaname[22]=new Array('海口 ','三亚','通什','琼海','琼山','文昌','万宁','东方','儋州','三沙市','白沙县','定安县','屯昌县','澄迈县','临高县','陵水县','琼中县','保亭县','五指山市','昌江县','乐东县');
if (selectP=='24')
{ a=24;tempoption=new Option('四川','四川',false,true); }
else
{ tempoption=new Option('四川','四川'); }
eval('document.'+VeryHuo+'.'+preP+'.options[24]=tempoption;');
cityareacode[23]=new Array('成都','自贡','攀枝花','泸州','德阳','绵阳','广元','遂宁','内江','乐山','南充  ','宜宾','广安','达州','巴中','雅安','眉山  ','阿坝 ','甘孜 ','凉山 ','资阳');
cityareaname[23]=new Array('成都','自贡','攀枝花','泸州','德阳','绵阳','广元','遂宁','内江','乐山','南充  ','宜宾','广安','达州','巴中','雅安','眉山  ','阿坝 ','甘孜 ','凉山 ','资阳');
if (selectP=='25')
{ a=25;tempoption=new Option('贵州','贵州',false,true); }
else
{ tempoption=new Option('贵州','贵州'); }
eval('document.'+VeryHuo+'.'+preP+'.options[25]=tempoption;');
cityareacode[24]=new Array('贵阳 ','六盘水','遵义','铜仁','毕节','安顺','黔西南 ','黔东南','黔南');
cityareaname[24]=new Array('贵阳 ','六盘水','遵义','铜仁','毕节','安顺','黔西南 ','黔东南','黔南');
if (selectP=='26')
{ a=26;tempoption=new Option('云南','云南',false,true); }
else
{ tempoption=new Option('云南','云南'); }
eval('document.'+VeryHuo+'.'+preP+'.options[26]=tempoption;');
cityareacode[25]=new Array('昆明','东川','曲靖','玉溪','昭通','思茅','临沧','保山','丽江','文山 ','红河 ','西双版纳 ','楚雄 ','大理 ','德宏 ','怒江','迪庆','普洱');
cityareaname[25]=new Array('昆明','东川','曲靖','玉溪','昭通','思茅','临沧','保山','丽江','文山 ','红河 ','西双版纳 ','楚雄 ','大理 ','德宏 ','怒江','迪庆','普洱');
if (selectP=='27')
{ a=27;tempoption=new Option('西藏','西藏',false,true); }
else
{ tempoption=new Option('西藏','西藏'); }
eval('document.'+VeryHuo+'.'+preP+'.options[27]=tempoption;');
cityareacode[26]=new Array('拉萨','那曲','昌都','山南','日喀则','阿里','林芝');
cityareaname[26]=new Array('拉萨','那曲','昌都','山南','日喀则','阿里','林芝');
if (selectP=='28')
{ a=28;tempoption=new Option('陕西','陕西',false,true); }
else
{ tempoption=new Option('陕西','陕西'); }
eval('document.'+VeryHuo+'.'+preP+'.options[28]=tempoption;');
cityareacode[27]=new Array('西安','铜川','宝鸡','咸阳','渭南','延安','汉中','榆林','商洛','安康');
cityareaname[27]=new Array('西安','铜川','宝鸡','咸阳','渭南','延安','汉中','榆林','商洛','安康');
if (selectP=='29')
{ a=29;tempoption=new Option('甘肃','甘肃',false,true); }
else
{ tempoption=new Option('甘肃','甘肃'); }
eval('document.'+VeryHuo+'.'+preP+'.options[29]=tempoption;');
cityareacode[28]=new Array('兰州','金昌','白银','天水','嘉峪关','定西','平凉','庆阳','陇南','武威','张掖','酒泉','甘南 ','临夏');
cityareaname[28]=new Array('兰州','金昌','白银','天水','嘉峪关','定西','平凉','庆阳','陇南','武威','张掖','酒泉','甘南 ','临夏');
if (selectP=='30')
{ a=30;tempoption=new Option('青海','青海',false,true); }
else
{ tempoption=new Option('青海','青海'); }
eval('document.'+VeryHuo+'.'+preP+'.options[30]=tempoption;');
cityareacode[29]=new Array('西宁','海东',' 海北 ','黄南','海南','果洛','玉树','海西');
cityareaname[29]=new Array('西宁','海东',' 海北 ','黄南','海南','果洛','玉树','海西');
if (selectP=='31')
{ a=31;tempoption=new Option('宁夏','宁夏',false,true); }
else
{ tempoption=new Option('宁夏','宁夏'); }
eval('document.'+VeryHuo+'.'+preP+'.options[31]=tempoption;');
cityareacode[30]=new Array('银川','石嘴山','银南','固原','中卫市','吴忠市');
cityareaname[30]=new Array('银川','石嘴山','银南','固原','中卫市','吴忠市');
if (selectP=='32')
{ a=32;tempoption=new Option('新疆','新疆',false,true); }
else
{ tempoption=new Option('新疆','新疆'); }
eval('document.'+VeryHuo+'.'+preP+'.options[32]=tempoption;');
cityareacode[31]=new Array('乌鲁木齐','克拉玛依','石河子','吐鲁番','哈密','和田','阿克苏','喀什','克孜勒苏','巴音郭楞','昌吉','博尔塔拉','伊犁','铁门关市','北屯市','双河市','可克达拉市','图木舒克市','阿拉尔市','和田地区','塔城地区','阿勒泰地区','五家渠市');
cityareaname[31]=new Array('乌鲁木齐','克拉玛依','石河子','吐鲁番','哈密','和田','阿克苏','喀什','克孜勒苏','巴音郭楞','昌吉','博尔塔拉','伊犁','铁门关市','北屯市','双河市','可克达拉市','图木舒克市','阿拉尔市','和田地区','塔城地区','阿勒泰地区','五家渠市');
if (selectP=='33')
{ a=33;tempoption=new Option('香港','香港',false,true); }
else
{ tempoption=new Option('香港','香港'); }
eval('document.'+VeryHuo+'.'+preP+'.options[33]=tempoption;');
cityareacode[32]=new Array();
cityareaname[32]=new Array();
if (selectP=='34')
{ a=34;tempoption=new Option('澳门','澳门',false,true); }
else
{ tempoption=new Option('澳门','澳门'); }
eval('document.'+VeryHuo+'.'+preP+'.options[34]=tempoption;');
cityareacode[33]=new Array();
cityareaname[33]=new Array();
if (selectP=='35')
{ a=35;tempoption=new Option('台湾','台湾',false,true); }
else
{ tempoption=new Option('台湾','台湾'); }
eval('document.'+VeryHuo+'.'+preP+'.options[35]=tempoption;');
cityareacode[34]=new Array();
cityareaname[34]=new Array();
eval('document.'+VeryHuo+'.'+preP+'.options[a].selected=true;');
cityid=selectP;
if (cityid!='0')
{
b=0;for (i=0;i<cityareaname[cityid-1].length;i++)
{
if (selectC==cityareacode[cityid-1][i])
{b=i+1;tempoption=new Option(cityareaname[cityid-1][i],cityareacode[cityid-1][i],false,true);}
else
tempoption=new Option(cityareaname[cityid-1][i],cityareacode[cityid-1][i]);
eval('document.'+VeryHuo+'.'+preC+'.options[i+1]=tempoption;');
}
eval('document.'+VeryHuo+'.'+preC+'.options[b].selected=true;');
}
}
function selectcityarea(preP,preC,VeryHuo)
{
cityid=eval('document.'+VeryHuo+'.'+preP+'.selectedIndex;');
j=eval('document.'+VeryHuo+'.'+preC+'.length;');
for (i=1;i<j;i++)
{eval('document.'+VeryHuo+'.'+preC+'.options[j-i]=null;')}
if (cityid!="0")
{
for (i=0;i<cityareaname[cityid-1].length;i++)
{
tempoption=new Option(cityareaname[cityid-1][i],cityareacode[cityid-1][i]);
eval('document.'+VeryHuo+'.'+preC+'.options[i+1]=tempoption;');
}
}
}