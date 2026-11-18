<style>
    nav {
        background-color: #F4A7BB;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 16px;
    }

    nav a {
        text-decoration: none;
        color: white;
        margin-left: 20px;
        font-weight: bold;
        font-size: 18px;
    }

    nav a:hover {
        color: #8B3A55;
    }

    .logo {
        font-size: 25px;
        font-weight: bold;
        color: white;
    }
</style>

<nav>
    <div class="logo">
        BuyLaptop
    </div>

    <div>
        <a href="{{ route('list-laptop') }}">List Laptop</a>
        <a href="{{ route('add-laptop') }}">Add Laptop</a>
    </div>
</nav>