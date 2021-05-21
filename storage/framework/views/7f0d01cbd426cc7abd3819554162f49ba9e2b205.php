<?php echo $__env->make('personal.over_menu3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php if($withdraw_type=="banks"): ?>
<?php echo $__env->make('deposits_parts.withdrawal_bank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($withdraw_type=="crypt"): ?>
<?php echo $__env->make('deposits_parts.withdrawal_crypt', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/deposits_parts/withdrawal.blade.php ENDPATH**/ ?>