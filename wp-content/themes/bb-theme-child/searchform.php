<form class="custom-search-form" method="get" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr_x( 'Type and press Enter to search.', 'Search form mouse hover title.', 'fl-automator' ); ?>">
	<input type="search" class="fl-search-input form-control form-custom" name="s" value="<?php echo esc_attr_x( 'Search', 'Search form field placeholder text.', 'fl-automator' ); ?>" onfocus="if (this.value == '<?php echo esc_attr_x( 'Search', 'Search form field placeholder text.', 'fl-automator' ); ?>') { this.value = ''; }" onblur="if (this.value == '') this.value='<?php echo esc_attr_x( 'Search', 'Search form field placeholder text.', 'fl-automator' ); ?>';" />
    <button type="submit" class="custom-search-submit"><?php echo '<i class="fas fa-search"></i>'; ?></button>
</form>
