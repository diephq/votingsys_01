$(document).ready(function(){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$(".loader").hide(),$("#label_link_user").attr("href",$(".token-user").val()),$("#label_link_admin").attr("href",$(".token-admin").val()),$(".edit-link-user").click(function(e){e.preventDefault(),$(".loader").show(),divChangeAmount=$(this).parent();var t=(divChangeAmount.data("tokenLinkUser"),$(".hide").data("pollId")),a=$(".hide").data("route"),i=($(".hide").data("linkExist"),$(".hide").data("linkInvalid"),$(".hide").data("editLinkSuccess")),n=$(".token-user").val();return""==n?void $(".loader").hide():$(".latest-token-user").html()==n?($(".loader").hide(),$(".message-link-user").html(""),void $("#title-success").html("")):void $.ajax({type:"POST",url:a+"/"+t,dataType:"JSON",data:{_method:"PUT",token_input:n,is_link_admin:0},success:function(e){$(".loader").hide(),e.success&&($("#label_link_user").attr("href",$(".token-user").val()),$(".message-link-user").html(i),$(".latest-token-user").html(e.token_link),hideLabelMessage(".message-link-user"))}})}),$(".edit-link-admin").click(function(e){e.preventDefault(),$(".loader").show(),divChangeAmount=$(this).parent();var t=divChangeAmount.data("tokenLinkAdmin"),a=$(".hide").data("pollId"),i=$(".hide").data("route"),n=($(".hide").data("linkExist"),$(".hide").data("linkInvalid"),$(".hide").data("editLinkAdminSuccess")),d=$(".token-admin").val();return""==d?void $(".loader").hide():t==d?void $(".loader").hide():void $.ajax({type:"POST",url:i+"/"+a,dataType:"JSON",data:{_method:"PUT",token_input:d,is_link_admin:1},success:function(e){$(".loader").hide(),e.success&&(swal({title:n,timer:2e3,showConfirmButton:!1}),setTimeout(function(){window.location.href=$(".hide").data("urlAdmin")+"/"+d},2e3))}})})});