<?php
/**
 * Happy Day order confirmation.
 *
 * @package Happy_Day
 * @version 8.1.0
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="woocommerce-order hd-thankyou">
	<?php if ( $order ) : ?>
		<?php do_action( 'woocommerce_before_thankyou', $order->get_id() ); ?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>
			<section class="hd-thankyou-status hd-thankyou-status--failed">
				<span class="hd-thankyou-status-icon" aria-hidden="true"><i class="fa-solid fa-triangle-exclamation"></i></span>
				<div>
					<span class="hd-thankyou-eyebrow"><?php esc_html_e( 'Payment needs attention', 'happy-day' ); ?></span>
					<h2><?php esc_html_e( 'Your order has not been completed yet.', 'happy-day' ); ?></h2>
					<p><?php esc_html_e( 'The payment could not be processed. You can try again or contact Happy Day Toronto if you need help.', 'happy-day' ); ?></p>
					<div class="hd-thankyou-actions">
						<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="hd-btn"><span><?php esc_html_e( 'Try Payment Again', 'happy-day' ); ?></span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hd-thankyou-secondary"><i class="fa-regular fa-envelope" aria-hidden="true"></i><?php esc_html_e( 'Contact us', 'happy-day' ); ?></a>
					</div>
				</div>
			</section>
		<?php else : ?>
			<section class="hd-thankyou-status" aria-labelledby="hd-thankyou-title">
				<span class="hd-thankyou-status-icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
				<div class="hd-thankyou-status-copy">
					<span class="hd-thankyou-eyebrow"><?php esc_html_e( 'Order received', 'happy-day' ); ?></span>
					<h2 id="hd-thankyou-title"><?php esc_html_e( 'Thank you for choosing Happy Day Toronto.', 'happy-day' ); ?></h2>
					<p>
						<?php
						if ( $order->get_billing_email() ) {
							echo wp_kses_post( sprintf( __( 'A confirmation has been sent to <strong>%s</strong>. Our team will review your order and contact you if any event details need to be confirmed.', 'happy-day' ), esc_html( $order->get_billing_email() ) ) );
						} else {
							esc_html_e( 'Our team will review your order and contact you if any event details need to be confirmed.', 'happy-day' );
						}
						?>
					</p>
					<div class="hd-thankyou-actions">
						<a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="hd-btn"><span><?php esc_html_e( 'Continue Shopping', 'happy-day' ); ?></span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hd-thankyou-secondary"><i class="fa-regular fa-envelope" aria-hidden="true"></i><?php esc_html_e( 'Need help with this order?', 'happy-day' ); ?></a>
					</div>
				</div>
			</section>

			<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details hd-thankyou-overview">
				<li class="woocommerce-order-overview__order order"><i class="fa-solid fa-hashtag" aria-hidden="true"></i><span><?php esc_html_e( 'Order number', 'happy-day' ); ?><strong><?php echo esc_html( $order->get_order_number() ); ?></strong></span></li>
				<li class="woocommerce-order-overview__date date"><i class="fa-regular fa-calendar" aria-hidden="true"></i><span><?php esc_html_e( 'Order date', 'happy-day' ); ?><strong><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></strong></span></li>
				<?php if ( $order->get_billing_email() ) : ?>
					<li class="woocommerce-order-overview__email email"><i class="fa-regular fa-envelope" aria-hidden="true"></i><span><?php esc_html_e( 'Email', 'happy-day' ); ?><strong><?php echo esc_html( $order->get_billing_email() ); ?></strong></span></li>
				<?php endif; ?>
				<li class="woocommerce-order-overview__total total"><i class="fa-solid fa-receipt" aria-hidden="true"></i><span><?php esc_html_e( 'Order total', 'happy-day' ); ?><strong><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></strong></span></li>
				<?php if ( $order->get_payment_method_title() ) : ?>
					<li class="woocommerce-order-overview__payment-method method"><i class="fa-regular fa-credit-card" aria-hidden="true"></i><span><?php esc_html_e( 'Payment method', 'happy-day' ); ?><strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong></span></li>
				<?php endif; ?>
			</ul>

			<section class="hd-thankyou-next" aria-labelledby="hd-thankyou-next-title">
				<header><span><?php esc_html_e( 'What happens next', 'happy-day' ); ?></span><h2 id="hd-thankyou-next-title"><?php esc_html_e( 'From order to celebration', 'happy-day' ); ?></h2></header>
				<div class="hd-thankyou-steps">
					<article><b>01</b><div><h3><?php esc_html_e( 'We review the details', 'happy-day' ); ?></h3><p><?php esc_html_e( 'We check your selected product, colours, personalization and contact information.', 'happy-day' ); ?></p></div></article>
					<article><b>02</b><div><h3><?php esc_html_e( 'We confirm what matters', 'happy-day' ); ?></h3><p><?php esc_html_e( 'If timing, setup or customization needs clarification, our team will contact you directly.', 'happy-day' ); ?></p></div></article>
					<article><b>03</b><div><h3><?php esc_html_e( 'We prepare your order', 'happy-day' ); ?></h3><p><?php esc_html_e( 'Once the details are confirmed, your decoration moves into preparation for the celebration.', 'happy-day' ); ?></p></div></article>
				</div>
			</section>
		<?php endif; ?>

		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
	<?php else : ?>
		<section class="hd-thankyou-status">
			<span class="hd-thankyou-status-icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
			<div><span class="hd-thankyou-eyebrow"><?php esc_html_e( 'Order received', 'happy-day' ); ?></span><h2><?php esc_html_e( 'Thank you. Your order has been received.', 'happy-day' ); ?></h2><p><?php esc_html_e( 'Please keep your confirmation email for your records.', 'happy-day' ); ?></p></div>
		</section>
	<?php endif; ?>
</div>
