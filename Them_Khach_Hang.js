$(document).ready(function(){
    $('#btn-them-kh').click(function(){
        ma = $('#ma').val()
        ten = $('#ten').val()
        dc = $('#dc').val()
        dt = $('#dt').val()

        $.ajax({
            cache: false,
            url: 'Them_Khach_Hang.php',
            type: 'POST',
            data: {ma: ma, ten: ten, dc: dc, dt: dt},
            success: function(data) {
                alert("Thêm khách hàng thành công!")
                // $('body').html(data)
            },
            error: function(){}
        })
    })
})