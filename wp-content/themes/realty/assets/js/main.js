jQuery("#country").click(function(){
	jQuery(".country-content").toggle();
	if(jQuery(this).hasClass("active")){
		jQuery(this).css("padding-bottom","0px");
		jQuery(this).css("padding-top","0px");
		jQuery(this).removeClass("active");
		jQuery(".globe-col-2.america").hide();
		jQuery(".globe-col-6.emea").hide();
		jQuery(".globe-col-2.apac").hide();
		jQuery("#emea").css("border-left","1px solid");
		jQuery("#apac").css("border-left","1px solid");
		jQuery("#apac").removeClass("active");
		jQuery("#emea").removeClass("active");
		jQuery("#america").removeClass("active");
		jQuery("#america").css("border-left","1px solid");
	}else{
		jQuery(this).css("padding-bottom","7px");
		jQuery(this).css("padding-top","6px");
		jQuery(this).addClass("active");
	}
});

jQuery(".close-icon").click(function(){
	jQuery(".country-content").toggle();
		jQuery(".globe-col-2.america").hide();
		jQuery(".globe-col-6.emea").hide();
		jQuery(".globe-col-2.apac").hide();
		jQuery("#emea").css("border-left","1px solid");
		jQuery("#apac").css("border-left","1px solid");
		jQuery("#apac").removeClass("active");
		jQuery("#emea").removeClass("active");
		jQuery("#america").removeClass("active");
		jQuery("#america").css("border-left","1px solid");
		jQuery("#country").removeClass("active");
		jQuery("#country").css("padding-bottom","0px");
});

jQuery("#america").click(function(){
		jQuery(".globe-col-2.america").toggle();
		if(jQuery(this).hasClass("active")){
			jQuery(this).css("border-left","1px solid");
			jQuery(this).removeClass("active");
		}else{
			jQuery(this).addClass("active");
			jQuery(this).css("border-left","none");
			jQuery(".globe-col-6.emea").hide();
			jQuery(".globe-col-2.apac").hide();
		}
		jQuery("#apac").removeClass("active");
		jQuery("#apac").css("border-left","1px solid");
		jQuery("#emea").removeClass("active");
		jQuery("#emea").css("border-left","1px solid");
});
jQuery("#apac").click(function(){
		jQuery(".globe-col-2.apac").toggle();
		if(jQuery(this).hasClass("active")){
			jQuery(this).css("border-left","1px solid");
			jQuery(this).removeClass("active");
		}else{
			jQuery(this).addClass("active");
			jQuery(this).css("border-left","none");
			jQuery(".globe-col-2.america").hide();
			jQuery(".globe-col-6.emea").hide();
		}
		jQuery("#america").removeClass("active");
		jQuery("#america").css("border-left","1px solid");
		jQuery("#emea").removeClass("active");
		jQuery("#emea").css("border-left","1px solid");
});
jQuery("#emea").click(function(){
		jQuery(".globe-col-6.emea").toggle();
		if(jQuery(this).hasClass("active")){
			jQuery(this).css("border-left","1px solid");
			jQuery(this).removeClass("active");
		}else{
			jQuery(this).addClass("active");
			jQuery(this).css("border-left","none");
			jQuery(".globe-col-2.apac").hide();
			jQuery(".globe-col-2.america").hide();
		}
		jQuery("#america").removeClass("active");
		jQuery("#america").css("border-left","1px solid");
		jQuery("#apac").removeClass("active");
		jQuery("#apac").css("border-left","1px solid");
});
//buscador
var department = jQuery("#dep");
var province = jQuery("#prov");
var district = jQuery("#dist");
if(department.val() == "all"){
	province.prop("disabled","disabled");
}
if(province.val() == "0" || province.val() == "all"){
	district.prop("disabled","disabled");
}
department.change(function(){
	if(department.val() == "all"){
		province.prop("disabled","disabled");
		district.prop("disabled","disabled");
		province.val("0");
		district.val("0");
	}else{
		province.prop("disabled",false);
	}
});
province.change(function(){
	if(province.val() == "0" || province.val() == "all"){
		district.prop("disabled","disabled");
	}else{
		district.prop("disabled",false);
	}
});
