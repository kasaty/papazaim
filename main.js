let today = new Date();
let dd = String(today.getDate()).padStart(2, '0');
let mm = String(today.getMonth() + 1).padStart(2, '0');
let yyyy = today.getFullYear();

let stringDay = dd + '.' + mm + '.' + yyyy;

document.addEventListener("DOMContentLoaded", function(event)
{
    let {value} = document.getElementById('Rubli');
    let y = document.getElementById('day');

    document.getElementById("sum_zaim").innerHTML = value;
    document.getElementById("send_result").innerHTML = "8625";

    document.getElementById("display-amount").innerHTML = value;
    document.getElementById("display-day").innerHTML = y.value;
    document.getElementById("day_end").innerHTML = stringDay;

    let Amounts = document.getElementById('Amounts');
    let Period = document.getElementById('Period');
    let Income = document.getElementById('Income');


    document.getElementById("display-Amounts").innerHTML = Amounts.value + " ₽";
    document.getElementById("display-Period").innerHTML = Period.value + " месяца";
    document.getElementById("display-Income").innerHTML = Income.value + " ₽";


});

function fun() {

    let today = new Date();

    let x = document.getElementById('Rubli');
    let y = document.getElementById('day');
    let rub_proc = x.value * 0.01 * y.value
    let date = today.getDate();
    date = date + Number(y.value)
    today.setDate(date);
    let dd = String(today.getDate()).padStart(2, '0');
    let mm = String(today.getMonth() + 1).padStart(2, '0');
    let yyyy = today.getFullYear();
    let stringDay = dd + '.' + mm + '.' + yyyy;

    const month = 12;

    document.getElementById("send_result").innerHTML =rub_proc + Number(x.value);
    document.getElementById("sum_zaim").innerHTML = x.value;
    document.getElementById("day_end").innerHTML = stringDay;

    document.getElementById("display-amount").innerHTML = x.value;
    document.getElementById("display-day").innerHTML = y.value;

    document.getElementById("display-Amounts").innerHTML = Amounts.value + " ₽";
    

    let Year = Math.floor(Period.value / month);
    let Month = Period.value % month ;

    let monthType = ' месяцов';
    if(Month == 3){
      monthType = Month + ' месяца'
    }else{
      monthType = Month + ' месяцeв'
    }
    
    if(Month == 0){
      monthType = ''
    }

    let YearType = ' год';
    if(Year !== 0){
      YearType = Year + ' год'
    }else{
      YearType = " "
    }
    if(Year > 1){
      YearType = YearType+"a"
    }
    document.getElementById("display-Period").innerHTML = YearType + " " + monthType; 
    document.getElementById("display-Income").innerHTML = Income.value + " ₽"; 
}

document.addEventListener('DOMContentLoaded', () => {

    const mask = (dataValue, options) => {
      const elements = document.querySelectorAll(`[data-mask="${dataValue}"]`)
      if (!elements) return
  
      elements.forEach(el => {
        IMask(el, options)
      })
    }
  
    mask('phone', {
      mask: '+{7}(000)000-00-00'
    })
  })

  $(document).ready( function() {
    $('#file-uploader').click(function(){
      $("#file-uploader").click();
    });
  });
  $('#file-uploader').change(function() {
    $('#selected_filename').text($('#file-uploader')[0].files[0].name);
    $('#selected_filename').append('<img src="resources/images/krestik.svg" class="krestik" height="10px" width="10px" style="margin-left:1%;cursor:pointer;">');
    let krestik = document.querySelector(".krestik");
    if (krestik){
      krestik.addEventListener('click', function(){
        $("#selected_filename").empty()
      })
    }
  });

  let questions = document.querySelectorAll(".faq-section__question");
  let answers = document.querySelectorAll(".faq-section__answer");
  
  questions.forEach((question, idx) => {
      question.addEventListener('click', function() {
        if (answers[idx].style.display === 'none') {
          answers[idx].style.display = 'block'
            } else {
          answers[idx].style.display = 'none'
      }      
    });
  });
  
  $(document).on('click', function(e) {
    if (!$(e.target).closest(".faq-section__item").length) {
      $('.faq-section__answer').hide();
    }
    e.stopPropagation();
  });

  $(document).ready(function(){
    $('.burger').click(function(event) {
      $('.burger,.header').toggleClass('active');
    });
  });