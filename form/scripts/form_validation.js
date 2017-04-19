// JavaScript Document
$(document).ready(function(e) {
    
	submitting_form = function() {
			$("#user_form").submit();
	}

/*
	$.validator.addMethod('rule_name', function (value, element) {
		
	});

	$.validator.addMethod('rule_name', function (value) {
	});

*/

	$.validator.addMethod('m_name', function (value, element) {
		
		if(element.name == "middle_name" && !value)
		{
			return true;
		}

		reg = /^[a-zA-Z]+$/;		
		if(reg.test(value))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	});


	$.validator.addMethod('m_UN', function (value) {

		reg = /^[a-z][a-z0-9]{5,19}$/;		
		if(reg.test(value))
		{
			return true;
		}
		else
		{
			return false;
		}
	});



	$.validator.addMethod('m_pass', function (value) {

		reg = /^[a-z][a-z0-9]{5,15}$/;		
		if(reg.test(value))
		{
			return true;
		}
		else
		{
			return false;
		}
	});


	$.validator.addMethod('m_CN', function (value) {

		reg = /^\d{1,4}\-\d{3}\-\d{7}$/;		
		if(reg.test(value))
		{
			return true;
		}
		else
		{
			return false;
		}
	});

	$.validator.addMethod('m_select', function (value) {
		
		if(value == 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	});


//	$("#user_form").validate();
//	$("#user_form").validate({});
	$("#user_form").validate({
		submitHandler:function(form) {
			//your code		
			submitting_form();
		}, 

		rules:{
			//your rules
			first_name:{
				m_name:true
			},
			middle_name:{
				m_name:true
			},
			last_name:{
				m_name:true
			},
			email:{
				required:true,
				email:true
			},
			user_name:{
				m_UN:true
			},
			password:{
				m_pass:true
			},
			password2:{
				required:true,
				equalTo:"#password"
			},
			contact_number:{
				m_CN:true
			},
			gender:{
				required:true
			},
			'interests[]':{
				required:true
			},
			day:{
				m_select:true
			},
			month:{
				m_select:true
			},
			year:{
				m_select:true
			},
			street_address:{
				required:true,
				minlength:10
			},
			city:{
				required:true
			},
			state:{
				required:true
			},
			country:{
				m_select:true
			},
			profile_image:{
				required:true
			},
			captcha:{
				required:true
			}
		}, 

		messages:{
			//your messages
			first_name:'Invalid/Missing First name',
			middle_name:'Invalid MIddle name',
			last_name:'Invalid/Missing Last name',
			email:{
				required:'Missing Email',
				email:'Invalid Email'
			},
			user_name:'Invalid/Missing User Name',
			password:'Invalid/Missing Password',
			password2:{
				required:'Missing Password',
				equalTo:'Mismatched Password'
			},
			contact_number:'Invalid/Missing Contact Number',
			gender:'Missing Gender',
			'interests[]':'Missing Interest(s)',
			day:'Missing Day',
			month:'Missing Month',
			year:'Missing Year',
			street_address:{
				required:'Missing Street Address',
				minlength:'Too SHort Street Address'
			},
			city:'Missing CIty',
			state:'Missing State',
			country:'Missing Country',
			profile_image:'Missing Profile Image',
			captcha:'Missing Ca[thca',
			
		}
	});
	
});







