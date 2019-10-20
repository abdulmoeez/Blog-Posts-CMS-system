   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
           
           
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/cms" style='color:white;font-size:3rem;'>BLOG<span style='font-style:italic;'>forall</span></a>
            </div>
            
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  
                  <?php 

    $query = "SELECT * FROM categories LIMIT 3";
    $select_all_categories_query = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_all_categories_query)) {
       $cat_title = $row['cat_title'];
       $cat_id = $row['cat_id'];
        
        echo "<li><a href='/cms/category/{$cat_id}'>{$cat_title}</a></li>";
    }
                    
    ?>

                    <?php if(isLoggedIn()): ?>


                        <li>
                            <a href="/cms/admin">Admin</a>
                        </li>

                        


                    <?php else: ?>


                        <li>
                            <a href="/cms/login.php">Login</a>
                        </li>


                    <?php endif; ?>




                                 
                     <li>
                        <a href="/cms/registration">Registration</a>
                    </li>

                    <?php if(isLoggedIn()): ?>

            <li class="dropdown" style='position:absolute;right:20%;'>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                                
            <?php
            if(isset($_SESSION['username'])) { 
                echo $_SESSION['username'];
            }
            ?>
                                       
            <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
 <?php endif; ?>
        
                    
    <?php 

    if(isset($_SESSION['user_role'])) {
    
        if(isset($_GET['p_id'])) {
            
          $the_post_id = $_GET['p_id'];
        
        echo "<li><a href='/cms/admin/posts.php?source=edit_post&p_id={$the_post_id}'>Edit Post</a></li>";
        
        }
    
    
    
    }
    
    ?>

           
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
