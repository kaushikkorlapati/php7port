    <nav id="nav" class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="/"><img src='/assets/img/airesources-logo.png'/></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav">
          <!-- <li><a href="submit.php">Add Resource</a></li> -->
          <li><a href="add-resource.php">Add Resource</a></li>
          <?php if(isAdmin()) { ?><li><a href="pending.php">Pending</a></li><?php } ?>
          <li><a href="about.php">About</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li class="dropdown">
            <?php if( !isLoggedIn() ) { ?>
              <a href="#" class="hide-after-auth dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <span>Sign In</span>
                <span class="caret"></span>
              </a>
              <?php } else { ?>
              <a href="#" class="show-after-auth dropdown-toggle headerProfile" data-toggle="dropdown" role="button" aria-expanded="false">
                <img class="profileImg" src="<?= $_SESSION['user']->image ?>">
                <span class="profileName"><?= $_SESSION['user']->name ?></span>
                <span class="caret"></span>
              </a>
              <?php } ?>

            <ul class="inverse-dropdown dropdown-menu" role="menu">
              <?php if( !isLoggedIn() ) { ?>
                <li class="hide-after-auth">
                 <form>
             <label name="name-area" style= "margin: 5px 10px" for="USRname">Name:</label>
             <input type="text" id="name-area" name="name-area" style= "margin: 5px 10px" ></input>
             <button class=btn style = "background-color: #337ab7"> Submit</button>
           </form>
                </li>
              <?php } else { ?>
                <li class="show-after-auth">
                  <a href="/services/logout.php">
                    Log Off
                  </a>
                </li>
              <?php } ?>
              </ul>              
<<<<<<< HEAD
          </li>     
=======
          </li>      
>>>>>>> 9bf7901b9262e1dd1405b138271059f53d9379cc
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <?php include ($_SERVER['DOCUMENT_ROOT'].'/includes/new-item-updates.php'); ?>
          </li>
        </ul>

      </div>
    </nav>
    <div class="header-spacer"></div>
