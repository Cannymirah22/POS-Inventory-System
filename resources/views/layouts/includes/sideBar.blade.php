<nav class="active" id="sidebar">
    <ul class="list-unstyled lead">
        <li class="active">
            <a href=""><i class="fa fa-home fa-lg"></i> Home </a>
        </li>

        <li>
            <a href="{{ route('orders.index') }}"> <i class="fa fa-box fa-lg"></i> Orders </a>
        </li>

        <li>
            <a href="{{ route('transactions.index') }}"> <i class="fa fa-money-bill fa-lg"></i> Transactions </a>
        </li>

        <li>
            <a href="{{ route('products.index') }}"> <i class="fa fa-truck fa-lg"></i> Product </a>
        </li>

        <li>
            <a href="{{ route('sections.index') }}"> <i class="fa fa-list-alt fa-lg"></i> Sections </a>
        </li>
        <li>
            <a href="{{ route('categories.index') }}"> <i class="fa fa-industry fa-lg"></i> Categories </a>
        </li>
    </ul>
</nav>

<style>
    #sidebar ul.lead {
        border-bottom: 1px solid rgb(52, 73, 94);
        width: fit-content;
    }


    #sidebar ul li a {
        padding: 10px;
        text-decoration: none;
        font-size: 1.1em;
        display: block;
        width: 30vh;
        color: rgb(52, 73, 94);
    }

    #sidebar ul li a:hover {
        color: #fff;
        background: rgb(52, 73, 94);
        text-decoration: none;
    }

    #sidebar ul {
        list-style: none;
    }

    #sidebar ul li a i {
        margin-right: 10px;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: rgb(52, 73, 94);
    }
</style>
