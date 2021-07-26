//include/auth.php
//btn-auth

/*phone input*/
let inp = document.querySelector('#tel');

inp.addEventListener('focus', _ => {
  if(!/^\+\d*$/.test(inp.value))
    inp.value = '+7';
});
inp.addEventListener('keypress', e => {
    if(!/\d/.test(e.key))
      e.preventDefault();
  });
/* auth form code*/
$('.btn-auth').click(function (event){
    event.preventDefault();

    $(`input`).removeClass('error');
    let name = $('input[name="name"]').val(),
        addres = $('input[name="addres"]').val(),
        phone = $('input[name="phone"]').val(),
        email = $('input[name="email"]').val()

    $.ajax({
        url: '../includes/auth.php',
        type: 'POST',
        dataType: 'json',
        data: {
            name: name,
            addres: addres,
            phone: phone,
            email: email
        },
        success: function(data){

            if(data.status === true){
                $(`.block_auth`).addClass('d_none');
                $(`.logo`).addClass('d_none');
                document.location.href = '/profile.php';
            }else {

                if(data.type === 1){
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
            }

        }
    });
});