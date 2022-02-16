<header>   
   <div class="container-fluid p-0">
      <div class="nav-container">
         <nav class="navbar">
            
            <!-- Image and text -->
<nav class="navbar">
  <a class="navbar-brand" href="/home">
    <img src="/public/images/rooklogo.jpeg" class="d-inline-block align-top" alt="">
 </a>
  <h2 id="navbar-logo"> {{ appName }} </h2>
</nav>

               <div class="menu-toggle" id="mobile-menu">
                  <span class="bar"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>         
               </div>
                               
                     <ul class="nav-menu">
                        <li><a href="/home" class="nav-link nav-links-btn">Home</a></li>
                        <li><a href="/products" class="nav-link nav-links-btn">Sigaren</a></li>
                        <li><a href="/?page=karaf" class="nav-link nav-links-btn">Karaf</a></li>
                        <li><a href="/?page=accessory" class="nav-link nav-links-btn">Accessories</a></li>
                        <li><a href="/login" class="nav-link nav-links-btn">Inloggen</a></li>
                        <li><div class="col-md-3 text-end pe-1 mt-1">
                        <li><shopping-cart ref="shoppingCart"></shopping-cart></li>           
                     </ul>
                  </div>
               </div>
         </nav>    
      </div>   
   </div>
</header>

 <!-- <header class="header">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 text-center mt-5">
            <h1>The Fruity Bowl</h1>
         </div>

         <div class="col-md-3 text-end pe-5 mt-5">
            <shopping-cart ref="shoppingCart"></shopping-cart>
         </div>

         <div class="col-md-3 mt-4 text-right">
            <?= fullNameFromSession() ?>
         </div>
      </div>
   </div>
</header>  -->

<!-- <header class="header">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 text-center mt-5">
            <h1>The Fruity Bowl</h1>
         </div>

         <div class="col-md-6 text-end pe-5 mt-5">
            <?= fullNameFromSession() ?>
            <shopping-cart ref="shoppingCart"></shopping-cart>
         </div>
      </div>
   </div>
</header> -->