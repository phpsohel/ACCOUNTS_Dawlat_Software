<?php $__env->startSection('home_content'); ?>

<?php if(Auth::user()): ?>
<?php
    $customer = App\Customer::orderBy('customers.id', 'ASC')->where('users.role_id', '=', Auth::user()->role_id)->where('customers.user_id', '=', Auth::user()->id)->join('users', 'users.id', '=', 'customers.user_id')->first();
?>
<?php endif; ?>
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <ul class="checkout-progress-bar">
                    <li class="active">
                        <span>Shipping</span>
                    </li>
                    
                </ul>
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Shipping Address</h2>

                               

                                <form action="<?php echo e(route('place-order')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="user_ip" value="<?php echo e(request()->ip()); ?>">


                                    <?php if(Auth::user()): ?>
                                    <div class="form-group required-field">
                                        <label>Full Name </label>
                                        <input type="text" class="form-control" name="name" required value="<?php echo e(Auth::user()->name); ?>">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php if(!Auth::user()): ?>
                                    <div class="form-group required-field">
                                        <label>Full Name </label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>

                                    <?php if(Auth::user()): ?>
                                    <div class="form-group">
                                        <label>Company Name </label>
                                        <input type="text" class="form-control" name="company_name" value="<?php echo e(Auth::user()->company_name); ?>">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php if(!Auth::user()): ?>
                                    <div class="form-group">
                                        <label>Company Name </label>
                                        <input type="text" class="form-control" name="company_name">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>


                                    <?php if(Auth::user()): ?>
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="text" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php if(!Auth::user()): ?>
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="text" class="form-control" name="email">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>


                                    <?php if(Auth::user()): ?>
                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input type="number" class="form-control" name="phone_number" required value="<?php echo e(Auth::user()->phone); ?>">
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php if(!Auth::user()): ?>
                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input type="number" class="form-control" name="phone_number" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>




                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id == 5): ?>
                                    <div class="form-group required-field">
                                        <label>Address </label>
                                        <input type="text" class="form-control" name="address" required value="<?php echo e($customer->address); ?>">
                                        
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id != 5): ?>
                                    <div class="form-group required-field">
                                        <label>Address </label>
                                        <input type="text" class="form-control" name="address" required>
                                        
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(!Auth::user()): ?>
                                    <div class="form-group required-field">
                                        <label>Address </label>
                                        <input type="text" class="form-control" name="address" required>
                                        
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>



                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id == 5): ?>
                                   <div class="form-group required-field">
                                        <label>City </label>
                                        <input type="text" class="form-control" name="city" required value="<?php echo e($customer->city); ?>">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id != 5): ?>
                                    <div class="form-group required-field">
                                        <label>City </label>
                                        <input type="text" class="form-control" name="city" required>
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(!Auth::user()): ?>
                                    <div class="form-group required-field">
                                        <label>City </label>
                                        <input type="text" class="form-control" name="city" required>
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>





                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id == 5): ?>
                                    <div class="form-group">
                                        <label>State </label>
                                        <input type="text" class="form-control" name="state" value="<?php echo e($customer->state); ?>">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id != 5): ?>
                                    <div class="form-group">
                                        <label>State </label>
                                        <input type="text" class="form-control" name="state">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(!Auth::user()): ?>
                                    <div class="form-group">
                                        <label>State </label>
                                        <input type="text" class="form-control" name="state">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>





                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id == 5): ?>
                                    <div class="form-group">
                                        <label>Postal Code </label>
                                        <input type="number" class="form-control" name="postal_code" value="<?php echo e($customer->postal_code); ?>">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id != 5): ?>
                                     <div class="form-group">
                                        <label>Postal Code </label>
                                        <input type="number" class="form-control" name="postal_code">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(!Auth::user()): ?>
                                     <div class="form-group">
                                        <label>Postal Code </label>
                                        <input type="number" class="form-control" name="postal_code">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>

                                    



                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id == 5): ?>
                                    <div class="form-group">
                                        <label>Country  </label>
                                        <input type="text" class="form-control" name="country" value="<?php echo e($customer->country); ?>">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(Auth::user()): ?>
                                    <?php if(Auth::user()->role_id != 5): ?>
                                    <div class="form-group">
                                        <label>Country  </label>
                                        <input type="text" class="form-control" name="country">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(!Auth::user()): ?>
                                    <div class="form-group">
                                        <label>Country  </label>
                                        <input type="text" class="form-control" name="country">
                                    </div><!-- End .form-group -->
                                    <?php endif; ?>
                               
                            </li>

                            <li>
                               
                            </li>
                        </ul>
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="order-summary">
                            <h3>Summary</h3>

                            <h4>
                                <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section"><?php echo e($count); ?> products in Cart</a>
                            </h4>

                            <div class="collapse" id="order-cart-section">
                                <table class="table table-mini-cart">
                                    <tbody>

                                        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="hidden" name="cart_ip" value="<?php echo e($row->user_ip); ?>">
                                        <tr>
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="<?php echo e(url('public/images/product', $row->product->image)); ?>" alt="product">
                                                    </a>
                                                </figure>
                                                <div>
                                                    <h2 class="product-title">
                                                        <a href="product.html"><?php echo e($row->product->name); ?></a>
                                                    </h2>

                                                    <span class="product-qty">Qty: <?php echo e($row->product_quantity); ?></span>
                                                </div>
                                            </td>
                                            <td class="price-col">৳<?php echo e($row->product_price * $row->product_quantity); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        
                                    </tbody>    
                                </table>

                                <div>
                                    <input type="hidden" name="shipping_cost" value="<?php echo e($shipping_cost); ?>">
                                    <p>Shipping Cost: <strong>৳<?php echo e($shipping_cost); ?>

                                    <?php if($shipping_cost == 60): ?>
                                    (Inside Dhaka)
                                    <?php else: ?>
                                    (Outside Dhaka)
                                    <?php endif; ?>
                                </strong></p>
                                    <p>Total: <strong> ৳<?php echo e($shipping_cost + $subtotal); ?></strong> </p>
                                </div>
                                <input type="hidden" name="shipping_cost" value="<?php echo e($shipping_cost); ?>">
                            </div><!-- End #order-cart-section -->
                        </div><!-- End .order-summary -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-steps-action">
                            <button type="submit" class="btn btn-primary float-left"> Place Order</button>
                        </div><!-- End .checkout-steps-action -->
                    </div><!-- End .col-lg-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
 </form>
            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/eshop/checkout.blade.php ENDPATH**/ ?>