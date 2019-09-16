<?php
$email_address_to_send_form_to = get_field('email_address_to_send_form_to');
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<?php if(!$_REQUEST): // check if submitted?>
  <span class='d-block pad-top-40'></span>
  <form name="questionnaire_form" class="questionnaire-form" id="questionnaire_block" method="post">
    <?php if ( have_rows( 'steps' ) ) : ?>

      <?php
      $total_questions = get_field('steps');
      $total_questions = count($total_questions[0]['add_a_step_of_questions']['questions']);
      $i = 0;
      $b = 0;
      ?>


      <section class='main-form'>


        <?php while ( have_rows( 'steps' ) ) : the_row(); ?>


          <section class=' numbers-blocks '>
            <div class='inner'>
              <h4 class='no-margin pad-bottom-30'><b><?php the_sub_field( 'section_title' ); ?></b></h4>



              <div class='numbers-wrapper'>
                <?php for ($x = 0; $x <= $total_questions; $x++):?>
                  <?php if($x != 0):?>
                    <div class='number-block <?php echo $x == 1 ? "active" : ""; ?> number-block-<?php echo $x; ?>'>
                      <span class='number' data-number='<?php echo $x;?>'><?php echo $x; ?></span>
                      <?php if($x != $total_questions):?>
                        <span class='line'><span class='inner-line'></span></span>
                      <?php endif;?>
                    </div>
                  <?php endif; ?>
                <?php endfor;?>
              </div>
            </div>
          </section>


          <?php if ( have_rows( 'add_a_step_of_questions' ) ) : ?>
            <?php while ( have_rows( 'add_a_step_of_questions' ) ) : the_row(); ?>
              <?php if ( have_rows( 'questions' ) ): ?>
                  <input class="ohnohoney" autocomplete="off" type="text" id="first_name1" name="first_name1" placeholder="Your name here">
                <?php while ( have_rows( 'questions' ) ) : the_row(); ?>
                  <?php $i++; ?>
                  <div class='step block-step-<?php echo $i; ?> <?php echo $i == 1 ? "active" : "not-active"; ?>' >

                    <?php if ( get_row_layout() == 'question_with_textarea' ) : ?>
                      <?php
                      $question = get_sub_field( 'question' );
                      $form_name = preg_replace('#[^a-zA-Z0-9 ]#', '', $question);
                      $form_name = str_replace(' ', '_', $form_name);
                      if(wp_is_mobile()){
                        $placeholder = 'Your answer';
                      } else {
                        $placeholder = $question;
                      }
                      ?>
                      <div class='question-block textarea-question' >
                        <h4 class='d-block d-md-none'><?php echo $question; ?></h4>
                        <textarea name="<?php echo $form_name; ?>" rows="3" placeholder='<?php echo $placeholder; ?>' required></textarea>
                        <span class='error'>Please fill in the <?php echo $placeholder; ?> before clicking next</span>
                      </div>


                    <?php elseif ( get_row_layout() == 'question_with_radio_button' ) : ?>
                      <?php
                      $question = get_sub_field( 'question' );
                      $form_name = preg_replace('#[^a-zA-Z0-9 ]#', '', $question);
                      $form_name = str_replace(' ', '_', $form_name);
                      ?>
                      <div class='question-block radio-question'>

                        <h4><?php echo $question; ?></h4>

                        <div class='radio-question-wrapper'>
                          <?php if ( have_rows( 'radio_buttons' ) ) : ?>
                            <?php while ( have_rows( 'radio_buttons' ) ) : the_row(); ?>
                              <?php
                              $radio_label =  get_sub_field( 'radio_button' );
                              $radio_name = preg_replace('#[^a-zA-Z0-9 ]#', '', $radio_label);
                              $radio_label_name = str_replace(' ', '_', $radio_name);
                              ?>
                              <div class='radio-button-wrapper'>
                                <input type="radio" name="<?php echo $form_name;?>" value="<?php echo $radio_name; ?>" id="<?php echo $radio_label_name; ?>"> <label for="<?php echo $radio_label_name; ?>"> <?php echo $radio_label; ?> </label>
                                <span class="radio-checkmark"></span>
                              </div>
                            <?php endwhile; ?>
                          <?php endif; ?>
                        </div>

                      </div>

                    <?php elseif ( get_row_layout() == 'question_with_checklist' ) : ?>
                      <?php
                      $question = get_sub_field( 'question' );
                      $form_name = preg_replace('#[^a-zA-Z0-9 ]#', '', $question);
                      $form_name = str_replace(' ', '_', $form_name);
                      ?>
                      <div class='question-block checklist-question' >
                        <h4><?php echo $question; ?></h4>
                        <div class='checklist-question-wrapper'>
                          <?php if ( have_rows( 'checklist_list' ) ) : ?>

                            <?php while ( have_rows( 'checklist_list' ) ) : the_row(); ?>
                              <?php
                              $checklist_item = get_sub_field( 'checklist_item' );
                              $checklist_name = preg_replace('#[^a-zA-Z0-9 ]#', '', $checklist_item);
                              $checklist_label_name = str_replace(' ', '_', $checklist_name);
                              ?>
                              <div class='checklist-button'>
                                <input type="checkbox" name="<?php echo $form_name; ?>[]" value="<?php echo $checklist_name; ?>" id="<?php echo $checklist_label_name; ?>"> <label for="<?php echo $checklist_label_name; ?>"> <?php echo $checklist_item; ?> </label>
                                <span class="checklist-checkmark"></span>
                              </div>

                            <?php endwhile; ?>
                          <?php endif; ?>
                        </div>
                      </div>

                    <?php endif; ?>



                    <!-- end of questions -->

                    <div class='form-button-wrapper'>
                      <?php if($i == $total_questions):?>

                        <span class='prev-button' attr-prev='<?php echo $i;?>'>Previous</span>
                        <span class='growing'></span>
                        <div class='submit-wrapper'>
                          <input type="submit" value="Submit">
                        </div>


                      <?php else:?>
                        <?php if($i != 1):?>
                          <span class='prev-button' attr-prev='<?php echo $i;?>'>Previous</span>
                          <span class='growing'></span>
                        <?php endif; ?>
                        <span class='growing'></span>
                        <span class='next-button' attr-next='<?php echo $i;?>'>Next</span>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

            <?php endwhile; ?>

          <?php endif; ?>


        <?php endwhile; ?>
      </section>
    <?php endif; ?>
  </form>
