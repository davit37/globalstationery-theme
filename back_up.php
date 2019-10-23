   <!-- <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php 
                        $menus= wp_get_menu_array('Menu By Categories');

                        foreach($menus as $menu){

                            $menu_title=$menu['title'];
                            $menu_url = $menu['url'];
                            $menu_id= $menu['ID'];
                            echo '<li class="nav-item dropdown">';

                                echo "<a class='nav-link' href='#' id='navbarDropdownMenuLink$menu_id' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$menu_title</a>";

                                echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown$menu_id'>";
                                
                                    foreach($menu['children'] as $child){
                                        $child_title =$child['title'];
                                        $child_url = $child['url'];
                                        echo "<a class='dropdown-item' href='$child_url'>$child_title</a>";
                                    }
                                echo "</div>";                    }

                ?> -->
                </ul> -->