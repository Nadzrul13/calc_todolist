window.onload = function() {
    fetchMenuItems();
};

// Fetch menu items from the API
function fetchMenuItems() {
    fetch('api/getMenu.php')
        .then(response => response.json())
        .then(data => {
            const menuContainer = document.getElementById('menu-container');
            data.forEach(item => {
                const menuItem = document.createElement('div');
                menuItem.classList.add('menu-item');
                menuItem.innerHTML = `
                    <img src="assets/images/${item.image}" alt="${item.name}">
                    <h3>${item.name}</h3>
                    <p>${item.description}</p>
                    <button onclick="placeOrder(${item.id})">Order Now</button>
                `;
                menuContainer.appendChild(menuItem);
            });
        })
        .catch(error => {
            console.error('Error fetching menu:', error);
        });
}






