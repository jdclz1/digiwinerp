jQuery(document).ready(function(l){var e,t,o,c;1!=(1*localStorage.getItem("WB_DLIPP_SWITCH")?localStorage.getItem("WB_DLIPP_SWITCH"):0)||l("#J_DLIPP_SWITCH").attr("checked")||(l("#J_DLIPP_SWITCH").attr("checked","checked"),l("#J_DIPPMain").addClass("active")),l(".wb-switch[data-target]").length&&l(".wb-switch[data-target]").on("change",function(){var t=l(this),a=l(t.data("target"));t.prop("checked")?(t.attr("data-value","true"),a.addClass("active"),localStorage.setItem("WB_DLIPP_SWITCH",1)):(t.attr("data-value","false"),a.removeClass("active"),localStorage.setItem("WB_DLIPP_SWITCH",0))}),l(".section-upload .wbs-upload-btn").length&&(e=l,(t||e(".section-upload .wbs-upload-btn")).click(function(t){var a=window.frame||window.wb_frame;c=o||e(this).prev("input"),a||(a=wp.media({title:"选择文件",button:{text:"确认"},multiple:!1}),(window.wb_frame=a).on("select",function(){var t=a.state().get("selection").toJSON()[0].url;c.val(t).focus()})),a.open()})),l("#wb_down_url").on("blur",function(){var t=l(this),a=/链接:?：?\s*([^\s]+)\s*.+?码:?：?\s*([a-zA-Z0-9]+)/i;if(t.val()&&a.test(t.val())){var e=t.val().match(a);e[1]&&jQuery("#wb_down_url").val(e[1]),e[2]&&jQuery("#wb_down_pwd").val(e[2])}})});