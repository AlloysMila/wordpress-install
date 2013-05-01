    <?php get_header(); ?>
    <div id="my-body">
        <div id="top"><span class="xplode">STARTING THIS EASTER</span><br>Make all the wealth you want to make<span class="splitter">........</span>And do it like a pro<br>NO EXCUSE</div>
        <div id="banner"><img alt="wealth 2013" src="<?php bloginfo("url"); echo '/wp-content/themes/gwlp/images/banner.png';?>" /></div>
        <div id="content">
            <p><span class="xplode">OK</span><br>So at the beggining of this year, you made several resolutions...as one of them to make several millions within these twelve months<br>well here we are, three months into 2013, How much have you moved in terms of wealth creation, are you richer, poorer or still just there?</p>
            <p><span class="orange-highlight">If your answer is on the negative then there is something you are doing wrong</span></p>
            <p>and we are here to help</p>
            <p>The good news about the questions you ask yurself is that they have been asked before, and they have answered before as well</p>
            <p>In this PACKAGE we give you all the answers you require, to enter the league of the richest men and women of this planet</p>
            <p class="grey-back">The contents of these ebook have made several thousand millionares and a significant share of billionares for almost 100 years</p>
            <p>since the early 1900s when the first of these texts were written, people who have come across them, read them and followed the advice in here, have all proceeded to make tonnes of money through some of the worlds most successful enterprises</p>
            <p>Very noticable among them is Warren Buffet, of BerckShire Hathaway, one of the world's most successful investors...he has more than once attributed his success to advice he got FROM ONE OF THE TEXTS INSIDE THIS PACKAGE<br>Microsoft's Bill Gates is also romoured to have been acting under the advice of one of these books when he dropped out of Havard to found the World's largest software manufacturing company </p>
            <p>The list of success stories is endless, but not so long that you cannot append yourself to it!</p>
            <p>So what exactly is this of which we talk do fondly</p><p class="grey-back">This is a package of 12 ebooks, given to you at an incredible discount<br>$9.99 only</p>
            <p>YES! 12 ebooks for only USD 9.99</p>
            <p>and they come bundle in three diffrent formats</p>
            <div class="inlist"><ul>
                <li>PDF<span class="format-description"><br>To read on your Mac or PC</span></li>
                <li>EPUB<span class="format-description"><br>To read on your tablet, or favourite ebook reader</span></li>
                <li>MP3<span class="format-description"><br>Dislike Reading? Listen then!</span></li>
            </ul><div style="clear: both"></div></div>
            <p>All these in one order of only $9.99! how dicounted can a discount be!?</p>
            <p>HOWEVER! This offer ends in <span id="timer"></span><br>...its here only for easter</p>
            <p>and the 12 ebooks inside here are...</p>
            <?php
                if(is_home()){
                    query_posts('&cat=3');
                }
            ?>
            <!-- books loop -->
            <?php if(have_posts()): while(have_posts()): the_post() ?>
            <div id="list-of-books">
                <div class="book"><div class="cover"></div><p class="title"><?php the_title(); ?></p><? the_content() ?></div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
                <p class="error">oops! and error occurred while pulling the list of books</p>
            <?php endif; ?>
            <p>The only way to join the ranks of the world's richest people is to learn: 1. To think like them, 2. To do business like them and most importantly 3. To associate with them</p>
            <div id="buy">So! Jump in <span class="button"><a href="#">Buy Now (via paypal)</a></span></div>
        </div>
    </div>
    <?php get_footer(); ?>