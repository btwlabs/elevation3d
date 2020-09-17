/**
 * Trigger AJAX request to save state when the WooCommerce notice is dismissed.
 *
 * @version 2.3.0
 *
 * @author StudioPress
 * @license GPL-2.0-or-later
 * @package GenesisELV3D
 */

jQuery( document ).on(
	'click', '.genesis-elv3d-woocommerce-notice .notice-dismiss', function() {

		jQuery.ajax(
			{
				url: ajaxurl,
				data: {
					action: 'genesis_elv3d_dismiss_woocommerce_notice'
				}
			}
		);

	}
);
