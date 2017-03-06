<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LZS3
 */

?>
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="partners">
			<ul>
				<li>
					<a href="">
						<img src="http://linuxzasve.com/images/logo_hulk.png" alt="HULK">
					</a>
				</li>
				<li>
					<a href="">
						<img src="http://linuxzasve.com/images/logo_openhr.png" alt="HrOpen">
					</a>
				</li>
				<li>
					<a href="">
						<img src="http://linuxzasve.com/images/logo-1klik.png" alt="1klik">
					</a>
				</li>
				<li>
					<a href="">
						<img src="http://linuxzasve.com/images/logo_wiki.png" alt="HOW">
					</a>
				</li>
			</ul>
		</div>

		<div class="container">
			<div class="site-info">
				<div class="info-about-us">
					<img src="http://www.linuxzasve.com/forum/styles/linuxzasve/theme/lzs.png" alt="">
					<div>
						<h3>O NAMA</h3>
						<p>
							linuxzasve.com ili skraćeno LZS je online publikacija posvećena promociji, informiranju i edukaciji o operacijskom sustavu GNU/Linux te pripadajućim aplikacijama.
						</p>
					</div>
				</div>
				<div class="social">
					<h3>PRATITE NAS</h3>
					<ul>
						<li>
							<a href="">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa fa-rss"></i>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa fa-envelope-o"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="recomendations">
					<h3>SVRATITE NA</h3>
					<ul class="">
						<li><a href="http://www.programi.org/" title="Besplatni programi na internetu" target="_blank">Besplatni programi</a></li>
						<li><a href="http://otvorenikod.nsk.hr/" title="Centar za otvoreni kod Nacionalne Sveučilišne knjižnice" target="_blank">Centar za otvoreni kod NSK</a></li>
						<li><a href="http://download.ba/" title="Download portal – novi softver na dnevnoj bazi!" target="_blank">Download.ba</a></li>
						<li><a href="http://www.gadgeterija.net/" title="Dnevni blog o gadgetima" target="_blank">Gadgeterija</a></li>
						<li><a href="http://www.it-vijesti.com/" title="IT tehnologije –  budite informirani" target="_blank">IT vijesti</a></li>
						<li><a href="https://lugons.org/" title="Grupa korisnika GNU/LInux operacijskog sustava u Novom Sadu." target="_blank">LUGoNS</a></li>
						<li><a href="http://www.mackorisnik.com/" title="MacKorisnik je blog-magazin namjenjen postojećim i budućim korisnicima Mac računala i svega što je s njima povezano." target="_blank">MacKorisnik</a></li>
						<li><a href="http://mob.hr/" title="Mob.hr na dnevnoj bazi donosi vijesti iz područja telekomunikacija  s fokusom na mobilnu platformu te smartphone uređaje." target="_blank">Mob.hr</a></li>
						<li><a href="https://www.opensource-osijek.org/wordpress/" title="Centar za razvoj programa i sustava baziranih na principima otvorenog kôda">Open Source Osijek</a></li>
						<li><a href="http://www.racunalo.com/" title="Portal o ICT tehnologiji" target="_blank">Racunalo.com</a></li>
						<li><a href="http://www.skidajmo.com/" title="Skidajmo.com je servis koji će vam na jednostavan način ponuditi download najnovijih inačica raznog softvera, igara i ostalog sadržaja." target="_blank">Skidajmo!</a></li>
						<li><a href="http://www.ubuntu-hr.org/" title="Udruga Ubuntu korisnika u hrvatskoj" target="_blank">Ubuntu Hrvatska</a></li>
						<li><a href="http://www.vidi-vishe.com/" title="Vidi Više – Vijesti vijesti iz svijeta tehnologije" target="_blank">Vidi Više</a></li>
					</ul>
				</div>
				<span class="clear-both"></span>
				
				<div class="cc">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lzs3' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lzs3' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'lzs3' ), 'lzs3', '<a href="http://linuxzasve.com" rel="designer">Linux za sve</a>' ); ?>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
