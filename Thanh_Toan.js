$(document).ready(function () {
    $.ajax({
        cache: false,
        url: 'DSBD.php',
        success: function (data) {
            $('#so').html(data)

            so = $('#so').find('option:selected').text()
            $.ajax({
                cache: false,
                url: 'Ngay_Nhan.php',
                type: 'POST',
                data: { so: so },
                success: function (data) {
                    $('#nhan').val(data)
                }
            })
        }
    })

    var TinhTien = function(){
        ThanhTien = 0
        $('.don-gia').each(function(){
            ThanhTien += parseInt($(this).text())
        })
        $('#tien').val(ThanhTien)
    }
    TinhTien();

    $('.del').click(function(){
        $(this).parent().parent().remove()
        TinhTien();
    })

    $('#btn-thanh-toan').click(function(){
        ThanhTien = $('#tien').val()
        so = $('#so').find('option:selected').text()
        alert(ThanhTien)
        alert(so)
        $.ajax({
            cache: false,
            url: 'Thanh_Toan.php',
            type: 'POST',
            data: { tien: ThanhTien, so: so },
            success: function(){
                alert("Thanh toán thành công!")
            }
        })
    })
})