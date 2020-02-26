$(document).ready( function(){

    $('#binario').change(function(){
        var bin = $('#binario').val();
        if (!/^[01]{1,8}$/.test(bin)) {

            alert('Permitido apenas 0 e 1!')
            $('#binario').val('')
        } 

    })
     
     $('#btnConverter').click( function(){

        var bin = $('#binario').val();
        if(bin != ''){

            $.ajax({
                type:'POST',
                url: "include/config.php",
                data: {action: true, binario: bin},
                success: function (result){

                    $('#decimal').val(result)
                }
             })
        }else        
        alert('Preencha o campo de binário!')

         
     })
})