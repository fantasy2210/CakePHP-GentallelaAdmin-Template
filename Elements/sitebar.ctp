<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>General</h3>
        <?php
        
        $left_menu = $this->requestAction(array('plugin' => 'menu_manager', 'controller' => 'menu_items', 'action' => 'renderElement'), array('menu_id' => 2));
        
        echo $this->MenuBuilder->build($left_menu[0], array('class' => 'nav side-menu', 'wrapperClass' => 'nav child_menu'), $left_menu[1]);
        
        ?>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">

                    <li>
                        <?php echo $this->Html->link('Dashboard', array('controller' => 'Pages', 'action' => 'index')) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Dashboard 2', array('controller' => 'Pages', 'action' => 'index_2')) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Dashboard 3', array('controller' => 'Pages', 'action' => 'index_3')) ?>
                    </li>


                </ul>
            </li>



        </ul>
    </div>
    <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu"></ul>
    </div>

</div>
