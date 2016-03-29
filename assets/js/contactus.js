var VC = VC ||{};
VC.Index=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

VC.Index.prototype = {
    initialize:function() {
        //this.contactUs();
    },
    notify: function(message,type) {
        $.growl({
            message: message
        },{
            type: type,
            allow_dismiss: false,
            label: 'Cancel',
            className: 'btn-xs btn-inverse',
            placement: {
                from: 'top',
                align: 'right'
            },
            timer:4000,
            animate: {
                enter: 'animated fadeIn',
                exit: 'animated fadeOut'
            },
            offset: {
                x: 20,
                y: 85
            }
        });
    },

    contactUs:function() {
        var self=this;
        $("#form_contactus").validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email : true
                },
                mobile: {
                    required : true,
                    number:true,
                    minlength:10,
                    maxlength:10
                },
                contact_message: {
                    required:true
                }
            },
            messages : {
                name: {
                    required : 'Enter your Name'
                },
                email: {
                    required : 'Enter your email',
                    email : 'Enter valid email'
                },
                mobile: {
                    required: 'Enter mobile number',
                    number: "Enter correct mobile number",
                    minlength: 'Enter 10 digits mobile number',
                    maxlength: 'Enter 10 digits mobile number'
                },
                contact_message: {
                    required : 'Enter your message'
                }
            },
            submitHandler: function(form) {
                //var name = $('#name').val();
                //var email = $('#email').val();
                //var mobile = $('#mobile').val();
                //var message = $('#contact_message');
                //var send_msg_button = $('#send_message_button');
                //$.ajax({
                //    url: self.base_url+"contact-message",
                //    type: "POST",
                //    dataType: "JSON",
                    //data:{
                    //    name:name,
                    //    email: email,
                    //    mobile: mobile,
                    //    message: message
                    //},
                    //beforeSend: function() {
                    //    send_msg_button.html('Sending... &nbsp;<i class="zmdi zmdi-arrow-forward"></i>');
                    //},
                    //error:function(data) {
                    //    alert("Error on server");
                    //},
                //    success: function (data) {
                //        console.log(data);
                //        alert('your message send successfully');
                //    }
                //});
            },
            errorPlacement: function(error, element) {
                $( element ).closest( "form" ).find( "span[data-error-for='" + element.attr( "id" ) + "']").html(error[0].innerHTML).css('opacity',1);
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('error');
                $(element).closest('.pos-relative').find('.error-span').css('opacity',0);
            }
        });
    }
};