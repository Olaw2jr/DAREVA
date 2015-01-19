<?php
/**
 * The template for displaying pages
 *
 *Template Name: Contact
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

get_header(); ?>

	<section class="page-head">
  <div class="row">
    <div class="twelve columns">
      <h2>&#8211;Contact <span>Us.</span></h2>
      <h4 class="subheader">Let's talk! Shall we?.</h4>
    </div>
  </div>
</section><br>

  <div class="contact-container">
      <div class="row">
        <div class="four columns">
          <div class="contact-information hide-for-small">
            <div class="inner-contact-information">
              <h3><span>DAR</span>EVA</h3>
              <address>
                P.O. Box 54034,<br>
                DAR ES SALAAM TANZANIA<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890<br>
                Email: dareva@yahoo.com
              </address>
            </div>
              <span class="contact-icon tada">
                <i class="gen-enclosed foundicon-mail"></i>
              </span>
          </div>
        </div>
        <div class="five columns offset-by-three">
          <div class="contact-form">
            <form>
            <label for="Name">Name</label>
              <input type="text" id="Name" placeholder="Name" required class="mobile-four"/>
            <div class="row">
              <div class="twelve columns mobile-four">
                <label for="Email">Email</label>
              <input type="email" class="twelve mobile-four" id="Email" placeholder="Email" required  />
              </div>
              <div class="twelve columns mobile-four">
                <textarea placeholder="Message" cols="30" rows="3"></textarea>
              </div>
              <div class="twelve columns mobile-four">
                  <button type="submit" class="btn btn-block btn-danger">Contac us Now!</button>
                </div>
            </div>
          </form>

          </div>
        </div>
      </div>
  </div>
 <br><br><br>


<?php get_footer(); ?>
