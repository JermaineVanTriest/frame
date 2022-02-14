<header>   
    <div class="container-fluid p-0">
        <div class="nav-container">
             <nav class="navbar">
                <h2 id="navbar-logo"> Admin </h2>
                    <div class="menu-toggle" id="mobile-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>         
                    </div>
                               
                        <ul id="nav-admin" class="nav-menu">
                            <li><a href="/home" class="nav-link nav-links-btn">Home</a></li>
                            <li><a href="/user"> User</a></li>
                            <li><a href="logout">Uitloggen</a></li>
                            <li id="fullName"><?= fullNameFromSession() ?></li>
                            <li><div class="col-md-3 text-end pe-1 mt-1">
                        </ul>
                    </div>
                </div>
            </nav>    
        </div>   
    </div>


   