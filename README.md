## Chapter 05 – Layout View

### 5.1. Buat file baru app.blade.php.
Buat file baru app.blade.php di dalam direktori resources/views/layouts/ dan isi dengan kode berikut.
```blade
<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" /> 
<title>@yield('title', 'Online Store')</title>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
<div class="container">
<a class="navbar-brand" href="#">Online Store</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav ms-auto">
<a class="nav-link active" href="#">Home</a>
<a class="nav-link active" href="#">About</a>
</div>
</div>
</div>
</nav>

<header class="masthead bg-primary text-white text-center py-4">

<div class="container d-flex align-items-center flex-column">
<h2>@yield('subtitle', 'A Laravel Online Store')</h2>
</div>
</header>
<!-- header -->

<div class="container my-4">

@yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> </script>
</body>
</html>

```
### 5.2. Hapus semua kode yang ada di welcome.blade.php.
Hapus semua kode yang ada di resources/views/welcome.blade.php dan isi dengan kode berikut.
```blade
@extends('layouts.app')

@section('title', 'Home Page - Online Store')
@section('content')
<div class="text-center">
Welcome to the application
</div>
@endsection

```
### 5.3. Buat folder css di bawah direktori public.
Buat folder css di bawah direktori public/. Kemudian, di public/css , buat aplikasi file baru .css dan isi dengan yang berikut ini.
```css
.bg-secondary {

background-color: #2c3e50 !important;
}

.copyright {

background-color: #1a252f;
}

.bg-primary {

background-color: #1abc9c !important;
}

nav{

font-weight: 700;
}

.img-card{

height: 18vw;
object-fit: cover;
}
```

### 5.6. Buat perubahan pada app.blade.php.
Terakhir, di resources/views/layouts/app.blade.php , buat perubahan berikut dengan huruf tebal untuk menyertakan file CSS dibawah ini.
```html
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
```
dan juga menyertakkan kode bagian footer dibawah ini.
```html
<!-- footer -->
<div class="copyright py-4 text-center text-white">
<div class="container">
<small>
Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
href="https://twitter.com/danielgarax">
Daniel Correa
</a> - <b>Paola Vallejo</b>
</small>
</div>
</div>
<!-- footer -->
```
hingga app.blade.php berubah menjadi kode seperti dibawah ini.
```html
<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" /> 
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
<title>@yield('title', 'Online Store')</title>

</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
<div class="container">
<a class="navbar-brand" href="#">Online Store</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav ms-auto">
<a class="nav-link active" href="/home">Home</a>
<a class="nav-link active" href="/about">About</a>
</div>
</div>
</div>
</nav>

<header class="masthead bg-primary text-white text-center py-4">

<div class="container d-flex align-items-center flex-column">
<h2>@yield('subtitle', 'A Laravel Online Store')</h2>
</div>
</header>
<!-- header -->

<div class="container my-4">

@yield('content')
</div>

<!-- footer -->
<div class="copyright py-4 text-center text-white">
<div class="container">
<small>
Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
href="https://twitter.com/danielgarax">
Daniel Correa
</a> - <b>Paola Vallejo</b>
</small>
</div>
</div>
<!-- footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> </script>
</body>
</html>

```
## Chapter 06 – Index and About Pages
### 6.1. Membuat subfolder home.
Di resources/views/home , buat file baru index.blade.php dan isi dengan kode berikut.
```blade
@extends('layouts.app')

@section('title', $viewData["title"])
@section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/game.png') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/safe.png') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">

<img src="{{ asset('/img/submarine.png') }}" class="img-fluid rounded"> </div>
</div>
@endsection
```

