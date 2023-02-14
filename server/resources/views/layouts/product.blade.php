<div class="main-flex">
    <div class="main-product">
        <img src="{{ asset('images/cake.png') }}">
        <div class="wrap-text">
        <p>Indomie Jawa Instan RGX pro blad Norway city Nether way to home</p>
        <label>Rp. 10.000,00</label>
        </div>


        <div class="wrap-button">
            <a href = "{{ url('/favorite') }}">
        <button type="button" class="button-favorite">
        <i class="bi bi-star-fill"></i>
        <span>Add To Favorite</span>
        </button>
            </a>

            <a href = "{{ url('/cart') }}">
        <button type="button" class="button-cart">
        <i class="bi bi-cart-fill"></i>
        <span>Add To Cart</span>
        </button>
            </a>

        </div>
    </div>
</div>