
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Somethin...</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link
      rel="shortcut icon"
      href="https://cdn-icons-png.flaticon.com/128/630/630426.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="istyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    
  </head>
  <body>
    <main>
      <header class="heading">
        <nav class="navbar">
          <x-nav-link> <img
            src="https://cdn-icons-png.flaticon.com/128/3662/3662817.png"
            alt="Kimify"
            style="width: 42px; height: 40px"
            class="log"
        /></x-nav-link>
          <!-- links & logos -->
          <x-nav-link> <i class="fas fa-home"></i> Home</x-nav-link>
          <x-nav-link> <i class="fas fa-info-circle"></i> About</x-nav-link>
          <x-nav-link> <i class="fas fa-tools"></i> Tools</x-nav-link>
          <x-nav-link> <i class="fas fa-handshake"></i>  Services</x-nav-link>
          <x-nav-link> <i class="fas fa-code"></i> Hacks</x-nav-link>
          <x-nav-link> <i class="fas fa-user-plus"></i> Login/Register</x-nav-link>
        </nav>
      </header>
      <br>
     {{ $slot}}
      
    </main>
    <footer>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At ex exercitationem, expedita, cum id dolorum similique rem necessitatibus et nobis corporis repellendus quos itaque, minus odit iusto illum recusandae autem? Deserunt consectetur pariatur ullam sit natus aperiam eum iusto nostrum recusandae quo est voluptates cum quos commodi quasi nemo, voluptas delectus perspiciatis itaque dolores mollitia similique consequuntur ducimus. Hic, ducimus. Optio sunt placeat atque natus, voluptate tenetur, a harum commodi rem voluptatem provident nostrum sapiente repellat. Soluta, laudantium!  
      &copy; 2024 Surf connect. All rights reserved.</p>
    </footer>
  </body>
</html>
