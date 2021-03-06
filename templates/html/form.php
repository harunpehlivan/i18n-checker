	<div id="frontforms">
		<ul id="tabset_tabs">
			<li><a href="#validate-by-uri"><?php _lang('validate-by-uri') ?></a></li><li><a href="#validate-by-upload"><?php _lang('validate-by-upload') ?></a></li>
			<?php /* <li><a href="#validate-by-input"><?php _lang('validate-by-input') ?></a></li> */ ?> 
		</ul>

		<div id="fields">
			<form action="check<?php print Conf::get('show_extension') ? '.php' : '' ?>" method="get" id="validate-by-uri" class="ucn_form">
				<fieldset>
					<legend><?php _lang('legend-by-uri') ?></legend>
					<div class="input">
						<p class="instructions"><?php _lang('instruction-by-uri') ?></p>
						<p>
							<label title="<?php _lang('uri_title') ?>" for="ucn_uri"><span><?php _lang('uri_label') ?></span>
								<input type="text" name="uri" id="ucn_uri" size="45" value="<?php if (isset($uri)) echo htmlentities($uri,ENT_COMPAT,'UTF-8'); ?>"/>
							</label>
						</p>
					</div>
					<?php /* <fieldset class="options advanced toggles">
						<legend title="Show/Hide extra options">Options</legend>
						<div class="options">
							<label title="Show source" for="source">
								<span>Show source</span>
								<input type="checkbox" name="show_source" id="show_source" value="true" />
							</label>
						</div>
					</fieldset> */ ?>
					<div class="submit">
						<?php if(isset($_REQUEST['lang']) && $_REQUEST['lang'] == $lang) { ?>
						<input type="hidden" name="lang" value="<?php echo $lang ?>" class="lang" />
						<?php } ?>
						<input type="submit" value="<?php _lang('submit') ?>" />
					</div>
				</fieldset>
			</form>
			<form action="check<?php print Conf::get('show_extension') ? '.php' : ''; ?>" method="post" enctype="multipart/form-data" id="validate-by-upload" class="ucn_form">
				<fieldset>
					<legend><?php _lang('legend-by-upload') ?></legend>
					<div class="input">
						<p class="instructions"><?php _lang('instruction-by-upload') ?></p>
						<p>
							<label title="<?php _lang('instruction-by-upload') ?>" for="ucn_file"><span><?php _lang('local_file_label') ?></span>
								<input type="file" id="ucn_file" name="file" size="30" />
							</label>
							<label><span style="padding-left:5px"><?php _lang('label_mimetype')?></span><select name="mimetype" class="option_input">
							 		<option value="auto" selected="selected">auto</option>
									<option value="html">text/html</option>
									<option value="xml">application/xhtml+xml</option>
								</select>
							</label>
						</p>
					</div>
					<div class="submit">
						<?php if(isset($_REQUEST['lang']) && $_REQUEST['lang'] == $lang) { ?>
						<input type="hidden" name="lang" value="<?php echo $lang ?>" class="lang" />
						<?php } ?>
						<input type="submit" value="<?php _lang('submit') ?>" />
					</div>
				</fieldset>
			</form>
			<?php /*<form action="check" method="post" id="validate-by-input" class="ucn_form">
				<fieldset>
					<legend><?php _lang('legend-by-input') ?></legend>
					<div class="input">
						<p class="instructions"><?php _lang('instruction-by-input') ?></p>
						<p>
							<textarea id="ucn_text" name="text" rows="12" cols="70"><?php #$!param_text ?></textarea>
						</p> 
					</div>
					<div class="submit">
						<?php if(isset($_REQUEST['lang']) && $_REQUEST['lang'] == $lang) { ?>
						<input type="hidden" name="lang" value="<?php echo $lang ?>" class="lang" />
						<?php } ?>
						<input type="submit" value="<?php _lang('submit') ?>" />
					</div>
				</fieldset>
			</form> */ ?>
		</div>
	</div>