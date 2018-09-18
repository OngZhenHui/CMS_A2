<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pawlove
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <img src="https://i.imgur.com/C9nwTBf.jpg">
            <div class="home-one"><span style="font-size:23pt;"><b>Pawheart</b></span><br/>Dedicated to adoption, fostering and rescuing.</div><br/><br/>
            <div class="home-two"><span style="font-size:23pt;"><b>Adopt a Pet</b></span><br/></div>
            <div class="home-two"><span style="width:100%; margin:0 auto; color:slategray;">Extending your family is an important decision that you want to do right, which is why there’s no better place for making an addition to your family than at an animal shelter. Most people think animal shelters are full of animals that aren’t purebred, healthy, or they’re all old.
                    <br><br><strong>However</strong>, that is not the case at all because shelters are full of animals that are healthy, friendly, and just waiting to live in their forever, loving home – don’t rule out the mixed breeds and older pets.</span></div>
                <br><table  cellspacing="0" cellpadding="0" style="width: 100%; margin:0;" class="home-one-table">
                    <tbody>
                    <tr>
                        <td style="width:4%;"></td>
                        <td style="width:28%; border:1px solid black; border:none;  background-color:white; color:gray;"><div class="home-one-image"><img src="https://i.imgur.com/R8jyMuw.jpg" >Dogs</div></td>
                        <td style="width:4%;"></td>
                        <td style="width:28%; border:1px solid black; border:none;  background-color:white; color:gray;"><div class="home-one-image"><img src="https://i.imgur.com/Un9LiQN.jpg" >Cats</div></td>
                        <td style="width:4%;"></td>
                        <td style="width:28%; border:1px solid black; border:none;  background-color:white; color:gray;"><div class="home-one-image"><img src="https://i.imgur.com/VFl2073.jpg" >Others</div></td>
                        <td style="width:4%;"></td>
                    </tr>
                    </tbody>
                </table>
                <br/>

            <br><br>
            <div class="home-two"><span style="font-size:23pt;"><b>Foster a Pet</b></span><br/></div>
                <div class="home-two">
                <p class="custom-alignleft"><img style="border-radius:25px" src="https://i.imgur.com/LTeRNHi.jpg"></p>
                <p class="custom-alignright">Want to make the world a better place in one easy step? Take home a foster pet from a local shelter or rescue group.
                <br><br>Fostering means bringing in a cat or dog — or parrot, or baby pig, or any other homeless pet — with the goal of nurturing them for a while until they can be dispatched to a permanent home with a family who’ll love them forever.
                    <br><br>It’s a crucial part of the animal rescue world. It’s also amazing, for you and for the animals. </p>
                <p style="float:right"><button class="foster-button">Learn More</button></p>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p></p>
            <div class="home-two"><span style="font-size:23pt;"><b>Animal Rescue</b></span><br/></div>
            <div class="home-three"><span style="font-size:20pt; float:left;">Street Rescue</span><span style="float:right"><button class="foster-button">Learn More</button></span></div>
            <div class="home-three"><span style="font-size:20pt; float:left;">Pet Reliquishment</span><span style="float:right"><button class="foster-button">Learn More</button></span></div>

            <br><br>

            <div class="home-one"><span style="font-size:23pt; width:50%;"><b>Sponsor</b></span><br/>Do you want to sponsor a pet at our shelter?
                </div><br/><br/>
            <div class="home-two"><span style="width:100%; margin:0 auto; color:slategray;">Sponsoring is a great option for those who have never owned a dog, or who do not have the space at home for a dog but want all the love and affection that comes with having a pup of their own. When you choose to become a dog sponsor, it helps defray the costs of upkeeping your sponsored dog at our kennel, and their day-to-day needs are taken care of by our volunteers and staff. This way sponsors are free to visit and play with a pet they have come to know and love without having to worry about the many responsibilities that living with a dog entails.</span>
            <br/><br/><button class="foster-button">Learn More</button></div>
            <br><br>

            <div class="home-one"><span style="font-size:23pt;"><b>Contact</b></span><br/>Drop us a form!
                </div><br/><br/>
            <div class="home-four">
            <div class="formwrap">
                <h2>Drop a form! Our support team will get back to you as as soon as possible.</h2>
                <label>First Name</label>
                <input type="text" placeholder="Your name..">

                <label>Email</label>
                <input type="email" placeholder="Your email..">

                <label>Last Name</label>
                <input type="text" placeholder="Your last name..">

                <label>Comments</label>
                <form>
                    <textarea></textarea>
                </form>

                <input type="submit" value="Submit">
                </form>
            </div>

            <div class="contact">
                <div class="contactcontent">
                    <h2>Contact Info</h2>
                    <div class="part">
                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;Phone</h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <u>07 4771 1234</u>
                        <br/><br/>
                    </div>
                    <br/>
                    <div class="part">
                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;Fax</h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <u>07-4771 1235</u>
                        <br/><br/>
                    </div>
                    <br/>
                    <div class="part">
                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;Address</h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <u>4 Stanton Avenue, Hulkstwon</u>
                        <br/><br/>
                    </div>
                    <br/>
                    <div class="part">
                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;Email</h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <u>pawheart@gmail.com</u>
                        <br/><br/>
                    </div>
                </div>
            </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
