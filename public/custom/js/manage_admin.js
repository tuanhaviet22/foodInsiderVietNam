$(document).ready(function() {
	 toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "3000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };
    $(".btn-submit-c").click(function(e) {
        e.preventDefault();
        let form = $('#register');
        let email = form.find('input[name="email"]').val();
        let fullname = form.find('input[name="fullname"]').val();
        console.log(base_url)
        $.ajax({
            url: base_url + "admin/manage/add",
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            data: {
                email: email,
                fullname: fullname,
                permission: 0
            },
            success: function(response) {
            	console.log(response)
                if (response.status == true) {
              		toastr.success("Tạo người dùng thành công")
                }else{                	
                    toastr.error(response.message);
                }
            }
        })
    })
})
