<?php echo $__env->make('personal.over_menu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="padding20">


<?php if($type=='banks'): ?>
<?php echo $__env->make('deposits_parts.bank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


<?php if($type=='credit_card'): ?>
<?php echo $__env->make('deposits_parts.credit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($type=='alternative'): ?>
<?php echo $__env->make('deposits_parts.cryptocurrency', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($type=='withdrawal'): ?>
<?php echo $__env->make('deposits_parts.withdrawal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

</div>
<?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/personal/DepositsAndWithdrawals_main.blade.php ENDPATH**/ ?>