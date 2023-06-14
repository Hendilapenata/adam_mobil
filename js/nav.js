const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        <div class="nav">
            <img src="img/logo1.png" class="brand-logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">search</button>
                </div>
                <a href="#/signup.php"><img src="img/user.png" alt=""></a>
                <a href="#"><img src="img/cart.png" alt=""></a>
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="#home" class="link">home</a></li>
            <li class="link-item"><a href="#mobil" class="link">mobil</a></li>
            <li class="link-item"><a href="#motor" class="link">motor</a></li>
            <li class="link-item"><a href="#about" class="link">about</a></li>
            <li class="link-item"><a href="#contact" class="link">contact</a></li>
        </ul>
    `;
}

createNav();