<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
  
  <!-- Header -->
   <header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container-fluid">
               <a class="navbar-brand" href="/">Star Wars Blog</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                   <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="/">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="greeting">Link</a>
                       </li>


                   </ul> -->
                  
                   <form method = "GET" action="#" class="d-flex me-lg-3" style= "margin-left: auto!important;">
                       <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search" value= "{{ request('search')}}">
                       <button class="btn btn-outline-danger" type="submit">Search</button>
                   </form>
                    <form class="d-flex">
                        <div class="text-end">
                            <button type="button" class="btn btn-outline-light me-2">Login</button>
                            <button type="button" class="btn btn-warning">Sign-up</button>
                        </div>
                    </form>
               </div>
           </div>
       </nav>
   </header>
   <!-- End Header -->