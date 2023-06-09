<?php
/**
 * @package     Joomla.site
 * @subpackage  mod_j4_std_icons
 *
 * @copyright   Copyright (C) 2023-2023 thomas finnern
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

//use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

\defined('_JEXEC') or die;

global $awesome_version, $j3x_css_form_icons, $j4x_css_awesome_icons, $svg_icons; //, $iconsListByCharValue

// load css
$wa = $app->getDocument()->getWebAssetManager();
$wa->registerAndUseStyle('mod_j4_std_icons', 'mod_j4_std_icons/template.css');

$isDisplayTablesHeader = $params->get('isDisplayTablesHeader');
$isDisplayTechDetail = $params->get('isDisplayTechDetail');
$isDisplayIconTable_Icon = $params->get('isDisplayIconTable_Icon');
$isDisplayIconTable_Awesome = $params->get('isDisplayIconTable_Awesome');
$isDisplayBrandIconsTable_Awesome = $params->get('isDisplayBrandIconsTable_Awesome');

$font_size = $params->get('font_size');

?>
<div class="card" >
	<div class="card-body">
		<?php if (empty($j3x_css_form_icons) && empty($j4x_css_awesome_icons)): ?>
			<h3 class="card-title">
				<?php echo Text::_('MOD_J4_STD_ICONS_NO_ICONS'); ?>
			</h3>
			<h6 class="card-subtitle mb-2 text-muted">
				<?php echo Text::_('MOD_J4_STD_ICONS_NO_ICONS_DESC'); ?>
			</h6>

		<?php else: ?>

			<?php if($isDisplayTablesHeader): ?>
				<h2 class="card-title"><?php echo Text::_('MOD_J4_STD_ICONS_AVAILABLE_ICONS'); ?></h2>
				<div class="mb-3">
					<h6 class="card-subtitle mb-2 text-muted"><?php echo $awesome_version; ?></h6>
				</div>

				<?php if($isDisplayTechDetail): ?>
					<div class="mb-3">
						<h6 class="card-subtitle mb-2 text-muted"><?php echo Text::_('MOD_J4_STD_ICONS_AVAILABLE_ICONS_DESC'); ?></h6>
					</div>

				<?php endif; ?>
			<?php endif; ?>

			<!-- icomoon replacements ======================================================================== -->

			<?php if($isDisplayIconTable_Icon): ?>
				<div class="card mb-3 ">
					<div class="card-header">
						<h2>
							<span class="icon-joomla" aria-hidden="true"></span>
							<?php echo Text::_('MOD_J4_STD_ICONS_ICOMOON_ICONS'); ?>
						</h2>
					</div>

					<div class="card-body">

						<?php if($isDisplayTechDetail): ?>
							<div class="mb-3">
								<div class="card-title"><?php echo Text::_('MOD_J4_STD_ICONS_ICOMOON_ICONS_DESC'); ?></div>
							</div>
						<?php endif; ?>

						<nav class="quick-icons px-3 pb-3">
							<ul class="nav flex-wrap">
								<li class="quickicon quickicon-single">
									<a href="#">
										<div class="quickicon-info">
											<div class="quickicon-icon">
												<span class="icon-joomla" style="font-size: <?php echo $font_size; ?>px;" aria-hidden="true"></span>
											</div>
										</div>
										<div class="quickicon-name d-flex align-items-end">
											Joomla
										</div>
									</a>
								</li>

								<?php foreach ($j3x_css_form_icons as $item): ?>
									<li class="quickicon quickicon-single">
										<a href="#">
											<div class="quickicon-info">
												<div class="quickicon-icon">
													<i style="font-size: <?php echo $font_size; ?>px;" class="icon-<?php echo $item->name; ?>"></i>

												</div>
											</div>
											<div class="quickicon-name d-flex align-items-end">
												<?php echo $item->name; ?>
											</div>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</nav>
						<h5>Count: <span class="badge bg-secondary"><?php echo count ($j3x_css_form_icons); ?></span></h5>
					</div>
				</div>
			<?php endif; ?>

			<!-- font awesome no brands ======================================================================== -->

			<?php if($isDisplayIconTable_Awesome): ?>
				<div class="card mb-3 ">
					<div class="card-header">
						<h2>
							<span class="icon-joomla" aria-hidden="true"></span>
							<?php echo Text::_('MOD_J4_STD_ICONS_AWESOME_ICONS'); ?>
						</h2>
					</div>
					<div class="card-body">

						<?php if($isDisplayTechDetail): ?>
							<div class="mb-3">
								<div class="card-title"><?php echo Text::_('MOD_J4_STD_ICONS_AWESOME_ICONS_DESC'); ?></div>
							</div>
						<?php endif; ?>

						<nav class="quick-icons px-3 pb-3">
							<ul class="nav flex-wrap">
								<li class="quickicon quickicon-single">
									<a href="#">
										<div class="quickicon-info">
											<div class="quickicon-icon">
												<span class="icon-joomla" style="font-size: <?php echo $font_size; ?>px;" aria-hidden="true"></span>
											</div>
										</div>
										<div class="quickicon-name d-flex align-items-end">
											Joomla
										</div>
									</a>
								</li>

								<?php foreach ($svg_icons as $item): ?>
									<li class="quickicon quickicon-single">
										<a href="#">
											<div class="quickicon-info">
												<div class="quickicon-icon">
													<i style="font-size: <?php echo $font_size; ?>px;" class="fa fa-<?php echo $item; ?>"></i>

												</div>
											</div>
											<div class="quickicon-name d-flex align-items-end">
												<?php if ( in_array ($item, $j4x_css_awesome_icons)): ?>
													<strong><?php echo $item; ?></strong>
												<?php else: ?>
													<del>
													<?php echo $item; ?>
													</del>
												<?php endif ?>
											</div>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</nav>
						<h5>Count: <span class="badge bg-secondary"><?php echo count ($svg_icons); ?></span></h5>

					</div>
				</div>
			<?php endif; ?>

			<!-- font awesome brands only ======================================================================== -->

            <?php if($isDisplayBrandIconsTable_Awesome): ?>

				<div class="card mb-3 ">
					<div class="card-header">
						<h2>
							<span class="icon-joomla" aria-hidden="true"></span>
							<?php echo Text::_('MOD_J4_STD_ICONS_AWESOME_BRAND_ICONS'); ?>
						</h2>
					</div>
					<div class="card-body">

                        <?php if($isDisplayTechDetail): ?>
                            <div class="mb-3">
                                <div class="card-title"><?php echo Text::_('MOD_J4_STD_ICONS_AWESOME_BRAND_ICONS_DESC'); ?></div>
                            </div>
                        <?php endif; ?>

                        <nav class="quick-icons px-3 pb-3">
                            <ul class="nav flex-wrap">
                                <li class="quickicon quickicon-single">
                                    <a href="#">
                                        <div class="quickicon-info">
                                            <div class="quickicon-icon">
                                                <span class="icon-joomla" style="font-size: <?php echo $font_size; ?>px;" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="quickicon-name d-flex align-items-end">
                                            Joomla
                                        </div>
                                    </a>
                                </li>

                                <?php foreach ($svg_brand_icons as $item): ?>
                                    <li class="quickicon quickicon-single">
                                        <a href="#">
                                            <div class="quickicon-info">
                                                <div class="quickicon-icon">
                                                    <i style="font-size: <?php echo $font_size; ?>px;" class="fa fa-<?php echo $item; ?>"></i>

                                                </div>
                                            </div>
                                            <div class="quickicon-name d-flex align-items-end">
                                                <?php if ( in_array ($item, $j4x_css_awesome_icons)): ?>
                                                    <strong><?php echo $item; ?></strong>
                                                <?php else: ?>
                                                    <del>
                                                    <?php echo $item; ?>
                                                    </del>
                                                <?php endif ?>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                        <h5>Count: <span class="badge bg-secondary"><?php echo count ($svg_brand_icons); ?></span></h5>

					</div>
				</div>
            <?php endif; ?>
		<?php endif; ?>
	</div>
</div>
