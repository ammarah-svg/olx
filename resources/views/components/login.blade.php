<style>
    .overlay{
        width: 100%;
        height: 100vh;
        background: rgba(52, 53, 53, 0.6);
        z-index:222;
        position: fixed;
        top: 0%;
        left: 0%;
        display: hidden !important;
    }
    .underlay{
        margin-top: 12rem;
        margin-left: 35%;
    }
</style>


<div class="overlay">

<div class="underlay w-25 py-4 bg-white text-dark">

<img width="60px" class="m-auto  d-block py-5" src="https://www.olx.com.pk/assets/brandIconLogin_noinline.93e8a1a9cf50902ba5250814f57810ff.svg" alt="">
<h4 class="text-center w-100"><strong>Login into your OLX account</strong></h4>
<form action="/login" method="POST">
<input class="form-control w-75 mx-auto my-2 " type="text" placeholder="Email" name="email">
<input class="form-control w-75 mx-auto my-2 "type="password" name="password" placeholder="password" >

<button class="btn btn-dark text-white p-2 my-5 w-50 m-auto d-block" type="submit">Login</button>
</form>
</div>


</div>