### 6.2. Membuat subfolder img.
di folder public, buat subfolder img
### 6.3. Membuat file baru about.blade.php
Di resources/views/home , buat file baru about.blade.php dan isi dengan kode berikut.
```blade
@extends('layouts.app')

@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-4 ms-auto">
<p class="lead">{{ $description }}</p>
</div>
<div class="col-lg-4 me-auto">
<p class="lead">{{ $author }}</p>
</div>
</div>
</div>
@endsection

```
### 6.4. Membuat perubahan pada web.php.
Di routes/web.php , buat perubahan berikut.
```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
    });
    Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
    
```
### 6.5. Membuat file baru HomeController.php.
Di app/Http/Controllers , buat file baru HomeController.php dan isi dengan kode berikut.
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
    public function index()
    {
    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
    }
    
    public function about()
    
    {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Your Name";
    return view('home.about')->with("title", $data1)
    ->with("subtitle", $data2)
    ->with("description", $description)
    ->with("author", $author);
    
    }
    

}
```

## Chapter 07 – Refactoring Index and About Pages
### 7.1. Faktor Ulang route.
Di routes/web.php , hapus rute sebelumnya (“/”), dan ganti dengan rute berikut dengan cara mengubah kode dibawah ini
```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
    });

Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
```
menjadi 
```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
```
### 7.2. Faktor Ulang Controller.
Di app/Http/Controllers/HomeController.php , buat perubahan berikut dari kode dibawah ini menjadi .
```php
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Your Name";
    return view('home.about')->with("title", $data1)
    ->with("subtitle", $data2)
    ->with("description", $description)
    ->with("author", $author);
    }
}
```
menjadi 
```php
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
$viewData = [];
$viewData["title"] = "About us - Online Store";
$viewData["subtitle"] = "About us";
$viewData["description"] = "This is an about page ...";
$viewData["author"] = "Developed by: Your Name";
return view('home.about')->with("viewData", $viewData);

    }
}
```
### 7.3. Faktor Ulang Views.
Di resources/views/home/about.blade.php , buat perubahan berikut dari kode berikut.
```blade
@extends('layouts.app')

@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-4 ms-auto">
<p class="lead">{{ $description }}</p>
</div>
<div class="col-lg-4 me-auto">
<p class="lead">{{ $author }}</p>
</div>
</div>
</div>
@endsection
```
menjadi 
```blade
@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-4 ms-auto">
<p class="lead">{{ $viewData["description"] }}</p>
</div>
<div class="col-lg-4 me-auto">
<p class="lead">{{ $viewData["author"] }}</p>
</div>
</div>
</div>
@endsection
```
### 7.4. Memperbarui tautan di Header.
Di resources/views/layouts/app.blade.php , buat perubahan berikut dari kode berikut.
```blade
<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" /> 
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
<title>@yield('title', 'Online Store')</title>

</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
<div class="container">
<a class="navbar-brand" href="#">Online Store</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav ms-auto">
<a class="nav-link active" href="/">Home</a>
<a class="nav-link active" href="/about">About</a>
</div>
</div>
</div>
</nav>

<header class="masthead bg-primary text-white text-center py-4">

<div class="container d-flex align-items-center flex-column">
<h2>@yield('subtitle', 'A Laravel Online Store')</h2>
</div>
</header>
<!-- header -->

<div class="container my-4">

@yield('content')
</div>

<!-- footer -->
<div class="copyright py-4 text-center text-white">
<div class="container">
<small>
Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
href="https://twitter.com/danielgarax">
Daniel Correa
</a> - <b>Paola Vallejo</b>
</small>
</div>
</div>
<!-- footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> </script>
</body>
</html>
```
menjadi
```blade
<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" /> 
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
<title>@yield('title', 'Online Store')</title>

</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
<div class="container">
<a class="navbar-brand" href="{{ route('home.index') }}">Online Store</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav ms-auto">
<a class="nav-link active" href="{{ route('home.index') }}">Home</a>
<a class="nav-link active" href="{{ route('home.about') }}">About</a>
</div>
</div>
</div>
</nav>

<header class="masthead bg-primary text-white text-center py-4">

<div class="container d-flex align-items-center flex-column">
<h2>@yield('subtitle', 'A Laravel Online Store')</h2>
</div>
</header>
<!-- header -->

<div class="container my-4">

@yield('content')
</div>

<!-- footer -->
<div class="copyright py-4 text-center text-white">
<div class="container">
<small>
Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
href="https://twitter.com/danielgarax">
Daniel Correa
</a> - <b>Paola Vallejo</b>
</small>
</div>
</div>
<!-- footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> </script>
</body>
</html>
```
