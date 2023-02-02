$(document).ready(function(){
    $('#so').change(function(){
        so = $('#so').val()
        $.ajax({
            cache: false,
            url: 'KH.php',
            type: 'POST',
            data: { so: so },
            dataType: 'json',
            success: function(data){
                $('#ten').val(data)
            }
        })
    })

    $('#btn-them-bd').click(function(){
        so = $('#so').val()
        mabd = $('#mabd').val()
        km = $('#km').val()
        nd = $('#nd').val()

        $.ajax({
            cache: false,
            url: 'Them_Bao_Duong.php',
            type: 'POST',
            data: { so: so, mabd: mabd, km: km, nd: nd },
            success: function(){
                alert("Thêm bảo dưỡng thành công!")
            }
        })
    })
})