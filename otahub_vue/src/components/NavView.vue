<template>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg  navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="../assets/logo1.png"><img class="logo" src="../assets/logo1.png"></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse"             data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto p-3">
                    <li class="nav-item active">
                        <a class="nav-link" href="#HomeView.vue">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#AboutView.vue">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#ContactView.vue">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </body>
    </html>
</template>

<script>
export default {
    name: "NavView.vue",
    props: {
    
  }
}
</script>

<style>
.logo{
    width: 90px;
    margin-left: 10px;
    margin-right: 30px;
    border-radius: 50%;
}
</style>