//LOADER

//Esta en el archivo /recursos/loader.php

//OBSERVER

const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) =>{
		console.log(entry)
		if (entry.isIntersecting) {
			entry.target.classList.add('show');
		}else{
			entry.target.classList.remove('show');
		}
	});
});


const hiddenElements = document.querySelectorAll('.hidden');
const hiddenLeftElements = document.querySelectorAll('.hidden_left');
hiddenElements.forEach((el) => observer.observe(el));
hiddenLeftElements.forEach((el) => observer.observe(el));