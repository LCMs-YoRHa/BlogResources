<!--耗时及占用内存开始-->
<span id="momk"></span><span id="momk" style="color: #ff0000;"></span>
<script type="text/javascript">
function NewDate(str) {
str = str.split('-');
var date = new Date();
date.setUTCFullYear(str[0], str[1] - 1, str[2]);
date.setUTCHours(0, 0, 0, 0);
return date;
}
function momxc() {
var birthDay =NewDate("2025-02-04");
var today=new Date();
var timeold=today.getTime()-birthDay.getTime();
var sectimeold=timeold/1000
var secondsold=Math.floor(sectimeold);
var msPerDay=24*60*60*1000; var e_daysold=timeold/msPerDay;
var daysold=Math.floor(e_daysold);
var e_hrsold=(daysold-e_daysold)*-24;
var hrsold=Math.floor(e_hrsold);
var e_minsold=(hrsold-e_hrsold)*-60;
var minsold=Math.floor((hrsold-e_hrsold)*-60); var seconds=Math.floor((minsold-e_minsold)*-60).toString();
document.getElementById("momk").innerHTML = "本站已安全运行："+daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒<br>";
setTimeout(momxc, 1000);
}momxc();
</script>
<style>
#momk{animation:change 10s infinite;font-weight:800; }
@keyframes change{0%{color:#5cb85c;}25%{color:#556bd8;}50%{color:#e40707;}75%{color:#66e616;}100% {color:#67bd31;}}
</style>
<?php printf(' | 耗时 %.3f 秒 | 查询 %d 次 | 内存 %.2f MB |',timer_stop( 0, 3 ),get_num_queries(),memory_get_peak_usage() / 1024 / 1024);?><br>
<!--耗时及占用内存结束-->