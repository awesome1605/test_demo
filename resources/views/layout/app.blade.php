<!DOCTYPE html>
<html lang="en">
<head>
   <title>My Page</title>
   <style>
     body{
      background color: rgb(255, 255, 255);
           }
        ul{
          padding: 0px;
          margin: 0px;
          display: flex;
          justify-content: space-between;
          background: #cecece;
        } 
        a{
          text-decoration: none;
          color: inherit;
        }
        li:hover{
         background: red;
         color: #fff;
        }
       li{
          display: inline;
          padding: 20px 30px;
          color: #4f4f4f;
          font-size: 20px;
          cursor: pointer;
       }
       header{
        margin: 0px auto;
        width: 50%;
       }
       footer{
            margin: 0px auto;
            width: 50%;
       }
       section{
         margin: 50px 0px;
         display: flex;
         justify-content: center;

       }
     </style>

</head>

<body>
 <header>
      <nav>
    <ul>
        <li><a href="{{ url('/') }}">HOME</a></li>
        <li><a href="{{ route('about') }}">ABOUT US</a></li>
        <li><a href="{{ route('contact') }}">CONTACT US</a></li>
    </ul>
      </nav>
</header>

      <section>
            @yield('content')
      </section>

<footer>
  <ul>
         <li><a href="{{ url('/') }}">HOME</a></li>
        <li><a href="{{ route('about') }}">ABOUT US</a></li>
        <li><a href="{{ route('contact') }}">CONTACT US</a></li>
   </ul>
 </footer>
</body>
</html>