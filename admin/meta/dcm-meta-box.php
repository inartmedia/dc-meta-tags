<table class="form-table">
	<tbody>

		<?php if ( $this->options['elem_contributor'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_contributor"><?php _e("Contributor", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				<input type="text" id="elem_contributor" name="dcm_elem_contributor" value="<?php echo $values['elem_contributor']; ?>" size="25" />
			</td>
		</tr>
		<?php endif; ?>

		<?php if ( $this->options['elem_coverage'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_coverage"><?php _e("Coverage", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				<input type="text" id="elem_coverage" name="dcm_elem_coverage" value="<?php echo $values['elem_coverage']; ?>" size="25" />
			</td>
		</tr>
		<?php endif; ?>

		<?php if ( $this->options['elem_creator'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_creator"><?php _e("Creator", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				<input type="text" id="elem_creator" name="dcm_elem_creator" value="<?php echo $values['elem_creator']; ?>" size="25" />
			</td>
		</tr>
		<?php endif; ?>

		<!-- // No date for now -->

		<?php if ( $this->options['elem_description'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_description"><?php _e("Description", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				<textarea type="text" id="elem_description" name="dcm_elem_description" class="large-text" rows="3"><?php echo $values['elem_description']; ?></textarea>
			</td>
		</tr>
		<?php endif; ?>

		<!-- // No format -->
		<!-- // No identifier -->

		<?php if ( $this->options['elem_language'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_language"><?php _e("Language", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				<input type="text" id="elem_language" name="dcm_elem_language" value="<?php echo $values['elem_language']; ?>" size="25" />
			</td>
		</tr>
		<?php endif; ?>

		<?php if ( $this->options['elem_publisher'] == 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_publisher"><?php _e("Publisher", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				<input type="text" id="elem_publisher" name="dcm_elem_publisher" value="<?php echo $values['elem_publisher']; ?>" size="25" />
			</td>
		</tr>
		<?php endif; ?>

		<?php if ( $this->options['elem_relation'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_relations"><?php _e("Relations", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				
				<ul id="elem_relation-repeatable" class="custom_repeatable">
				<?php 
					$i = 0;
					if ( $values['elem_relation'] ) {
						foreach( $values['elem_relation'] as $relation ) {
				?>

						<li>
							<input type="text" name="dcm_elem_relation[<?php echo $i; ?>]" id="elem_relation" value="<?php echo $relation; ?>" size="30" /> 
							<a class="repeatable-remove button" href="#"><?php _e('Remove', 'dc-meta-tags'); ?></a>
						</li>

				<?php
							$i++;
						}
					} else {
				?>

						<li>
							<input type="text" name="dcm_elem_relation[<?php echo $i; ?>]" id="elem_relation" value="" size="30" /> 
							<a class="repeatable-remove button" href="#"><?php _e('Remove', 'dc-meta-tags'); ?></a>
						</li>
				<?php
					}
				?>

			</ul>
			<a class="repeatable-add button" href="#"><?php _e('Add relation', 'dc-meta-tags'); ?></a>
			</td>
		</tr>
		<?php endif; ?>

		<?php if ( $this->options['elem_rights'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_rights"><?php _e("Rights", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				<input type="text" id="elem_rights" name="dcm_elem_rights" value="<?php echo $values['elem_rights']; ?>" size="25" />
			</td>
		</tr>
		<?php endif; ?>

		<?php if ( $this->options['elem_source'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_sources"><?php _e("Sources", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				
				<ul id="elem_source-repeatable" class="custom_repeatable">
				<?php 
					$i = 0;
					if ( $values['elem_source'] ) {
						foreach( $values['elem_source'] as $source ) {
				?>

						<li>
							<input type="text" name="dcm_elem_source[<?php echo $i; ?>]" id="elem_source" value="<?php echo $source; ?>" size="30" /> 
							<a class="repeatable-remove button" href="#"><?php _e('Remove', 'dc-meta-tags'); ?></a>
						</li>

				<?php
							$i++;
						}
					} else {
				?>

						<li>
							<input type="text" name="dcm_elem_source[<?php echo $i; ?>]" id="elem_source" value="" size="30" /> 
							<a class="repeatable-remove button" style="display: none" href="#"><?php _e('Remove', 'dc-meta-tags'); ?></a>
						</li>
				<?php
					}
				?>

			</ul>
			<a class="repeatable-add button" href="#"><?php _e('Add source', 'dc-meta-tags'); ?></a>
			</td>
		</tr>
		<?php endif; ?>

		<?php if ( $this->options['elem_subject'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_subject"><?php _e("Subject", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				<input type="text" id="elem_subject" name="dcm_elem_subject" value="<?php echo $values['elem_subject']; ?>" size="25" />
			</td>
		</tr>
		<?php endif; ?>

		<?php if ( $this->options['elem_title'] === 1 ) : ?>
		<tr>
			<th scope="row">
				<label for="elem_title"><?php _e("Title", 'dc-meta-tags' ); ?></label>
			</th>
			<td>
				<input type="text" id="elem_title" name="dcm_elem_title" value="<?php echo $values['elem_title']; ?>" size="25" />
			</td>
		</tr>
		<?php endif; ?>

	</tbody>
</table>