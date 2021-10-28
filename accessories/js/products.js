// Getting All Required Elements
const activeEffectbutton = document.querySelectorAll('.product-area .button-group_products button');

const filterItems = (e) => {
	const clickedItem = e.target;

	// Active Effect
	for (let i = 0; i < activeEffectbutton.length; i++) {
		activeEffectbutton[i].classList.contains('active') && activeEffectbutton[i].classList.remove('active');
	}
	clickedItem.classList.toggle('active');

	// Filter
	const filterSelector = clickedItem.getAttribute('data-filter');
	$('.product-area .grid').isotope({ filter: filterSelector });
};

for (let i = 0; i < activeEffectbutton.length; i++) {
	activeEffectbutton[i].addEventListener('click', (e) => filterItems(e));
}
