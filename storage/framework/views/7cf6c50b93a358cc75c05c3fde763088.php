

<?php $__env->startSection('content'); ?>
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                    <li><a href="#" class="active">Donate Now</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         Donate Now Start          =-->
    <!--=====================================-->
    <section class="donate-now sec-mar sec-pad mb-none-on-mobile">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="donate-box">
                        <h4 class="mb-3">Direct Bank Transfer</h4>
                        <p><b>Account Number:</b> 12345678912</p>
                        <p><b>Bank Name:</b> Example Bank</p>
                        <p><b>Branch Code:</b> 3560</p>
                        <br>
                        <hr>
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p><?php echo e(Session::get('success')); ?></p>
                            </div>
                        <?php endif; ?>
                        <form role="form" action="<?php echo e(route('payment.store')); ?>" method="post"
                              class="require-validation" data-cc-on-file="false"
                              data-stripe-publishable-key="pk_test_51NfGDNFZEUu3Xhauo2SgvLqUlS8VDWvfhqybGQq2SPiW8eCU3S1MOerdriFojxSI361yvyrf5G8ycXcC78BcMml000W0K9fcw4" id="payment-form">
                            <?php echo csrf_field(); ?>
                            <h4 class="mb-3">Choose Card</h4>
                            <div class="credit-card-box">
                                <input type="text" class="card-field mb-0 card-number" name="card"
                                       placeholder="0000 0000 0000 0000">
                                <input type="number" class="card-field mb-0 card-amount" name="amount"
                                       placeholder="Enter Amount in Dollars">
                                <div class="row">
                                    <div class="col-4 pe-0">
                                        <input type="text" name="expiry_month" class="expiry-field card-expiry-month"
                                               placeholder="Expiry month">
                                    </div>
                                    <div class="col-4 pe-0">
                                        <input type="text" name="expiry_year" class="expiry-field card-expiry-year"
                                               placeholder="Expiry Year">
                                    </div>
                                    <div class="col-4 ps-0">
                                        <input type="text" name="cvc" class="card-cvc" placeholder="Security Code">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="contact-form-btn">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jscript'); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
        $(function() {
    
    
    
            /*------------------------------------------
    
            --------------------------------------------
    
            Stripe Payment Code
    
            --------------------------------------------
    
            --------------------------------------------*/
    
     
    
            var $form = $(".require-validation");
    
    
    
            $('form.require-validation').bind('submit', function(e) {
    
                var $form = $(".require-validation"),
    
                    inputSelector = ['input[type=email]', 'input[type=password]',
    
                        'input[type=text]', 'input[type=file]',
    
                        'textarea'
                    ].join(', '),
    
                    $inputs = $form.find('.required').find(inputSelector),
    
                    $errorMessage = $form.find('div.error'),
    
                    valid = true;
    
                $errorMessage.addClass('hide');
    
    
    
                $('.has-error').removeClass('has-error');
    
                $inputs.each(function(i, el) {
    
                    var $input = $(el);
    
                    if ($input.val() === '') {
    
                        $input.parent().addClass('has-error');
    
                        $errorMessage.removeClass('hide');
    
                        e.preventDefault();
    
                    }
    
                });
    
    
    
                if (!$form.data('cc-on-file')) {
    
                    e.preventDefault();
    
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
    
                    Stripe.createToken({
    
                        number: $('.card-number').val(),
    
                        cvc: $('.card-cvc').val(),
    
                        exp_month: $('.card-expiry-month').val(),
    
                        exp_year: $('.card-expiry-year').val()
    
                    }, stripeResponseHandler);
    
                }
    
    
    
            });
    
    
    
            /*------------------------------------------
    
            --------------------------------------------
    
            Stripe Response Handler
    
            --------------------------------------------
    
            --------------------------------------------*/
    
            function stripeResponseHandler(status, response) {
    
                if (response.error) {
    
                    $('.error')
    
                        .removeClass('hide')
    
                        .find('.alert')
    
                        .text(response.error.message);
    
                } else {
    
                    /* token contains id, last4, and card type */
    
                    var token = response['id'];
    
    
    
                    $form.find('input[type=text]').empty();
    
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
    
                    $form.get(0).submit();
    
                }
    
            }
    
    
    
        });
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/payment/stripe.blade.php ENDPATH**/ ?>