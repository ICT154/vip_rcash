"use strict";var KTContactsAdd=function(){var t,e,n;return{init:function(){var r;t=$("#kt_contacts_add_form"),(n=new KTWizard("kt_contacts_add",{startStep:1,clickableSteps:!0})).on("beforeNext",function(t){!0!==e.form()&&t.stop()}),n.on("change",function(t){KTUtil.scrollTop()}),e=t.validate({ignore:":hidden",rules:{profile_avatar:{},profile_first_name:{required:!0},profile_last_name:{required:!0},profile_phone:{required:!0},profile_email:{required:!0,email:!0}},invalidHandler:function(t,e){KTUtil.scrollTop(),swal.fire({title:"",text:"There are some errors in your submission. Please correct them.",type:"error",buttonStyling:!1,confirmButtonClass:"btn btn-brand btn-sm btn-bold"})},submitHandler:function(t){}}),(r=t.find('[data-ktwizard-type="action-submit"]')).on("click",function(n){n.preventDefault(),e.form()&&(KTApp.progress(r),t.ajaxSubmit({success:function(){KTApp.unprogress(r),swal.fire({title:"",text:"The application has been successfully submitted!",type:"success",confirmButtonClass:"btn btn-secondary"})}}))}),new KTAvatar("kt_contacts_add_avatar")}}}();jQuery(document).ready(function(){KTContactsAdd.init()});