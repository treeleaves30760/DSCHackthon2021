$(document).on("click", ({ target }) => {
    if ($(target).hasClass("submitMessage")) {
        obj = {
            "email": document.getElementById('email').value,
            "message":document.getElementById('message').value,
        }
        // console.log(obj)
        Swal.fire({
            icon: 'question',
            showCancelButton: true,
            title: '確定送出',
            text: '確定送出訊息嗎',
            confirmButtonText: '繼續',
            cancelButtonText: '返回'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    data: obj,
                    url: "../php/sendContact.php"
                });
                location.reload()
            } else if (result.isDenied) {
                Swal.fire('Ok','','info');
            }
        })
    }
})

// Swal.fire({
//     title: 'Welcome',
//     text: 'Welcome to the Meichu Eat',
//     icon: 'info',
//     confirmButtonText: '繼續'
//   })

// action="./php/sendContact.php" method="post"