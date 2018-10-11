<div class="single_new_all single_new_all_top">
                    <div class="single_new_all_header">
                        <h5>CHECK OUT ALL NEWS</h5>
                    </div>
                    <div id="exit_menu" title="Close menu" onclick="allNews();">
                        <img src="menu/icons/cancel.png">
                    </div>
                </div>
                <?php
                $newsQuery = $db->DESCquery("news");
                while($news = $newsQuery -> fetch()){
                    ?>
                    <a href="new.php?id=<?php echo $news['id']; ?>">
                        <div class="single_new_all">
                            <div class="single_new_all_header">
                                <h5><?php echo $news['title']; ?></h5>


                            </div>
                            <div class="single_new_all_text">
                                <p><?php echo $news['details']; ?></p>
                            </div>
                        </div>
                    </a>
                    <?php
                }

                ?>
                <!--
                <div class="single_new_all">
                    <div class="single_new_all_header">
                        <h5>THIS IS FIRST POST</h5>
                    </div>
                    <div class="single_new_all_text">
                        <p>This is short description of news. You can see more at link below !</p>
                    </div>
                </div> -->
