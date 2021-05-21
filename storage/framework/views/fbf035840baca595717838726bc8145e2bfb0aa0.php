<div class="container-fluid black_back">

	<div class="row footer_statement">
		<span>リスクに関する警告:</span><br>
		<span>外国為替金取引やデリバティブ取引は高リスクを伴います。損失に耐えうる範囲の資金でお取引されることをお勧め致します。デリバティブ取引は全ての投資家に適しているわけではございません。取引に伴うリスクを充分に理解された上で、必要に応じて専門家にご相談下さい。</span><br>
		<span>金融サービスガイド(FSG)および金融商品開示文書(PDS)は、当GOOD ENOUGH FX Ltdのウェブサイトよりご確認ください。</span><br>
		<span>GOOD ENOUGH FX Ltdでデリバティブ取引を始められる前に、金融サービスガイド(FSG)および金融商品開示文書(PDS)の内容を慎重に考慮してください。</span><br><br>
		<span>制限地域:</span><br>
		<span>米国、オーストラリア、カナダ、ニュージーランド、朝鮮民主主義人民共和国、イラン、バヌアツ共和国のお客様もしくはFATFまたは同様の国際機関がAML-CFT対策が万全でないとしている特定管轄区地域在住のお客様を対象としておりませんので、ご注意ください。</span><br>
		<span>当ウェブサイト上の情報は、FXおよび/またはCFD商品取引が法律や規制によって制限または禁止されている国在住のお客様を対象としておりません。</span><br>
	</div>

    <div class="row footer_menu">
		<div class="footer-menu-align">
			<?php $__currentLoopData = $global->footer_table_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-<?php echo e($row[2]); ?> menu active pad_vertical2">
				<a href="<?php echo e($row[1]); ?>">
					<?php echo e($row[0]); ?>

				</a>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<div class="col-md-3 menu active">

		</div>
	</div>

	<div class="row textcenter">
		<div class="col-md-5 menu active">

		</div>
		<div class="col-md-2 menu active pad_vertical">
			<img src="<?php echo e(asset('img/basic/logo.png')); ?>" class="logo">
		</div>
		<div class="col-md-5 copyright">
			<span> Copyright © 2014-2021 GOOD ENOUGH. All rights reserved. </span>
		</div>
	</div>
</div><?php /**PATH E:\Gitub project\good\resources\views/layouts/footer.blade.php ENDPATH**/ ?>