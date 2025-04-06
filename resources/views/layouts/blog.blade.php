<!DOCTYPE html>
<html lang="en">
<head> 

  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $confBlogTitle }}</title>
  <meta name="title" content="{{ $confBlogMetaTitle }}" />

  <link rel="icon" type="image/x-icon" href="{{ asset('storage/'.$confBlogFavicon) }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Pacifico&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{ asset('generic/css/custom.css') }}">

</head>
<body>

<header class="sticky-top">

  <div class="accordion" id="linksCloud">

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{ $confBlogName }} @yield('postTitle') @yield('tagTitle') 
        </button>
      </h2>

      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">

          <a href="{{ route('main.index') }}" class="badge text-bg-primary">Home</a>
          @foreach($tagList AS $tag)
            <a href="{{ route('main.post.tag',$tag->title) }}" class="badge text-bg-success">{{ $tag->title }}</a>
          @endforeach
          @auth()
            <a href="{{ route('dashboard') }}" class="badge text-bg-secondary">Cont Admin</a>
          @endauth


        </div>
      </div>

    </div>

  </div>

</header>

@yield('content')

</div>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-5 border-top">

</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
</body>
</html>