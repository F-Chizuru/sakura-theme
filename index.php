<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="キーワードでサイトを説明">
    <meta name="description" content="どんなサイトか短い文章で説明">
    <title>サイトのタイトル</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" media="screen and ( min-width:769px )" href="<?php echo get_template_directory_uri(); ?>//css/style_pc.css">
	<link rel="stylesheet" type="text/css" media="screen and ( max-width:768px )" href="<?php echo get_template_directory_uri(); ?>//css/style_sp.css">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- drawer.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<!-- jquery & iScroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.fadethis.min.js"></script> -->

<script type="text/javascript" src="js/common.js"></script>
<link rel="stylesheet" type="text/css" media="screen and ( min-width:769px )" href="./css/style_pc.css">
<link rel="stylesheet" type="text/css" media="screen and ( max-width:768px )" href="./css/style_sp.css">

<?php wp_head(); ?>
    </head>

<body  class="drawer drawer--right">
    <header>
        <nav class="header header-menu">
            <ul class="flex">
                <li><a href="#" class="menu-items">TOP</a></li>
                <li><a href="#sec2-profile" id="sec2" class="menu-items">プロフィール</a></li>
                <li><a href="#sec3-portfolio" id="sec3" class="menu-items">制作実績</a></li>
                <li><a href="#sec4-newblog" id="sec4" class="menu-items">新着記事</a></li>
                <li><a href="#sec5-contactform" id="sec5" class="menu-items">お問い合わせ</a></li>
                <li><a href="#" id="jp-menu" class="menu-items">日本語</a></li>
                <li><a href="#" id="en-menu" class="menu-items">English</a></li>
             </ul>
        </nav>
            <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
      </button>
      <nav class="drawer-nav" role="navigation">
            <ul class="drawe-menu">
                <li><a href="#" class="menu-items">TOP</a></li>
                <li><a href="#sec2-profile" id="sec2" class="menu-items drawer-menu-item">プロフィール</a></li>
                <li><a href="#sec3-portfolio" id="sec3" class="menu-items drawer-menu-item">制作実績</a></li>
                <li><a href="#sec4-newblog" id="sec4" class="menu-items drawer-menu-item">新着記事</a></li>
                <li><a href="#sec5-contactform" id="sec5" class="menu-items drawer-menu-item">お問い合わせ</a></li>
                <li><a href="#" id="jp-menu" class="menu-items drawer-menu-item">日本語</a></li>
                <li><a href="#" id="en-menu" class="menu-items drawer-menu-item">English</a></li>
            
            </ul>
        </nav>
       
    
    </header>   
     <article>
        <section id="sec1-firstview">
            <h1><?php bloginfo('name'); ?></h1>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa a at, reiciendis aspernatur aliquam
                    dolore quae dolorum nihil saepe consequatur sunt suscipit atque maiores unde sed, quidem fugiat sit
                    est necessitatibus qui recusandae? Ut laborum aspernatur explicabo sit excepturi, nam perspiciatis!
                    Debitis alias harum aperiam quo. Neque, reiciendis similique. Voluptate!</p>
                <a href="#sec3-portfolio" class="btn">制作実績を見る</a>
                <a href="#sec5-contactform" class="btn">お仕事のご依頼</a>
            </div>
        </section>




        <section id="sec2-profile">
            <h1>プロフィール</h1>
            <button id="img-change">画像変更</button>
            <button id="size-up">画像拡大</button>
            <div class="profile-contents">
                <div class="profile-text">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium veniam laborum, sint earum similique quidem harum reiciendis tempora repellendus dignissimos sequi libero doloribus optio. Reprehenderit similique tempora hic eum eos dolorum sapiente ullam debitis? Id voluptatibus eum doloremque tempora sapiente aut dolores fugiat ea excepturi consequatur facere vero repudiandae cumque consequuntur, maxime autem omnis repellat amet veniam perferendis saepe. Voluptatibus.</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/photo_02.png" alt="プロフィール画像" >
            </div>
        </section>


        <section id="sec3-portfolio" class="slide-bottom" data-plugin-options='{"speed":300,"reverse": false}'>
            <h1>制作実績</h1>
            <div class="portfolio">
                <div class="portfolio-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/thumb_01.png" alt="あいうえお建設様">
                    <h2>あいうえお建設様</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam hic, saepe quia, officia sequi id alias deleniti nemo excepturi molestias amet nostrum aspernatur laborum quaerat molestiae architecto culpa, ratione at.</p>
                </div>
                <div class="portfolio-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/thumb_02.png" alt="かきくけこ産業">
                    <h2>かきくけこ産業様</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vitae repudiandae a sit, quo ex omnis eligendi facilis animi fugiat, minus amet alias dignissimos maxime delectus. Ex dolor dolorum ipsa!</p>
                </div>
                <div class="portfolio-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/thumb_03.png" alt="さしすせそ興業様">
                    <h2>さしすせそ興業様</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, autem consequuntur! Quae quibusdam eaque inventore, architecto at rerum. Consectetur placeat nostrum cupiditate similique corrupti quos officiis voluptatum ipsam optio veniam?</p>
                </div>
            </div>
        </section>
    



        <section id="sec4-newblog" class="slide-bottom" data-plugin-options='{"speed":300,"reverse": false}'>
            <h1>新着記事</h1>
            <div class="blog">

            <?php if(have_posts()):?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="blog-content" >
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/thumb_01.png" alt="ブログ1サムネイル"> -->
                    <?php the_post_thumbnail(); ?>
                    <div class="blog-info">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <a href="#"><i class="fas fa-globe-americas"></i><?php the_category(); ?></a><a href="#"><i class="fas fa-globe-americas"></i><?php the_date(); ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php else:?>
            <p>新着記事はまだありません</p>
            <?php endif; ?>
            </div>
        </section>




        <section id="sec5-contactform">
            <h1>お問い合わせ</h1>
            <p >制作のご依頼・ご相談はこちらから<br>お気軽にお問い合わせください。</p>

                <form action="/" method="post">
                    <dl class="contact-form">
                        <dt>お名前<span class="required">必須</span></dt>
                        <dd>
                            <input type="text" name="your-name"></dd>
                        <dt>メールアドレス<span class="required">必須</span></dt>
                        <dd>
                            <input type="email" name="your-email"></dd>
                        <dt>電話番号</dt>
                        <dd>
                            <input type="tel" name="your-tel"></dd>
                        <dt>お問い合わせ内容<span class="required">必須</span></dt>
                        <dd>
                            <textarea name="your-message"></textarea></dd>
                        </dl>
                        <p><input type="submit" value="送信する" class="submit-btn"></p>



                </form>
        </section>
    </article>



    <button id="pagetop"><a href="#"> page top</a></button>

    <footer>
        <p class="copyright">Copyright &copy; DEMO all rights reserved.</p>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>