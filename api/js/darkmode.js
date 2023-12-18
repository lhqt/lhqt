const list = document.querySelectorAll('.đang');
	function kichHoat(){
		list.forEach((item) =>
		item.classList.remove('✔️'));
		this.classList.add('✔️');
	}
	list.forEach((item) =>
	item.addEventListener('click',kichHoat));

let DarkMode = document.querySelector('.DarkMode');
	let body = document.querySelector('body')
	DarkMode.onclick = function(){
		body.classList.toggle('dark')
	}