<?php else:?>
  <h2 class='pad-top-30 green-text text-center'>Thank you for your feedback</h2>
<?php endif; // end of form ?>

<?php if($_REQUEST):?>
  <script>
  (function($){
    $("#questionnaire_block").addClass('hide-now');
    var positionform = $('#contact').position();
    //console.log(positionform);
    $(window).scrollTop(positionform.top);
  })(jQuery);
  </script>
  <?php
  //custom email
  $message = '';
  $message .= '<h2 style="margin-top: 50px;">Gareths site submitted in the footer from ' . $actual_link . '</h2>';
  //debug($_REQUEST);
  foreach ($_REQUEST as $question => $answer) {
    if(is_array ($answer)){
      $finalAnswer = implode("<br /> ",$answer);
      $message .= '<p><b>' . str_replace("_"," ",$question) . '</b><br />' . $finalAnswer . '</p>';
    } else {
      $message .= '<p><b>' . str_replace("_"," ",$question) . '</b><br />' . $answer . '</p>';

    };


  }
  //echo '<div class="container">' .  $message .'</div>';

  //  $to = $email_address_to_send_form_to;

  $subject = 'Gareths site submitted from ' . $actual_link;

  $body = $message;
  $headers = array('Content-Type: text/html; charset=UTF-8');

  wp_mail( $email_address_to_send_form_to, $subject, $body, $headers );


  ?>
<?php endif; ?>
