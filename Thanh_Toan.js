$(document).ready(function () {

    var TinhTien = function () {
        ThanhTien = 0
        $('table').find('.don-gia').each(function () {
            ThanhTien += parseInt($(this).text())
        })
        $('#tien').val(ThanhTien)
    }

    var CongViec = function () {
        so = $('#so').find('option:selected').text()
        nhan = $('#nhan').val();

        $.ajax({
            cache: false,
            url: 'Cong_Viec.php',
            type: 'POST',
            data: { so: so, nhan: nhan },
            success: function (data) {
                firstRow = $('#cong-viec').find('tr:first')
                $('#cong-viec').html(firstRow)
                $('#cong-viec').append(data)
                TinhTien();
            }
        })
    }

    $('#nhan').change(function () {
        nhan = $('#nhan').val();

        $.ajax({
            cache: false,
            url: 'DSBD.php',
            type: 'POST',
            data: { nhan: nhan },
            success: function (data) {
                $('#so').html(data)
                CongViec()
            }
        })
    })

    $('#so').change(function () {
        CongViec()
    })

    $('table').on('click', '.del', function () {
        thisRow = $(this).parent().parent()
        cv = thisRow.find('td:first').attr('class')
        mabd = thisRow.attr('class')
        $.ajax({
            cache: false,
            url: 'Xoa_Cong_Viec.php',
            type: 'POST',
            data: { mabd: mabd, cv: cv }
        })
        
        thisRow.remove()
        TinhTien();
    })

    $('#btn-thanh-toan').click(function () {
        ThanhTien = $('#tien').val()
        so = $('#so').find('option:selected').text()
        nhan = $('#nhan').val();

        $.ajax({
            cache: false,
            url: 'Thanh_Toan.php',
            type: 'POST',
            data: { tien: ThanhTien, so: so, nhan: nhan },
            success: function () {
                alert("Thanh toán thành công!")
            }
        })
    })
})