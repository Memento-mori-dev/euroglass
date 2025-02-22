<? 
/* 
    Template Name: contacts
*/

 get_header();
?>

    <?=get_template_part('/php-content/main/map');?>

    <div class="block">
        <div class="call">
            <div class="call__title">
                <p class="section-title">Остались вопросы?</p>
            </div>

            <div class="call__text">
                Lorem ipsum dolor sit amet consectetur. Amet et sed aenean maecenas tortor donec arcu lacus sit. Consectetur suspendisse morbi pulvinar.
            </div>

            <?=do_shortcode('[contact-form-7 id="09aa78f" title="contacts"]');?>
        </div>
    </div>

<? get_footer(); ?>