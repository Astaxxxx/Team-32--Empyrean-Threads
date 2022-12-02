<aside class = "top-navbar">
    <div class="logo">
        Adminpanel
    </div>

    <ul>
        <li>
            <a href="{{route('adminpanel')}}" >Dashboard</a>

        </li>
        <li>
            <a href="{{route('adminpanel.products')}}">Products</a>
        </li>
        <li>
            <a href="{{route('adminpanel.catergories')}}"> Catogories</a>
        </li>
        <li>
            <a href="{{route('adminpanel.colour')}}" >Colors</a>
        </li>
        <li>
            <a href="{{route('adminpanel.orders')}}" >Orders</a>
            
        </li>
    </ul>

    <div class="logout">
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M10 9.25c-2.27 0-2.73-3.44-2.73-3.44C7 4.02 7.82 2 9.97 2c2.16 0 2.98 2.02 2.71 3.81c0 0-.41 3.44-2.68 3.44zm0 2.57L12.72 10c2.39 0 4.52 2.33 4.52 4.53v2.49s-3.65 1.13-7.24 1.13c-3.65 0-7.24-1.13-7.24-1.13v-2.49c0-2.25 1.94-4.48 4.47-4.48z"/></svg>
            &nbsp; Logout
            </button>
        </form>

    </div>
</aside>