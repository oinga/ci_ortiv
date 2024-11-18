            <!-- Modal -->
            <div class="modal fade" id="msgMeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span> -->
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo form_open(base_url(), ['class' => 'subscribe_form relative']); ?>
                    <!-- Render reCAPTCHA widget -->
                    <?= $widgetTag ?>
                    <div class="form-group">
                      <?php echo form_label('Email:', 'email'); ?>
                      <?php echo form_input(['name' => 'long_email', 'id' => 'email', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter email', 'style' => 'background: transparent; font-family: "Roboto", sans-serif; font-size: 14px; color: white;']); ?>
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Message:', 'message'); ?>
                      <?php echo form_textarea(['name' => 'message', 'id' => 'message', 'required' => 'required', 'rows' => '3', 'class' => 'message_me form-control', 'placeholder' => 'Write a short message']); ?>
                    </div>

                    <div class="modal-footer">
                      <?php echo form_button(['type' => 'submit', 'class' => 'btn btn-primary', 'content' => 'Send']); ?>
                      <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>