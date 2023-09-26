const menu = document.querySelector('nav .container ul');
const navItems = menu.querySelectorAll('li a');
const logo = document.querySelector('.container h3');
const firstNavItem = navItems[0];

const setActiveItem = (index) => {
    navItems.forEach(item => item.classList.remove('active'));
    navItems[index].classList.add('active');
};

const handleClick = (e) => {
    const clickedItem = e.target.closest('a');
    if (!clickedItem) return;

    const clickedIndex = Array.from(navItems).indexOf(clickedItem);

    if (!navItems[clickedIndex].classList.contains('active')) {
        setActiveItem(clickedIndex);
        localStorage.setItem('activeItemIndex', clickedIndex);
    }
};

navItems.forEach(item => {
    item.addEventListener('click', handleClick);
});

logo.addEventListener('click', () => {
    setActiveItem(0);
    localStorage.setItem('activeItemIndex', 0);
});

// Recupera o item ativo do localStorage ao carregar a página
window.addEventListener('DOMContentLoaded', () => {
    const activeItemIndex = localStorage.getItem('activeItemIndex');
    if (activeItemIndex !== null) {
        setActiveItem(activeItemIndex);
    }
});