$(document).ready(function(){
    $.ajax({
        cache: false,
        url: 'DSKH.php',
        success: function(data){
            $('#ten').html(data)
        },
        error: function(){}
    })

    $('#btn-them-xe').click(function(){
        ma = $('#ten').find('option:selected').val()
        so = $('#so').val()
        hang = $('#hang').find('option:selected').val()
        nam = $('#nam').val()

        $.ajax({
            cache: false,
            url: 'Them_Xe.php',
            type: 'POST',
            data: { so: so, hang: hang, nam: nam, ma: ma },
            success: function(data){
                alert('Thêm xe thành công!')
            }
        })
    })
})