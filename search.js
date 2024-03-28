// Function to perform the search
function search() {
    var searchTerm = document.getElementById('searchInput').value.toLowerCase();
    var filteredProducts = products.filter(function(product) {
        return product.name.toLowerCase().includes(searchTerm) || product.description.toLowerCase().includes(searchTerm);
    });

    if (filteredProducts.length > 0) {
        // Clear the existing products and add filtered products to HTML
        listProductHTML.innerHTML = '';
        filteredProducts.forEach(function(product) {
            var newProduct = document.createElement('div');
            newProduct.dataset.id = product.id;
            newProduct.classList.add('item');
            newProduct.innerHTML =
                `<img src="${product.image}" alt="">
                <h2>${product.name}</h2>
                <p>${product.description}</p> <!-- Include description -->
                <div class="rating">Rating: ${product.rating} </div>
                <div class="price">&#8377; ${product.price}</div>
                <button class="addCart">Add To Cart</button>`;
            listProductHTML.appendChild(newProduct);
        });
    } else {
        alert('Product not found');
    }
}

// Function to show the search popup
function showSearchPopup() {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

// Function to hide the search popup
function hideSearchPopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}
