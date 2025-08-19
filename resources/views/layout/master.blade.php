<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fatchCare</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
  <div class="sticky">
    <div class="app-logo">
      <img src="https://dummyimage.com/120x40/3b82f6/ffffff&text=Logo" alt="Logo">
    </div>
    <ul class="side-menu">
      <li class="slide">
        <a class="side-menu__item has-link active" href="#">
          <i class="side-menu__icon fa-solid fa-gear"></i>
          <span class="side-menu__label">Operational</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item has-link" href="#">
          <i class="side-menu__icon fa-solid fa-sack-dollar"></i>
          <span class="side-menu__label">Finance</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item has-link" href="#">
          <i class="side-menu__icon fa-solid fa-user-group"></i>
          <span class="side-menu__label">Client Portal</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="content">
    <h1>Dashboard Content</h1>
    <p>This is the main content area. The sidebar stays fixed while you scroll.</p>
  </div>
</body>
</html>
