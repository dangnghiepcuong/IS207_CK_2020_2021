$(document).ready(function(){
    $('#lan').change(function(){
        lan = $(this).val()
        if (lan == "")
            return

        $.ajax({
            caches: false,
            url: 'Liet_Ke.php',
            type: 'POST',
            data: { lan: lan },
            success: function(data){
                firstRow = $('table').find('tr:first')
                $('table').html(firstRow)
                $('table').append(data)
            }
        })
    })
})