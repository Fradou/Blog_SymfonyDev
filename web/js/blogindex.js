$(document).ready(function(){$(document).on("click",".tagbutton",function(){var t=$(this).attr("id");$(".tagbutton").removeClass("accent-3"),$(this).removeClass("accent-5").addClass("accent-3"),$.ajax({type:"POST",url:"tagindex/"+t,dataType:"json",timeout:3e3,success:function(t){var e=JSON.parse(t.data);for(html="",i=0;i<e.length;i++)html+='<div class="row"><div class="col s12"><h3>'+e[i].title+"</h3></div>"+("object"!=typeof e[i].img?'<div class="col offset-s2 s8 offset-m3 m6 offset-l4 l4 blogindex_articles_img"><img src="../img/'+e[i].img+'"/></div>':"")+'<div class="col offset-s1 s10 offset-l2 l8 blogindex_art_cont"><p>'+e[i].content+"</p></div></div>";$(".section_articles").html(html)},error:function(){$("#job_choices").text("Ajax call error")}})})});