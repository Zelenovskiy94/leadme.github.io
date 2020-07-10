let btnNext = document.querySelector('.btn__next');
let btnSubmit = document.querySelector('.btn__submit');
let input = document.querySelectorAll('.local__answer');
let questionnaire = document.querySelector('.questionnaire');
let progressLine = document.querySelector('.progress--line');
let toMail = document.querySelector('#toMail');
let phoneContainer = document.querySelector('.phone-input-container');
let emailContainer = document.querySelector('.email-input-container');

function translateBlock(btn) {
	let x = 0;
	let count = 1
	btn.addEventListener('click', function(){
		if(count > 3) {
			return
		}
		if(count == 1 && !input[0].value == '' && !isNaN(input[0].value)) {
			x-=25
			setTimeout(function(){
				progressLine.classList.add('progress50'); 
				
			},450)
			questionnaire.style.transform = `translateX(${x}%)`;
			count+=1
			return
			
		}
		if(count == 2 && !input[1].value == '' && !isNaN(input[1].value)) {
			x-=25
			setTimeout(function(){
				progressLine.classList.add('progress100'); 
				
			},450)
			questionnaire.style.transform = `translateX(${x}%)`;
			count+=1
			return
			
		}
		if(count == 3) {
			x-=25
			questionnaire.style.transform = `translateX(${x}%)`
			btnNext.style.display = 'none'
			btnSubmit.style.display = 'block'
			return
			
		}
	})
}

translateBlock(btnNext)

$(function(){
  $("#phone-input").mask("+375 (99)999-99-99");
});
function checkStatus(){
	if(toMail.checked) {
		emailContainer.style.display = 'block';
		phoneContainer.style.display = 'none';
	} else {
		emailContainer.style.display = 'none';
		phoneContainer.style.display = 'block';
	}
}

