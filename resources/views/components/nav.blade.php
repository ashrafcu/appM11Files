<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">STOCK DASHBOARD</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('product.list')}}">All Products</a></li>
                    <li><a href="{{route('transaction.list')}}">Transactions</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">Products</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('add-products.form')}}">Add Products</a></li>
                    <li><a href="{{route('add-products.form')}}">Edit Product Stock</a></li>
                </ul>
            </li>
            
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i> <span class="nav-text">Sales</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('add-invoices.form')}}">New Invoice</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>