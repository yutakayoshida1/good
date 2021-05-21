<?php if($kind==null): ?>
    <?php echo $__env->make('deposits_parts.cryptocurrency_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('deposits_parts.cryptocurrency_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/deposits_parts/cryptocurrency.blade.php ENDPATH**/ ?>