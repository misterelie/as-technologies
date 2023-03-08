function labelFormatter(e,t){return"<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>"+e+"<br/>"+Math.round(t.percent)+"%</div>"}function setCode(e){$("#code").text(e.join("\n"))}$(function(){for(var e=[],t=0;t<=10;t+=1)e.push([t,parseInt(30*Math.random())]);var i=[];for(t=0;t<=10;t+=1)i.push([t,parseInt(30*Math.random())]);$.plot("#website-stats",[e,i],{series:{stack:0,lines:{show:!0,fill:!0,fillColor:{colors:[{opacity:.2},{opacity:.2}]}}},colors:["#d9e6fd","#4a8af6"],grid:{hoverable:!1,clickable:!1,borderWidth:0,labelMargin:0,color:"rgba(118, 126, 154, 0.6)"},xaxis:{axisLabelUseCanvas:!0,borderColor:"rgba(118, 126, 154, 0.6)",axisLabelPadding:10},yaxis:{color:"rgba(118, 126, 154, 0.6)",axisLabelUseCanvas:!0,borderColor:"rgba(118, 126, 154, 0.6)",axisLabelPadding:3,autoScale:"exact"}});var a=[],l=300;function o(){for(0<a.length&&(a=a.slice(1));a.length<l;){var e=(0<a.length?a[a.length-1]:50)+10*Math.random()-5;e<0?e=0:100<e&&(e=100),a.push(e)}for(var t=[],i=0;i<a.length;++i)t.push([i,a[i]]);return t}var r=30;$("#updateInterval").val(r).change(function(){var e=$(this).val();e&&!isNaN(+e)&&((r=+e)<1?r=1:2e3<r&&(r=2e3),$(this).val(""+r))});var n=$.plot("#flotRealTime",[o()],{series:{shadowSize:0},colors:["#4a8af6"],grid:{hoverable:!1,clickable:!1,borderWidth:0,labelMargin:0,color:"rgba(118, 126, 154, 0.6)"},yaxis:{min:0,max:100},xaxis:{show:!1}});!function e(){n.setData([o()]),n.draw(),setTimeout(e,r)}()}),$(function(){for(var e=[],t=Math.floor(6*Math.random())+3,i=0;i<t;i++)e[i]={label:"Series"+(i+1),data:Math.floor(100*Math.random())+1};var a=$("#placeholder");$("#example-1").click(function(){a.unbind(),$("#title").text("Default pie chart"),$("#description").text("The default pie chart with no options set."),$.plot(a,e,{series:{pie:{show:!0}}})}),$("#example-2").click(function(){a.unbind(),$("#title").text("Default without legend"),$("#description").text("The default pie chart when the legend is disabled. Since the labels would normally be outside the container, the chart is resized to fit."),$.plot(a,e,{series:{pie:{show:!0}},legend:{show:!1}})}),$("#example-3").click(function(){a.unbind(),$("#title").text("Custom Label Formatter"),$("#description").text("Added a semi-transparent background to the labels and a custom labelFormatter function."),$.plot(a,e,{series:{pie:{show:!0,radius:1,label:{show:!0,radius:1,formatter:labelFormatter,background:{opacity:.8}}}},legend:{show:!1}})}),$("#example-4").click(function(){a.unbind(),$("#title").text("Label Radius"),$("#description").text("Slightly more transparent label backgrounds and adjusted the radius values to place them within the pie."),$.plot(a,e,{series:{pie:{show:!0,radius:1,label:{show:!0,radius:.75,formatter:labelFormatter,background:{opacity:.5}}}},legend:{show:!1}})}),$("#example-5").click(function(){a.unbind(),$("#title").text("Label Styles #1"),$("#description").text("Semi-transparent, black-colored label background."),$.plot(a,e,{series:{pie:{show:!0,radius:1,label:{show:!0,radius:.75,formatter:labelFormatter,background:{opacity:.5,color:"#000"}}}},legend:{show:!1}})}),$("#example-6").click(function(){a.unbind(),$("#title").text("Label Styles #2"),$("#description").text("Semi-transparent, black-colored label background placed at pie edge."),$.plot(a,e,{series:{pie:{show:!0,radius:.75,label:{show:!0,radius:.75,formatter:labelFormatter,background:{opacity:.5,color:"#000"}}}},legend:{show:!1}})}),$("#example-7").click(function(){a.unbind(),$("#title").text("Hidden Labels"),$("#description").text("Labels can be hidden if the slice is less than a given percentage of the pie (10% in this case)."),$.plot(a,e,{series:{pie:{show:!0,radius:1,label:{show:!0,radius:2/3,formatter:labelFormatter,threshold:.1}}},legend:{show:!1}})}),$("#example-8").click(function(){a.unbind(),$("#title").text("Combined Slice"),$("#description").text("Multiple slices less than a given percentage (5% in this case) of the pie can be combined into a single, larger slice."),$.plot(a,e,{series:{pie:{show:!0,combine:{color:"#999",threshold:.05}}},legend:{show:!1}})}),$("#example-9").click(function(){a.unbind(),$("#title").text("Rectangular Pie"),$("#description").text("The radius can also be set to a specific size (even larger than the container itself)."),$.plot(a,e,{series:{pie:{show:!0,radius:500,label:{show:!0,formatter:labelFormatter,threshold:.1}}},legend:{show:!1}})}),$("#example-10").click(function(){a.unbind(),$("#title").text("Tilted Pie"),$("#description").text("The pie can be tilted at an angle."),$.plot(a,e,{series:{pie:{show:!0,radius:1,tilt:.5,label:{show:!0,radius:1,formatter:labelFormatter,background:{opacity:.8}},combine:{color:"#999",threshold:.1}}},legend:{show:!1}})}),$("#example-11").click(function(){a.unbind(),$("#title").text("Donut Hole"),$("#description").text("A donut hole can be added."),$.plot(a,e,{series:{pie:{innerRadius:.5,show:!0}}})}),$("#example-12").click(function(){a.unbind(),$("#title").text("Interactivity"),$("#description").text("The pie can be made interactive with hover and click events."),$.plot(a,e,{series:{pie:{show:!0}},grid:{hoverable:!0,clickable:!0}}),a.bind("plothover",function(e,t,i){if(i){var a=parseFloat(i.series.percent).toFixed(2);$("#hover").html("<span style='font-weight:bold; color:"+i.series.color+"'>"+i.series.label+" ("+a+"%)</span>")}}),a.bind("plotclick",function(e,t,i){i&&(percent=parseFloat(i.series.percent).toFixed(2),alert(i.series.label+": "+percent+"%"))})}),$("#example-1").click(),$("#footer").prepend("Flot "+$.plot.version+" &ndash; ")});