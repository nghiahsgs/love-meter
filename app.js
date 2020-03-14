// $(document).ready(()=>{
//     console.log('hihii')
// })


function saveUserQuiz() {
    name_1 = $('#name1').val()
    name_2 = $('#name2').val()
    post_data(name_1, name_2)
    // console.log({ name_1, name_2})
}

function post_data(name_1, name_2) {
    data={name_1, name_2}
    $.post('log.php', data,(data, status)=>{
        // console.log({ data, status})
        $('#register').html($('#register').html().replace('Kiểm tra', 'bạn đã bị lừa, ahihi'))
    })
}