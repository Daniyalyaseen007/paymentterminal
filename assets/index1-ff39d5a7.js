$(function(o){$("#data-table").DataTable({language:{searchPlaceholder:"Search...",sSearch:""}}),$(".select2").select2({minimumResultsForSearch:1/0,width:"60px"})});$(function(o){var e={chart:{height:395,width:"100%",type:"bar",stacked:!0,stackType:"100%",toolbar:{show:!1}},plotOptions:{bar:{horizontal:!0}},grid:{borderColor:"rgba(119, 119, 142, 0.08)"},stroke:{width:1,colors:["#fff"]},series:[{name:"Usa",data:[44,55,41,37,22,43,32]},{name:"India",data:[53,32,33,52,13,43,32]},{name:"Russia",data:[17,14,13,18,15,12,14]},{name:"Canada",data:[18,15,20,12,15,9,18]},{name:"Japan",data:[10,15,13,8,16,9,18]},{name:"Australia",data:[20,25,22,19,22,15,16]},{name:"Mexico",data:[18,24,16,22,13,17,21]},{name:"Germany",data:[25,12,19,32,25,24,30]}],colors:["#467fcf","#5eba00","#ffca4a","#ff6666","#867efc","#3ec7e8","#2bb4a6","#00C851"],title:{text:""},xaxis:{categories:[2013,2014,2015,2016,2017,2018,2019,2020,2021],axisBorder:{show:!0,color:"rgba(119, 119, 142, 0.05)"},axisTicks:{show:!0,color:"rgba(119, 119, 142, 0.05)"}},tooltip:{y:{formatter:function(t){return t+"K"}}},fill:{opacity:1},legend:{position:"top",horizontalAlign:"left",offsetX:40}},a=new ApexCharts(document.querySelector("#sales-country-wise"),e);a.render();var e={series:[55,78,35,25],labels:["USA","INDIA","RUSSIA","CANADA"],chart:{height:250,type:"donut"},dataLabels:{enabled:!1},legend:{show:!1},stroke:{show:!0,width:0},plotOptions:{pie:{donut:{size:"84%",background:"transparent",labels:{show:!0,name:{show:!0,fontSize:"20px",color:"#495057",offsetY:-4},value:{show:!0,fontSize:"18px",color:void 0,offsetY:8,formatter:function(t){return t+"%"}},total:{show:!0,showAlways:!0,label:"Total",fontSize:"22px",fontWeight:600,color:"#495057"}}}}},responsive:[{options:{legend:{show:!1}}}],colors:["#5eba00","#467fcf","#3ec7e8","#ffc107","#5c509b"]},a=new ApexCharts(document.querySelector("#recent-orders"),e);a.render(),$(".resp-tabs-list .home-sparic").addClass("active"),$(".second-sidemenu .home-sparic").addClass("resp-tab-content-active")});