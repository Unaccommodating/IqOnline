//  $('.calculation').submit(function(e) {
//         e.preventDefault();
//         let th =$(this);
//         // let mess = $('.mess');
//         let btn = th.find('.calc_btn');

//         $.ajax({
//             url: 'calc.php',
//             type: 'POST',
//             data: th.serialize(),
//         })
// });


  $( function() {
    $("#datepicker").datepicker({
      dateFormat : "yy-mm-dd",
      minDate: new Date($('#hiddendelivdate').val()),
      monthNames : ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
      dayNamesMin : ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
    });
  } );


$(document).ready(function(){
    $('button').on('click', function(){
        var summn1 = $('input[name="sum"]').val();
        var summadd = $('input[name="pay"]').val();
        var yearNum = $('input[name="year"]').val();
        var radio = $('input[name="radio"]').val();

        $.ajax({
                url: 'calc.php',
                type: 'POST',
                data: { summn1: summn1, summadd: summadd, yearNum: yearNum, radio: radio }
                })
                .done(function(msg){
                  alert(msg)
                });
    })
})


function funUp() {
    var sumInp=document.getElementById('SliderUp'); 
    var sum=document.getElementById('sum'); 
    sum.value=sumInp.value;
  }

function funDown(){
    var payInp=document.getElementById('SliderDown'); 
    var pay=document.getElementById('pay'); 
    pay.value=payInp.value;
}


