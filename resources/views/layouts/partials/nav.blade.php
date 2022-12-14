
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empyrean Threads</title>
    <link rel="shortcut icon" href="images/empyreanfavicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('css/Pages/styles.css')}}">
  </head>
  <body>
    <nav>
      <div class="nav_Container">
        <h1>Empyrean Threads</h1>
        <div class="menu">
          <a href="{{route('home')}}" >
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15"> <path fill="currentColor" d="M4 2L1 4.5V7h3v6h7V7h3V4.5L11 2H9.5l-2 4l-2-4H4Z"/> </svg> 
          </a>

          <a href="{{route('contactUs')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"> <path fill="currentColor" d="M12.85 12.1q-.25.25-.55.125q-.3-.125-.3-.475v-7.8q0-.425.288-.713q.287-.287.712-.287h7q.425 0 .712.287q.288.288.288.713v5q0 .425-.288.712q-.287.288-.712.288h-5Zm7.1 8.9q-3.225 0-6.287-1.438q-3.063-1.437-5.425-3.8q-2.363-2.362-3.8-5.425Q3 7.275 3 4.05q0-.45.3-.75t.75-.3H8.1q.35 0 .625.225t.325.575l.65 3.5q.05.35-.012.637q-.063.288-.288.513L7 10.9q1.05 1.8 2.625 3.375T13.1 17l2.35-2.35q.225-.225.588-.338q.362-.112.712-.062l3.45.7q.35.075.575.337q.225.263.225.613v4.05q0 .45-.3.75t-.75.3Z"/> </svg> 
          </a>

          <a href="{{route('productPage')}}" class="is-active">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"> <path fill="currentColor" d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 505c-12 12-18.8 28.3-18.8 45.3c0 35.3 28.7 64 64 64h43.4V908c0 17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.3h43.4c17 0 33.3-6.7 45.3-18.8c24.9-25 24.9-65.5-.1-90.5z"/> </svg> 
          </a>

          <a href="{{route('basket')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"> <path fill="currentColor" d="M12 2a6 6 0 0 1 6 6v1h4v2h-1.167l-.757 9.083a1 1 0 0 1-.996.917H4.92a1 1 0 0 1-.996-.917L3.166 11H2V9h4V8a6 6 0 0 1 6-6zm1 11h-2v4h2v-4zm-4 0H7v4h2v-4zm8 0h-2v4h2v-4zm-5-9a4 4 0 0 0-3.995 3.8L8 8v1h8V8a4 4 0 0 0-3.8-3.995L12 4z"/></svg>
            <span class = "info-count">{{session()->has('basket') ? count(session('basket')) : 0}}</span>
          </a>

          

          <a href="{{route('accountPage')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M10 9.25c-2.27 0-2.73-3.44-2.73-3.44C7 4.02 7.82 2 9.97 2c2.16 0 2.98 2.02 2.71 3.81c0 0-.41 3.44-2.68 3.44zm0 2.57L12.72 10c2.39 0 4.52 2.33 4.52 4.53v2.49s-3.65 1.13-7.24 1.13c-3.65 0-7.24-1.13-7.24-1.13v-2.49c0-2.25 1.94-4.48 4.47-4.48z"/></svg>
          </a>

          <a href="{{route('aboutUs')}}">About Us</a>
        </div>

        <button class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </nav>
    
    <script src="index.js"></script>

  </body>
</html>