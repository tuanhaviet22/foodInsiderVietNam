$(document).ready(function() {
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
            }
        })
    })
})
