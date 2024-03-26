<?php
global $post; 
$promika_tabs = get_field('promika_tabs', $post->ID);
?>

<?php if ($promika_tabs) : ?>
	<div class="tabcontainer   top_tab   avia-builder-el-6  el_after_av_one_full  avia-builder-el-last promika_maintabs ">
		
		<div class="tab_titles">
			<?php foreach($promika_tabs as $key=>$promika_tabs_): ?>
				<?php if( $key == 0) { $active = 'active_tab'; } else {$active = ''; } ?>
				<?php echo '<div data-fake-id="#tab-id-'.$key.'" class="tab tab_counter_'.$key.' '.$active.'" itemprop="headline">'.$promika_tabs_['promika_tabs_title'].'</div>'; ?>
		    <?php endforeach; ?>
		</div>

		<?php foreach($promika_tabs as $key=>$promika_tabs_): ?>
			<?php if( $key == 0) { $active_tab_content = 'active_tab_content'; } else {$active_tab_content = ''; } ?>
			<?php if( $key == 0) { $active = 'active_tab'; } else {$active = ''; } ?>
			<section class="av_tab_section" itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost"> 
				<div data-fake-id="#tab-id-<?php echo $key;?>" class="tab fullsize-tab <?php echo $active; ?>" itemprop="headline"><?php echo $promika_tabs_['promika_tabs_title']; ?></div>
				<div id="tab-id-<?php echo $key;?>-container" class="tab_content <?php echo $active_tab_content; ?>">
					<div class="tab_inner_content invers-color" itemprop="text">
						<p><?php echo $promika_tabs_['promika_tabs_descriptions']; ?></p>
					</div>
				</div>
			</section>
	    <?php endforeach; ?>

    </div>
<?php endif; ?>	

<!-- <div class="tabcontainer   top_tab   avia-builder-el-6  el_after_av_one_full  avia-builder-el-last  ">
	<div class="tab_titles">
		<div data-fake-id="#tab-id-1" class="tab tab_counter_0 active_tab" itemprop="headline">Tab 1</div>
		<div data-fake-id="#tab-id-2" class="tab  tab_counter_1" itemprop="headline">Tab 2</div>
		<div data-fake-id="#tab-id-3" class="tab  tab_counter_2" itemprop="headline">Tab 3</div>
		<div data-fake-id="#tab-id-4" class="tab  tab_counter_3" itemprop="headline">tab4</div>
	</div>

<section class="av_tab_section" itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost"> <div data-fake-id="#tab-id-1" class="tab fullsize-tab active_tab" itemprop="headline">Tab 1</div>
	<div id="tab-id-1-container" class="tab_content active_tab_content">
		<div class="tab_inner_content invers-color" itemprop="text">
			<p>content1</p>
		</div>
	</div>
</section>

<section class="av_tab_section" itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost"> <div data-fake-id="#tab-id-2" class="tab  fullsize-tab" itemprop="headline">Tab 2</div>
<div id="tab-id-2-container" class="tab_content">
<div class="tab_inner_content invers-color" itemprop="text">
<p>content2</p>
</div>
</div>
</section>
<section class="av_tab_section" itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost"> <div data-fake-id="#tab-id-3" class="tab  fullsize-tab" itemprop="headline">Tab 3</div>
<div id="tab-id-3-container" class="tab_content">
<div class="tab_inner_content invers-color" itemprop="text">
<p>content3</p>
</div>
</div>
</section>
<section class="av_tab_section" itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost"> <div data-fake-id="#tab-id-4" class="tab  fullsize-tab" itemprop="headline">tab4</div>
<div id="tab-id-4-container" class="tab_content">
<div class="tab_inner_content invers-color" itemprop="text">
<p>conten4</p>
</div>
</div>
</section>
</div> -->